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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class VPCInfo extends Response
{
    

    /**
     * NetworkInfo: vpc地址空间信息，详见VPCNetworkInfo
     *
     * @return VPCNetworkInfo[]|null
     */
    public function getNetworkInfo()
    {
        $items = $this->get("NetworkInfo");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new VPCNetworkInfo($item));
        }
        return $result;
    }

    /**
     * NetworkInfo: vpc地址空间信息，详见VPCNetworkInfo
     *
     * @param VPCNetworkInfo[] $networkInfo
     */
    public function setNetworkInfo(array $networkInfo)
    {
        $result = [];
        foreach ($networkInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * SubnetCount: 子网数
     *
     * @return integer|null
     */
    public function getSubnetCount()
    {
        return $this->get("SubnetCount");
    }

    /**
     * SubnetCount: 子网数
     *
     * @param int $subnetCount
     */
    public function setSubnetCount($subnetCount)
    {
        $this->set("SubnetCount", $subnetCount);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
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
     * UpdateTime: 更新时间
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 更新时间
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }

    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
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
     * VPCType: DefaultVPC 默认VPC，DefinedVPC，自定义VPC     
     *
     * @return string|null
     */
    public function getVPCType()
    {
        return $this->get("VPCType");
    }

    /**
     * VPCType: DefaultVPC 默认VPC，DefinedVPC，自定义VPC     
     *
     * @param string $vpcType
     */
    public function setVPCType($vpcType)
    {
        $this->set("VPCType", $vpcType);
    }

    /**
     * VPCId: VPC资源ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC资源ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * Network: VPC网段
     *
     * @return string[]|null
     */
    public function getNetwork()
    {
        return $this->get("Network");
    }

    /**
     * Network: VPC网段
     *
     * @param string[] $network
     */
    public function setNetwork(array $network)
    {
        $this->set("Network", $network);
    }

    /**
     * IPv6Network: VPC关联的IPv6网段
     *
     * @return string|null
     */
    public function getIPv6Network()
    {
        return $this->get("IPv6Network");
    }

    /**
     * IPv6Network: VPC关联的IPv6网段
     *
     * @param string $iPv6Network
     */
    public function setIPv6Network($iPv6Network)
    {
        $this->set("IPv6Network", $iPv6Network);
    }

    /**
     * OperatorName: VPC关联的IPv6网段所属运营商
     *
     * @return string|null
     */
    public function getOperatorName()
    {
        return $this->get("OperatorName");
    }

    /**
     * OperatorName: VPC关联的IPv6网段所属运营商
     *
     * @param string $operatorName
     */
    public function setOperatorName($operatorName)
    {
        $this->set("OperatorName", $operatorName);
    }

    /**
     * IPv6NetworkInfos: VPC关联的IPv6网段信息
     *
     * @return IPv6NetworkInfo[]|null
     */
    public function getIPv6NetworkInfos()
    {
        $items = $this->get("IPv6NetworkInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new IPv6NetworkInfo($item));
        }
        return $result;
    }

    /**
     * IPv6NetworkInfos: VPC关联的IPv6网段信息
     *
     * @param IPv6NetworkInfo[] $iPv6NetworkInfos
     */
    public function setIPv6NetworkInfos(array $iPv6NetworkInfos)
    {
        $result = [];
        foreach ($iPv6NetworkInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
