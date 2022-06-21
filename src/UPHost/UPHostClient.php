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
namespace UCloud\UPHost;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UPHost\Apis\CreatePHostRequest;
use UCloud\UPHost\Apis\CreatePHostResponse;
use UCloud\UPHost\Apis\CreatePHostImageRequest;
use UCloud\UPHost\Apis\CreatePHostImageResponse;
use UCloud\UPHost\Apis\DescribeBaremetalMachineTypeRequest;
use UCloud\UPHost\Apis\DescribeBaremetalMachineTypeResponse;
use UCloud\UPHost\Apis\DescribePHostRequest;
use UCloud\UPHost\Apis\DescribePHostResponse;
use UCloud\UPHost\Apis\DescribePHostImageRequest;
use UCloud\UPHost\Apis\DescribePHostImageResponse;
use UCloud\UPHost\Apis\DescribePHostMachineTypeRequest;
use UCloud\UPHost\Apis\DescribePHostMachineTypeResponse;
use UCloud\UPHost\Apis\DescribePHostTagsRequest;
use UCloud\UPHost\Apis\DescribePHostTagsResponse;
use UCloud\UPHost\Apis\GetPHostDiskUpgradePriceRequest;
use UCloud\UPHost\Apis\GetPHostDiskUpgradePriceResponse;
use UCloud\UPHost\Apis\GetPHostPriceRequest;
use UCloud\UPHost\Apis\GetPHostPriceResponse;
use UCloud\UPHost\Apis\ModifyPHostImageInfoRequest;
use UCloud\UPHost\Apis\ModifyPHostImageInfoResponse;
use UCloud\UPHost\Apis\ModifyPHostInfoRequest;
use UCloud\UPHost\Apis\ModifyPHostInfoResponse;
use UCloud\UPHost\Apis\PoweroffPHostRequest;
use UCloud\UPHost\Apis\PoweroffPHostResponse;
use UCloud\UPHost\Apis\RebootPHostRequest;
use UCloud\UPHost\Apis\RebootPHostResponse;
use UCloud\UPHost\Apis\ReinstallPHostRequest;
use UCloud\UPHost\Apis\ReinstallPHostResponse;
use UCloud\UPHost\Apis\ResetPHostPasswordRequest;
use UCloud\UPHost\Apis\ResetPHostPasswordResponse;
use UCloud\UPHost\Apis\ResizePHostAttachedDiskRequest;
use UCloud\UPHost\Apis\ResizePHostAttachedDiskResponse;
use UCloud\UPHost\Apis\StartPHostRequest;
use UCloud\UPHost\Apis\StartPHostResponse;
use UCloud\UPHost\Apis\StopPHostRequest;
use UCloud\UPHost\Apis\StopPHostResponse;
use UCloud\UPHost\Apis\TerminatePHostRequest;
use UCloud\UPHost\Apis\TerminatePHostResponse;
use UCloud\UPHost\Apis\TerminatePHostImageRequest;
use UCloud\UPHost\Apis\TerminatePHostImageResponse;

/**
 * This client is used to call actions of **UPHost** service
 */
class UPHostClient extends Client
{

