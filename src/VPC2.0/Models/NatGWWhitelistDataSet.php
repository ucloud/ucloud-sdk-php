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

namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

use UCloud\VPC\Models\DescribeWhiteListResourceSimpleResponse;
use UCloud\VPC\Models\DescribeWhiteListResourceResponse;
use UCloud\VPC\Models\DescribeWhiteListResponse;
use UCloud\VPC\Models\DescribeWhiteListResourceObjectIPInfo;

class NatGWWhitelistDataSet extends Response
{

    /**
     * NATGWId: NATGateWay Id
     *
     * @return string|null
     */
    public function getNATGWId()
    {
        return $this->get("NATGWId");
    }

    /**
     * NATGWId: NATGateWay Id
     *
     * @param string $natgwId
     */
    public function setNATGWId(string $natgwId)
    {
        $this->set("NATGWId", $natgwId);
    }
    /**
     * IfOpen: 白名单开关标记
     *
     * @return integer|null
     */
    public function getIfOpen()
    {
        return $this->get("IfOpen");
    }

    /**
     * IfOpen: 白名单开关标记
     *
     * @param int $ifOpen
     */
    public function setIfOpen(int $ifOpen)
    {
        $this->set("IfOpen", $ifOpen);
    }
    /**
     * ObjectIPInfo: 白名单详情
     *
     * @return DescribeWhiteListResourceObjectIPInfoModel[]|null
     */
    public function getObjectIPInfo()
    {
        $items = $this->get("ObjectIPInfo");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DescribeWhiteListResourceObjectIPInfoModel($item));
        }
        return $result;
    }

    /**
     * ObjectIPInfo: 白名单详情
     *
     * @param DescribeWhiteListResourceObjectIPInfoModel[] $objectIPInfo
     */
    public function setObjectIPInfo(array $objectIPInfo)
    {
        $result = [];
        foreach ($objectIPInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
