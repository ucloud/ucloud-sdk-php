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
namespace UCloud\UES\Apis;

use UCloud\Core\Response\Response;
use UCloud\UES\Models\AppVersion;

class GetUESAppVersionResponse extends Response
{
    

    /**
     * TotalCount: 服务应用版本个数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 服务应用版本个数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * AppVersionList: 服务应用版本列表
     *
     * @return AppVersion[]|null
     */
    public function getAppVersionList()
    {
        $items = $this->get("AppVersionList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AppVersion($item));
        }
        return $result;
    }

    /**
     * AppVersionList: 服务应用版本列表
     *
     * @param AppVersion[] $appVersionList
     */
    public function setAppVersionList(array $appVersionList)
    {
        $result = [];
        foreach ($appVersionList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
