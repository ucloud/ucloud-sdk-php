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
namespace UCloud\UDNS;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UDNS\Apis\AssociateUDNSZoneVPCRequest;
use UCloud\UDNS\Apis\AssociateUDNSZoneVPCResponse;
use UCloud\UDNS\Apis\CreateUDNSRecordRequest;
use UCloud\UDNS\Apis\CreateUDNSRecordResponse;
use UCloud\UDNS\Apis\CreateUDNSZoneRequest;
use UCloud\UDNS\Apis\CreateUDNSZoneResponse;
use UCloud\UDNS\Apis\DeleteUDNSRecordRequest;
use UCloud\UDNS\Apis\DeleteUDNSRecordResponse;
use UCloud\UDNS\Apis\DescribeUDNSDomainRequest;
use UCloud\UDNS\Apis\DescribeUDNSDomainResponse;
use UCloud\UDNS\Apis\DescribeUDNSRecordRequest;
use UCloud\UDNS\Apis\DescribeUDNSRecordResponse;
use UCloud\UDNS\Apis\DescribeUDNSZoneRequest;
use UCloud\UDNS\Apis\DescribeUDNSZoneResponse;
use UCloud\UDNS\Apis\DisassociateUDNSZoneVPCRequest;
use UCloud\UDNS\Apis\DisassociateUDNSZoneVPCResponse;
use UCloud\UDNS\Apis\ModifyUDNSRecordRequest;
use UCloud\UDNS\Apis\ModifyUDNSRecordResponse;
use UCloud\UDNS\Apis\ModifyUDNSZoneRequest;
use UCloud\UDNS\Apis\ModifyUDNSZoneResponse;

/**
 * This client is used to call actions of **UDNS** service
 */
class UDNSClient extends Client
{

