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
namespace UCloud\UHost;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\UHost\Apis\CopyCustomImageRequest;
use UCloud\UHost\Apis\CopyCustomImageResponse;
        
        
        
use UCloud\UHost\Apis\CreateCustomImageRequest;
use UCloud\UHost\Apis\CreateCustomImageResponse;
        
        
        
use UCloud\UHost\Apis\CreateIsolationGroupRequest;
use UCloud\UHost\Apis\CreateIsolationGroupResponse;
        
        
        
use UCloud\UHost\Apis\CreateUHostInstanceRequest;
use UCloud\UHost\Apis\CreateUHostInstanceResponse;
        
        
        
use UCloud\UHost\Apis\CreateUHostKeyPairRequest;
use UCloud\UHost\Apis\CreateUHostKeyPairResponse;
        
        
        
use UCloud\UHost\Apis\DeleteIsolationGroupRequest;
use UCloud\UHost\Apis\DeleteIsolationGroupResponse;
        
        
        
use UCloud\UHost\Apis\DeleteUHostKeyPairsRequest;
use UCloud\UHost\Apis\DeleteUHostKeyPairsResponse;
        
        
        
use UCloud\UHost\Apis\DescribeImageRequest;
use UCloud\UHost\Apis\DescribeImageResponse;
        
        
        
use UCloud\UHost\Apis\DescribeIsolationGroupRequest;
use UCloud\UHost\Apis\DescribeIsolationGroupResponse;
        
        
        
use UCloud\UHost\Apis\DescribeUHostInstanceRequest;
use UCloud\UHost\Apis\DescribeUHostInstanceResponse;
        
        
        
use UCloud\UHost\Apis\DescribeUHostKeyPairsRequest;
use UCloud\UHost\Apis\DescribeUHostKeyPairsResponse;
        
        
        
use UCloud\UHost\Apis\DescribeUHostTagsRequest;
use UCloud\UHost\Apis\DescribeUHostTagsResponse;
        
        
        
use UCloud\UHost\Apis\GetAttachedDiskUpgradePriceRequest;
use UCloud\UHost\Apis\GetAttachedDiskUpgradePriceResponse;
        
        
        
use UCloud\UHost\Apis\GetUHostInstancePriceRequest;
use UCloud\UHost\Apis\GetUHostInstancePriceResponse;
        
        
        
use UCloud\UHost\Apis\GetUHostInstanceVncInfoRequest;
use UCloud\UHost\Apis\GetUHostInstanceVncInfoResponse;
        
        
        
use UCloud\UHost\Apis\GetUHostUpgradePriceRequest;
use UCloud\UHost\Apis\GetUHostUpgradePriceResponse;
        
        
        
use UCloud\UHost\Apis\ImportCustomImageRequest;
use UCloud\UHost\Apis\ImportCustomImageResponse;
        
        
        
use UCloud\UHost\Apis\ImportUHostKeyPairsRequest;
use UCloud\UHost\Apis\ImportUHostKeyPairsResponse;
        
        
        
use UCloud\UHost\Apis\LeaveIsolationGroupRequest;
use UCloud\UHost\Apis\LeaveIsolationGroupResponse;
        
        
        
use UCloud\UHost\Apis\ModifyUHostIPRequest;
use UCloud\UHost\Apis\ModifyUHostIPResponse;
        
        
        
use UCloud\UHost\Apis\ModifyUHostInstanceNameRequest;
use UCloud\UHost\Apis\ModifyUHostInstanceNameResponse;
        
        
        
use UCloud\UHost\Apis\ModifyUHostInstanceRemarkRequest;
use UCloud\UHost\Apis\ModifyUHostInstanceRemarkResponse;
        
        
        
use UCloud\UHost\Apis\ModifyUHostInstanceTagRequest;
use UCloud\UHost\Apis\ModifyUHostInstanceTagResponse;
        
        
        
use UCloud\UHost\Apis\PoweroffUHostInstanceRequest;
use UCloud\UHost\Apis\PoweroffUHostInstanceResponse;
        
        
        
use UCloud\UHost\Apis\RebootUHostInstanceRequest;
use UCloud\UHost\Apis\RebootUHostInstanceResponse;
        
        
        
