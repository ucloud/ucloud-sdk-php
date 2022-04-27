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
namespace UCloud\UDB;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;


        
        
        
use UCloud\UDB\Apis\BackupUDBInstanceRequest;
use UCloud\UDB\Apis\BackupUDBInstanceResponse;
        
        
        
use UCloud\UDB\Apis\BackupUDBInstanceBinlogRequest;
use UCloud\UDB\Apis\BackupUDBInstanceBinlogResponse;
        
        
        
use UCloud\UDB\Apis\BackupUDBInstanceErrorLogRequest;
use UCloud\UDB\Apis\BackupUDBInstanceErrorLogResponse;
        
        
        
use UCloud\UDB\Apis\BackupUDBInstanceSlowLogRequest;
use UCloud\UDB\Apis\BackupUDBInstanceSlowLogResponse;
        
        
        
use UCloud\UDB\Apis\ChangeUDBParamGroupRequest;
use UCloud\UDB\Apis\ChangeUDBParamGroupResponse;
        
        
        
use UCloud\UDB\Apis\CheckRecoverUDBInstanceRequest;
use UCloud\UDB\Apis\CheckRecoverUDBInstanceResponse;
        
        
        
use UCloud\UDB\Apis\CheckUDBInstanceToHAAllowanceRequest;
use UCloud\UDB\Apis\CheckUDBInstanceToHAAllowanceResponse;
        
        
        
use UCloud\UDB\Apis\ClearUDBLogRequest;
use UCloud\UDB\Apis\ClearUDBLogResponse;
        
        
        
use UCloud\UDB\Apis\CreateMongoDBReplicaSetRequest;
use UCloud\UDB\Apis\CreateMongoDBReplicaSetResponse;
        
        
        
use UCloud\UDB\Apis\CreateUDBInstanceRequest;
use UCloud\UDB\Apis\CreateUDBInstanceResponse;
        
        
        
use UCloud\UDB\Apis\CreateUDBInstanceByRecoveryRequest;
use UCloud\UDB\Apis\CreateUDBInstanceByRecoveryResponse;
        
        
        
use UCloud\UDB\Apis\CreateUDBParamGroupRequest;
use UCloud\UDB\Apis\CreateUDBParamGroupResponse;
        
        
        
use UCloud\UDB\Apis\CreateUDBReplicationInstanceRequest;
use UCloud\UDB\Apis\CreateUDBReplicationInstanceResponse;
        
        
        
use UCloud\UDB\Apis\CreateUDBRouteInstanceRequest;
use UCloud\UDB\Apis\CreateUDBRouteInstanceResponse;
        
        
        
use UCloud\UDB\Apis\CreateUDBSlaveRequest;
use UCloud\UDB\Apis\CreateUDBSlaveResponse;
        
        
        
use UCloud\UDB\Apis\DeleteUDBInstanceRequest;
use UCloud\UDB\Apis\DeleteUDBInstanceResponse;
        
        
        
use UCloud\UDB\Apis\DeleteUDBLogPackageRequest;
use UCloud\UDB\Apis\DeleteUDBLogPackageResponse;
        
        
        
use UCloud\UDB\Apis\DeleteUDBParamGroupRequest;
use UCloud\UDB\Apis\DeleteUDBParamGroupResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBBackupRequest;
use UCloud\UDB\Apis\DescribeUDBBackupResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBBackupBlacklistRequest;
use UCloud\UDB\Apis\DescribeUDBBackupBlacklistResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBBinlogBackupURLRequest;
use UCloud\UDB\Apis\DescribeUDBBinlogBackupURLResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBInstanceRequest;
use UCloud\UDB\Apis\DescribeUDBInstanceResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBInstanceBackupStateRequest;
use UCloud\UDB\Apis\DescribeUDBInstanceBackupStateResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBInstanceBackupURLRequest;
use UCloud\UDB\Apis\DescribeUDBInstanceBackupURLResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBInstanceBinlogRequest;
use UCloud\UDB\Apis\DescribeUDBInstanceBinlogResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBInstanceBinlogBackupStateRequest;
use UCloud\UDB\Apis\DescribeUDBInstanceBinlogBackupStateResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBInstanceLogRequest;
use UCloud\UDB\Apis\DescribeUDBInstanceLogResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBInstancePriceRequest;
use UCloud\UDB\Apis\DescribeUDBInstancePriceResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBInstanceStateRequest;
use UCloud\UDB\Apis\DescribeUDBInstanceStateResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBInstanceUpgradePriceRequest;
use UCloud\UDB\Apis\DescribeUDBInstanceUpgradePriceResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBLogBackupURLRequest;
use UCloud\UDB\Apis\DescribeUDBLogBackupURLResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBLogPackageRequest;
use UCloud\UDB\Apis\DescribeUDBLogPackageResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBParamGroupRequest;
use UCloud\UDB\Apis\DescribeUDBParamGroupResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBSplittingInfoRequest;
use UCloud\UDB\Apis\DescribeUDBSplittingInfoResponse;
        
        
        
