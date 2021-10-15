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
namespace UCloud\IPSecVPN\Apis;

use UCloud\Core\Response\Response;
use UCloud\IPSecVPN\Models\RemoteVPNGatewayDataSet;

class DescribeRemoteVPNGatewayResponse extends Response
{
    

    /**
     * TotalCount: 符合条件的客户VPN网关总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 符合条件的客户VPN网关总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * DataSet: 客户VPN网关列表, 每项参数详见 RemoteVPNGatewayDataSet
     *
     * @return RemoteVPNGatewayDataSet[]|null
     */
    public function getDataSet()
    {
        $items = $this->get("DataSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new RemoteVPNGatewayDataSet($item));
        }
        return $result;
    }

    /**
     * DataSet: 客户VPN网关列表, 每项参数详见 RemoteVPNGatewayDataSet
     *
     * @param RemoteVPNGatewayDataSet[] $dataSet
     */
    public function setDataSet(array $dataSet)
    {
        $result = [];
        foreach ($dataSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
