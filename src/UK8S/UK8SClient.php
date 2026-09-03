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
use UCloud\UK8S\Apis\CreateUK8SULSConfigRequest;
use UCloud\UK8S\Apis\CreateUK8SULSConfigResponse;
use UCloud\UK8S\Apis\DelUK8SClusterRequest;
use UCloud\UK8S\Apis\DelUK8SClusterResponse;
use UCloud\UK8S\Apis\DelUK8SClusterNodeV2Request;
use UCloud\UK8S\Apis\DelUK8SClusterNodeV2Response;
use UCloud\UK8S\Apis\DeleteUK8SULSConfigRequest;
use UCloud\UK8S\Apis\DeleteUK8SULSConfigResponse;
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
use UCloud\UK8S\Apis\ListUK8SULSConfigRequest;
use UCloud\UK8S\Apis\ListUK8SULSConfigResponse;
use UCloud\UK8S\Apis\RemoveUK8SNodeGroupRequest;
use UCloud\UK8S\Apis\RemoveUK8SNodeGroupResponse;
use UCloud\UK8S\Apis\UpdateUK8SULSConfigRequest;
use UCloud\UK8S\Apis\UpdateUK8SULSConfigResponse;

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
     *     "Mem" => (integer) 内存大小。单位：MB。范围 ：[4096, 262144]，取值为1024的倍数（可选范围参考控制台）。默认值：8192
     *     "ChargeType" => (string) 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时预付费 \\ > Postpay，按小时后付费（支持关机不收费，目前仅部分可用区支持，请联系您的客户经理） \\ 默认为月付
     *     "Password" => (string) Node节点密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，如下：# echo -n Password1 | base64
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
     *                 "OperatorName" => (string) 【若绑定EIP，此参数必填】弹性IP的线路。枚举值: 国际: International，BGP: Bgp。各地域允许的线路参数如下: cn-sh1: Bgp cn-sh2: Bgp cn-gd: Bgp cn-bj1: Bgp cn-bj2: Bgp hk: International us-ca: International th-bkk: International kr-seoul:International us-ws:International ge-fra:International sg:International tw-kh:International.其他海外线路均为 International
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
     *     "UHostFamily" => (string) 主机规格族
     *     "UserLabels" => (array<object>) [
     *         [
     *             "Key" => (string) UK8S用户资源标签的键值
     *             "Value" => (string) UK8S用户资源标签的值
     *         ]
     *     ]
     *     "KubeletConfiguration" => (object) [
     *         "ContainerLogMaxFiles" => (string) 全量KubeletConfiguration.XXX定义参考AddUK8SNodeGroup接口: https://uxiao.ucloudadmin.com/#/api-manager/api/detail/UK8S/AddUK8SNodeGroup
     *     ]
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
     * CreateUK8SULSConfig - 创建 LogConfig 自定义资源，用于声明式地定义日志采集规则
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/create_uk8s_uls_config
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TopicID" => (string) 日志服务中用于接收日志的目标 Topic ID。
     *     "ClusterId" => (string) UK8S 集群ID。
     *     "Name" => (string) 要创建的日志的采集规则的名称，不能重复。总长度不能超过 253个字符。字符类型：只能包含小写字母（a-z）、数字（0-9）、破折号（-）和点（.）。开头和结尾字符：必须以小写字母或数字开头，并且也必须以小写字母或数字结尾。不允许以 - 或 . 开头或结尾。连续特殊字符：不能连续出现点（.）或破折号（-）。
     *     "ExtractRule" => (object) [
     *         "LogType" => (string) 日志解析类型，决定了如何结构化日志。可选值: multi_line_delimiter：多行分隔符，delimiter:分隔符，full_regex:完全正则，multi_line_full_regex:多行完全正则，minimal_list:单行全文日志,multi_line:多行全文日志
     *         "CollectPolicy" => (string) 采集策略。可选值: full (全量采集存量日志), increment (从当前时间点增量采集)。默认为 full。
     *         "Encode" => (string) 日志原文的编码格式。可选值: utf-8, gbk。默认为 utf-8。
     *         "Keys" => (array<string>) 当LogType 为分隔符、正则、多行正则时可用
     *         "Delimiter" => (string) 当 LogType 为delimiter 时可选，接收 "space"、"tab"、"|"、";"、","。
     *         "BeginningRegex" => (string) 行首正则表达式。当 logType 为多行模式 (如 multi_line 或 multi_line_full_regex) 时，用于标识一条新日志的开始。
     *         "LogRegex" => (string) 日志提取正则表达式。当 logType 为正则模式 (如 full_regex,multi_line_full_regex) 时，用于从日志中提取字段。
     *         "ExtractRule" => (object) [
     *             "LogRegexBase64" => (string) Base64 编码的日志提取正则表达式。
     *         ]
     *         "TimeKey" => (string) 当日志为 json 或正则提取时，指定包含日志时间的字段名 (Key)。
     *         "TimeFormat" => (string) timeKey 对应的时间格式。
     *         "UnMatchUpload" => (string) 是否上传解析失败的日志。true 表示上传，false 表示丢弃。默认为 false。
     *         "UnMatchKey" => (string) 没有设置默认值；UnMatchUpload="true" 时强制要求填写
     *         "DelimiterBase64" => (string) Base64 编码的分隔符，优先级高于 Delimiter
     *         "BeginningRegexBase64" => (string) Base64 编码的行首正则，优先级高于 BeginningRegex
     *     ]
     *     "InputDetail" => (object) [
     *         "Type" => (string) 日志输入类型。支持 container_file 和 container_stdout
     *         "Metadata" => (object) [
     *             "Container" => (string) 指定具体要采集元数据的容器名。如果留空，则不采集容器的元数据,可选字段：container_name,namespace,pod_name,pod_ip,pod_uid,container_id,image_name。Pod Label 元数据通过指定 InputDetail.Metadata.Labels字段。
     *             "Labels" => (string) 定义要采集哪些 Pod 的标签 (Labels)。可选值: * (采集所有标签), "app,version" (仅采集 app 和 version), "" (不采集任何标签)。
     *         ]
     *         "FilePaths" => (array<object>) [
     *             [
     *                 "Path" => (string) 定义采集路径
     *                 "File" => (string) 定义采集路径的文件名
     *             ]
     *         ]
     *         "Stream" => (string) all、stdout、stderr，默认 all (用于 InputDetail.Type = container_stdout)
     *     ]
     *     "MatchRule" => (object) [
     *         "ContainerOperator" => (string) 容器名称匹配操作符。支持：in(包含)，notin(不包含)
     *         "Container" => (string) 要匹配的容器名称，*表示所有容器，用逗号分隔
     *         "Workloads" => (array<object>) [
     *             [
     *                 "Namespace" => (string) 按工作负载匹配时，工作负载所在的命名空间。
     *                 "Type" => (string) 按工作负载匹配时，工作负载的类型，例如 deployment, statefulset, daemonset,job, cronjob。
     *                 "Name" => (string) 按工作负载匹配时，工作负载的名称。
     *             ]
     *         ]
     *         "PodLabels" => (object) [
     *             "NamespaceOperator" => (string) 指定/排除命名空间, 可选值: in/notin
     *             "Namespace" => (string) 命名空间名称
     *             "Labels" => (array<object>) [
     *                 [
     *                     "Key" => (string) 按 Pod 标签匹配时，要匹配的标签的 Key。
     *                     "ValueOperator" => (string) 按 Pod 标签匹配时，标签值的匹配操作符。可选值: in, notin。
     *                     "Value" => (string) 按 Pod 标签匹配时，要匹配的标签的值。
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return CreateUK8SULSConfigResponse
     * @throws UCloudException
     */
    public function createUK8SULSConfig(CreateUK8SULSConfigRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUK8SULSConfigResponse($resp->toArray(), $resp->getRequestId());
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
     * DeleteUK8SULSConfig - 删除指定UK8S集群的日志采集规则。
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/delete_uk8s_uls_config
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表。
     *     "Zone" => (string) 可用区。参见可用区列表。
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。请参考GetProjectList接口。
     *     "ClusterId" => (string) 要操作的 UK8S 集群的 ID。
     *     "Name" => (string) 要删除的日志的采集规则的名称。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUK8SULSConfigResponse
     * @throws UCloudException
     */
    public function deleteUK8SULSConfig(DeleteUK8SULSConfigRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUK8SULSConfigResponse($resp->toArray(), $resp->getRequestId());
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
     *                     "IPMode" => (string) IP 地址分配模式
     *                     "VPCId" => (string) IP 所属的 VPC Id
     *                     "SubnetId" => (string) IP 所在的 子网 Id
     *                     "Mac" => (string) 网卡的 MAC 地址
     *                     "NetworkInterfaceId" => (string) 虚拟网卡 Id
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
     *             "GPU" => (integer) GPU 数量
     *             "GpuType" => (string) GPU 型号
     *             "BasicImageName" => (string) 基础镜像名称
     *             "OsType" => (string) 操作系统类型
     *             "TotalDiskSpace" => (integer) 节点总磁盘空间
     *             "MachineType" => (string) 主机机型类别
     *             "SecGroupId" => (array<object>) 节点关联的安全组列表[
     *                 [
     *                     "Id" => (string) 安全组名称
     *                     "Name" => (string) 安全组id
     *                     "Priority" => (string) 安全组优先级
     *                 ]
     *             ]
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
     *                     "IPMode" => (string) IP 地址分配模式
     *                     "VPCId" => (string) IP 所属的 VPC Id
     *                     "SubnetId" => (string) IP 所在的 子网 Id
     *                     "Mac" => (string) 网卡的 MAC 地址
     *                     "NetworkInterfaceId" => (string) 虚拟网卡 Id
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
     *             "GPU" => (integer) GPU 数量
     *             "GpuType" => (string) GPU 型号
     *             "BasicImageName" => (string) 基础镜像名称
     *             "OsType" => (string) 操作系统类型
     *             "TotalDiskSpace" => (integer) 节点总磁盘空间
     *             "MachineType" => (string) 主机机型类别
     *             "SecGroupId" => (array<object>) 节点关联的安全组列表[
     *                 [
     *                     "Id" => (string) 安全组名称
     *                     "Name" => (string) 安全组id
     *                     "Priority" => (string) 安全组优先级
     *                 ]
     *             ]
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
     *     "CNIMode" => (string) CNI模式，可选值VPC/Calico
     *     "MonitorType" => (string) 集群的监控类型：no无监控；cloudwatch统一监控平台；prometheus内置监控
     *     "Autoscaler" => (object) 集群的节点伸缩(CA)配置[
     *         "ScaleDownUnneededTime" => (string) 缩容触发延时
     *         "ScaleDownUtilizationThreshold" => (string) CPU缩容阈值
     *         "ScaleDownDelayAfterAdd" => (string) 静默时间
     *         "Enabled" => (integer) 打开/关闭
     *         "Version" => (string) 伸缩器版本
     *         "UpdateTime" => (integer)
     *         "ScaleDownGpuUtilizationThreshold" => (string) GPU缩容阈值
     *     ]
     *     "EnableUserAuth" => (boolean) 是否开启了授权管理功能
     *     "DedicatedPodSubnet" => (boolean) Pod是否使用独立子网
     *     "PodSubnetIds" => (array<string>) Pod使用的独立子网列表
     *     "DeleteProtection" => (integer) 删除保护开关。0表示不开启，1表示开启。默认不开启
     *     "PodSubnetSecGroups" => (array<string>) Pod独立子网内的ip使用的安全组
     *     "NodeCIDR" => (string) 节点网段
     *     "ExternalUlb" => (string) 外部 API Server 负载均衡实例 ID
     *     "InternalUlb" => (string) 内部 API Server 负载均衡实例 ID
     *     "UpdateTime" => (integer) 更新时间
     *     "LbClass" => (string) 负载均衡类型
     *     "RuntimeName" => (string) 容器运行时名称
     *     "RuntimeVersion" => (string) 容器运行时版本
     *     "ClusterType" => (string) 集群版本
     *     "LoopbackClientCert" => (object) API Server 回环客户端证书[
     *         "ExpireTime" => (integer) 证书到期时间
     *         "Warn" => (boolean) 证书是否进入过期告警状态
     *     ]
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
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ProductType" => (string) 产品类型，可选值uhost、uphost，不填则返回所有
     *     "MachineType" => (string) 适用机型，如O、G、OPRO等，默认为O
     *     "GPUType" => (string) 适用GPU类型，如1080Ti、4090、V100、A800等，MachineType为G时必须提供
     *     "K8sVersion" => (string) k8s集群版本，如1.28.15
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
     *             "OsType" => (string) OS 类型
     *             "OsName" => (string) OS 名称
     *             "Features" => (array<string>) 镜像支持的特性
     *             "ImageSize" => (integer) 镜像大小
     *             "IntegratedSoftware" => (string) 集成软件名称, 如NV驱动版本、cuda版本
     *             "SupportedGPUTypes" => (array<string>) 支持的GPU机型
     *         ]
     *     ]
     *     "PHostImageSet" => (array<object>) 裸金属可用镜像集合, 详见ImageInfo 数组[
     *         [
     *             "ZoneId" => (integer) 可用区 Id
     *             "ImageId" => (string) 镜像 Id
     *             "ImageName" => (string) 镜像名称
     *             "NotSupportGPU" => (boolean) 该镜像是否支持GPU机型，枚举值[true:不支持，false:支持]。
     *             "OsType" => (string) OS 类型
     *             "OsName" => (string) OS 名称
     *             "Features" => (array<string>) 镜像支持的特性
     *             "ImageSize" => (integer) 镜像大小
     *             "IntegratedSoftware" => (string) 集成软件名称, 如NV驱动版本、cuda版本
     *             "SupportedGPUTypes" => (array<string>) 支持的GPU机型
     *         ]
     *     ]
     *     "CustomImageSet" => (array<object>) 虚拟机自制可用镜像集合, 详见ImageInfo 数组[
     *         [
     *             "ZoneId" => (integer) 可用区 Id
     *             "ImageId" => (string) 镜像 Id
     *             "ImageName" => (string) 镜像名称
     *             "NotSupportGPU" => (boolean) 该镜像是否支持GPU机型，枚举值[true:不支持，false:支持]。
     *             "OsType" => (string) OS 类型
     *             "OsName" => (string) OS 名称
     *             "Features" => (array<string>) 镜像支持的特性
     *             "ImageSize" => (integer) 镜像大小
     *             "IntegratedSoftware" => (string) 集成软件名称, 如NV驱动版本、cuda版本
     *             "SupportedGPUTypes" => (array<string>) 支持的GPU机型
     *         ]
     *     ]
     *     "CustomPHostImageSet" => (array<object>) 裸金属自制可用镜像集合, 详见ImageInfo 数组[
     *         [
     *             "ZoneId" => (integer) 可用区 Id
     *             "ImageId" => (string) 镜像 Id
     *             "ImageName" => (string) 镜像名称
     *             "NotSupportGPU" => (boolean) 该镜像是否支持GPU机型，枚举值[true:不支持，false:支持]。
     *             "OsType" => (string) OS 类型
     *             "OsName" => (string) OS 名称
     *             "Features" => (array<string>) 镜像支持的特性
     *             "ImageSize" => (integer) 镜像大小
     *             "IntegratedSoftware" => (string) 集成软件名称, 如NV驱动版本、cuda版本
     *             "SupportedGPUTypes" => (array<string>) 支持的GPU机型
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
     *     "NodeIds" => (string) 可传一个或多个节点id  不传或为空则返回所有节点
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
     *             "CPUPlatform" => (string) CPU平台
     *             "UHostFamily" => (string) 主机规格族
     *             "OsType" => (string) Node节点的操作系统类别，如Linux或Windows。
     *             "OsName" => (string) Node节点的镜像名称。
     *             "CPU" => (integer) Node节点CPU核数，单位: 核。
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
     *                     "IPMode" => (string) IP 协议类型
     *                     "NetworkInterfaceId" => (string) 网络接口资源 ID
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
     *             "Labels" => (array<string>) 节点标签
     *             "KubeletVersion" => (string) Kubelet版本
     *             "MaxPod" => (integer) pod最大可用
     *             "MaxMemory" => (integer) 内存最大可用
     *             "MaxCPU" => (integer) CPU最大可用
     *             "RequestPod" => (integer) 已申请的pod
     *             "RequestMemory" => (integer) 已申请的Memory
     *             "RequestCPU" => (integer) 已申请的CPU
     *             "RuntimeVersion" => (string) Runtime 版本
     *             "RuntimeName" => (string) Runtime 名字
     *             "UsedCPU" => (integer) 已使用的CPU
     *             "UsedMemory" => (integer) 已使用的Memory
     *             "BootDiskSize" => (integer) 系统盘大小
     *             "DataDiskSize" => (integer) 数据盘大小，如果有多块数据盘会汇总展示，不包括PVC
     *             "GPU" => (integer) 节点的GPU颗数。
     *             "NodeGroupId" => (string) 节点池id
     *             "IDCId" => (string) 边缘机房id
     *             "IDCName" => (string) 边缘机房
     *             "Remark" => (string) 节点主机备注信息
     *             "GPUType" => (string) 节点GPU型号(如果为GPU机型)
     *             "ImageAccelable" => (boolean) 是否启用了容器镜像加速
     *             "Tag" => (string) 节点所属业务组
     *             "PodCIDR" => (string) Pod CIDR
     *             "NodeGroupName" => (string) 节点所属节点池名称
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
     *             "CNIMode" => (string) CNI网络模式
     *             "MasterCount" => (integer) Master 节点数量
     *             "ApiServer" => (string) 集群apiserver地址
     *             "K8sVersion" => (string) 集群版本
     *             "DeleteProtection" => (integer) 删除保护开关。0表示不开启，1表示开启。默认不开启
     *             "RuntimeName" => (string) 容器运行时名称
     *             "RuntimeVersion" => (string) 容器运行时版本号，docker 或 containerd 版本
     *             "ClusterType" => (string) 计费/管理形态，区分"专有版"和"托管版"两种售卖形态
     *             "LoopbackClientCert" => (object) API Server 内部回环客户端证书[
     *                 "ExpireTime" => (integer) 证书到期时间
     *                 "Warn" => (boolean) 证书是否进入过期告警状态
     *             ]
     *             "ClusterLogInfo" => (string) 创建集群时判断如果为NORESOURCE则为没资源，否则为空
     *             "CreateTime" => (integer) 创建时间
     *             "NodeCount" => (integer) Node节点数量
     *             "ExternalApiServer" => (string) 集群外部apiserver地址
     *             "Status" => (string) 集群状态，枚举值：初始化："INITIALIZING"；启动中："STARTING"；创建失败："CREATEFAILED"；正常运行："RUNNING"；添加节点："ADDNODE"；删除节点："DELNODE"；删除中："DELETING"；删除失败："DELETEFAILED"；错误："ERROR"；升级插件："UPDATE_PLUGIN"；更新插件信息："UPDATE_PLUGIN_INFO"；异常："ABNORMAL"；升级集群中："UPGRADING"；容器运行时切换："CONVERTING"
     *         ]
     *     ]
     *     "TotalCount" => (integer) 总数
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
     *             "NodeNamePrefix" => (string) 自定义Uhost主机名前缀。完整的自定义Uhost主机名为{NodeNamePrefix}-{NodeIP}。
     *             "ImageId" => (string) 镜像ID
     *             "MachineType" => (string) 机型
     *             "MinimalCpuPlatform" => (string) cpu平台
     *             "UHostFamily" => (string) 主机规格族
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
     *             "MaxPods" => (integer) int默认110，生产环境建议小于等于110。
     *             "UserData" => (string) 用户自定义数据。当镜像支持Cloud-init Feature时可填写此字段。注意：1、总数据量大小不超过 16K；2、使用base64编码。
     *             "InitScript" => (string) 用户自定义Shell脚本。与UserData的区别在于InitScript在节点初始化完毕后才执行，UserData则是云主机初始化时执行。
     *             "Taints" => (string) Node节点污点，形式为key=value:effect，多组taints用”,“隔开,最多支持五组。
     *             "Labels" => (string) Node节点标签。key=value形式,多组用”,“隔开，最多5组。 如env=pro,type=game
     *             "SecGroupId" => (array<object>) Node所属的安全组id（最多5个）[
     *                 [
     *                     "Id" => (string) 安全组名称
     *                     "Name" => (string) 安全组id
     *                     "Priority" => (string) 安全组优先级
     *                 ]
     *             ]
     *             "SecurityMode" => (string) 主机安全模式。Firewall：防火墙；SecGroup：安全组；默认值：Firewall。
     *             "SecurityGroupId" => (string) 防火墙ID，默认：Web推荐防火墙。如何查询SecurityGroupId请参见 [DescribeFirewall](api/unet-api/describe_firewall.html)。
     *             "NetworkInterface" => (array<object>) Node节点网卡配置[
     *                 [
     *                     "EIP" => (object) EIP[
     *                         "Bandwidth" => (integer) 【若绑定EIP，此参数必填】弹性IP的外网带宽, 单位为Mbps. 共享带宽模式下非必传, 非共享带宽模式必须指定非0Mbps带宽. 各地域非共享带宽的带宽范围如下： 流量计费[1-300]，带宽计费[1-800]
     *                         "PayMode" => (string) 弹性IP的计费模式. 枚举值: "Traffic", 流量计费; "Bandwidth", 带宽计费; "ShareBandwidth",共享带宽模式. "Free":免费带宽模式,默认为 "Bandwidth"
     *                         "ShareBandwidthId" => (string) 绑定的共享带宽Id，仅当PayMode为ShareBandwidth时有效
     *                         "OperatorName" => (string) 【若绑定EIP，此参数必填】弹性IP的线路。枚举值: 国际: International，BGP: Bgp。 各地域允许的线路参数如下: cn-sh1: Bgp cn-sh2: Bgp cn-gd: Bgp cn-bj1: Bgp cn-bj2: Bgp hk: International us-ca: International th-bkk: International kr-seoul:International us-ws:International ge-fra:International sg:International tw-kh:International.其他海外线路均为 International
     *                         "CouponId" => (string) 当前EIP代金券id。请通过DescribeCoupon接口查询，或登录用户中心查看。
     *                     ]
     *                 ]
     *             ]
     *             "KubeletConfiguration" => (object) KubeletConfiguration[
     *                 "ContainerLogMaxFiles" => (integer) 最大日志文件数量
     *                 "ContainerLogMaxSize" => (string) 最大日志文件大小
     *                 "EvictionHard" => (object) 硬性驱逐条件，EvictionCondition类型[
     *                     "MemoryAvailable" => (string) 内存相关驱逐条件或宽限时间。
     *                     "ImagefsAvailable" => (string) 镜像文件系统存储相关驱逐条件或宽限时间。
     *                     "NodefsAvailable" => (string) 节点存储余量相关驱逐条件或宽限时间。
     *                     "NodefsInodesFree" => (string) 节点剩余inodes驱逐条件或宽限时间。
     *                 ]
     *                 "EvictionSoft" => (object) 软性驱逐条件，EvictionCondition类型[
     *                     "MemoryAvailable" => (string) 内存相关驱逐条件或宽限时间。
     *                     "ImagefsAvailable" => (string) 镜像文件系统存储相关驱逐条件或宽限时间。
     *                     "NodefsAvailable" => (string) 节点存储余量相关驱逐条件或宽限时间。
     *                     "NodefsInodesFree" => (string) 节点剩余inodes驱逐条件或宽限时间。
     *                 ]
     *                 "EvictionSoftGracePeriod" => (object) 软性驱逐宽限时间，EvictionCondition类型[
     *                     "MemoryAvailable" => (string) 内存相关驱逐条件或宽限时间。
     *                     "ImagefsAvailable" => (string) 镜像文件系统存储相关驱逐条件或宽限时间。
     *                     "NodefsAvailable" => (string) 节点存储余量相关驱逐条件或宽限时间。
     *                     "NodefsInodesFree" => (string) 节点剩余inodes驱逐条件或宽限时间。
     *                 ]
     *                 "ImageGCHighThresholdPercent" => (integer) 镜像垃圾收集阈值
     *                 "ImageGCLowThresholdPercent" => (integer) 停止镜像垃圾收集阈值
     *                 "KubeReserved" => (object) kubelet预留资源，ReservedResource类型[
     *                     "CPU" => (string) CPU
     *                     "Memory" => (string) 内存
     *                     "EphemeralStorage" => (string) 存储
     *                     "Pid" => (string) Pid
     *                 ]
     *                 "SystemReserved" => (object) 系统预留资源，ReservedResource类型[
     *                     "CPU" => (string) CPU
     *                     "Memory" => (string) 内存
     *                     "EphemeralStorage" => (string) 存储
     *                     "Pid" => (string) Pid
     *                 ]
     *                 "MaxPods" => (integer) 最大Pod数量
     *             ]
     *             "ImageName" => (string) 镜像名称
     *             "ImageType" => (string) 镜像类型
     *             "OsType" => (string) 操作系统类型
     *             "OsName" => (string) 操作系统名称
     *             "NetCapability" => (string) 网络配置
     *             "UNIFeature" => (boolean) 是否启用 UNI 网络特性
     *             "Disks" => (array<object>) 磁盘列表[
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
     *             "RelatedAsg" => (array<string>) 节点池关联的弹性伸缩组ID
     *             "CreateTime" => (integer) 节点池创建时间
     *             "UpdateTime" => (integer) 节点池更新时间
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
     * ListUK8SULSConfig - 查询 UK8S 的 ULSConfig
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/list_uk8s_uls_config
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TopicID" => (string) 日志服务中用于接收日志的目标 TopicId。
     *     "ClusterId" => (string) 集群 Id，如果不填，返回该账号该地域所有集群的 ULSConfig
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "LogConfig" => (array<object>) 日志服务配置,见 ClusterLogConfig[
     *         [
     *             "ClusterId" => (string) uk8s集群id
     *             "MachineGroup" => (string) 机器组
     *             "ExtractRule" => (object) 定义日志的提取、解析和格式化规则。见 ULSExtractRule[
     *                 "CollectPolicy" => (string) 采集策略。可选值：full（全量采集存量日志）、increment（从当前时间点增量采集）。默认为 full。
     *                 "Encode" => (string) 日志原文的编码格式。可选值：utf-8、gbk。默认为 utf-8。
     *                 "LogType" => (string) 日志解析类型。可选值：json、delimiter、full_regex、multi_line_full_regex、multi_line_delimiter、minimal_list、multi_line。
     *                 "Delimiter" => (string) 分隔符。适用于 delimiter 或 multi_line_delimiter，可选值：space、tab、|、;、,。
     *                 "DelimiterBase64" => (string) Base64 编码的分隔符。填写时优先于 Delimiter。
     *                 "BeginningRegex" => (string) 行首正则表达式。在 multi_line、multi_line_full_regex 或 multi_line_delimiter 模式下，BeginningRegex 和 BeginningRegexBase64 必须至少填写一个。
     *                 "BeginningRegexBase64" => (string) Base64 编码的行首正则表达式。填写时优先于 BeginningRegex。
     *                 "LogRegex" => (string) 日志提取正则表达式。在 full_regex 或 multi_line_full_regex 模式下，LogRegex 和 LogRegexBase64 必须至少填写一个。
     *                 "LogRegexBase64" => (string) Base64 编码的日志提取正则表达式。填写时优先于 LogRegex。
     *                 "TimeKey" => (string) 包含日志时间的字段名。
     *                 "TimeFormat" => (string) TimeKey 对应的时间格式。在 json、full_regex 或 multi_line_full_regex 模式下，填写 TimeKey 时必须同时填写 TimeFormat。
     *                 "UnMatchUpload" => (string) 是否上传解析失败的日志。字符串 true 表示上传，false 表示丢弃。默认为 false。
     *                 "UnMatchKey" => (string) 存放无法解析的日志原文的 Key。UnMatchUpload 为 true 时必须填写。
     *                 "Keys" => (array<string>) 提取后的字段名列表。仅适用于 delimiter、full_regex、multi_line_full_regex 和 multi_line_delimiter。
     *             ]
     *             "InputDetail" => (object) 定义日志的输入来源（例如容器文件）。见 ULSInputDetail[
     *                 "FilePaths" => (array<object>) 日志采集路径列表。仅适用于 container_file。[
     *                     [
     *                         "Path" => (string) 定义采集路径
     *                         "File" => (string) 采集文件
     *                     ]
     *                 ]
     *                 "Type" => (string) 日志输入类型。可选值：container_file、container_stdout。
     *                 "Stream" => (string) 容器标准输出流类型。仅适用于 container_stdout，可选值：all、stdout、stderr，默认为 all。
     *                 "InputMetadata" => (object) 定义需要附加到日志中的容器相关元数据。[
     *                     "Container" => (string) 指定具体要采集元数据的容器名。如果留空，则不采集容器的元数据，可选字段：container_name,namespace,pod_name,pod_ip,pod_uid,container_id,image_name。Pod Label 元数据通过指定 InputDetail.Metadata.Labels 字段。
     *                     "Labels" => (string) 定义要采集哪些 Pod 的标签 (Labels)。可选值：*：采集所有标签。app,version：仅采集 app 和 version 这两个标签。""（空字符串）：不采集任何标签。
     *                 ]
     *             ]
     *             "MatchRule" => (object) 定义此采集规则要匹配的目标 Pod 或工作负载。见 ULSMatchRule[
     *                 "ContainerOperator" => (string) 容器名称匹配操作符。支持：in(包含)，notin(不包含)
     *                 "Container" => (string) 要匹配的容器名称，*表示所有容器，用逗号分隔
     *                 "Workloads" => (array<object>) 按工作负载进行匹配。[
     *                     [
     *                         "Namespace" => (string) 工作负载所在的命名空间。
     *                         "Type" => (string) 工作负载的类型，例如 deployment, statefulset, daemonset,cronjob,job。
     *                         "Name" => (string) 工作负载的名称。
     *                     ]
     *                 ]
     *                 "PodLabels" => (object) 按 Pod 的标签进行匹配，提供更灵活的选择。[
     *                     "NamespaceOperator" => (string) 命名空间名称的匹配操作符。可选值: in, notin。
     *                     "Namespace" => (string) 要匹配的命名空间。namespaceOperator 存在时必需。
     *                     "Labels" => (array<object>) 一个标签选择器数组，用于定义匹配的标签条件。[
     *                         [
     *                             "Key" => (string) 要匹配的标签的 Key。
     *                             "ValueOperator" => (string) 标签值的匹配操作符。可选值: in, notin。
     *                             "Value" => (string) 要匹配的标签的值。
     *                         ]
     *                     ]
     *                 ]
     *             ]
     *             "TopicID" => (string) 日志服务中用于接收日志的目标 Topic ID。
     *             "Name" => (string) 采集配置规则名称
     *         ]
     *     ]
     * ]
     *
     * @return ListUK8SULSConfigResponse
     * @throws UCloudException
     */
    public function listUK8SULSConfig(ListUK8SULSConfigRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUK8SULSConfigResponse($resp->toArray(), $resp->getRequestId());
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

    /**
     * UpdateUK8SULSConfig - 更新指定UK8S集群的日志采集规则。
     *
     * See also: https://docs.ucloud.cn/api/uk8s-api/update_uk8s_uls_config
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。参见地域和可用区列表：https://docs.ucloud.cn/api/summary/regionlist
     *     "Zone" => (string) 可用区。参见地域和可用区列表：https://docs.ucloud.cn/api/summary/regionlist
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。请参考GetProjectList接口：https://docs.ucloud.cn/api/summary/get_project_list
     *     "Name" => (string) 要修改的日志采集规则名称。名称长度不能超过253个字符，只能包含小写字母、数字、破折号和点，并且必须以字母或数字开头和结尾。
     *     "ClusterId" => (string) UK8S集群ID。
     *     "TopicID" => (string) 日志服务中用于接收日志的目标Topic ID。不填写时保持原Topic ID不变。
     *     "ExtractRule" => (object) [
     *         "CollectPolicy" => (string) 采集策略。可选值：full（全量采集存量日志）、increment（从当前时间点增量采集）。默认为full。
     *         "Encode" => (string) 日志原文的编码格式。可选值：utf-8、gbk。默认为utf-8。
     *         "LogType" => (string) 日志解析类型。可选值：json、delimiter、full_regex、multi_line_full_regex、multi_line_delimiter、minimal_list、multi_line。
     *         "BeginningRegex" => (string) 行首正则表达式。multi_line、multi_line_full_regex或multi_line_delimiter模式下，BeginningRegex和BeginningRegexBase64必须至少填写一个。
     *         "BeginningRegexBase64" => (string) Base64编码的行首正则表达式。填写时优先于BeginningRegex。
     *         "LogRegex" => (string) 日志提取正则表达式。full_regex或multi_line_full_regex模式下，LogRegex和LogRegexBase64必须至少填写一个。
     *         "LogRegexBase64" => (string) Base64编码的日志提取正则表达式。填写时优先于LogRegex。
     *         "Delimiter" => (string) 分隔符。delimiter或multi_line_delimiter模式下可用。可选值：space、tab、|、;、,。
     *         "DelimiterBase64" => (string) Base64编码的分隔符。填写时优先于Delimiter。
     *         "TimeKey" => (string) 包含日志时间的字段名。
     *         "TimeFormat" => (string) TimeKey对应的时间格式。json、full_regex或multi_line_full_regex模式下，填写TimeKey时必须同时填写TimeFormat。
     *         "UnMatchUpload" => (string) 是否上传解析失败的日志。字符串true表示上传，false表示丢弃。默认为false。
     *         "UnMatchKey" => (string) 存放无法解析的日志原文的Key。UnMatchUpload为true时必须填写。
     *         "Keys" => (array<string>) 提取后的字段名。仅适用于delimiter、full_regex、multi_line_full_regex和multi_line_delimiter。
     *     ]
     *     "InputDetail" => (object) [
     *         "Type" => (string) 日志输入类型。可选值：container_file、container_stdout。
     *         "Stream" => (string) 容器标准输出流类型。仅适用于container_stdout，可选值：all、stdout、stderr，默认为all。
     *         "Metadata" => (object) [
     *             "Container" => (string) 要附加到日志中的容器元数据字段，多个字段使用逗号分隔。可选字段：container_name、namespace、pod_name、pod_ip、pod_uid、container_id、image_name。留空表示不采集容器元数据。
     *             "Labels" => (string) 要采集的Pod标签。*表示采集所有标签，app,version表示仅采集指定标签，空字符串表示不采集标签。
     *         ]
     *         "FilePaths" => (array<object>) [
     *             [
     *                 "Path" => (string) 日志采集路径。仅适用于container_file。
     *                 "File" => (string) 要采集的文件名。仅适用于container_file。
     *             ]
     *         ]
     *     ]
     *     "MatchRule" => (object) [
     *         "Container" => (string) 要匹配的容器名称，*表示所有容器，多个名称使用逗号分隔。
     *         "ContainerOperator" => (string) 容器名称匹配操作符。可选值：in、notin。填写该参数时必须同时填写MatchRule.Container。
     *         "Workloads" => (array<object>) [
     *             [
     *                 "Namespace" => (string) 按工作负载匹配时，工作负载所在的命名空间。Workloads和PodLabels不能同时设置。
     *                 "Type" => (string) 工作负载类型。可选值：deployment、statefulset、daemonset、job、cronjob。
     *                 "Name" => (string) 工作负载名称。
     *             ]
     *         ]
     *         "PodLabels" => (object) [
     *             "NamespaceOperator" => (string) 按Pod标签匹配时，命名空间名称的匹配操作符。可选值：in、notin。填写该参数时必须同时填写MatchRule.PodLabels.Namespace。PodLabels和Workloads不能同时设置。
     *             "Namespace" => (string) 按Pod标签匹配时要匹配的命名空间。
     *             "Labels" => (array<object>) [
     *                 [
     *                     "Key" => (string) 按Pod标签匹配时，要匹配的标签Key。
     *                     "ValueOperator" => (string) 标签值匹配操作符。可选值：in、notin。
     *                     "Value" => (string) 要匹配的标签值。
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUK8SULSConfigResponse
     * @throws UCloudException
     */
    public function updateUK8SULSConfig(UpdateUK8SULSConfigRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUK8SULSConfigResponse($resp->toArray(), $resp->getRequestId());
    }
}
