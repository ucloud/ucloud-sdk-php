<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UPFS;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UPFS\Apis\CreateUPFSVolumeRequest;
use UCloud\UPFS\Apis\CreateUPFSVolumeResponse;
use UCloud\UPFS\Apis\DescribeUPFSVolumeRequest;
use UCloud\UPFS\Apis\DescribeUPFSVolumeResponse;
use UCloud\UPFS\Apis\DescribeUPFSVolumePriceRequest;
use UCloud\UPFS\Apis\DescribeUPFSVolumePriceResponse;
use UCloud\UPFS\Apis\DescribeUPFSVolumeUpgradePriceRequest;
use UCloud\UPFS\Apis\DescribeUPFSVolumeUpgradePriceResponse;
use UCloud\UPFS\Apis\ExtendUPFSVolumeRequest;
use UCloud\UPFS\Apis\ExtendUPFSVolumeResponse;
use UCloud\UPFS\Apis\RemoveUPFSVolumeRequest;
use UCloud\UPFS\Apis\RemoveUPFSVolumeResponse;
use UCloud\UPFS\Apis\UpdateUPFSVolumeInfoRequest;
use UCloud\UPFS\Apis\UpdateUPFSVolumeInfoResponse;

/**
 * This client is used to call actions of **UPFS** service
 */
class UPFSClient extends Client
{

    /**
     * CreateUPFSVolume - 创建UPFS文件系统
     *
     * See also: https://docs.ucloud.cn/api/upfs-api/create_upfs_volume
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 文件系统大小，单位为GB，必须为100的整数倍，Size最小为500GB
     *     "ProtocolType" => (string) 文件系统协议，目前仅支持POSIX
     *     "VolumeName" => (string) 文件系统名称
     *     "Remark" => (string) 备注
     *     "Tag" => (string) 文件系统所属业务组
     *     "ChargeType" => (string) 计费模式，枚举值为： Year，按年付费； Month，按月付费
     *     "Quantity" => (integer) 购买时长 默认: 1
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "VolumeName" => (string) UPFS文件系统名称
     *     "VolumeId" => (string) UPFS文件系统ID
     * ]
     *
     * @return CreateUPFSVolumeResponse
     * @throws UCloudException
     */
    public function createUPFSVolume(CreateUPFSVolumeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUPFSVolumeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPFSVolume - 获取UPFS文件系统列表
     *
     * See also: https://docs.ucloud.cn/api/upfs-api/describe_upfs_volume
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VolumeId" => (string) 文件系统ID
     *     "Offset" => (integer) 文件列表起始
     *     "Limit" => (integer) 文件列表长度
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) UPFS文件系统总数
     *     "DataSet" => (array<object>) UPFS文件系统详细信息列表[
     *         [
     *             "Zone" => (string) 可用区名字
     *             "VolumeName" => (string) 文件系统名称
     *             "VolumeId" => (string) 文件系统ID
     *             "ProtocolType" => (string) 文件系统协议类型
     *             "Remark" => (string) 文件系统备注信息
     *             "Tag" => (string) 文件系统所属业务组
     *             "CreateTime" => (integer) 文件系统创建时间（unix时间戳）
     *             "ExpiredTime" => (integer) 文件系统过期时间（unix时间戳）
     *             "Size" => (integer) 文件系统大小，单位GB
     *             "IsExpired" => (string) 是否过期
     *             "ChargeType" => (string) 计费类型
     *             "MountStatus" => (integer) 文件系统挂载状态
     *             "MountAddress" => (string) 文件系统挂载地址
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUPFSVolumeResponse
     * @throws UCloudException
     */
    public function describeUPFSVolume(DescribeUPFSVolumeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUPFSVolumeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPFSVolumePrice - 获取UPFS文件系统价格
     *
     * See also: https://docs.ucloud.cn/api/upfs-api/describe_upfs_volume_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 文件系统大小，单位为GB，新架构容量型最小容量为500GB，以100GB递增，最大不超过100TB。
     *     "Quantity" => (integer) 购买UPFS的时长， 默认为1
     *     "ChargeType" => (string) Year， Month默认: Month
     *     "VolumeId" => (string) UPFS文件系统id，第一次创建文件系统时不需要传这个参数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) upfs 价格信息[
     *         [
     *             "ChargeType" => (string) Year， Month
     *             "Price" => (number) 价格 (单位: 分)
     *             "OriginalPrice" => (number) 原价格 (单位: 分)
     *             "ChargeName" => (string) “upfs”
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUPFSVolumePriceResponse
     * @throws UCloudException
     */
    public function describeUPFSVolumePrice(DescribeUPFSVolumePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUPFSVolumePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUPFSVolumeUpgradePrice - UPFS文件系统扩容价格
     *
     * See also: https://docs.ucloud.cn/api/upfs-api/describe_upfs_volume_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VolumeId" => (string) 文件系统ID
     *     "Size" => (string) 文件系统大小
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (number) 价格（单位：分）
     *     "OriginalPrice" => (number) 原价格（单位：分）
     * ]
     *
     * @return DescribeUPFSVolumeUpgradePriceResponse
     * @throws UCloudException
     */
    public function describeUPFSVolumeUpgradePrice(DescribeUPFSVolumeUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUPFSVolumeUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ExtendUPFSVolume - UPFS文件系统扩容
     *
     * See also: https://docs.ucloud.cn/api/upfs-api/extend_upfs_volume
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "VolumeId" => (string) 文件系统ID
     *     "Size" => (integer) 文件系统大小，单位为GB，最小为6000GB，最大为10PB，必须为1000的整数倍
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ExtendUPFSVolumeResponse
     * @throws UCloudException
     */
    public function extendUPFSVolume(ExtendUPFSVolumeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ExtendUPFSVolumeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RemoveUPFSVolume - 删除UPFS文件系统
     *
     * See also: https://docs.ucloud.cn/api/upfs-api/remove_upfs_volume
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
     * ]
     *
     * @return RemoveUPFSVolumeResponse
     * @throws UCloudException
     */
    public function removeUPFSVolume(RemoveUPFSVolumeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RemoveUPFSVolumeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUPFSVolumeInfo - 更改UPFS文件系统相关信息（名称／备注）
     *
     * See also: https://docs.ucloud.cn/api/upfs-api/update_upfs_volume_info
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "VolumeId" => (string) UPFS文件系统ID
     *     "VolumeName" => (string) UPFS文件系统名称（文件系统名称／备注至少传入其中一个）
     *     "Remark" => (string) UPFS文件系统备注（文件系统名称／备注至少传入其中一个）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUPFSVolumeInfoResponse
     * @throws UCloudException
     */
    public function updateUPFSVolumeInfo(UpdateUPFSVolumeInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUPFSVolumeInfoResponse($resp->toArray(), $resp->getRequestId());
    }
}
