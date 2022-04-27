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
namespace UCloud\IPSecVPN;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\IPSecVPN\Apis\CreateRemoteVPNGatewayRequest;
use UCloud\IPSecVPN\Apis\CreateRemoteVPNGatewayResponse;
        
        
        
use UCloud\IPSecVPN\Apis\CreateVPNGatewayRequest;
use UCloud\IPSecVPN\Apis\CreateVPNGatewayResponse;
        
        
        
use UCloud\IPSecVPN\Apis\CreateVPNTunnelRequest;
use UCloud\IPSecVPN\Apis\CreateVPNTunnelResponse;
        
        
        
use UCloud\IPSecVPN\Apis\DeleteRemoteVPNGatewayRequest;
use UCloud\IPSecVPN\Apis\DeleteRemoteVPNGatewayResponse;
        
        
        
use UCloud\IPSecVPN\Apis\DeleteVPNGatewayRequest;
use UCloud\IPSecVPN\Apis\DeleteVPNGatewayResponse;
        
        
        
use UCloud\IPSecVPN\Apis\DeleteVPNTunnelRequest;
use UCloud\IPSecVPN\Apis\DeleteVPNTunnelResponse;
        
        
        
use UCloud\IPSecVPN\Apis\DescribeRemoteVPNGatewayRequest;
use UCloud\IPSecVPN\Apis\DescribeRemoteVPNGatewayResponse;
        
        
        
use UCloud\IPSecVPN\Apis\DescribeVPNGatewayRequest;
use UCloud\IPSecVPN\Apis\DescribeVPNGatewayResponse;
        
        
        
use UCloud\IPSecVPN\Apis\DescribeVPNTunnelRequest;
use UCloud\IPSecVPN\Apis\DescribeVPNTunnelResponse;
        
        
        
use UCloud\IPSecVPN\Apis\GetVPNGatewayPriceRequest;
use UCloud\IPSecVPN\Apis\GetVPNGatewayPriceResponse;
        
        
        
use UCloud\IPSecVPN\Apis\GetVPNGatewayUpgradePriceRequest;
use UCloud\IPSecVPN\Apis\GetVPNGatewayUpgradePriceResponse;
        
        
        
use UCloud\IPSecVPN\Apis\UpdateVPNGatewayRequest;
use UCloud\IPSecVPN\Apis\UpdateVPNGatewayResponse;
        
        
        
use UCloud\IPSecVPN\Apis\UpdateVPNTunnelAttributeRequest;
use UCloud\IPSecVPN\Apis\UpdateVPNTunnelAttributeResponse;

/**
 * This client is used to call actions of **IPSecVPN** service
 */
class IPSecVPNClient extends Client
{
        
        
        
        
    /**
     * CreateRemoteVPNGateway - 创建客户VPN网关
     *
     * @throws UCloudException
     */
    public function createRemoteVPNGateway(CreateRemoteVPNGatewayRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateRemoteVPNGatewayResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateVPNGateway - 创建VPN网关
     *
     * @throws UCloudException
     */
    public function createVPNGateway(CreateVPNGatewayRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateVPNGatewayResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateVPNTunnel - 创建VPN隧道
     *
     * @throws UCloudException
     */
    public function createVPNTunnel(CreateVPNTunnelRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateVPNTunnelResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteRemoteVPNGateway - 删除客户VPN网关
     *
     * @throws UCloudException
     */
    public function deleteRemoteVPNGateway(DeleteRemoteVPNGatewayRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteRemoteVPNGatewayResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteVPNGateway - 删除VPN网关
     *
     * @throws UCloudException
     */
    public function deleteVPNGateway(DeleteVPNGatewayRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteVPNGatewayResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteVPNTunnel - 删除VPN隧道
     *
     * @throws UCloudException
     */
    public function deleteVPNTunnel(DeleteVPNTunnelRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteVPNTunnelResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeRemoteVPNGateway - 获取客户VPN网关信息
     *
     * @throws UCloudException
     */
    public function describeRemoteVPNGateway(DescribeRemoteVPNGatewayRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeRemoteVPNGatewayResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeVPNGateway - 获取VPN网关信息
     *
     * @throws UCloudException
     */
    public function describeVPNGateway(DescribeVPNGatewayRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeVPNGatewayResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeVPNTunnel - 获取VPN隧道信息
     *
     * @throws UCloudException
     */
    public function describeVPNTunnel(DescribeVPNTunnelRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeVPNTunnelResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetVPNGatewayPrice - 获取VPN价格
     *
     * @throws UCloudException
     */
    public function getVPNGatewayPrice(GetVPNGatewayPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetVPNGatewayPriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetVPNGatewayUpgradePrice - 获取VPN网关规格改动价格
     *
     * @throws UCloudException
     */
    public function getVPNGatewayUpgradePrice(GetVPNGatewayUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetVPNGatewayUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateVPNGateway - 更改VPN网关规格
     *
     * @throws UCloudException
     */
    public function updateVPNGateway(UpdateVPNGatewayRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateVPNGatewayResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateVPNTunnelAttribute - 更新VPN隧道属性
     *
     * @throws UCloudException
     */
    public function updateVPNTunnelAttribute(UpdateVPNTunnelAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateVPNTunnelAttributeResponse($resp->toArray(), $resp->getRequestId());
    }
}
