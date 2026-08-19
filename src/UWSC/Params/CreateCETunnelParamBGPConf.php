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
namespace UCloud\UWSC\Params;

use UCloud\Core\Request\Request;

class CreateCETunnelParamBGPConf extends Request
{
    

    /**
     * TunnelCidr: BGP隧道网段。该网段需是一个在 169.254.0.0/16 内的掩码长度为 30 的网段。
     *
     * @return string|null
     */
    public function getTunnelCidr()
    {
        return $this->get("TunnelCidr");
    }

    /**
     * TunnelCidr: BGP隧道网段。该网段需是一个在 169.254.0.0/16 内的掩码长度为 30 的网段。
     *
     * @param string $tunnelCidr
     */
    public function setTunnelCidr($tunnelCidr)
    {
        $this->set("TunnelCidr", $tunnelCidr);
    }

    /**
     * LocalAsn: Ucloud侧的自治系统号。
     *
     * @return string|null
     */
    public function getLocalAsn()
    {
        return $this->get("LocalAsn");
    }

    /**
     * LocalAsn: Ucloud侧的自治系统号。
     *
     * @param string $localAsn
     */
    public function setLocalAsn($localAsn)
    {
        $this->set("LocalAsn", $localAsn);
    }

    /**
     * PeerAsn: 对端BGP ASN号。
     *
     * @return string|null
     */
    public function getPeerAsn()
    {
        return $this->get("PeerAsn");
    }

    /**
     * PeerAsn: 对端BGP ASN号。
     *
     * @param string $peerAsn
     */
    public function setPeerAsn($peerAsn)
    {
        $this->set("PeerAsn", $peerAsn);
    }

    /**
     * LocalIp: 云端BGP地址。必须从BGP隧道网段内分配。
     *
     * @return string|null
     */
    public function getLocalIp()
    {
        return $this->get("LocalIp");
    }

    /**
     * LocalIp: 云端BGP地址。必须从BGP隧道网段内分配。
     *
     * @param string $localIp
     */
    public function setLocalIp($localIp)
    {
        $this->set("LocalIp", $localIp);
    }

    /**
     * PeerIp: 用户端BGP地址。必须从BGP隧道网段内分配。
     *
     * @return string|null
     */
    public function getPeerIp()
    {
        return $this->get("PeerIp");
    }

    /**
     * PeerIp: 用户端BGP地址。必须从BGP隧道网段内分配。
     *
     * @param string $peerIp
     */
    public function setPeerIp($peerIp)
    {
        $this->set("PeerIp", $peerIp);
    }
}
