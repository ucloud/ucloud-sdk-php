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
namespace UCloud\PathX;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\PathX\Apis\BindPathXSSLRequest;
use UCloud\PathX\Apis\BindPathXSSLResponse;
        
        
        
use UCloud\PathX\Apis\CreateGlobalSSHInstanceRequest;
use UCloud\PathX\Apis\CreateGlobalSSHInstanceResponse;
        
        
        
use UCloud\PathX\Apis\CreatePathXSSLRequest;
use UCloud\PathX\Apis\CreatePathXSSLResponse;
        
        
        
use UCloud\PathX\Apis\CreateUGA3InstanceRequest;
use UCloud\PathX\Apis\CreateUGA3InstanceResponse;
        
        
        
use UCloud\PathX\Apis\CreateUGA3PortRequest;
use UCloud\PathX\Apis\CreateUGA3PortResponse;
        
        
        
use UCloud\PathX\Apis\CreateUGAForwarderRequest;
use UCloud\PathX\Apis\CreateUGAForwarderResponse;
        
        
        
use UCloud\PathX\Apis\CreateUGAInstanceRequest;
use UCloud\PathX\Apis\CreateUGAInstanceResponse;
        
        
        
use UCloud\PathX\Apis\CreateUPathRequest;
use UCloud\PathX\Apis\CreateUPathResponse;
        
        
        
use UCloud\PathX\Apis\DeleteGlobalSSHInstanceRequest;
use UCloud\PathX\Apis\DeleteGlobalSSHInstanceResponse;
        
        
        
use UCloud\PathX\Apis\DeletePathXSSLRequest;
use UCloud\PathX\Apis\DeletePathXSSLResponse;
        
        
        
use UCloud\PathX\Apis\DeleteUGA3InstanceRequest;
use UCloud\PathX\Apis\DeleteUGA3InstanceResponse;
        
        
        
use UCloud\PathX\Apis\DeleteUGA3PortRequest;
use UCloud\PathX\Apis\DeleteUGA3PortResponse;
        
        
        
use UCloud\PathX\Apis\DeleteUGAForwarderRequest;
use UCloud\PathX\Apis\DeleteUGAForwarderResponse;
        
        
        
use UCloud\PathX\Apis\DeleteUGAInstanceRequest;
use UCloud\PathX\Apis\DeleteUGAInstanceResponse;
        
        
        
use UCloud\PathX\Apis\DeleteUPathRequest;
use UCloud\PathX\Apis\DeleteUPathResponse;
        
        
        
use UCloud\PathX\Apis\DescribeGlobalSSHInstanceRequest;
use UCloud\PathX\Apis\DescribeGlobalSSHInstanceResponse;
        
        
        
use UCloud\PathX\Apis\DescribePathXLineConfigRequest;
use UCloud\PathX\Apis\DescribePathXLineConfigResponse;
        
        
        
use UCloud\PathX\Apis\DescribePathXSSLRequest;
use UCloud\PathX\Apis\DescribePathXSSLResponse;
        
        
        
use UCloud\PathX\Apis\DescribeUGA3AreaRequest;
use UCloud\PathX\Apis\DescribeUGA3AreaResponse;
        
        
        
use UCloud\PathX\Apis\DescribeUGA3InstanceRequest;
use UCloud\PathX\Apis\DescribeUGA3InstanceResponse;
        
        
        
use UCloud\PathX\Apis\DescribeUGA3OptimizationRequest;
use UCloud\PathX\Apis\DescribeUGA3OptimizationResponse;
        
        
        
use UCloud\PathX\Apis\DescribeUGAInstanceRequest;
use UCloud\PathX\Apis\DescribeUGAInstanceResponse;
        
        
        
use UCloud\PathX\Apis\DescribeUPathRequest;
use UCloud\PathX\Apis\DescribeUPathResponse;
        
        
        
use UCloud\PathX\Apis\DescribeUPathTemplateRequest;
use UCloud\PathX\Apis\DescribeUPathTemplateResponse;
        
        
        
use UCloud\PathX\Apis\GetGlobalSSHPriceRequest;
use UCloud\PathX\Apis\GetGlobalSSHPriceResponse;
        
        
        
