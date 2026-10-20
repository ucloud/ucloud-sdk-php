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
namespace UCloud\UDNS\Apis;

use UCloud\Core\Response\Response;

class DescribeUDNSZoneForwardResponse extends Response
{
    

    /**
     * VPCProjectId: 转发目标VPC所属VPC
     *
     * @return string|null
     */
    public function getVPCProjectId()
    {
        return $this->get("VPCProjectId");
    }

    /**
     * VPCProjectId: 转发目标VPC所属VPC
     *
     * @param string $vpcProjectId
     */
    public function setVPCProjectId($vpcProjectId)
    {
        $this->set("VPCProjectId", $vpcProjectId);
    }

    /**
     * VPCRegion: 转发目标VPC所属地域
     *
     * @return string|null
     */
    public function getVPCRegion()
    {
        return $this->get("VPCRegion");
    }

    /**
     * VPCRegion: 转发目标VPC所属地域
     *
     * @param string $vpcRegion
     */
    public function setVPCRegion($vpcRegion)
    {
        $this->set("VPCRegion", $vpcRegion);
    }

    /**
     * VPCId: 转发目标VPC的ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 转发目标VPC的ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * Servers: 转发目标DNS 服务器地址
     *
     * @return string[]|null
     */
    public function getServers()
    {
        return $this->get("Servers");
    }

    /**
     * Servers: 转发目标DNS 服务器地址
     *
     * @param string[] $servers
     */
    public function setServers(array $servers)
    {
        $this->set("Servers", $servers);
    }
}
