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
namespace UCloud\UEC;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\UEC\Apis\BindUEcFirewallRequest;
use UCloud\UEC\Apis\BindUEcFirewallResponse;
        
        
        
use UCloud\UEC\Apis\CreateUEcCustomImageRequest;
use UCloud\UEC\Apis\CreateUEcCustomImageResponse;
        
        
        
use UCloud\UEC\Apis\CreateUEcFirewallRequest;
use UCloud\UEC\Apis\CreateUEcFirewallResponse;
        
        
        
use UCloud\UEC\Apis\CreateUEcHolderRequest;
use UCloud\UEC\Apis\CreateUEcHolderResponse;
        
        
        
use UCloud\UEC\Apis\CreateUEcSubnetRequest;
use UCloud\UEC\Apis\CreateUEcSubnetResponse;
        
        
        
use UCloud\UEC\Apis\CreateUEcVHostRequest;
use UCloud\UEC\Apis\CreateUEcVHostResponse;
        
        
        
use UCloud\UEC\Apis\DeleteUEcCustomImageRequest;
use UCloud\UEC\Apis\DeleteUEcCustomImageResponse;
        
        
        
use UCloud\UEC\Apis\DeleteUEcHolderRequest;
use UCloud\UEC\Apis\DeleteUEcHolderResponse;
        
        
        
use UCloud\UEC\Apis\DeleteUEcSubnetRequest;
use UCloud\UEC\Apis\DeleteUEcSubnetResponse;
        
        
        
use UCloud\UEC\Apis\DeleteUEcVHostRequest;
use UCloud\UEC\Apis\DeleteUEcVHostResponse;
        
        
        
use UCloud\UEC\Apis\DescribeUEcFirewallRequest;
use UCloud\UEC\Apis\DescribeUEcFirewallResponse;
        
        
        
use UCloud\UEC\Apis\DescribeUEcFirewallResourceRequest;
use UCloud\UEC\Apis\DescribeUEcFirewallResourceResponse;
        
        
        
use UCloud\UEC\Apis\DescribeUEcHolderRequest;
use UCloud\UEC\Apis\DescribeUEcHolderResponse;
        
        
        
use UCloud\UEC\Apis\DescribeUEcHolderIDCRequest;
use UCloud\UEC\Apis\DescribeUEcHolderIDCResponse;
        
        
        
use UCloud\UEC\Apis\DescribeUEcIDCRequest;
use UCloud\UEC\Apis\DescribeUEcIDCResponse;
        
        
        
use UCloud\UEC\Apis\DescribeUEcSubnetRequest;
use UCloud\UEC\Apis\DescribeUEcSubnetResponse;
        
        
        
use UCloud\UEC\Apis\DescribeUEcVHostRequest;
use UCloud\UEC\Apis\DescribeUEcVHostResponse;
        
        
        
use UCloud\UEC\Apis\DescribeUEcVHostISPRequest;
use UCloud\UEC\Apis\DescribeUEcVHostISPResponse;
        
        
        
use UCloud\UEC\Apis\GetUEcHolderLogRequest;
use UCloud\UEC\Apis\GetUEcHolderLogResponse;
        
        
        
use UCloud\UEC\Apis\GetUEcHolderMetricsRequest;
use UCloud\UEC\Apis\GetUEcHolderMetricsResponse;
        
        
        
use UCloud\UEC\Apis\GetUEcIDCCutInfoRequest;
use UCloud\UEC\Apis\GetUEcIDCCutInfoResponse;
        
        
        
use UCloud\UEC\Apis\GetUEcIDCVHostDataRequest;
use UCloud\UEC\Apis\GetUEcIDCVHostDataResponse;
        
        
        
use UCloud\UEC\Apis\GetUEcImageRequest;
use UCloud\UEC\Apis\GetUEcImageResponse;
        
        
        
use UCloud\UEC\Apis\GetUEcPodPriceRequest;
use UCloud\UEC\Apis\GetUEcPodPriceResponse;
        
        
        
use UCloud\UEC\Apis\GetUEcUpgradePriceRequest;
use UCloud\UEC\Apis\GetUEcUpgradePriceResponse;
        
        
        
use UCloud\UEC\Apis\GetUEcVHostDataRequest;
use UCloud\UEC\Apis\GetUEcVHostDataResponse;
        
        
        
use UCloud\UEC\Apis\GetUEcVHostPriceRequest;
use UCloud\UEC\Apis\GetUEcVHostPriceResponse;
        
        
        
use UCloud\UEC\Apis\ImportUEcCustomImageRequest;
use UCloud\UEC\Apis\ImportUEcCustomImageResponse;
        
        
        
use UCloud\UEC\Apis\LoginUEcDockerRequest;
use UCloud\UEC\Apis\LoginUEcDockerResponse;
        
        
        
