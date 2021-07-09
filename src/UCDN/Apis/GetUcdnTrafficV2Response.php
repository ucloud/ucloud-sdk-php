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
use UCloud\UCDN\Models\TrafficSet;

class GetUcdnTrafficV2Response extends Response
{
    

    /**
     * TrafficSet: 用户不同区域的流量信息, 具体结构参见TrafficSet部分
     *
     * @return TrafficSet[]|null
     */
    public function getTrafficSet(): array
    {
        $items = $this->get("TrafficSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new TrafficSet($item));
        }
        return $result;
    }

    /**
     * TrafficSet: 用户不同区域的流量信息, 具体结构参见TrafficSet部分
     *
     * @param TrafficSet[] $trafficSet
     */
    public function setTrafficSet(array $trafficSet)
    {
        $result = [];
        foreach ($trafficSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