use UCloud\UDB\Apis\DescribeUDBTypeRequest;
use UCloud\UDB\Apis\DescribeUDBTypeResponse;
        
        
        
use UCloud\UDB\Apis\DisableUDBRWSplittingRequest;
use UCloud\UDB\Apis\DisableUDBRWSplittingResponse;
        
        
        
use UCloud\UDB\Apis\EditUDBBackupBlacklistRequest;
use UCloud\UDB\Apis\EditUDBBackupBlacklistResponse;
        
        
        
use UCloud\UDB\Apis\EnableUDBRWSplittingRequest;
use UCloud\UDB\Apis\EnableUDBRWSplittingResponse;
        
        
        
use UCloud\UDB\Apis\ExtractUDBParamGroupRequest;
use UCloud\UDB\Apis\ExtractUDBParamGroupResponse;
        
        
        
use UCloud\UDB\Apis\FetchUDBInstanceEarliestRecoverTimeRequest;
use UCloud\UDB\Apis\FetchUDBInstanceEarliestRecoverTimeResponse;
        
        
        
use UCloud\UDB\Apis\GetUDBClientConnNumRequest;
use UCloud\UDB\Apis\GetUDBClientConnNumResponse;
        
        
        
use UCloud\UDB\Apis\ModifyUDBInstanceNameRequest;
use UCloud\UDB\Apis\ModifyUDBInstanceNameResponse;
        
        
        
use UCloud\UDB\Apis\ModifyUDBInstancePasswordRequest;
use UCloud\UDB\Apis\ModifyUDBInstancePasswordResponse;
        
        
        
use UCloud\UDB\Apis\PromoteUDBInstanceToHARequest;
use UCloud\UDB\Apis\PromoteUDBInstanceToHAResponse;
        
        
        
use UCloud\UDB\Apis\PromoteUDBSlaveRequest;
use UCloud\UDB\Apis\PromoteUDBSlaveResponse;
        
        
        
use UCloud\UDB\Apis\ResizeUDBInstanceRequest;
use UCloud\UDB\Apis\ResizeUDBInstanceResponse;
        
        
        
use UCloud\UDB\Apis\RestartRWSplittingRequest;
use UCloud\UDB\Apis\RestartRWSplittingResponse;
        
        
        
use UCloud\UDB\Apis\RestartUDBInstanceRequest;
use UCloud\UDB\Apis\RestartUDBInstanceResponse;
        
        
        
use UCloud\UDB\Apis\SetUDBRWSplittingRequest;
use UCloud\UDB\Apis\SetUDBRWSplittingResponse;
        
        
        
use UCloud\UDB\Apis\StartUDBInstanceRequest;
use UCloud\UDB\Apis\StartUDBInstanceResponse;
        
        
        
use UCloud\UDB\Apis\StopUDBInstanceRequest;
use UCloud\UDB\Apis\StopUDBInstanceResponse;
        
        
        
use UCloud\UDB\Apis\SwitchUDBHAToSentinelRequest;
use UCloud\UDB\Apis\SwitchUDBHAToSentinelResponse;
        
        
        
use UCloud\UDB\Apis\SwitchUDBInstanceToHARequest;
use UCloud\UDB\Apis\SwitchUDBInstanceToHAResponse;
        
        
        
use UCloud\UDB\Apis\UpdateUDBInstanceBackupStrategyRequest;
use UCloud\UDB\Apis\UpdateUDBInstanceBackupStrategyResponse;
        
        
        
use UCloud\UDB\Apis\UpdateUDBInstanceSlaveBackupSwitchRequest;
use UCloud\UDB\Apis\UpdateUDBInstanceSlaveBackupSwitchResponse;
        
        
        
use UCloud\UDB\Apis\UpdateUDBParamGroupRequest;
use UCloud\UDB\Apis\UpdateUDBParamGroupResponse;
        
        
        
use UCloud\UDB\Apis\UpgradeUDBInstanceToHARequest;
use UCloud\UDB\Apis\UpgradeUDBInstanceToHAResponse;
        
        
        
