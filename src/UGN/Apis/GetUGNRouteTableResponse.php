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
namespace UCloud\UGN\Apis;

use UCloud\Core\Response\Response;
use UCloud\UGN\Models\SimpleRoute;
use UCloud\UGN\Models\VRoute;
use UCloud\UGN\Models\SimpleRoute;

class GetUGNRouteTableResponse extends Response
{
    

    /**
     * UGNID: 云联网实例ID
     *
     * @return string|null
     */
    public function getUGNID()
    {
        return $this->get("UGNID");
    }

    /**
     * UGNID: 云联网实例ID
     *
     * @param string $ugnid
     */
    public function setUGNID($ugnid)
    {
        $this->set("UGNID", $ugnid);
    }

    /**
     * Routes: 路由表，"Origin"/"Middle" 用这个
     *
     * @return SimpleRoute[]|null
     */
    public function getRoutes()
    {
        $items = $this->get("Routes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SimpleRoute($item));
        }
        return $result;
    }

    /**
     * Routes: 路由表，"Origin"/"Middle" 用这个
     *
     * @param SimpleRoute[] $routes
     */
    public function setRoutes(array $routes)
    {
        $result = [];
        foreach ($routes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * VRoutes: 网络实例对应的路由表，"Final" 用这个
     *
     * @return VRoute[]|null
     */
    public function getVRoutes()
    {
        $items = $this->get("VRoutes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new VRoute($item));
        }
        return $result;
    }

    /**
     * VRoutes: 网络实例对应的路由表，"Final" 用这个
     *
     * @param VRoute[] $vRoutes
     */
    public function setVRoutes(array $vRoutes)
    {
        $result = [];
        foreach ($vRoutes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
