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
namespace UCloud\UDisk;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UDisk\Apis\AttachUDiskRequest;
use UCloud\UDisk\Apis\AttachUDiskResponse;
use UCloud\UDisk\Apis\CloneUDiskRequest;
use UCloud\UDisk\Apis\CloneUDiskResponse;
use UCloud\UDisk\Apis\CloneUDiskSnapshotRequest;
use UCloud\UDisk\Apis\CloneUDiskSnapshotResponse;
use UCloud\UDisk\Apis\CloneUDiskUDataArkRequest;
use UCloud\UDisk\Apis\CloneUDiskUDataArkResponse;
use UCloud\UDisk\Apis\CreateAttachUDiskRequest;
use UCloud\UDisk\Apis\CreateAttachUDiskResponse;
use UCloud\UDisk\Apis\CreateUDiskRequest;
use UCloud\UDisk\Apis\CreateUDiskResponse;
use UCloud\UDisk\Apis\CreateUDiskSnapshotRequest;
use UCloud\UDisk\Apis\CreateUDiskSnapshotResponse;
use UCloud\UDisk\Apis\DeleteUDiskRequest;
use UCloud\UDisk\Apis\DeleteUDiskResponse;
use UCloud\UDisk\Apis\DeleteUDiskSnapshotRequest;
use UCloud\UDisk\Apis\DeleteUDiskSnapshotResponse;
use UCloud\UDisk\Apis\DescribeRecycleUDiskRequest;
use UCloud\UDisk\Apis\DescribeRecycleUDiskResponse;
use UCloud\UDisk\Apis\DescribeUDiskRequest;
use UCloud\UDisk\Apis\DescribeUDiskResponse;
use UCloud\UDisk\Apis\DescribeUDiskPriceRequest;
use UCloud\UDisk\Apis\DescribeUDiskPriceResponse;
use UCloud\UDisk\Apis\DescribeUDiskSnapshotRequest;
use UCloud\UDisk\Apis\DescribeUDiskSnapshotResponse;
use UCloud\UDisk\Apis\DescribeUDiskUpgradePriceRequest;
use UCloud\UDisk\Apis\DescribeUDiskUpgradePriceResponse;
use UCloud\UDisk\Apis\DetachUDiskRequest;
use UCloud\UDisk\Apis\DetachUDiskResponse;
use UCloud\UDisk\Apis\RecoverUDiskRequest;
use UCloud\UDisk\Apis\RecoverUDiskResponse;
use UCloud\UDisk\Apis\RenameUDiskRequest;
use UCloud\UDisk\Apis\RenameUDiskResponse;
use UCloud\UDisk\Apis\ResizeUDiskRequest;
use UCloud\UDisk\Apis\ResizeUDiskResponse;
use UCloud\UDisk\Apis\RestoreUDiskRequest;
use UCloud\UDisk\Apis\RestoreUDiskResponse;
use UCloud\UDisk\Apis\SetUDiskUDataArkModeRequest;
use UCloud\UDisk\Apis\SetUDiskUDataArkModeResponse;

/**
 * This client is used to call actions of **UDisk** service
 */
class UDiskClient extends Client
{

