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
use UCloud\UPhone\Models\UPhoneDetailInstance;
use UCloud\UPhone\Models\AppVersionInstance;

class DescribeUPhoneDetailByAppResponse extends Response
{
    

    /**
     * TotalCount: UPhoneWithAppVersion总数
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: UPhoneWithAppVersion总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * UPhoneDetails: 带有应用版本的云手机实例，具体参数见数据模型 [UPhoneDetailInstanc](#UPhoneDetailInstanc)
     *
     * @return UPhoneDetailInstance[]|null
     */
    public function getUPhoneDetails()
    {
        $items = $this->get("UPhoneDetails");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UPhoneDetailInstance($item));
        }
        return $result;
    }

    /**
     * UPhoneDetails: 带有应用版本的云手机实例，具体参数见数据模型 [UPhoneDetailInstanc](#UPhoneDetailInstanc)
     *
     * @param UPhoneDetailInstance[] $uPhoneDetails
     */
    public function setUPhoneDetails(array $uPhoneDetails)
    {
        $result = [];
        foreach ($uPhoneDetails as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
