<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace UCloud\Sandbox\Apis;

use UCloud\Core\Response\Response;
use UCloud\Sandbox\Models\Site;
use UCloud\Sandbox\Models\SiteIPAccess;

class ListSandboxSitesResponse extends Response
{
    

    /**
     * Sites: 站点空间列表
     *
     * @return Site[]|null
     */
    public function getSites()
    {
        $items = $this->get("Sites");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Site($item));
        }
        return $result;
    }

    /**
     * Sites: 站点空间列表
     *
     * @param Site[] $sites
     */
    public function setSites(array $sites)
    {
        $result = [];
        foreach ($sites as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * CustomTargetDomain: 目标域名地址
     *
     * @return string|null
     */
    public function getCustomTargetDomain()
    {
        return $this->get("CustomTargetDomain");
    }

    /**
     * CustomTargetDomain: 目标域名地址
     *
     * @param string $customTargetDomain
     */
    public function setCustomTargetDomain($customTargetDomain)
    {
        $this->set("CustomTargetDomain", $customTargetDomain);
    }
}
