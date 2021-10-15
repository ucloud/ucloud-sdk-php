<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UCDN\Apis;

use UCloud\Core\Response\Response;
use UCloud\UCDN\Models\DomainConfigInfo;
use UCloud\UCDN\Models\OriginConf;
use UCloud\UCDN\Models\AccessControlConf;
use UCloud\UCDN\Models\ReferConf;
use UCloud\UCDN\Models\CacheAllConfig;
use UCloud\UCDN\Models\CacheConf;
use UCloud\UCDN\Models\CacheConf;
use UCloud\UCDN\Models\CacheKeyInfo;
use UCloud\UCDN\Models\AdvancedConf;

class GetUcdnDomainConfigResponse extends Response
{
    

    /**
     * DomainList: 获取的域名信息，具体参考下面DomainConfig
     *
     * @return DomainConfigInfo[]|null
     */
    public function getDomainList()
    {
        $items = $this->get("DomainList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DomainConfigInfo($item));
        }
        return $result;
    }

    /**
     * DomainList: 获取的域名信息，具体参考下面DomainConfig
     *
     * @param DomainConfigInfo[] $domainList
     */
    public function setDomainList(array $domainList)
    {
        $result = [];
        foreach ($domainList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
