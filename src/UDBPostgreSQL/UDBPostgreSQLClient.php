<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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
namespace UCloud\UDBPostgreSQL;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UDBPostgreSQL\Apis\BackupUPgSQLRequest;
use UCloud\UDBPostgreSQL\Apis\BackupUPgSQLResponse;
use UCloud\UDBPostgreSQL\Apis\BackupUPgSQLLogRequest;
use UCloud\UDBPostgreSQL\Apis\BackupUPgSQLLogResponse;
use UCloud\UDBPostgreSQL\Apis\CreateUPgSQLInstanceRequest;
use UCloud\UDBPostgreSQL\Apis\CreateUPgSQLInstanceResponse;
use UCloud\UDBPostgreSQL\Apis\CreateUPgSQLParamTemplateRequest;
use UCloud\UDBPostgreSQL\Apis\CreateUPgSQLParamTemplateResponse;
use UCloud\UDBPostgreSQL\Apis\CreateUPgSQLReadonlyRequest;
use UCloud\UDBPostgreSQL\Apis\CreateUPgSQLReadonlyResponse;
use UCloud\UDBPostgreSQL\Apis\DeleteUPgSQLInstanceRequest;
use UCloud\UDBPostgreSQL\Apis\DeleteUPgSQLInstanceResponse;
use UCloud\UDBPostgreSQL\Apis\DeleteUPgSQLParamTemplateRequest;
use UCloud\UDBPostgreSQL\Apis\DeleteUPgSQLParamTemplateResponse;
use UCloud\UDBPostgreSQL\Apis\DownloadUPgSQLParamTemplateRequest;
use UCloud\UDBPostgreSQL\Apis\DownloadUPgSQLParamTemplateResponse;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLBackupStrategyRequest;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLBackupStrategyResponse;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLBackupURLRequest;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLBackupURLResponse;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLInstanceRequest;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLInstanceResponse;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLInstanceLogRequest;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLInstanceLogResponse;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLInstanceParamRequest;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLInstanceParamResponse;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLInstancePriceRequest;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLInstancePriceResponse;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLParamTemplateRequest;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLParamTemplateResponse;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLUpgradePriceRequest;
use UCloud\UDBPostgreSQL\Apis\GetUPgSQLUpgradePriceResponse;
use UCloud\UDBPostgreSQL\Apis\ListUPgSQLBackupRequest;
use UCloud\UDBPostgreSQL\Apis\ListUPgSQLBackupResponse;
use UCloud\UDBPostgreSQL\Apis\ListUPgSQLInstanceRequest;
use UCloud\UDBPostgreSQL\Apis\ListUPgSQLInstanceResponse;
use UCloud\UDBPostgreSQL\Apis\ListUPgSQLLogRequest;
use UCloud\UDBPostgreSQL\Apis\ListUPgSQLLogResponse;
use UCloud\UDBPostgreSQL\Apis\ListUPgSQLMachineTypeRequest;
use UCloud\UDBPostgreSQL\Apis\ListUPgSQLMachineTypeResponse;
use UCloud\UDBPostgreSQL\Apis\ListUPgSQLParamTemplateRequest;
use UCloud\UDBPostgreSQL\Apis\ListUPgSQLParamTemplateResponse;
use UCloud\UDBPostgreSQL\Apis\ListUPgSQLVersionRequest;
use UCloud\UDBPostgreSQL\Apis\ListUPgSQLVersionResponse;
use UCloud\UDBPostgreSQL\Apis\RestartUPgSQLInstanceRequest;
use UCloud\UDBPostgreSQL\Apis\RestartUPgSQLInstanceResponse;
use UCloud\UDBPostgreSQL\Apis\StartUPgSQLInstanceRequest;
use UCloud\UDBPostgreSQL\Apis\StartUPgSQLInstanceResponse;
use UCloud\UDBPostgreSQL\Apis\StopUPgSQLCreatingReadonlyRequest;
use UCloud\UDBPostgreSQL\Apis\StopUPgSQLCreatingReadonlyResponse;
use UCloud\UDBPostgreSQL\Apis\StopUPgSQLInstanceRequest;
use UCloud\UDBPostgreSQL\Apis\StopUPgSQLInstanceResponse;
use UCloud\UDBPostgreSQL\Apis\UpdateUPgSQLAttributeRequest;
use UCloud\UDBPostgreSQL\Apis\UpdateUPgSQLAttributeResponse;
use UCloud\UDBPostgreSQL\Apis\UpdateUPgSQLBackupStrategyRequest;
use UCloud\UDBPostgreSQL\Apis\UpdateUPgSQLBackupStrategyResponse;
use UCloud\UDBPostgreSQL\Apis\UpdateUPgSQLPasswordRequest;
use UCloud\UDBPostgreSQL\Apis\UpdateUPgSQLPasswordResponse;
use UCloud\UDBPostgreSQL\Apis\UpgradeUPgSQLInstanceRequest;
use UCloud\UDBPostgreSQL\Apis\UpgradeUPgSQLInstanceResponse;
use UCloud\UDBPostgreSQL\Apis\UploadUPgSQLParamTemplateRequest;
use UCloud\UDBPostgreSQL\Apis\UploadUPgSQLParamTemplateResponse;

