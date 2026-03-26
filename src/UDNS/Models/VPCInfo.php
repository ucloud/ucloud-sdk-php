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
namespace UCloud\UDNS\Models;

use UCloud\Core\Response\Response;

class VPCInfo extends Response
{
    

    /**
     * VPCId: VPC ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * VPCProjectId: VPC所属项目ID
     *
     * @return string|null
     */
    public function getVPCProjectId()
    {
        return $this->get("VPCProjectId");
    }

    /**
     * VPCProjectId: VPC所属项目ID
     *
     * @param string $vpcProjectId
     */
    public function setVPCProjectId($vpcProjectId)
    {
        $this->set("VPCProjectId", $vpcProjectId);
    }

    /**
     * Name: VPC名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: VPC名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Network: VPC地址空间
     *
     * @return string[]|null
     */
    public function getNetwork()
    {
        return $this->get("Network");
    }

    /**
     * Network: VPC地址空间
     *
     * @param string[] $network
     */
    public function setNetwork(array $network)
    {
        $this->set("Network", $network);
    }

    /**
     * VPCType: VPC类型：Normal 公有云 Hybrid 托管云
     *
     * @return string|null
     */
    public function getVPCType()
    {
        return $this->get("VPCType");
    }

    /**
     * VPCType: VPC类型：Normal 公有云 Hybrid 托管云
     *
     * @param string $vpcType
     */
    public function setVPCType($vpcType)
    {
        $this->set("VPCType", $vpcType);
    }
}
