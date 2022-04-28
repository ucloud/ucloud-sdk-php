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
namespace UCloud\UFS;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UFS\Apis\AddUFSVolumeMountPointRequest;
use UCloud\UFS\Apis\AddUFSVolumeMountPointResponse;
use UCloud\UFS\Apis\CreateUFSVolumeRequest;
use UCloud\UFS\Apis\CreateUFSVolumeResponse;
use UCloud\UFS\Apis\DescribeUFSVolume2Request;
use UCloud\UFS\Apis\DescribeUFSVolume2Response;
use UCloud\UFS\Apis\DescribeUFSVolumeMountpointRequest;
use UCloud\UFS\Apis\DescribeUFSVolumeMountpointResponse;
use UCloud\UFS\Apis\DescribeUFSVolumePriceRequest;
use UCloud\UFS\Apis\DescribeUFSVolumePriceResponse;
use UCloud\UFS\Apis\ExtendUFSVolumeRequest;
use UCloud\UFS\Apis\ExtendUFSVolumeResponse;
use UCloud\UFS\Apis\RemoveUFSVolumeRequest;
use UCloud\UFS\Apis\RemoveUFSVolumeResponse;
use UCloud\UFS\Apis\RemoveUFSVolumeMountPointRequest;
use UCloud\UFS\Apis\RemoveUFSVolumeMountPointResponse;
use UCloud\UFS\Apis\UpdateUFSVolumeInfoRequest;
use UCloud\UFS\Apis\UpdateUFSVolumeInfoResponse;

/**
 * This client is used to call actions of **UFS** service
 */
class UFSClient extends Client
{

