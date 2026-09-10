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
namespace UCloud\UMem;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UMem\Apis\CheckUDredisSpaceAllowanceRequest;
use UCloud\UMem\Apis\CheckUDredisSpaceAllowanceResponse;
use UCloud\UMem\Apis\CheckURedisAllowanceRequest;
use UCloud\UMem\Apis\CheckURedisAllowanceResponse;
use UCloud\UMem\Apis\CreateScanHotBigKeysRequest;
use UCloud\UMem\Apis\CreateScanHotBigKeysResponse;
use UCloud\UMem\Apis\CreateUDRedisUhproxyRequest;
use UCloud\UMem\Apis\CreateUDRedisUhproxyResponse;
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
use UCloud\UMem\Apis\DeleteUDRedisProxyRequest;
use UCloud\UMem\Apis\DeleteUDRedisProxyResponse;
use UCloud\UMem\Apis\DeleteUMemSpaceRequest;
use UCloud\UMem\Apis\DeleteUMemSpaceResponse;
use UCloud\UMem\Apis\DeleteUMemcacheGroupRequest;
use UCloud\UMem\Apis\DeleteUMemcacheGroupResponse;
use UCloud\UMem\Apis\DeleteURedisGroupRequest;
use UCloud\UMem\Apis\DeleteURedisGroupResponse;
use UCloud\UMem\Apis\DescribeUDRedisProxyClientListRequest;
use UCloud\UMem\Apis\DescribeUDRedisProxyClientListResponse;
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
use UCloud\UMem\Apis\ModifyUMemPasswordRequest;
use UCloud\UMem\Apis\ModifyUMemPasswordResponse;
use UCloud\UMem\Apis\ModifyUMemSpaceNameRequest;
use UCloud\UMem\Apis\ModifyUMemSpaceNameResponse;
use UCloud\UMem\Apis\ModifyURedisConfigRequest;
use UCloud\UMem\Apis\ModifyURedisConfigResponse;
use UCloud\UMem\Apis\ModifyURedisGroupNameRequest;
use UCloud\UMem\Apis\ModifyURedisGroupNameResponse;
use UCloud\UMem\Apis\ModifyURedisGroupPasswordRequest;
use UCloud\UMem\Apis\ModifyURedisGroupPasswordResponse;
use UCloud\UMem\Apis\RegisterUMemDefragRequest;
use UCloud\UMem\Apis\RegisterUMemDefragResponse;
use UCloud\UMem\Apis\RemoveUDRedisDataRequest;
use UCloud\UMem\Apis\RemoveUDRedisDataResponse;
use UCloud\UMem\Apis\ResizeUDRedisBlockSizeRequest;
use UCloud\UMem\Apis\ResizeUDRedisBlockSizeResponse;
use UCloud\UMem\Apis\ResizeUMemSpaceRequest;
use UCloud\UMem\Apis\ResizeUMemSpaceResponse;
use UCloud\UMem\Apis\ResizeUMemcacheGroupRequest;
use UCloud\UMem\Apis\ResizeUMemcacheGroupResponse;
use UCloud\UMem\Apis\ResizeURedisGroupRequest;
use UCloud\UMem\Apis\ResizeURedisGroupResponse;
use UCloud\UMem\Apis\ResizeUhproxyRequest;
use UCloud\UMem\Apis\ResizeUhproxyResponse;
use UCloud\UMem\Apis\RestartUMemcacheGroupRequest;
use UCloud\UMem\Apis\RestartUMemcacheGroupResponse;
use UCloud\UMem\Apis\RestartURedisGroupRequest;
use UCloud\UMem\Apis\RestartURedisGroupResponse;
use UCloud\UMem\Apis\UpdateURedisBackupStrategyRequest;
use UCloud\UMem\Apis\UpdateURedisBackupStrategyResponse;
use UCloud\UMem\Apis\UpdateURedisRewriteTimeRequest;
use UCloud\UMem\Apis\UpdateURedisRewriteTimeResponse;

/**
 * This client is used to call actions of **UMem** service
 */
class UMemClient extends Client
{

