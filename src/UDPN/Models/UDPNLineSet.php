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

namespace UCloud\UDPN\Models;

use UCloud\Core\Response\Response;

use UCloud\UDPN\Models\GetUDPNLineListResponse;

class UDPNLineSet extends Response
{

    /**
     * LocalRegion: 支持UDPN的地域之一，北京二：cn-bj2, 上海二：cn-sh2, 广东：cn-gd, 亚太： hk, 上海一：cn-sh1, 法兰克福：ge-fra, 新加坡：sg, 华盛顿：us-ws, 洛杉矶：us-la， 东京：jpn-tky
     *
     * @return string|null
     */
    public function getLocalRegion()
    {
        return $this->get("LocalRegion");
    }

    /**
     * LocalRegion: 支持UDPN的地域之一，北京二：cn-bj2, 上海二：cn-sh2, 广东：cn-gd, 亚太： hk, 上海一：cn-sh1, 法兰克福：ge-fra, 新加坡：sg, 华盛顿：us-ws, 洛杉矶：us-la， 东京：jpn-tky
     *
     * @param string $localRegion
     */
    public function setLocalRegion(string $localRegion)
    {
        $this->set("LocalRegion", $localRegion);
    }
    /**
     * RemoteRegion: 支持UDPN的地域之一，北京二：cn-bj2, 上海二：cn-sh2, 广东：cn-gd, 亚太： hk, 上海一：cn-sh1, 法兰克福：ge-fra, 新加坡：sg, 华盛顿：us-ws, 洛杉矶：us-la， 东京：jpn-tky
     *
     * @return string|null
     */
    public function getRemoteRegion()
    {
        return $this->get("RemoteRegion");
    }

    /**
     * RemoteRegion: 支持UDPN的地域之一，北京二：cn-bj2, 上海二：cn-sh2, 广东：cn-gd, 亚太： hk, 上海一：cn-sh1, 法兰克福：ge-fra, 新加坡：sg, 华盛顿：us-ws, 洛杉矶：us-la， 东京：jpn-tky
     *
     * @param string $remoteRegion
     */
    public function setRemoteRegion(string $remoteRegion)
    {
        $this->set("RemoteRegion", $remoteRegion);
    }
    /**
     * BandwidthUpperLimit: 线路带宽上限,单位 M
     *
     * @return integer|null
     */
    public function getBandwidthUpperLimit()
    {
        return $this->get("BandwidthUpperLimit");
    }

    /**
     * BandwidthUpperLimit: 线路带宽上限,单位 M
     *
     * @param int $bandwidthUpperLimit
     */
    public function setBandwidthUpperLimit(int $bandwidthUpperLimit)
    {
        $this->set("BandwidthUpperLimit", $bandwidthUpperLimit);
    }
}