use UCloud\UHost\Apis\ReinstallUHostInstanceRequest;
use UCloud\UHost\Apis\ReinstallUHostInstanceResponse;
        
        
        
use UCloud\UHost\Apis\ResetUHostInstancePasswordRequest;
use UCloud\UHost\Apis\ResetUHostInstancePasswordResponse;
        
        
        
use UCloud\UHost\Apis\ResizeAttachedDiskRequest;
use UCloud\UHost\Apis\ResizeAttachedDiskResponse;
        
        
        
use UCloud\UHost\Apis\ResizeUHostInstanceRequest;
use UCloud\UHost\Apis\ResizeUHostInstanceResponse;
        
        
        
use UCloud\UHost\Apis\StartUHostInstanceRequest;
use UCloud\UHost\Apis\StartUHostInstanceResponse;
        
        
        
use UCloud\UHost\Apis\StopUHostInstanceRequest;
use UCloud\UHost\Apis\StopUHostInstanceResponse;
        
        
        
use UCloud\UHost\Apis\TerminateCustomImageRequest;
use UCloud\UHost\Apis\TerminateCustomImageResponse;
        
        
        
use UCloud\UHost\Apis\TerminateUHostInstanceRequest;
use UCloud\UHost\Apis\TerminateUHostInstanceResponse;
        
        
        
use UCloud\UHost\Apis\UpgradeToArkUHostInstanceRequest;
use UCloud\UHost\Apis\UpgradeToArkUHostInstanceResponse;

/**
 * This client is used to call actions of **UHost** service
 */
