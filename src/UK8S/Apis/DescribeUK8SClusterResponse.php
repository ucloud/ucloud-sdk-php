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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Response\Response;
use UCloud\UK8S\Models\UhostInfo;
use UCloud\UK8S\Models\IPSet;
use UCloud\UK8S\Models\DiskSet;
use UCloud\UK8S\Models\SecGroupId;
use UCloud\UK8S\Models\KubeProxy;
use UCloud\UK8S\Models\Autoscaler;
use UCloud\UK8S\Models\LoopbackClientCert;

class DescribeUK8SClusterResponse extends Response
{
    

    /**
     * ClusterName: 资源名字
     *
     * @return string|null
     */
    public function getClusterName()
    {
        return $this->get("ClusterName");
    }

    /**
     * ClusterName: 资源名字
     *
     * @param string $clusterName
     */
    public function setClusterName($clusterName)
    {
        $this->set("ClusterName", $clusterName);
    }

    /**
     * ClusterId: 集群ID
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 集群ID
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * VPCId: 所属VPC
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 所属VPC
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 所属子网
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 所属子网
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * PodCIDR: Pod网段
     *
     * @return string|null
     */
    public function getPodCIDR()
    {
        return $this->get("PodCIDR");
    }

    /**
     * PodCIDR: Pod网段
     *
     * @param string $podCIDR
     */
    public function setPodCIDR($podCIDR)
    {
        $this->set("PodCIDR", $podCIDR);
    }

    /**
     * ServiceCIDR: 服务网段
     *
     * @return string|null
     */
    public function getServiceCIDR()
    {
        return $this->get("ServiceCIDR");
    }

    /**
     * ServiceCIDR: 服务网段
     *
     * @param string $serviceCIDR
     */
    public function setServiceCIDR($serviceCIDR)
    {
        $this->set("ServiceCIDR", $serviceCIDR);
    }

    /**
     * MasterCount: Master 节点数量
     *
     * @return integer|null
     */
    public function getMasterCount()
    {
        return $this->get("MasterCount");
    }

    /**
     * MasterCount: Master 节点数量
     *
     * @param int $masterCount
     */
    public function setMasterCount($masterCount)
    {
        $this->set("MasterCount", $masterCount);
    }

    /**
     * MasterList: Master节点配置信息，具体参考UhostInfo。托管版不返回该信息
     *
     * @return UhostInfo[]|null
     */
    public function getMasterList()
    {
        $items = $this->get("MasterList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UhostInfo($item));
        }
        return $result;
    }

