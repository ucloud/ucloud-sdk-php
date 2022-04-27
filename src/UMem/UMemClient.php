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
namespace UCloud\UMem;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\UMem\Apis\CheckUDredisSpaceAllowanceRequest;
use UCloud\UMem\Apis\CheckUDredisSpaceAllowanceResponse;
        
        
        
use UCloud\UMem\Apis\CheckURedisAllowanceRequest;
use UCloud\UMem\Apis\CheckURedisAllowanceResponse;
        
        
        
use UCloud\UMem\Apis\CreateUMemBackupRequest;
use UCloud\UMem\Apis\CreateUMemBackupResponse;
        
        
        
use UCloud\UMem\Apis\CreateUMemSpaceRequest;
use UCloud\UMem\Apis\CreateUMemSpaceResponse;
        
        
        
use UCloud\UMem\Apis\CreateUMemcacheGroupRequest;
use UCloud\UMem\Apis\CreateUMemcacheGroupResponse;
        
        
        
use UCloud\UMem\Apis\CreateURedisBackupRequest;
use UCloud\UMem\Apis\CreateURedisBackupResponse;
        
        
        
use UCloud\UMem\Apis\CreateURedisGroupRequest;
use UCloud\UMem\Apis\CreateURedisGroupResponse;
        
        
        
use UCloud\UMem\Apis\DeleteUMemSpaceRequest;
use UCloud\UMem\Apis\DeleteUMemSpaceResponse;
        
        
        
use UCloud\UMem\Apis\DeleteUMemcacheGroupRequest;
use UCloud\UMem\Apis\DeleteUMemcacheGroupResponse;
        
        
        
use UCloud\UMem\Apis\DeleteURedisGroupRequest;
use UCloud\UMem\Apis\DeleteURedisGroupResponse;
        
        
        
use UCloud\UMem\Apis\DescribeUDRedisProxyInfoRequest;
use UCloud\UMem\Apis\DescribeUDRedisProxyInfoResponse;
        
        
        
use UCloud\UMem\Apis\DescribeUDRedisSlowlogRequest;
use UCloud\UMem\Apis\DescribeUDRedisSlowlogResponse;
        
        
        
use UCloud\UMem\Apis\DescribeUMemRequest;
use UCloud\UMem\Apis\DescribeUMemResponse;
        
        
        
use UCloud\UMem\Apis\DescribeUMemBackupRequest;
use UCloud\UMem\Apis\DescribeUMemBackupResponse;
        
        
        
use UCloud\UMem\Apis\DescribeUMemBackupURLRequest;
use UCloud\UMem\Apis\DescribeUMemBackupURLResponse;
        
        
        
use UCloud\UMem\Apis\DescribeUMemBlockInfoRequest;
use UCloud\UMem\Apis\DescribeUMemBlockInfoResponse;
        
        
        
use UCloud\UMem\Apis\DescribeUMemPriceRequest;
use UCloud\UMem\Apis\DescribeUMemPriceResponse;
        
        
        
use UCloud\UMem\Apis\DescribeUMemSpaceRequest;
use UCloud\UMem\Apis\DescribeUMemSpaceResponse;
        
        
        
use UCloud\UMem\Apis\DescribeUMemUpgradePriceRequest;
use UCloud\UMem\Apis\DescribeUMemUpgradePriceResponse;
        
        
        
use UCloud\UMem\Apis\DescribeUMemcacheGroupRequest;
use UCloud\UMem\Apis\DescribeUMemcacheGroupResponse;
        
        
        
use UCloud\UMem\Apis\DescribeUMemcachePriceRequest;
use UCloud\UMem\Apis\DescribeUMemcachePriceResponse;
        
        
        
use UCloud\UMem\Apis\DescribeUMemcacheUpgradePriceRequest;
use UCloud\UMem\Apis\DescribeUMemcacheUpgradePriceResponse;
        
        
        
use UCloud\UMem\Apis\DescribeURedisBackupRequest;
use UCloud\UMem\Apis\DescribeURedisBackupResponse;
        
        
        
use UCloud\UMem\Apis\DescribeURedisBackupURLRequest;
use UCloud\UMem\Apis\DescribeURedisBackupURLResponse;
        
        
        
use UCloud\UMem\Apis\DescribeURedisConfigRequest;
use UCloud\UMem\Apis\DescribeURedisConfigResponse;
        
        
        
use UCloud\UMem\Apis\DescribeURedisGroupRequest;
use UCloud\UMem\Apis\DescribeURedisGroupResponse;
        
        
        
use UCloud\UMem\Apis\DescribeURedisPriceRequest;
use UCloud\UMem\Apis\DescribeURedisPriceResponse;
        
        
        
use UCloud\UMem\Apis\DescribeURedisSlowlogRequest;
use UCloud\UMem\Apis\DescribeURedisSlowlogResponse;
        
        
        
use UCloud\UMem\Apis\DescribeURedisUpgradePriceRequest;
use UCloud\UMem\Apis\DescribeURedisUpgradePriceResponse;
        
        
        
use UCloud\UMem\Apis\DescribeURedisVersionRequest;
use UCloud\UMem\Apis\DescribeURedisVersionResponse;
        
        
        
