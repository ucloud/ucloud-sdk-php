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
     * @throws UCloudException
     */
    public function createPHost(CreatePHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreatePHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreatePHostImage - 创建裸金属2.0用户自定义镜像
     *
     * @throws UCloudException
     */
    public function createPHostImage(CreatePHostImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreatePHostImageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeBaremetalMachineType - 获取裸金属机型的详细描述信息
     *
     * @throws UCloudException
     */
    public function describeBaremetalMachineType(DescribeBaremetalMachineTypeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeBaremetalMachineTypeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribePHost - 获取物理机详细信息
     *
     * @throws UCloudException
     */
    public function describePHost(DescribePHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribePHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribePHostImage - 获取物理云主机镜像列表
     *
     * @throws UCloudException
     */
    public function describePHostImage(DescribePHostImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribePHostImageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribePHostMachineType - 获取物理云机型的详细描述信息
     *
     * @throws UCloudException
     */
    public function describePHostMachineType(DescribePHostMachineTypeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribePHostMachineTypeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribePHostTags - 获取物理机tag列表（业务组）
     *
     * @throws UCloudException
     */
    public function describePHostTags(DescribePHostTagsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribePHostTagsResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetPHostDiskUpgradePrice - 获取物理云裸金属挂载磁盘的升级价格
     *
     * @throws UCloudException
     */
    public function getPHostDiskUpgradePrice(GetPHostDiskUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetPHostDiskUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetPHostPrice - 获取物理机价格列表
     *
     * @throws UCloudException
     */
    public function getPHostPrice(GetPHostPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetPHostPriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyPHostImageInfo - 修改自定义镜像名称和备注
     *
     * @throws UCloudException
     */
    public function modifyPHostImageInfo(ModifyPHostImageInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyPHostImageInfoResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyPHostInfo - 更改物理机信息
     *
     * @throws UCloudException
     */
    public function modifyPHostInfo(ModifyPHostInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyPHostInfoResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * PoweroffPHost - 断电物理云主机
     *
     * @throws UCloudException
     */
    public function poweroffPHost(PoweroffPHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new PoweroffPHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RebootPHost - 重启物理机
     *
     * @throws UCloudException
     */
    public function rebootPHost(RebootPHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RebootPHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ReinstallPHost - 重装物理机操作系统
     *
     * @throws UCloudException
     */
    public function reinstallPHost(ReinstallPHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ReinstallPHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ResetPHostPassword - 重置裸金属实例的管理员密码
     *
     * @throws UCloudException
     */
    public function resetPHostPassword(ResetPHostPasswordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResetPHostPasswordResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ResizePHostAttachedDisk - 修改裸金属物理云已经挂载的云盘容量大小
     *
     * @throws UCloudException
     */
    public function resizePHostAttachedDisk(ResizePHostAttachedDiskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizePHostAttachedDiskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * StartPHost - 启动物理机
     *
     * @throws UCloudException
     */
    public function startPHost(StartPHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StartPHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * StopPHost - 关闭物理机
     *
     * @throws UCloudException
     */
    public function stopPHost(StopPHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StopPHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * TerminatePHost - 删除物理云主机
     *
     * @throws UCloudException
     */
    public function terminatePHost(TerminatePHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new TerminatePHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * TerminatePHostImage - 删除裸金属2.0用户自定义镜像
     *
     * @throws UCloudException
     */
    public function terminatePHostImage(TerminatePHostImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new TerminatePHostImageResponse($resp->toArray(), $resp->getRequestId());
    }
}
