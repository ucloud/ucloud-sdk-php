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
namespace UCloud\UDPN;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\UDPN\Apis\AllocateUDPNRequest;
use UCloud\UDPN\Apis\AllocateUDPNResponse;
        
        
        
use UCloud\UDPN\Apis\DescribeUDPNRequest;
use UCloud\UDPN\Apis\DescribeUDPNResponse;
        
        
        
use UCloud\UDPN\Apis\GetUDPNLineListRequest;
use UCloud\UDPN\Apis\GetUDPNLineListResponse;
        
        
        
use UCloud\UDPN\Apis\GetUDPNPriceRequest;
use UCloud\UDPN\Apis\GetUDPNPriceResponse;
        
        
        
use UCloud\UDPN\Apis\GetUDPNUpgradePriceRequest;
use UCloud\UDPN\Apis\GetUDPNUpgradePriceResponse;
        
        
        
use UCloud\UDPN\Apis\ModifyUDPNBandwidthRequest;
use UCloud\UDPN\Apis\ModifyUDPNBandwidthResponse;
        
        
        
use UCloud\UDPN\Apis\ReleaseUDPNRequest;
use UCloud\UDPN\Apis\ReleaseUDPNResponse;

/**
 * This client is used to call actions of **UDPN** service
 */
class UDPNClient extends Client
{
        
        
        
        
    /**
     * AllocateUDPN - 分配一条 UDPN 专线
     *
     * @throws UCloudException
     */
    public function allocateUDPN(AllocateUDPNRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AllocateUDPNResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDPN - 描述 UDPN
     *
     * @throws UCloudException
     */
    public function describeUDPN(DescribeUDPNRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDPNResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUDPNLineList - 获取当前支持的专线线路列表
     *
     * @throws UCloudException
     */
    public function getUDPNLineList(GetUDPNLineListRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUDPNLineListResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUDPNPrice - 获取 UDPN 价格
     *
     * @throws UCloudException
     */
    public function getUDPNPrice(GetUDPNPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUDPNPriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUDPNUpgradePrice - 获取专线升级价格
     *
     * @throws UCloudException
     */
    public function getUDPNUpgradePrice(GetUDPNUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUDPNUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUDPNBandwidth - 修改带宽值
     *
     * @throws UCloudException
     */
    public function modifyUDPNBandwidth(ModifyUDPNBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUDPNBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ReleaseUDPN - 释放 UDPN
     *
     * @throws UCloudException
     */
    public function releaseUDPN(ReleaseUDPNRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ReleaseUDPNResponse($resp->toArray(), $resp->getRequestId());
    }
}
