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
namespace UCloud\ULB;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\ULB\Apis\AllocateBackendRequest;
use UCloud\ULB\Apis\AllocateBackendResponse;
        
        
        
use UCloud\ULB\Apis\BindSSLRequest;
use UCloud\ULB\Apis\BindSSLResponse;
        
        
        
use UCloud\ULB\Apis\CreatePolicyRequest;
use UCloud\ULB\Apis\CreatePolicyResponse;
        
        
        
use UCloud\ULB\Apis\CreateSSLRequest;
use UCloud\ULB\Apis\CreateSSLResponse;
        
        
        
use UCloud\ULB\Apis\CreateULBRequest;
use UCloud\ULB\Apis\CreateULBResponse;
        
        
        
use UCloud\ULB\Apis\CreateVServerRequest;
use UCloud\ULB\Apis\CreateVServerResponse;
        
        
        
use UCloud\ULB\Apis\DeletePolicyRequest;
use UCloud\ULB\Apis\DeletePolicyResponse;
        
        
        
use UCloud\ULB\Apis\DeleteSSLRequest;
use UCloud\ULB\Apis\DeleteSSLResponse;
        
        
        
use UCloud\ULB\Apis\DeleteULBRequest;
use UCloud\ULB\Apis\DeleteULBResponse;
        
        
        
use UCloud\ULB\Apis\DeleteVServerRequest;
use UCloud\ULB\Apis\DeleteVServerResponse;
        
        
        
use UCloud\ULB\Apis\DescribeSSLRequest;
use UCloud\ULB\Apis\DescribeSSLResponse;
        
        
        
use UCloud\ULB\Apis\DescribeULBRequest;
use UCloud\ULB\Apis\DescribeULBResponse;
        
        
        
use UCloud\ULB\Apis\DescribeULBSimpleRequest;
use UCloud\ULB\Apis\DescribeULBSimpleResponse;
        
        
        
use UCloud\ULB\Apis\DescribeVServerRequest;
use UCloud\ULB\Apis\DescribeVServerResponse;
        
        
        
use UCloud\ULB\Apis\ReleaseBackendRequest;
use UCloud\ULB\Apis\ReleaseBackendResponse;
        
        
        
use UCloud\ULB\Apis\UnbindSSLRequest;
use UCloud\ULB\Apis\UnbindSSLResponse;
        
        
        
use UCloud\ULB\Apis\UpdateBackendAttributeRequest;
use UCloud\ULB\Apis\UpdateBackendAttributeResponse;
        
        
        
use UCloud\ULB\Apis\UpdatePolicyRequest;
use UCloud\ULB\Apis\UpdatePolicyResponse;
        
        
        
use UCloud\ULB\Apis\UpdateSSLAttributeRequest;
use UCloud\ULB\Apis\UpdateSSLAttributeResponse;
        
        
        
use UCloud\ULB\Apis\UpdateULBAttributeRequest;
use UCloud\ULB\Apis\UpdateULBAttributeResponse;
        
        
        
use UCloud\ULB\Apis\UpdateVServerAttributeRequest;
use UCloud\ULB\Apis\UpdateVServerAttributeResponse;

/**
 * This client is used to call actions of **ULB** service
 */
class ULBClient extends Client
{
        
        
        
        
    /**
     * AllocateBackend - 添加ULB后端资源实例
     *
     * @throws UCloudException
     */
    public function allocateBackend(AllocateBackendRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AllocateBackendResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * BindSSL - 将SSL证书绑定到VServer
     *
     * @throws UCloudException
     */
    public function bindSSL(BindSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BindSSLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreatePolicy - 创建VServer内容转发策略
     *
     * @throws UCloudException
     */
    public function createPolicy(CreatePolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreatePolicyResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateSSL - 创建SSL证书，可以把整个 Pem 证书内容传过来，或者把证书、私钥、CA证书分别传过来
     *
     * @throws UCloudException
     */
    public function createSSL(CreateSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateSSLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateULB - 创建负载均衡实例，可以选择内网或者外网
     *
     * @throws UCloudException
     */
    public function createULB(CreateULBRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateULBResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateVServer - 创建VServer实例，定义监听的协议和端口以及负载均衡算法
     *
     * @throws UCloudException
     */
    public function createVServer(CreateVServerRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateVServerResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeletePolicy - 删除内容转发策略
     *
     * @throws UCloudException
     */
    public function deletePolicy(DeletePolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeletePolicyResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteSSL - 删除SSL证书
     *
     * @throws UCloudException
     */
    public function deleteSSL(DeleteSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteSSLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteULB - 删除负载均衡实例
     *
     * @throws UCloudException
     */
    public function deleteULB(DeleteULBRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteULBResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteVServer - 删除VServer实例
     *
     * @throws UCloudException
     */
    public function deleteVServer(DeleteVServerRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteVServerResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeSSL - 获取SSL证书信息
     *
     * @throws UCloudException
     */
    public function describeSSL(DescribeSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSSLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeULB - 获取ULB详细信息
     *
     * @throws UCloudException
     */
    public function describeULB(DescribeULBRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeULBResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeULBSimple - 获取ULB信息
     *
     * @throws UCloudException
     */
    public function describeULBSimple(DescribeULBSimpleRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeULBSimpleResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeVServer - 获取ULB下的VServer的详细信息
     *
     * @throws UCloudException
     */
    public function describeVServer(DescribeVServerRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeVServerResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ReleaseBackend - 从VServer释放后端资源实例
     *
     * @throws UCloudException
     */
    public function releaseBackend(ReleaseBackendRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ReleaseBackendResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UnbindSSL - 从VServer解绑SSL证书
     *
     * @throws UCloudException
     */
    public function unbindSSL(UnbindSSLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UnbindSSLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateBackendAttribute - 更新ULB后端资源实例(服务节点)属性
     *
     * @throws UCloudException
     */
    public function updateBackendAttribute(UpdateBackendAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateBackendAttributeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdatePolicy - 更新内容转发规则，包括转发规则后的服务节点
     *
     * @throws UCloudException
     */
    public function updatePolicy(UpdatePolicyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdatePolicyResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateSSLAttribute - 更新修改SSL的属性，如：修改SSLName
     *
     * @throws UCloudException
     */
    public function updateSSLAttribute(UpdateSSLAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateSSLAttributeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateULBAttribute - 更新ULB名字业务组备注等属性字段
     *
     * @throws UCloudException
     */
    public function updateULBAttribute(UpdateULBAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateULBAttributeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateVServerAttribute - 更新VServer实例属性
     *
     * @throws UCloudException
     */
    public function updateVServerAttribute(UpdateVServerAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateVServerAttributeResponse($resp->toArray(), $resp->getRequestId());
    }
}