use UCloud\PathX\Apis\GetGlobalSSHUpdatePriceRequest;
use UCloud\PathX\Apis\GetGlobalSSHUpdatePriceResponse;
        
        
        
use UCloud\PathX\Apis\GetPathXMetricRequest;
use UCloud\PathX\Apis\GetPathXMetricResponse;
        
        
        
use UCloud\PathX\Apis\GetUGA3MetricRequest;
use UCloud\PathX\Apis\GetUGA3MetricResponse;
        
        
        
use UCloud\PathX\Apis\GetUGA3PriceRequest;
use UCloud\PathX\Apis\GetUGA3PriceResponse;
        
        
        
use UCloud\PathX\Apis\GetUGA3UpdatePriceRequest;
use UCloud\PathX\Apis\GetUGA3UpdatePriceResponse;
        
        
        
use UCloud\PathX\Apis\ModifyGlobalSSHPortRequest;
use UCloud\PathX\Apis\ModifyGlobalSSHPortResponse;
        
        
        
use UCloud\PathX\Apis\ModifyGlobalSSHRemarkRequest;
use UCloud\PathX\Apis\ModifyGlobalSSHRemarkResponse;
        
        
        
use UCloud\PathX\Apis\ModifyGlobalSSHTypeRequest;
use UCloud\PathX\Apis\ModifyGlobalSSHTypeResponse;
        
        
        
use UCloud\PathX\Apis\ModifyUGA3BandwidthRequest;
use UCloud\PathX\Apis\ModifyUGA3BandwidthResponse;
        
        
        
use UCloud\PathX\Apis\ModifyUGA3InstanceRequest;
use UCloud\PathX\Apis\ModifyUGA3InstanceResponse;
        
        
        
use UCloud\PathX\Apis\ModifyUGA3OriginInfoRequest;
use UCloud\PathX\Apis\ModifyUGA3OriginInfoResponse;
        
        
        
use UCloud\PathX\Apis\ModifyUGA3PortRequest;
use UCloud\PathX\Apis\ModifyUGA3PortResponse;
        
        
        
use UCloud\PathX\Apis\ModifyUPathBandwidthRequest;
use UCloud\PathX\Apis\ModifyUPathBandwidthResponse;
        
        
        
use UCloud\PathX\Apis\ModifyUPathTemplateRequest;
use UCloud\PathX\Apis\ModifyUPathTemplateResponse;
        
        
        
use UCloud\PathX\Apis\UGABindUPathRequest;
use UCloud\PathX\Apis\UGABindUPathResponse;
        
        
        
use UCloud\PathX\Apis\UGAUnBindUPathRequest;
use UCloud\PathX\Apis\UGAUnBindUPathResponse;
        
        
        
use UCloud\PathX\Apis\UnBindPathXSSLRequest;
use UCloud\PathX\Apis\UnBindPathXSSLResponse;
        
        
        
use UCloud\PathX\Apis\UpdatePathXWhitelistRequest;
use UCloud\PathX\Apis\UpdatePathXWhitelistResponse;

/**
 * This client is used to call actions of **PathX** service
 */