/**
 * This client is used to call actions of **UDBPostgreSQL** service
 */
class UDBPostgreSQLClient extends Client
{

    /**
     * BackupUPgSQL - 创建备份服务
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/backup_u_pg_sql
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) DB实例Id
     *     "BackupName" => (string) 备份名称
     *     "BackupMethod" => (integer) 使用的备份方式(物理备份，逻辑备份)
     *     "Blacklist" => (string) 备份黑名单列表，以“ ;” 分隔。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BackupID" => (string) 返回的备份ID
     * ]
     *
     * @return BackupUPgSQLResponse
     * @throws UCloudException
     */
    public function backupUPgSQL(BackupUPgSQLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BackupUPgSQLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * BackupUPgSQLLog - 备份日志包
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/backup_u_pg_sql_log
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BackupName" => (string) 备份导出文件名称
     *     "InstanceID" => (string) 资源ID
     *     "LogType" => (string) 日志类型:slowlog(慢日志),errorlog(错误日志),不区分大小写
     *     "BeginTime" => (integer) 日志开始时间
     *     "EndTime" => (integer) 日志结束时间
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return BackupUPgSQLLogResponse
     * @throws UCloudException
     */
    public function backupUPgSQLLog(BackupUPgSQLLogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new BackupUPgSQLLogResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUPgSQLInstance - 创建PG云数据库
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/create_u_pg_sql_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 实例名称，至少6位
     *     "DBVersion" => (string) PostgreSQL的版本，pg10.4:postgresql-10.4，pg13.4:postgresql-13.4
     *     "ParamGroupID" => (integer) DB实例使用的配置参数组id
     *     "AdminPassword" => (string) 管理员密码
     *     "Port" => (integer) 端口默认为5432
     *     "DiskSpace" => (string) 磁盘空间(GB)
     *     "MachineType" => (string) 机器配置类型，2核4G的机器:o.pgsql2m.medium
     *     "SubnetID" => (string) 子网ID
     *     "VPCID" => (string) VPC的ID
     *     "InstanceMode" => (string) UDB实例模式类型, 可选值如下: "Normal": 普通版UDB实例 "HA": 高可用版UDB实例 默认是"Normal"
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "InstanceID" => (string) 资源ID
     * ]
     *
     * @return CreateUPgSQLInstanceResponse
     * @throws UCloudException
     */
    public function createUPgSQLInstance(CreateUPgSQLInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUPgSQLInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUPgSQLParamTemplate - 创建PG参数模板
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/create_u_pg_sql_param_template
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupName" => (string) 模板名称
     *     "SrcGroupID" => (integer) 基准模板
     *     "DBVersion" => (string) 什么版本,以及类型的DB
     *     "Description" => (string) 描述信息
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "GroupID" => (integer) 创建的模板ID
     * ]
     *
     * @return CreateUPgSQLParamTemplateResponse
     * @throws UCloudException
     */
    public function createUPgSQLParamTemplate(CreateUPgSQLParamTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUPgSQLParamTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUPgSQLReadonly - 创建PG从库
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/create_u_pg_sql_readonly
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) Db名称
     *     "Port" => (integer) DB端口
     *     "DiskSpace" => (integer) 磁盘空间
     *     "MachineType" => (string) 机器配置类型，2核4G的机器:o.pgsql2m.medium
     *     "SrcInstanceID" => (string) 同步的源库
     *     "SubnetID" => (string) 子网ID
     *     "VPCID" => (string) VPCID
     *     "Labels" => (array<object>) [
     *         [
     *             "Key" => (string) 用户资源标签的键值
     *             "Value" => (string) 用户资源标签值
     *         ]
     *     ]
     *     "SecGroupId" => (array<object>) [
     *         [
     *             "Id" => (string) 安全组id
     *             "Priority" => (integer) 安全组优先级
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "InstanceID" => (string) 资源ID
     * ]
     *
     * @return CreateUPgSQLReadonlyResponse
     * @throws UCloudException
     */
    public function createUPgSQLReadonly(CreateUPgSQLReadonlyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUPgSQLReadonlyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUPgSQLInstance - 删除PG实例
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/delete_u_pg_sql_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) 实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUPgSQLInstanceResponse
     * @throws UCloudException
     */
    public function deleteUPgSQLInstance(DeleteUPgSQLInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUPgSQLInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUPgSQLParamTemplate - 删除参数模板
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/delete_u_pg_sql_param_template
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupID" => (integer) 模板ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUPgSQLParamTemplateResponse
     * @throws UCloudException
     */
    public function deleteUPgSQLParamTemplate(DeleteUPgSQLParamTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUPgSQLParamTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DownloadUPgSQLParamTemplate - 下载参数模板信息
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/download_u_pg_sql_param_template
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupID" => (integer) 参数模板id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Content" => (string) base64编码过的
     * ]
     *
     * @return DownloadUPgSQLParamTemplateResponse
     * @throws UCloudException
     */
    public function downloadUPgSQLParamTemplate(DownloadUPgSQLParamTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DownloadUPgSQLParamTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUPgSQLBackupStrategy - 获取备份策略
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/get_u_pg_sql_backup_strategy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) DB实例Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BackupTimeRange" => (string) 自动备份预计开始时间范围
     *     "BackupWeek" => (string) 自动备份预期星期几(1~7)开始
     *     "BackupMethod" => (string) 默认的备份方式
     * ]
     *
     * @return GetUPgSQLBackupStrategyResponse
     * @throws UCloudException
     */
    public function getUPgSQLBackupStrategy(GetUPgSQLBackupStrategyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUPgSQLBackupStrategyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUPgSQLBackupURL - 获取备份下载地址
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/get_u_pg_sql_backup_url
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) DB实例Id
     *     "BackupID" => (string) 备份Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BackupPath" => (string) DB实例备份文件公网的地址
     *     "InnerBackupPath" => (string) DB实例备份文件内网的地址
     * ]
     *
     * @return GetUPgSQLBackupURLResponse
     * @throws UCloudException
     */
    public function getUPgSQLBackupURL(GetUPgSQLBackupURLRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUPgSQLBackupURLResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUPgSQLInstance - 获取PG云数据库实例描述
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/get_u_pg_sql_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) 资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (object) DataSet[
     *         "Zone" => (string) DB实例所在可用区
     *         "BackupZone" => (string) 备份所在可用区
     *         "InstanceID" => (string) DB实例id
     *         "Name" => (string) 实例名称
     *         "DBVersion" => (string) DB 版本
     *         "ParamGroupID" => (integer) DB实例使用的配置参数组id
     *         "AdminUser" => (string) 管理员帐户名，默认root
     *         "IP" => (string) DBip
     *         "Port" => (integer) DB port
     *         "VPCID" => (string) VPC的ID
     *         "SubnetID" => (string) 子网ID
     *         "Remark" => (string) 备注
     *         "BackupCount" => (integer) 备份文件保留的数量，默认7次
     *         "BackupBeginTime" => (integer) 备份开始时间，单位小时计，默认3点
     *         "BackupTimeRange" => (integer) 备份的时间段，范围[0,23]
     *         "BackupDate" => (string) 用于设置备份策略的备份日期标记位。共7位,每一位为一周中一天的备份情况 0表示关闭当天备份,1表示打开当天备份。最右边的一位 为星期天的备份开关，其余从右到左依次为星期一到星期 六的备份配置开关，每周必须至少设置两天备份。 例如：1100000 表示打开星期六和星期五的自动备份功能
     *         "State" => (string) DB状态标记 Init：初始化中，Fail：安装失败，Starting：启动中，Running：运行，Shutdown：关闭中，Shutoff：已关闭，Delete：已删除，Upgrading：升级中，Promoting：提升为独库进行中，Recovering：恢复中，Recover fail：恢复失败
     *         "CreateTime" => (integer) DB实例创建时间，采用UTC计时时间戳
     *         "ModifyTime" => (integer) DB实例修改时间，采用UTC计时时间戳
     *         "ExpiredTime" => (integer) DB实例过期时间，采用UTC计时时间戳
     *         "Cpu" => (integer) CPU限制(核)，默认根据配置机型
     *         "MemoryLimit" => (integer) 内存限制(MB)，默认根据配置机型
     *         "DiskSpace" => (integer) 磁盘空间(GB), 默认根据配置机型
     *         "DiskUsedSize" => (number) DB实例磁盘已使用空间，单位GB
     *         "DataFileSize" => (number) DB实例数据文件大小，单位GB
     *         "SystemFileSize" => (number) DB实例系统文件大小，单位GB
     *         "LogFileSize" => (number) DB实例日志文件大小，单位GB
     *         "InstanceMode" => (string) Normal/HA,普通/高可用
     *         "MachineType" => (string) 配置机型名称
     *         "SecGroupStatus" => (integer) 安全组版本
     *     ]
     * ]
     *
     * @return GetUPgSQLInstanceResponse
     * @throws UCloudException
     */
    public function getUPgSQLInstance(GetUPgSQLInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUPgSQLInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUPgSQLInstanceLog - 可以查询DB的错误日志和满查询日志
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/get_u_pg_sql_instance_log
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "LogType" => (string) 日志类型
     *     "CompanyID" => (integer) 公司ID
     *     "AccountID" => (integer) 账户ID
     *     "BeginTime" => (integer) 起始时间，需使用时间戳
     *     "InstanceID" => (string) 实例资源ID
     *     "EndTime" => (integer) 结束时间，需使用时间戳，结束时间需大于起始时间实时查询的时候不需要传
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Log" => (string) 返回的日志信息
     * ]
     *
     * @return GetUPgSQLInstanceLogResponse
     * @throws UCloudException
     */
    public function getUPgSQLInstanceLog(GetUPgSQLInstanceLogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUPgSQLInstanceLogResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUPgSQLInstanceParam - 获取实例参数信息
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/get_u_pg_sql_instance_param
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) 实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (array<object>) 参数的键值对信息[
     *         [
     *             "Key" => (string) 参数Key
     *             "Value" => (string) 参数值
     *             "ValueType" => (integer) 值类型
     *             "AllowedVal" => (string) 允许的值
     *             "ApplyType" => (integer) 允许类型
     *             "Modifiable" => (boolean) 是否可以修改
     *             "FormatType" => (integer) 参数格式类型
     *         ]
     *     ]
     * ]
     *
     * @return GetUPgSQLInstanceParamResponse
     * @throws UCloudException
     */
    public function getUPgSQLInstanceParam(GetUPgSQLInstanceParamRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUPgSQLInstanceParamResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUPgSQLInstancePrice - 获取创建PG云数据库价格
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/get_u_pg_sql_instance_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "MachineType" => (string) 机器配置类型 参考2C4G机器：o.pgsql2m.medium
     *     "DiskSpace" => (integer) 磁盘空间(GB)
     *     "InstanceMode" => (string) UDB实例模式类型, 可选值如下: "Normal": 普通版UDB实例 "HA": 高可用版UDB实例
     *     "ChargeType" => (string) 计费模式。枚举值为： Year，按年付费； Month，按月付费； Dynamic，按小时付费（需开启权限）。默认为月付
     *     "Quantity" => (integer) 购买时长。默认: 1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PriceSet" => (array<object>) 价格列表[
     *         [
     *             "ChargeType" => (string) 计费类型，Year，Month，Dynamic。
     *             "Price" => (number) 实际价格，单位：元，保留小数点后两位有效数字。
     *             "OriginalPrice" => (number) 购买原价，单位：元。
     *         ]
     *     ]
     * ]
     *
     * @return GetUPgSQLInstancePriceResponse
     * @throws UCloudException
     */
    public function getUPgSQLInstancePrice(GetUPgSQLInstancePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUPgSQLInstancePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUPgSQLParamTemplate - 获取模板信息
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/get_u_pg_sql_param_template
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupID" => (integer) 模板ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (array<object>) 参数列表[
     *         [
     *             "Key" => (string) 参数Key
     *             "Value" => (string) 参数值
     *             "ValueType" => (integer) 值类型
     *             "AllowedVal" => (string) 允许的值
     *             "ApplyType" => (integer) 允许类型
     *             "Modifiable" => (boolean) 是否可以修改
     *             "FormatType" => (integer) 参数格式类型
     *         ]
     *     ]
     * ]
     *
     * @return GetUPgSQLParamTemplateResponse
     * @throws UCloudException
     */
    public function getUPgSQLParamTemplate(GetUPgSQLParamTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUPgSQLParamTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUPgSQLUpgradePrice -  获取 PG 云数据库升降级价格
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/get_u_pg_sql_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) 资源ID
     *     "DiskSpace" => (integer) 磁盘空间(GB)
     *     "MachineType" => (string) 机器配置类型
     *     "InstanceMode" => (string) UDB实例模式类型, 可选值如下: "normal": 普通版UDB实例 "ha": 高可用版UDB实例 默认是"normal"
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (number) 规格调整差价。精确到小数点后2位。
     *     "OriginalPrice" => (number) 限时优惠的折前原价
     * ]
     *
     * @return GetUPgSQLUpgradePriceResponse
     * @throws UCloudException
     */
    public function getUPgSQLUpgradePrice(GetUPgSQLUpgradePriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetUPgSQLUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUPgSQLBackup - 获取备份列表
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/list_u_pg_sql_backup
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) DB实例Id
     *     "BackupType" => (integer) 备份类型,默认值是0(0:表示全部,1:自动备份,2:手动备份
     *     "Offset" => (integer) 列表起始位置偏移量，默认为0
     *     "Limit" => (integer) 返回数据长度，默认为20，最大100
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 备份信息列表.修参数[
     *         [
     *             "Region" => (string) 备份所在地域
     *             "InstanceID" => (string) DB实例Id
     *             "BackupID" => (string) 备份id
     *             "BackupName" => (string) 备份名称
     *             "BackupStartTime" => (integer) 备份时间(Unix时间戳)
     *             "BackupSize" => (integer) 备份文件大小(字节)
     *             "BackupType" => (integer) 备份类型，手动或者自动
     *             "State" => (string) 备份状态 (Backuping：备份中,Success:备份成功, Failed:备份失败, Expired:备份过期)
     *             "BackupEndTime" => (integer) 备份完成时间(Unix时间戳)
     *         ]
     *     ]
     *     "TotalCount" => (integer) 总个数
     * ]
     *
     * @return ListUPgSQLBackupResponse
     * @throws UCloudException
     */
    public function listUPgSQLBackup(ListUPgSQLBackupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUPgSQLBackupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUPgSQLInstance - 获取PG云数据库列表
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/list_u_pg_sql_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 数据库信息列表[
     *         [
     *             "Zone" => (string) 可用区
     *             "InstanceID" => (string) 资源ID
     *             "Name" => (string) 实例名称
     *             "DBVersion" => (string) 实例的版本，包括postgresql-10.4,postgresql-13.4
     *             "InstanceMode" => (string) normal/ha/readonly,普通/高可用/只读从库
     *             "State" => (string) 实例状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中， Running：运行，Stopping：关闭中，Stopped：已关闭,Deleted: 已删除，Upgrading: 升级中 ，Promoting：提升为主库进行中，Recovering：恢复中，RecoverFailed：恢复失败，StartFailed：启动失败，ShutdownFailed：关闭失败，Deleting：删除中，DeleteFailed：删除失败
     *             "MachineType" => (string) 机器规格，格式为nCmG,n代表cpu核数，m代表内存大小(GB)
     *             "VPCID" => (string) VPC的ID
     *             "SubnetID" => (string) 子网ID
     *             "CreateTime" => (integer) DB实例创建时间，采用UTC计时时间戳
     *             "ExpiredTime" => (integer) DB实例过期时间，采用UTC计时时间戳
     *             "IP" => (string) DB实例ip
     *             "Remark" => (string) 备注
     *             "DataSet" => (array<object>) 从库列表[
     *                 [
     *                     "Zone" => (string) 可用区
     *                     "InstanceID" => (string) 资源ID
     *                     "Name" => (string) 实例名称
     *                     "DBVersion" => (string) 实例的版本，包括postgresql-10.4,postgresql-13.4
     *                     "InstanceMode" => (string) normal/ha/readonly,普通/高可用/只读从库
     *                     "State" => (string) 实例状态标记 Initing：初始化中，InitFailed：安装失败，Starting：启动中， Running：运行，Stopping：关闭中，Stopped：已关闭,Deleted: 已删除，Upgrading: 升级中 ，Promoting：提升为主库进行中，Recovering：恢复中，RecoverFailed：恢复失败，StartFailed：启动失败，ShutdownFailed：关闭失败，Deleting：删除中，DeleteFailed：删除失败
     *                     "MachineType" => (string) 机器规格，格式为nCmG,n代表cpu核数，m代表内存大小(GB)
     *                     "VPCID" => (string) VPC的ID
     *                     "SubnetID" => (string) 子网ID
     *                     "CreateTime" => (integer) DB实例创建时间，采用UTC计时时间戳
     *                     "ExpiredTime" => (integer) DB实例过期时间，采用UTC计时时间戳
     *                     "IP" => (string) DB实例ip
     *                     "Remark" => (string) 备注
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return ListUPgSQLInstanceResponse
     * @throws UCloudException
     */
    public function listUPgSQLInstance(ListUPgSQLInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUPgSQLInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUPgSQLLog - 获取数据库日志
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/list_u_pg_sql_log
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BeginTime" => (integer) 查询的日志开始的时间戳
     *     "EndTime" => (integer) 查询日志的结束时间戳
     *     "InstanceID" => (string) 资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 数据库日志信息列表[
     *         [
     *             "BeginTime" => (integer)
     *             "EndTime" => (integer)
     *             "Name" => (string)
     *             "Size" => (integer)
     *         ]
     *     ]
     * ]
     *
     * @return ListUPgSQLLogResponse
     * @throws UCloudException
     */
    public function listUPgSQLLog(ListUPgSQLLogRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUPgSQLLogResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUPgSQLMachineType - 获取UPgSQL支持机器类型列表
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/list_u_pg_sql_machine_type
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) [
     *         [
     *             "ID" => (string) 机器类型ID
     *             "Description" => (string) 格式为nCmG,n代表cpu核数，m代表内存大小(GB)
     *             "Cpu" => (integer) cpu核数
     *             "Memory" => (integer) 内存用量(GB)
     *             "Os" => (string) 机器类型，N/O
     *         ]
     *     ]
     * ]
     *
     * @return ListUPgSQLMachineTypeResponse
     * @throws UCloudException
     */
    public function listUPgSQLMachineType(ListUPgSQLMachineTypeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUPgSQLMachineTypeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUPgSQLParamTemplate - 获取可用参数模板列表
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/list_u_pg_sql_param_template
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 偏移量, 默认是0,100
     *     "Count" => (integer) 总数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Data" => (array<object>) 参数模板信息[
     *         [
     *             "GroupID" => (integer) 参数模板ID
     *             "GroupName" => (string) 参数模板名称
     *             "DBVersion" => (string) 应用的DB版本
     *             "Description" => (string) 描述信息
     *             "Modifiable" => (boolean) 是否可以修改
     *             "ParamGroupTypeName" => (string) 模板组类型名称
     *         ]
     *     ]
     * ]
     *
     * @return ListUPgSQLParamTemplateResponse
     * @throws UCloudException
     */
    public function listUPgSQLParamTemplate(ListUPgSQLParamTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUPgSQLParamTemplateResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUPgSQLVersion - 获取UPgSQL支持版本列表
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/list_u_pg_sql_version
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) postgresql版本信息[
     *         [
     *             "DBVersion" => (string) PgSQL版本
     *             "Available" => (string) 2位二进制控制是否开放单点和高可用，前一位控制单点是否开放，后一位控制高可用，例如"01"代表只开放高可用，"10"代表只开放单点，"11"代表全开放
     *         ]
     *     ]
     * ]
     *
     * @return ListUPgSQLVersionResponse
     * @throws UCloudException
     */
    public function listUPgSQLVersion(ListUPgSQLVersionRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUPgSQLVersionResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RestartUPgSQLInstance - 重启PG实例
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/restart_u_pg_sql_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) 实例ID
     *     "RestartHost" => (boolean) 是否一并重启主机
     *     "ForceToRestart" => (boolean) 是否强制重启
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RestartUPgSQLInstanceResponse
     * @throws UCloudException
     */
    public function restartUPgSQLInstance(RestartUPgSQLInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RestartUPgSQLInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StartUPgSQLInstance - 启动 PG实例
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/start_u_pg_sql_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) 实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return StartUPgSQLInstanceResponse
     * @throws UCloudException
     */
    public function startUPgSQLInstance(StartUPgSQLInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StartUPgSQLInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StopUPgSQLCreatingReadonly - 停止创建从库
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/stop_u_pg_sql_creating_readonly
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) 停止创建从库
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return StopUPgSQLCreatingReadonlyResponse
     * @throws UCloudException
     */
    public function stopUPgSQLCreatingReadonly(StopUPgSQLCreatingReadonlyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StopUPgSQLCreatingReadonlyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StopUPgSQLInstance - 关闭PG实例
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/stop_u_pg_sql_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) 实例ID
     *     "StopHost" => (boolean) 是否将主机一并关闭
     *     "ForceToStop" => (boolean) 是否强制关闭
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return StopUPgSQLInstanceResponse
     * @throws UCloudException
     */
    public function stopUPgSQLInstance(StopUPgSQLInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new StopUPgSQLInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUPgSQLAttribute - 更新数据库属性
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/update_u_pg_sql_attribute
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) DB实例Id
     *     "Name" => (string) 新的db名字(不能为空字符串)
     *     "Remark" => (string) 新的备注信息
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUPgSQLAttributeResponse
     * @throws UCloudException
     */
    public function updateUPgSQLAttribute(UpdateUPgSQLAttributeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUPgSQLAttributeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUPgSQLBackupStrategy - 修改备份策略
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/update_u_pg_sql_backup_strategy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) DB实例Id
     *     "BackupTimeRange" => (string) 自动备份预计开始时间范围(00:00~23:59)，例如:(3:00~4:00)
     *     "BackupWeek" => (string) 自动备份预期星期几(1~7)开始。默认1,2,3,4,5,6,7(星期一到星期日)
     *     "BackupMethod" => (string) 选择默认的备份方式
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUPgSQLBackupStrategyResponse
     * @throws UCloudException
     */
    public function updateUPgSQLBackupStrategy(UpdateUPgSQLBackupStrategyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUPgSQLBackupStrategyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateUPgSQLPassword - 更新数据库用户密码
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/update_u_pg_sql_password
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) DB实例Id
     *     "Password" => (string) 新的db用户密码
     *     "Name" => (string) 数据库用户的名称。默认是root
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateUPgSQLPasswordResponse
     * @throws UCloudException
     */
    public function updateUPgSQLPassword(UpdateUPgSQLPasswordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateUPgSQLPasswordResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpgradeUPgSQLInstance - 硬件规格升降级
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/upgrade_u_pg_sql_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceID" => (string) 资源ID
     *     "DiskSpace" => (integer) 磁盘空间(GB)
     *     "MachineType" => (string) 机器配置类型
     *     "InstanceMode" => (string) 数据库类型（ha:高可用类型，normal：普通类型，readonly：从库）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpgradeUPgSQLInstanceResponse
     * @throws UCloudException
     */
    public function upgradeUPgSQLInstance(UpgradeUPgSQLInstanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpgradeUPgSQLInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UploadUPgSQLParamTemplate - 上传参数模板
     *
     * See also: https://docs.ucloud.cn/api/udbpostgresql-api/upload_u_pg_sql_param_template
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupName" => (string) 模板名称
     *     "DBVersion" => (string) 应用的DB版本
     *     "Content" => (string) base64编码过的
     *     "Description" => (string) 模板描述
     *     "ParamGroupType" => (string) 版本
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "GroupID" => (integer) 生成的模板ID
     * ]
     *
     * @return UploadUPgSQLParamTemplateResponse
     * @throws UCloudException
     */
    public function uploadUPgSQLParamTemplate(UploadUPgSQLParamTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UploadUPgSQLParamTemplateResponse($resp->toArray(), $resp->getRequestId());
    }
}
