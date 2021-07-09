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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Request\Request;
use UCloud\UK8S\Params\CreateUK8SClusterV2ParamMaster;
use UCloud\UK8S\Params\CreateUK8SClusterV2ParamNodes;
use UCloud\UK8S\Params\CreateUK8SClusterV2ParamKubeProxy;

class CreateUK8SClusterV2Request extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUK8SClusterV2"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("VPCId");
        $this->markRequired("SubnetId");
        $this->markRequired("ServiceCIDR");
        $this->markRequired("ClusterName");
        $this->markRequired("Password");
        $this->markRequired("MasterMachineType");
        $this->markRequired("MasterCPU");
        $this->markRequired("MasterMem");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region) {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * VPCId: 集群Node及Pod所属VPC
     *
     * @return string|null
     */
    public function getVPCId(): string {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 集群Node及Pod所属VPC
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId) {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 集群Node及Pod所属子网
     *
     * @return string|null
     */
    public function getSubnetId(): string {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 集群Node及Pod所属子网
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId) {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * ServiceCIDR: Service 网段，用于分配ClusterIP，如172.17.0.0/16。该网段不能与集群所属VPC网段重叠。
     *
     * @return string|null
     */
    public function getServiceCIDR(): string {
        return $this->get("ServiceCIDR");
    }

    /**
     * ServiceCIDR: Service 网段，用于分配ClusterIP，如172.17.0.0/16。该网段不能与集群所属VPC网段重叠。
     *
     * @param string $serviceCIDR
     */
    public function setServiceCIDR(string $serviceCIDR) {
        $this->set("ServiceCIDR", $serviceCIDR);
    }

    /**
     * ClusterName: 集群名称
     *
     * @return string|null
     */
    public function getClusterName(): string {
        return $this->get("ClusterName");
    }

    /**
     * ClusterName: 集群名称
     *
     * @param string $clusterName
     */
    public function setClusterName(string $clusterName) {
        $this->set("ClusterName", $clusterName);
    }

    /**
     * Password: 集群节点密码，包括Master和Node。密码需包含最少一个大写字母，请使用base64进行编码，举例如下：# echo -n Password1 | base64
     *
     * @return string|null
     */
    public function getPassword(): string {
        return $this->get("Password");
    }

    /**
     * Password: 集群节点密码，包括Master和Node。密码需包含最少一个大写字母，请使用base64进行编码，举例如下：# echo -n Password1 | base64
     *
     * @param string $password
     */
    public function setPassword(string $password) {
        $this->set("Password", $password);
    }

    /**
     * Master: 
     *
     * @return CreateUK8SClusterV2ParamMaster[]|null
     */
    public function getMaster(): array {
        $items = $this->get("Master") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUK8SClusterV2ParamMaster($item));
        }
        return $result;
    }

    /**
     * Master: 
     *
     * @param CreateUK8SClusterV2ParamMaster[] $master
     */
    public function setMaster(array $master) {
        $result = [];
        foreach ($master as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * MasterMachineType: Master节点的云主机机型（V2.0），如["N", "C", "O", "OS"]，具体请参照云主机机型。
     *
     * @return string|null
     */
    public function getMasterMachineType(): string {
        return $this->get("MasterMachineType");
    }

    /**
     * MasterMachineType: Master节点的云主机机型（V2.0），如["N", "C", "O", "OS"]，具体请参照云主机机型。
     *
     * @param string $masterMachineType
     */
    public function setMasterMachineType(string $masterMachineType) {
        $this->set("MasterMachineType", $masterMachineType);
    }

    /**
     * MasterCPU: Master节点的虚拟CPU核数。可选参数：2-64（具体机型与CPU的对应关系参照控制台）。
     *
     * @return int|null
     */
    public function getMasterCPU(): int {
        return $this->get("MasterCPU");
    }

    /**
     * MasterCPU: Master节点的虚拟CPU核数。可选参数：2-64（具体机型与CPU的对应关系参照控制台）。
     *
     * @param int $masterCPU
     */
    public function setMasterCPU(int $masterCPU) {
        $this->set("MasterCPU", $masterCPU);
    }

    /**
     * MasterMem: Master节点的内存大小。单位：MB。范围 ：[4096, 262144]，取值为1024的倍数（可选范围参考控制台）。
     *
     * @return int|null
     */
    public function getMasterMem(): int {
        return $this->get("MasterMem");
    }

    /**
     * MasterMem: Master节点的内存大小。单位：MB。范围 ：[4096, 262144]，取值为1024的倍数（可选范围参考控制台）。
     *
     * @param int $masterMem
     */
    public function setMasterMem(int $masterMem) {
        $this->set("MasterMem", $masterMem);
    }

    /**
     * Nodes: 
     *
     * @return CreateUK8SClusterV2ParamNodes[]|null
     */
    public function getNodes(): array {
        $items = $this->get("Nodes") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUK8SClusterV2ParamNodes($item));
        }
        return $result;
    }

    /**
     * Nodes: 
     *
     * @param CreateUK8SClusterV2ParamNodes[] $nodes
     */
    public function setNodes(array $nodes) {
        $result = [];
        foreach ($nodes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * MasterBootDiskType: Master节点系统盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @return string|null
     */
    public function getMasterBootDiskType(): string {
        return $this->get("MasterBootDiskType");
    }

    /**
     * MasterBootDiskType: Master节点系统盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @param string $masterBootDiskType
     */
    public function setMasterBootDiskType(string $masterBootDiskType) {
        $this->set("MasterBootDiskType", $masterBootDiskType);
    }

    /**
     * MasterDataDiskType: Master节点数据盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @return string|null
     */
    public function getMasterDataDiskType(): string {
        return $this->get("MasterDataDiskType");
    }

    /**
     * MasterDataDiskType: Master节点数据盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *
     * @param string $masterDataDiskType
     */
    public function setMasterDataDiskType(string $masterDataDiskType) {
        $this->set("MasterDataDiskType", $masterDataDiskType);
    }

    /**
     * MasterMinmalCpuPlatform: Master节点的最低cpu平台，不选则随机。枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"。
     *
     * @return string|null
     */
    public function getMasterMinmalCpuPlatform(): string {
        return $this->get("MasterMinmalCpuPlatform");
    }

    /**
     * MasterMinmalCpuPlatform: Master节点的最低cpu平台，不选则随机。枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"。
     *
     * @param string $masterMinmalCpuPlatform
     */
    public function setMasterMinmalCpuPlatform(string $masterMinmalCpuPlatform) {
        $this->set("MasterMinmalCpuPlatform", $masterMinmalCpuPlatform);
    }

    /**
     * MasterDataDiskSize: Master节点的数据盘大小，单位GB，默认为0。范围 ：[20, 1000]
     *
     * @return int|null
     */
    public function getMasterDataDiskSize(): int {
        return $this->get("MasterDataDiskSize");
    }

    /**
     * MasterDataDiskSize: Master节点的数据盘大小，单位GB，默认为0。范围 ：[20, 1000]
     *
     * @param int $masterDataDiskSize
     */
    public function setMasterDataDiskSize(int $masterDataDiskSize) {
        $this->set("MasterDataDiskSize", $masterDataDiskSize);
    }

    /**
     * ChargeType: 集群所有节点的付费模式。枚举值为： Year，按年付费； Month，按月付费； Dynamic，按小时付费（需开启权限），默认按月。
     *
     * @return string|null
     */
    public function getChargeType(): string {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 集群所有节点的付费模式。枚举值为： Year，按年付费； Month，按月付费； Dynamic，按小时付费（需开启权限），默认按月。
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType) {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * K8sVersion: k8s集群的版本，版本信息请参考UK8S集群创建页，不指定的话默认为当前支持的最高版本。
     *
     * @return string|null
     */
    public function getK8sVersion(): string {
        return $this->get("K8sVersion");
    }

    /**
     * K8sVersion: k8s集群的版本，版本信息请参考UK8S集群创建页，不指定的话默认为当前支持的最高版本。
     *
     * @param string $k8sVersion
     */
    public function setK8sVersion(string $k8sVersion) {
        $this->set("K8sVersion", $k8sVersion);
    }

    /**
     * Quantity: 购买时长。默认为1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *
     * @return int|null
     */
    public function getQuantity(): int {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长。默认为1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity) {
        $this->set("Quantity", $quantity);
    }

    /**
     * ExternalApiServer: 是否允许外网访问apiserver，开启：Yes 不开启：No。默认为No。
     *
     * @return string|null
     */
    public function getExternalApiServer(): string {
        return $this->get("ExternalApiServer");
    }

    /**
     * ExternalApiServer: 是否允许外网访问apiserver，开启：Yes 不开启：No。默认为No。
     *
     * @param string $externalApiServer
     */
    public function setExternalApiServer(string $externalApiServer) {
        $this->set("ExternalApiServer", $externalApiServer);
    }

    /**
     * MasterIsolationGroup: 【无效，已删除】当前将自动为Master节点创建隔离组，确保Master节点归属于不同物理机。
     *
     * @return string|null
     */
    public function getMasterIsolationGroup(): string {
        return $this->get("MasterIsolationGroup");
    }

    /**
     * MasterIsolationGroup: 【无效，已删除】当前将自动为Master节点创建隔离组，确保Master节点归属于不同物理机。
     *
     * @param string $masterIsolationGroup
     */
    public function setMasterIsolationGroup(string $masterIsolationGroup) {
        $this->set("MasterIsolationGroup", $masterIsolationGroup);
    }

    /**
     * KubeProxy: 
     *
     * @return CreateUK8SClusterV2ParamKubeProxy|null
     */
    public function getKubeProxy(): CreateUK8SClusterV2ParamKubeProxy {
        return new CreateUK8SClusterV2ParamKubeProxy($this->get("KubeProxy"));
    }

    /**
     * KubeProxy: 
     *
     * @param CreateUK8SClusterV2ParamKubeProxy $kubeProxy
     */
    public function setKubeProxy(CreateUK8SClusterV2ParamKubeProxy $kubeProxy) {
        $this->set("KubeProxy", $kubeProxy->getAll());
    }

    /**
     * ImageId: Master节点和Node节点的镜像 ID，不填则随机选择可用的基础镜像。支持用户自定义镜像。
     *
     * @return string|null
     */
    public function getImageId(): string {
        return $this->get("ImageId");
    }

    /**
     * ImageId: Master节点和Node节点的镜像 ID，不填则随机选择可用的基础镜像。支持用户自定义镜像。
     *
     * @param string $imageId
     */
    public function setImageId(string $imageId) {
        $this->set("ImageId", $imageId);
    }

    /**
     * UserData: 用户自定义数据。注意：1、总数据量大小不超多16K；2、使用base64编码。
     *
     * @return string|null
     */
    public function getUserData(): string {
        return $this->get("UserData");
    }

    /**
     * UserData: 用户自定义数据。注意：1、总数据量大小不超多16K；2、使用base64编码。
     *
     * @param string $userData
     */
    public function setUserData(string $userData) {
        $this->set("UserData", $userData);
    }

    /**
     * InitScript: 用户自定义脚本，与UserData不同，自定义脚本将在集群安装完毕后执行。注意：1、总数据量大小不超多16K；2、使用base64编码。
     *
     * @return string|null
     */
    public function getInitScript(): string {
        return $this->get("InitScript");
    }

    /**
     * InitScript: 用户自定义脚本，与UserData不同，自定义脚本将在集群安装完毕后执行。注意：1、总数据量大小不超多16K；2、使用base64编码。
     *
     * @param string $initScript
     */
    public function setInitScript(string $initScript) {
        $this->set("InitScript", $initScript);
    }


}
