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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class VPCInfo extends Response
{
    

    /**
     * NetworkInfo:
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
     * NetworkInfo:
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
     * SubnetCount:
     *
     * @return integer|null
     */
    public function getSubnetCount()
    {
        return $this->get("SubnetCount");
    }

    /**
     * SubnetCount:
     *
     * @param int $subnetCount
     */
    public function setSubnetCount($subnetCount)
    {
        $this->set("SubnetCount", $subnetCount);
    }

    /**
     * CreateTime:
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime:
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * UpdateTime:
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime:
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }

    /**
     * Tag:
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag:
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Name:
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name:
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * VPCId: VPCId
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPCId
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * Network:
     *
     * @return string[]|null
     */
    public function getNetwork()
    {
        return $this->get("Network");
    }

    /**
     * Network:
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
}