    /**
     * AssociateUDNSZoneVPC - 绑定域名与VPC
     *
     * See also: https://docs.ucloud.cn/api/udns-api/associate_udns_zone_vpc
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DNSZoneId" => (string) 域名资源ID
     *     "VPCProjectId" => (string) VPC所属项目ID
     *     "VPCId" => (string) VPC资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return AssociateUDNSZoneVPCResponse
     * @throws UCloudException
     */
    public function associateUDNSZoneVPC(AssociateUDNSZoneVPCRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new AssociateUDNSZoneVPCResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUDNSRecord - 创建域名记录
     *
     * See also: https://docs.ucloud.cn/api/udns-api/create_udns_record
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DNSZoneId" => (string) 域名资源ID
     *     "Name" => (string) 主机记录
     *     "Type" => (string) 记录类型。枚举值，“A”,"CNAME","MX","AAAA","SRV","PTR","TXT"。
     *     "Value" => (string) 数值组，支持逗号分割。格式为：Value|权重|IsEnabled，其中权重支持1-10，IsEnabled为枚举值（1为启用，0为禁用）。输入格式示例：192.168.1.1|1|1,192.168.1.2|10|0。
     *     "ValueType" => (string) 值类型。枚举值，“Normal”，标准；“Multivalue”，多值返回。仅在值为“Multivalue”时，Value的权重生效。
     *     "TTL" => (integer) TTL值，范围为5-600，单位为秒。默认为5
     *     "Remark" => (string) 记录的备注信息
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DNSRecordId" => (string) 域名记录的资源ID
     * ]
     *
     * @return CreateUDNSRecordResponse
     * @throws UCloudException
     */
    public function createUDNSRecord(CreateUDNSRecordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUDNSRecordResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * CreateUDNSZone - 创建域名
     *
     * See also: https://docs.ucloud.cn/api/udns-api/create_udns_zone
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DNSZoneName" => (string) 域名字符串
     *     "Type" => (string) 域名类型。枚举值，“private”，内网DNS；“public”，公网DNS，暂只支持private。
     *     "Tag" => (string) 所属业务组名称
     *     "Remark" => (string) 备注
     *     "IsRecursionEnabled" => (string) 是否支持迭代。枚举值,"enable",支持迭代; "disable",不支持迭代
     *     "Quantity" => (integer) 购买时长，默认为1
     *     "ChargeType" => (string) 付费方式, 枚举值为: Year, 按年付费; Month, 按月付费; Dynamic, 按需付费，默认为按月付费
     *     "CouponId" => (string) 代金券ID，默认不使用
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "DNSZoneId" => (string) 域名资源ID
     * ]
     *
     * @return CreateUDNSZoneResponse
     * @throws UCloudException
     */
    public function createUDNSZone(CreateUDNSZoneRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new CreateUDNSZoneResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DeleteUDNSRecord - 删除域名记录
     *
     * See also: https://docs.ucloud.cn/api/udns-api/delete_udns_record
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DNSZoneId" => (string) 域名资源ID
     *     "RecordIds" => (array<string>) 域名记录资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DeleteUDNSRecordResponse
     * @throws UCloudException
     */
    public function deleteUDNSRecord(DeleteUDNSRecordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DeleteUDNSRecordResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUDNSDomain - zone下所有域名的rr记录
     *
     * See also: https://docs.ucloud.cn/api/udns-api/describe_udns_domain
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DNSZoneName" => (string) zone名称
     *     "VPCId" => (string) VPI资源ID
     *     "Offset" => (integer) 查询数量偏移
     *     "Limit" => (integer) 返回数量
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "RecordInfos" => (array<object>) 查询记录[
     *         [
     *             "RecordId" => (string) 域名记录资源ID
     *             "Name" => (string) 主机记录
     *             "Type" => (string) 记录类型
     *             "ValueSet" => (array<object>) 数值组[
     *                 [
     *                     "Data" => (string) 主机记录
     *                     "Weight" => (integer) 权重
     *                     "IsEnabled" => (integer) 是否启用
     *                 ]
     *             ]
     *             "ValueType" => (string) 记录策略，标准或随机应答
     *             "TTL" => (integer) TTL值，单位为秒
     *             "Remark" => (string) 记录备注信息
     *         ]
     *     ]
     *     "TotalCount" => (integer) 总条数
     * ]
     *
     * @return DescribeUDNSDomainResponse
     * @throws UCloudException
     */
    public function describeUDNSDomain(DescribeUDNSDomainRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDNSDomainResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUDNSRecord - 获取域名记录
     *
     * See also: https://docs.ucloud.cn/api/udns-api/describe_udns_record
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DNSZoneId" => (string) 域名资源ID
     *     "RecordIds" => (array<string>) 域名记录资源ID
     *     "Limit" => (integer) 数据分页值, 默认为20
     *     "Offset" => (integer) 数据偏移量, 默认为0
     *     "Query" => (string) 模糊查询记录
     *     "SortKey" => (string) 排序字段，只支持host update_time
     *     "SortDir" => (string) 排序方式，支持asc desc
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 资源数量
     *     "RecordInfos" => (array<object>) 域名记录详细信息[
     *         [
     *             "RecordId" => (string) 域名记录资源ID
     *             "Name" => (string) 主机记录
     *             "Type" => (string) 记录类型
     *             "ValueSet" => (array<object>) 数值组[
     *                 [
     *                     "Data" => (string) 主机记录
     *                     "Weight" => (integer) 权重
     *                     "IsEnabled" => (integer) 是否启用
     *                 ]
     *             ]
     *             "ValueType" => (string) 记录策略，标准或随机应答
     *             "TTL" => (integer) TTL值，单位为秒
     *             "Remark" => (string) 记录备注信息
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUDNSRecordResponse
     * @throws UCloudException
     */
    public function describeUDNSRecord(DescribeUDNSRecordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDNSRecordResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUDNSZone - 获取域名信息
     *
     * See also: https://docs.ucloud.cn/api/udns-api/describe_udns_zone
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DNSZoneIds" => (array<string>) 域名资源ID
     *     "Limit" => (integer) 数据分页值, 默认为20
     *     "Offset" => (integer) 数据偏移量, 默认为0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 符合查询条件的域名数量
     *     "DNSZoneInfos" => (array<object>) 域名资源信息[
     *         [
     *             "DNSZoneName" => (string) 域名名称
     *             "DNSZoneId" => (string) UDNS私有域名 Zone ID
     *             "Tag" => (string) 业务组
     *             "Remark" => (string) 备注
     *             "IsRecursionEnabled" => (string) 是否支持迭代。枚举值,"enable",支持迭代; "disable",不支持迭代
     *             "CreateTime" => (integer) 创建时间
     *             "ExpireTime" => (integer) 过期时间
     *             "ChargeType" => (string) 计费类型（Dynamic、Month、Year）
     *             "IsAutoRenew" => (string) 是否开启自动续费（Yes No）
     *             "RecordInfos" => (array<string>) 记录相关ID
     *             "VPCInfos" => (array<object>) 绑定的VPC信息[
     *                 [
     *                     "VPCId" => (string) VPC ID
     *                     "VPCProjectId" => (string) VPC所属项目ID
     *                     "Name" => (string) VPC名称
     *                     "Network" => (array<string>) VPC地址空间
     *                     "VPCType" => (string) VPC类型：Normal 公有云 Hybrid 托管云
     *                 ]
     *             ]
     *         ]
     *     ]
     * ]
     *
     * @return DescribeUDNSZoneResponse
     * @throws UCloudException
     */
    public function describeUDNSZone(DescribeUDNSZoneRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeUDNSZoneResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DisassociateUDNSZoneVPC - 解绑域名和VPC
     *
     * See also: https://docs.ucloud.cn/api/udns-api/disassociate_udns_zone_vpc
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DNSZoneId" => (string) 域名资源ID
     *     "VPCProjectId" => (string) VPC所属项目ID
     *     "VPCId" => (string) VPC资源ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return DisassociateUDNSZoneVPCResponse
     * @throws UCloudException
     */
    public function disassociateUDNSZoneVPC(DisassociateUDNSZoneVPCRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DisassociateUDNSZoneVPCResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUDNSRecord - 修改域名记录
     *
     * See also: https://docs.ucloud.cn/api/udns-api/modify_udns_record
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DNSZoneId" => (string) 域名资源ID
     *     "RecordId" => (string) 域名记录资源ID
     *     "Value" => (string) 数值组，支持逗号分割。格式为：Value|权重|Enable，其中权重支持1-10，Enable为枚举值（1为启用，0为禁用）。输入格式示例：192.168.1.1|1|1,192.168.1.2|10|0。
     *     "ValueType" => (string) 值类型。枚举值，“Normal”，标准；“Multivalue”，多值返回。仅在值为“Multivalue”时，Value的权重生效。
     *     "TTL" => (integer) TTL值，单位为秒
     *     "Remark" => (string) 记录的备注信息
     *     "Type" => (string) 记录类型。枚举值，“A”,"CNAME","MX","AAAA","SRV","PTR","TXT"。
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUDNSRecordResponse
     * @throws UCloudException
     */
    public function modifyUDNSRecord(ModifyUDNSRecordRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUDNSRecordResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUDNSZone - 修改域名备注/递归查询状态
     *
     * See also: https://docs.ucloud.cn/api/udns-api/modify_udns_zone
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "DNSZoneId" => (string) 域名资源ID
     *     "Remark" => (string) 备注
     *     "IsRecursionEnabled" => (string) 是否支持迭代。枚举值,"enable",支持迭代; "disable",不支持迭代
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUDNSZoneResponse
     * @throws UCloudException
     */
    public function modifyUDNSZone(ModifyUDNSZoneRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUDNSZoneResponse($resp->toArray(), $resp->getRequestId());
    }
}
