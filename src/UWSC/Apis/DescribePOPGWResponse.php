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
namespace UCloud\UWSC\Apis;

use UCloud\Core\Response\Response;
use UCloud\UWSC\Models\POPGWInfo;
use UCloud\UWSC\Models\BWPackageInfo;
use UCloud\UWSC\Models\UGNInfo;
use UCloud\UWSC\Models\UGNBWInfo;

class DescribePOPGWResponse extends Response
{
    

    /**
     * TotalCount: 总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * POPGWInfos: UWAN 实例信息
     *
     * @return POPGWInfo[]|null
     */
    public function getPOPGWInfos()
    {
        $items = $this->get("POPGWInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new POPGWInfo($item));
        }
        return $result;
    }

    /**
     * POPGWInfos: UWAN 实例信息
     *
     * @param POPGWInfo[] $popgwInfos
     */
    public function setPOPGWInfos(array $popgwInfos)
    {
        $result = [];
        foreach ($popgwInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * RequestId: 请求 ID
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->get("RequestId");
    }

    /**
     * RequestId: 请求 ID
     *
     * @param string $requestId
     */
    public function setRequestId($requestId)
    {
        $this->set("RequestId", $requestId);
    }
}
