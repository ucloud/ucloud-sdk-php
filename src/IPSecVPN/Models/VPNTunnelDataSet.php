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
namespace UCloud\IPSecVPN\Models;

use UCloud\Core\Response\Response;

class VPNTunnelDataSet extends Response
{
    

    /**
     * VPNTunnelId: 隧道id
     *
     * @return string|null
     */
    public function getVPNTunnelId()
    {
        return $this->get("VPNTunnelId");
    }

    /**
     * VPNTunnelId: 隧道id
     *
     * @param string $vpnTunnelId
     */
    public function setVPNTunnelId($vpnTunnelId)
    {
        $this->set("VPNTunnelId", $vpnTunnelId);
    }

    /**
     * VPNTunnelName: 隧道名称
     *
     * @return string|null
     */
    public function getVPNTunnelName()
    {
        return $this->get("VPNTunnelName");
    }

    /**
     * VPNTunnelName: 隧道名称
     *
     * @param string $vpnTunnelName
     */
    public function setVPNTunnelName($vpnTunnelName)
    {
        $this->set("VPNTunnelName", $vpnTunnelName);
    }

    /**
     * Tag: 用户组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 用户组
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * VPNGatewayId: 所属VPN网关id
     *
     * @return string|null
     */
    public function getVPNGatewayId()
    {
        return $this->get("VPNGatewayId");
    }

    /**
     * VPNGatewayId: 所属VPN网关id
     *
     * @param string $vpnGatewayId
     */
    public function setVPNGatewayId($vpnGatewayId)
    {
        $this->set("VPNGatewayId", $vpnGatewayId);
    }

    /**
     * RemoteVPNGatewayId: 对端网关Id
     *
     * @return string|null
     */
    public function getRemoteVPNGatewayId()
    {
        return $this->get("RemoteVPNGatewayId");
    }

    /**
     * RemoteVPNGatewayId: 对端网关Id
     *
     * @param string $remoteVPNGatewayId
     */
    public function setRemoteVPNGatewayId($remoteVPNGatewayId)
    {
        $this->set("RemoteVPNGatewayId", $remoteVPNGatewayId);
    }

    /**
     * VPNGatewayName: VPN网关名字
     *
     * @return string|null
     */
    public function getVPNGatewayName()
    {
        return $this->get("VPNGatewayName");
    }

    /**
     * VPNGatewayName: VPN网关名字
     *
     * @param string $vpnGatewayName
     */
    public function setVPNGatewayName($vpnGatewayName)
    {
        $this->set("VPNGatewayName", $vpnGatewayName);
    }

    /**
     * RemoteVPNGatewayName: 对端网关名字
     *
     * @return string|null
     */
    public function getRemoteVPNGatewayName()
    {
        return $this->get("RemoteVPNGatewayName");
    }

    /**
     * RemoteVPNGatewayName: 对端网关名字
     *
     * @param string $remoteVPNGatewayName
     */
    public function setRemoteVPNGatewayName($remoteVPNGatewayName)
    {
        $this->set("RemoteVPNGatewayName", $remoteVPNGatewayName);
    }

    /**
     * VPCId: 所属VPCId
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 所属VPCId
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * VPCName: 所属VOC名字
     *
     * @return string|null
     */
    public function getVPCName()
    {
        return $this->get("VPCName");
    }

    /**
     * VPCName: 所属VOC名字
     *
     * @param string $vpcName
     */
    public function setVPCName($vpcName)
    {
        $this->set("VPCName", $vpcName);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return int|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * IKEData: IKE参数
     *
     * @return IKEData|null
     */
    public function getIKEData()
    {
        return new IKEData($this->get("IKEData"));
    }

    /**
     * IKEData: IKE参数
     *
     * @param IKEData $ikeData
     */
    public function setIKEData(array $ikeData)
    {
        $this->set("IKEData", $ikeData->getAll());
    }

    /**
     * IPSecData: IPSec参数
     *
     * @return IPSecData|null
     */
    public function getIPSecData()
    {
        return new IPSecData($this->get("IPSecData"));
    }

    /**
     * IPSecData: IPSec参数
     *
     * @param IPSecData $ipSecData
     */
    public function setIPSecData(array $ipSecData)
    {
        $this->set("IPSecData", $ipSecData->getAll());
    }


}
