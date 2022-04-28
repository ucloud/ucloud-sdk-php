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
namespace UCloud\PathX\Apis;

use UCloud\Core\Response\Response;
use UCloud\PathX\Models\ForwardInfo;
use UCloud\PathX\Models\AccelerationAreaInfos;
use UCloud\PathX\Models\SrcAreaInfo;
use UCloud\PathX\Models\OutPublicIpInfo;
use UCloud\PathX\Models\ForwardTask;

class DescribeUGA3InstanceResponse extends Response
{
    

    /**
     * ForwardInstanceInfos: 全球加速实例信息列表
     *
     * @return ForwardInfo[]|null
     */
    public function getForwardInstanceInfos()
    {
        $items = $this->get("ForwardInstanceInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ForwardInfo($item));
        }
        return $result;
    }

    /**
     * ForwardInstanceInfos: 全球加速实例信息列表
     *
     * @param ForwardInfo[] $forwardInstanceInfos
     */
    public function setForwardInstanceInfos(array $forwardInstanceInfos)
    {
        $result = [];
        foreach ($forwardInstanceInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: 符合条件的总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 符合条件的总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
