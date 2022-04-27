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
namespace UCloud\UDDB;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\UDDB\Apis\ChangeUDDBInstanceNameRequest;
use UCloud\UDDB\Apis\ChangeUDDBInstanceNameResponse;
        
        
        
use UCloud\UDDB\Apis\ChangeUDDBSlaveCountRequest;
use UCloud\UDDB\Apis\ChangeUDDBSlaveCountResponse;
        
        
        
use UCloud\UDDB\Apis\CreateUDDBInstanceRequest;
use UCloud\UDDB\Apis\CreateUDDBInstanceResponse;
        
        
        
use UCloud\UDDB\Apis\DeleteUDDBInstanceRequest;
use UCloud\UDDB\Apis\DeleteUDDBInstanceResponse;
        
        
        
use UCloud\UDDB\Apis\DescribeUDDBInstanceRequest;
use UCloud\UDDB\Apis\DescribeUDDBInstanceResponse;
        
        
        
use UCloud\UDDB\Apis\DescribeUDDBInstancePriceRequest;
use UCloud\UDDB\Apis\DescribeUDDBInstancePriceResponse;
        
        
        
use UCloud\UDDB\Apis\DescribeUDDBInstanceUpgradePriceRequest;
use UCloud\UDDB\Apis\DescribeUDDBInstanceUpgradePriceResponse;
        
        
        
use UCloud\UDDB\Apis\RestartUDDBInstanceRequest;
use UCloud\UDDB\Apis\RestartUDDBInstanceResponse;
        
        
        
use UCloud\UDDB\Apis\StartUDDBInstanceRequest;
use UCloud\UDDB\Apis\StartUDDBInstanceResponse;
        
        
        
use UCloud\UDDB\Apis\StopUDDBInstanceRequest;
use UCloud\UDDB\Apis\StopUDDBInstanceResponse;
        
        
        
use UCloud\UDDB\Apis\UpgradeUDDBDataNodeRequest;
use UCloud\UDDB\Apis\UpgradeUDDBDataNodeResponse;
        
        
        
use UCloud\UDDB\Apis\UpgradeUDDBInstanceRequest;
use UCloud\UDDB\Apis\UpgradeUDDBInstanceResponse;

/**
 * This client is used to call actions of **UDDB** service
 */
