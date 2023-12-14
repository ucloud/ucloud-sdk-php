<?php
/**
 * Copyright 2023 UCloud Technology Co., Ltd.
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
use UCloud\UGN\Models\UGN;
use UCloud\UGN\Models\SimpleNetwork;
use UCloud\UGN\Models\SimpleBwPackage;
use UCloud\UGN\Models\SimpleRoute;

class DescribeSimpleUGNResponse extends Response
{
    

    /**
     * UGN:
     *
     * @return UGN|null
     */
    public function getUGN()
    {
        return new UGN($this->get("UGN"));
    }

    /**
     * UGN:
     *
     * @param UGN $ugn
     */
    public function setUGN(array $ugn)
    {
        $this->set("UGN", $ugn->getAll());
    }

    /**
     * Networks:
     *
     * @return SimpleNetwork[]|null
     */
    public function getNetworks()
    {
        $items = $this->get("Networks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SimpleNetwork($item));
        }
        return $result;
    }

    /**
     * Networks:
     *
     * @param SimpleNetwork[] $networks
     */
    public function setNetworks(array $networks)
    {
        $result = [];
        foreach ($networks as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * BwPackages:
     *
     * @return SimpleBwPackage[]|null
     */
    public function getBwPackages()
    {
        $items = $this->get("BwPackages");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SimpleBwPackage($item));
        }
        return $result;
    }

    /**
     * BwPackages:
     *
     * @param SimpleBwPackage[] $bwPackages
     */
    public function setBwPackages(array $bwPackages)
    {
        $result = [];
        foreach ($bwPackages as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Routes:
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
     * Routes:
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
}
