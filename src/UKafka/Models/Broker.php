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
namespace UCloud\UKafka\Models;

use UCloud\Core\Response\Response;

class Broker extends Response
{
    

    /**
     * Endpoints: broker 访问端点
     *
     * @return Endpoints|null
     */
    public function getEndpoints()
    {
        return new Endpoints($this->get("Endpoints"));
    }

    /**
     * Endpoints: broker 访问端点
     *
     * @param Endpoints $endpoints
     */
    public function setEndpoints(array $endpoints)
    {
        $this->set("Endpoints", $endpoints->getAll());
    }

    /**
     * BrokerId: broker id
     *
     * @return string|null
     */
    public function getBrokerId()
    {
        return $this->get("BrokerId");
    }

    /**
     * BrokerId: broker id
     *
     * @param string $brokerId
     */
    public function setBrokerId($brokerId)
    {
        $this->set("BrokerId", $brokerId);
    }

    /**
     * BrokerInfo: broker 关联topic 信息
     *
     * @return BrokerOfTopicInfo[]|null
     */
    public function getBrokerInfo()
    {
        $items = $this->get("BrokerInfo");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new BrokerOfTopicInfo($item));
        }
        return $result;
    }

    /**
     * BrokerInfo: broker 关联topic 信息
     *
     * @param BrokerOfTopicInfo[] $brokerInfo
     */
    public function setBrokerInfo(array $brokerInfo)
    {
        $result = [];
        foreach ($brokerInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * CreateTime: broker 创建信息
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: broker 创建信息
     *
     * @param string $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * DomainName: broker 域名
     *
     * @return string|null
     */
    public function getDomainName()
    {
        return $this->get("DomainName");
    }

    /**
     * DomainName: broker 域名
     *
     * @param string $domainName
     */
    public function setDomainName($domainName)
    {
        $this->set("DomainName", $domainName);
    }

    /**
     * ExpireTime: broker 过期时间
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: broker 过期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * IPSet: broker IP 信息
     *
     * @return IP[]|null
     */
    public function getIPSet()
    {
        $items = $this->get("IPSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new IP($item));
        }
        return $result;
    }

    /**
     * IPSet: broker IP 信息
     *
     * @param IP[] $ipSet
     */
    public function setIPSet(array $ipSet)
    {
        $result = [];
        foreach ($ipSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * InstanceGroupType: broker 机型信息
     *
     * @return string|null
     */
    public function getInstanceGroupType()
    {
        return $this->get("InstanceGroupType");
    }

    /**
     * InstanceGroupType: broker 机型信息
     *
     * @param string $instanceGroupType
     */
    public function setInstanceGroupType($instanceGroupType)
    {
        $this->set("InstanceGroupType", $instanceGroupType);
    }

    /**
     * KafkaPort: kafka 服务端口
     *
     * @return integer|null
     */
    public function getKafkaPort()
    {
        return $this->get("KafkaPort");
    }

    /**
     * KafkaPort: kafka 服务端口
     *
     * @param int $kafkaPort
     */
    public function setKafkaPort($kafkaPort)
    {
        $this->set("KafkaPort", $kafkaPort);
    }

    /**
     * Remark: broker 备注信息
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: broker 备注信息
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * ResourceId: broker 注册资源信息
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: broker 注册资源信息
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * SecurityGroupId: 安全组 id
     *
     * @return string|null
     */
    public function getSecurityGroupId()
    {
        return $this->get("SecurityGroupId");
    }

    /**
     * SecurityGroupId: 安全组 id
     *
     * @param string $securityGroupId
     */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->set("SecurityGroupId", $securityGroupId);
    }

    /**
     * State: broker 当前状态
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: broker 当前状态
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * UHostConfig: broker 节点配置
     *
     * @return UHostConfig|null
     */
    public function getUHostConfig()
    {
        return new UHostConfig($this->get("UHostConfig"));
    }

    /**
     * UHostConfig: broker 节点配置
     *
     * @param UHostConfig $uHostConfig
     */
    public function setUHostConfig(array $uHostConfig)
    {
        $this->set("UHostConfig", $uHostConfig->getAll());
    }

    /**
     * UHostId: 节点 id
     *
     * @return string|null
     */
    public function getUHostId()
    {
        return $this->get("UHostId");
    }

    /**
     * UHostId: 节点 id
     *
     * @param string $uHostId
     */
    public function setUHostId($uHostId)
    {
        $this->set("UHostId", $uHostId);
    }

    /**
     * UHostName: 节点名称
     *
     * @return string|null
     */
    public function getUHostName()
    {
        return $this->get("UHostName");
    }

    /**
     * UHostName: 节点名称
     *
     * @param string $uHostName
     */
    public function setUHostName($uHostName)
    {
        $this->set("UHostName", $uHostName);
    }

    /**
     * UHostRole: 节点类型
     *
     * @return string|null
     */
    public function getUHostRole()
    {
        return $this->get("UHostRole");
    }

    /**
     * UHostRole: 节点类型
     *
     * @param string $uHostRole
     */
    public function setUHostRole($uHostRole)
    {
        $this->set("UHostRole", $uHostRole);
    }

    /**
     * ZooKeeper: 节点是否部署 zookeeper
     *
     * @return string|null
     */
    public function getZooKeeper()
    {
        return $this->get("ZooKeeper");
    }

    /**
     * ZooKeeper: 节点是否部署 zookeeper
     *
     * @param string $zooKeeper
     */
    public function setZooKeeper($zooKeeper)
    {
        $this->set("ZooKeeper", $zooKeeper);
    }

    /**
     * ZooKeeperPort: zookeeper 服务端口
     *
     * @return integer|null
     */
    public function getZooKeeperPort()
    {
        return $this->get("ZooKeeperPort");
    }

    /**
     * ZooKeeperPort: zookeeper 服务端口
     *
     * @param int $zooKeeperPort
     */
    public function setZooKeeperPort($zooKeeperPort)
    {
        $this->set("ZooKeeperPort", $zooKeeperPort);
    }
}
