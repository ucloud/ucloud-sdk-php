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
namespace UCloud\UNet;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\UNet\Apis\AllocateEIPRequest;
use UCloud\UNet\Apis\AllocateEIPResponse;
        
        
        
use UCloud\UNet\Apis\AllocateShareBandwidthRequest;
use UCloud\UNet\Apis\AllocateShareBandwidthResponse;
        
        
        
use UCloud\UNet\Apis\AssociateEIPWithShareBandwidthRequest;
use UCloud\UNet\Apis\AssociateEIPWithShareBandwidthResponse;
        
        
        
use UCloud\UNet\Apis\BindEIPRequest;
use UCloud\UNet\Apis\BindEIPResponse;
        
        
        
use UCloud\UNet\Apis\CreateBandwidthPackageRequest;
use UCloud\UNet\Apis\CreateBandwidthPackageResponse;
        
        
        
use UCloud\UNet\Apis\CreateFirewallRequest;
use UCloud\UNet\Apis\CreateFirewallResponse;
        
        
        
use UCloud\UNet\Apis\DeleteBandwidthPackageRequest;
use UCloud\UNet\Apis\DeleteBandwidthPackageResponse;
        
        
        
use UCloud\UNet\Apis\DeleteFirewallRequest;
use UCloud\UNet\Apis\DeleteFirewallResponse;
        
        
        
use UCloud\UNet\Apis\DescribeBandwidthPackageRequest;
use UCloud\UNet\Apis\DescribeBandwidthPackageResponse;
        
        
        
use UCloud\UNet\Apis\DescribeBandwidthUsageRequest;
use UCloud\UNet\Apis\DescribeBandwidthUsageResponse;
        
        
        
use UCloud\UNet\Apis\DescribeEIPRequest;
use UCloud\UNet\Apis\DescribeEIPResponse;
        
        
        
use UCloud\UNet\Apis\DescribeFirewallRequest;
use UCloud\UNet\Apis\DescribeFirewallResponse;
        
        
        
use UCloud\UNet\Apis\DescribeFirewallResourceRequest;
use UCloud\UNet\Apis\DescribeFirewallResourceResponse;
        
        
        
use UCloud\UNet\Apis\DescribeShareBandwidthRequest;
use UCloud\UNet\Apis\DescribeShareBandwidthResponse;
        
        
        
use UCloud\UNet\Apis\DescribeShareBandwidthPriceRequest;
use UCloud\UNet\Apis\DescribeShareBandwidthPriceResponse;
        
        
        
use UCloud\UNet\Apis\DescribeShareBandwidthUpdatePriceRequest;
use UCloud\UNet\Apis\DescribeShareBandwidthUpdatePriceResponse;
        
        
        
use UCloud\UNet\Apis\DisassociateEIPWithShareBandwidthRequest;
use UCloud\UNet\Apis\DisassociateEIPWithShareBandwidthResponse;
        
        
        
use UCloud\UNet\Apis\DisassociateFirewallRequest;
use UCloud\UNet\Apis\DisassociateFirewallResponse;
        
        
        
use UCloud\UNet\Apis\GetEIPPayModeRequest;
use UCloud\UNet\Apis\GetEIPPayModeResponse;
        
        
        
use UCloud\UNet\Apis\GetEIPPriceRequest;
use UCloud\UNet\Apis\GetEIPPriceResponse;
        
        
        
use UCloud\UNet\Apis\GetEIPUpgradePriceRequest;
use UCloud\UNet\Apis\GetEIPUpgradePriceResponse;
        
        
        
use UCloud\UNet\Apis\GetThroughputDailyBillingInfoRequest;
use UCloud\UNet\Apis\GetThroughputDailyBillingInfoResponse;
        
        
        
use UCloud\UNet\Apis\GrantFirewallRequest;
use UCloud\UNet\Apis\GrantFirewallResponse;
        
        
        
use UCloud\UNet\Apis\ModifyEIPBandwidthRequest;
use UCloud\UNet\Apis\ModifyEIPBandwidthResponse;
        
        
        