use UCloud\UDB\Apis\UploadUDBParamGroupRequest;
use UCloud\UDB\Apis\UploadUDBParamGroupResponse;

/**
 * This client is used to call actions of **UDB** service
 */
class UDBClient extends Client
{
        
        
        
        
    /**
     * BackupUDBInstance - 备份UDB实例
     *
     * @throws UCloudException
     */
    public function backupUDBInstance(BackupUDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BackupUDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * BackupUDBInstanceBinlog - 备份UDB指定时间段的binlog列表
     *
     * @throws UCloudException
     */
    public function backupUDBInstanceBinlog(BackupUDBInstanceBinlogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BackupUDBInstanceBinlogResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * BackupUDBInstanceErrorLog - 备份UDB指定时间段的errorlog
     *
     * @throws UCloudException
     */
    public function backupUDBInstanceErrorLog(BackupUDBInstanceErrorLogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BackupUDBInstanceErrorLogResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * BackupUDBInstanceSlowLog - 备份UDB指定时间段的slowlog分析结果
     *
     * @throws UCloudException
     */
    public function backupUDBInstanceSlowLog(BackupUDBInstanceSlowLogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BackupUDBInstanceSlowLogResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ChangeUDBParamGroup - 修改配置文件
     *
     * @throws UCloudException
     */
    public function changeUDBParamGroup(ChangeUDBParamGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ChangeUDBParamGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CheckRecoverUDBInstance - 核查db是否可以使用回档功能
     *
     * @throws UCloudException
     */
    public function checkRecoverUDBInstance(CheckRecoverUDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CheckRecoverUDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CheckUDBInstanceToHAAllowance - 核查db是否可以升级为高可用
     *
     * @throws UCloudException
     */
    public function checkUDBInstanceToHAAllowance(CheckUDBInstanceToHAAllowanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CheckUDBInstanceToHAAllowanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ClearUDBLog - 清除UDB实例的log
     *
     * @throws UCloudException
     */
    public function clearUDBLog(ClearUDBLogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ClearUDBLogResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateMongoDBReplicaSet - 一键创建DB副本集
     *
     * @throws UCloudException
     */
    public function createMongoDBReplicaSet(CreateMongoDBReplicaSetRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateMongoDBReplicaSetResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUDBInstance - 创建UDB实例（包括创建mysql master节点、mongodb primary/configsvr节点和从备份恢复实例）
     *
     * @throws UCloudException
     */
    public function createUDBInstance(CreateUDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUDBInstanceByRecovery - 创建db，将新创建的db恢复到指定db某个指定时间点
     *
     * @throws UCloudException
     */
    public function createUDBInstanceByRecovery(CreateUDBInstanceByRecoveryRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUDBInstanceByRecoveryResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUDBParamGroup - 从已有配置文件创建新配置文件
     *
     * @throws UCloudException
     */
    public function createUDBParamGroup(CreateUDBParamGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUDBParamGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUDBReplicationInstance - 创建MongoDB的副本节点（包括仲裁）
     *
     * @throws UCloudException
     */
    public function createUDBReplicationInstance(CreateUDBReplicationInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUDBReplicationInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUDBRouteInstance - 创建mongos实例
     *
     * @throws UCloudException
     */
    public function createUDBRouteInstance(CreateUDBRouteInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUDBRouteInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * CreateUDBSlave - 创建UDB实例的slave
     *
     * @throws UCloudException
     */
    public function createUDBSlave(CreateUDBSlaveRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUDBSlaveResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUDBInstance - 删除UDB实例
     *
     * @throws UCloudException
     */
    public function deleteUDBInstance(DeleteUDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUDBLogPackage - 删除UDB日志包
     *
     * @throws UCloudException
     */
    public function deleteUDBLogPackage(DeleteUDBLogPackageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUDBLogPackageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DeleteUDBParamGroup - 删除配置参数组
     *
     * @throws UCloudException
     */
    public function deleteUDBParamGroup(DeleteUDBParamGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUDBParamGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBBackup - 列表UDB实例备份信息
     *
     * @throws UCloudException
     */
    public function describeUDBBackup(DescribeUDBBackupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBBackupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBBackupBlacklist - 获取UDB实例的备份黑名单
     *
     * @throws UCloudException
     */
    public function describeUDBBackupBlacklist(DescribeUDBBackupBlacklistRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBBackupBlacklistResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBBinlogBackupURL - 获取UDB的Binlog备份地址
     *
     * @throws UCloudException
     */
    public function describeUDBBinlogBackupURL(DescribeUDBBinlogBackupURLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBBinlogBackupURLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBInstance - 获取UDB实例信息，支持两类操作：（1）指定DBId用于获取该db的信息；（2）指定ClassType、Offset、Limit用于列表操作，查询某一个类型db。
     *
     * @throws UCloudException
     */
    public function describeUDBInstance(DescribeUDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBInstanceBackupState - 获取UDB实例备份状态
     *
     * @throws UCloudException
     */
    public function describeUDBInstanceBackupState(DescribeUDBInstanceBackupStateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBInstanceBackupStateResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBInstanceBackupURL - 获取UDB备份下载地址
     *
     * @throws UCloudException
     */
    public function describeUDBInstanceBackupURL(DescribeUDBInstanceBackupURLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBInstanceBackupURLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBInstanceBinlog - 获取UDB指定时间段的binlog列表
     *
     * @throws UCloudException
     */
    public function describeUDBInstanceBinlog(DescribeUDBInstanceBinlogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBInstanceBinlogResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBInstanceBinlogBackupState - 获取udb实例备份状态
     *
     * @throws UCloudException
     */
    public function describeUDBInstanceBinlogBackupState(DescribeUDBInstanceBinlogBackupStateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBInstanceBinlogBackupStateResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBInstanceLog - 查询某一段时间内UDB的错误日志或慢查询日志
     *
     * @throws UCloudException
     */
    public function describeUDBInstanceLog(DescribeUDBInstanceLogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBInstanceLogResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBInstancePrice - 获取UDB实例价格信息
     *
     * @throws UCloudException
     */
    public function describeUDBInstancePrice(DescribeUDBInstancePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBInstancePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBInstanceState - 获取UDB实例状态
     *
     * @throws UCloudException
     */
    public function describeUDBInstanceState(DescribeUDBInstanceStateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBInstanceStateResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBInstanceUpgradePrice - 获取UDB实例升降级价格信息
     *
     * @throws UCloudException
     */
    public function describeUDBInstanceUpgradePrice(DescribeUDBInstanceUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBInstanceUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBLogBackupURL - 获取UDB的slowlog备份地址
     *
     * @throws UCloudException
     */
    public function describeUDBLogBackupURL(DescribeUDBLogBackupURLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBLogBackupURLResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBLogPackage - 列表UDB实例binlog或slowlog或errorlog备份信息
     *
     * @throws UCloudException
     */
    public function describeUDBLogPackage(DescribeUDBLogPackageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBLogPackageResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBParamGroup - 获取参数组详细参数信息
     *
     * @throws UCloudException
     */
    public function describeUDBParamGroup(DescribeUDBParamGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBParamGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBSplittingInfo - 描述读写分离功能的详细信息
     *
     * @throws UCloudException
     */
    public function describeUDBSplittingInfo(DescribeUDBSplittingInfoRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBSplittingInfoResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DescribeUDBType - 获取UDB支持的类型信息
     *
     * @throws UCloudException
     */
    public function describeUDBType(DescribeUDBTypeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDBTypeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * DisableUDBRWSplitting - 关闭DB的读写分离功能
     *
     * @throws UCloudException
     */
    public function disableUDBRWSplitting(DisableUDBRWSplittingRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DisableUDBRWSplittingResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * EditUDBBackupBlacklist - 编辑UDB实例的备份黑名单
     *
     * @throws UCloudException
     */
    public function editUDBBackupBlacklist(EditUDBBackupBlacklistRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new EditUDBBackupBlacklistResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * EnableUDBRWSplitting - 开启DB的读写分离功能
     *
     * @throws UCloudException
     */
    public function enableUDBRWSplitting(EnableUDBRWSplittingRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new EnableUDBRWSplittingResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ExtractUDBParamGroup - 获取配置文件内容
     *
     * @throws UCloudException
     */
    public function extractUDBParamGroup(ExtractUDBParamGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ExtractUDBParamGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * FetchUDBInstanceEarliestRecoverTime - 获取UDB最早可回档的时间点
     *
     * @throws UCloudException
     */
    public function fetchUDBInstanceEarliestRecoverTime(FetchUDBInstanceEarliestRecoverTimeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new FetchUDBInstanceEarliestRecoverTimeResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * GetUDBClientConnNum - 输入一个DBID，能够获取客户端来源IP以及对应的连接数
     *
     * @throws UCloudException
     */
    public function getUDBClientConnNum(GetUDBClientConnNumRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUDBClientConnNumResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUDBInstanceName - 重命名UDB实例
     *
     * @throws UCloudException
     */
    public function modifyUDBInstanceName(ModifyUDBInstanceNameRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUDBInstanceNameResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ModifyUDBInstancePassword - 修改DB实例的管理员密码
     *
     * @throws UCloudException
     */
    public function modifyUDBInstancePassword(ModifyUDBInstancePasswordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUDBInstancePasswordResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * PromoteUDBInstanceToHA - 普通db升级为高可用(只针对mysql5.5及以上版本SSD机型的实例)  ，对于NVMe机型的单点升级高可用，虽然也能使用该操作再加上SwitchUDBInstanceToHA，但是更建议直接调用新的API接口（UpgradeUDBInstanceToHA）
     *
     * @throws UCloudException
     */
    public function promoteUDBInstanceToHA(PromoteUDBInstanceToHARequest $request = null)
    {
        $resp = $this->invoke($request);
        return new PromoteUDBInstanceToHAResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * PromoteUDBSlave - 从库提升为独立库
     *
     * @throws UCloudException
     */
    public function promoteUDBSlave(PromoteUDBSlaveRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new PromoteUDBSlaveResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * ResizeUDBInstance - 修改（升级和降级）UDB实例的配置，包括内存和磁盘的配置，对于内存升级无需关闭实例，其他场景需要事先关闭实例。两套参数可以配置升降机：1.配置UseSSD和SSDType  2.配置InstanceType，不需要配置InstanceMode。这两套第二套参数的优先级更高
     *
     * @throws UCloudException
     */
    public function resizeUDBInstance(ResizeUDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeUDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RestartRWSplitting - 读写分离中间件重启，对应docker重启，但是ip不变
     *
     * @throws UCloudException
     */
    public function restartRWSplitting(RestartRWSplittingRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestartRWSplittingResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * RestartUDBInstance - 重启UDB实例
     *
     * @throws UCloudException
     */
    public function restartUDBInstance(RestartUDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestartUDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * SetUDBRWSplitting - 设置读写分离的模式
     *
     * @throws UCloudException
     */
    public function setUDBRWSplitting(SetUDBRWSplittingRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SetUDBRWSplittingResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * StartUDBInstance - 启动UDB实例
     *
     * @throws UCloudException
     */
    public function startUDBInstance(StartUDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StartUDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * StopUDBInstance - 关闭UDB实例
     *
     * @throws UCloudException
     */
    public function stopUDBInstance(StopUDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StopUDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * SwitchUDBHAToSentinel - UDB高可用实例从HAProxy版本升级为Sentinel版本（不带HAProxy）升级耗时5-10秒
     *
     * @throws UCloudException
     */
    public function switchUDBHAToSentinel(SwitchUDBHAToSentinelRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SwitchUDBHAToSentinelResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * SwitchUDBInstanceToHA - 普通UDB切换为高可用(只针对mysql5.5及以上版本SSD机型的实例) ，原db状态为WaitForSwitch时，调用该api； 对于NVMe机型的单点升级高可用，虽然也能使用PromoteUDBInstanceToHA再加上该操作，但是更建议直接调用新的API接口（UpgradeUDBInstanceToHA）
     *
     * @throws UCloudException
     */
    public function switchUDBInstanceToHA(SwitchUDBInstanceToHARequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SwitchUDBInstanceToHAResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateUDBInstanceBackupStrategy - 修改UDB自动备份策略
     *
     * @throws UCloudException
     */
    public function updateUDBInstanceBackupStrategy(UpdateUDBInstanceBackupStrategyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUDBInstanceBackupStrategyResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateUDBInstanceSlaveBackupSwitch - 开启或者关闭UDB从库备份
     *
     * @throws UCloudException
     */
    public function updateUDBInstanceSlaveBackupSwitch(UpdateUDBInstanceSlaveBackupSwitchRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUDBInstanceSlaveBackupSwitchResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpdateUDBParamGroup - 更新UDB配置参数项
     *
     * @throws UCloudException
     */
    public function updateUDBParamGroup(UpdateUDBParamGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUDBParamGroupResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UpgradeUDBInstanceToHA - 快杰普通db升级为高可用(只针对mysql5.5及以上版本Nvme机型的实例)
     *
     * @throws UCloudException
     */
    public function upgradeUDBInstanceToHA(UpgradeUDBInstanceToHARequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpgradeUDBInstanceToHAResponse($resp->toArray(), $resp->getRequestId());
    }
        
        
        
        
    /**
     * UploadUDBParamGroup - 导入UDB配置
     *
     * @throws UCloudException
     */
    public function uploadUDBParamGroup(UploadUDBParamGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UploadUDBParamGroupResponse($resp->toArray(), $resp->getRequestId());
    }
}
