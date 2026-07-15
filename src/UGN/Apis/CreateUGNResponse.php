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
use UCloud\UGN\Models\Network;

class CreateUGNResponse extends Response
{
    

    /**
     * UGNID: UGN ID
     *
     * @return string|null
     */
    public function getUGNID()
    {
        return $this->get("UGNID");
    }

    /**
     * UGNID: UGN ID
     *
     * @param string $ugnid
     */
    public function setUGNID($ugnid)
    {
        $this->set("UGNID", $ugnid);
    }

    /**
     * Networks: 网络实例列表
     *
     * @return Network[]|null
     */
    public function getNetworks()
    {
        $items = $this->get("Networks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Network($item));
        }
        return $result;
    }

    /**
     * Networks: 网络实例列表
     *
     * @param Network[] $networks
     */
    public function setNetworks(array $networks)
    {
        $result = [];
        foreach ($networks as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