use UCloud\UNet\Apis\ModifyEIPWeightRequest;
use UCloud\UNet\Apis\ModifyEIPWeightResponse;
        
        
        
use UCloud\UNet\Apis\ReleaseEIPRequest;
use UCloud\UNet\Apis\ReleaseEIPResponse;
        
        
        
use UCloud\UNet\Apis\ReleaseShareBandwidthRequest;
use UCloud\UNet\Apis\ReleaseShareBandwidthResponse;
        
        
        
use UCloud\UNet\Apis\ResizeShareBandwidthRequest;
use UCloud\UNet\Apis\ResizeShareBandwidthResponse;
        
        
        
use UCloud\UNet\Apis\SetEIPPayModeRequest;
use UCloud\UNet\Apis\SetEIPPayModeResponse;
        
        
        
use UCloud\UNet\Apis\UnBindEIPRequest;
use UCloud\UNet\Apis\UnBindEIPResponse;
        
        
        
use UCloud\UNet\Apis\UpdateEIPAttributeRequest;
use UCloud\UNet\Apis\UpdateEIPAttributeResponse;
        
        
        
use UCloud\UNet\Apis\UpdateFirewallRequest;
use UCloud\UNet\Apis\UpdateFirewallResponse;
        
        
        
use UCloud\UNet\Apis\UpdateFirewallAttributeRequest;
use UCloud\UNet\Apis\UpdateFirewallAttributeResponse;

/**
 * This client is used to call actions of **UNet** service
 */