use UCloud\UMem\Apis\FlushallURedisGroupRequest;
use UCloud\UMem\Apis\FlushallURedisGroupResponse;
        
        
        
use UCloud\UMem\Apis\GetUMemSpaceStateRequest;
use UCloud\UMem\Apis\GetUMemSpaceStateResponse;
        
        
        
use UCloud\UMem\Apis\ISolationURedisGroupRequest;
use UCloud\UMem\Apis\ISolationURedisGroupResponse;
        
        
        
use UCloud\UMem\Apis\ModifyUMemSpaceNameRequest;
use UCloud\UMem\Apis\ModifyUMemSpaceNameResponse;
        
        
        
use UCloud\UMem\Apis\ModifyURedisGroupNameRequest;
use UCloud\UMem\Apis\ModifyURedisGroupNameResponse;
        
        
        
use UCloud\UMem\Apis\ModifyURedisGroupPasswordRequest;
use UCloud\UMem\Apis\ModifyURedisGroupPasswordResponse;
        
        
        
use UCloud\UMem\Apis\RemoveUDRedisDataRequest;
use UCloud\UMem\Apis\RemoveUDRedisDataResponse;
        
        
        
use UCloud\UMem\Apis\ResizeUMemSpaceRequest;
use UCloud\UMem\Apis\ResizeUMemSpaceResponse;
        
        
        
use UCloud\UMem\Apis\ResizeURedisGroupRequest;
use UCloud\UMem\Apis\ResizeURedisGroupResponse;
        
        
        
use UCloud\UMem\Apis\RestartUMemcacheGroupRequest;
use UCloud\UMem\Apis\RestartUMemcacheGroupResponse;
        
        
        
use UCloud\UMem\Apis\RestartURedisGroupRequest;
use UCloud\UMem\Apis\RestartURedisGroupResponse;
        
        
        
use UCloud\UMem\Apis\UpdateURedisBackupStrategyRequest;
use UCloud\UMem\Apis\UpdateURedisBackupStrategyResponse;

/**
 * This client is used to call actions of **UMem** service
 */