    /**
     * AttachUDisk - 将一个可用的UDisk挂载到某台主机上，当UDisk挂载成功后，还需要在主机内部进行文件系统操作
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/attach_udisk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDiskId" => (string) 需要挂载的UDisk实例ID.
     *     "UHostId" => (string) UHost实例ID。【UHostId和HostId必须选填一个，本字段即将废弃，建议使用HostId】
     *     "MultiAttach" => (string) 是否允许多点挂载（Yes: 允许多点挂载， No: 不允许多点挂载， 不填默认Yes ）
     *     "HostId" => (string) Host实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) 挂载的UHost实例ID。【即将废弃，建议使用HostId】
     *     "UDiskId" => (string) 挂载的UDisk实例ID
     *     "DeviceName" => (string) 挂载的设备名称
     *     "HostId" => (string) 挂载的Host实例ID
     * ]
     *
     * @return AttachUDiskResponse
     * @throws UCloudException
     */
    public function attachUDisk(AttachUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AttachUDiskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CloneUDisk - 从UDisk创建UDisk克隆
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/clone_udisk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 实例名称
     *     "SourceId" => (string) 克隆父Disk的Id
     *     "UDataArkMode" => (string) 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *     "SnapshotService" => (string) 是否开启快照服务（开启快照服务，可免费开启数据方舟）。Yes：开启，No：不开启，默认值：No
     *     "Quantity" => (integer) 购买时长 默认: 1
     *     "Comment" => (string) Disk注释
     *     "ChargeType" => (string) Year , Month, Dynamic，Postpay，Trial 默认: Month
     *     "Tag" => (string) 业务组 默认：Default
     *     "RdmaClusterId" => (string) 【已废弃】RDMA集群id。指定RSSD云盘克隆到对应的RDMA集群。
     *     "HostId" => (string) Host实例ID。克隆出的云盘可直接挂载到该主机上。
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UDiskId" => (array<string>) 创建UDisk Id
     * ]
     *
     * @return CloneUDiskResponse
     * @throws UCloudException
     */
    public function cloneUDisk(CloneUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CloneUDiskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CloneUDiskSnapshot - 从快照创建UDisk克隆
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/clone_udisk_snapshot
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 实例名称
     *     "SourceId" => (string) 克隆父Snapshot的Id
     *     "Size" => (integer) 购买UDisk大小,单位:GB,范围[1~8000]。(UDisk大小设定对本地盘快照有效，对云盘快照无效)
     *     "Comment" => (string) Disk注释
     *     "ChargeType" => (string) Year , Month, Dynamic，Postpay 默认: Dynamic
     *     "Quantity" => (integer) 购买时长 默认: 1
     *     "UDataArkMode" => (string) 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *     "SnapshotService" => (string) 是否开启快照服务（开启快照服务，可免费开启数据方舟）。Yes：开启，No：不开启，默认值：No
     *     "Tag" => (string) 业务组 默认：Default
     *     "RdmaClusterId" => (string) 【已废弃】RDMA集群id。指定RSSD云盘克隆到对应的RDMA集群。
     *     "HostId" => (string) Host实例ID。克隆出的云盘可直接挂载到该主机上。
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UDiskId" => (array<string>) 创建UDisk Id
     * ]
     *
     * @return CloneUDiskSnapshotResponse
     * @throws UCloudException
     */
    public function cloneUDiskSnapshot(CloneUDiskSnapshotRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CloneUDiskSnapshotResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CloneUDiskUDataArk - 从数据方舟的备份创建UDisk
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/clone_udisk_udataark
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 实例名称
     *     "UDiskId" => (string) 需要克隆的源盘id
     *     "SnapshotTime" => (integer) 指定从方舟克隆的备份时间点
     *     "Comment" => (string) Disk注释
     *     "ChargeType" => (string) Year , Month, Dynamic，Postpay 默认: Dynamic
     *     "Quantity" => (integer) 购买时长 默认: 1
     *     "UDataArkMode" => (string) 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *     "SnapshotService" => (string) 是否开启快照服务（开启快照服务，可免费开启数据方舟）。Yes：开启，No：不开启，默认值：No
     *     "Size" => (integer) 购买UDisk大小,单位:GB,范围[1~8000]。(UDisk大小设定对本地盘备份有效，对云盘备份无效)
     *     "Tag" => (string) 业务组 默认：Default
     *     "RdmaClusterId" => (string) 【已废弃】RDMA集群id。指定RSSD云盘克隆到对应的RDMA集群。
     *     "HostId" => (string) Host实例ID。克隆出的云盘可直接挂载到该主机上。
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UDiskId" => (array<string>) 创建UDisk Id
     * ]
     *
     * @return CloneUDiskUDataArkResponse
     * @throws UCloudException
     */
    public function cloneUDiskUDataArk(CloneUDiskUDataArkRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CloneUDiskUDataArkResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateAttachUDisk - 创建并挂载UDisk磁盘
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/create_attach_udisk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 购买UDisk大小,单位:GB,普通数据盘：范围[1~8000]；SSD数据盘：范围[1~8000]；RSSD数据盘：范围[1~32000]；高效数据盘：范围[1~32000]。
     *     "Name" => (string) 实例名称
     *     "UHostId" => (string) UHost实例ID。当创建云盘类型为RSSDDataDisk时，根据传入的UHostId，创建与虚机在同一PodId下的云盘。【UHostId和HostId必须选填一个，本字段即将废弃，建议使用HostId】
     *     "ChargeType" => (string) Year , Month, Dynamic, Postpay, Trial 。 Size小于等于2000时，默认为Dynamic；Size大于2000时，默认为Month。
     *     "Quantity" => (integer) 购买时长 默认: 1
     *     "UDataArkMode" => (string) 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *     "SnapshotService" => (string) 是否开启快照服务（开启快照服务，可免费开启数据方舟）。Yes：开启，No：不开启，默认值：No
     *     "Tag" => (string) 业务组 默认：Default
     *     "DiskType" => (string) UDisk 类型: DataDisk（普通数据盘），SSDDataDisk（SSD数据盘），RSSDDataDisk（RSSD数据盘），EfficiencyDataDisk（高效数据盘），默认值（DataDisk）
     *     "UKmsMode" => (string) 是否加密。Yes：加密，No：不加密，默认值（No）
     *     "CmkId" => (string) 加密需要的cmk id，UKmsMode为Yes时，必填
     *     "MultiAttach" => (string) 是否允许多点挂载（Yes: 允许多点挂载， No: 不允许多点挂载， 不填默认Yes ）
     *     "HostId" => (string) Host实例ID。当创建云盘类型为RSSDDataDisk时，根据传入的HostId，创建与虚机在同一PodId下的云盘。
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UDiskId" => (string) 挂载的UDisk实例ID
     *     "UHostId" => (string) 挂载的UHost实例ID。【即将废弃，建议使用HostId】
     *     "HostId" => (string) 挂载的Host实例ID
     *     "DeviceName" => (string) 挂载设备名称
     * ]
     *
     * @return CreateAttachUDiskResponse
     * @throws UCloudException
     */
    public function createAttachUDisk(CreateAttachUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateAttachUDiskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUDisk - 创建UDisk磁盘
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/create_udisk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 购买UDisk大小,单位:GB,普通数据盘：范围[1~8000]；SSD数据盘：范围[1~8000]；RSSD数据盘：范围[1~32000]；高效数据盘：范围[1~32000]。
     *     "Name" => (string) 实例名称
     *     "ChargeType" => (string) Year , Month, Dynamic, Postpay, Trial 。默认为Dynamic。
     *     "Quantity" => (integer) 购买时长 默认: 1
     *     "UDataArkMode" => (string) 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *     "SnapshotService" => (string) 是否开启快照服务（开启快照服务，可免费开启数据方舟）。Yes：开启，No：不开启，默认值：No
     *     "Tag" => (string) 业务组 默认：Default
     *     "DiskType" => (string) UDisk 类型: DataDisk（普通数据盘），SSDDataDisk（SSD数据盘），RSSDDataDisk（RSSD数据盘），EfficiencyDataDisk（高效数据盘），默认值（DataDisk）
     *     "UKmsMode" => (string) 是否加密。Yes：加密，No：不加密，默认值（No）
     *     "CmkId" => (string) 加密需要的cmk id，UKmsMode为Yes时，必填
     *     "RdmaClusterId" => (string) RDMA集群id。DiskType为RSSDDataDisk可填，指定云盘创建到对应的RDMA集群。
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UDiskId" => (array<string>) UDisk实例Id
     * ]
     *
     * @return CreateUDiskResponse
     * @throws UCloudException
     */
    public function createUDisk(CreateUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUDiskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUDiskSnapshot - 创建snapshot快照
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/create_udisk_snapshot
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDiskId" => (string) 快照的UDisk的Id
     *     "Name" => (string) 快照名称
     *     "Quantity" => (integer) 购买时长 默认: 1  (已废弃)
     *     "ChargeType" => (string) Year , Month, Dynamic 默认: Dynamic  (已废弃)
     *     "Comment" => (string) 快照描述
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SnapshotId" => (array<string>) 快照Id
     * ]
     *
     * @return CreateUDiskSnapshotResponse
     * @throws UCloudException
     */
    public function createUDiskSnapshot(CreateUDiskSnapshotRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUDiskSnapshotResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUDisk - 删除UDisk
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/delete_udisk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDiskId" => (string) 要删除的UDisk的Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUDiskResponse
     * @throws UCloudException
     */
    public function deleteUDisk(DeleteUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUDiskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUDiskSnapshot - 删除Snapshot
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/delete_udisk_snapshot
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "SnapshotId" => (string) 快照Id(填写后不能填写UDisk Id)
     *     "UDiskId" => (string) UDisk Id,删除该盘所创建出来的所有快照(填写后不能填写SnapshotId)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUDiskSnapshotResponse
     * @throws UCloudException
     */
    public function deleteUDiskSnapshot(DeleteUDiskSnapshotRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUDiskSnapshotResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeRecycleUDisk - 拉取回收站中云硬盘列表
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/describe_recycle_udisk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Limit" => (integer) 返回数据长度, 默认为20
     *     "Offset" => (integer) 数据偏移量, 默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 磁盘数量
     *     "DataSet" => (array<object>) 回收站磁盘列表[
     *         [
     *             "UDiskId" => (string) 磁盘id
     *             "CreateTime" => (integer) 创建时间
     *             "ExpiredTime" => (integer) 过期时间
     *             "CountdownTime" => (integer) 销毁倒计时
     *             "Name" => (string) 磁盘名称
     *             "Size" => (integer) 磁盘容量
     *             "Tag" => (string) 业务组
     *             "Zone" => (string) 可用区
     *         ]
     *     ]
     * ]
     *
     * @return DescribeRecycleUDiskResponse
     * @throws UCloudException
     */
    public function describeRecycleUDisk(DescribeRecycleUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeRecycleUDiskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUDisk - 获取UDisk实例
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/describe_udisk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UDiskId" => (string) UDisk Id(留空返回全部)
     *     "Offset" => (integer) 数据偏移量, 默认为0
     *     "Limit" => (integer) 返回数据长度, 默认为20
     *     "DiskType" => (string) ProtocolVersion字段为1时，需结合IsBoot确定具体磁盘类型:普通数据盘：DiskType:"CLOUD_NORMAL",IsBoot:"False"；普通系统盘：DiskType:"CLOUD_NORMAL",IsBoot:"True"；SSD数据盘：DiskType:"CLOUD_SSD",IsBoot:"False"；SSD系统盘：DiskType:"CLOUD_SSD",IsBoot:"True"；RSSD数据盘：DiskType:"CLOUD_RSSD",IsBoot:"False"；RSSD系统盘：DiskType:"CLOUD_RSSD",IsBoot:"True"；高效数据盘：DiskType:"CLOUD_EFFICIENCY",IsBoot:"False"；高效系统盘：DiskType:"CLOUD_EFFICIENCY",IsBoot:"True"；为空拉取所有。ProtocolVersion字段为0或没有该字段时，可设为以下几个值:普通数据盘：DataDisk；普通系统盘：SystemDisk；SSD数据盘：SSDDataDisk；SSD系统盘：SSDSystemDisk；RSSD数据盘：RSSDDataDisk；RSSD系统盘：RSSDSystemDisk：高效数据盘：EfficiencyDataDisk；高效系统盘：EfficiencySystemDisk；为空拉取所有。
     *     "ProtocolVersion" => (integer) 请求协议版本，建议升级为1，为1时DiskType与UHost磁盘类型定义一致；默认为0
     *     "IsBoot" => (string) ProtocolVersion字段为1且DiskType不为空时，必须设置，设置规则请参照DiskType；ProtocolVersion字段为1且DiskType为空时，该字段无效。ProtocolVersion字段为0或没有该字段时，该字段无效。
     *     "IgnoreUBillInfo" => (string) 是否忽略计费信息。Yes：忽略，No：不忽略，默认值（No）。（如不关心账单信息，建议选填“Yes”，可降低请求延时）
     *     "IgnoreBackupMode" => (string) 是否忽略快照服务信息。Yes：忽略，No：不忽略，默认值（No）。（如不关心快照服务信息，建议选填“Yes”，可降低请求延时）
     *     "UDiskBasicInfo" => (string) 是否只返回云盘基础信息（只包含云盘及关联主机的资源信息）。Yes：是，No：否，默认值（No）。（如仅需要基础信息，建议选填“Yes”，可降低请求延时）
     *     "UHostIdForAttachment" => (string) 根据传入的UHostIdForAttachment，筛选出能被挂载在该主机上的云盘【本字段即将废弃，建议使用HostIdForAttachment】
     *     "HostIdForAttachment" => (string) 根据传入的HostIdForAttachment，筛选出能被挂载在该主机上的云盘。目前主要针对RSSD云盘。
     *     "HostId" => (string) 根据传入的HostId，返回与该主机关联的云盘信息。
     *     "HostProduct" => (string) 宿主产品类型，可筛选挂载在该类型宿主上的云盘。可选值：uhost, uphost。为空拉取所有。（当HostIdForAttachment字段不为空时，该字段可以不填，若HostIdForAttachment与该字段宿主类型冲突，则以HostIdForAttachment字段为准。）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) JSON 格式的UDisk数据列表, 每项参数可见下面 UDiskDataSet[
     *         [
     *             "Zone" => (string) 可用区
     *             "UDiskId" => (string) UDisk实例Id
     *             "Name" => (string) 实例名称
     *             "Size" => (integer) 容量单位GB
     *             "Status" => (string) 状态:Available(可用),Attaching(挂载中), InUse(已挂载), Detaching(卸载中), Initializating(分配中), Failed(创建失败),Cloning(克隆中),Restoring(恢复中),RestoreFailed(恢复失败),
     *             "CreateTime" => (integer) 创建时间
     *             "ExpiredTime" => (integer) 过期时间
     *             "UHostId" => (string) 挂载的UHost的Id。【即将废弃，建议使用HostId】
     *             "UHostName" => (string) 挂载的UHost的Name。【即将废弃，建议使用HostName】
     *             "UHostIP" => (string) 挂载的UHost的IP。【即将废弃，建议使用HostIP】
     *             "HostId" => (string) 挂载的Host的Id
     *             "HostName" => (string) 挂载的Host的Name
     *             "HostIP" => (string) 挂载的Host的IP
     *             "DeviceName" => (string) 挂载的设备名称
     *             "ChargeType" => (string) Year,Month,Dynamic,Trial,Postpay
     *             "Tag" => (string) 业务组名称
     *             "IsExpire" => (string) 资源是否过期，过期:"Yes", 未过期:"No"
     *             "Version" => (string) 是否支持数据方舟，支持:"2.0", 不支持:"1.0"
     *             "UDataArkMode" => (string) 是否开启数据方舟，开启:"Yes", 不支持:"No"
     *             "SnapshotCount" => (integer) 该盘快照个数
     *             "SnapshotLimit" => (integer) 该盘快照上限
     *             "DiskType" => (string) 请求中的ProtocolVersion字段为1时，需结合IsBoot确定具体磁盘类型:普通数据盘：DiskType:"CLOUD_NORMAL",IsBoot:"False"； 普通系统盘：DiskType:"CLOUD_NORMAL",IsBoot:"True"；SSD数据盘：DiskType:"CLOUD_SSD",IsBoot:"False"；SSD系统盘：DiskType:"CLOUD_SSD",IsBoot:"True"；RSSD数据盘：DiskType:"CLOUD_RSSD",IsBoot:"False"；RSSD系统盘：DiskType:"CLOUD_RSSD",IsBoot:"True"；高效数据盘：DiskType:"CLOUD_EFFICIENCY",IsBoot:"False"；高效系统盘：DiskType:"CLOUD_EFFICIENCY",IsBoot:"True"。请求中的ProtocolVersion字段为0或没有该字段时，云硬盘类型参照如下:普通数据盘：DataDisk；普通系统盘：SystemDisk；SSD数据盘：SSDDataDisk；SSD系统盘：SSDSystemDisk；RSSD数据盘：RSSDDataDisk；RSSD系统盘：RSSDSystemDisk；高效数据盘：EfficiencyDataDisk；高效系统盘：EfficiencySystemDisk。
     *             "CloneEnable" => (integer) 是否支持克隆，1支持 ，0不支持
     *             "SnapEnable" => (integer) 是否支持快照，1支持 ，0不支持
     *             "ArkSwitchEnable" => (integer) 是否支持开启方舟，1支持 ，0不支持
     *             "UKmsMode" => (string) 是否是加密盘，是:"Yes", 否:"No"
     *             "CmkId" => (string) 该盘的cmk id
     *             "DataKey" => (string) 该盘的密文密钥
     *             "CmkIdStatus" => (string) 该盘cmk的状态, Enabled(正常)，Disabled(失效)，Deleted(删除)，NoCmkId(非加密盘)
     *             "CmkIdAlias" => (string) cmk id 别名
     *             "IsBoot" => (string) 是否是系统盘，是："True", 否："False"
     *             "BackupMode" => (string) 该盘的备份方式。快照服务："SnapshotService"；数据方舟："UDataArk"；无备份方式：""
     *             "RdmaClusterId" => (string) RDMA集群id，仅RSSD返回该值；其他类型云盘返回""。当云盘的此值与快杰云主机的RdmaClusterId相同时，RSSD可以挂载到这台云主机。
     *         ]
     *     ]
     *     "TotalCount" => (integer) 根据过滤条件得到的总数
     * ]
     *
     * @return DescribeUDiskResponse
     * @throws UCloudException
     */
    public function describeUDisk(DescribeUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDiskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUDiskPrice - 获取UDisk实例价格信息
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/describe_udisk_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 购买UDisk大小,单位:GB,普通数据盘：范围[1~8000]；SSD数据盘：范围[1~8000]；普通系统盘：范围[1~8000]；SSD系统盘：范围[1~4000]；RSSD数据盘：范围[1~32000]；RSSD系统盘：范围[1~4000]；高效数据盘：范围[1~32000]；高效系统盘：范围[1~500]。
     *     "ChargeType" => (string) Year , Month, Dynamic，Postpay，Trial 默认: Month
     *     "Quantity" => (integer) 购买UDisk的时长，默认值为1
     *     "UDataArkMode" => (string) 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *     "SnapshotService" => (string) 是否开启快照服务（开启快照服务，可免费开启数据方舟）。Yes：开启，No：不开启，默认值：No
     *     "DiskType" => (string) UDisk 类型: DataDisk（普通数据盘），SSDDataDisk（SSD数据盘），RSSDDataDisk(RSSD数据盘)，EfficiencyDataDisk（高效数据盘），SystemDisk（普通系统盘），SSDSystemDisk（SSD系统盘），RSSDSystemDisk(RSSD系统盘)，EfficiencySystemDisk（高效系统盘），默认值（DataDisk）
     *     "IsTotalPrice" => (string) 是否将快照服务(数据方舟)，云硬盘放入一张订单, 是："Yes",否："No"，默认是"No"
     *     "MachineType" => (string) 云主机机型（V2.0），枚举值["N", "C", "G", "O", "OM"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 价格参数列表，具体说明见 UDiskPriceDataSet[
     *         [
     *             "ChargeType" => (string) Year， Month， Dynamic，Trial
     *             "Price" => (integer) 实际价格 (单位: 分)
     *             "ChargeName" => (string) "UDataArk","SnapshotService","UDisk","Total"
     *             "OriginalPrice" => (integer) 用户折后价(对应计费CustomPrice)
     *             "ListPrice" => (integer) 原价(对应计费OriginalPrice)
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUDiskPriceResponse
     * @throws UCloudException
     */
    public function describeUDiskPrice(DescribeUDiskPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDiskPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUDiskSnapshot - 获取UDisk快照
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/describe_udisk_snapshot
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 数据偏移量, 默认为0
     *     "Limit" => (integer) 返回数据长度, 默认为20
     *     "UDiskId" => (string) UDiskId,返回该盘所做快照.(必须同时传Zone)
     *     "SnapshotId" => (string) 快照id，SnapshotId , UDiskId 同时传SnapshotId优先
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) JSON 格式的Snapshot列表, 详细参见 UDiskSnapshotSet[
     *         [
     *             "Zone" => (string) 可用区
     *             "SnapshotId" => (string) 快照Id
     *             "Name" => (string) 快照名称
     *             "UDiskId" => (string) 快照的源UDisk的Id
     *             "UDiskName" => (string) 快照的源UDisk的Name
     *             "CreateTime" => (integer) 创建时间
     *             "Size" => (integer) 容量单位GB
     *             "Status" => (string) 快照状态，Normal:正常,Failed:失败,Creating:制作中
     *             "DiskType" => (integer) 磁盘类型，0：普通数据盘；1：普通系统盘；2：SSD数据盘；3：SSD系统盘；4：RSSD数据盘；5：RSSD系统盘。
     *             "ExpiredTime" => (integer) 过期时间
     *             "Comment" => (string) 快照描述
     *             "IsUDiskAvailable" => (boolean) 对应磁盘是否处于可用状态
     *             "Version" => (string) 快照版本
     *             "UHostId" => (string) 对应磁盘制作快照时所挂载的主机
     *             "UKmsMode" => (string) 是否是加密盘快照，是:"Yes", 否:"No"
     *             "CmkId" => (string) 该快照的cmk id
     *             "DataKey" => (string) 该快照的密文密钥
     *             "CmkIdStatus" => (string) 该快照cmk的状态, Enabled(正常)，Disabled(失效)，Deleted(删除)，NoCmkId(非加密盘)
     *             "CmkIdAlias" => (string) cmk id 别名
     *         ]
     *     ]
     *     "TotalCount" => (integer) 根据过滤条件得到的总数
     * ]
     *
     * @return DescribeUDiskSnapshotResponse
     * @throws UCloudException
     */
    public function describeUDiskSnapshot(DescribeUDiskSnapshotRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDiskSnapshotResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUDiskUpgradePrice - 获取UDisk升级价格信息
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/describe_udisk_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 购买UDisk大小,单位:GB,普通数据盘：范围[1~8000]；SSD数据盘：范围[1~8000]；普通系统盘：范围[1~8000]；SSD系统盘：范围[1~4000]；RSSD数据盘：范围[1~32000]；RSSD系统盘：范围[1~4000]；高效数据盘：范围[1~32000]；高效系统盘：范围[1~500]。
     *     "SourceId" => (string) 升级目标UDisk ID
     *     "UDataArkMode" => (string) 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *     "SnapshotService" => (string) 是否开启快照服务（开启快照服务，可免费开启数据方舟）。Yes：开启，No：不开启，默认值：No。仅支持查询开启快照服务的价格。
     *     "DiskType" => (string) 【已废弃】UDisk 类型: DataDisk（普通数据盘），SSDDataDisk（SSD数据盘），RSSDDataDisk(RSSD数据盘)，EfficiencyDataDisk（高效数据盘），SystemDisk（普通系统盘），SSDSystemDisk（SSD系统盘），RSSDSystemDisk(RSSD系统盘)，EfficiencySystemDisk（高效系统盘），默认值（DataDisk）
     *     "MachineType" => (string) 【已废弃】云主机机型（V2.0），枚举值["N", "C", "G", "O", "OM"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (integer) 价格
     *     "OriginalPrice" => (integer) 用户折后价 (对应计费CustomPrice)
     * ]
     *
     * @return DescribeUDiskUpgradePriceResponse
     * @throws UCloudException
     */
    public function describeUDiskUpgradePrice(DescribeUDiskUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDiskUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DetachUDisk - 卸载某个已经挂载在指定UHost实例上的UDisk
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/detach_udisk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDiskId" => (string) 需要卸载的UDisk实例ID
     *     "UHostId" => (string) UHost实例ID。【UHostId和HostId必须选填一个，本字段即将废弃，建议使用HostId】
     *     "HostId" => (string) Host实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UHostId" => (string) 卸载的UHost实例ID。【即将废弃，建议使用HostId】
     *     "UDiskId" => (string) 卸载的UDisk实例ID
     *     "HostId" => (string) 卸载的Host实例ID
     * ]
     *
     * @return DetachUDiskResponse
     * @throws UCloudException
     */
    public function detachUDisk(DetachUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DetachUDiskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RecoverUDisk - 从回收站中恢复云硬盘
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/recover_udisk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDiskId" => (string) 云硬盘资源ID
     *     "ChargeType" => (string) Year , Month, Dynamic 默认: Dynamic
     *     "Quantity" => (integer) 购买时长 默认: 1
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RecoverUDiskResponse
     * @throws UCloudException
     */
    public function recoverUDisk(RecoverUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RecoverUDiskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RenameUDisk - 重命名UDisk
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/rename_udisk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDiskId" => (string) 重命名的UDisk的Id
     *     "UDiskName" => (string) 重命名UDisk的name
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RenameUDiskResponse
     * @throws UCloudException
     */
    public function renameUDisk(RenameUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RenameUDiskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResizeUDisk - 调整UDisk容量
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/resize_udisk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDiskId" => (string) UDisk Id
     *     "Size" => (integer) 调整后大小, 单位:GB,普通数据盘：范围[1~8000]；SSD数据盘：范围[1~8000]；RSSD数据盘：范围[1~32000]。
     *     "MachineType" => (string) 云主机机型（V2.0），枚举值["N", "C", "G", "O", "OM"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ResizeUDiskResponse
     * @throws UCloudException
     */
    public function resizeUDisk(ResizeUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeUDiskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RestoreUDisk - 从备份恢复数据至UDisk
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/restore_udisk
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDiskId" => (string) 需要恢复的盘ID
     *     "SnapshotId" => (string) 从指定的快照恢复
     *     "SnapshotTime" => (integer) 指定从方舟恢复的备份时间点
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RestoreUDiskResponse
     * @throws UCloudException
     */
    public function restoreUDisk(RestoreUDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestoreUDiskResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SetUDiskUDataArkMode - 设置UDisk数据方舟的状态
     *
     * See also: https://docs.ucloud.cn/api/udisk-api/set_udisk_udataark_mode
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UDiskId" => (string) 需要设置数据方舟的UDisk的Id
     *     "UDataArkMode" => (string) 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return SetUDiskUDataArkModeResponse
     * @throws UCloudException
     */
    public function setUDiskUDataArkMode(SetUDiskUDataArkModeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SetUDiskUDataArkModeResponse($resp->toArray(), $resp->getRequestId());
    }
}
