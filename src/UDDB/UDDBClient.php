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
class UDDBClient extends Client {

    /**
     * ChangeUDDBInstanceName - 修改分布式数据库中间件名称
     *
     * See also: https://docs.ucloud.cn/api/UDDB-api/change_uddb_instance_name
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDDBId" => (string) UDDB实例Id
     *     "NewName" => (string) 名称
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function changeUDDBInstanceName(ChangeUDDBInstanceNameRequest $request = null): ChangeUDDBInstanceNameResponse {
        $resp = $this->invoke($request);
        return new ChangeUDDBInstanceNameResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ChangeUDDBSlaveCount - 改变分布式数据库数据节点的只读实例个数
每一个UDDB的数据节点负责处理所有的写入请求。与此同时，每一个数据节点可以配置若干个该节点的只读实例。当主节点的数据写入完毕后，只读实例把这次的写入操作进行更新，从而和数据节点保持一致。
只读实例可以使得数据由多份复制，在数据节点和只读实例之间，可以做请求的读写分离, 也就是说, 主节点写入数据之后, 数据的读操作可以由数据只读实例进行分担, 这样减少主节点的压力, 增加性能
当改变了数据节点的只读实例个数之后，对于现有的和以后的每一个数据节点都采用这个配置。如果UDDB实例有现有的数据节点, 那么它会根据新配置的参数，自动创建或删除数据节点的只读实例
如下状态的UDDB实例可以进行这个操作:
Running: 系统正常运行中
当请求返回成功之后，UDDB实例的状态变成"ChangingSlaveCount"; 如果返回失败, UDDB实例状态保持不变 当UDDB更改数据分区的只读实例个数成功之后, UDDB实例的状态变成"Running"(正常运行中); 如果更改过程中出现异常, 状态变成"Abnormal"(异常运行中)或者"Error"(运行错误)
     *
     * See also: https://docs.ucloud.cn/api/UDDB-api/change_uddb_slave_count
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDDBId" => (string) UDDB资源id
     *     "SlaveCount" => (string) 每个数据节点的只读实例个数, 取值必须>=0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function changeUDDBSlaveCount(ChangeUDDBSlaveCountRequest $request = null): ChangeUDDBSlaveCountResponse {
        $resp = $this->invoke($request);
        return new ChangeUDDBSlaveCountResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUDDBInstance - 创建创建分布式数据库UDDB实例, 简称UDDB实例。
     *
     * See also: https://docs.ucloud.cn/api/UDDB-api/create_uddb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "DBTypeId" => (string) UDDB的数据库版本，支持版本如下：mysql-5.6 mysql-5.7. 如果不填，则默认为mysql-5.6
     *     "Name" => (string) 实例名称，至少6位
     *     "AdminPassword" => (string) 管理员密码, 密码需要使用base64加密
     *     "RouterVersion" => (string) UDDB路由节点的版本。分为三种： Trival(免费版)： 2中间件节点； QPS：1.5W FellFree(标准版)： 固定为4中间件节点，后续将根据业务请求量自动扩展，最多扩展到12个节点，QPS为3w - 10w； EnjoyAlone(物理机版)：专享物理机，节点数让客户可选
     *     "RouterNodeNum" => (integer) 其他版本：该参数可不填；专享版：物理机台数
     *     "DataNodeCount" => (integer) 初始的数据节点个数 取值必须>0.
     *     "DataNodeMemory" => (integer) 新的数据节点的内存配置, 单位：MB 具体数值参考UDB的内存取值.
     *     "DataNodeDiskSpace" => (integer) 新的数据节点的磁盘大小配置. 单位: GB 具体数值参考UDB的磁盘大小取值.
     *     "InstanceMode" => (string) 存储节点的高可用模式， 分为高可用UDB（HA）和普通UDB（Normal），如果不填， 则默认为HA
     *     "InstanceType" => (string) 存储节点和只读实例的磁盘类型。分为：SSD磁盘（SATA_SSD）或普通磁盘(Normal)。 如果不填，则默认为SATA_SSD
     *     "ChargeType" => (string) 付费类型，可选值如下:Year: 按年付费 Month: 按月付费 Dynamic: 按需付费(单位: 小时) Trial: 免费试用  默认值为: Dynamic
     *     "Quantity" => (integer) 购买时长，默认值1
     *     "AdminUser" => (string) 管理员帐户名，默认root
     *     "Port" => (integer) 端口号，mysql默认端口为3306
     *     "DataNodeSlaveCount" => (integer) 每个数据节点的只读实例个数, 取值必须>=0. 默认取值为0.
     *     "VPCId" => (string) VPC的ID
     *     "SubnetId" => (string) 子网ID
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UDDBId" => (string) UDDB实例ID
     * ]
     *
     * @throws UCloudException
     */
    public function createUDDBInstance(CreateUDDBInstanceRequest $request = null): CreateUDDBInstanceResponse {
        $resp = $this->invoke($request);
        return new CreateUDDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUDDBInstance - 删除UDDB实例。
如下状态的UDDB实例可以进行这个操作:
InitFail: 初始化失败
Shutoff: 已关闭
当请求返回成功之后，UDDB实例就已经被删除, 列表上看不到对应的UDDB实例
     *
     * See also: https://docs.ucloud.cn/api/UDDB-api/delete_uddb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDDBId" => (string) UDDB实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function deleteUDDBInstance(DeleteUDDBInstanceRequest $request = null): DeleteUDDBInstanceResponse {
        $resp = $this->invoke($request);
        return new DeleteUDDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUDDBInstance - 获取分布式数据库UDDB的详细信息
     *
     * See also: https://docs.ucloud.cn/api/UDDB-api/describe_uddb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDDBId" => (string) UDDB实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DataSet" => (array<object>) UDDB实例信息列表, 参见DataSetUDDB项定义[
     *         [
     *             "Zone" => (string) UDDB实例对应的可用区
     *             "UDDBId" => (string) UDDB实例ID
     *             "Name" => (string) UDDB实例名称
     *             "DBTypeId" => (string) UDDB的数据库版本
     *             "AdminUser" => (string) 管理员帐户名，默认root
     *             "VirtualIP" => (string) UDDB实例访问的虚IP
     *             "Port" => (integer) UDDB实例访问的端口号
     *             "State" => (string) UDDB状态, 状态列表如下: Init: 初始化中 InitFail: 初始化失败 Starting: 启动中 Running: 系统正常运行中 Abnormal: 系统运行中, 有异常, 还能提供服务 Error: 系统运行中, 但不能正常提供服务 Shutdown: 关闭中 Shutoff: 已关闭 Deleted: 已删除 UpgradingUDDB: 升降级UDDB配置中 UpgradingDataNode: 升降级UDDB节点配置中 ChangingSlaveCount: 改变只读实例数量中 ScalingOutUDDB: 水平扩展中
     *             "CreateTime" => (integer) UDDB实例创建时间，采用UTC计时时间戳
     *             "ExpiredTime" => (integer) UDDB实例过期时间，采用UTC计时时间戳
     *             "ChargeType" => (string) 付费类型，可选值如下: Year: 按年付费 Month: 按月付费 Dynamic: 按需付费(单位: 小时) Trial: 免费试用
     *             "RouterVersion" => (string) UDDB路由节点的版本。分为三种： Trival(免费版)： 2中间件节点； QPS：1.5W FellFree(标准版)： 固定为4中间件节点，后续将根据业务请求量自动扩展，最多扩展到12个节点，QPS为3w - 10w； EnjoyAlone(物理机版)：专享物理机，节点数让客户可选
     *             "RouterNodeNum" => (integer) 各版本下的节点个数。体验版： 固定为2节点； 畅享版：固定为4节点（后续可通过管理API调整）；专享版：物理机台数
     *             "RefQps" => (integer) 参考QPS。 免费版： 15000； 畅享版： 30000 - 100000 （根据节点数而定）； 专享版： 节点数 * 10w qps
     *             "DataNodeCount" => (integer) 数据节点个数
     *             "DataNodeMemory" => (integer) 数据节点的内存配置, 单位：MB
     *             "DataNodeDiskSpace" => (integer) 数据节点的磁盘大小配置. 单位: GB
     *             "DataNodeSlaveCount" => (integer) 每个数据节点的只读实例个数.
     *             "DataNodeList" => (array<object>) UDDB实例的数据节点的信息列表[
     *                 [
     *                     "Id" => (string) 数据节点ID
     *                     "Memory" => (integer) 数据节点的内存配置, 单位：MB
     *                     "DiskSpace" => (integer) 数据节点的磁盘大小配置. 单位: GB
     *                     "SlaveCount" => (integer) 数据节点的只读实例个数.
     *                     "State" => (string) 数据分片状态, 状态列表如下: Init: 初始化中 Fail: 安装失败 Starting: 启动中 Running: 系统正常运行中 Shutdown: 关闭中 Shutoff: 已关闭 Deleted: 已删除 Upgrading: 系统升级中
     *                     "SlaveInfos" => (array<object>) 只读实例信息列表[
     *                         [
     *                             "Id" => (string) 只读实例ID
     *                             "DataNodeId" => (string) 对应数据节点的ID
     *                             "State" => (string) 只读实例状态, 状态列表如下: Init: 初始化中 Fail: 安装失败 Starting: 启动中 Running: 系统正常运行中 Shutdown: 关闭中 Shutoff: 已关闭 Deleted: 已删除 Upgrading: 系统升级中
     *                         ]
     *                     ]
     *                     "LastTransTaskId" => (string) 最近一次数据迁移任务id
     *                     "CreateTime" => (string) 节点的创建时间
     *                 ]
     *             ]
     *             "InstanceMode" => (string) 存储节点的高可用模式， 分为高可用UDB（HA）和普通UDB（Normal），如果不填， 则默认为HA
     *             "InstanceType" => (string) 存储节点和只读实例的磁盘类型。分为：SSD磁盘（SATA_SSD）或普通磁盘(Normal)。 如果不填，则默认为SATA_SSD
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeUDDBInstance(DescribeUDDBInstanceRequest $request = null): DescribeUDDBInstanceResponse {
        $resp = $this->invoke($request);
        return new DescribeUDDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUDDBInstancePrice - 获取分布式数据库UDDB价格
     *
     * See also: https://docs.ucloud.cn/api/UDDB-api/describe_uddb_instance_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "RouterVersion" => (string) UDDB路由节点的版本。分为三种： Trival(免费版)： 2中间件节点； QPS：1.5WFeelFree(标准版)： 固定为4中间件节点，后续将根据业务请求量自动扩展，最多扩展到12个节点，QPS为3w - 10w；EnjoyAlone(物理机版)：专享物理机，节点数让客户可选
     *     "RouterNodeNum" => (integer) 其他版本：该参数可不填；专享版：物理机节点个数。一台物理机有2个节点
     *     "DataNodeCount" => (integer) 初始的数据节点个数 取值必须>0.
     *     "DataNodeMemory" => (string) 新的数据节点的内存配置, 单位：MB 具体数值参考UDB的内存取值.
     *     "DataNodeDiskSpace" => (integer) 新的数据节点的磁盘大小配置. 单位: GB 具体数值参考UDB的磁盘大小取值.
     *     "ChargeType" => (string) 付费类型，可选值如下: Year: 按年付费 Month: 按月付费 Dynamic: 按需付费(单位: 小时) Trial: 免费试用 默认值为: Dynamic
     *     "Quantity" => (integer) 购买时长，默认值1
     *     "DataNodeSlaveCount" => (integer) 每个数据节点的只读实例个数, 取值必须>=0. 默认取值为0.
     *     "InstanceMode" => (string) 存储节点的高可用模式， 分为高可用UDB（HA）和普通UDB（Normal），如果不填， 则默认为HA
     *     "InstanceType" => (string) 存储节点和只读实例的磁盘类型。分为：SSD磁盘（SATA_SSD）或普通磁盘(Normal)。 如果不填，则默认为SATA_SSD
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PriceInfo" => (object) 价格明细, 参考PriceDetailInfo对象定义[
     *         "MiddlewarePrice" => (number) 中间件路由节点费用
     *         "DataNodePrice" => (number) 存储节点费用
     *         "DataNodeSlavePrice" => (number) 只读实例费用
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeUDDBInstancePrice(DescribeUDDBInstancePriceRequest $request = null): DescribeUDDBInstancePriceResponse {
        $resp = $this->invoke($request);
        return new DescribeUDDBInstancePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUDDBInstanceUpgradePrice - 升级UDDB时，获取升级后的价格
     *
     * See also: https://docs.ucloud.cn/api/UDDB-api/describe_uddb_instance_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDDBId" => (string) UDDB实例ID
     *     "RouterVersion" => (string) UDDB路由节点的版本。分为三种： Trival(免费版)： 2中间件节点； QPS：1.5WFeelFree(标准版)： 固定为4中间件节点，后续将根据业务请求量自动扩展，最多扩展到12个节点，QPS为3w - 10w；EnjoyAlone(物理机版)：专享物理机，节点数让客户可选
     *     "RouterNodeNum" => (integer) 其他版本：该参数可不填；专享版：物理机节点的个数。一台物理机有2个节点
     *     "DataNodeCount" => (integer) 新的数据节点个数 取值必须>0.
     *     "DataNodeMemory" => (integer) 新的数据节点的内存配置, 单位：MB 具体数值参考UDB的内存取值.
     *     "DataNodeDiskSpace" => (integer) 新的数据节点的磁盘大小配置. 单位: GB 具体数值参考UDB的磁盘大小取值.
     *     "DataNodeSlaveCount" => (integer) 每个数据节点的只读实例个数, 取值必须>=0.
     *     "InstanceMode" => (string) 存储节点的高可用模式， 分为高可用UDB（HA）和普通UDB（Normal），如果不填， 则默认为HA
     *     "InstanceType" => (string) 存储节点和只读实例的磁盘类型。分为：SSD磁盘（SATA_SSD）或普通磁盘(Normal)。 如果不填，则默认为SATA_SSD
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PriceInfo" => (object) 价格明细, 参考PriceInfo对象定义[
     *         "MiddlewarePrice" => (number) 中间件路由节点费用
     *         "DataNodePrice" => (number) 存储节点费用
     *         "DataNodeSlavePrice" => (number) 只读实例费用
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeUDDBInstanceUpgradePrice(DescribeUDDBInstanceUpgradePriceRequest $request = null): DescribeUDDBInstanceUpgradePriceResponse {
        $resp = $this->invoke($request);
        return new DescribeUDDBInstanceUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * RestartUDDBInstance - 重启UDDB实例，开始提供服务。

如下状态的UDDB实例可以进行这个操作:

Running: 正常运行中
Abnormal: 异常运行中
当请求返回成功之后，UDDB实例的状态变成"Starting"(启动中); 如果返回失败, UDDB实例状态保持不变 UDDB实例在重启过程中, 当UDDB实例启动成功之后, UDDB实例的状态变成"Running"(正常运行中); 如果启动过程中出现异常, 状态变成"Abnormal"(异常运行中), 或者"Shutoff"(已关闭
     *
     * See also: https://docs.ucloud.cn/api/UDDB-api/restart_uddb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDDBId" => (string) UDDB实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function restartUDDBInstance(RestartUDDBInstanceRequest $request = null): RestartUDDBInstanceResponse {
        $resp = $this->invoke($request);
        return new RestartUDDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StartUDDBInstance - 启动UDDB实例，开始提供服务。

如下状态的UDDB实例可以进行这个操作:

Shutoff: 已关闭
当请求返回成功之后，UDDB实例的状态变成"Starting"(启动中); 如果返回失败, UDDB实例状态保持不变 UDDB实例在启动过程中, 当UDDB实例启动成功之后, UDDB实例的状态变成"Running"(正常运行中); 如果启动过程中出现异常, 状态变成"Abnormal"(异常运行中), 或者"Shutoff"(已关闭)
     *
     * See also: https://docs.ucloud.cn/api/UDDB-api/start_uddb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDDBId" => (string) UDDB实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function startUDDBInstance(StartUDDBInstanceRequest $request = null): StartUDDBInstanceResponse {
        $resp = $this->invoke($request);
        return new StartUDDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * StopUDDBInstance - 关闭UDDB实例，停止提供服务。

如下状态的UDDB实例可以进行这个操作:

Running: 正常运行中
Abnormal: 异常运行中
当请求返回成功之后，UDDB实例的状态变成"Shutdown"(关闭中); 如果返回失败, UDDB实例状态保持不变 UDDB实例在关闭过程中, 当UDDB实例关闭成功之后, UDDB实例的状态变成"Shutoff"(已关闭); 如果关闭过程中出现异常, 根据UDDB实例的情况, 状态变成"Abnormal"(异常运行中), 或者"Running"(正常运行中)
     *
     * See also: https://docs.ucloud.cn/api/UDDB-api/stop_uddb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDDBId" => (string) UDDB实例ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function stopUDDBInstance(StopUDDBInstanceRequest $request = null): StopUDDBInstanceResponse {
        $resp = $this->invoke($request);
        return new StopUDDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpgradeUDDBDataNode - 升降级分布式数据库数据节点的配置, 提高/降低数据节点的数据容量和内存

所有数据节点以及其所挂载的只读实例的配置都受到影响

升降级数据节点的配置之后之后, 会按照数据节点新的磁盘和内存大小重新计费

如下状态的数据节点实例可以进行这个操作:

Shutoff: 已关闭
当请求返回成功之后，UDDB实例的状态变成"UpgradingDataNode"，相关数据节点的状态变成"Upgrading"; 如果返回失败, UDDB实例状态保持不变 当UDDB实例升级结束之后, UDDB实例的状态变成"Shutoff"
     *
     * See also: https://docs.ucloud.cn/api/UDDB-api/upgrade_uddb_data_node
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDDBId" => (string) UDDB实例ID
     *     "DataNodeMemory" => (integer) 新的数据节点的内存配置, 单位：MB 具体数值参考UDB的内存取值
     *     "DataNodeDiskSpace" => (integer) 新的数据节点的磁盘大小配置. 单位: GB 具体数值参考UDB的磁盘大小取值.
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function upgradeUDDBDataNode(UpgradeUDDBDataNodeRequest $request = null): UpgradeUDDBDataNodeResponse {
        $resp = $this->invoke($request);
        return new UpgradeUDDBDataNodeResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * UpgradeUDDBInstance - 升降级分布式数据库中间件的配置, 提高/降低请求处理的并发性

修改请求处理节点个数之后, 按照所有请求处理节点的总内存容量和CPU核数重新计费

如下状态的UDDB实例可以进行这个操作:

Running: 系统正常运行中
当请求返回成功之后，UDDB实例的状态变成"UpgradingUDDB"; 如果返回失败, UDDB实例状态保持不变 当UDDB实例升级成功之后, UDDB实例的状态变成"Running"; 如果更改过程中出现异常, 状态变成"Abnormal", 或者"Error"
     *
     * See also: https://docs.ucloud.cn/api/UDDB-api/upgrade_uddb_instance
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Zone" => (string) 可用区。参见 [可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDDBId" => (string) UDDB实例ID
     *     "RouterVersion" => (string) UDDB路由节点的版本。分为三种： Trival(免费版)： 2中间件节点； QPS：1.5W FellFree(标准版)： 固定为4中间件节点，后续将根据业务请求量自动扩展，最多扩展到12个节点，QPS为3w - 10w； EnjoyAlone(物理机版)：专享物理机，节点数让客户可选
     *     "RouterNodeNum" => (integer) 其他版本：该参数可不填；专享版：物理机台数
     *     "CouponId" => (string) 使用的代金券id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function upgradeUDDBInstance(UpgradeUDDBInstanceRequest $request = null): UpgradeUDDBInstanceResponse {
        $resp = $this->invoke($request);
        return new UpgradeUDDBInstanceResponse($resp->toArray(), $resp->getRequestId());
    }
}
