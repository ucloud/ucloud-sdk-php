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

use UCloud\PathX\Models\MatricPoint;
use UCloud\PathX\Models\GetPathXMetricResponse;

class MetricPeriod extends Response
{

    /**
     * NetworkOut: 出向带宽
     *
     * @return MatricPointModel[]|null
     */
    public function getNetworkOut()
    {
        $items = $this->get("NetworkOut");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MatricPointModel($item));
        }
        return $result;
    }

    /**
     * NetworkOut: 出向带宽
     *
     * @param MatricPointModel[] $networkOut
     */
    public function setNetworkOut(array $networkOut)
    {
        $result = [];
        foreach ($networkOut as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * NetworkIn: 入向带宽
     *
     * @return MatricPointModel[]|null
     */
    public function getNetworkIn()
    {
        $items = $this->get("NetworkIn");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MatricPointModel($item));
        }
        return $result;
    }

    /**
     * NetworkIn: 入向带宽
     *
     * @param MatricPointModel[] $networkIn
     */
    public function setNetworkIn(array $networkIn)
    {
        $result = [];
        foreach ($networkIn as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * NetworkOutUsage: 出向带宽使用率
     *
     * @return MatricPointModel[]|null
     */
    public function getNetworkOutUsage()
    {
        $items = $this->get("NetworkOutUsage");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MatricPointModel($item));
        }
        return $result;
    }

    /**
     * NetworkOutUsage: 出向带宽使用率
     *
     * @param MatricPointModel[] $networkOutUsage
     */
    public function setNetworkOutUsage(array $networkOutUsage)
    {
        $result = [];
        foreach ($networkOutUsage as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
    /**
     * NetworkInUsage: 入向带宽使用率
     *
     * @return MatricPointModel[]|null
     */
    public function getNetworkInUsage()
    {
        $items = $this->get("NetworkInUsage");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MatricPointModel($item));
        }
        return $result;
    }

    /**
     * NetworkInUsage: 入向带宽使用率
     *
     * @param MatricPointModel[] $networkInUsage
     */
    public function setNetworkInUsage(array $networkInUsage)
    {
        $result = [];
        foreach ($networkInUsage as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