    /**
     * MasterList: Master节点配置信息，具体参考UhostInfo。托管版不返回该信息
     *
     * @param UhostInfo[] $masterList
     */
    public function setMasterList(array $masterList)
    {
        $result = [];
        foreach ($masterList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * NodeList: Node节点配置信息,具体参考UhostInfo
     *
     * @return UhostInfo[]|null
     */
    public function getNodeList()
    {
        $items = $this->get("NodeList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UhostInfo($item));
        }
        return $result;
    }

    /**
     * NodeList: Node节点配置信息,具体参考UhostInfo
     *
     * @param UhostInfo[] $nodeList
     */
    public function setNodeList(array $nodeList)
    {
        $result = [];
        foreach ($nodeList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
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
     * NodeCount: Node节点数量
     *
     * @return integer|null
     */
    public function getNodeCount()
    {
        return $this->get("NodeCount");
    }

    /**
     * NodeCount: Node节点数量
     *
     * @param int $nodeCount
     */
    public function setNodeCount($nodeCount)
    {
        $this->set("NodeCount", $nodeCount);
    }

    /**
     * ApiServer: 集群apiserver地址
     *
     * @return string|null
     */
    public function getApiServer()
    {
        return $this->get("ApiServer");
    }

    /**
     * ApiServer: 集群apiserver地址
     *
     * @param string $apiServer
     */
    public function setApiServer($apiServer)
    {
        $this->set("ApiServer", $apiServer);
    }

    /**
     * Status: 状态
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 状态
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * ExternalApiServer: 集群外部apiserver地址
     *
     * @return string|null
     */
    public function getExternalApiServer()
    {
        return $this->get("ExternalApiServer");
    }

    /**
     * ExternalApiServer: 集群外部apiserver地址
     *
     * @param string $externalApiServer
     */
    public function setExternalApiServer($externalApiServer)
    {
        $this->set("ExternalApiServer", $externalApiServer);
    }

    /**
     * KubeProxy: kube-proxy配置
     *
     * @return KubeProxy|null
     */
    public function getKubeProxy()
    {
        return new KubeProxy($this->get("KubeProxy"));
    }

    /**
     * KubeProxy: kube-proxy配置
     *
     * @param KubeProxy $kubeProxy
     */
    public function setKubeProxy(array $kubeProxy)
    {
        $this->set("KubeProxy", $kubeProxy->getAll());
    }

    /**
     * Version: K8S版本
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: K8S版本
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->set("Version", $version);
    }

    /**
     * ClusterDomain: 自定义或者默认的clusterdomain
     *
     * @return string|null
     */
    public function getClusterDomain()
    {
        return $this->get("ClusterDomain");
    }

    /**
     * ClusterDomain: 自定义或者默认的clusterdomain
     *
     * @param string $clusterDomain
     */
    public function setClusterDomain($clusterDomain)
    {
        $this->set("ClusterDomain", $clusterDomain);
    }

    /**
     * EtcdCert: 集群etcd服务证书
     *
     * @return string|null
     */
    public function getEtcdCert()
    {
        return $this->get("EtcdCert");
    }

    /**
     * EtcdCert: 集群etcd服务证书
     *
     * @param string $etcdCert
     */
    public function setEtcdCert($etcdCert)
    {
        $this->set("EtcdCert", $etcdCert);
    }

    /**
     * EtcdKey: 集群etcd服务密钥
     *
     * @return string|null
     */
    public function getEtcdKey()
    {
        return $this->get("EtcdKey");
    }

    /**
     * EtcdKey: 集群etcd服务密钥
     *
     * @param string $etcdKey
     */
    public function setEtcdKey($etcdKey)
    {
        $this->set("EtcdKey", $etcdKey);
    }

    /**
     * CACert: 集群CA根证书
     *
     * @return string|null
     */
    public function getCACert()
    {
        return $this->get("CACert");
    }

    /**
     * CACert: 集群CA根证书
     *
     * @param string $caCert
     */
    public function setCACert($caCert)
    {
        $this->set("CACert", $caCert);
    }

    /**
     * MasterResourceStatus: Master配置预警：Normal正常；Warning 需要升级；Error    需要紧急升级；
     *
     * @return string|null
     */
    public function getMasterResourceStatus()
    {
        return $this->get("MasterResourceStatus");
    }

    /**
     * MasterResourceStatus: Master配置预警：Normal正常；Warning 需要升级；Error    需要紧急升级；
     *
     * @param string $masterResourceStatus
     */
    public function setMasterResourceStatus($masterResourceStatus)
    {
        $this->set("MasterResourceStatus", $masterResourceStatus);
    }

    /**
     * CNIMode: CNI模式，可选值VPC/Calico
     *
     * @return string|null
     */
    public function getCNIMode()
    {
        return $this->get("CNIMode");
    }

    /**
     * CNIMode: CNI模式，可选值VPC/Calico
     *
     * @param string $cniMode
     */
    public function setCNIMode($cniMode)
    {
        $this->set("CNIMode", $cniMode);
    }

    /**
     * MonitorType: 集群的监控类型：no无监控；cloudwatch统一监控平台；prometheus内置监控
     *
     * @return string|null
     */
    public function getMonitorType()
    {
        return $this->get("MonitorType");
    }

    /**
     * MonitorType: 集群的监控类型：no无监控；cloudwatch统一监控平台；prometheus内置监控
     *
     * @param string $monitorType
     */
    public function setMonitorType($monitorType)
    {
        $this->set("MonitorType", $monitorType);
    }

    /**
     * Autoscaler: 集群的节点伸缩(CA)配置
     *
     * @return Autoscaler|null
     */
    public function getAutoscaler()
    {
        return new Autoscaler($this->get("Autoscaler"));
    }

    /**
     * Autoscaler: 集群的节点伸缩(CA)配置
     *
     * @param Autoscaler $autoscaler
     */
    public function setAutoscaler(array $autoscaler)
    {
        $this->set("Autoscaler", $autoscaler->getAll());
    }

    /**
     * EnableUserAuth: 是否开启了授权管理功能
     *
     * @return boolean|null
     */
    public function getEnableUserAuth()
    {
        return $this->get("EnableUserAuth");
    }

    /**
     * EnableUserAuth: 是否开启了授权管理功能
     *
     * @param boolean $enableUserAuth
     */
    public function setEnableUserAuth($enableUserAuth)
    {
        $this->set("EnableUserAuth", $enableUserAuth);
    }

    /**
     * DedicatedPodSubnet: Pod是否使用独立子网
     *
     * @return boolean|null
     */
    public function getDedicatedPodSubnet()
    {
        return $this->get("DedicatedPodSubnet");
    }

    /**
     * DedicatedPodSubnet: Pod是否使用独立子网
     *
     * @param boolean $dedicatedPodSubnet
     */
    public function setDedicatedPodSubnet($dedicatedPodSubnet)
    {
        $this->set("DedicatedPodSubnet", $dedicatedPodSubnet);
    }

    /**
     * PodSubnetIds: Pod使用的独立子网列表
     *
     * @return string[]|null
     */
    public function getPodSubnetIds()
    {
        return $this->get("PodSubnetIds");
    }

    /**
     * PodSubnetIds: Pod使用的独立子网列表
     *
     * @param string[] $podSubnetIds
     */
    public function setPodSubnetIds(array $podSubnetIds)
    {
        $this->set("PodSubnetIds", $podSubnetIds);
    }

    /**
     * DeleteProtection: 删除保护开关。0表示不开启，1表示开启。默认不开启
     *
     * @return integer|null
     */
    public function getDeleteProtection()
    {
        return $this->get("DeleteProtection");
    }

    /**
     * DeleteProtection: 删除保护开关。0表示不开启，1表示开启。默认不开启
     *
     * @param int $deleteProtection
     */
    public function setDeleteProtection($deleteProtection)
    {
        $this->set("DeleteProtection", $deleteProtection);
    }

    /**
     * PodSubnetSecGroups: Pod独立子网内的ip使用的安全组
     *
     * @return string[]|null
     */
    public function getPodSubnetSecGroups()
    {
        return $this->get("PodSubnetSecGroups");
    }

    /**
     * PodSubnetSecGroups: Pod独立子网内的ip使用的安全组
     *
     * @param string[] $podSubnetSecGroups
     */
    public function setPodSubnetSecGroups(array $podSubnetSecGroups)
    {
        $this->set("PodSubnetSecGroups", $podSubnetSecGroups);
    }

    /**
     * NodeCIDR: 节点网段
     *
     * @return string|null
     */
    public function getNodeCIDR()
    {
        return $this->get("NodeCIDR");
    }

    /**
     * NodeCIDR: 节点网段
     *
     * @param string $nodeCIDR
     */
    public function setNodeCIDR($nodeCIDR)
    {
        $this->set("NodeCIDR", $nodeCIDR);
    }

    /**
     * ExternalUlb: 外部 API Server 负载均衡实例 ID
     *
     * @return string|null
     */
    public function getExternalUlb()
    {
        return $this->get("ExternalUlb");
    }

    /**
     * ExternalUlb: 外部 API Server 负载均衡实例 ID
     *
     * @param string $externalUlb
     */
    public function setExternalUlb($externalUlb)
    {
        $this->set("ExternalUlb", $externalUlb);
    }

    /**
     * InternalUlb: 内部 API Server 负载均衡实例 ID
     *
     * @return string|null
     */
    public function getInternalUlb()
    {
        return $this->get("InternalUlb");
    }

    /**
     * InternalUlb: 内部 API Server 负载均衡实例 ID
     *
     * @param string $internalUlb
     */
    public function setInternalUlb($internalUlb)
    {
        $this->set("InternalUlb", $internalUlb);
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
     * LbClass: 负载均衡类型
     *
     * @return string|null
     */
    public function getLbClass()
    {
        return $this->get("LbClass");
    }

    /**
     * LbClass: 负载均衡类型
     *
     * @param string $lbClass
     */
    public function setLbClass($lbClass)
    {
        $this->set("LbClass", $lbClass);
    }

    /**
     * RuntimeName: 容器运行时名称
     *
     * @return string|null
     */
    public function getRuntimeName()
    {
        return $this->get("RuntimeName");
    }

    /**
     * RuntimeName: 容器运行时名称
     *
     * @param string $runtimeName
     */
    public function setRuntimeName($runtimeName)
    {
        $this->set("RuntimeName", $runtimeName);
    }

    /**
     * RuntimeVersion: 容器运行时版本
     *
     * @return string|null
     */
    public function getRuntimeVersion()
    {
        return $this->get("RuntimeVersion");
    }

    /**
     * RuntimeVersion: 容器运行时版本
     *
     * @param string $runtimeVersion
     */
    public function setRuntimeVersion($runtimeVersion)
    {
        $this->set("RuntimeVersion", $runtimeVersion);
    }

    /**
     * ClusterType: 集群版本
     *
     * @return string|null
     */
    public function getClusterType()
    {
        return $this->get("ClusterType");
    }

    /**
     * ClusterType: 集群版本
     *
     * @param string $clusterType
     */
    public function setClusterType($clusterType)
    {
        $this->set("ClusterType", $clusterType);
    }

    /**
     * LoopbackClientCert: API Server 回环客户端证书
     *
     * @return LoopbackClientCert|null
     */
    public function getLoopbackClientCert()
    {
        return new LoopbackClientCert($this->get("LoopbackClientCert"));
    }

    /**
     * LoopbackClientCert: API Server 回环客户端证书
     *
     * @param LoopbackClientCert $loopbackClientCert
     */
    public function setLoopbackClientCert(array $loopbackClientCert)
    {
        $this->set("LoopbackClientCert", $loopbackClientCert->getAll());
    }
}
