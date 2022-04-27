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
namespace UCloud\UCDN;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\UCDN\Apis\AddCertificateRequest;
use UCloud\UCDN\Apis\AddCertificateResponse;
        
        
        
use UCloud\UCDN\Apis\ControlUcdnDomainCacheAccessRequest;
use UCloud\UCDN\Apis\ControlUcdnDomainCacheAccessResponse;
        
        
        
use UCloud\UCDN\Apis\DeleteCertificateRequest;
use UCloud\UCDN\Apis\DeleteCertificateResponse;
        
        
        
use UCloud\UCDN\Apis\DescribeNewUcdnPrefetchCacheTaskRequest;
use UCloud\UCDN\Apis\DescribeNewUcdnPrefetchCacheTaskResponse;
        
        
        
use UCloud\UCDN\Apis\DescribeNewUcdnRefreshCacheTaskRequest;
use UCloud\UCDN\Apis\DescribeNewUcdnRefreshCacheTaskResponse;
        
        
        
use UCloud\UCDN\Apis\GetCertificateV2Request;
use UCloud\UCDN\Apis\GetCertificateV2Response;
        
        
        
use UCloud\UCDN\Apis\GetNewUcdnDomainHitRateRequest;
use UCloud\UCDN\Apis\GetNewUcdnDomainHitRateResponse;
        
        
        
use UCloud\UCDN\Apis\GetNewUcdnLogRefererStatisticsRequest;
use UCloud\UCDN\Apis\GetNewUcdnLogRefererStatisticsResponse;
        
        
        
use UCloud\UCDN\Apis\GetNewUcdnLogUrlStatisticsRequest;
use UCloud\UCDN\Apis\GetNewUcdnLogUrlStatisticsResponse;
        
        
        
use UCloud\UCDN\Apis\GetUcdnDomain95BandwidthV2Request;
use UCloud\UCDN\Apis\GetUcdnDomain95BandwidthV2Response;
        
        
        
use UCloud\UCDN\Apis\GetUcdnDomainBandwidthV2Request;
use UCloud\UCDN\Apis\GetUcdnDomainBandwidthV2Response;
        
        
        
use UCloud\UCDN\Apis\GetUcdnDomainConfigRequest;
use UCloud\UCDN\Apis\GetUcdnDomainConfigResponse;
        
        
        
use UCloud\UCDN\Apis\GetUcdnDomainHitRateRequest;
use UCloud\UCDN\Apis\GetUcdnDomainHitRateResponse;
        
        
        
use UCloud\UCDN\Apis\GetUcdnDomainHttpCodeV2Request;
use UCloud\UCDN\Apis\GetUcdnDomainHttpCodeV2Response;
        
        
        
use UCloud\UCDN\Apis\GetUcdnDomainInfoListRequest;
use UCloud\UCDN\Apis\GetUcdnDomainInfoListResponse;
        
        
        
use UCloud\UCDN\Apis\GetUcdnDomainLogRequest;
use UCloud\UCDN\Apis\GetUcdnDomainLogResponse;
        
        
        
use UCloud\UCDN\Apis\GetUcdnDomainLogV2Request;
use UCloud\UCDN\Apis\GetUcdnDomainLogV2Response;
        
        
        
use UCloud\UCDN\Apis\GetUcdnDomainOriginHttpCodeRequest;
use UCloud\UCDN\Apis\GetUcdnDomainOriginHttpCodeResponse;
        
        
        
use UCloud\UCDN\Apis\GetUcdnDomainOriginHttpCodeDetailRequest;
use UCloud\UCDN\Apis\GetUcdnDomainOriginHttpCodeDetailResponse;
        
        
        
use UCloud\UCDN\Apis\GetUcdnDomainOriginRequestNumRequest;
use UCloud\UCDN\Apis\GetUcdnDomainOriginRequestNumResponse;
        
        
        
use UCloud\UCDN\Apis\GetUcdnDomainPrefetchEnableRequest;
use UCloud\UCDN\Apis\GetUcdnDomainPrefetchEnableResponse;
        
        
        
use UCloud\UCDN\Apis\GetUcdnDomainRequestNumV3Request;
use UCloud\UCDN\Apis\GetUcdnDomainRequestNumV3Response;
        
        
        
