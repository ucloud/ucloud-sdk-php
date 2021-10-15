<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
     * See also: https://docs.ucloud.cn/api/udb-api/backup_udb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) DB实例Id,该值可以通过DescribeUDBInstance获取
     *     "BackupName" => (string) 备份名称
     *     "UseBlacklist" => (boolean) 是否使用黑名单备份，默认false
     *     "BackupMethod" => (string) 使用的备份方式。（快照备份即物理备份。注意只有SSD版本的mysql实例支持设置为snapshot）
     *     "Blacklist" => (string) 备份黑名单列表，以 ; 分隔。注意：只有逻辑备份下备份黑名单才生效，快照备份备份黑名单下无效
     *     "ForceBackup" => (boolean) true表示逻辑备份时是使用 --force 参数，false表示不使用 --force 参数。物理备份此参数无效。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return BackupUDBInstanceResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/backup_udb_instance_binlog
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) DB实例Id,该值可以通过DescribeUDBInstance获取
     *     "BackupFile" => (string) 需要备份文件,可通过DescribeUDBInstanceBinlog获得 如果要传入多个文件名，以空格键分割,用单引号包含.
     *     "BackupName" => (string) DB备份文件名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return BackupUDBInstanceBinlogResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/backup_udb_instance_error_log
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) DB实例Id,该值可以通过DescribeUDBInstance获取
     *     "BackupName" => (string) 备份名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return BackupUDBInstanceErrorLogResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/backup_udb_instance_slow_log
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) DB实例Id,该值可以通过DescribeUDBInstance获取
     *     "BeginTime" => (integer) 过滤条件:起始时间(时间戳)
     *     "EndTime" => (integer) 过滤条件:结束时间(时间戳)
     *     "BackupName" => (string) 备份文件名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return BackupUDBInstanceSlowLogResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/change_udb_param_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) DB实例Id
     *     "GroupId" => (string) 参数组Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ChangeUDBParamGroupResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/check_recover_udb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "SrcDBId" => (string) 源实例的Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "LastestTime" => (integer) 核查成功返回值为可以回档到的最近时刻,核查失败不返回
     * ]
     *
     * @return CheckRecoverUDBInstanceResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/check_udb_instance_to_ha_allowance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) 实例的Id,该值可以通过DescribeUDBInstance获取
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Allowance" => (string) Yes ，No ，Yes即可以升级，No为不可以升级
     * ]
     *
     * @return CheckUDBInstanceToHAAllowanceResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/clear_udb_log
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) DB实例的id,该值可以通过DescribeUDBInstance获取
     *     "LogType" => (integer) 日志类型，10-error（暂不支持）、20-slow（暂不支持 ）、30-binlog
     *     "BeforeTime" => (integer) 删除时间点(至少前一天)之前log，采用时间戳(秒)，默认当 前时间点前一天
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ClearUDBLogResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/create_mongo_db_replica_set
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Name" => (string) PrimaryDB实例名称，至少6位
     *     "AdminPassword" => (string) 管理员密码
     *     "DBTypeId" => (string) DB类型id对应的字符串形式（例如：mongodb-2.6）注意：当前仅支持mongodb
     *     "DiskSpace" => (integer) 磁盘空间(GB), 暂时支持20G - 3000G
     *     "ParamGroupId" => (integer) DB实例使用的配置参数组id
     *     "MemoryLimit" => (integer) 内存限制(MB)，目前支持以下几档 1000M/2000M/4000M/ 6000M/8000M/12000M/16000M/ 24000M/32000M/48000M/ 64000M/96000M
     *     "Port" => (integer) 端口号
     *     "ChargeType" => (string) Year， Month， Dynamic，Trial，默认: Month
     *     "Quantity" => (integer) 购买时长(N个月)，默认值1个月。如果为0，代表购买到月底。
     *     "AdminUser" => (string) 管理员帐户名，默认root
     *     "BackupCount" => (integer) 备份策略，每周备份数量，默认7次
     *     "BackupTime" => (integer) 备份策略，备份开始时间，单位小时计，默认1点
     *     "BackupDuration" => (integer) 备份策略，备份时间间隔，单位小时计，默认24小时
     *     "UseSSD" => (boolean) 是否使用SSD，默认为true
     *     "SSDType" => (string) SSD类型，可选值为"SATA"、"PCI-E"，如果UseSSD为true ，则必选
     *     "CPU" => (integer) cpu核数
     *     "InstanceType" => (string) UDB数据库机型
     *     "SubnetId" => (string) 子网ID
     *     "VPCId" => (string) VPC的ID
     *     "ClusterId" => (string) 所属分片集群的ID
     *     "CouponId" => (array<string>) CouponId.0 代表第一个代金券id，对于传入多个代金券id，后面为 CouponId.1, CouponId.2 以此类推
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DBIds" => (array<string>) 返回所有副本集成员的Id
     * ]
     *
     * @return CreateMongoDBReplicaSetResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/create_udb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Name" => (string) 实例名称，至少6位
     *     "AdminPassword" => (string) 管理员密码
     *     "DBTypeId" => (string) DB类型id，mysql/mongodb/postgesql按版本细分 1：mysql-5.1，2：mysql-5.5，3：percona-5.5，4：mysql-5.6，5：percona-5.6，6：mysql-5.7，7：percona-5.7，8：mariadb-10.0，9：mongodb-2.4，10：mongodb-2.6，11：mongodb-3.0，12：mongodb-3.2,13：postgresql-9.4，14：postgresql-9.6，14：postgresql-10.4
     *     "Port" => (integer) 端口号，mysql默认3306，mongodb默认27017，postgresql默认5432
     *     "DiskSpace" => (integer) 磁盘空间(GB), 暂时支持20G - 32T
     *     "ParamGroupId" => (integer) DB实例使用的配置参数组id
     *     "MemoryLimit" => (integer) 内存限制(MB)，目前支持以下几档 1000M/2000M/4000M/ 6000M/8000M/12000M/16000M/ 24000M/32000M/48000M/ 64000M/96000M/128000M/192000M/256000M/320000M
     *     "ChargeType" => (string) Year， Month， Dynamic，Trial，默认: Month
     *     "Quantity" => (integer) 购买时长，默认值1
     *     "AdminUser" => (string) 管理员帐户名，默认root
     *     "BackupCount" => (integer) 备份策略，每周备份数量，默认7次
     *     "BackupTime" => (integer) 备份策略，备份开始时间，单位小时计，默认1点
     *     "BackupDuration" => (integer) 备份策略，备份时间间隔，单位小时计，默认24小时
     *     "BackupId" => (integer) 备份id，如果指定，则表明从备份恢复实例
     *     "UseSSD" => (boolean) 是否使用SSD，默认为true。目前主要可用区、海外机房、新机房只提供SSD资源，非SSD资源不再提供。
     *     "SSDType" => (string) SSD类型，可选值为"SATA"、“NVMe”，如果UseSSD为true ，则必选
     *     "InstanceMode" => (string) UDB实例模式类型, 可选值如下: "Normal": 普通版UDB实例 "HA": 高可用版UDB实例 默认是"Normal"
     *     "UDBCId" => (string) 专区ID信息（如果这个参数存在这说明是在专区中创建DB）
     *     "CPU" => (integer) cpu核数
     *     "BackupZone" => (string) 跨可用区高可用备库所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *     "SubnetId" => (string) 子网ID
     *     "VPCId" => (string) VPC的ID
     *     "DisableSemisync" => (boolean) 是否开启异步高可用，默认不填，可置为true
     *     "ClusterRole" => (string) 当DB类型(DBTypeId)为mongodb时，需要指定mongo的角色，可选值为configsrv (配置节点)，shardsrv (数据节点)
     *     "HAArch" => (string) 高可用架构:1） haproxy（默认）: 当前仅支持mysql。2） sentinel: 基于vip和哨兵节点的架构，当前支持mysql和pg。
     *     "Tag" => (string) 实例所在的业务组名称
     *     "EnableIpV6" => (boolean) 是否创建使用ipv6 资源， 默认为false， 或者不填， 创建ipv6为true
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DBId" => (string) BD实例id
     * ]
     *
     * @return CreateUDBInstanceResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/create_udb_instance_by_recovery
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Name" => (string) 实例名称，至少6位
     *     "SrcDBId" => (string) 源实例的Id
     *     "RecoveryTime" => (integer) 恢复到某个时间点的时间戳(UTC时间格式，默认单位秒)
     *     "ChargeType" => (string) Year， Month， Dynamic，Trial，默认: Dynamic
     *     "Quantity" => (integer) 购买时长，默认值1
     *     "UseSSD" => (boolean) 指定是否是否使用SSD，默认使用主库的配置
     *     "UDBCId" => (string) 专区的Id
     *     "SubnetId" => (string) 子网ID
     *     "VPCId" => (string) VPC的ID
     *     "EnableIpV6" => (boolean) 是否创建使用ipv6 资源， 默认为false， 或者不填， 创建ipv6为true
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DBId" => (string) db实例id
     * ]
     *
     * @return CreateUDBInstanceByRecoveryResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/create_udb_param_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "GroupName" => (string) 新配置参数组名称
     *     "Description" => (string) 参数组描述
     *     "SrcGroupId" => (integer) 源参数组id
     *     "DBTypeId" => (string) DB类型id，mysql/mongodb/postgesql按版本细分 1：mysql-5.1，2：mysql-5.5，3：percona-5.5，4：mysql-5.6，5：percona-5.6，6：mysql-5.7，7：percona-5.7，8：mariadb-10.0，9：mongodb-2.4，10：mongodb-2.6，11：mongodb-3.0，12：mongodb-3.2,13：postgresql-9.4，14：postgresql-9.6
     *     "RegionFlag" => (boolean) 是否是地域级别的配置文件，默认是false
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "GroupId" => (integer) 新配置参数组id
     * ]
     *
     * @return CreateUDBParamGroupResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/create_udb_replication_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "SrcId" => (string) primary节点的DBId,该值可以通过DescribeUDBInstance获取
     *     "Name" => (string) 实例名称，至少6位
     *     "Port" => (integer) 端口号，默认27017，取值范围3306至65535。
     *     "IsArbiter" => (boolean) 是否是仲裁节点，默认false，仲裁节点按最小机型创建
     *     "UseSSD" => (boolean) 是否使用SSD，默认 为 true
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DBId" => (string) 创建从节点的DBId
     * ]
     *
     * @return CreateUDBReplicationInstanceResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/create_udb_route_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBTypeId" => (string) DB类型id，mongodb按版本细分有1：mongodb-2.4，2：mongodb-2.6,3：mongodb-3.0，4：mongodb-3.2
     *     "Name" => (string) 实例名称，至少6位
     *     "Port" => (integer) 端口号，mongodb默认27017
     *     "ParamGroupId" => (integer) DB实例使用的配置参数组id
     *     "MemoryLimit" => (integer) 内存限制(MB)，目前支持以下几档 600M/1500M/3000M /6000M/15000M/30000M
     *     "DiskSpace" => (integer) 磁盘空间(GB), 暂时支持20G - 500G
     *     "ConfigsvrId" => (array<string>) 配置服务器的dbid，允许一个或者三个。
     *     "ChargeType" => (string) Year， Month， Dynamic，Trial，默认: Month
     *     "Quantity" => (integer) 购买时长，默认值1
     *     "UseSSD" => (boolean) 是否使用SSD，默认为ture
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DBId" => (string) db实例id
     * ]
     *
     * @return CreateUDBRouteInstanceResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/create_udb_slave
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "SrcId" => (string) master实例的DBId,该值可以通过DescribeUDBInstance获取
     *     "Name" => (string) 实例名称，至少6位
     *     "Port" => (integer) 端口号
     *     "UseSSD" => (boolean) 是否使用SSD，默认为true
     *     "SSDType" => (string) SSD类型，可选值为"SATA"、"PCI-E"、“NVMe”，如果UseSSD为true ，则必选
     *     "IsLock" => (boolean) 是否锁主库，默认为true
     *     "InstanceMode" => (string) UDB实例部署模式，可选值如下：Normal: 普通单点实例HA: 高可用部署实例
     *     "MemoryLimit" => (integer) 内存限制(MB)，目前支持以下几档 1000M/2000M/4000M/ 6000M/8000M/12000M/16000M/ 24000M/32000M/48000M/ 64000M/96000M/128000M/192000M/256000M/320000M
     *     "DiskSpace" => (integer) 磁盘空间(GB), 暂时支持20G - 3000G（API支持，前端暂时只开放内存定制）
     *     "InstanceType" => (string) UDB实例类型：Normal、SATA_SSD、NVMe_SSD
     *     "SubnetId" => (string) 子网ID（如果不传用默认子网）
     *     "VPCId" => (string) VPCID（如果不传用默认的VPC）
     *     "ChargeType" => (string) Year， Month， Dynamic，Trial，默认和主库保持一致
     *     "Quantity" => (integer) 购买时长，默认默认和主库保持一致
     *     "ParamGroupId" => (integer) DB实例使用的配置参数组id，默认和主库保持一致
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DBId" => (string) 创建slave的DBId
     * ]
     *
     * @return CreateUDBSlaveResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/delete_udb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) DB实例的id,该值可以通过DescribeUDBInstance获取
     *     "UDBCId" => (string) 专区ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUDBInstanceResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/delete_udb_log_package
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "BackupId" => (integer) 日志包id，可通过DescribeUDBLogPackage获得
     *     "BackupZone" => (string) 跨可用区高可用备库所在可用区
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUDBLogPackageResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/delete_udb_param_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "GroupId" => (integer) 参数组id,可通过DescribeUDBParamGroup获取
     *     "RegionFlag" => (boolean) 是否属于地域级别
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUDBParamGroupResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_backup
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Offset" => (integer) 分页显示的起始偏移，列表操作则指定
     *     "Limit" => (integer) 分页显示的条目数，列表操作则指定
     *     "DBId" => (string) DB实例Id，如果指定，则只获取该db的备份信息 该值可以通过DescribeUDBInstance获取
     *     "BackupType" => (integer) 备份类型,取值为0或1，0表示自动，1表示手动
     *     "BeginTime" => (integer) 过滤条件:起始时间(Unix时间戳)
     *     "EndTime" => (integer) 过滤条件:结束时间(Unix时间戳)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 备份信息 参照UDBBackupSet[
     *         [
     *             "BackupId" => (integer) 备份id
     *             "BackupName" => (string) 备份名称
     *             "BackupTime" => (integer) 备份时间(Unix时间戳)
     *             "BackupSize" => (integer) 备份文件大小(字节)
     *             "BackupType" => (integer) 备份类型,取值为0或1,0表示自动，1表示手动
     *             "State" => (string) 备份状态 Backuping // 备份中 Success // 备份成功 Failed // 备份失败 Expired // 备份过期
     *             "DBId" => (string) dbid
     *             "DBName" => (string) 对应的db名称
     *             "Zone" => (string) 备份所在可用区
     *             "BackupZone" => (string) 跨机房高可用备库所在可用区
     *             "BackupEndTime" => (integer) 备份完成时间(Unix时间戳)
     *         ]
     *     ]
     *     "TotalCount" => (integer) 满足条件备份总数，如果指定dbid，则是该db备份总数
     * ]
     *
     * @return DescribeUDBBackupResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_backup_blacklist
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) DB实例Id,该值可以通过DescribeUDBInstance获取
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Blacklist" => (string) DB的黑名单列表, db.%为指定库 dbname.tablename为指定表
     * ]
     *
     * @return DescribeUDBBackupBlacklistResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_binlog_backup_url
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "DBId" => (string) DB实例Id
     *     "BackupId" => (integer) DB实例binlog备份ID，可以从DescribeUDBLogPackage结果当中获得
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BackupPath" => (string) DB实例备份文件的公网地址
     *     "InnerBackupPath" => (string) DB实例备份文件的内网地址
     * ]
     *
     * @return DescribeUDBBinlogBackupURLResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区，不填时默认全部可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "ClassType" => (string) DB种类，如果是列表操作，则需要指定,不区分大小写，其取值如下：mysql: SQL；mongo: NOSQL；postgresql: postgresql
     *     "Offset" => (integer) 分页显示起始偏移位置，列表操作时必填
     *     "Limit" => (integer) 分页显示数量，列表操作时必填
     *     "DBId" => (string) DB实例id，如果指定则获取单个db实例的描述，否则为列表操作。 指定DBId时无需填写ClassType、Offset、Limit
     *     "IsInUDBC" => (boolean) 是否查看专区里面DB
     *     "UDBCId" => (string) IsInUDBC为True,UDBCId为空，说明查看整个可用区的专区的db，如果UDBId不为空则只查看此专区下面的db
     *     "IncludeSlaves" => (boolean) 当只获取这个特定DBId的信息时，如果有该选项，那么把这个DBId实例的所有从库信息一起拉取并返回
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) DB实例信息列表 UDBInstanceSet[
     *         [
     *             "Zone" => (string) DB实例所在可用区
     *             "ClusterRole" => (string) 当DB类型为mongodb时，返回该实例所在集群中的角色，包括：mongos、configsrv_sccc、configsrv_csrs、shardsrv_datanode、shardsrv_arbiter，其中congfigsrv分为sccc和csrs两种模式，shardsrv分为datanode和arbiter两种模式
     *             "DBId" => (string) DB实例id
     *             "Name" => (string) 实例名称，至少6位
     *             "DBTypeId" => (string) DB类型id，mysql/mongodb按版本细分各有一个id 目前id的取值范围为[1,7],数值对应的版本如下： 1：mysql-5.5，2：mysql-5.1，3：percona-5.5 4：mongodb-2.4，5：mongodb-2.6，6：mysql-5.6， 7：percona-5.6
     *             "ParamGroupId" => (integer) DB实例使用的配置参数组id
     *             "AdminUser" => (string) 管理员帐户名，默认root
     *             "VirtualIP" => (string) DB实例虚ip
     *             "VirtualIPMac" => (string) DB实例虚ip的mac地址
     *             "VPCId" => (string) VPC的ID
     *             "SubnetId" => (string) 子网ID
     *             "InstanceType" => (string) UDB数据库机型
     *             "InstanceTypeId" => (integer) UDB数据库机型ID
     *             "Tag" => (string) 获取资源其他信息
     *             "Port" => (integer) 端口号，mysql默认3306，mongodb默认27017
     *             "SrcDBId" => (string) 对mysql的slave而言是master的DBId，对master则为空， 对mongodb则是副本集id
     *             "BackupCount" => (integer) 备份策略，不可修改，备份文件保留的数量，默认7次
     *             "BackupBeginTime" => (integer) 备份策略，不可修改，开始时间，单位小时计，默认3点
     *             "BackupDuration" => (integer) 备份策略，一天内备份时间间隔，单位小时，默认24小时
     *             "BackupBlacklist" => (string) 备份策略，备份黑名单，mongodb则不适用
     *             "State" => (string) DB状态标记 Init：初始化中，Fail：安装失败，Starting：启动中，Running：运行，Shutdown：关闭中，Shutoff：已关闭，Delete：已删除，Upgrading：升级中，Promoting：提升为独库进行中，Recovering：恢复中，Recover fail：恢复失败
     *             "CreateTime" => (integer) DB实例创建时间，采用UTC计时时间戳
     *             "ModifyTime" => (integer) DB实例修改时间，采用UTC计时时间戳
     *             "ExpiredTime" => (integer) DB实例过期时间，采用UTC计时时间戳
     *             "ChargeType" => (string) Year， Month， Dynamic，Trial，默认: Dynamic
     *             "MemoryLimit" => (integer) 内存限制(MB)，默认根据配置机型
     *             "DiskSpace" => (integer) 磁盘空间(GB), 默认根据配置机型
     *             "UseSSD" => (boolean) 是否使用SSD
     *             "SSDType" => (string) SSD类型，SATA/PCI-E/NVMe
     *             "Role" => (string) DB实例角色，mysql区分master/slave，mongodb多种角色
     *             "DiskUsedSize" => (number) DB实例磁盘已使用空间，单位GB
     *             "DataFileSize" => (number) DB实例数据文件大小，单位GB
     *             "SystemFileSize" => (number) DB实例系统文件大小，单位GB
     *             "LogFileSize" => (number) DB实例日志文件大小，单位GB
     *             "BackupDate" => (string) 备份日期标记位。共7位,每一位为一周中一天的备份情况 0表示关闭当天备份,1表示打开当天备份。最右边的一位 为星期天的备份开关，其余从右到左依次为星期一到星期 六的备份配置开关，每周必须至少设置两天备份。 例如：1100000 表示打开星期六和星期五的自动备份功能
     *             "InstanceMode" => (string) UDB实例模式类型, 可选值如下: “Normal”： 普通版UDB实例 “HA”: 高可用版UDB实例
     *             "DataSet" => (array<object>) 如果在需要返回从库的场景下，返回该DB实例的所有从库DB实例信息列表。列表中每一个元素的内容同UDBSlaveInstanceSet 。如果这个DB实例没有从库的情况下，此时返回一个空的列表[
     *                 [
     *                     "Zone" => (string) 可用区
     *                     "DBId" => (string) DB实例id
     *                     "Name" => (string) 实例名称，至少6位
     *                     "DBTypeId" => (string) DB类型id，mysql/mongodb按版本细分各有一个id 目前id的取值范围为[1,7],数值对应的版本如下： 1：mysql-5.5，2：mysql-5.1，3：percona-5.5 4：mongodb-2.4，5：mongodb-2.6，6：mysql-5.6， 7：percona-5.6
     *                     "ParamGroupId" => (integer) DB实例使用的配置参数组id
     *                     "AdminUser" => (string) 管理员帐户名，默认root
     *                     "VirtualIP" => (string) DB实例虚ip
     *                     "VirtualIPMac" => (string) DB实例虚ip的mac地址
     *                     "Port" => (integer) 端口号，mysql默认3306，mongodb默认27017
     *                     "SrcDBId" => (string) 对mysql的slave而言是master的DBId，对master则为空， 对mongodb则是副本集id
     *                     "BackupCount" => (integer) 备份策略，不可修改，备份文件保留的数量，默认7次
     *                     "BackupBeginTime" => (integer) 备份策略，不可修改，开始时间，单位小时计，默认3点
     *                     "BackupDuration" => (integer) 备份策略，一天内备份时间间隔，单位小时，默认24小时
     *                     "BackupBlacklist" => (string) 备份策略，备份黑名单，mongodb则不适用
     *                     "State" => (string) DB状态标记 Init：初始化中，Fail：安装失败，Starting：启动中，Running：运行，Shutdown：关闭中，Shutoff：已关闭，Delete：已删除，Upgrading：升级中，Promoting：提升为独库进行中，Recovering：恢复中，Recover fail：恢复失败
     *                     "CreateTime" => (integer) DB实例创建时间，采用UTC计时时间戳
     *                     "ModifyTime" => (integer) DB实例修改时间，采用UTC计时时间戳
     *                     "ExpiredTime" => (integer) DB实例过期时间，采用UTC计时时间戳
     *                     "ChargeType" => (string) Year， Month， Dynamic，Trial，默认: Dynamic
     *                     "MemoryLimit" => (integer) 内存限制(MB)，默认根据配置机型
     *                     "DiskSpace" => (integer) 磁盘空间(GB), 默认根据配置机型
     *                     "UseSSD" => (boolean) 是否使用SSD
     *                     "SSDType" => (string) SSD类型，SATA/PCI-E
     *                     "Role" => (string) DB实例角色，mysql区分master/slave，mongodb多种角色
     *                     "DiskUsedSize" => (number) DB实例磁盘已使用空间，单位GB
     *                     "DataFileSize" => (number) DB实例数据文件大小，单位GB
     *                     "SystemFileSize" => (number) DB实例系统文件大小，单位GB
     *                     "LogFileSize" => (number) DB实例日志文件大小，单位GB
     *                     "BackupDate" => (string) 备份日期标记位。共7位,每一位为一周中一天的备份情况 0表示关闭当天备份,1表示打开当天备份。最右边的一位 为星期天的备份开关，其余从右到左依次为星期一到星期 六的备份配置开关，每周必须至少设置两天备份。 例如：1100000 表示打开星期六和星期五的自动备份功能
     *                     "InstanceMode" => (string) UDB实例模式类型, 可选值如下: "Normal": 普通版UDB实例;"HA": 高可用版UDB实例
     *                     "ClusterRole" => (string) 当DB类型为mongodb时，返回该实例所在集群中的角色，包括：mongos、configsrv_sccc、configsrv_csrs、shardsrv_datanode、shardsrv_arbiter，其中congfigsrv分为sccc和csrs两种模式，shardsrv分为datanode和arbiter两种模式
     *                     "SubnetId" => (string) 子网ID
     *                     "VPCId" => (string) VPC的ID
     *                     "InstanceType" => (string) UDB数据库机型
     *                     "InstanceTypeId" => (integer) UDB数据库机型ID
     *                     "Tag" => (string) 获取资源其他信息
     *                     "IPv6Address" => (string) 获取该实例的IPv6地址
     *                 ]
     *             ]
     *             "BackupZone" => (string) 跨可用区高可用备库所在可用区
     *             "IPv6Address" => (string) 该实例的ipv6地址
     *             "UserUFileData" => (object) 用户转存备份到自己的UFILE配置, 结构参考UFileDataSet[
     *                 "TokenID" => (string) Ufile的令牌tokenid
     *                 "Bucket" => (string) bucket名称
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) 用户db组的数量，对于 mysql: 主从结对数量，没有slave，则只有master mongodb: 副本集数量
     * ]
     *
     * @return DescribeUDBInstanceResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_instance_backup_state
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "BackupId" => (integer) 备份记录ID
     *     "BackupZone" => (string) 跨可用区高可用备库所在可用区，参见［可用区列表］
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "State" => (string) 备份状态 0 Backuping // 备份中 1 Success // 备份成功 2 Failed // 备份失败 3 Expired // 备份过期
     * ]
     *
     * @return DescribeUDBInstanceBackupStateResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_instance_backup_url
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) DB实例Id,该值可通过DescribeUDBInstance获取
     *     "BackupId" => (integer) DB实例备份ID,该值可以通过DescribeUDBBackup获取
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BackupPath" => (string) DB实例备份文件公网的地址
     *     "InnerBackupPath" => (string) DB实例备份文件内网的地址
     * ]
     *
     * @return DescribeUDBInstanceBackupURLResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_instance_binlog
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) DB实例Id
     *     "BeginTime" => (integer) 过滤条件:起始时间(时间戳)
     *     "EndTime" => (integer) 过滤条件:结束时间(时间戳)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 获取的Binlog信息列表 UDBInstanceBinlogSet[
     *         [
     *             "Name" => (string) Binlog文件名
     *             "Size" => (integer) Binlog文件大小
     *             "BeginTime" => (integer) Binlog文件生成时间(时间戳)
     *             "EndTime" => (integer) Binlog文件结束时间(时间戳)
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUDBInstanceBinlogResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_instance_binlog_backup_state
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "BackupId" => (integer) 备份记录ID
     *     "BackupZone" => (string) 跨可用区高可用备库所在可用区
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "State" => (string) 备份状态 0 Backuping // 备份中 1 Success // 备份成功 2 Failed // 备份失败 3 Expired // 备份过期
     * ]
     *
     * @return DescribeUDBInstanceBinlogBackupStateResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_instance_log
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DBId" => (string) 实例ID
     *     "BeginTime" => (integer) 查询的日志开始的时间戳（Unix Timestamp）。对于实时查询，这个参数应该是上次轮询请求时的时间戳，后台会返回从该值到当前时间的日志内容。
     *     "EndTime" => (integer) 查询日志的结束时间戳(Unix Timestamp），对于实时查询不传该值，与BeginTime的差值不超过24小时：(EndTime-BeginTime) < 24*60*60
     *     "LogType" => (string) 查询日志的类型error：错误日志；slow：慢日志
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Log" => (string) 查询到的日志内容，一段纯文本
     *     "NextTime" => (string) 此次查询到的日志的下一个时间，用于下一次轮询时的BeginTime参数；如果日志查询结束则返回为空，前端结束查询
     * ]
     *
     * @return DescribeUDBInstanceLogResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_instance_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "MemoryLimit" => (integer) 内存限制(MB)，单位为MB.目前支持：1000-96000
     *     "DiskSpace" => (integer) 磁盘空间(GB),暂时支持20(GB) - 3000(GB), 输入不带单位
     *     "DBTypeId" => (string) UDB实例的DB版本字符串
     *     "Count" => (integer) 购买DB实例数量,最大数量为10台, 默认为1台
     *     "ChargeType" => (string) Year，按年付费； Month，按月付费 Dynamic，按需付费（需开启权限) Trial，试用（需开启权限）默认为月付
     *     "Quantity" => (integer) DB购买多少个"计费时间单位"，默认值为1。比如：买2个月，Quantity就是2。如果计费单位是“按月”，并且Quantity为0，表示“购买到月底”
     *     "UseSSD" => (string) 是否使用SSD，只能填true或false，默认为false
     *     "SSDType" => (string) SSD类型，可选值为"SATA"、"PCI-E"，如果UseSSD为true ，则必填
     *     "InstanceMode" => (string) 实例的部署类型。可选值为：Normal: 普通单点实例，Slave: 从库实例,HA: 高可用部署实例，默认是Normal
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 价格 参照UDBInstancePriceSet[
     *         [
     *             "ChargeType" => (string) Year， Month， Dynamic，Trial
     *             "Price" => (integer) 价格，单位为分
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUDBInstancePriceResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_instance_state
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) 实例的Id,该值可以通过DescribeUDBInstance获取
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "State" => (string) DB状态标记 Init：初始化中；Fail：安装失败； Starting：启动中； Running ： 运行 ；Shutdown：关闭中； Shutoff ：已关闭； Delete：已删除； Upgrading：升级中； Promoting： 提升为独库进行中； Recovering： 恢复中； Recover fail：恢复失败。
     * ]
     *
     * @return DescribeUDBInstanceStateResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_instance_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) 实例的Id
     *     "MemoryLimit" => (integer) 内存限制(MB)
     *     "DiskSpace" => (integer) 磁盘空间(GB), 暂时支持20G - 500G
     *     "UseSSD" => (boolean) 是否使用SSD，默认为false
     *     "SSDType" => (string) SSD类型，可选值为"SATA"、"PCI-E"，如果UseSSD为true ，则必选
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (integer) 价格，单位为分
     * ]
     *
     * @return DescribeUDBInstanceUpgradePriceResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_log_backup_url
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DBId" => (string) DB实例Id
     *     "BackupId" => (integer) DB实例备份ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BackupPath" => (string) 备份外网URL
     *     "UsernetPath" => (string) 备份用户网URL
     * ]
     *
     * @return DescribeUDBLogBackupURLResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_log_package
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Offset" => (integer) 分页显示的起始偏移，列表操作则指定
     *     "Limit" => (integer) 分页显示的条目数，列表操作则指定
     *     "Type" => (integer) 需要列出的备份文件类型，每种文件的值如下 2 : BINLOG\_BACKUP 3 : SLOW\_QUERY\_BACKUP 4 : ERRORLOG\_BACKUP
     *     "Types" => (array<integer>) Types作为Type的补充，支持多值传入，可以获取多个类型的日志记录，如：Types.0=2&Types.1=3
     *     "DBId" => (string) DB实例Id，如果指定，则只获取该db的备份信息
     *     "BeginTime" => (integer) 过滤条件:起始时间(时间戳)
     *     "EndTime" => (integer) 过滤条件:结束时间(时间戳)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 备份信息 参见LogPackageDataSet[
     *         [
     *             "BackupId" => (integer) 备份id
     *             "BackupName" => (string) 备份名称
     *             "BackupTime" => (integer) 备份时间
     *             "BackupSize" => (integer) 备份文件大小
     *             "BackupType" => (integer) 备份类型，包括2-binlog备份，3-slowlog备份
     *             "State" => (string) 备份状态 Backuping // 备份中 Success // 备份成功 Failed // 备份失败 Expired // 备份过期
     *             "DBId" => (string) dbid
     *             "DBName" => (string) 对应的db名称
     *             "Zone" => (string) 所在可用区
     *             "BackupZone" => (string) 跨可用区高可用备库所在可用区
     *         ]
     *     ]
     *     "TotalCount" => (integer) 备份总数，如果指定dbid，则是该db备份总数
     * ]
     *
     * @return DescribeUDBLogPackageResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_param_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 分页显示的起始偏移，列表操作则指定
     *     "Limit" => (integer) 分页显示的条目数，列表操作则指定
     *     "GroupId" => (integer) 参数组id，如果指定则获取描述，否则是列表操作，需要 指定Offset/Limit
     *     "IsInUDBC" => (boolean) 是否选取专区中配置
     *     "RegionFlag" => (boolean) 当请求没有填写Zone时，如果指定为true，表示只拉取跨可用区的相关配置文件，否则，拉取所有机房的配置文件（包括每个单可用区和跨可用区）
     *     "ClassType" => (string) 如果未指定GroupId，则可选是否选取特定DB类型的配置(sql, nosql, postgresql, sqlserver)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 参数组列表 参照UDBParamGroupSet[
     *         [
     *             "GroupId" => (integer) 参数组id
     *             "GroupName" => (string) 参数组名称
     *             "DBTypeId" => (string) DB类型id，mysql/mongodb按版本细分各有一个id 目前id的取值范围为[1,7],数值对应的版本如下 1：mysql-5.5，2：mysql-5.1，3：percona-5.5 4：mongodb-2.4，5：mongodb-2.6，6：mysql-5.6 7：percona-5.6
     *             "Description" => (string) 参数组描述
     *             "Modifiable" => (boolean) 参数组是否可修改
     *             "ParamMember" => (array<object>) 参数的键值对表 UDBParamMemberSet[
     *                 [
     *                     "Key" => (string) 参数名称
     *                     "Value" => (string) 参数值
     *                     "ValueType" => (integer) 参数值应用类型，取值范围为{0,10,20,30},各值 代表意义为 0-unknown、10-int、20-string、 30-bool
     *                     "AllowedVal" => (string) 允许的值(根据参数类型，用分隔符表示)
     *                     "ApplyType" => (integer) 参数值应用类型,取值范围为{0,10,20}，各值代表 意义为0-unknown、10-static、20-dynamic
     *                     "Modifiable" => (boolean) 是否可更改，默认为false
     *                     "FormatType" => (integer) 允许值的格式类型，取值范围为{0,10,20}，意义分 别为PVFT_UNKOWN=0,PVFT_RANGE=10, PVFT_ENUM=20
     *                 ]
     *             ]
     *         ]
     *     ]
     *     "TotalCount" => (integer) 参数组总数，列表操作时才会有该参数
     * ]
     *
     * @return DescribeUDBParamGroupResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_splitting_info
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "MasterDBId" => (string) DB实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Zone" => (string) 可用区
     *     "MasterDBId" => (string) DB实例ID
     *     "RWIP" => (string) 读写分离IP
     *     "DelayThreshold" => (integer) 时间阈值
     *     "Port" => (integer) 端口号
     *     "ReadModel" => (string) 读写分离策略
     *     "DBTypeId" => (string) 数据库版本
     *     "RWState" => (string) 读写分离状态
     *     "DataSet" => (array<object>) 读写分离从库信息[
     *         [
     *             "DBId" => (string) DB实例ID
     *             "Role" => (string) 主库/从库
     *             "VirtualIP" => (string) DBIP
     *             "ReadWeight" => (integer) 读写分离比重
     *             "State" => (string) DB状态
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUDBSplittingInfoResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/describe_udb_type
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "BackupZone" => (string) 跨可用区高可用DB的备库所在区域，仅当该可用区支持跨可用区高可用时填入。参见 [可用区列表](../summary/regionlist.html)
     *     "DBClusterType" => (string) DB实例类型，如mysql，sqlserver，mongo，postgresql
     *     "InstanceMode" => (string) 返回支持某种实例类型的DB类型。如果没传，则表示任何实例类型均可。normal:单点,ha:高可用,sharded_cluster:分片集群
     *     "DiskType" => (string) 返回支持某种磁盘类型的DB类型，如Normal、SSD、NVMe_SSD。如果没传，则表示任何磁盘类型均可。
     *     "CompatibleWithDBType" => (string) 返回从备份创建实例时，该版本号所支持的备份创建版本。如果没传，则表示不是从备份创建。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) DB类型列表 参数见 UDBTypeSet[
     *         [
     *             "DBTypeId" => (string) DB类型id，mysql/mongodb按版本细分各有一个id, 目前id的取值范围为[1,7],数值对应的版本如下： 1：mysql-5.5，2：mysql-5.1，3：percona-5.5 4：mongodb-2.4，5：mongodb-2.6，6：mysql-5.6， 7：percona-5.6
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUDBTypeResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/disable_udb_rw_splitting
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "MasterDBId" => (string) DB实例ID（master)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DisableUDBRWSplittingResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/edit_udb_backup_blacklist
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) DB实例Id,该值可以通过DescribeUDBInstance获取
     *     "Blacklist" => (string) 黑名单，规范示例,指定库mysql.%;test.%; 指定表city.address;
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return EditUDBBackupBlacklistResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/enable_udb_rw_splitting
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "MasterDBId" => (string) DB实例ID（主库）
     *     "BackupZone" => (string) 备份的可用区。用于创建跨可用区读写分离的一个节点，跨机房的读写分离必须有这个参数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "MasterDBId" => (string) DB实例ID（主库）
     *     "RWIp" => (string) 读写分离访问IP
     * ]
     *
     * @return EnableUDBRWSplittingResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/extract_udb_param_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。如果RegionFlag=false，必须传，反之，可不传。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "GroupId" => (integer) 配置id
     *     "RegionFlag" => (boolean) 是否跨可用区，RegionFlag为true时表示跨可用区配置文件。如果RegionFlag=true，Zone可以不传，否则Zone必须传。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Content" => (string) 配置文件内容
     * ]
     *
     * @return ExtractUDBParamGroupResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/fetch_udb_instance_earliest_recover_time
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) DB实例Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "EarliestTime" => (integer) 获取最早可回档时间点
     * ]
     *
     * @return FetchUDBInstanceEarliestRecoverTimeResponse
     * @throws UCloudException
     */
    public function fetchUDBInstanceEarliestRecoverTime(FetchUDBInstanceEarliestRecoverTimeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new FetchUDBInstanceEarliestRecoverTimeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUDBInstanceName - 重命名UDB实例
     *
     * See also: https://docs.ucloud.cn/api/udb-api/modify_udb_instance_name
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) 实例的Id,该值可以通过DescribeUDBInstance获取
     *     "Name" => (string) 实例的新名字, 长度要求为6~63位
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUDBInstanceNameResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/modify_udb_instance_password
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) 实例的ID,该值可以通过DescribeUDBInstance获取
     *     "Password" => (string) 实例的新密码
     *     "AccountName" => (string) sqlserver帐号，仅在sqlserver的情况下填该参数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUDBInstancePasswordResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/promote_udb_instance_to_ha
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DBId" => (string) 实例的Id,该值可以通过DescribeUDBInstance获取
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return PromoteUDBInstanceToHAResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/promote_udb_slave
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) 实例的Id,该值可以通过DescribeUDBInstance获取
     *     "IsForce" => (boolean) 是否强制(如果从库落后可能会禁止提升)，默认false 如果落后情况下，强制提升丢失数据
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return PromoteUDBSlaveResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/resize_udb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) 实例的Id
     *     "MemoryLimit" => (integer) 内存限制(MB)，目前支持以下几档 1000M/2000M/4000M/ 6000M/8000M/ 12000M/16000M/ 24000M/32000M/ 48000M/64000M/96000M/128000M/192000M/256000M/320000M。
     *     "DiskSpace" => (integer) 磁盘空间(GB), 暂时支持20G-32T
     *     "UseSSD" => (boolean) 是否使用SSD，默认为true
     *     "SSDType" => (string) SSD类型，可选值为"SATA"、"PCI-E"、“NVMe”，如果UseSSD为true ，则必选
     *     "UDBCId" => (string) 专区的ID，如果有值表示专区中的DB配置升降级
     *     "InstanceType" => (string) UDB数据库机型: "Normal": "标准机型" ,  "SATA_SSD": "SSD机型" , "PCIE_SSD": "SSD高性能机型" ,  "Normal_Volume": "标准大容量机型",  "SATA_SSD_Volume": "SSD大容量机型" ,  "PCIE_SSD_Volume": "SSD高性能大容量机型"，“NVMe_SSD”：“快杰机型”
     *     "InstanceMode" => (string) UDB实例模式类型, 可选值如下: "Normal": 普通版UDB实例 "HA": 高可用版UDB实例 默认是"Normal"
     *     "StartAfterUpgrade" => (boolean) DB关闭状态下升降级，升降级后是否启动DB，默认为false
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ResizeUDBInstanceResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/restart_rw_splitting
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "MasterDBId" => (string) 待关闭读写分离中间键ProxyId
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RestartRWSplittingResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/restart_udb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) 实例的Id,该值可以通过DescribeUDBInstance获取
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RestartUDBInstanceResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/set_udb_rw_splitting
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "MasterDBId" => (string) DB实例ID（master)
     *     "ReadModel" => (string) 读写分离策略
     *     "DBIds" => (array<string>) DBIds.0 代表UDB主节点， DBIds.1 到DBIds.n 代表1到N个从节点
     *     "ReadPercents" => (array<string>) udb主从节点的只读比例。ReadPercents.0代表主节点的只读比例，ReadPercents.1代表从节点1的读写比例， 以此类推
     *     "DelayThreshold" => (integer) 时间阙值
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return SetUDBRWSplittingResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/start_udb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) 实例的Id,该值可以通过DescribeUDBInstance获取
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return StartUDBInstanceResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/stop_udb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) 实例的Id,该值可以通过DescribeUDBInstance获取
     *     "ForceToKill" => (boolean) 是否使用强制手段关闭DB，默认是false
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return StopUDBInstanceResponse
     * @throws UCloudException
     */
    public function stopUDBInstance(StopUDBInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StopUDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SwitchUDBHAToSentinel - UDB高可用实例从HAProxy版本升级为Sentinel版本（不带HAProxy）升级耗时30-70秒
     *
     * See also: https://docs.ucloud.cn/api/udb-api/switch_udb_ha_to_sentinel
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) UDB的实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return SwitchUDBHAToSentinelResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/switch_udb_instance_to_ha
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DBId" => (string) 实例的Id,该值可以通过DescribeUDBInstance获取
     *     "ChargeType" => (string) Year， Month， Dynamic，Trial，不填则按现在单点计费执行
     *     "Quantity" => (string) 购买时长，需要和 ChargeType 搭配使用，否则使用单点计费策略的值
     *     "Tag" => (string) 业务组
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DBId" => (string) 切换后高可用db实例的Id
     * ]
     *
     * @return SwitchUDBInstanceToHAResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/update_udb_instance_backup_strategy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBId" => (string) 主节点的Id
     *     "BackupTime" => (integer) 备份的整点时间，范围[0,23]
     *     "BackupDate" => (string) 备份时期标记位。共7位，每一位为一周中一天的备份情况，0表示关闭当天备份，1表示打开当天备份。最右边的一位为星期天的备份开关，其余从右到左依次为星期一到星期六的备份配置开关，每周必须至少设置两天备份。例如：1100000表示打开星期六和星期五的备份功能
     *     "ForceDump" => (boolean) 当导出某些数据遇到问题后，是否强制导出其他剩余数据默认是false需要同时设置BackupDate字段
     *     "BackupMethod" => (string) 选择默认的备份方式，可选 snapshot 表示使用快照/物理备份，不填或者其它任何值为默认的逻辑备份。需要同时设置BackupDate字段。（注意现在只有SSD 版本的 MySQL实例支持物理备份）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUDBInstanceBackupStrategyResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/update_udb_instance_slave_backup_switch
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "MasterDBId" => (string) 主库的Id
     *     "BackupSwitch" => (integer) 从库的备份开关，范围[0,1],0表示从库备份功能关闭,1 表示从库备份开关打开。
     *     "SlaveDBId" => (string) 从库的Id,如果从库备份开关设定为打开，则必须赋值。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUDBInstanceSlaveBackupSwitchResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/update_udb_param_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "GroupId" => (integer) 配置参数组id，使用DescribeUDBParamGroup获得
     *     "Key" => (string) 参数名称（与Value配合使用）
     *     "Value" => (string) 参数值（与Key配合使用）
     *     "Name" => (string) 配置文件的名字，不传时认为不修改名字，传了则不能为空
     *     "Description" => (string) 配置文件的描述，不传时认为不修改
     *     "RegionFlag" => (boolean) 该配置文件是否是地域级别配置文件，默认是false
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUDBParamGroupResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/upgrade_udb_instance_to_ha
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DBId" => (string) 实例的Id,该值可以通过DescribeUDBInstance获取
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpgradeUDBInstanceToHAResponse
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
     * See also: https://docs.ucloud.cn/api/udb-api/upload_udb_param_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBTypeId" => (string) DB类型id，DB类型id，mysql/mongodb/postgesql按版本细分 1：mysql-5.1，2：mysql-5.5，3：percona-5.5，4：mysql-5.6，5：percona-5.6，6：mysql-5.7，7：percona-5.7，8：mariadb-10.0，9：mongodb-2.4，10：mongodb-2.6，11：mongodb-3.0，12：mongodb-3.2,13：postgresql-9.4，14：postgresql-9.6
     *     "GroupName" => (string) 配置参数组名称
     *     "Description" => (string) 参数组描述
     *     "Content" => (string) 配置内容，导入的配置内容采用base64编码
     *     "RegionFlag" => (boolean) 该配置文件是否是地域级别配置文件，默认是false
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "GroupId" => (integer) 配置参数组id
     * ]
     *
     * @return UploadUDBParamGroupResponse
     * @throws UCloudException
     */
    public function uploadUDBParamGroup(UploadUDBParamGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UploadUDBParamGroupResponse($resp->toArray(), $resp->getRequestId());
    }
}
