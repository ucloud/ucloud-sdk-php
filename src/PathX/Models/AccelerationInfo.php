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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class AccelerationInfo extends Response
{
    

    /**
     * AccelerationArea: 加速大区代码
     *
     * @return string|null
     */
    public function getAccelerationArea()
    {
        return $this->get("AccelerationArea");
    }

    /**
     * AccelerationArea: 加速大区代码
     *
     * @param string $accelerationArea
     */
    public function setAccelerationArea($accelerationArea)
    {
        $this->set("AccelerationArea", $accelerationArea);
    }

    /**
     * AccelerationName: 加速大区名称
     *
     * @return string|null
     */
    public function getAccelerationName()
    {
        return $this->get("AccelerationName");
    }

    /**
     * AccelerationName: 加速大区名称
     *
     * @param string $accelerationName
     */
    public function setAccelerationName($accelerationName)
    {
        $this->set("AccelerationName", $accelerationName);
    }

    /**
     * NodeInfo: 加速提升情况
     *
     * @return NodeDelays[]|null
     */
    public function getNodeInfo()
    {
        $items = $this->get("NodeInfo");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NodeDelays($item));
        }
        return $result;
    }

    /**
     * NodeInfo: 加速提升情况
     *
     * @param NodeDelays[] $nodeInfo
     */
    public function setNodeInfo(array $nodeInfo)
    {
        $result = [];
        foreach ($nodeInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