class UMemClient extends Client
{
        
        
        
        
    /**
     * CheckUDredisSpaceAllowance - 检查高性能UMem剩余资源，以及分片扩容前的资源预检查
     *
     * @throws UCloudException
     */
    public function checkUDredisSpaceAllowance(CheckUDredisSpaceAllowanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CheckUDredisSpaceAllowanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CheckURedisAllowance - 检查主备Redis的资源是否足够创建新实例，以及主备Redis的扩容资源预检查
     *
     * @throws UCloudException
     */
    public function checkURedisAllowance(CheckURedisAllowanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CheckURedisAllowanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUMemBackup - 创建分布式redis备份
     *
     * @throws UCloudException
     */
    public function createUMemBackup(CreateUMemBackupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUMemBackupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUMemSpace - 创建UMem内存空间
     *
     * @throws UCloudException
     */
    public function createUMemSpace(CreateUMemSpaceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUMemSpaceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUMemcacheGroup - 创建单机Memcache
     *
     * @throws UCloudException
     */
    public function createUMemcacheGroup(CreateUMemcacheGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUMemcacheGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateURedisBackup - 创建主备Redis备份
     *
     * @throws UCloudException
     */
    public function createURedisBackup(CreateURedisBackupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateURedisBackupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateURedisGroup - 创建主备redis
     *
     * @throws UCloudException
     */
    public function createURedisGroup(CreateURedisGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateURedisGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUMemSpace - 删除UMem内存空间
     *
     * @throws UCloudException
     */
    public function deleteUMemSpace(DeleteUMemSpaceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUMemSpaceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUMemcacheGroup - 删除单机Memcache
     *
     * @throws UCloudException
     */
    public function deleteUMemcacheGroup(DeleteUMemcacheGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUMemcacheGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteURedisGroup - 删除主备redis
     *
     * @throws UCloudException
     */
    public function deleteURedisGroup(DeleteURedisGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteURedisGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDRedisProxyInfo - 拉取udredis所有的代理信息
     *
     * @throws UCloudException
     */
    public function describeUDRedisProxyInfo(DescribeUDRedisProxyInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDRedisProxyInfoResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDRedisSlowlog - 查询UDRedis慢日志
     *
     * @throws UCloudException
     */
    public function describeUDRedisSlowlog(DescribeUDRedisSlowlogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDRedisSlowlogResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUMem - 获取UMem列表
     *
     * @throws UCloudException
     */
    public function describeUMem(DescribeUMemRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUMemResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUMemBackup - 查询分布式redis备份
     *
     * @throws UCloudException
     */
    public function describeUMemBackup(DescribeUMemBackupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUMemBackupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUMemBackupURL - 获取分布式redis 备份下载链接
     *
     * @throws UCloudException
     */
    public function describeUMemBackupURL(DescribeUMemBackupURLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUMemBackupURLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUMemBlockInfo - 拉取UDRedis分片信息
     *
     * @throws UCloudException
     */
    public function describeUMemBlockInfo(DescribeUMemBlockInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUMemBlockInfoResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUMemPrice - 获取UMem实例价格信息
     *
     * @throws UCloudException
     */
    public function describeUMemPrice(DescribeUMemPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUMemPriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUMemSpace - 获取UMem内存空间列表
     *
     * @throws UCloudException
     */
    public function describeUMemSpace(DescribeUMemSpaceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUMemSpaceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUMemUpgradePrice - 获取UMem升级价格信息
     *
     * @throws UCloudException
     */
    public function describeUMemUpgradePrice(DescribeUMemUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUMemUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUMemcacheGroup - 显示Memcache
     *
     * @throws UCloudException
     */
    public function describeUMemcacheGroup(DescribeUMemcacheGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUMemcacheGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUMemcachePrice - 获取umemcache组价格信息
     *
     * @throws UCloudException
     */
    public function describeUMemcachePrice(DescribeUMemcachePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUMemcachePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUMemcacheUpgradePrice - 获取umemcache升级价格信息
     *
     * @throws UCloudException
     */
    public function describeUMemcacheUpgradePrice(DescribeUMemcacheUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUMemcacheUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeURedisBackup - 查询主备redis备份
     *
     * @throws UCloudException
     */
    public function describeURedisBackup(DescribeURedisBackupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeURedisBackupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeURedisBackupURL - 获取主备Redis备份下载链接
     *
     * @throws UCloudException
     */
    public function describeURedisBackupURL(DescribeURedisBackupURLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeURedisBackupURLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeURedisConfig - 查询主备Redis所有配置文件
     *
     * @throws UCloudException
     */
    public function describeURedisConfig(DescribeURedisConfigRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeURedisConfigResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeURedisGroup - 查询主备Redis
     *
     * @throws UCloudException
     */
    public function describeURedisGroup(DescribeURedisGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeURedisGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeURedisPrice - 取uredis价格信息
     *
     * @throws UCloudException
     */
    public function describeURedisPrice(DescribeURedisPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeURedisPriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeURedisSlowlog - 查询URedis慢日志
     *
     * @throws UCloudException
     */
    public function describeURedisSlowlog(DescribeURedisSlowlogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeURedisSlowlogResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeURedisUpgradePrice - 获取uredis升级价格信息
     *
     * @throws UCloudException
     */
    public function describeURedisUpgradePrice(DescribeURedisUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeURedisUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeURedisVersion - 获取主Redis可用版本
     *
     * @throws UCloudException
     */
    public function describeURedisVersion(DescribeURedisVersionRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeURedisVersionResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * FlushallURedisGroup - 清除主备redis数据
     *
     * @throws UCloudException
     */
    public function flushallURedisGroup(FlushallURedisGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new FlushallURedisGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUMemSpaceState - 获取UMem内存空间列表
     *
     * @throws UCloudException
     */
    public function getUMemSpaceState(GetUMemSpaceStateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUMemSpaceStateResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ISolationURedisGroup - 打开/关闭URedis
     *
     * @throws UCloudException
     */
    public function iSolationURedisGroup(ISolationURedisGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ISolationURedisGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUMemSpaceName - 修改UMem内存空间名称
     *
     * @throws UCloudException
     */
    public function modifyUMemSpaceName(ModifyUMemSpaceNameRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUMemSpaceNameResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyURedisGroupName - 修改主备redis名称
     *
     * @throws UCloudException
     */
    public function modifyURedisGroupName(ModifyURedisGroupNameRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyURedisGroupNameResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyURedisGroupPassword - 修改主备密码/重置密码
     *
     * @throws UCloudException
     */
    public function modifyURedisGroupPassword(ModifyURedisGroupPasswordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyURedisGroupPasswordResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RemoveUDRedisData - 清除udredis实例数据
     *
     * @throws UCloudException
     */
    public function removeUDRedisData(RemoveUDRedisDataRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RemoveUDRedisDataResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ResizeUMemSpace - 调整内存空间容量
     *
     * @throws UCloudException
     */
    public function resizeUMemSpace(ResizeUMemSpaceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeUMemSpaceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ResizeURedisGroup - 通过调用CheckURedisAllowance接口，检查资源情况，根据不同情形来调整主备redis容量，其中主要包括可用区资源不足无法扩容，主备所在宿主机资源不足需要迁移完成扩容（需要主从切换，会闪断及负载升高），以及直接扩容（业务无感知）
     *
     * @throws UCloudException
     */
    public function resizeURedisGroup(ResizeURedisGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeURedisGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RestartUMemcacheGroup - 重启单机Memcache
     *
     * @throws UCloudException
     */
    public function restartUMemcacheGroup(RestartUMemcacheGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestartUMemcacheGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RestartURedisGroup - 重启主备实例
     *
     * @throws UCloudException
     */
    public function restartURedisGroup(RestartURedisGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestartURedisGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateURedisBackupStrategy - URedisBackupStrategy
     *
     * @throws UCloudException
     */
    public function updateURedisBackupStrategy(UpdateURedisBackupStrategyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateURedisBackupStrategyResponse($resp->toArray(), $resp->getRequestId());
    }
}