    /**
     * CreatePHost - 指定数据中心，根据资源使用量创建指定数量的UPHost物理云主机实例。
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/create_phost
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageId" => (string) ImageId，可以通过接口 [DescribePHostImage](api/uphost-api/describe_phost_image.html)获取
     *     "Password" => (string) 密码（密码需使用base64进行编码）
     *     "Type" => (string) 物理机类型，默认为：db-2(基础型-SAS-V3)
     *     "Name" => (string) 物理机名称，默认为phost
     *     "Remark" => (string) 物理机备注，默认为空
     *     "Tag" => (string) 业务组，默认为default
     *     "ChargeType" => (string) 计费模式，枚举值为：year, 按年付费； month,按月付费；默认为按月付费
     *     "Quantity" => (string) 购买时长，1-10个月或1-10年；默认值为1。月付时，此参数传0，代表购买至月末，1代表整月。
     *     "SecurityGroupId" => (string) 防火墙ID，默认：Web推荐防火墙。如何查询SecurityGroupId请参见 [DescribeFirewall](api/unet-api/describe_firewall.html)。
     *     "Raid" => (string) Raid配置，默认Raid10  支持:Raid0、Raid1、Raid5、Raid10，NoRaid
     *     "VPCId" => (string) VPC ID，不填为默认，VPC2.0下需要填写此字段。
     *     "SubnetId" => (string) 子网ID，不填为默认，VPC2.0下需要填写此字段。
     *     "Cluster" => (string) 网络环境，可选千兆：1G ，万兆：10G， 默认1G。智能网卡可以选择25G。
     *     "Disks" => (array<object>) [
     *         [
     *             "IsBoot" => (string) 裸金属机型参数->是否是系统盘。枚举值： True，是系统盘。 False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *             "Type" => (string) 裸金属机型参数->磁盘类型：枚举值：CLOUD_RSSD
     *             "Size" => (integer) 裸金属机型参数->磁盘大小，单位GB，必须是10GB的整数倍。系统盘20-500GB，数据盘单块盘20-32000GB。
     *             "CouponId" => (string) 裸金属机型参数->云盘代金券id。不适用于系统盘。请通过DescribeCoupon接口查询，或登录用户中心查看
     *         ]
     *     ]
     *     "VpcIp" => (string) 指定内网ip创建
     *     "CouponId" => (string) 代金券
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PHostId" => (array<string>) PHost的资源ID数组
     * ]
     *
     * @return CreatePHostResponse
     * @throws UCloudException
     */
    public function createPHost(CreatePHostRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreatePHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreatePHostImage - 创建裸金属2.0用户自定义镜像
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/create_phost_image
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PHostId" => (string) UPHost实例ID 
     *     "ImageName" => (string) 镜像名称
     *     "ImageDescription" => (string) 镜像描述
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageId" => (string) 镜像ID
     * ]
     *
     * @return CreatePHostImageResponse
     * @throws UCloudException
     */
    public function createPHostImage(CreatePHostImageRequest $request = null) {
        $resp = $this->invoke($request);
        return new CreatePHostImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeBaremetalMachineType - 获取裸金属机型的详细描述信息
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/describe_baremetal_machine_type
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Type" => (string) 具体机型。若不填写，则返回全部机型
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "MachineTypes" => (array<object>) 机型列表，模型：PHostCloudMachineTypeSet[
     *         [
     *             "Type" => (string) 物理云主机机型别名，全网唯一。
     *             "CPU" => (object) CPU信息[
     *                 "Model" => (string) CPU型号
     *                 "Frequence" => (number) CPU主频
     *                 "Count" => (integer) CPU个数
     *                 "CoreCount" => (integer) CPU核数
     *             ]
     *             "Memory" => (integer) 内存大小，单位MB
     *             "Components" => (object) 其他组件信息[
     *                 "Name" => (string) 组件名称
     *                 "Count" => (integer) 组件数量
     *             ]
     *             "Clusters" => (array<object>) 集群库存信息[
     *                 [
     *                     "Name" => (string) 集群名。枚举值：千兆网络集群：1G；万兆网络集群：10G；智能网卡网络：25G；
     *                     "StockStatus" => (string) 库存状态。枚举值：有库存：Available；无库存：SoldOut
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return DescribeBaremetalMachineTypeResponse
     * @throws UCloudException
     */
    public function describeBaremetalMachineType(DescribeBaremetalMachineTypeRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribeBaremetalMachineTypeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribePHost - 获取物理机详细信息
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/describe_phost
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PHostId" => (array<string>) PHost资源ID，若为空，则返回当前Region所有PHost。
     *     "Offset" => (integer) 数据偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20
     *     "UDiskIdForAttachment" => (string) 要挂载的云盘id，过滤返回能被UDiskId挂载的云主机。目前主要针对rssd云盘使用
     *     "VPCId" => (string) ULB使用参数，获取同VPC下机器信息。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的PHost总数
     *     "PHostSet" => (array<object>) PHost资源列表，参见 PHostSet[
     *         [
     *             "Zone" => (string) 可用区，参见 [可用区列表](../summary/regionlist.html)
     *             "PHostId" => (string) PHost资源ID
     *             "SN" => (string) 物理机序列号
     *             "PMStatus" => (string) 物理云主机状态。枚举值：\\ > 初始化:Initializing; \\ > 启动中：Starting； \\ > 运行中：Running；\\ > 关机中：Stopping； \\ > 安装失败：InstallFailed； \\ > 重启中：Rebooting；\\ > 关机：Stopped； \\ > 迁移中(裸金属云盘)：Migrating
     *             "Name" => (string) 物理机名称
     *             "Remark" => (string) 物理机备注
     *             "Tag" => (string) 业务组
     *             "ImageName" => (string) 镜像名称
     *             "OSname" => (string) 操作系统名称
     *             "CreateTime" => (integer) 创建时间
     *             "ExpireTime" => (integer) 到期时间
     *             "ChargeType" => (string) 计费模式，枚举值为： Year，按年付费； Month，按月付费；默认为月付
     *             "PowerState" => (string) 电源状态，on 或 off
     *             "PHostType" => (string) 物理机类型，参见DescribePHostMachineType返回值
     *             "Memory" => (integer) 内存大小，单位：MB
     *             "CPUSet" => (object) CPU信息，见 PHostCPUSet[
     *                 "Model" => (string) CPU型号
     *                 "Frequence" => (number) CPU主频
     *                 "Count" => (integer) CPU个数
     *                 "CoreCount" => (integer) CPU核数
     *             ]
     *             "DiskSet" => (array<object>) 磁盘信息，见 PHostDescDiskSet[
     *                 [
     *                     "Space" => (integer) 单盘大小，单位GB
     *                     "Count" => (integer) 磁盘数量
     *                     "Type" => (string) 磁盘属性
     *                     "Name" => (string) 磁盘名称，sys/data
     *                     "IOCap" => (integer) 磁盘IO性能，单位MB/s（待废弃）
     *                     "Drive" => (string) 裸金属机型参数：磁盘盘符
     *                     "DiskId" => (string) 裸金属机型参数：磁盘ID
     *                     "IsBoot" => (string) 裸金属机型参数：是否是启动盘。True/False
     *                 ]
     *             ]
     *             "IPSet" => (array<object>) IP信息，见 PHostIPSet[
     *                 [
     *                     "OperatorName" => (string)  国际: Internation， BGP: BGP， 内网: Private 
     *                     "IPId" => (string) IP资源ID(内网IP无资源ID)（待废弃）
     *                     "IPAddr" => (string) IP地址，
     *                     "MACAddr" => (string) MAC地址
     *                     "Bandwidth" => (integer) IP对应带宽，单位Mb，内网IP不显示带宽信息
     *                     "SubnetId" => (string) 子网ID
     *                     "VPCId" => (string) VPC ID
     *                 ]
     *             ]
     *             "Cluster" => (string) 网络环境。枚举值：千兆：1G ，万兆：10G
     *             "AutoRenew" => (string) 自动续费
     *             "IsSupportKVM" => (string) 是否支持紧急登录
     *             "OSType" => (string) 操作系统类型
     *             "Components" => (string) 组件信息（暂不支持）
     *             "RaidSupported" => (string) 是否支持Raid。枚举值：Yes：支持；No：不支持。
     *             "PhostClass" => (string) 物理云产品类型，枚举值：LocalDisk=>代表传统本地盘机型， CloudDisk=>云盘裸金属机型
     *         ]
     *     ]
     * ]
     *
     * @return DescribePHostResponse
     * @throws UCloudException
     */
    public function describePHost(DescribePHostRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribePHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribePHostImage - 获取物理云主机镜像列表
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/describe_phost_image
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageType" => (string) 镜像类别，枚举值，Base是基础镜像；Custom是自制镜像。
     *     "ImageId" => (array<string>) 镜像ID
     *     "Offset" => (integer) 数据偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20
     *     "MachineType" => (string) 机器型号，只支持当前zone的展示机型
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 满足条件的镜像总数
     *     "ImageSet" => (array<object>) 镜像列表 PHostImageSet[
     *         [
     *             "ImageId" => (string) 镜像ID
     *             "ImageName" => (string) 镜像名称
     *             "OsName" => (string) 操作系统名称
     *             "OsType" => (string) 操作系统类型
     *             "Support" => (array<string>) 支持的机型
     *             "Version" => (string) 当前版本
     *             "ImageType" => (string) 枚举值：Base=>基础镜像，Custom=>自制镜像。
     *             "CreateTime" => (integer) 裸金属2.0参数。镜像创建时间。
     *             "State" => (string) 裸金属2.0参数。镜像当前状态。
     *             "ImageSize" => (integer) 裸金属2.0参数。镜像大小。
     *             "ImageDescription" => (string) 镜像描述
     *         ]
     *     ]
     * ]
     *
     * @return DescribePHostImageResponse
     * @throws UCloudException
     */
    public function describePHostImage(DescribePHostImageRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribePHostImageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribePHostMachineType - 获取物理云机型的详细描述信息
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/describe_phost_machine_type
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Type" => (string) 具体机型。若不填写，则返回全部机型
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "MachineTypes" => (array<object>) 机型列表，模型：PHostMachineTypeSet[
     *         [
     *             "Type" => (string) 物理云主机机型别名，全网唯一。
     *             "CPU" => (object) CPU信息[
     *                 "Model" => (string) CPU型号
     *                 "Frequence" => (number) CPU主频
     *                 "Count" => (integer) CPU个数
     *                 "CoreCount" => (integer) CPU核数
     *             ]
     *             "Memory" => (integer) 内存大小，单位MB
     *             "Disks" => (array<object>) 磁盘信息[
     *                 [
     *                     "Space" => (integer) 单盘大小，单位GB
     *                     "Count" => (integer) 磁盘数量
     *                     "Type" => (string) 磁盘属性
     *                     "Name" => (string) 磁盘名称，sys/data
     *                     "IOCap" => (integer) 磁盘IO性能，单位MB/s（待废弃）
     *                 ]
     *             ]
     *             "Components" => (object) 其他组件信息[
     *                 "Name" => (string) 组件名称
     *                 "Count" => (integer) 组件数量
     *             ]
     *             "Clusters" => (array<object>) 集群库存信息[
     *                 [
     *                     "Name" => (string) 集群名。枚举值：千兆网络集群：1G；万兆网络集群：10G；智能网卡网络：25G；
     *                     "StockStatus" => (string) 库存状态。枚举值：有库存：Available；无库存：SoldOut
     *                 ]
     *             ]
     *             "RaidSupported" => (string) 是否支持Raid。枚举值：支持：YES；不支持：NO
     *         ]
     *     ]
     * ]
     *
     * @return DescribePHostMachineTypeResponse
     * @throws UCloudException
     */
    public function describePHostMachineType(DescribePHostMachineTypeRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribePHostMachineTypeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribePHostTags - 获取物理机tag列表（业务组）
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/describe_phost_tags
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
     *     "TotalCount" => (integer) Tag的个数
     *     "TagSet" => (array<object>) 具体参见 PHostTagSet[
     *         [
     *             "Tag" => (string) 业务组名称
     *             "TotalCount" => (integer) 该业务组中包含的主机个数
     *         ]
     *     ]
     * ]
     *
     * @return DescribePHostTagsResponse
     * @throws UCloudException
     */
    public function describePHostTags(DescribePHostTagsRequest $request = null) {
        $resp = $this->invoke($request);
        return new DescribePHostTagsResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetPHostDiskUpgradePrice - 获取物理云裸金属挂载磁盘的升级价格
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/get_phost_disk_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "PHostId" => (string) UPHost实例ID。
     *     "DiskSpace" => (integer) 磁盘大小，单位GB，必须是10GB的整数倍。系统盘20-500GB，数据盘单块盘20-32000GB。
     *     "UDiskId" => (string) 磁盘 ID。获取扩容价格必填（只能扩不能减）；重装时候不需要填（根据所选盘大小决定）
     *     "ReinstallTag" => (boolean) 是否重装价格获取。复用此接口。扩容只能增加云盘大小。重装不限制。枚举值：true/false
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (number) 升级差价。精度为小数点后2位。
     *     "OriginalPrice" => (number) 升价差价原价。精度为小数点后2位。
     * ]
     *
     * @return GetPHostDiskUpgradePriceResponse
     * @throws UCloudException
     */
    public function getPHostDiskUpgradePrice(GetPHostDiskUpgradePriceRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetPHostDiskUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetPHostPrice - 获取物理机价格列表
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/get_phost_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Count" => (integer) 购买数量，范围[1-5]
     *     "ChargeType" => (string) 计费模式，枚举值为： Year/Month
     *     "Quantity" => (integer) 购买时长，1-10个月或1-10年；默认值为1。月付时，此参数传0，代表购买至月末，1代表整月。
     *     "Cluster" => (string) 网络环境，可选千兆：1G ；万兆：10G；25G网络：25G。
     *     "Type" => (string) 默认为：DB(数据库型)，可以通过接口 [DescribePHostMachineType](api/uphost-api/describe_phost_machine_type.html)获取
     *     "Disks" => (array<object>) [
     *         [
     *             "IsBoot" => (string) 裸金属机型参数->枚举值：\\ > True，是系统盘 \\ > False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *             "Type" => (string) 裸金属机型参数->磁盘类型：枚举值：CLOUD_RSSD
     *             "Size" => (string) 裸金属机型参数->磁盘大小，单位GB，必须是10GB的整数倍。系统盘20-500GB。数据盘是20-32000G。
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PriceSet" => (array<object>) 价格列表 见 PHostPriceSet[
     *         [
     *             "ChargeType" => (string) Year/Month
     *             "Price" => (number) 价格, 单位:元, 保留小数点后两位有效数字
     *             "Product" => (string) 枚举值：phost=>为主机价格，如果是云盘包括了系统盘价格。cloudDisk=>所有数据盘价格，只是裸金属机型才返回此参数。
     *             "OriginalPrice" => (number) 原价格, 单位:元, 保留小数点后两位有效数字
     *         ]
     *     ]
     * ]
     *
     * @return GetPHostPriceResponse
     * @throws UCloudException
     */
    public function getPHostPrice(GetPHostPriceRequest $request = null) {
        $resp = $this->invoke($request);
        return new GetPHostPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyPHostImageInfo - 修改自定义镜像名称和备注
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/modify_phost_image_info
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageId" => (string) 镜像ID
     *     "Name" => (string) 镜像名称
     *     "Remark" => (string) 备注
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageId" => (string) 镜像ID
     * ]
     *
     * @return ModifyPHostImageInfoResponse
     * @throws UCloudException
     */
    public function modifyPHostImageInfo(ModifyPHostImageInfoRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyPHostImageInfoResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyPHostInfo - 更改物理机信息
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/modify_phost_info
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "PHostId" => (string) 物理机资源ID
     *     "Name" => (string) 物理机名称，默认不更改
     *     "Remark" => (string) 物理机备注，默认不更改
     *     "Tag" => (string) 业务组，默认不更改
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PHostId" => (string) PHost 的资源ID
     * ]
     *
     * @return ModifyPHostInfoResponse
     * @throws UCloudException
     */
    public function modifyPHostInfo(ModifyPHostInfoRequest $request = null) {
        $resp = $this->invoke($request);
        return new ModifyPHostInfoResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * PoweroffPHost - 断电物理云主机
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/poweroff_phost
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "PHostId" => (string) PHost资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PHostId" => (string) PHost 的资源ID
     * ]
     *
     * @return PoweroffPHostResponse
     * @throws UCloudException
     */
    public function poweroffPHost(PoweroffPHostRequest $request = null) {
        $resp = $this->invoke($request);
        return new PoweroffPHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RebootPHost - 重启物理机
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/reboot_phost
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "PHostId" => (string) PHost资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PHostId" => (string) PHost 的资源ID
     * ]
     *
     * @return RebootPHostResponse
     * @throws UCloudException
     */
    public function rebootPHost(RebootPHostRequest $request = null) {
        $resp = $this->invoke($request);
        return new RebootPHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ReinstallPHost - 重装物理机操作系统
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/reinstall_phost
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "PHostId" => (string) PHost资源ID
     *     "Password" => (string) 密码
     *     "ImageId" => (string) 镜像Id，参考镜像列表，默认使用原镜像
     *     "Name" => (string) 物理机名称，默认不更改
     *     "Remark" => (string) 物理机备注，默认为不更改。
     *     "Tag" => (string) 业务组，默认不更改。
     *     "ReserveDisk" => (string) 是否保留数据盘，保留：Yes，不报留：No， 默认：Yes
     *     "Raid" => (string) 不保留数据盘重装，可选Raid
     *     "BootDiskSpace" => (integer) 裸金属机型参数->系统盘大小。 单位：GB， 范围[20,500]， 步长：10
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PHostId" => (string) PHost 的资源ID
     * ]
     *
     * @return ReinstallPHostResponse
     * @throws UCloudException
     */
    public function reinstallPHost(ReinstallPHostRequest $request = null) {
        $resp = $this->invoke($request);
        return new ReinstallPHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResetPHostPassword - 重置裸金属实例的管理员密码
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/reset_phost_password
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "PHostId" => (string) 裸金属实例ID
     *     "Password" => (string) PHost新密码（密码格式使用BASE64编码）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PHostId" => (string) 裸金属实例ID
     * ]
     *
     * @return ResetPHostPasswordResponse
     * @throws UCloudException
     */
    public function resetPHostPassword(ResetPHostPasswordRequest $request = null) {
        $resp = $this->invoke($request);
        return new ResetPHostPasswordResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResizePHostAttachedDisk - 修改裸金属物理云已经挂载的云盘容量大小
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/resize_phost_attached_disk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PHostId" => (string) UPHost实例ID。
     *     "UDiskId" => (string) 磁盘ID。
     *     "DiskSpace" => (integer) 裸金属机型参数->磁盘大小，单位GB，必须是10GB的整数倍。系统盘20-500GB，数据盘单块盘20-32000GB。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UDiskId" => (string) 改配成功的磁盘id
     * ]
     *
     * @return ResizePHostAttachedDiskResponse
     * @throws UCloudException
     */
    public function resizePHostAttachedDisk(ResizePHostAttachedDiskRequest $request = null) {
        $resp = $this->invoke($request);
        return new ResizePHostAttachedDiskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StartPHost - 启动物理机
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/start_phost
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "PHostId" => (string) PHost资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PHostId" => (string) PHost 的资源ID
     * ]
     *
     * @return StartPHostResponse
     * @throws UCloudException
     */
    public function startPHost(StartPHostRequest $request = null) {
        $resp = $this->invoke($request);
        return new StartPHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StopPHost - 关闭物理机
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/stop_phost
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PHostId" => (string) PHost资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PHostId" => (string) PHost 的资源ID
     * ]
     *
     * @return StopPHostResponse
     * @throws UCloudException
     */
    public function stopPHost(StopPHostRequest $request = null) {
        $resp = $this->invoke($request);
        return new StopPHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * TerminatePHost - 删除物理云主机
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/terminate_phost
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "PHostId" => (string) PHost资源ID
     *     "ReleaseEIP" => (boolean) 是否释放绑定的EIP。true: 解绑EIP后，并释放；其他值或不填：解绑EIP。
     *     "ReleaseUDisk" => (boolean) 裸金属机型参数->删除主机时是否同时删除挂载的数据盘。默认为false。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PHostId" => (string) PHost 的资源ID
     * ]
     *
     * @return TerminatePHostResponse
     * @throws UCloudException
     */
    public function terminatePHost(TerminatePHostRequest $request = null) {
        $resp = $this->invoke($request);
        return new TerminatePHostResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * TerminatePHostImage - 删除裸金属2.0用户自定义镜像
     *
     * See also: https://docs.ucloud.cn/api/uphost-api/terminate_phost_image
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ImageId" => (string) 自制镜像ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ImageId" => (string) 自制镜像ID
     * ]
     *
     * @return TerminatePHostImageResponse
     * @throws UCloudException
     */
    public function terminatePHostImage(TerminatePHostImageRequest $request = null) {
        $resp = $this->invoke($request);
        return new TerminatePHostImageResponse($resp->toArray(), $resp->getRequestId());
    }
}