use UCloud\UCDN\Apis\GetUcdnPassBandwidthV2Request;
use UCloud\UCDN\Apis\GetUcdnPassBandwidthV2Response;
        
        
        
use UCloud\UCDN\Apis\GetUcdnProIspBandwidthV2Request;
use UCloud\UCDN\Apis\GetUcdnProIspBandwidthV2Response;
        
        
        
use UCloud\UCDN\Apis\GetUcdnProIspRequestNumV2Request;
use UCloud\UCDN\Apis\GetUcdnProIspRequestNumV2Response;
        
        
        
use UCloud\UCDN\Apis\GetUcdnTrafficV2Request;
use UCloud\UCDN\Apis\GetUcdnTrafficV2Response;
        
        
        
use UCloud\UCDN\Apis\PrefetchNewUcdnDomainCacheRequest;
use UCloud\UCDN\Apis\PrefetchNewUcdnDomainCacheResponse;
        
        
        
use UCloud\UCDN\Apis\QueryIpLocationRequest;
use UCloud\UCDN\Apis\QueryIpLocationResponse;
        
        
        
use UCloud\UCDN\Apis\RefreshNewUcdnDomainCacheRequest;
use UCloud\UCDN\Apis\RefreshNewUcdnDomainCacheResponse;
        
        
        
use UCloud\UCDN\Apis\SwitchUcdnChargeTypeRequest;
use UCloud\UCDN\Apis\SwitchUcdnChargeTypeResponse;

/**
 * This client is used to call actions of **UCDN** service
 */