use UCloud\UEC\Apis\ModifyUEcBandwidthRequest;
use UCloud\UEC\Apis\ModifyUEcBandwidthResponse;
        
        
        
use UCloud\UEC\Apis\ModifyUEcHolderNameRequest;
use UCloud\UEC\Apis\ModifyUEcHolderNameResponse;
        
        
        
use UCloud\UEC\Apis\ModifyUEcImageNameRequest;
use UCloud\UEC\Apis\ModifyUEcImageNameResponse;
        
        
        
use UCloud\UEC\Apis\PoweroffUEcVHostRequest;
use UCloud\UEC\Apis\PoweroffUEcVHostResponse;
        
        
        
use UCloud\UEC\Apis\ReinstallUEcVHostRequest;
use UCloud\UEC\Apis\ReinstallUEcVHostResponse;
        
        
        
use UCloud\UEC\Apis\RestartUEcHolderRequest;
use UCloud\UEC\Apis\RestartUEcHolderResponse;
        
        
        
use UCloud\UEC\Apis\RestartUEcVHostRequest;
use UCloud\UEC\Apis\RestartUEcVHostResponse;
        
        
        
use UCloud\UEC\Apis\StartUEcVHostRequest;
use UCloud\UEC\Apis\StartUEcVHostResponse;
        
        
        
use UCloud\UEC\Apis\StopUEcVHostRequest;
use UCloud\UEC\Apis\StopUEcVHostResponse;
        
        
        
use UCloud\UEC\Apis\UnBindUEcFirewallRequest;
use UCloud\UEC\Apis\UnBindUEcFirewallResponse;
        
        
        
use UCloud\UEC\Apis\UpdateUEcFirewallRequest;
use UCloud\UEC\Apis\UpdateUEcFirewallResponse;
        
        
        
use UCloud\UEC\Apis\UpdateUEcFirewallAttributeRequest;
use UCloud\UEC\Apis\UpdateUEcFirewallAttributeResponse;
        
        
        
use UCloud\UEC\Apis\UpdateUEcSubnetRequest;
use UCloud\UEC\Apis\UpdateUEcSubnetResponse;

/**
 * This client is used to call actions of **UEC** service
 */