class UNetClient extends Client
{
        
        
        
        
    /**
     * AllocateEIP - 根据提供信息, 申请弹性IP
     *
     * @throws UCloudException
     */
    public function allocateEIP(AllocateEIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AllocateEIPResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * AllocateShareBandwidth - 开通共享带宽
     *
     * @throws UCloudException
     */
    public function allocateShareBandwidth(AllocateShareBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AllocateShareBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * AssociateEIPWithShareBandwidth - 将EIP加入共享带宽
     *
     * @throws UCloudException
     */
    public function associateEIPWithShareBandwidth(AssociateEIPWithShareBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AssociateEIPWithShareBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * BindEIP - 将尚未使用的弹性IP绑定到指定的资源
     *
     * @throws UCloudException
     */
    public function bindEIP(BindEIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BindEIPResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateBandwidthPackage - 为非共享带宽模式下, 已绑定资源实例的带宽计费弹性IP附加临时带宽包
     *
     * @throws UCloudException
     */
    public function createBandwidthPackage(CreateBandwidthPackageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateBandwidthPackageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateFirewall - 创建防火墙
     *
     * @throws UCloudException
     */
    public function createFirewall(CreateFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateFirewallResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteBandwidthPackage - 删除弹性IP上已附加带宽包
     *
     * @throws UCloudException
     */
    public function deleteBandwidthPackage(DeleteBandwidthPackageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteBandwidthPackageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteFirewall - 删除防火墙
     *
     * @throws UCloudException
     */
    public function deleteFirewall(DeleteFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteFirewallResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeBandwidthPackage - 获取某地域下的带宽包信息
     *
     * @throws UCloudException
     */
    public function describeBandwidthPackage(DescribeBandwidthPackageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeBandwidthPackageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeBandwidthUsage - 获取带宽用量信息
     *
     * @throws UCloudException
     */
    public function describeBandwidthUsage(DescribeBandwidthUsageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeBandwidthUsageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeEIP - 获取弹性IP信息
     *
     * @throws UCloudException
     */
    public function describeEIP(DescribeEIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeEIPResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeFirewall - 获取防火墙组信息
     *
     * @throws UCloudException
     */
    public function describeFirewall(DescribeFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeFirewallResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeFirewallResource - 获取防火墙组所绑定资源的外网IP
     *
     * @throws UCloudException
     */
    public function describeFirewallResource(DescribeFirewallResourceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeFirewallResourceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeShareBandwidth - 获取共享带宽信息
     *
     * @throws UCloudException
     */
    public function describeShareBandwidth(DescribeShareBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeShareBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeShareBandwidthPrice - 获取共享带宽价格
     *
     * @throws UCloudException
     */
    public function describeShareBandwidthPrice(DescribeShareBandwidthPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeShareBandwidthPriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeShareBandwidthUpdatePrice - 获取共享带宽升级价格
     *
     * @throws UCloudException
     */
    public function describeShareBandwidthUpdatePrice(DescribeShareBandwidthUpdatePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeShareBandwidthUpdatePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DisassociateEIPWithShareBandwidth - 将EIP移出共享带宽
     *
     * @throws UCloudException
     */
    public function disassociateEIPWithShareBandwidth(DisassociateEIPWithShareBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DisassociateEIPWithShareBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DisassociateFirewall - 解绑资源上的防火墙
     *
     * @throws UCloudException
     */
    public function disassociateFirewall(DisassociateFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DisassociateFirewallResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetEIPPayMode - 获取弹性IP计费模式
     *
     * @throws UCloudException
     */
    public function getEIPPayMode(GetEIPPayModeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetEIPPayModeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetEIPPrice - 获取弹性IP价格
     *
     * @throws UCloudException
     */
    public function getEIPPrice(GetEIPPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetEIPPriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetEIPUpgradePrice - 获取弹性IP带宽改动价格
     *
     * @throws UCloudException
     */
    public function getEIPUpgradePrice(GetEIPUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetEIPUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetThroughputDailyBillingInfo - 获取流量计费EIP每日流量计费信息
     *
     * @throws UCloudException
     */
    public function getThroughputDailyBillingInfo(GetThroughputDailyBillingInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetThroughputDailyBillingInfoResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GrantFirewall - 将防火墙应用到资源上
     *
     * @throws UCloudException
     */
    public function grantFirewall(GrantFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GrantFirewallResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyEIPBandwidth - 调整弹性IP的外网带宽
     *
     * @throws UCloudException
     */
    public function modifyEIPBandwidth(ModifyEIPBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyEIPBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyEIPWeight - 修改弹性IP的外网出口权重
     *
     * @throws UCloudException
     */
    public function modifyEIPWeight(ModifyEIPWeightRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyEIPWeightResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ReleaseEIP - 释放弹性IP资源, 所释放弹性IP必须为非绑定状态.
     *
     * @throws UCloudException
     */
    public function releaseEIP(ReleaseEIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ReleaseEIPResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ReleaseShareBandwidth - 关闭共享带宽
     *
     * @throws UCloudException
     */
    public function releaseShareBandwidth(ReleaseShareBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ReleaseShareBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ResizeShareBandwidth - 调整共享带宽的带宽值
     *
     * @throws UCloudException
     */
    public function resizeShareBandwidth(ResizeShareBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeShareBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * SetEIPPayMode - 设置弹性IP计费模式, 切换时会涉及付费/退费.
     *
     * @throws UCloudException
     */
    public function setEIPPayMode(SetEIPPayModeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SetEIPPayModeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UnBindEIP - 将弹性IP从资源上解绑
     *
     * @throws UCloudException
     */
    public function unBindEIP(UnBindEIPRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UnBindEIPResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateEIPAttribute - 更新弹性IP名称，业务组，备注等属性字段
     *
     * @throws UCloudException
     */
    public function updateEIPAttribute(UpdateEIPAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateEIPAttributeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateFirewall - 更新防火墙规则
     *
     * @throws UCloudException
     */
    public function updateFirewall(UpdateFirewallRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateFirewallResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateFirewallAttribute - 更新防火墙规则
     *
     * @throws UCloudException
     */
    public function updateFirewallAttribute(UpdateFirewallAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateFirewallAttributeResponse($resp->toArray(), $resp->getRequestId());
    }
}