class UDDBClient extends Client
{
        
        
        
        
    /**
     * ChangeUDDBInstanceName - 修改分布式数据库中间件名称
     *
     * @throws UCloudException
     */
    public function changeUDDBInstanceName(ChangeUDDBInstanceNameRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ChangeUDDBInstanceNameResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ChangeUDDBSlaveCount - 改变分布式数据库数据节点的只读实例个数每一个UDDB的数据节点负责处理所有的写入请求。与此同时，每一个数据节点可以配置若干个该节点的只读实例。当主节点的数据写入完毕后，只读实例把这次的写入操作进行更新，从而和数据节点保持一致。只读实例可以使得数据由多份复制，在数据节点和只读实例之间，可以做请求的读写分离, 也就是说, 主节点写入数据之后, 数据的读操作可以由数据只读实例进行分担, 这样减少主节点的压力, 增加性能当改变了数据节点的只读实例个数之后，对于现有的和以后的每一个数据节点都采用这个配置。如果UDDB实例有现有的数据节点, 那么它会根据新配置的参数，自动创建或删除数据节点的只读实例如下状态的UDDB实例可以进行这个操作:Running: 系统正常运行中当请求返回成功之后，UDDB实例的状态变成"ChangingSlaveCount"; 如果返回失败, UDDB实例状态保持不变 当UDDB更改数据分区的只读实例个数成功之后, UDDB实例的状态变成"Running"(正常运行中); 如果更改过程中出现异常, 状态变成"Abnormal"(异常运行中)或者"Error"(运行错误)
     *
     * @throws UCloudException
     */
    public function changeUDDBSlaveCount(ChangeUDDBSlaveCountRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ChangeUDDBSlaveCountResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUDDBInstance - 创建创建分布式数据库UDDB实例, 简称UDDB实例。
     *
     * @throws UCloudException
     */
    public function createUDDBInstance(CreateUDDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUDDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUDDBInstance - 删除UDDB实例。如下状态的UDDB实例可以进行这个操作:InitFail: 初始化失败Shutoff: 已关闭当请求返回成功之后，UDDB实例就已经被删除, 列表上看不到对应的UDDB实例
     *
     * @throws UCloudException
     */
    public function deleteUDDBInstance(DeleteUDDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUDDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDDBInstance - 获取分布式数据库UDDB的详细信息
     *
     * @throws UCloudException
     */
    public function describeUDDBInstance(DescribeUDDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDDBInstancePrice - 获取分布式数据库UDDB价格
     *
     * @throws UCloudException
     */
    public function describeUDDBInstancePrice(DescribeUDDBInstancePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDDBInstancePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDDBInstanceUpgradePrice - 升级UDDB时，获取升级后的价格
     *
     * @throws UCloudException
     */
    public function describeUDDBInstanceUpgradePrice(DescribeUDDBInstanceUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDDBInstanceUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RestartUDDBInstance - 重启UDDB实例，开始提供服务。如下状态的UDDB实例可以进行这个操作:Running: 正常运行中Abnormal: 异常运行中当请求返回成功之后，UDDB实例的状态变成"Starting"(启动中); 如果返回失败, UDDB实例状态保持不变 UDDB实例在重启过程中, 当UDDB实例启动成功之后, UDDB实例的状态变成"Running"(正常运行中); 如果启动过程中出现异常, 状态变成"Abnormal"(异常运行中), 或者"Shutoff"(已关闭
     *
     * @throws UCloudException
     */
    public function restartUDDBInstance(RestartUDDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestartUDDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * StartUDDBInstance - 启动UDDB实例，开始提供服务。如下状态的UDDB实例可以进行这个操作:Shutoff: 已关闭当请求返回成功之后，UDDB实例的状态变成"Starting"(启动中); 如果返回失败, UDDB实例状态保持不变 UDDB实例在启动过程中, 当UDDB实例启动成功之后, UDDB实例的状态变成"Running"(正常运行中); 如果启动过程中出现异常, 状态变成"Abnormal"(异常运行中), 或者"Shutoff"(已关闭)
     *
     * @throws UCloudException
     */
    public function startUDDBInstance(StartUDDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StartUDDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * StopUDDBInstance - 关闭UDDB实例，停止提供服务。如下状态的UDDB实例可以进行这个操作:Running: 正常运行中Abnormal: 异常运行中当请求返回成功之后，UDDB实例的状态变成"Shutdown"(关闭中); 如果返回失败, UDDB实例状态保持不变 UDDB实例在关闭过程中, 当UDDB实例关闭成功之后, UDDB实例的状态变成"Shutoff"(已关闭); 如果关闭过程中出现异常, 根据UDDB实例的情况, 状态变成"Abnormal"(异常运行中), 或者"Running"(正常运行中)
     *
     * @throws UCloudException
     */
    public function stopUDDBInstance(StopUDDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StopUDDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpgradeUDDBDataNode - 升降级分布式数据库数据节点的配置, 提高/降低数据节点的数据容量和内存所有数据节点以及其所挂载的只读实例的配置都受到影响升降级数据节点的配置之后之后, 会按照数据节点新的磁盘和内存大小重新计费如下状态的数据节点实例可以进行这个操作:Shutoff: 已关闭当请求返回成功之后，UDDB实例的状态变成"UpgradingDataNode"，相关数据节点的状态变成"Upgrading"; 如果返回失败, UDDB实例状态保持不变 当UDDB实例升级结束之后, UDDB实例的状态变成"Shutoff"
     *
     * @throws UCloudException
     */
    public function upgradeUDDBDataNode(UpgradeUDDBDataNodeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpgradeUDDBDataNodeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpgradeUDDBInstance - 升降级分布式数据库中间件的配置, 提高/降低请求处理的并发性修改请求处理节点个数之后, 按照所有请求处理节点的总内存容量和CPU核数重新计费如下状态的UDDB实例可以进行这个操作:Running: 系统正常运行中当请求返回成功之后，UDDB实例的状态变成"UpgradingUDDB"; 如果返回失败, UDDB实例状态保持不变 当UDDB实例升级成功之后, UDDB实例的状态变成"Running"; 如果更改过程中出现异常, 状态变成"Abnormal", 或者"Error"
     *
     * @throws UCloudException
     */
    public function upgradeUDDBInstance(UpgradeUDDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpgradeUDDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
}
