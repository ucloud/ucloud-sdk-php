<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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

class RemoteVPNGatewayDataSet extends Response
{
    

    /**
     * RemoteVPNGatewayId: 客户网关ID
     *
     * @return string|null
     */
    public function getRemoteVPNGatewayId(): string
    {
        return $this->get("RemoteVPNGatewayId");
    }

    /**
     * RemoteVPNGatewayId: 客户网关ID
     *
     * @param string $remoteVPNGatewayId
     */
    public function setRemoteVPNGatewayId(string $remoteVPNGatewayId)
    {
        $this->set("RemoteVPNGatewayId", $remoteVPNGatewayId);
    }

    /**
     * RemoteVPNGatewayName: 客户网关名称
     *
     * @return string|null
     */
    public function getRemoteVPNGatewayName(): string
    {
        return $this->get("RemoteVPNGatewayName");
    }

    /**
     * RemoteVPNGatewayName: 客户网关名称
     *
     * @param string $remoteVPNGatewayName
     */
    public function setRemoteVPNGatewayName(string $remoteVPNGatewayName)
    {
        $this->set("RemoteVPNGatewayName", $remoteVPNGatewayName);
    }

    /**
     * RemoteVPNGatewayAddr: 客户网关IP地址
     *
     * @return string|null
     */
    public function getRemoteVPNGatewayAddr(): string
    {
        return $this->get("RemoteVPNGatewayAddr");
    }

    /**
     * RemoteVPNGatewayAddr: 客户网关IP地址
     *
     * @param string $remoteVPNGatewayAddr
     */
    public function setRemoteVPNGatewayAddr(string $remoteVPNGatewayAddr)
    {
        $this->set("RemoteVPNGatewayAddr", $remoteVPNGatewayAddr);
    }

    /**
     * Tag: 用户组
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 用户组
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark(): string
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * TunnelCount: 活跃的隧道数量
     *
     * @return integer|null
     */
    public function getTunnelCount(): int
    {
        return $this->get("TunnelCount");
    }

    /**
     * TunnelCount: 活跃的隧道数量
     *
     * @param int $tunnelCount
     */
    public function setTunnelCount(int $tunnelCount)
    {
        $this->set("TunnelCount", $tunnelCount);
    }
}