class UHostClient extends Client
{
        
        
        
        
    /**
     * CopyCustomImage - 复制自制镜像
     *
     * @throws UCloudException
     */
    public function copyCustomImage(CopyCustomImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CopyCustomImageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateCustomImage - 从指定UHost实例，生成自定义镜像。
     *
     * @throws UCloudException
     */
    public function createCustomImage(CreateCustomImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateCustomImageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateIsolationGroup - 创建硬件隔离组，组内机器严格隔离在不同宿主机上。
     *
     * @throws UCloudException
     */
    public function createIsolationGroup(CreateIsolationGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateIsolationGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUHostInstance - 创建UHost实例。
     *
     * @throws UCloudException
     */
    public function createUHostInstance(CreateUHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUHostKeyPair - 创建主机密钥对信息
     *
     * @throws UCloudException
     */
    public function createUHostKeyPair(CreateUHostKeyPairRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUHostKeyPairResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteIsolationGroup - 删除硬件隔离组。
     *
     * @throws UCloudException
     */
    public function deleteIsolationGroup(DeleteIsolationGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteIsolationGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUHostKeyPairs - 删除一对或者多对密钥对。
     *
     * @throws UCloudException
     */
    public function deleteUHostKeyPairs(DeleteUHostKeyPairsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUHostKeyPairsResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeImage - 获取指定数据中心镜像列表，用户可通过指定操作系统类型，镜像Id进行过滤。
     *
     * @throws UCloudException
     */
    public function describeImage(DescribeImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeImageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeIsolationGroup - 查询硬件隔离组列表。
     *
     * @throws UCloudException
     */
    public function describeIsolationGroup(DescribeIsolationGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeIsolationGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUHostInstance - 获取主机或主机列表信息，并可根据数据中心，主机ID等参数进行过滤。
     *
     * @throws UCloudException
     */
    public function describeUHostInstance(DescribeUHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUHostKeyPairs - 查询一个或多个密钥对。
     *
     * @throws UCloudException
     */
    public function describeUHostKeyPairs(DescribeUHostKeyPairsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUHostKeyPairsResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUHostTags - 获取指定数据中心的业务组列表。
     *
     * @throws UCloudException
     */
    public function describeUHostTags(DescribeUHostTagsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUHostTagsResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetAttachedDiskUpgradePrice - 获取挂载磁盘的升级价格
     *
     * @throws UCloudException
     */
    public function getAttachedDiskUpgradePrice(GetAttachedDiskUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetAttachedDiskUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUHostInstancePrice - 根据UHost实例配置，获取UHost实例的价格。
     *
     * @throws UCloudException
     */
    public function getUHostInstancePrice(GetUHostInstancePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUHostInstancePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUHostInstanceVncInfo - 获取指定UHost实例的管理VNC配置详细信息。
     *
     * @throws UCloudException
     */
    public function getUHostInstanceVncInfo(GetUHostInstanceVncInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUHostInstanceVncInfoResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUHostUpgradePrice - 获取UHost实例升级配置的价格。可选配置范围请参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @throws UCloudException
     */
    public function getUHostUpgradePrice(GetUHostUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUHostUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ImportCustomImage - 把UFile的镜像文件导入到UHost，生成自定义镜像
     *
     * @throws UCloudException
     */
    public function importCustomImage(ImportCustomImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ImportCustomImageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ImportUHostKeyPairs - 导入密钥对后，仅保管公钥部分，需自行妥善保存密钥对的私钥部分。
     *
     * @throws UCloudException
     */
    public function importUHostKeyPairs(ImportUHostKeyPairsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ImportUHostKeyPairsResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * LeaveIsolationGroup - 移除硬件隔离组中的主机
     *
     * @throws UCloudException
     */
    public function leaveIsolationGroup(LeaveIsolationGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new LeaveIsolationGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUHostIP - 修改云主机内网 IP 地址
     *
     * @throws UCloudException
     */
    public function modifyUHostIP(ModifyUHostIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUHostIPResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUHostInstanceName - 修改指定UHost实例名称，需要给出数据中心，UHostId，及新的实例名称。
     *
     * @throws UCloudException
     */
    public function modifyUHostInstanceName(ModifyUHostInstanceNameRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUHostInstanceNameResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUHostInstanceRemark - 修改指定UHost实例备注信息。
     *
     * @throws UCloudException
     */
    public function modifyUHostInstanceRemark(ModifyUHostInstanceRemarkRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUHostInstanceRemarkResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUHostInstanceTag - 修改指定UHost实例业务组标识。
     *
     * @throws UCloudException
     */
    public function modifyUHostInstanceTag(ModifyUHostInstanceTagRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUHostInstanceTagResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * PoweroffUHostInstance - 直接关闭UHost实例电源，无需等待实例正常关闭。
     *
     * @throws UCloudException
     */
    public function poweroffUHostInstance(PoweroffUHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new PoweroffUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RebootUHostInstance - 重新启动UHost实例，需要指定数据中心及UHostID两个参数的值。
     *
     * @throws UCloudException
     */
    public function rebootUHostInstance(RebootUHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RebootUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ReinstallUHostInstance - 重新安装指定UHost实例的操作系统
     *
     * @throws UCloudException
     */
    public function reinstallUHostInstance(ReinstallUHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ReinstallUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ResetUHostInstancePassword - 重置UHost实例的管理员密码。
     *
     * @throws UCloudException
     */
    public function resetUHostInstancePassword(ResetUHostInstancePasswordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResetUHostInstancePasswordResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ResizeAttachedDisk - 修改挂载的磁盘大小，包含系统盘和数据盘
     *
     * @throws UCloudException
     */
    public function resizeAttachedDisk(ResizeAttachedDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeAttachedDiskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ResizeUHostInstance - 修改指定UHost实例的资源配置，如CPU核心数，内存容量大小，网络增强等。可选配置范围请参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @throws UCloudException
     */
    public function resizeUHostInstance(ResizeUHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * StartUHostInstance - 启动处于关闭状态的UHost实例，需要指定数据中心及UHostID两个参数的值。
     *
     * @throws UCloudException
     */
    public function startUHostInstance(StartUHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StartUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * StopUHostInstance - 指停止处于运行状态的UHost实例，需指定数据中心及UhostID。
     *
     * @throws UCloudException
     */
    public function stopUHostInstance(StopUHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StopUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * TerminateCustomImage - 删除用户自定义镜像
     *
     * @throws UCloudException
     */
    public function terminateCustomImage(TerminateCustomImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new TerminateCustomImageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * TerminateUHostInstance - 删除指定数据中心的UHost实例。
     *
     * @throws UCloudException
     */
    public function terminateUHostInstance(TerminateUHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new TerminateUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpgradeToArkUHostInstance - 普通升级为方舟机型
     *
     * @throws UCloudException
     */
    public function upgradeToArkUHostInstance(UpgradeToArkUHostInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpgradeToArkUHostInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
}
