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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class SpreadInfo extends Response
{
    

    /**
     * Zone: 可用区信息
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区信息
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * UHostCount: 当前地域所有可用区中硬件隔离组中云主机的数量，不超过7。
     *
     * @return integer|null
     */
    public function getUHostCount(): int
    {
        return $this->get("UHostCount");
    }

    /**
     * UHostCount: 当前地域所有可用区中硬件隔离组中云主机的数量，不超过7。
     *
     * @param int $uHostCount
     */
    public function setUHostCount(int $uHostCount)
    {
        $this->set("UHostCount", $uHostCount);
    }
}