class PathXClient extends Client
{
        
        
        
        
    /**
     * BindPathXSSL - 绑定PathX SSL证书
     *
     * @throws UCloudException
     */
    public function bindPathXSSL(BindPathXSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BindPathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateGlobalSSHInstance - 创建GlobalSSH实例
     *
     * @throws UCloudException
     */
    public function createGlobalSSHInstance(CreateGlobalSSHInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateGlobalSSHInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreatePathXSSL - 创建SSL证书，可以把整个 Pem 证书内容传到SSLContent，或者把证书、私钥、CA证书分别传过来
     *
     * @throws UCloudException
     */
    public function createPathXSSL(CreatePathXSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreatePathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUGA3Instance - 创建全球统一接入加速配置项
     *
     * @throws UCloudException
     */
    public function createUGA3Instance(CreateUGA3InstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUGA3InstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUGA3Port - 创建统一接入加速实例端口，目前仅支持四层TCP端口
     *
     * @throws UCloudException
     */
    public function createUGA3Port(CreateUGA3PortRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUGA3PortResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUGAForwarder - 创建加速实例转发器，支持HTTPS接入HTTPS回源、HTTPS接入HTTP回源、HTTP接入HTTP回源、TCP接入TCP回源、UDP接入UDP回源、 支持WSS接入WSS回源、WSS接入WS回源、WS接入WS回源
     *
     * @throws UCloudException
     */
    public function createUGAForwarder(CreateUGAForwarderRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUGAForwarderResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUGAInstance - 创建全球加速配置项
     *
     * @throws UCloudException
     */
    public function createUGAInstance(CreateUGAInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUGAInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUPath - 创建UPath
     *
     * @throws UCloudException
     */
    public function createUPath(CreateUPathRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUPathResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteGlobalSSHInstance - 删除GlobalSSH实例
     *
     * @throws UCloudException
     */
    public function deleteGlobalSSHInstance(DeleteGlobalSSHInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteGlobalSSHInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeletePathXSSL - 删除PathX SSL证书
     *
     * @throws UCloudException
     */
    public function deletePathXSSL(DeletePathXSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeletePathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUGA3Instance - 删除全球统一接入转发实例
     *
     * @throws UCloudException
     */
    public function deleteUGA3Instance(DeleteUGA3InstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUGA3InstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUGA3Port - 删除统一接入加速实例转发器 按接入端口删除
     *
     * @throws UCloudException
     */
    public function deleteUGA3Port(DeleteUGA3PortRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUGA3PortResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUGAForwarder - 删除加速实例转发器 按接入端口删除
     *
     * @throws UCloudException
     */
    public function deleteUGAForwarder(DeleteUGAForwarderRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUGAForwarderResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUGAInstance - 删除全球加速服务加速配置
     *
     * @throws UCloudException
     */
    public function deleteUGAInstance(DeleteUGAInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUGAInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUPath - 删除UPath
     *
     * @throws UCloudException
     */
    public function deleteUPath(DeleteUPathRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUPathResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeGlobalSSHInstance - 获取GlobalSSH实例列表（传实例ID获取单个实例信息，不传获取项目下全部实例）
     *
     * @throws UCloudException
     */
    public function describeGlobalSSHInstance(DescribeGlobalSSHInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeGlobalSSHInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribePathXLineConfig - 获取全球加速线路信息
     *
     * @throws UCloudException
     */
    public function describePathXLineConfig(DescribePathXLineConfigRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribePathXLineConfigResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribePathXSSL - 获取SSL证书信息,支持分页，支持按证书名称 证书域名模糊搜索
     *
     * @throws UCloudException
     */
    public function describePathXSSL(DescribePathXSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribePathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUGA3Area - 获取全球接入源站可选列表
     *
     * @throws UCloudException
     */
    public function describeUGA3Area(DescribeUGA3AreaRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUGA3AreaResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUGA3Instance - 获取全球统一接入加速服务加速配置信息，指定实例ID返回单个实例。未指定实例ID时 指定分页参数 则按创建时间降序 返回记录
     *
     * @throws UCloudException
     */
    public function describeUGA3Instance(DescribeUGA3InstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUGA3InstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUGA3Optimization - 获取全球接入UGA3线路加速化情况
     *
     * @throws UCloudException
     */
    public function describeUGA3Optimization(DescribeUGA3OptimizationRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUGA3OptimizationResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUGAInstance - 获取全球加速服务加速配置信息，指定实例ID返回单个实例。未指定实例ID时 指定分页参数 则按创建时间降序 返回记录
     *
     * @throws UCloudException
     */
    public function describeUGAInstance(DescribeUGAInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUGAInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUPath - 获取加速线路信息
     *
     * @throws UCloudException
     */
    public function describeUPath(DescribeUPathRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUPathResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUPathTemplate - 查询UPath的监控模板
     *
     * @throws UCloudException
     */
    public function describeUPathTemplate(DescribeUPathTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUPathTemplateResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetGlobalSSHPrice - 获取GlobalSSH价格
     *
     * @throws UCloudException
     */
    public function getGlobalSSHPrice(GetGlobalSSHPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetGlobalSSHPriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetGlobalSSHUpdatePrice - 获取GlobalSSH升级价格
     *
     * @throws UCloudException
     */
    public function getGlobalSSHUpdatePrice(GetGlobalSSHUpdatePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetGlobalSSHUpdatePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetPathXMetric - 获取全球加速监控信息
     *
     * @throws UCloudException
     */
    public function getPathXMetric(GetPathXMetricRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetPathXMetricResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUGA3Metric - 获取全地域加速监控信息
     *
     * @throws UCloudException
     */
    public function getUGA3Metric(GetUGA3MetricRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUGA3MetricResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUGA3Price - 获取全球统一接入转发实例价格
     *
     * @throws UCloudException
     */
    public function getUGA3Price(GetUGA3PriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUGA3PriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUGA3UpdatePrice - 全球统一接入获取实例更新价格（增加、删退）
     *
     * @throws UCloudException
     */
    public function getUGA3UpdatePrice(GetUGA3UpdatePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUGA3UpdatePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyGlobalSSHPort - 修改GlobalSSH端口
     *
     * @throws UCloudException
     */
    public function modifyGlobalSSHPort(ModifyGlobalSSHPortRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyGlobalSSHPortResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyGlobalSSHRemark - 修改GlobalSSH备注
     *
     * @throws UCloudException
     */
    public function modifyGlobalSSHRemark(ModifyGlobalSSHRemarkRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyGlobalSSHRemarkResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyGlobalSSHType - 修改GlobalSSH实例类型，仅支持低版本升级到高版本，不支持高版本降级到低版本
     *
     * @throws UCloudException
     */
    public function modifyGlobalSSHType(ModifyGlobalSSHTypeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyGlobalSSHTypeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUGA3Bandwidth - 修改统一接入加速配置带宽
     *
     * @throws UCloudException
     */
    public function modifyUGA3Bandwidth(ModifyUGA3BandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUGA3BandwidthResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUGA3Instance - 修改统一接入加速配置属性，如Name，ReMark
     *
     * @throws UCloudException
     */
    public function modifyUGA3Instance(ModifyUGA3InstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUGA3InstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUGA3OriginInfo - Domain， IPList注意：修改Domain或IPList时， 请确保源站服务端口已经开启且外网防火墙允许pathx出口ip访问。
     *
     * @throws UCloudException
     */
    public function modifyUGA3OriginInfo(ModifyUGA3OriginInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUGA3OriginInfoResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUGA3Port - 修改统一接入加速实例端口,目前仅支持四层TCP端口
     *
     * @throws UCloudException
     */
    public function modifyUGA3Port(ModifyUGA3PortRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUGA3PortResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUPathBandwidth - 修改加速线路带宽
     *
     * @throws UCloudException
     */
    public function modifyUPathBandwidth(ModifyUPathBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUPathBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUPathTemplate - 修改UPath监控告警项
     *
     * @throws UCloudException
     */
    public function modifyUPathTemplate(ModifyUPathTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUPathTemplateResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UGABindUPath - UGA绑定UPath
     *
     * @throws UCloudException
     */
    public function ugaBindUPath(UGABindUPathRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UGABindUPathResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UGAUnBindUPath - UGA与UPath解绑
     *
     * @throws UCloudException
     */
    public function ugaUnBindUPath(UGAUnBindUPathRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UGAUnBindUPathResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UnBindPathXSSL - 解绑PathX SSL 证书
     *
     * @throws UCloudException
     */
    public function unBindPathXSSL(UnBindPathXSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UnBindPathXSSLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdatePathXWhitelist - 更新入口白名单,仅限GlobalSSH 实例使用。其他uga-实例不生效
     *
     * @throws UCloudException
     */
    public function updatePathXWhitelist(UpdatePathXWhitelistRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdatePathXWhitelistResponse($resp->toArray(), $resp->getRequestId());
    }
}
