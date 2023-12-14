<?php
/**
 * Copyright 2023 UCloud Technology Co., Ltd.
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
namespace UCloud\UGN;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UGN\Apis\DescribeSimpleUGNRequest;
use UCloud\UGN\Apis\DescribeSimpleUGNResponse;
use UCloud\UGN\Apis\GetSimpleUGNBwPackagesRequest;
use UCloud\UGN\Apis\GetSimpleUGNBwPackagesResponse;
use UCloud\UGN\Apis\ListSimpleBwPackageRequest;
use UCloud\UGN\Apis\ListSimpleBwPackageResponse;
use UCloud\UGN\Apis\ListUGNRequest;
use UCloud\UGN\Apis\ListUGNResponse;
use UCloud\UGN\Apis\ModifyUGNBandwidthRequest;
use UCloud\UGN\Apis\ModifyUGNBandwidthResponse;

/**
 * This client is used to call actions of **UGN** service
 */
class UGNClient extends Client
{

    /**
     * DescribeSimpleUGN - 获取简洁版UGN详情
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/describe_simple_ugn
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGNID" => (string) UGN ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UGN" => (object) [
     *         "UGNID" => (string) 云联网资源 ID
     *         "Name" => (string) 云联网名称
     *         "Remark" => (string) 云联网备注
     *         "CreateTime" => (integer) 云联网创建时间
     *         "NetworkCount" => (integer) 关联网络实例数量
     *         "BwPackageCount" => (integer) 绑定带宽包数量
     *     ]
     *     "Networks" => (array<object>) [
     *         [
     *             "Region" => (string) 网络实例所在地域
     *             "NetworkID" => (string) 网络实例的ID，如 vnet-xxxxx
     *             "Name" => (string) 网络实例名称
     *             "Type" => (string) 网络实例类型：VPC/HybridGW/...
     *             "OrgName" => (string) 网络实例所在项目名
     *             "RegionID" => (integer) 网络实例所在地域ID
     *             "OrgID" => (integer) 网络实例所在项目的ID
     *             "CreateTime" => (integer)
     *         ]
     *     ]
     *     "BwPackages" => (array<object>) [
     *         [
     *             "PackageID" => (string)
     *             "UGNID" => (string)
     *             "PayMode" => (string) 计费模式 FixedBw:固定带宽｜Peak95:经典95｜Max5:第五峰值｜Traffic:流量计费
     *             "RegionA" => (string) 地域A名称
     *             "RegionB" => (string) 地域B名称
     *             "BandWidth" => (number) 带宽值
     *             "Qos" => (string) 服务质量Diamond:钻石｜Platinum:铂金｜Gold:黄金
     *             "Path" => (string) 智能路径Delay:最低时延｜IGP:普通线路｜TCO:最低成本
     *             "CreateTime" => (integer) 创建时间
     *             "Name" => (string)
     *             "Remark" => (string)
     *             "ExpireTime" => (integer) 过期时间
     *             "ChangeStatus" => (integer) 带宽包切换状态
     *             "ChangeTime" => (integer) 带宽包切换时间
     *             "ChangePayMode" => (string) 带宽包切换计费类型
     *         ]
     *     ]
     *     "Routes" => (array<object>) [
     *         [
     *             "DstAddr" => (string) 目的网段
     *             "NextHopID" => (string) 下一跳网络实例 ID
     *             "NextHopType" => (string) 下一跳网络实例类型
     *             "NextHopRegion" => (string) 下一跳网络实例所属地域
     *             "NextHopRegionID" => (integer) 下一跳网络实例所属地域 id
     *             "Priority" => (integer) 路由优先级
     *         ]
     *     ]
     * ]
     *
     * @return DescribeSimpleUGNResponse
     * @throws UCloudException
     */
    public function describeSimpleUGN(DescribeSimpleUGNRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new DescribeSimpleUGNResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetSimpleUGNBwPackages - 获取指定云联网内的带宽包
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/get_simple_ugn_bw_packages
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UGNID" => (string)
     *     "Offset" => (integer) 偏移量，默认0
     *     "Limit" => (integer)     分页大小，默认20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "BwPackages" => (array<object>) [
     *         [
     *             "PackageID" => (string)
     *             "UGNID" => (string)
     *             "PayMode" => (string) 计费模式 FixedBw:固定带宽｜Peak95:经典95｜Max5:第五峰值｜Traffic:流量计费
     *             "RegionA" => (string) 地域A名称
     *             "RegionB" => (string) 地域B名称
     *             "BandWidth" => (number) 带宽值
     *             "Qos" => (string) 服务质量Diamond:钻石｜Platinum:铂金｜Gold:黄金
     *             "Path" => (string) 智能路径Delay:最低时延｜IGP:普通线路｜TCO:最低成本
     *             "CreateTime" => (integer) 创建时间
     *             "Name" => (string)
     *             "Remark" => (string)
     *             "ExpireTime" => (integer) 过期时间
     *             "ChangeStatus" => (integer) 带宽包切换状态
     *             "ChangeTime" => (integer) 带宽包切换时间
     *             "ChangePayMode" => (string) 带宽包切换计费类型
     *         ]
     *     ]
     *     "TotalCount" => (integer)
     *     "Offset" => (integer)
     *     "Limit" => (integer)
     * ]
     *
     * @return GetSimpleUGNBwPackagesResponse
     * @throws UCloudException
     */
    public function getSimpleUGNBwPackages(GetSimpleUGNBwPackagesRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new GetSimpleUGNBwPackagesResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListSimpleBwPackage - 获取当前项目下的带宽包列表
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/list_simple_bw_package
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Offset" => (integer)
     *     "Limit" => (integer)
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer)
     *     "Offset" => (integer)
     *     "Limit" => (integer)
     *     "BwPackages" => (array<object>) [
     *         [
     *             "PackageID" => (string)
     *             "UGNID" => (string)
     *             "PayMode" => (string) 计费模式 FixedBw:固定带宽｜Peak95:经典95｜Max5:第五峰值｜Traffic:流量计费
     *             "RegionA" => (string) 地域A名称
     *             "RegionB" => (string) 地域B名称
     *             "BandWidth" => (number) 带宽值
     *             "Qos" => (string) 服务质量Diamond:钻石｜Platinum:铂金｜Gold:黄金
     *             "Path" => (string) 智能路径Delay:最低时延｜IGP:普通线路｜TCO:最低成本
     *             "CreateTime" => (integer) 创建时间
     *             "Name" => (string)
     *             "Remark" => (string)
     *             "ExpireTime" => (integer) 过期时间
     *             "ChangeStatus" => (integer) 带宽包切换状态
     *             "ChangeTime" => (integer) 带宽包切换时间
     *             "ChangePayMode" => (string) 带宽包切换计费类型
     *         ]
     *     ]
     * ]
     *
     * @return ListSimpleBwPackageResponse
     * @throws UCloudException
     */
    public function listSimpleBwPackage(ListSimpleBwPackageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListSimpleBwPackageResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ListUGN - 获取当前项目下所有云联网资源
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/list_ugn
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Limit" => (integer) 分页大小，默认20
     *     "Offset" => (integer) 偏移量，默认0
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UGNs" => (array<object>) [
     *         [
     *             "UGNID" => (string) 云联网资源 ID
     *             "Name" => (string) 云联网名称
     *             "Remark" => (string) 云联网备注
     *             "CreateTime" => (integer) 云联网创建时间
     *             "NetworkCount" => (integer) 关联网络实例数量
     *             "BwPackageCount" => (integer) 绑定带宽包数量
     *         ]
     *     ]
     *     "TotalCount" => (integer)
     *     "Offset" => (integer)
     *     "Limit" => (integer)
     * ]
     *
     * @return ListUGNResponse
     * @throws UCloudException
     */
    public function listUGN(ListUGNRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ListUGNResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUGNBandwidth - 修改云联网带宽大小
     *
     * See also: https://docs.ucloud.cn/api/ugn-api/modify_ugn_bandwidth
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "PackageID" => (string) 带宽包id
     *     "UGNID" => (string) 云联网id
     *     "BandWidth" => (integer) 带宽值
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @return ModifyUGNBandwidthResponse
     * @throws UCloudException
     */
    public function modifyUGNBandwidth(ModifyUGNBandwidthRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new ModifyUGNBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }
}
