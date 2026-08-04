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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class AvailableDiskTypes extends Response
{
    

    /**
     * Zone: 可用区
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * UHostId: 实例Id
     *
     * @return string|null
     */
    public function getUHostId()
    {
        return $this->get("UHostId");
    }

    /**
     * UHostId: 实例Id
     *
     * @param string $uHostId
     */
    public function setUHostId($uHostId)
    {
        $this->set("UHostId", $uHostId);
    }

    /**
     * AvailableDisks: 可用磁盘信息
     *
     * @return Disks[]|null
     */
    public function getAvailableDisks()
    {
        $items = $this->get("AvailableDisks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Disks($item));
        }
        return $result;
    }

    /**
     * AvailableDisks: 可用磁盘信息
     *
     * @param Disks[] $availableDisks
     */
    public function setAvailableDisks(array $availableDisks)
    {
        $result = [];
        foreach ($availableDisks as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
