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
namespace UCloud\Cube;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\Cube\Apis\CreateCubeDeploymentRequest;
use UCloud\Cube\Apis\CreateCubeDeploymentResponse;
        
        
        
use UCloud\Cube\Apis\CreateCubePodRequest;
use UCloud\Cube\Apis\CreateCubePodResponse;
        
        
        
use UCloud\Cube\Apis\DeleteCubeDeploymentRequest;
use UCloud\Cube\Apis\DeleteCubeDeploymentResponse;
        
        
        
use UCloud\Cube\Apis\DeleteCubePodRequest;
use UCloud\Cube\Apis\DeleteCubePodResponse;
        
        
        
use UCloud\Cube\Apis\GetCubeDeploymentRequest;
use UCloud\Cube\Apis\GetCubeDeploymentResponse;
        
        
        
use UCloud\Cube\Apis\GetCubeExecTokenRequest;
use UCloud\Cube\Apis\GetCubeExecTokenResponse;
        
        
        
use UCloud\Cube\Apis\GetCubeExtendInfoRequest;
use UCloud\Cube\Apis\GetCubeExtendInfoResponse;
        
        
        
use UCloud\Cube\Apis\GetCubeMetricsRequest;
use UCloud\Cube\Apis\GetCubeMetricsResponse;
        
        
        
use UCloud\Cube\Apis\GetCubePodRequest;
use UCloud\Cube\Apis\GetCubePodResponse;
        
        
        
use UCloud\Cube\Apis\GetCubePriceRequest;
use UCloud\Cube\Apis\GetCubePriceResponse;
        
        
        
use UCloud\Cube\Apis\GetCubeTokenRequest;
use UCloud\Cube\Apis\GetCubeTokenResponse;
        
        
        
use UCloud\Cube\Apis\ListCubeDeploymentRequest;
use UCloud\Cube\Apis\ListCubeDeploymentResponse;
        
        
        
use UCloud\Cube\Apis\ListCubePodRequest;
use UCloud\Cube\Apis\ListCubePodResponse;
        
        
        
use UCloud\Cube\Apis\ModifyCubeExtendInfoRequest;
use UCloud\Cube\Apis\ModifyCubeExtendInfoResponse;
        
        
        
use UCloud\Cube\Apis\ModifyCubeTagRequest;
use UCloud\Cube\Apis\ModifyCubeTagResponse;
        
        
        
use UCloud\Cube\Apis\RebootCubePodRequest;
use UCloud\Cube\Apis\RebootCubePodResponse;
        
        
        
use UCloud\Cube\Apis\RenewCubePodRequest;
use UCloud\Cube\Apis\RenewCubePodResponse;
        
        
        
use UCloud\Cube\Apis\UpdateCubeDeploymentRequest;
use UCloud\Cube\Apis\UpdateCubeDeploymentResponse;

/**
 * This client is used to call actions of **Cube** service
 */
class CubeClient extends Client
{
        
        
        
        
    /**
     * CreateCubeDeployment - 创建Cube的Deployment
     *
     * @throws UCloudException
     */
    public function createCubeDeployment(CreateCubeDeploymentRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateCubeDeploymentResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateCubePod - 创建Pod
     *
     * @throws UCloudException
     */
    public function createCubePod(CreateCubePodRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateCubePodResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteCubeDeployment - 删除Cube的Deployment
     *
     * @throws UCloudException
     */
    public function deleteCubeDeployment(DeleteCubeDeploymentRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteCubeDeploymentResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteCubePod - 删除Pod
     *
     * @throws UCloudException
     */
    public function deleteCubePod(DeleteCubePodRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteCubePodResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetCubeDeployment - 获取Deployment的详细信息
     *
     * @throws UCloudException
     */
    public function getCubeDeployment(GetCubeDeploymentRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetCubeDeploymentResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetCubeExecToken - 获取登录容器的token
     *
     * @throws UCloudException
     */
    public function getCubeExecToken(GetCubeExecTokenRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetCubeExecTokenResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetCubeExtendInfo - 获取Cube的额外信息
     *
     * @throws UCloudException
     */
    public function getCubeExtendInfo(GetCubeExtendInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetCubeExtendInfoResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetCubeMetrics - 获取Cube实例（Pod，PodX，Deploy等）监控数据时间序列
     *
     * @throws UCloudException
     */
    public function getCubeMetrics(GetCubeMetricsRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetCubeMetricsResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetCubePod - 获取Pod的详细信息
     *
     * @throws UCloudException
     */
    public function getCubePod(GetCubePodRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetCubePodResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetCubePrice - 获取cube的价格
     *
     * @throws UCloudException
     */
    public function getCubePrice(GetCubePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetCubePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetCubeToken - 获取Cube的token，可用于terminal登录、log获取
     *
     * @throws UCloudException
     */
    public function getCubeToken(GetCubeTokenRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetCubeTokenResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ListCubeDeployment - 获取Cube的Deployment列表
     *
     * @throws UCloudException
     */
    public function listCubeDeployment(ListCubeDeploymentRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListCubeDeploymentResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ListCubePod - 获取Pods列表
     *
     * @throws UCloudException
     */
    public function listCubePod(ListCubePodRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListCubePodResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyCubeExtendInfo - 修改Cube额外信息
     *
     * @throws UCloudException
     */
    public function modifyCubeExtendInfo(ModifyCubeExtendInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyCubeExtendInfoResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyCubeTag - 修改业务组名字
     *
     * @throws UCloudException
     */
    public function modifyCubeTag(ModifyCubeTagRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyCubeTagResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RebootCubePod - 重启Cube Pod
     *
     * @throws UCloudException
     */
    public function rebootCubePod(RebootCubePodRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RebootCubePodResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RenewCubePod - 更新Pod
     *
     * @throws UCloudException
     */
    public function renewCubePod(RenewCubePodRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RenewCubePodResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateCubeDeployment - 更新Deployment
     *
     * @throws UCloudException
     */
    public function updateCubeDeployment(UpdateCubeDeploymentRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateCubeDeploymentResponse($resp->toArray(), $resp->getRequestId());
    }
}