class UCDNClient extends Client
{
        
        
        
        
    /**
     * AddCertificate - 添加证书
     *
     * @throws UCloudException
     */
    public function addCertificate(AddCertificateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AddCertificateResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ControlUcdnDomainCacheAccess - 封禁解封缓存访问
     *
     * @throws UCloudException
     */
    public function controlUcdnDomainCacheAccess(ControlUcdnDomainCacheAccessRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ControlUcdnDomainCacheAccessResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteCertificate - 删除证书
     *
     * @throws UCloudException
     */
    public function deleteCertificate(DeleteCertificateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteCertificateResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeNewUcdnPrefetchCacheTask - 获取预取任务状态
     *
     * @throws UCloudException
     */
    public function describeNewUcdnPrefetchCacheTask(DescribeNewUcdnPrefetchCacheTaskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeNewUcdnPrefetchCacheTaskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeNewUcdnRefreshCacheTask - 获取域名刷新任务状态
     *
     * @throws UCloudException
     */
    public function describeNewUcdnRefreshCacheTask(DescribeNewUcdnRefreshCacheTaskRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeNewUcdnRefreshCacheTaskResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetCertificateV2 - 获取证书列表(新)
     *
     * @throws UCloudException
     */
    public function getCertificateV2(GetCertificateV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new GetCertificateV2Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetNewUcdnDomainHitRate - 获取域名命中率
     *
     * @throws UCloudException
     */
    public function getNewUcdnDomainHitRate(GetNewUcdnDomainHitRateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetNewUcdnDomainHitRateResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetNewUcdnLogRefererStatistics - 获取热点referer统计
     *
     * @throws UCloudException
     */
    public function getNewUcdnLogRefererStatistics(GetNewUcdnLogRefererStatisticsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetNewUcdnLogRefererStatisticsResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetNewUcdnLogUrlStatistics - 获取日志url统计
     *
     * @throws UCloudException
     */
    public function getNewUcdnLogUrlStatistics(GetNewUcdnLogUrlStatisticsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetNewUcdnLogUrlStatisticsResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnDomain95BandwidthV2 - 获取域名九五峰值带宽数据
     *
     * @throws UCloudException
     */
    public function getUcdnDomain95BandwidthV2(GetUcdnDomain95BandwidthV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomain95BandwidthV2Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnDomainBandwidthV2 - 获取域名带宽数据(新)
     *
     * @throws UCloudException
     */
    public function getUcdnDomainBandwidthV2(GetUcdnDomainBandwidthV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainBandwidthV2Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnDomainConfig - 批量获取加速域名配置
     *
     * @throws UCloudException
     */
    public function getUcdnDomainConfig(GetUcdnDomainConfigRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainConfigResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnDomainHitRate - 获取域名命中率
     *
     * @throws UCloudException
     */
    public function getUcdnDomainHitRate(GetUcdnDomainHitRateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainHitRateResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnDomainHttpCodeV2 - 获取域名状态码信息
     *
     * @throws UCloudException
     */
    public function getUcdnDomainHttpCodeV2(GetUcdnDomainHttpCodeV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainHttpCodeV2Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnDomainInfoList - 获取域名基本信息
     *
     * @throws UCloudException
     */
    public function getUcdnDomainInfoList(GetUcdnDomainInfoListRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainInfoListResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnDomainLog - 获取加速域名原始日志
     *
     * @throws UCloudException
     */
    public function getUcdnDomainLog(GetUcdnDomainLogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainLogResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnDomainLogV2 - 获取域名5分钟日志
     *
     * @throws UCloudException
     */
    public function getUcdnDomainLogV2(GetUcdnDomainLogV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainLogV2Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnDomainOriginHttpCode - 获取域名源站状态码监控
     *
     * @throws UCloudException
     */
    public function getUcdnDomainOriginHttpCode(GetUcdnDomainOriginHttpCodeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainOriginHttpCodeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnDomainOriginHttpCodeDetail - 获取域名源站详细状态码监控
     *
     * @throws UCloudException
     */
    public function getUcdnDomainOriginHttpCodeDetail(GetUcdnDomainOriginHttpCodeDetailRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainOriginHttpCodeDetailResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnDomainOriginRequestNum - 获取域名回源请求数
     *
     * @throws UCloudException
     */
    public function getUcdnDomainOriginRequestNum(GetUcdnDomainOriginRequestNumRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainOriginRequestNumResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnDomainPrefetchEnable - 获取域名预取开启状态
     *
     * @throws UCloudException
     */
    public function getUcdnDomainPrefetchEnable(GetUcdnDomainPrefetchEnableRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainPrefetchEnableResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnDomainRequestNumV3 - 获取域名请求数
     *
     * @throws UCloudException
     */
    public function getUcdnDomainRequestNumV3(GetUcdnDomainRequestNumV3Request $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnDomainRequestNumV3Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnPassBandwidthV2 - 获取回源带宽数据（cdn回客户源站部分）
     *
     * @throws UCloudException
     */
    public function getUcdnPassBandwidthV2(GetUcdnPassBandwidthV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnPassBandwidthV2Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnProIspBandwidthV2 - 按省份运营商获取域名带宽数据
     *
     * @throws UCloudException
     */
    public function getUcdnProIspBandwidthV2(GetUcdnProIspBandwidthV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnProIspBandwidthV2Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnProIspRequestNumV2 - 按省份运营商获取域名请求数
     *
     * @throws UCloudException
     */
    public function getUcdnProIspRequestNumV2(GetUcdnProIspRequestNumV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnProIspRequestNumV2Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUcdnTrafficV2 - 获取流量信息
     *
     * @throws UCloudException
     */
    public function getUcdnTrafficV2(GetUcdnTrafficV2Request $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUcdnTrafficV2Response($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * PrefetchNewUcdnDomainCache - 提交预取任务
     *
     * @throws UCloudException
     */
    public function prefetchNewUcdnDomainCache(PrefetchNewUcdnDomainCacheRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new PrefetchNewUcdnDomainCacheResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * QueryIpLocation - 查询IP信息
     *
     * @throws UCloudException
     */
    public function queryIpLocation(QueryIpLocationRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new QueryIpLocationResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RefreshNewUcdnDomainCache - 刷新缓存
     *
     * @throws UCloudException
     */
    public function refreshNewUcdnDomainCache(RefreshNewUcdnDomainCacheRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RefreshNewUcdnDomainCacheResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * SwitchUcdnChargeType - 切换账号计费方式
     *
     * @throws UCloudException
     */
    public function switchUcdnChargeType(SwitchUcdnChargeTypeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SwitchUcdnChargeTypeResponse($resp->toArray(), $resp->getRequestId());
    }
}