class UECClient extends Client
{
        
        
        
        
    /**
     * BindUEcFirewall - 绑定防火墙，应用防火墙规则
     *
     * @throws UCloudException
     */
    public function bindUEcFirewall(BindUEcFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BindUEcFirewallResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUEcCustomImage - 从指定虚拟机，生成自定义镜像。
     *
     * @throws UCloudException
     */
    public function createUEcCustomImage(CreateUEcCustomImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUEcCustomImageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUEcFirewall - 创建外网防火墙
     *
     * @throws UCloudException
     */
    public function createUEcFirewall(CreateUEcFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUEcFirewallResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUEcHolder - 创建容器组
     *
     * @throws UCloudException
     */
    public function createUEcHolder(CreateUEcHolderRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUEcHolderResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUEcSubnet - 创建子网
     *
     * @throws UCloudException
     */
    public function createUEcSubnet(CreateUEcSubnetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUEcSubnetResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUEcVHost - 创建虚拟机v2.0
     *
     * @throws UCloudException
     */
    public function createUEcVHost(CreateUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUEcCustomImage - 删除UEDN客户自定义镜像
     *
     * @throws UCloudException
     */
    public function deleteUEcCustomImage(DeleteUEcCustomImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUEcCustomImageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUEcHolder - 删除容器组
     *
     * @throws UCloudException
     */
    public function deleteUEcHolder(DeleteUEcHolderRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUEcHolderResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUEcSubnet - 删除子网
     *
     * @throws UCloudException
     */
    public function deleteUEcSubnet(DeleteUEcSubnetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUEcSubnetResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUEcVHost - 删除vhost虚拟机 v2.0
     *
     * @throws UCloudException
     */
    public function deleteUEcVHost(DeleteUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUEcFirewall - 获取防火墙信息
     *
     * @throws UCloudException
     */
    public function describeUEcFirewall(DescribeUEcFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcFirewallResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUEcFirewallResource - 防火墙绑定的资源列表
     *
     * @throws UCloudException
     */
    public function describeUEcFirewallResource(DescribeUEcFirewallResourceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcFirewallResourceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUEcHolder - 获得容器组信息
     *
     * @throws UCloudException
     */
    public function describeUEcHolder(DescribeUEcHolderRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcHolderResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUEcHolderIDC - 获取容器组机房信息
     *
     * @throws UCloudException
     */
    public function describeUEcHolderIDC(DescribeUEcHolderIDCRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcHolderIDCResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUEcIDC - 获取IDC机房列表
     *
     * @throws UCloudException
     */
    public function describeUEcIDC(DescribeUEcIDCRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcIDCResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUEcSubnet - 获取子网列表
     *
     * @throws UCloudException
     */
    public function describeUEcSubnet(DescribeUEcSubnetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcSubnetResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUEcVHost - 获取虚拟机列表 2.0
     *
     * @throws UCloudException
     */
    public function describeUEcVHost(DescribeUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUEcVHostISP - 获取虚拟机运营商信息
     *
     * @throws UCloudException
     */
    public function describeUEcVHostISP(DescribeUEcVHostISPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUEcVHostISPResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUEcHolderLog - 获取单个容器日志
     *
     * @throws UCloudException
     */
    public function getUEcHolderLog(GetUEcHolderLogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcHolderLogResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUEcHolderMetrics - 获取容器（CPU利用率，带宽，内存）数据
     *
     * @throws UCloudException
     */
    public function getUEcHolderMetrics(GetUEcHolderMetricsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcHolderMetricsResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUEcIDCCutInfo - 获取机房割接信息
     *
     * @throws UCloudException
     */
    public function getUEcIDCCutInfo(GetUEcIDCCutInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcIDCCutInfoResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUEcIDCVHostData - 获取机房虚拟机监控数据
     *
     * @throws UCloudException
     */
    public function getUEcIDCVHostData(GetUEcIDCVHostDataRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcIDCVHostDataResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUEcImage - uec2.0
     *
     * @throws UCloudException
     */
    public function getUEcImage(GetUEcImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcImageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUEcPodPrice - 获得容器组价格
     *
     * @throws UCloudException
     */
    public function getUEcPodPrice(GetUEcPodPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcPodPriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUEcUpgradePrice - 获取虚拟机调整差价
     *
     * @throws UCloudException
     */
    public function getUEcUpgradePrice(GetUEcUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUEcVHostData - 获取虚拟机监控数据
     *
     * @throws UCloudException
     */
    public function getUEcVHostData(GetUEcVHostDataRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcVHostDataResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUEcVHostPrice - 获取虚拟机价格
     *
     * @throws UCloudException
     */
    public function getUEcVHostPrice(GetUEcVHostPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUEcVHostPriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ImportUEcCustomImage - 导入自定义镜像
     *
     * @throws UCloudException
     */
    public function importUEcCustomImage(ImportUEcCustomImageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ImportUEcCustomImageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * LoginUEcDocker - 登录容器
     *
     * @throws UCloudException
     */
    public function loginUEcDocker(LoginUEcDockerRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new LoginUEcDockerResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUEcBandwidth - 修改节点带宽限制
     *
     * @throws UCloudException
     */
    public function modifyUEcBandwidth(ModifyUEcBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUEcBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUEcHolderName - 修改容器组名称
     *
     * @throws UCloudException
     */
    public function modifyUEcHolderName(ModifyUEcHolderNameRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUEcHolderNameResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUEcImageName - 修改镜像名称
     *
     * @throws UCloudException
     */
    public function modifyUEcImageName(ModifyUEcImageNameRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUEcImageNameResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * PoweroffUEcVHost - 虚拟机断电
     *
     * @throws UCloudException
     */
    public function poweroffUEcVHost(PoweroffUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new PoweroffUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ReinstallUEcVHost - 虚拟机重装系统
     *
     * @throws UCloudException
     */
    public function reinstallUEcVHost(ReinstallUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ReinstallUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RestartUEcHolder - 重启容器组
     *
     * @throws UCloudException
     */
    public function restartUEcHolder(RestartUEcHolderRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestartUEcHolderResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RestartUEcVHost - 重启虚拟机v2.0
     *
     * @throws UCloudException
     */
    public function restartUEcVHost(RestartUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestartUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * StartUEcVHost - 启动UEC虚拟机
     *
     * @throws UCloudException
     */
    public function startUEcVHost(StartUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StartUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * StopUEcVHost - 停止UEC虚拟机
     *
     * @throws UCloudException
     */
    public function stopUEcVHost(StopUEcVHostRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StopUEcVHostResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UnBindUEcFirewall - 解绑防火墙
     *
     * @throws UCloudException
     */
    public function unBindUEcFirewall(UnBindUEcFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UnBindUEcFirewallResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateUEcFirewall - 更新防火墙信息，新增和删除规则
     *
     * @throws UCloudException
     */
    public function updateUEcFirewall(UpdateUEcFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUEcFirewallResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateUEcFirewallAttribute - 更新防火墙名称及描述
     *
     * @throws UCloudException
     */
    public function updateUEcFirewallAttribute(UpdateUEcFirewallAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUEcFirewallAttributeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateUEcSubnet - 更新子网信息
     *
     * @throws UCloudException
     */
    public function updateUEcSubnet(UpdateUEcSubnetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUEcSubnetResponse($resp->toArray(), $resp->getRequestId());
    }
}
