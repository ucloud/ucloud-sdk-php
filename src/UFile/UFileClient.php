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
namespace UCloud\UFile;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\UFile\Apis\CreateBucketRequest;
use UCloud\UFile\Apis\CreateBucketResponse;
        
        
        
use UCloud\UFile\Apis\CreateUFileLifeCycleRequest;
use UCloud\UFile\Apis\CreateUFileLifeCycleResponse;
        
        
        
use UCloud\UFile\Apis\CreateUFileTokenRequest;
use UCloud\UFile\Apis\CreateUFileTokenResponse;
        
        
        
use UCloud\UFile\Apis\DeleteBucketRequest;
use UCloud\UFile\Apis\DeleteBucketResponse;
        
        
        
use UCloud\UFile\Apis\DeleteUFileLifeCycleRequest;
use UCloud\UFile\Apis\DeleteUFileLifeCycleResponse;
        
        
        
use UCloud\UFile\Apis\DeleteUFileTokenRequest;
use UCloud\UFile\Apis\DeleteUFileTokenResponse;
        
        
        
use UCloud\UFile\Apis\DescribeBucketRequest;
use UCloud\UFile\Apis\DescribeBucketResponse;
        
        
        
use UCloud\UFile\Apis\DescribeUFileLifeCycleRequest;
use UCloud\UFile\Apis\DescribeUFileLifeCycleResponse;
        
        
        
use UCloud\UFile\Apis\DescribeUFileTokenRequest;
use UCloud\UFile\Apis\DescribeUFileTokenResponse;
        
        
        
use UCloud\UFile\Apis\GetUFileDailyReportRequest;
use UCloud\UFile\Apis\GetUFileDailyReportResponse;
        
        
        
use UCloud\UFile\Apis\GetUFileQuotaRequest;
use UCloud\UFile\Apis\GetUFileQuotaResponse;
        
        
        
use UCloud\UFile\Apis\GetUFileQuotaInfoRequest;
use UCloud\UFile\Apis\GetUFileQuotaInfoResponse;
        
        
        
use UCloud\UFile\Apis\GetUFileQuotaPriceRequest;
use UCloud\UFile\Apis\GetUFileQuotaPriceResponse;
        
        
        
use UCloud\UFile\Apis\GetUFileReportRequest;
use UCloud\UFile\Apis\GetUFileReportResponse;
        
        
        
use UCloud\UFile\Apis\SetUFileRefererRequest;
use UCloud\UFile\Apis\SetUFileRefererResponse;
        
        
        
use UCloud\UFile\Apis\UpdateBucketRequest;
use UCloud\UFile\Apis\UpdateBucketResponse;
        
        
        
use UCloud\UFile\Apis\UpdateUFileLifeCycleRequest;
use UCloud\UFile\Apis\UpdateUFileLifeCycleResponse;
        
        
        
use UCloud\UFile\Apis\UpdateUFileTokenRequest;
use UCloud\UFile\Apis\UpdateUFileTokenResponse;

/**
 * This client is used to call actions of **UFile** service
 */
class UFileClient extends Client
{
        
        
        
        
    /**
     * CreateBucket - 创建Bucket
     *
     * @throws UCloudException
     */
    public function createBucket(CreateBucketRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateBucketResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUFileLifeCycle - 创建生命周期管理
     *
     * @throws UCloudException
     */
    public function createUFileLifeCycle(CreateUFileLifeCycleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUFileLifeCycleResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUFileToken - 创建US3令牌
     *
     * @throws UCloudException
     */
    public function createUFileToken(CreateUFileTokenRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUFileTokenResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteBucket - 删除Bucket
     *
     * @throws UCloudException
     */
    public function deleteBucket(DeleteBucketRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteBucketResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUFileLifeCycle - 删除生命周期管理
     *
     * @throws UCloudException
     */
    public function deleteUFileLifeCycle(DeleteUFileLifeCycleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUFileLifeCycleResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUFileToken - 删除令牌
     *
     * @throws UCloudException
     */
    public function deleteUFileToken(DeleteUFileTokenRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUFileTokenResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeBucket - 获取Bucket的描述信息
     *
     * @throws UCloudException
     */
    public function describeBucket(DescribeBucketRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeBucketResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUFileLifeCycle - 获取生命周期信息
     *
     * @throws UCloudException
     */
    public function describeUFileLifeCycle(DescribeUFileLifeCycleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUFileLifeCycleResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUFileToken - 获取令牌信息
     *
     * @throws UCloudException
     */
    public function describeUFileToken(DescribeUFileTokenRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUFileTokenResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUFileDailyReport - 查看日消费报表
     *
     * @throws UCloudException
     */
    public function getUFileDailyReport(GetUFileDailyReportRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUFileDailyReportResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUFileQuota - 查看配额状态
     *
     * @throws UCloudException
     */
    public function getUFileQuota(GetUFileQuotaRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUFileQuotaResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUFileQuotaInfo - 获取配额信息
     *
     * @throws UCloudException
     */
    public function getUFileQuotaInfo(GetUFileQuotaInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUFileQuotaInfoResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUFileQuotaPrice - 根据US3的购买配额，查询需要支付的价格。
     *
     * @throws UCloudException
     */
    public function getUFileQuotaPrice(GetUFileQuotaPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUFileQuotaPriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUFileReport - 查看配额使用报表
     *
     * @throws UCloudException
     */
    public function getUFileReport(GetUFileReportRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUFileReportResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * SetUFileReferer - 设置对象存储防盗链
     *
     * @throws UCloudException
     */
    public function setUFileReferer(SetUFileRefererRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SetUFileRefererResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateBucket - 更改Bucket的属性
     *
     * @throws UCloudException
     */
    public function updateBucket(UpdateBucketRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateBucketResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateUFileLifeCycle - 更新生命周期管理
     *
     * @throws UCloudException
     */
    public function updateUFileLifeCycle(UpdateUFileLifeCycleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUFileLifeCycleResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateUFileToken - 更新令牌的操作权限，可操作key的前缀，可操作bucket和令牌超时时间点
     *
     * @throws UCloudException
     */
    public function updateUFileToken(UpdateUFileTokenRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUFileTokenResponse($resp->toArray(), $resp->getRequestId());
    }
}
