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
use UCloud\UPhone\Models\AppInstance;

class DescribeUPhoneAppResponse extends Response
{
    

    /**
     * TotalCount: AppInstance总数
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: AppInstance总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * Apps: 云手机应用实例列表，每项参数可见数据模型 [AppInstance](#appInstance)
     *
     * @return AppInstance[]|null
     */
    public function getApps()
    {
        $items = $this->get("Apps");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AppInstance($item));
        }
        return $result;
    }

    /**
     * Apps: 云手机应用实例列表，每项参数可见数据模型 [AppInstance](#appInstance)
     *
     * @param AppInstance[] $apps
     */
    public function setApps(array $apps)
    {
        $result = [];
        foreach ($apps as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