    /**
     * CheckUDredisSpaceAllowance - 检查高性能UMem剩余资源，以及分片扩容前的资源预检查
     *
     * See also: https://docs.ucloud.cn/api/umem-api/check_udredis_space_allowance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Size" => (integer) 创建实例的容量大小,，扩容时的分片目标容量大小
     *     "Count" => (string) 创建实例的数量，[1-10]
     *     "GroupId" => (string) 资源ID，扩缩容时的必传参数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Count" => (integer) 创建实例资源时，表示可创建的数量；扩容资源时，返回1表示可以扩容，0表示可用区资源不足不能扩容
     * ]
     *
     * @return CheckUDredisSpaceAllowanceResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/check_uredis_allowance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 创建实例的容量大小, 单位:GB 目前仅支持1/2/4/8/16/32六种规格；扩缩容时，表示实例的目标资源大小
     *     "Count" => (integer) 创建实例的数量，[1-10]
     *     "Protocol" => (string)
     *     "RegionFlag" => (boolean) 是否是跨机房URedis(默认false)
     *     "GroupId" => (string) 资源ID，扩容实例资源时的必传参数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Count" => (integer) 创建实例资源时，表示可创建的数量；扩容资源时，返回1表示可以扩容，0表示可用区资源不足不能扩容
     * ]
     *
     * @return CheckURedisAllowanceResponse
     * @throws UCloudException
     */
    public function checkURedisAllowance(CheckURedisAllowanceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CheckURedisAllowanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateScanHotBigKeys - 创建执行扫大key和热key的任务
     *
     * See also: https://docs.ucloud.cn/api/umem-api/create_scan_hot_big_keys
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 资源id
     *     "Type" => (string) 任务类型。"ScanBigKeys"：扫大key，"ScanHotKeys"：扫热key
     *     "SpaceId" => (string) 分布式资源ID
     *     "IsRetry" => (boolean) 是否要重试任务，如果是的话，TaskId必填
     *     "TaskId" => (string) 要重试的任务id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return CreateScanHotBigKeysResponse
     * @throws UCloudException
     */
    public function createScanHotBigKeys(CreateScanHotBigKeysRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateScanHotBigKeysResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUDRedisUhproxy - 添加分布式Redis代理
     *
     * See also: https://docs.ucloud.cn/api/umem-api/create_ud_redis_uhproxy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) UMem内存空间ID
     *     "CPU" => (integer) 代理核数
     *     "Port" => (integer) 代理端口, 默认为 6379
     *     "ProxyCnt" => (integer) 代理个数
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ResourceId" => (string) 代理资源id
     * ]
     *
     * @return CreateUDRedisUhproxyResponse
     * @throws UCloudException
     */
    public function createUDRedisUhproxy(CreateUDRedisUhproxyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUDRedisUhproxyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUMemBackup - 创建分布式redis备份
     *
     * See also: https://docs.ucloud.cn/api/umem-api/create_umem_backup
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) 资源id
     *     "BackupName" => (string) 请求创建备份的名称 (范围[6-63],只能包含英文、数字以及符号-和_)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BackupId" => (string) 备份Id
     * ]
     *
     * @return CreateUMemBackupResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/create_umem_space
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 内存大小, 单位:GB, 范围[1~1024]
     *     "Name" => (string) 空间名称,长度(6<=size<=63)
     *     "Protocol" => (string) 协议:memcache, redis (默认redis).注意:redis无single类型
     *     "Type" => (string) 空间类型:single(无热备),double(热备)(默认: double)
     *     "ChargeType" => (string) Year , Month, Dynamic 默认: Month
     *     "Quantity" => (integer) 购买时长 默认: 1
     *     "VPCId" => (string) VPC的ID
     *     "SubnetId" => (string) 子网ID
     *     "Tag" => (string) 业务组名称
     *     "Password" => (string) URedis密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，举例如下：# echo -n Password1 | base64UGFzc3dvcmQx。
     *     "SlaveZone" => (string) 跨机房UDRedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     *     "BlockCnt" => (integer) 分片个数
     *     "ClusterMode" => (string) "RWMode"：表示创建读写分离版本;其他为创建普通版本
     *     "Version" => (string) 分布式分片版本（默认版本是4.0，其他版本见DescribeUDRedisBlockVersion）
     *     "HighPerformance" => (boolean) 是否创建性能增强性。默认为false，或者不填，填true为性能增强型。
     *     "ProxySize" => (integer) 分布式代理CPU核数，不填或者传0时默认不创建代理
     *     "UlbMode" => (boolean) 是否创建负载均衡型分布式代理，true时表示创建负载均衡型代理
     *     "Port" => (integer) 分片端口, 默认为 6379
     *     "ProxyPort" => (integer) 代理端口, 默认为 6379
     *     "BackupId" => (string) 备份ID，选择从该备份新建集群
     *     "SpaceId" => (string) 集群ID，选择某个备份创建时，需要填写源集群ID
     *     "RollbackSpaceId" => (string) 如果是通过回档创建，该实例ID不为空
     *     "RollbackTime" => (integer) 要回档的时间戳
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SpaceId" => (string) 创建内存空间ID列表
     * ]
     *
     * @return CreateUMemSpaceResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/create_umem_cache_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Name" => (string) 请求创建组的名称 范围[6-60]
     *     "Size" => (integer) 每个节点的内存大小,单位GB,默认1GB 目前仅支持1/2/4/8/16/32这几档
     *     "ConfigId" => (string) 配置ID,目前仅支持默认配置id 默认配置id:"9a891891-c245-4b66-bce8-67e59430d67c"
     *     "Version" => (string) Memcache版本信息,默认为1.4.31
     *     "ChargeType" => (string) 计费模式，Year , Month, Dynamic 默认: Month
     *     "Quantity" => (integer) 购买时长，默认为1
     *     "Tag" => (string) 业务组 默认：Default
     *     "Protocol" => (string)
     *     "CouponId" => (string) 代金券ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "GroupId" => (string) 创建的组ID
     * ]
     *
     * @return CreateUMemcacheGroupResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/create_uredis_backup
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 资源id
     *     "BackupName" => (string) 请求创建组的名称 (范围[6-63],只能包含英文、数字以及符号-和_)
     *     "SlaveZone" => (string) 跨机房URedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BackupId" => (string) 备份id
     * ]
     *
     * @return CreateURedisBackupResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/create_uredis_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Name" => (string) 请求创建组的名称 (范围[6-63],只能包含英文、数字以及符号-和_)
     *     "HighAvailability" => (string) 是否开启高可用,enable或disable
     *     "Size" => (integer) 每个节点的内存大小,单位GB,默认1GB,目前仅支持1/2/4/8/16/32,六种
     *     "AutoBackup" => (string) 是否自动备份,enable或disable，默认disable
     *     "BackupTime" => (integer) 自动备份开始时间,范围[0-23],默认3点
     *     "ConfigId" => (string) 配置ID,目前支持 4.0版本配置ID:"6c9298a3-9d7f-428c-b1d0-e87ab3b8a1ea", 5.0版本配置ID:"3cdeeb90-dcbf-46e8-95cd-a05d8860a22c",6.0版本配置ID:"1d990520-aac8-4e0f-9384-f58611e8eb28",7.0版本配置ID:"48dcf534-db41-11ec-a1a6-52670028d520",默认版本4.0,从备份创建为必传项
     *     "Version" => (string) Redis版本信息(详见DescribeURedisVersion返回结果),默认版本4.0
     *     "ChargeType" => (string) 计费模式，Year , Month, Dynamic 默认: Month
     *     "Quantity" => (integer) 购买时长，默认为1
     *     "Tag" => (string) 业务组名称
     *     "Password" => (string) 初始化密码,需要 base64 编码
     *     "BackupId" => (string) 有此项代表从备份中创建，无代表正常创建
     *     "SlaveZone" => (string) 跨机房URedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     *     "MasterGroupId" => (string) Master Redis Group的ID，创建只读Slave时，必须填写
     *     "EnableIpV6" => (boolean) 【即将下线,请勿使用】是否创建使用ipv6 资源， 默认为false， 或者不填， 创建ipv6为true
     *     "SubnetId" => (string) 子网ID
     *     "VPCId" => (string) VPC的ID
     *     "HighPerformance" => (boolean) 是否创建高性能Redis， 默认为false， 或者不填， 创建高性能为true
     *     "Port" => (integer) 端口
     *     "RollbackGroupId" => (string) 如果是通过回档创建实例，需要传回档实例的GroupId
     *     "AOFID" => (string) 回档的AOF文件ID
     *     "RollbackTime" => (integer) 回档时间点
     *     "CouponId" => (string) 代金券ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "GroupId" => (string) 创建的组ID
     * ]
     *
     * @return CreateURedisGroupResponse
     * @throws UCloudException
     */
    public function createURedisGroup(CreateURedisGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateURedisGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUDRedisProxy - 删除分布式Redis代理
     *
     * See also: https://docs.ucloud.cn/api/umem-api/delete_ud_redis_proxy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) 分布式Redis资源ID
     *     "ProxyId" => (string) 代理id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUDRedisProxyResponse
     * @throws UCloudException
     */
    public function deleteUDRedisProxy(DeleteUDRedisProxyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUDRedisProxyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUMemSpace - 删除UMem内存空间
     *
     * See also: https://docs.ucloud.cn/api/umem-api/delete_umem_space
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) UMem内存空间ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUMemSpaceResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/delete_umem_cache_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 组ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUMemcacheGroupResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/delete_uredis_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 组ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteURedisGroupResponse
     * @throws UCloudException
     */
    public function deleteURedisGroup(DeleteURedisGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteURedisGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUDRedisProxyClientList - 查询分布式代理客户端连接信息
     *
     * See also: https://docs.ucloud.cn/api/umem-api/describe_ud_redis_proxy_client_list
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) 分布式Redis集群id
     *     "ProxyId" => (string) 分布式Redis代理Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Count" => (integer) 连接数
     *     "ProxyClientList" => (array<object>) 代理连接信息[
     *         [
     *             "Ip" => (string) 客户端Ip
     *             "ConnCnt" => (integer) 该客户端Ip连接数量
     *         ]
     *     ]
     *     "Time" => (integer) 连接获取时间
     * ]
     *
     * @return DescribeUDRedisProxyClientListResponse
     * @throws UCloudException
     */
    public function describeUDRedisProxyClientList(DescribeUDRedisProxyClientListRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDRedisProxyClientListResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUDRedisProxyInfo - 拉取udredis所有的代理信息
     *
     * See also: https://docs.ucloud.cn/api/umem-api/describe_ud_redis_proxy_info
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) udredis实例id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 代理数据集[
     *         [
     *             "ResourceId" => (string) 代理资源id
     *             "ProxyId" => (string) 代理id
     *             "Vip" => (string) 代理ip
     *             "State" => (string) 代理状态 [PROXY_CREATING:创建中, PROXY_NORMAL:正常运行, PROXY_FAILED:创建失败, PROXY_CLOSED:关闭, PROXY_INIT_RESIZE:初始化核数调整, PROXY_WAIT_RESIZE:等待核数调整, PROXY_RESIZING:核数调整中, PROXY_RESIZE_ERROR:核数调整失败]
     *             "CPU" => (integer) 代理CPU核数
     *             "ProxyType" => (integer) 0 : 物理机版分布式代理, 1: NVME(或SSD)版分布式代理
     *             "PublicIp" => (string) 开启外网状态下的外网IP，否则为空
     *             "SupportReadOnly" => (boolean) 代理是否支持设置为只读
     *             "ReadOnly" => (boolean) 代理是否为只读
     *             "ReadMode" => (string) 读写分离策略, "Custom": 用户自定义节点权重， "Uniform": 包括主节点在内的所有节点平均读请求， "ReadOnly": 读请求均分至只读节点
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUDRedisProxyInfoResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_ud_redis_slowlog
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "InstanceId" => (string)  实例id
     *     "ProxyId" => (string) 代理Id
     *     "Limit" => (integer) 分页显示的条目数，默认为10
     *     "SpaceId" => (string) 分布式资源Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 总条目数
     *     "DataSet" => (array<object>) 条目数据[
     *         [
     *             "StartTime" => (integer) 查询发生的时间
     *             "SpendTime" => (integer) 查询消耗的时间
     *             "Command" => (string) 查询命令
     *             "BlockId" => (string) 分片id
     *             "Client" => (string) 慢日志的的客户信息
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUDRedisSlowlogResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_umem
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Protocol" => (string) 协议类型: memcache, redis
     *     "Offset" => (integer) 分页显示的起始偏移, 默认值为0
     *     "Limit" => (integer) 分页显示的条目数, 默认值为20
     *     "ResourceId" => (string) 资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 根据过滤条件得到的总数
     *     "DataSet" => (array<object>) UMem实例列表, 详细参见UMemDataSet[
     *         [
     *             "Zone" => (string) 实例所在可用区，或者master redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *             "OwnSlave" => (string) 是否拥有只读Slave“Yes” 包含“No” 不包含
     *             "DataSet" => (array<object>) UMEM实例列表 UMemSlaveDataSet 如果没有slave，则没有该字段[
     *                 [
     *                     "Zone" => (string) 实例所在可用区，或者master redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *                     "SubnetId" => (string) 子网
     *                     "VPCId" => (string) vpc
     *                     "VirtualIP" => (string)
     *                     "RewriteTime" => (integer) 主备Redis返回运维时间 0//0点 1 //1点 以此类推
     *                     "MasterGroupId" => (string) 主实例id
     *                     "GroupId" => (string) 资源id
     *                     "Port" => (integer) 端口
     *                     "MemorySize" => (integer) 实力大小
     *                     "GroupName" => (string) 资源名称
     *                     "Role" => (string) 表示实例是主库还是从库,master,slave
     *                     "ModifyTime" => (integer) 修改时间
     *                     "Name" => (string) 资源名称
     *                     "CreateTime" => (integer) 创建时间
     *                     "ExpireTime" => (integer) 到期时间
     *                     "Size" => (integer) 容量单位GB
     *                     "UsedSize" => (integer) 使用量单位MB
     *                     "State" => (string) 实例状态                                  Starting                  // 创建中       Creating                  // 初始化中     CreateFail                // 创建失败     Fail                      // 创建失败     Deleting                  // 删除中       DeleteFail                // 删除失败     Running                   // 运行         Resizing                  // 容量调整中   ResizeFail                // 容量调整失败 Configing                 // 配置中       ConfigFail                // 配置失败Restarting                // 重启中SetPasswordFail  //设置密码失败
     *                     "ChargeType" => (string) 计费模式，Year, Month, Dynamic, Trial
     *                     "Tag" => (string) 业务组名称
     *                     "ResourceType" => (string) distributed: 分布式版Redis,或者分布式Memcache；single：主备版Redis,或者单机Memcache；performance：高性能版
     *                     "ConfigId" => (string) 节点的配置ID
     *                     "Version" => (string) Redis版本信息
     *                     "DefaultConfigId" => (string) 是否是默认配置文件；true表示默认；false表示非默认
     *                     "HasPassword" => (boolean) 实例是否设置密码
     *                     "UDACEnable" => (boolean) 实例是否有加入到自治中心
     *                 ]
     *             ]
     *             "Role" => (string) 表示实例是主库还是从库,master,slave仅主备redis返回该项参数
     *             "RewriteTime" => (integer) 主备redis和分布式redis运维时间0  //0点1  //1点以此类推单机版memcache不返回该项
     *             "VPCId" => (string) vpc
     *             "SubnetId" => (string) 子网
     *             "ResourceId" => (string) 资源ID
     *             "Name" => (string) 资源名称
     *             "CreateTime" => (integer) 创建时间
     *             "ExpireTime" => (integer) 到期时间
     *             "Type" => (string) 空间类型:single(无热备),double(热备)
     *             "Protocol" => (string) 协议类型: memcache, redis
     *             "Size" => (integer) 容量单位GB
     *             "UsedSize" => (integer) 使用量单位MB
     *             "State" => (string) 实例状态Starting                     // 创建中Creating                    // 初始化中Deleting                    // 删除中CreateFail                 // 创建失败DeleteFail                 // 删除失败Resizing                   // 容量调整中ResizeFail                // 容量调整失败Disasting                 // 容灾中Running                   // 运行SetPassword           // 设置密码SetPasswordFail     // 设置密码失败ISolation                  // 关闭Replicating              // 同步中ReplicateDone        //  数据同步完成ExecTimeout           // 待重试SlaveRecovering     // 备库恢复中ReplicateFail           // 同步失败DelayUpgrade         // 待扩容迁移 VersionUpgrading   // 升级中VersionUpgradeFail // 升级失败UpgradeMemInit     // 任务初始化ClusterUpgrading    // 规格调整中SSLSwitching         // 修改TLS中SSLSwitchFail        // 修改TLS失败
     *             "ChargeType" => (string) 计费模式，Year, Month, Dynamic, Trial
     *             "Address" => (array<object>) IP端口信息请，参见UMemSpaceAddressSet[
     *                 [
     *                     "IP" => (string) UMem实例内网访问IP
     *                     "PrivateDomain" => (string) UMem实例内网访问域名地址，未开启状态下返回为空
     *                     "PublicIp" => (string) 开启外网状态下外网IP，否则为空
     *                     "Port" => (integer) UMem实例访问Port
     *                 ]
     *             ]
     *             "Tag" => (string) 业务组名称
     *             "ResourceType" => (string) distributed: 分布式版Redis,或者分布式Memcache；single：主备版Redis,或者单机Memcache；performance：高性能版
     *             "ConfigId" => (string) 节点的配置ID
     *             "AutoBackup" => (string) 是否需要自动备份,enable,disable
     *             "BackupTime" => (integer) 自动备份开始时间,单位小时计,范围[0-23]
     *             "HighAvailability" => (string) 是否开启高可用,enable,disable
     *             "Version" => (string) Redis版本信息
     *             "SlaveZone" => (string) 跨机房URedis，slave redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *             "ProxyName" => (string) URedis是否开启读写分离
     *             "ProductType" => (integer) 判断后端是否快杰资源（非快杰:  0或者1   快杰:  2或者3）
     *             "DefaultConfigId" => (string) 是否是默认配置文件，true表示默认；false表示非默认
     *             "IsHighPerformance" => (boolean) 是否是高性能Redis，true表示是；false表示否
     *             "SupportAofRollback" => (boolean) 实例是否支持回档
     *             "AofRollbackEnable" => (boolean) 实例是否开启了回档
     *             "IsRWMode" => (boolean) 是否是读写分离
     *             "SSLVersion" => (string) SSL版本
     *             "SSLEnable" => (boolean) 实例是否开启SSL
     *             "SSLCertExpireTime" => (integer) 证书过期时间
     *             "SecPolicy" => (integer) 安全策略。1:内网隔离，2:加密通信，3:内网隔离+加密通信
     *             "HasPassword" => (boolean) 实例是否设置密码
     *             "UDACEnable" => (boolean) 实例是否有加入到自治中心
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUMemResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_umem_backup
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) 资源id
     *     "Offset" => (integer) 分页显示的起始偏移, 默认值为0
     *     "Limit" => (integer) 分页显示的条目数, 默认值为10
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 分布式redis 备份，数组的每个元素为每个分片的备份[
     *         [
     *             "BackupName" => (string) 备份名称
     *             "CreateTime" => (integer) 创建时间
     *             "State" => (string) Starting:备份中 Done:完成
     *             "BackupId" => (string) 空间的备份ID
     *             "BackupType" => (string) 备份类型: auto(自动) ,manual(手动)
     *             "BlockCount" => (integer) 本次备份，分片的数量
     *             "BlockSize" => (integer) 备份大小
     *         ]
     *     ]
     *     "TotalCount" => (integer) 备份总数
     * ]
     *
     * @return DescribeUMemBackupResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_umem_backup_url
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) 资源id
     *     "BackupId" => (string) 备份Id
     *     "BlockId" => (string) 分片id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BackupURL" => (array<string>) 备份url，每个分片一个下载URL
     * ]
     *
     * @return DescribeUMemBackupURLResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_umem_block_info
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) UMem内存资源ID
     *     "Offset" => (integer) 分页显示的起始偏移, 默认值为0
     *     "Limit" => (integer) 分页显示的条目数, 默认值为10
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 分布式redis 分片信息[
     *         [
     *             "BlockId" => (string) 分片id
     *             "BlockPort" => (integer) 分片端口
     *             "BlockSize" => (integer) 容量单位GB
     *             "BlockState" => (string) 实例状态 Starting // 创建中 Creating // 初始化中 CreateFail // 创建失败 Fail // 创建失败 Deleting // 删除中 DeleteFail // 删除失败 Running // 运行 Resizing // 容量调整中 ResizeFail // 容量调整失败 Configing // 配置中 ConfigFail // 配置失败Restarting // 重启中 SetPasswordFail //设置密码失败UpgradeMemInit  //任务初始化
     *             "BlockSlotBegin" => (integer) 分片维护的键槽起始值
     *             "BlockSlotEnd" => (integer) 分片维护的键槽结束值
     *             "BlockVip" => (string) 分片ip
     *             "BlockUsedSize" => (integer) 使用量单位MB
     *             "BlockType" => (string) 分片类型，master 或者 slave
     *             "BlockReadWeight" => (integer) 分片读权重
     *             "BlockName" => (string) 分片名称
     *         ]
     *     ]
     *     "ReadMode" => (string) 集群读写分离策略。 枚举值[ "Custom": 用户自定义节点权重， "Uniform": 包括主节点在内的所有节点平均读请求， "ReadOnly": 读请求均分至只读节点]
     * ]
     *
     * @return DescribeUMemBlockInfoResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_umem_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 购买umem大小,单位:GB,范围[1~1024]
     *     "Type" => (string) 空间类型:single(无热备),double(热备)(默认: double)
     *     "ChargeType" => (string) Year， Month， Dynamic 如果不指定，则一次性获取三种计费
     *     "Quantity" => (integer) 购买UMem的时长，默认值为1
     *     "HighPerformance" => (boolean) 实例类型是否为性能增强型。默认为false，或者不填，true为性能增强型。
     *     "BlockCnt" => (integer) umem 分片个数
     *     "ProxySize" => (integer) umem 代理CPU核心数
     *     "UlbMode" => (string) umem分布式代理类型，默认false，true为负载均衡型代理
     *     "ClusterMode" => (string) 数据库类型，RWMode为读写分离
     *     "ProxyCnt" => (integer) umem 代理个数
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 价格 参数见 UMemPriceSet[
     *         [
     *             "ChargeType" => (string) Year， Month， Dynamic，Trial
     *             "Price" => (integer) 现价
     *             "OriginalPrice" => (integer) 原价
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUMemPriceResponse
     * @throws UCloudException
     */
    public function describeUMemPrice(DescribeUMemPriceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUMemPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUMemSpace - 获取UMem内存空间列表（已废弃，建议是使用DescribeUMem接口）
     *
     * See also: https://docs.ucloud.cn/api/umem-api/describe_umem_space
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer) 数据偏移量, 默认为0
     *     "Limit" => (integer) 返回数据长度, 默认为20
     *     "SpaceId" => (string) 内存空间ID (无ID，则获取所有)
     *     "Protocol" => (string) 协议类型: memcache, redis
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) JSON 格式的UMem内存空间实例列表, 详细参见 UMemSpaceSet[
     *         [
     *             "Zone" => (string) 可用区，参见[可用区列表](../summary/regionlist.html)
     *             "Tag" => (string) 实例tag
     *             "RewriteTime" => (integer) 运维时间0   //0点1   //1点依次类推
     *             "SpaceId" => (string) 内存空间ID
     *             "SubnetId" => (string) 子网ID
     *             "VPCId" => (string) VPC ID
     *             "Name" => (string) 内存空间名称
     *             "CreateTime" => (integer) 创建时间
     *             "ExpireTime" => (integer) 到期时间
     *             "Type" => (string) 空间类型:single(无热备),double(热备)
     *             "Protocol" => (string) 协议类型: memcache, redis
     *             "Size" => (integer) 容量单位GB
     *             "UsedSize" => (integer) 使用量单位MB
     *             "State" => (string) Starting:创建中 Running:运行中 Fail:失败
     *             "ChargeType" => (string) Year, Month, Dynamic, Trial
     *             "Address" => (array<object>) IP端口信息请参见 UMemSpaceAddressSet[
     *                 [
     *                     "IP" => (string) UMem实例内网访问IP
     *                     "PrivateDomain" => (string) UMem实例内网访问域名地址，未开启状态下返回为空
     *                     "PublicIp" => (string) 开启外网状态下外网IP，否则为空
     *                     "Port" => (integer) UMem实例访问Port
     *                 ]
     *             ]
     *             "SupportAofRollback" => (boolean) 实例是否支持回档
     *             "AofRollbackEnable" => (boolean) 实例是否开启了回档
     *         ]
     *     ]
     *     "TotalCount" => (integer) 根据过滤条件得到的总数
     * ]
     *
     * @return DescribeUMemSpaceResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_umem_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 购买UMem大小,单位:GB
     *     "Type" => (string) 空间类型:single(无热备),double(热备)(默认: double)
     *     "SpaceId" => (string) 需要升级的空间的SpaceId
     *     "HighPerformance" => (string) 是否为性能增强型。默认为false，或者不填，true为性能增强型。
     *     "IsSplit" => (string) 如果是拆分按钮查询价格就填 true, 否则就填 false,默认为 false
     *     "BlockIds" => (array<string>) 进行容量调整分片的分片ID(性能增强型不需要传入)
     *     "BlockSize" => (array<integer>) 进行容量调整的分片的目标容量,单位 GB(性能增强型不需要传入)
     *     "ProxyId" => (string)  代理id
     *     "NewCPU" => (integer) 代理升级后CPU核数
     *     "ReplicaSize" => (integer) 新增读写分离节点容量大小
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (integer) 价格
     *     "OriginalPrice" => (integer) 原价
     * ]
     *
     * @return DescribeUMemUpgradePriceResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_umem_cache_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 组的ID,如果指定则获取描述，否则为列表操 作,需指定Offset/Limit
     *     "Offset" => (integer) 分页显示的起始偏移, 默认值为0
     *     "Limit" => (integer) 分页显示的条目数, 默认值为20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 组的总的节点个数
     *     "DataSet" => (array<object>) 组列表,参见 UMemcacheGroupSet[
     *         [
     *             "GroupId" => (string) 组ID
     *             "Name" => (string) 组名称
     *             "ConfigId" => (string) 节点的配置ID
     *             "VirtualIP" => (string) 节点的虚拟IP地址
     *             "Port" => (integer) 节点分配的服务端口
     *             "Size" => (integer) 容量单位GB
     *             "UsedSize" => (integer) 使用量单位MB
     *             "Version" => (string) Memcache版本信息,默认为1.4.31
     *             "State" => (string) 状态标记 Creating // 初始化中 CreateFail // 创建失败 Deleting // 删除中 DeleteFail // 删除失败 Running // 运行 Resizing // 容量调整中 ResizeFail // 容量调整失败 Configing // 配置中 ConfigFail // 配置失败Restarting // 重启中
     *             "CreateTime" => (integer) 创建时间 (UNIX时间戳)
     *             "ModifyTime" => (integer) 修改时间 (UNIX时间戳)
     *             "ExpireTime" => (integer) 过期时间 (UNIX时间戳)
     *             "ChargeType" => (string) 计费类型:Year,Month,Dynamic 默认Dynamic
     *             "Tag" => (string) 业务组名称
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUMemcacheGroupResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_umem_cache_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "Size" => (integer) 容量大小,单位:GB 取值范围[1-32]
     *     "ChargeType" => (string) 计费模式，Year， Month， Dynamic，默认: Dynamic 默认: 获取所有计费模式的价格
     *     "Quantity" => (integer) 购买umemcache的时长，默认值为1
     *     "Type" => (string) 空间类型:single(无热备),double(热备)(默认: double)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 价格列表, 参见 UMemcachePriceSet[
     *         [
     *             "ChargeType" => (string) 计费模式，Year, Month, Dynamic
     *             "Price" => (integer) 总价格
     *             "ListPrice" => (integer) 产品列表价
     *             "OriginalPrice" => (integer) 原价
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUMemcachePriceResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_umem_cache_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 购买umemcache大小,单位:GB
     *     "GroupId" => (string) 需要升级的空间的GroupId,请参考DescribeUMemcacheGroup接口
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (integer) 价格
     *     "OriginalPrice" => (integer) 原价
     *     "ListPrice" => (integer) 列表价格
     * ]
     *
     * @return DescribeUMemcacheUpgradePriceResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_uredis_backup
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 组的ID，如果不传RegionType,GroupId为必传项
     *     "Offset" => (integer) 分页显示的起始偏移, 默认值为0
     *     "Limit" => (integer) 分页显示的条目数, 默认值为10
     *     "SlaveZone" => (string) 跨机房URedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     *     "RegionType" => (string) 用于区分跨可用备份以及普通备份。默认为normal。跨可用则分为(source, target)
     *     "BackupId" => (string) 备份Id，若传入，则只返回该BackupId的备份信息
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 用户名下总的备份个数
     *     "DataSet" => (array<object>) 备份列表 参见 URedisBackupSet[
     *         [
     *             "Zone" => (string) 可用区，参见[可用区列表](../summary/regionlist.html)
     *             "BackupId" => (string) 备份ID
     *             "GroupId" => (string) 对应的实例ID
     *             "GroupName" => (string) 组名称
     *             "BackupName" => (string) 备份的名称
     *             "BackupTime" => (integer) 备份时间 (UNIX时间戳)
     *             "BackupSize" => (integer) 备份文件大小, 以字节为单位
     *             "BackupType" => (string) 备份类型: Manual 手动 Auto 自动
     *             "State" => (string) 备份的状态: Backuping 备份中 Success 备份成功 Error 备份失败 Expired 备份过期
     *             "SrcRegionName" => (string) 跨地域备份源地域
     *             "DstRegionName" => (string) 跨地域备份目标地域
     *             "MemorySize" => (integer) 源实例容量大小
     *             "RedisVersion" => (string) 源实例Redis版本
     *         ]
     *     ]
     * ]
     *
     * @return DescribeURedisBackupResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_uredis_backup_url
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "BackupId" => (string) 备份ID
     *     "RegionFlag" => (boolean) 是否是跨机房URedis(默认false)
     *     "GroupId" => (string) 实例ID
     *     "SlaveZone" => (string) 跨机房URedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     *     "IsCrossRegion" => (boolean) 默认为false,true时代表查询跨地域备份URL
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BackupURL" => (string) [即将下线,请使用BackupPath]
     *     "BackupPath" => (string) 备份文件公网的地址
     * ]
     *
     * @return DescribeURedisBackupURLResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_uredis_config
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "RegionFlag" => (boolean) 是否是跨机房URedis(默认false)
     *     "Version" => (string) Redis版本号
     *     "ConfigId" => (string) 配置文件ID
     *     "Offset" => (integer) 页显示的起始偏移, 默认值为0
     *     "Limit" => (integer) 页显示的条目数, 默认值为10
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 根据过滤条件得到的总数
     *     "DataSet" => (array<object>) 配置文件列表 参见 URedisConfigSet[
     *         [
     *             "Zone" => (string) Zone
     *             "ConfigId" => (string) 配置ID
     *             "Name" => (string) 配置名称
     *             "Description" => (string) 配置描述
     *             "Version" => (string) 配置对应的Redis版本
     *             "IsModify" => (string) 置是否可以修改
     *             "State" => (string) 配置所处的状态
     *             "CreateTime" => (integer) 创建时间 (UNIX时间戳)
     *             "ModifyTime" => (integer) 修改时间 (UNIX时间戳)
     *             "RegionFlag" => (boolean) 是否是跨机房URedis(默认false)
     *         ]
     *     ]
     * ]
     *
     * @return DescribeURedisConfigResponse
     * @throws UCloudException
     */
    public function describeURedisConfig(DescribeURedisConfigRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeURedisConfigResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeURedisGroup - 查询主备Redis(已废弃，建议使用DescribeUMem)
     *
     * See also: https://docs.ucloud.cn/api/umem-api/describe_uredis_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 组的ID,如果指定则获取描述，否则为列表操 作,需指定Offset/Limit
     *     "Offset" => (integer) 分页显示的起始偏移, 默认值为0
     *     "Limit" => (integer) 分页显示的条目数, 默认值为20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 组的总的节点个数
     *     "DataSet" => (array<object>) 组列表 参见 URedisGroupSet[
     *         [
     *             "Zone" => (string) 实例所在可用区，或者master redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *             "RewriteTime" => (integer) 返回运维时间 0 //0点 1 //1点 以此类推
     *             "Role" => (string) 实例类型
     *             "VPCId" => (string) vpcid
     *             "SubnetId" => (string) subnetid
     *             "GroupId" => (string) 组ID
     *             "Name" => (string) 组名称
     *             "Type" => (string) 空间类型:single(无热备),double(热备)
     *             "Protocol" => (string) 协议
     *             "MemorySize" => (integer) [即将下线,请使用Size] 容量单位GB
     *             "GroupName" => (string) [即将下线,请使用Name] 组名称
     *             "ConfigId" => (string) 节点的配置ID
     *             "VirtualIP" => (string) 节点的虚拟IP地址
     *             "Port" => (integer) 节点分配的服务端口
     *             "Size" => (integer) 容量单位GB
     *             "UsedSize" => (integer) 使用量单位MB
     *             "AutoBackup" => (string) 是否需要自动备份,enable,disable
     *             "BackupTime" => (integer) 组自动备份开始时间,单位小时计,范围[0-23]
     *             "HighAvailability" => (string) 是否开启高可用,enable,disable
     *             "Version" => (string) Redis版本信息
     *             "ExpireTime" => (integer) 过期时间 (UNIX时间戳)
     *             "ChargeType" => (string) 计费类型:Year,Month,Dynamic 默认Dynamic
     *             "State" => (string) 状态标记 Creating // 初始化中 CreateFail // 创建失败 Deleting // 删除中 DeleteFail // 删除失败 Running // 运行 Resizing // 容量调整中 ResizeFail // 容量调整失败 Configing // 配置中 ConfigFail // 配置失败// 修改SSL中SSLSwitching //SSLSwitchFail修改SSL失败
     *             "CreateTime" => (integer) 创建时间 (UNIX时间戳)
     *             "ModifyTime" => (integer) 修改时间 (UNIX时间戳)
     *             "Tag" => (string) 业务组名称
     *             "SlaveZone" => (string) 跨机房URedis，slave redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *             "IsHighPerformance" => (boolean) 是否是高性能Redis， true表示是； false表示否
     *             "SSLVersion" => (string) SSL版本
     *             "SSLEnable" => (boolean) 实例是否开启SSL
     *             "SSLCertExpireTime" => (integer) 证书过期时间
     *             "SecPolicy" => (integer) 安全策略。1:内网隔离，2:加密通信，3:内网隔离+加密通信
     *             "UDACEnable" => (boolean) 实例是否有加入到自治中心
     *         ]
     *     ]
     * ]
     *
     * @return DescribeURedisGroupResponse
     * @throws UCloudException
     */
    public function describeURedisGroup(DescribeURedisGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeURedisGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeURedisPrice - 获取URedis价格信息
     *
     * See also: https://docs.ucloud.cn/api/umem-api/describe_uredis_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 量大小,单位:GB  取值范围[1-32]
     *     "ChargeType" => (string) 计费模式，Year， Month， Dynamic；如果不指定，则一次性获取三种计费
     *     "Quantity" => (integer) 计费模式为Dynamic时，购买的时长, 默认为1
     *     "RegionFlag" => (boolean) 是否是跨机房URedis(默认false)
     *     "ProductType" => (string) 产品类型：MS_Redis（标准主备版），S_Redis（从库），默认为MS_Redis
     *     "HighPerformance" => (boolean) 查询高性能Redis， 默认为false， 或者不填， 查询高性能为true
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 价格 参数见 UMemPriceSet[
     *         [
     *             "OriginalPrice" => (integer) 原价
     *             "ChargeType" => (string) Year， Month， Dynamic，Trial
     *             "ListPrice" => (integer) 产品列表价
     *             "Price" => (integer) 总价格
     *         ]
     *     ]
     * ]
     *
     * @return DescribeURedisPriceResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_uredis_slowlog
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 资源ID
     *     "Limit" => (integer) 分页显示的条目数，默认为10
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 总条目数
     *     "DataSet" => (array<object>) 条目数据[
     *         [
     *             "StartTime" => (integer) 查询发生的时间
     *             "SpendTime" => (integer) 查询消耗的时间
     *             "Command" => (string) 查询命令
     *         ]
     *     ]
     * ]
     *
     * @return DescribeURedisSlowlogResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_uredis_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Size" => (integer) 购买uredis大小,单位:GB,范围是[1-32]
     *     "GroupId" => (string) 要升级的空间的GroupId,请参考DescribeURedisGroup接口
     *     "HighPerformance" => (boolean) 查询高性能Redis， 默认为false， 或者不填， 查询高性能为true
     *     "ConvertType" => (string) 切换类型，执行类型切换时询价需要传入的参数。“HighPerformance”： 表示转换为性能加强型，“Normal”： 表示转换为普通主备版类型
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (number) 价格
     *     "OriginalPrice" => (integer) 原价
     * ]
     *
     * @return DescribeURedisUpgradePriceResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/describe_uredis_version
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) 组列表 参见 URedisVersionSet[
     *         [
     *             "Version" => (string) Redis版本
     *         ]
     *     ]
     *     "TotalCount" => (integer) 总版本个数
     * ]
     *
     * @return DescribeURedisVersionResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/flushall_uredis_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 组的ID
     *     "FlushType" => (string) FlushDb或FlushAll
     *     "DbNum" => (integer) 清空的db，FlushType为FlushDb，此项为必传项
     *     "TopOrganizationId" => (integer) company_id
     *     "OrganizationId" => (integer) OrganizationId
     *     "SlaveZone" => (string) 跨机房URedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return FlushallURedisGroupResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/get_umem_space_state
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) 内存空间ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "State" => (array<string>) Starting:创建中 Running:运行中 Fail:失败
     * ]
     *
     * @return GetUMemSpaceStateResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/i_solation_uredis_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 组的ID
     *     "TransformType" => (string) UNBind(关闭)或Bind(打开)
     *     "SlaveZone" => (string) 跨机房URedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ISolationURedisGroupResponse
     * @throws UCloudException
     */
    public function iSolationURedisGroup(ISolationURedisGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ISolationURedisGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUMemPassword - 更改分布式redis密码
     *
     * See also: https://docs.ucloud.cn/api/umem-api/modify_umem_password
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) 资源id
     *     "Password" => (string) 新密码字符串，要求长度为6~36个字符,且只能包含英文、数字以及-和下划线；并且需要base64加密；如要取消密码，此值为空字符串
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUMemPasswordResponse
     * @throws UCloudException
     */
    public function modifyUMemPassword(ModifyUMemPasswordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUMemPasswordResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUMemSpaceName - 修改UMem内存空间名称
     *
     * See also: https://docs.ucloud.cn/api/umem-api/modify_umem_space_name
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) UMem内存空间ID
     *     "Name" => (string) 新的名称,长度(6<=size<=63)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUMemSpaceNameResponse
     * @throws UCloudException
     */
    public function modifyUMemSpaceName(ModifyUMemSpaceNameRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUMemSpaceNameResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyURedisConfig - 修改主备Redis配置文件参数
     *
     * See also: https://docs.ucloud.cn/api/umem-api/modify_uredis_config
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "ConfigId" => (string) 配置文件的ID
     *     "Key" => (string) 参数名称
     *     "Value" => (string) 对应参数的值
     *     "GroupId" => (string) 如果实例使用默认配置创建，修改配置信息需要填写GroupId
     *     "RegionFlag" => (boolean) 是否是跨机房URedis(默认false)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyURedisConfigResponse
     * @throws UCloudException
     */
    public function modifyURedisConfig(ModifyURedisConfigRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyURedisConfigResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyURedisGroupName - 修改主备redis名称
     *
     * See also: https://docs.ucloud.cn/api/umem-api/modify_uredis_group_name
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 组的ID
     *     "Name" => (string) Redis组名称 (范围[6-63],只能包含英文、数字以及符号-和_)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyURedisGroupNameResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/modify_uredis_group_password
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 组的ID
     *     "Password" => (string) 新密码字符串，要求长度为6~36个字符,且只能包含英文、数字以及-和下划线；并且需要base64加密；如要取消密码，此值为空字符串，
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyURedisGroupPasswordResponse
     * @throws UCloudException
     */
    public function modifyURedisGroupPassword(ModifyURedisGroupPasswordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyURedisGroupPasswordResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RegisterUMemDefrag - 动态开关redis碎片整理选项
     *
     * See also: https://docs.ucloud.cn/api/umem-api/register_umem_defrag
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ResourceId" => (string) 资源ID
     *     "StartTime" => (integer) 开始时间戳
     *     "EndTime" => (integer) 关闭时间戳
     *     "OperateType" => (string) 操作类型：“Once”： 表示单次执行， “Open”：表示开启策略“Close”:  表示关闭策略（分布式实例只支持Once）。
     *     "FragTime" => (integer) 任务时间周期，单位为分钟。
     *     "FragSize" => (integer) 碎片整理阈值，范围为 100-200（分布式实例该参数无效）。
     *     "StartHour" => (integer) 开始整点数值（分布式实例该参数无效）。
     *     "StartMin" => (integer) 开始分钟数（分布式实例该参数无效）。
     *     "EndHour" => (integer) 结束整点数值（分布式实例该参数无效）。
     *     "EndMin" => (integer) 结束分钟数（分布式实例该参数无效）。
     *     "IsUnion" => (boolean) AND逻辑字段，表示 阈值和时间段都满足（分布式实例该参数无效）。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RegisterUMemDefragResponse
     * @throws UCloudException
     */
    public function registerUMemDefrag(RegisterUMemDefragRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RegisterUMemDefragResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RemoveUDRedisData - 清除udredis实例数据
     *
     * See also: https://docs.ucloud.cn/api/umem-api/remove_ud_redis_data
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) 实例id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RemoveUDRedisDataResponse
     * @throws UCloudException
     */
    public function removeUDRedisData(RemoveUDRedisDataRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new RemoveUDRedisDataResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResizeUDRedisBlockSize - 更改udredis分片容量
     *
     * See also: https://docs.ucloud.cn/api/umem-api/resize_ud_redis_block_size
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) spaceid
     *     "BlockId" => (string) 分片id
     *     "BlockSize" => (integer) 分片容量（单位GB）4/8/12/16/20
     *     "StartTime" => (integer) 任务执行时间戳，时间戳需满足未来一天时间范围内。默认不传或者值为0时，即为立即执行
     *     "HighPerformance" => (boolean) 是否为性能增强型。默认为false，或者不填，true为性能增强型。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ResizeUDRedisBlockSizeResponse
     * @throws UCloudException
     */
    public function resizeUDRedisBlockSize(ResizeUDRedisBlockSizeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeUDRedisBlockSizeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResizeUMemSpace - 调整内存空间容量，只支持存量老分布式产品，不支持高性能分布式。（已废弃，不建议使用）
     *
     * See also: https://docs.ucloud.cn/api/umem-api/resize_umem_space
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) UMem 内存空间Id
     *     "Size" => (integer) 内存大小, 单位:GB (需要大于原size,<= 1024)
     *     "Type" => (string) 空间类型:single(无热备),double(热备)(默认: double)
     *     "CouponId" => (string) 使用的代金券Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ResizeUMemSpaceResponse
     * @throws UCloudException
     */
    public function resizeUMemSpace(ResizeUMemSpaceRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeUMemSpaceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResizeUMemcacheGroup - 调整memcache实例的容量
     *
     * See also: https://docs.ucloud.cn/api/umem-api/resize_umem_cache_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) umemcache资源ID
     *     "Size" => (integer) 内存大小, 单位:GB 目前支持1/2/4/8/16/32五种规格(暂时只支持扩容)
     *     "CouponId" => (integer) 代金券ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ResizeUMemcacheGroupResponse
     * @throws UCloudException
     */
    public function resizeUMemcacheGroup(ResizeUMemcacheGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeUMemcacheGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResizeURedisGroup - 通过调用CheckURedisAllowance接口，检查资源情况，根据不同情形来调整主备redis容量，其中主要包括可用区资源不足无法扩容，主备所在宿主机资源不足需要迁移完成扩容（需要主从切换，会闪断及负载升高），以及直接扩容（业务无感知）
     *
     * See also: https://docs.ucloud.cn/api/umem-api/resize_uredis_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 组ID
     *     "Size" => (integer) 内存大小, 单位:GB (需要大于原size,且小于等于32) 目前仅支持1/2/4/8/16/32 G 六种容量规格
     *     "ChargeType" => (string) 计费类型
     *     "Type" => (string) 空间类型:single(无热备),double(热备)(默认: double)
     *     "StartTime" => (integer) 任务执行时间戳，默认为0或者不传时，为立即执行，传入时间需满足未来一天范围
     *     "HighPerformance" => (boolean) 高性能Redis， 默认为false， 或者不填， 高性能为true
     *     "CouponId" => (integer) 代金券ID 请参考DescribeCoupon接口
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ResizeURedisGroupResponse
     * @throws UCloudException
     */
    public function resizeURedisGroup(ResizeURedisGroupRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeURedisGroupResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ResizeUhproxy - 分布式Redis代理规格调整
     *
     * See also: https://docs.ucloud.cn/api/umem-api/resize_uhproxy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "SpaceId" => (string) 分布式Redis资源ID
     *     "ProxyId" => (string) 代理id
     *     "NewCPU" => (integer) 代理目标核数
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ResizeUhproxyResponse
     * @throws UCloudException
     */
    public function resizeUhproxy(ResizeUhproxyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ResizeUhproxyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RestartUMemcacheGroup - 重启单机Memcache
     *
     * See also: https://docs.ucloud.cn/api/umem-api/restart_umem_cache_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 组的ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RestartUMemcacheGroupResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/restart_uredis_group
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return RestartURedisGroupResponse
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
     * See also: https://docs.ucloud.cn/api/umem-api/update_uredis_backup_strategy
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 组的ID
     *     "BackupTime" => (string) 备份时间，默认为0
     *     "AutoBackup" => (string) 是否打开默认备份功能。enable(打开)，disable(关闭)，默认enable
     *     "SlaveZone" => (string) 跨机房URedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     *     "OperationType" => (string) 操作类型，不传默认为normal(即操控自动备份打开以及时间)，modify（修改跨地域备份策略）,close(关闭跨地域备份策略)
     *     "DstRegion" => (string) 跨可用备份目标地域（当Operation为modify时必选）
     *     "SaveDays" => (integer) 保存天数（当Operation为modify时必选）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateURedisBackupStrategyResponse
     * @throws UCloudException
     */
    public function updateURedisBackupStrategy(UpdateURedisBackupStrategyRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateURedisBackupStrategyResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpdateURedisRewriteTime - 修改主备redis重写时间
     *
     * See also: https://docs.ucloud.cn/api/umem-api/update_uredis_rewrite_time
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "GroupId" => (string) 实例名称
     *     "RewriteTime" => (integer) 重写时间
     *     "SlaveZone" => (string) 跨机房URedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return UpdateURedisRewriteTimeResponse
     * @throws UCloudException
     */
    public function updateURedisRewriteTime(UpdateURedisRewriteTimeRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new UpdateURedisRewriteTimeResponse($resp->toArray(), $resp->getRequestId());
    }
}
