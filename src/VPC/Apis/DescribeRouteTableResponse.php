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
namespace UCloud\VPC\Apis;

use UCloud\Core\Response\Response;
use UCloud\VPC\Models\RouteTableInfo;
use UCloud\VPC\Models\RouteRuleInfo;

class DescribeRouteTableResponse extends Response
{
    

    /**
     * RouteTables: 路由表信息
     *
     * @return RouteTableInfo[]|null
     */
    public function getRouteTables(): array
    {
        $items = $this->get("RouteTables") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new RouteTableInfo($item));
        }
        return $result;
    }

    /**
     * RouteTables: 路由表信息
     *
     * @param RouteTableInfo[] $routeTables
     */
    public function setRouteTables(array $routeTables)
    {
        $result = [];
        foreach ($routeTables as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: RouteTables字段的数量
     *
     * @return integer|null
     */
    public function getTotalCount(): int
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: RouteTables字段的数量
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
