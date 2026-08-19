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
namespace UCloud\UWSC\Models;

use UCloud\Core\Response\Response;

class BGPConf extends Response
{
    

    /**
     * TunnelCidr: BGP隧道网段
     *
     * @return string|null
     */
    public function getTunnelCidr()
    {
        return $this->get("TunnelCidr");
    }

    /**
     * TunnelCidr: BGP隧道网段
     *
     * @param string $tunnelCidr
     */
    public function setTunnelCidr($tunnelCidr)
    {
        $this->set("TunnelCidr", $tunnelCidr);
    }

    /**
     * LocalAsn: 本端自治系统号
     *
     * @return integer|null
     */
    public function getLocalAsn()
    {
        return $this->get("LocalAsn");
    }

    /**
     * LocalAsn: 本端自治系统号
     *
     * @param int $localAsn
     */
    public function setLocalAsn($localAsn)
    {
        $this->set("LocalAsn", $localAsn);
    }

    /**
     * PeerAsn: 对端自治系统号
     *
     * @return integer|null
     */
    public function getPeerAsn()
    {
        return $this->get("PeerAsn");
    }

    /**
     * PeerAsn: 对端自治系统号
     *
     * @param int $peerAsn
     */
    public function setPeerAsn($peerAsn)
    {
        $this->set("PeerAsn", $peerAsn);
    }

    /**
     * LocalIp: 云端BGP地址
     *
     * @return string|null
     */
    public function getLocalIp()
    {
        return $this->get("LocalIp");
    }

    /**
     * LocalIp: 云端BGP地址
     *
     * @param string $localIp
     */
    public function setLocalIp($localIp)
    {
        $this->set("LocalIp", $localIp);
    }

    /**
     * PeerIp: 用户端BGP地址
     *
     * @return string|null
     */
    public function getPeerIp()
    {
        return $this->get("PeerIp");
    }

    /**
     * PeerIp: 用户端BGP地址
     *
     * @param string $peerIp
     */
    public function setPeerIp($peerIp)
    {
        $this->set("PeerIp", $peerIp);
    }
}
