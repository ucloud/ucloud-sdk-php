<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\UPhone\Apis;

use UCloud\Core\Response\Response;
use UCloud\UPhone\Models\AppVersionInstance;

class DescribeUPhoneAppVersionResponse extends Response
{
    

    /**
     * TotalCount: AppVersionInstance总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: AppVersionInstance总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * AppVersions: 云手机应用版本实例列表，每项参数可见数据模型 [AppVersionInstance](#AppVersionInstance)
     *
     * @return AppVersionInstance[]|null
     */
    public function getAppVersions()
    {
        $items = $this->get("AppVersions");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AppVersionInstance($item));
        }
        return $result;
    }

    /**
     * AppVersions: 云手机应用版本实例列表，每项参数可见数据模型 [AppVersionInstance](#AppVersionInstance)
     *
     * @param AppVersionInstance[] $appVersions
     */
    public function setAppVersions(array $appVersions)
    {
        $result = [];
        foreach ($appVersions as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
