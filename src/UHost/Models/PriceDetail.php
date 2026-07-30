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

class PriceDetail extends Response
{
    

    /**
     * UHost: 主机价格
     *
     * @return float|null
     */
    public function getUHost()
    {
        return $this->get("UHost");
    }

    /**
     * UHost: 主机价格
     *
     * @param float $uHost
     */
    public function setUHost($uHost)
    {
        $this->set("UHost", $uHost);
    }

    /**
     * UDisk: 云盘价格
     *
     * @return float|null
     */
    public function getUDisk()
    {
        return $this->get("UDisk");
    }

    /**
     * UDisk: 云盘价格
     *
     * @param float $uDisk
     */
    public function setUDisk($uDisk)
    {
        $this->set("UDisk", $uDisk);
    }

    /**
     * Snapshot: 快照价格
     *
     * @return float|null
     */
    public function getSnapshot()
    {
        return $this->get("Snapshot");
    }

    /**
     * Snapshot: 快照价格
     *
     * @param float $snapshot
     */
    public function setSnapshot($snapshot)
    {
        $this->set("Snapshot", $snapshot);
    }

    /**
     * Volume: 数据卷价格
     *
     * @return float|null
     */
    public function getVolume()
    {
        return $this->get("Volume");
    }

    /**
     * Volume: 数据卷价格
     *
     * @param float $volume
     */
    public function setVolume($volume)
    {
        $this->set("Volume", $volume);
    }
}
