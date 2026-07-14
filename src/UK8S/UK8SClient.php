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
namespace UCloud\UK8S;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UK8S\Apis\AddUK8SExistingUHostRequest;
use UCloud\UK8S\Apis\AddUK8SExistingUHostResponse;
use UCloud\UK8S\Apis\AddUK8SNodeGroupRequest;
use UCloud\UK8S\Apis\AddUK8SNodeGroupResponse;
use UCloud\UK8S\Apis\AddUK8SPHostNodeRequest;
use UCloud\UK8S\Apis\AddUK8SPHostNodeResponse;
use UCloud\UK8S\Apis\AddUK8SUHostNodeRequest;
use UCloud\UK8S\Apis\AddUK8SUHostNodeResponse;
use UCloud\UK8S\Apis\CreateUK8SClusterV2Request;
use UCloud\UK8S\Apis\CreateUK8SClusterV2Response;
use UCloud\UK8S\Apis\DelUK8SClusterRequest;
use UCloud\UK8S\Apis\DelUK8SClusterResponse;
use UCloud\UK8S\Apis\DelUK8SClusterNodeV2Request;
use UCloud\UK8S\Apis\DelUK8SClusterNodeV2Response;
use UCloud\UK8S\Apis\DescribeUK8SClusterRequest;
use UCloud\UK8S\Apis\DescribeUK8SClusterResponse;
use UCloud\UK8S\Apis\DescribeUK8SImageRequest;
use UCloud\UK8S\Apis\DescribeUK8SImageResponse;
use UCloud\UK8S\Apis\DescribeUK8SNodeRequest;
use UCloud\UK8S\Apis\DescribeUK8SNodeResponse;
use UCloud\UK8S\Apis\GetClusterConfigRequest;
use UCloud\UK8S\Apis\GetClusterConfigResponse;
use UCloud\UK8S\Apis\GetUK8SVersionsRequest;
use UCloud\UK8S\Apis\GetUK8SVersionsResponse;
use UCloud\UK8S\Apis\ListUK8SClusterNodeV2Request;
use UCloud\UK8S\Apis\ListUK8SClusterNodeV2Response;
use UCloud\UK8S\Apis\ListUK8SClusterV2Request;
use UCloud\UK8S\Apis\ListUK8SClusterV2Response;
use UCloud\UK8S\Apis\ListUK8SNodeGroupRequest;
use UCloud\UK8S\Apis\ListUK8SNodeGroupResponse;
use UCloud\UK8S\Apis\RemoveUK8SNodeGroupRequest;
use UCloud\UK8S\Apis\RemoveUK8SNodeGroupResponse;

/**
 * This client is used to call actions of **UK8S** service
 */
class UK8SClient extends Client
{