    /**
     * AddUFSVolumeMountPoint - 添加文件系统挂载点
     *
     * See also: https://docs.ucloud.cn/api/ufs-api/add_ufs_volume_mount_point
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VolumeId" => (string) 文件系统ID
     *     "MountPointName" => (string) 挂载点名称
     *     "VpcId" => (string) Vpc ID
     *     "SubnetId" => (string) Subnet ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AddUFSVolumeMountPointResponse
     * @throws UCloudException
     */
    public function addUFSVolumeMountPoint(AddUFSVolumeMountPointRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddUFSVolumeMountPointResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUFSVolume - 创建文件系统
     *
     * See also: https://docs.ucloud.cn/api/ufs-api/create_ufs_volume
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 文件系统大小，单位为GB，必须为100的整数倍，容量型Size最小为500GB，性能型文件系统Size最小为100GB
     *     "StorageType" => (string) 文件系统存储类型，Basic表示容量型，Advanced表示性能型
     *     "ProtocolType" => (string) 文件系统协议，目前仅支持NFSv4
     *     "VolumeName" => (string) 文件系统名称
     *     "Remark" => (string) 备注
     *     "Tag" => (string) 文件系统所属业务组
     *     "ChargeType" => (string) 计费模式，枚举值为： Year，按年付费； Month，按月付费； Dynamic，按需付费（需开启权限）； Trial，试用（需开启权限） 默认为Dynamic
     *     "Quantity" => (integer) 购买时长 默认: 1
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "VolumeName" => (string) 文件系统名称
     *     "VolumeId" => (string) 文件系统ID
     *     "VolumeStatus" => (string) 文件系统挂载点状态
     * ]
     *
     * @return CreateUFSVolumeResponse
     * @throws UCloudException
     */
    public function createUFSVolume(CreateUFSVolumeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUFSVolumeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUFSVolume2 - 获取文件系统列表
     *
     * See also: https://docs.ucloud.cn/api/ufs-api/describe_ufs_volume2
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "VolumeId" => (string) 文件系统ID
     *     "Offset" => (integer) 文件列表起始
     *     "Limit" => (integer) 文件列表长度
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 文件系统总数
     *     "DataSet" => (array<object>) 文件系统详细信息列表[
     *         [
     *             "VolumeName" => (string) 文件系统名称
     *             "VolumeId" => (string) 文件系统ID
     *             "TotalMountPointNum" => (integer) 当前文件系统已创建的挂载点数目
     *             "MaxMountPointNum" => (integer) 文件系统允许创建的最大挂载点数目
     *             "StorageType" => (string) 文件系统存储类型，枚举值，Basic表示容量型，Advanced表示性能型
     *             "ProtocolType" => (string) 文件系统协议，枚举值，NFSv3表示NFS V3协议，NFSv4表示NFS V4协议
     *             "Remark" => (string) 文件系统备注信息
     *             "Tag" => (string) 文件系统所属业务组
     *             "CreateTime" => (integer) 文件系统创建时间（unix时间戳）
     *             "ExpiredTime" => (integer) 文件系统过期时间（unix时间戳）
     *             "Size" => (integer) 文件系统大小，单位GB
     *             "UsedSize" => (integer) 文件系统当前使用容量，单位GB
     *             "IsExpired" => (string) 是否过期
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUFSVolume2Response
     * @throws UCloudException
     */
    public function describeUFSVolume2(DescribeUFSVolume2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUFSVolume2Response($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUFSVolumeMountpoint - 获取文件系统挂载点信息
     *
     * See also: https://docs.ucloud.cn/api/ufs-api/describe_ufs_volume_mountpoint
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VolumeId" => (string) 文件系统ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) [
     *         [
     *             "MountPointName" => (string) 挂载点名称
     *             "VpcId" => (string) Vpc ID
     *             "SubnetId" => (string) Subnet ID
     *             "MountPointIp" => (string) ${挂载点IP}:/
     *             "CreateTime" => (integer) 文件系统创建时间（unix时间戳）
     *             "SubnetDescription" => (string) Subnet ID + 网段的形式，方便前端展示
     *         ]
     *     ]
     *     "TotalMountPointNum" => (integer) 目前的挂载点总数
     *     "MaxMountPointNum" => (integer) 文件系统能创建的最大挂载点数目
     * ]
     *
     * @return DescribeUFSVolumeMountpointResponse
     * @throws UCloudException
     */
    public function describeUFSVolumeMountpoint(DescribeUFSVolumeMountpointRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUFSVolumeMountpointResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUFSVolumePrice - 获取文件系统价格
     *
     * See also: https://docs.ucloud.cn/api/ufs-api/describe_ufs_volume_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 文件系统大小，单位为GB，新架构容量型最小容量为500GB，以100GB递增，最大不超过100TB。新架构性能型最小容量为100GB，以100GB递增，最大不超过20TB
     *     "StorageType" => (string) 文件存储类型，枚举值，Basic表示容量型产品，Advanced表示性能型产品
     *     "Quantity" => (integer) 购买UFS的时长， 默认为1
     *     "ChargeType" => (string) Year， Month， Dynamic，Trial，默认: Dynamic
     *     "VolumeId" => (string) 文件系统id，第一次创建文件系统时不需要传这个参数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) ufs 价格信息[
     *         [
     *             "ChargeType" => (string) Year， Month， Dynamic，Trial
     *             "Price" => (number) 价格 (单位: 分)
     *             "ChargeName" => (string) “UFS”
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUFSVolumePriceResponse
     * @throws UCloudException
     */
    public function describeUFSVolumePrice(DescribeUFSVolumePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUFSVolumePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ExtendUFSVolume - 文件系统扩容
     *
     * See also: https://docs.ucloud.cn/api/ufs-api/extend_ufs_volume
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "VolumeId" => (string) 文件系统ID
     *     "Size" => (integer) 文件系统大小，单位为GB，最大不超过20T，香港容量型必须为100的整数倍，Size最小为500GB，北京，上海，广州的容量型必须为1024的整数倍，Size最小为1024GB。性能型文件系统Size最小为100GB
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ExtendUFSVolumeResponse
     * @throws UCloudException
     */
    public function extendUFSVolume(ExtendUFSVolumeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ExtendUFSVolumeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RemoveUFSVolume - 删除UFS文件系统
     *
     * See also: https://docs.ucloud.cn/api/ufs-api/remove_ufs_volume
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "VolumeId" => (string) 文件系统ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RemoveUFSVolumeResponse
     * @throws UCloudException
     */
    public function removeUFSVolume(RemoveUFSVolumeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RemoveUFSVolumeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RemoveUFSVolumeMountPoint - 删除文件系统挂载点
     *
     * See also: https://docs.ucloud.cn/api/ufs-api/remove_ufs_volume_mount_point
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VolumeId" => (string) 文件系统ID
     *     "VpcId" => (string) Vpc ID
     *     "SubnetId" => (string) Subnet ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RemoveUFSVolumeMountPointResponse
     * @throws UCloudException
     */
    public function removeUFSVolumeMountPoint(RemoveUFSVolumeMountPointRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RemoveUFSVolumeMountPointResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUFSVolumeInfo - 更改文件系统相关信息（名称／备注）
     *
     * See also: https://docs.ucloud.cn/api/ufs-api/update_ufs_volume_info
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VolumeId" => (string) 文件系统ID
     *     "VolumeName" => (string) 文件系统名称（文件系统名称／备注至少传入其中一个）
     *     "Remark" => (string) 文件系统备注（文件系统名称／备注至少传入其中一个）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUFSVolumeInfoResponse
     * @throws UCloudException
     */
    public function updateUFSVolumeInfo(UpdateUFSVolumeInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUFSVolumeInfoResponse($resp->toArray(), $resp->getRequestId());
    }
}