    /**
     * AddUK8SExistingUHost - 将预先创建好的云主机加入到UK8S集群，需要注意的是，该云主机依然会执行重装系统的操作。
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/add_uk8s_existing_uhost
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Password" => (string) Node节点密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，如下：# echo -n Password1 | base64
     *     "ClusterId" => (string) UK8S集群ID。 可从UK8S控制台获取。
     *     "UHostId" => (string) 云主机Id，为了保证节点正常运行，该主机配置不得低于2C4G。
     *     "MaxPods" => (integer) 默认110，生产环境建议小于等于110。
     *     "Labels" => (string) Node节点标签。key=value形式,多组用”,“隔开，最多5组。 如env=pro,type=game
     *     "SubnetId" => (string) 该云主机所属子网Id。
     *     "ImageId" => (string) 镜像 Id，不填时后台程序会自动选用一个可用的镜像 Id，支持用户自定义镜像，自定义镜像必须基于基础镜像制作。
     *     "DisableSchedule" => (boolean) 用于标示添加完节点后是否将节点临时禁用. 传入 "true" 表示禁用,传入其它或不传表示不禁用
     *     "UserData" => (string) 用户自定义数据。当镜像支持Cloud-init Feature时可填写此字段。注意：1、总数据量大小不超过 16K；2、使用base64编码。
     *     "InitScript" => (string) 用户自定义Shell脚本。与UserData的区别在于InitScript在节点初始化完毕后才执行，UserData则是云主机初始化时执行。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddUK8SExistingUHostResponse
     * @throws UCloudException
     */
    public function addUK8SExistingUHost(AddUK8SExistingUHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddUK8SExistingUHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AddUK8SNodeGroup - 添加UK8S节点池
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/add_uk8s_node_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeGroupName" => (string) 节点池名字
     *     "ClusterId" => (string) 集群ID
     *     "ImageId" => (string) 镜像ID
     *     "MachineType" => (string) 云主机机型。枚举值["N", "C", "G", "O", "OS"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *     "MinimalCpuPlatform" => (string) 最低cpu平台，枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"；"Intel/CascadelakeR"; “Amd/Epyc2”,"Amd/Auto"],默认值是"Intel/Auto"
     *     "CPU" => (integer) GPU卡核心数。仅GPU机型支持此字段（可选范围与MachineType+GpuType相关）
     *     "Mem" => (integer) 内存大小。单位：MB
     *     "GpuType" => (string) GPU类型
     *     "GPU" => (integer) GPU卡核心数
     *     "BootDiskType" => (string) 磁盘类型
     *     "DataDiskSize" => (integer) 数据磁盘大小
     *     "DataDiskType" => (string) 磁盘类型
     *     "Tag" => (string) 业务组
     *     "ChargeType" => (string) 计费模式
     *     "BootDiskSize" => (integer) 系统盘大小，单位GB。默认40。范围：[40, 500]。注意SSD本地盘无法调整。
     *     "SubnetId" => (string) 子网 ID。默认为集群创建时填写的子网ID，也可以填写集群同VPC内的子网ID。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "NodeGroupId" => (string) 节点池ID
     * ]
     *
     * @return AddUK8SNodeGroupResponse
     * @throws UCloudException
     */
    public function addUK8SNodeGroup(AddUK8SNodeGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddUK8SNodeGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AddUK8SPHostNode - 为UK8S集群添加一台或多台物理云主机类型的节点。
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/add_uk8s_phost_node
     *
     * Arguments:
     *
     * $args = [
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ClusterId" => (string) UK8S集群ID。 可从UK8S控制台获取。
     *     "Count" => (integer) 最大创建Node节点数量，取值范围是[1,10]。
     *     "Password" => (string) Node节点密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，如下：# echo -n Password1 | base64
     *     "ChargeType" => (string) 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ 默认为月付
     *     "Quantity" => (integer) 购买时长。默认: 1。月付时，此参数传0，代表了购买至月末。
     *     "Labels" => (string) Node节点标签。key=value形式,多组用”,“隔开，最多5组。 如env=pro,type=game
     *     "MaxPods" => (integer) 默认110，生产环境建议小于等于110。
     *     "Type" => (string) 物理机类型，默认为：db-2(基础型-SAS-V3)
     *     "Raid" => (string) Raid配置，默认Raid10 支持:Raid0、Raid1、Raid5、Raid10，NoRaid
     *     "NIC" => (string) 网络环境，可选千兆：1G ，万兆：10G， 默认1G。
     *     "SubnetId" => (string) 子网 ID。默认为集群创建时填写的子网ID，也可以填写集群同VPC内的子网ID。
     *     "ImageId" => (string) 镜像 Id，不填时后台程序会自动选用一个可用的镜像 Id，支持用户自定义镜像，自定义镜像必须基于基础镜像制作。
     *     "DisableSchedule" => (boolean) 用于标示添加完节点后是否将节点临时禁用. 传入 "true" 表示禁用,传入其它或不传表示不禁用
     *     "InitScript" => (string) 用户自定义Shell脚本。与UserData的区别在于InitScript在节点初始化完毕后才执行。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddUK8SPHostNodeResponse
     * @throws UCloudException
     */
    public function addUK8SPHostNode(AddUK8SPHostNodeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddUK8SPHostNodeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * AddUK8SUHostNode - 为UK8S集群添加一台Node节点，机型类型为云主机
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/add_uk8s_uhost_node
     *
     * Arguments:
     *
     * $args = [
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ClusterId" => (string) UK8S集群ID。 可从UK8S控制台获取。
     *     "CPU" => (integer) 虚拟CPU核数。可选参数：2-64（具体机型与CPU的对应关系参照控制台）。默认值: 4。
     *     "Count" => (integer) 创建Node节点数量，取值范围是[1,50]。
     *     "Password" => (string) Node节点密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，如下：# echo -n Password1 | base64
     *     "Mem" => (integer) 内存大小。单位：MB。范围 ：[4096, 262144]，取值为1024的倍数（可选范围参考控制台）。默认值：8192
     *     "ChargeType" => (string) 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时预付费 \\ > Postpay，按小时后付费（支持关机不收费，目前仅部分可用区支持，请联系您的客户经理） \\ 默认为月付
     *     "BootDiskType" => (string) 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *     "BootDiskSize" => (integer) 系统盘大小，单位GB。默认40。范围：[40, 500]。注意SSD本地盘无法调整。
     *     "DataDiskType" => (string) 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *     "DataDiskSize" => (integer) 数据磁盘大小，单位GB。默认0。范围 ：[20, 1000]
     *     "Quantity" => (integer) 购买时长。默认: 1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *     "MachineType" => (string) 云主机机型。枚举值["N", "C", "G", "O", "OS"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *     "GpuType" => (string) GPU类型，枚举值["K80", "P40", "V100",]，MachineType为G时必填
     *     "GPU" => (integer) GPU卡核心数。仅GPU机型支持此字段（可选范围与MachineType+GpuType相关）
     *     "Labels" => (string) Node节点标签。key=value形式,多组用”,“隔开，最多5组。 如env=pro,type=game
     *     "MaxPods" => (integer) 默认110，生产环境建议小于等于110。
     *     "IsolationGroup" => (string) 硬件隔离组id。可通过DescribeIsolationGroup获取。
     *     "ImageId" => (string) 镜像 Id，不填时后台程序会自动选用一个可用的镜像 Id，支持用户自定义镜像，自定义镜像必须基于基础镜像制作。
     *     "SubnetId" => (string) 子网 ID。默认为集群创建时填写的子网ID，也可以填写集群同VPC内的子网ID。
     *     "DisableSchedule" => (boolean) 用于标示添加完节点后是否将节点临时禁用. 传入 "true" 表示禁用,传入其它或不传表示不禁用
     *     "UserData" => (string) 用户自定义数据。当镜像支持Cloud-init Feature时可填写此字段。注意：1、总数据量大小不超过 16K；2、使用base64编码。
     *     "InitScript" => (string) 用户自定义Shell脚本。与UserData的区别在于InitScript在节点初始化完毕后才执行，UserData则是云主机初始化时执行。
     *     "MinimalCpuPlatform" => (string) 最低cpu平台，枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"；"Intel/CascadelakeR"; “Amd/Epyc2”,"Amd/Auto"],默认值是"Intel/Auto"
     *     "Taints" => (string) Node节点污点，形式为key=value:effect，多组taints用”,“隔开,最多支持五组。
     *     "Tag" => (string) 业务组
     *     "NodeGroupId" => (string) 节点池id
     *     "SecurityMode" => (string) 主机安全模式。Firewall：防火墙；SecGroup：安全组；默认值：Firewall。
     *     "NamePrefix" => (string) 自定义主机名前缀。完整的自定义主机名为{NamePrefix}-{NodeIP}。
     *     "NetCapability" => (string) 网络增强特性。枚举值：Normal，不开启; Super，开启网络增强1.0； Ultra，开启网络增强2.0；Extreme，开启网络增强3.0; Infiniband, 开启网络增强4.0（详情参考主机官网文档）
     *     "UNIFeature" => (boolean) 弹性网卡特性。开启了弹性网卡权限位，此特性才生效，默认 false 未开启，true 开启。
     *     "NetworkInterface" => (array<object>) [
     *         [
     *             "EIP" => (object) [
     *                 "Bandwidth" => (integer) 【若绑定EIP，此参数必填】弹性IP的外网带宽, 单位为Mbps. 共享带宽模式下非必传, 非共享带宽模式必须指定非0Mbps带宽. 各地域非共享带宽的带宽范围如下： 流量计费[1-300]，带宽计费[1-800]
     *                 "PayMode" => (string) 弹性IP的计费模式. 枚举值: "Traffic", 流量计费; "Bandwidth", 带宽计费; "ShareBandwidth",共享带宽模式. "Free":免费带宽模式,默认为 "Bandwidth"
     *                 "ShareBandwidthId" => (string) 绑定的共享带宽Id，仅当PayMode为ShareBandwidth时有效
     *                 "OperatorName" => (string) 【若绑定EIP，此参数必填】弹性IP的线路。枚举值: 国际: International BGP: Bgp 各地域允许的线路参数如下: cn-sh1: Bgp cn-sh2: Bgp cn-gd: Bgp cn-bj1: Bgp cn-bj2: Bgp hk: International us-ca: International th-bkk: International kr-seoul:International us-ws:International ge-fra:International sg:International tw-kh:International.其他海外线路均为 International
     *                 "CouponId" => (string) 当前EIP代金券id。请通过DescribeCoupon接口查询，或登录用户中心查看。
     *             ]
     *         ]
     *     ]
     *     "SecurityGroupId" => (string) 防火墙ID，默认：Web推荐防火墙。如何查询SecurityGroupId请参见 [DescribeFirewall](api/unet-api/describe_firewall.html)。
     *     "SecGroupId" => (array<object>) [
     *         [
     *             "Id" => (string) 安全组 ID。至多可以同时绑定5个安全组。
     *             "Priority" => (string) 安全组优先级。取值范围[1, 5]
     *             "Name" => (string) 安全组名称。
     *         ]
     *     ]
     *     "UserLabels" => (string) UK8S用户标签，key=value形式,多组用”,“隔开，最多5组。 如env=pro,type=game
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "NodeIds" => (array<string>) Node实例Id集合
     * ]
     *
     * @return AddUK8SUHostNodeResponse
     * @throws UCloudException
     */
    public function addUK8SUHostNode(AddUK8SUHostNodeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddUK8SUHostNodeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUK8SClusterV2 - 创建UK8S集群
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/create_uk8s_cluster_v2
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VPCId" => (string) 集群Node及Pod所属VPC
     *     "SubnetId" => (string) 集群Node及Pod所属子网
     *     "ServiceCIDR" => (string) Service 网段，用于分配ClusterIP，如172.17.0.0/16。该网段不能与集群所属VPC网段重叠。
     *     "ClusterName" => (string) 集群名称
     *     "Password" => (string) 集群节点密码，包括Master和Node。密码需包含最少一个大写字母，请使用base64进行编码，举例如下：# echo -n Password1 | base64
     *     "Master" => (array<object>) [
     *         [
     *             "Zone" => (string) Master节点所属可用区，需要设置 Master.0.Zone、 Master.1.Zone、Master.2.Zone 三个 Master 节点的可用区。 三个节点可部署在不同可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *             "SecGroupId" => (array<object>) [
     *                 [
     *                     "Id" => (string) 安全组 ID。至多可以同时绑定5个安全组。
     *                     "Priority" => (string) 安全组优先级。取值范围[1, 5]
     *                     "Name" => (string) 安全组名称。
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "MasterMachineType" => (string) Master节点的云主机机型（V2.0），如["N", "C", "O", "OS"]，具体请参照云主机机型。
     *     "MasterCPU" => (integer) Master节点的虚拟CPU核数。可选参数：2-64（具体机型与CPU的对应关系参照控制台）。
     *     "MasterMem" => (integer) Master节点的内存大小。单位：MB。范围 ：[4096, 262144]，取值为1024的倍数（可选范围参考控制台）。
     *     "Nodes" => (array<object>) [
     *         [
     *             "Zone" => (string) 一组Nodes节点所属可用区，可创建多组Nodes节点，如一组是CPU Nodes节点，另一组是GPU Nodes节点。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *             "MachineType" => (string) 一组Nodes节点云主机机型，如["N", "C", "O", "OS"]，具体请参照云主机机型。
     *             "CPU" => (integer) 一组Node节点的虚拟CPU核数。单位：核，范围：[2, 64]，可选范围参考控制台。
     *             "Mem" => (integer) 一组Node节点的内存大小。单位：MB,范围 ：[4096, 262144]，取值为1024的倍数，可选范围参考控制台。
     *             "Count" => (integer) 一组Node节点的数量，范围：[1,10]。
     *             "IsolationGroup" => (string) 一组Node节点的隔离组Id，归属于同一隔离组的虚拟机节点将落在不同的物理机上，单个隔离组最多只能容纳8个节点。参见DescribeIsolationGroup。
     *             "MaxPods" => (integer) Node节点上可运行最大节点数，默认为110。
     *             "Labels" => (string) Node节点标签，形式为key=value，多组Labels用”,“隔开,最多支持五组。
     *             "BootDiskType" => (string) 一组Node节点的系统盘类型，请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *             "BootDiskSIze" => (integer) Node节点的系统盘大小，单位GB，默认为40。范围：[40, 500]。注意SSD本地盘无法调整。
     *             "DataDiskType" => (string) 一组Node节点的数据盘类型，请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *             "GpuType" => (string) 一组Node节点的GPU类型，枚举值["K80", "P40", "V100"]，最新值参考Console。
     *             "GPU" => (integer) 一组Node节点的GPU卡核心数，仅GPU机型支持此字段。
     *             "DataDiskSize" => (integer) 数据磁盘大小，单位GB。默认0。范围 ：[20, 1000]
     *             "MinimalCpuPlatform" => (string) Node节点的最低cpu平台，不选则随机。枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"。
     *             "Taints" => (string) Node节点污点，形式为key=value:effect，多组taints用”,“隔开,最多支持五组。
     *             "SecurityMode" => (string) 主机安全模式。Firewall：防火墙；SecGroup：安全组；默认值：Firewall。
     *             "NamePrefix" => (string) 一组Node的自定义主机名前缀。 完整的自定义主机名为{NamePrefix}-{NodeIP}。
     *             "ImageId" => (string) Node节点的镜像 ID，不填则使用ImageId参数。支持用户自定义镜像。
     *             "UNIFeature" => (string) 弹性网卡特性。开启了弹性网卡权限位，此特性才生效，默认 false 未开启，true 开启。
     *             "NetworkInterface" => (array<object>) [
     *                 [
     *                     "EIP" => (object) [
     *                         "Bandwidth" => (integer) 【若绑定EIP，此参数必填】弹性IP的外网带宽, 单位为Mbps. 共享带宽模式下非必传, 非共享带宽模式必须指定非0Mbps带宽. 各地域非共享带宽的带宽范围如下： 流量计费[1-300]，带宽计费[1-800]
     *                         "PayMode" => (string) 弹性IP的计费模式. 枚举值: "Traffic", 流量计费; "Bandwidth", 带宽计费; "ShareBandwidth",共享带宽模式. "Free":免费带宽模式,默认为 "Bandwidth"
     *                         "ShareBandwidthId" => (string) 绑定的共享带宽Id，仅当PayMode为ShareBandwidth时有效
     *                         "OperatorName" => (string) 【若绑定EIP，此参数必填】弹性IP的线路。枚举值: 国际: International BGP: Bgp 各地域允许的线路参数如下: cn-sh1: Bgp cn-sh2: Bgp cn-gd: Bgp cn-bj1: Bgp cn-bj2: Bgp hk: International us-ca: International th-bkk: International kr-seoul:International us-ws:International ge-fra:International sg:International tw-kh:International.其他海外线路均为 International
     *                         "CouponId" => (string) 当前EIP代金券id。请通过DescribeCoupon接口查询，或登录用户中心查看。
     *                     ]
     *                 ]
     *             ]
     *             "SecurityGroupId" => (string) 防火墙ID，默认：Web推荐防火墙。如何查询SecurityGroupId请参见 [DescribeFirewall](api/unet-api/describe_firewall.html)。
     *             "SecGroupId" => (array<object>) [
     *                 [
     *                     "Id" => (string) 安全组 ID。至多可以同时绑定5个安全组。
     *                     "Priority" => (string) 安全组优先级。取值范围[1, 5]
     *                     "Name" => (string) 安全组名称。
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "MasterBootDiskType" => (string) Master节点系统盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *     "MasterBootDiskSize" => (integer) Master节点系统盘大小，单位GB，默认为40。范围：[40, 500]。注意SSD本地盘无法调整。
     *     "MasterDataDiskType" => (string) Master节点数据盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。默认为SSD云盘
     *     "MasterDataDiskSize" => (integer) Master节点的数据盘大小，单位GB，默认为0。范围 ：[20, 1000]
     *     "ChargeType" => (string) 集群所有节点的付费模式。枚举值为： Year，按年付费； Month，按月付费； Dynamic，按小时付费（需开启权限），默认按月。
     *     "K8sVersion" => (string) k8s集群的版本，版本信息请参考UK8S集群创建页，不指定的话默认为当前支持的最高版本。
     *     "Quantity" => (integer) 购买时长。默认为1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *     "ExternalApiServer" => (string) 是否允许外网访问apiserver，开启：Yes 不开启：No。默认为No。
     *     "MasterIsolationGroup" => (string) 【无效，已删除】当前将自动为Master节点创建隔离组，确保Master节点归属于不同物理机。
     *     "KubeProxy" => (object) [
     *         "Mode" => (string) 集群kube-proxy模式。支持iptables和ipvs，默认为iptables。
     *     ]
     *     "ImageId" => (string) Master节点和Node节点的镜像 ID，不填则随机选择可用的基础镜像。支持用户自定义镜像。
     *     "UserData" => (string) 用户自定义数据。注意：1、总数据量大小不超多16K；2、使用base64编码。
     *     "InitScript" => (string) 用户自定义脚本，与UserData不同，自定义脚本将在集群安装完毕后执行。注意：1、总数据量大小不超多16K；2、使用base64编码。
     *     "MasterMinimalCpuPlatform" => (string) Master节点的最低cpu平台，不选则随机。枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"。
     *     "ClusterDomain" => (string) 创建集群的时候定义clusterdomain
     *     "Tag" => (string) 业务组
     *     "MasterImageId" => (string) Master节点的镜像 ID，不填则使用ImageId参数。支持用户自定义镜像。
     *     "LbClass" => (string) master lb 类型默认ulb，可选ulb nlb
     *     "ForwardSrcIPMethod" => (string) LbClass为nlb的时候支持的源ip转发模式，目前只支持Toa,为空则不开源ip功能 枚举："",Toa
     *     "UserLabels" => (string) UK8S用户标签，key=value形式,多组用”,“隔开，最多5组。 如env=pro,type=game
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ClusterId" => (string) 集群ID
     * ]
     *
     * @return CreateUK8SClusterV2Response
     * @throws UCloudException
     */
    public function createUK8SClusterV2(CreateUK8SClusterV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUK8SClusterV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DelUK8SCluster - 删除UK8S集群
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/del_uk8s_cluster
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ClusterId" => (string) 集群id
     *     "ReleaseUDisk" => (boolean) 是否删除节点挂载的数据盘。枚举值[true:删除，false: 不删除]，默认不删除
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DelUK8SClusterResponse
     * @throws UCloudException
     */
    public function delUK8SCluster(DelUK8SClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DelUK8SClusterResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DelUK8SClusterNodeV2 - 删除集群中的Node节点，删除前务必先将其中的Pod驱逐。
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/del_uk8s_cluster_node_v2
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ClusterId" => (string) UK8S集群ID。 可从UK8S控制台获取。
     *     "NodeId" => (string) Node在UK8S处的唯一标示，如uk8s-reewqe5-sdasadsda。**非云主机或物理云主机资源Id**
     *     "ReleaseDataUDisk" => (boolean) 删除节点时是否释放数据盘。 枚举值[true:释放，false: 不释放]，默认为true。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DelUK8SClusterNodeV2Response
     * @throws UCloudException
     */
    public function delUK8SClusterNodeV2(DelUK8SClusterNodeV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new DelUK8SClusterNodeV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUK8SCluster - 获取集群信息
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/describe_uk8s_cluster
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 所属区域
     *     "ProjectId" => (string) 项目id
     *     "ClusterId" => (string) k8s集群ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ClusterName" => (string) 资源名字
     *     "ClusterId" => (string) 集群ID
     *     "VPCId" => (string) 所属VPC
     *     "SubnetId" => (string) 所属子网
     *     "PodCIDR" => (string) Pod网段
     *     "ServiceCIDR" => (string) 服务网段
     *     "MasterCount" => (integer) Master 节点数量
     *     "MasterList" => (array<object>) Master节点配置信息，具体参考UhostInfo。托管版不返回该信息[
     *         [
     *             "Zone" => (string) 所在机房
     *             "Name" => (string) 主机名称
     *             "CPU" => (integer) Cpu数量
     *             "Memory" => (integer) 内存
     *             "IPSet" => (array<object>) 节点IP信息[
     *                 [
     *                     "Type" => (string) 国际: Internation，BGP: Bgp，内网: Private
     *                     "IPId" => (string) IP资源ID (内网IP无对应的资源ID)
     *                     "IP" => (string) IP地址
     *                     "Bandwidth" => (integer) IP对应的带宽, 单位: Mb (内网IP不显示带宽信息)
     *                     "Default" => (string) 是否默认的弹性网卡的信息。true: 是默认弹性网卡；其他值：不是。
     *                 ]
     *             ]
     *             "DiskSet" => (array<object>) 节点磁盘信息[
     *                 [
     *                     "Type" => (string) 磁盘类型。系统盘: Boot，数据盘: Data,网络盘：Udisk
     *                     "DiskId" => (string) 磁盘长ID
     *                     "Name" => (string) UDisk名字（仅当磁盘是UDisk时返回）
     *                     "Drive" => (string) 磁盘盘符
     *                     "Size" => (integer) 磁盘大小，单位: GB
     *                     "BackupType" => (string) 备份方案，枚举类型：BASIC_SNAPSHOT,普通快照；DATAARK,方舟。无快照则不返回该字段。
     *                     "IOPS" => (integer) 当前主机的IOPS值
     *                     "Encrypted" => (string) Yes: 加密 No: 非加密
     *                     "DiskType" => (string) LOCAL_NOMAL| CLOUD_NORMAL| LOCAL_SSD| CLOUD_SSD|EXCLUSIVE_LOCAL_DISK
     *                     "IsBoot" => (string) True| False
     *                 ]
     *             ]
     *             "NodeId" => (string) 主机ID
     *             "OsName" => (string) 镜像信息
     *             "CreateTime" => (integer) 创建时间
     *             "ExpireTime" => (integer) 到期时间
     *             "State" => (string) 主机状态
     *             "NodeType" => (string) 节点类型：uhost表示云主机;uphost表示物理云主机
     *         ]
     *     ]
     *     "NodeList" => (array<object>) Node节点配置信息,具体参考UhostInfo[
     *         [
     *             "Zone" => (string) 所在机房
     *             "Name" => (string) 主机名称
     *             "CPU" => (integer) Cpu数量
     *             "Memory" => (integer) 内存
     *             "IPSet" => (array<object>) 节点IP信息[
     *                 [
     *                     "Type" => (string) 国际: Internation，BGP: Bgp，内网: Private
     *                     "IPId" => (string) IP资源ID (内网IP无对应的资源ID)
     *                     "IP" => (string) IP地址
     *                     "Bandwidth" => (integer) IP对应的带宽, 单位: Mb (内网IP不显示带宽信息)
     *                     "Default" => (string) 是否默认的弹性网卡的信息。true: 是默认弹性网卡；其他值：不是。
     *                 ]
     *             ]
     *             "DiskSet" => (array<object>) 节点磁盘信息[
     *                 [
     *                     "Type" => (string) 磁盘类型。系统盘: Boot，数据盘: Data,网络盘：Udisk
     *                     "DiskId" => (string) 磁盘长ID
     *                     "Name" => (string) UDisk名字（仅当磁盘是UDisk时返回）
     *                     "Drive" => (string) 磁盘盘符
     *                     "Size" => (integer) 磁盘大小，单位: GB
     *                     "BackupType" => (string) 备份方案，枚举类型：BASIC_SNAPSHOT,普通快照；DATAARK,方舟。无快照则不返回该字段。
     *                     "IOPS" => (integer) 当前主机的IOPS值
     *                     "Encrypted" => (string) Yes: 加密 No: 非加密
     *                     "DiskType" => (string) LOCAL_NOMAL| CLOUD_NORMAL| LOCAL_SSD| CLOUD_SSD|EXCLUSIVE_LOCAL_DISK
     *                     "IsBoot" => (string) True| False
     *                 ]
     *             ]
     *             "NodeId" => (string) 主机ID
     *             "OsName" => (string) 镜像信息
     *             "CreateTime" => (integer) 创建时间
     *             "ExpireTime" => (integer) 到期时间
     *             "State" => (string) 主机状态
     *             "NodeType" => (string) 节点类型：uhost表示云主机;uphost表示物理云主机
     *         ]
     *     ]
     *     "CreateTime" => (integer) 创建时间
     *     "NodeCount" => (integer) Node节点数量
     *     "ApiServer" => (string) 集群apiserver地址
     *     "Status" => (string) 状态
     *     "ExternalApiServer" => (string) 集群外部apiserver地址
     *     "KubeProxy" => (object) kube-proxy配置[
     *         "Mode" => (string) KubeProxy模式，枚举值为[ipvs,iptables]
     *     ]
     *     "Version" => (string) K8S版本
     *     "ClusterDomain" => (string) 自定义或者默认的clusterdomain
     *     "EtcdCert" => (string) 集群etcd服务证书
     *     "EtcdKey" => (string) 集群etcd服务密钥
     *     "CACert" => (string) 集群CA根证书
     *     "MasterResourceStatus" => (string) Master配置预警：Normal正常；Warning 需要升级；Error    需要紧急升级；
     * ]
     *
     * @return DescribeUK8SClusterResponse
     * @throws UCloudException
     */
    public function describeUK8SCluster(DescribeUK8SClusterRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUK8SClusterResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUK8SImage - 获取UK8S支持的Node节点操作系统，可基于该操作系统制定自定义镜像
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/describe_uk8s_image
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageSet" => (array<object>) 虚拟机可用镜像集合, 详见ImageInfo 数组[
     *         [
     *             "ZoneId" => (integer) 可用区 Id
     *             "ImageId" => (string) 镜像 Id
     *             "ImageName" => (string) 镜像名称
     *             "NotSupportGPU" => (boolean) 该镜像是否支持GPU机型，枚举值[true:不支持，false:支持]。
     *         ]
     *     ]
     *     "PHostImageSet" => (array<object>) 物理机可用镜像集合, 详见ImageInfo 数组[
     *         [
     *             "ZoneId" => (integer) 可用区 Id
     *             "ImageId" => (string) 镜像 Id
     *             "ImageName" => (string) 镜像名称
     *             "NotSupportGPU" => (boolean) 该镜像是否支持GPU机型，枚举值[true:不支持，false:支持]。
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUK8SImageResponse
     * @throws UCloudException
     */
    public function describeUK8SImage(DescribeUK8SImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUK8SImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUK8SNode - 用于获取 UK8S 节点详情
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/describe_uk8s_node
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) UK8S 集群 Id
     *     "Name" => (string) K8S 节点IP或者节点ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Name" => (string) 节点名称
     *     "Labels" => (array<string>) 字符串数组，每一项是类似 "kubernetes.io/arch=amd64" 的标签
     *     "Annotations" => (array<string>) 字符串数组，每一项是类似 "node.alpha.kubernetes.io/ttl=0" 的注解
     *     "CreationTimestamp" => (integer) 时间戳，单位是 秒
     *     "ProviderID" => (string) 字符串，如："UCloud://cn-sh2-02//uk8s-vsc0vgob-n-mpzxc"
     *     "KernelVersion" => (string) 内核版本，如："4.19.0-6.el7.ucloud.x86_64"
     *     "OSImage" => (string) 操作系统类型，如："CentOS Linux 7 (Core)"
     *     "ContainerRuntimeVersion" => (string) 容器运行时版本，如："docker://18.9.9"
     *     "KubeletVersion" => (string) kubelet 版本
     *     "KubeProxyVersion" => (string) kubeproxy 版本
     *     "InternalIP" => (string) 内部 IP 地址
     *     "Hostname" => (string) 主机名
     *     "AllocatedPodCount" => (integer) 已分配到当前节点的 Pod 数量
     *     "PodCapacity" => (integer) 节点允许的可分配 Pod 最大数量
     *     "Unschedulable" => (boolean) 是否禁止调度
     *     "CPUCapacity" => (string) 节点 CPU 总量
     *     "MemoryCapacity" => (string) 节点内存总量
     *     "MemoryRequests" => (string) 节点上已分配 Pod 的内存请求量
     *     "MemoryRequestsFraction" => (string) 节点上已分配 Pod 的内存请求量占内存总量的比例，如返回值为 "4.5"，则意味着请求量占总量的 4.5%
     *     "MemoryLimits" => (string) 节点上已分配 Pod 的内存限制量
     *     "MemoryLimitsFraction" => (string) 节点上已分配 Pod 的内存限制量占内存总量的比例，如返回值为 "18"，则意味着限制量占总量的 18%
     *     "CPURequests" => (string) 节点上已分配 Pod 的 CPU 请求量
     *     "CPURequestsFraction" => (string) 节点上已分配 Pod 的 CPU 请求量占 CPU 总量的比例
     *     "CPULimits" => (string) 节点上已分配 Pod 的 CPU 限制值
     *     "CPULimitsFraction" => (string) 节点上已分配 Pod 的 CPU 限制值占 CPU 总量的比例
     *     "Conditions" => (array<object>) 节点状态数组[
     *         [
     *             "Type" => (string) Condition 类型，如 MemoryPressure、DiskPressure、PIDPressure、Ready
     *             "Status" => (string) 状态，False、True
     *             "LastProbeTime" => (string) 最后一次上报状态的时间
     *             "LastTransitionTime" => (string) 最后一次状态转变时间
     *             "Reason" => (string) 状态变化的原因
     *             "Message" => (string) 状态变化的描述信息
     *         ]
     *     ]
     *     "ContainerImages" => (array<string>) 节点上镜像名称数组
     *     "Taints" => (array<string>) 字符串数组，每一项是类似 "node-role.kubernetes.io/master:NoSchedule" 的污点
     * ]
     *
     * @return DescribeUK8SNodeResponse
     * @throws UCloudException
     */
    public function describeUK8SNode(DescribeUK8SNodeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUK8SNodeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetClusterConfig - 获取集群配置文件，管理集群的凭证
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/get_cluster_config
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 所在项目
     *     "Region" => (string) 所在区域
     *     "ClusterId" => (string) 集群ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "KubeConfig" => (string) 配置信息
     *     "ExternalKubeConfig" => (string) 开启公网apiserver的情况下，有数据返回。
     *     "Updatable" => (boolean) 用于标示 kubeconfig 是否可以进行替换更新
     * ]
     *
     * @return GetClusterConfigResponse
     * @throws UCloudException
     */
    public function getClusterConfig(GetClusterConfigRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetClusterConfigResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUK8SVersions - 获取支持创建的UK8S集群版本、Containerd版本
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/get_uk8s_versions
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Kind" => (string) 集群类型，可选值为[Dedicated]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (array<object>) UK8S 版本信息列表。[
     *         [
     *             "K8sVersion" => (string) K8S 版本
     *             "ContainerdVersion" => (string) Containerd 版本
     *         ]
     *     ]
     * ]
     *
     * @return GetUK8SVersionsResponse
     * @throws UCloudException
     */
    public function getUK8SVersions(GetUK8SVersionsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUK8SVersionsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUK8SClusterNodeV2 - 获取UK8S集群节点信息
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/list_uk8s_cluster_node_v2
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) UK8S集群ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "NodeSet" => (array<object>) 节点详细信息，见NodeInfoV2。[
     *         [
     *             "Zone" => (string) Node所在可用区
     *             "NodeId" => (string) NodeId，Node在UK8S处的唯一标示，如uk8s-reewqe5-sdasadsda
     *             "NodeRole" => (string) node角色，枚举值为master、node
     *             "NodeStatus" => (string) Node的状态：枚举值：初始化："Initializing"；启动中："Starting"；运行："Running"；停止中："Stopping"；停止："Stopped"；待删除："ToBeDeleted"；删除中："Deleting"；异常："Error"；安装失败："Install Fail"；
     *             "InstanceType" => (string) Node节点的资源类型，枚举值为UHost或UPHost。
     *             "InstanceName" => (string) 资源名称，初始值等于NodeId，用户可在UHost或UPHost处修改。
     *             "InstanceId" => (string) 资源ID，如uhost-xxxx，或uphost-xxxxx。
     *             "MachineType" => (string) 机型类别，分别对应Uhost的MachineType或PHost的PHostType。
     *             "OsType" => (string) Node节点的操作系统类别，如Linux或Windows。
     *             "OsName" => (string) Node节点的镜像名称。
     *             "CPU" => (integer) Node节点CPU核数，单位: 个。
     *             "Memory" => (integer) 内存大小，单位: MB。
     *             "IPSet" => (array<object>) 节点IP信息，详细信息见 UHostIPSet。[
     *                 [
     *                     "Type" => (string) 国际: Internation，BGP: Bgp，内网: Private
     *                     "IPId" => (string) IP资源ID (内网IP无对应的资源ID)
     *                     "IP" => (string) IP地址
     *                     "Bandwidth" => (integer) IP对应的带宽, 单位: Mb (内网IP不显示带宽信息)
     *                     "VPCId" => (string) IP地址对应的VPC ID
     *                     "SubnetId" => (string) IP地址对应的子网 ID
     *                     "Mac" => (string) Mac地址
     *                 ]
     *             ]
     *             "CreateTime" => (integer) 节点创建时间
     *             "ExpireTime" => (integer) 节点计费到期时间
     *             "AsgId" => (string) 节点所属伸缩组ID，非伸缩组创建出来的节点，伸缩组ID为Default。
     *             "Unschedulable" => (boolean) 是否允许Pod调度到该节点，枚举值为true或false。
     *             "KubeProxy" => (object) kubeproxy信息，详细信息见KubeProxy。[
     *                 "Mode" => (string) KubeProxy模式，枚举值为[ipvs,iptables]
     *             ]
     *             "NodeLogInfo" => (string) 加节点时判断是否没有资源，如果返回NORESOURCE则代表没有资源了
     *             "GPU" => (integer) 节点的GPU颗数。
     *         ]
     *     ]
     *     "TotalCount" => (integer) 满足条件的节点数量，包括Master。
     * ]
     *
     * @return ListUK8SClusterNodeV2Response
     * @throws UCloudException
     */
    public function listUK8SClusterNodeV2(ListUK8SClusterNodeV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUK8SClusterNodeV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUK8SClusterV2 - 获取UK8S集群列表信息
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/list_uk8s_cluster_v2
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0。
     *     "Limit" => (integer) 返回数据长度，默认为20。
     *     "ClusterId" => (string) UK8S集群ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ClusterCount" => (integer) 满足条件的集群数量
     *     "ClusterSet" => (array<object>) 集群信息，具体参考ClusterSet[
     *         [
     *             "ClusterName" => (string) 资源名字
     *             "ClusterId" => (string) 集群ID
     *             "VPCId" => (string) 所属VPC
     *             "SubnetId" => (string) 所属子网
     *             "PodCIDR" => (string) Pod网段
     *             "ServiceCIDR" => (string) 服务网段
     *             "MasterCount" => (integer) Master 节点数量
     *             "ApiServer" => (string) 集群apiserver地址
     *             "K8sVersion" => (string) 集群版本
     *             "ClusterLogInfo" => (string) 创建集群时判断如果为NORESOURCE则为没资源，否则为空
     *             "CreateTime" => (integer) 创建时间
     *             "NodeCount" => (integer) Node节点数量
     *             "ExternalApiServer" => (string) 集群外部apiserver地址
     *             "Status" => (string) 集群状态，枚举值：初始化："INITIALIZING"；启动中："STARTING"；创建失败："CREATEFAILED"；正常运行："RUNNING"；添加节点："ADDNODE"；删除节点："DELNODE"；删除中："DELETING"；删除失败："DELETEFAILED"；错误："ERROR"；升级插件："UPDATE_PLUGIN"；更新插件信息："UPDATE_PLUGIN_INFO"；异常："ABNORMAL"；升级集群中："UPGRADING"；容器运行时切换："CONVERTING"
     *         ]
     *     ]
     * ]
     *
     * @return ListUK8SClusterV2Response
     * @throws UCloudException
     */
    public function listUK8SClusterV2(ListUK8SClusterV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUK8SClusterV2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUK8SNodeGroup - 列出UK8S节点池
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/list_uk8s_node_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ClusterId" => (string) 集群ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "NodeGroupList" => (array<object>) 节点池列表[
     *         [
     *             "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *             "NodeGroupId" => (string) 节点池ID
     *             "NodeGroupName" => (string) 节点池名字
     *             "ImageId" => (string) 镜像ID
     *             "MachineType" => (string) 机型
     *             "MinimalCpuPlatform" => (string) cpu平台
     *             "CPU" => (integer) 虚拟CPU核数
     *             "Mem" => (integer) 内存大小
     *             "GpuType" => (string) GPU类型
     *             "GPU" => (integer) GPU卡核心数
     *             "BootDiskType" => (string) 系统盘类型
     *             "BootDiskSize" => (integer) 系统盘大小
     *             "DataDiskSize" => (integer) 数据盘大小
     *             "DataDiskType" => (string) 数据盘类型
     *             "Tag" => (string) 业务组
     *             "ChargeType" => (string) 付费方式
     *             "NodeList" => (array<string>) 节点id列表
     *             "SubnetId" => (string) 子网 ID。默认为集群创建时填写的子网ID，也可以填写集群同VPC内的子网ID。
     *             "IsolationGroupId" => (string) 硬件隔离组id。可通过DescribeIsolationGroup获取。
     *             "MaxPods" => (string) int默认110，生产环境建议小于等于110。
     *             "UserData" => (string) 用户自定义数据。当镜像支持Cloud-init Feature时可填写此字段。注意：1、总数据量大小不超过 16K；2、使用base64编码。
     *             "InitScript" => (string) 用户自定义Shell脚本。与UserData的区别在于InitScript在节点初始化完毕后才执行，UserData则是云主机初始化时执行。
     *             "Taints" => (string) Node节点污点，形式为key=value:effect，多组taints用”,“隔开,最多支持五组。
     *             "Labels" => (string) Node节点标签。key=value形式,多组用”,“隔开，最多5组。 如env=pro,type=game
     *         ]
     *     ]
     * ]
     *
     * @return ListUK8SNodeGroupResponse
     * @throws UCloudException
     */
    public function listUK8SNodeGroup(ListUK8SNodeGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUK8SNodeGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RemoveUK8SNodeGroup - 删除UK8S节点池
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/remove_uk8s_node_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "NodeGroupId" => (string) 节点池Id
     *     "ClusterId" => (string) 集群id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RemoveUK8SNodeGroupResponse
     * @throws UCloudException
     */
    public function removeUK8SNodeGroup(RemoveUK8SNodeGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RemoveUK8SNodeGroupResponse($resp->toArray(), $resp->getRequestId());
    }
}
