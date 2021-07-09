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
namespace UCloud\UDPN;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UDPN\Apis\AllocateUDPNRequest;
use UCloud\UDPN\Apis\AllocateUDPNResponse;
use UCloud\UDPN\Apis\DescribeUDPNRequest;
use UCloud\UDPN\Apis\DescribeUDPNResponse;
use UCloud\UDPN\Apis\GetUDPNLineListRequest;
use UCloud\UDPN\Apis\GetUDPNLineListResponse;
use UCloud\UDPN\Apis\GetUDPNPriceRequest;
use UCloud\UDPN\Apis\GetUDPNPriceResponse;
use UCloud\UDPN\Apis\GetUDPNUpgradePriceRequest;
use UCloud\UDPN\Apis\GetUDPNUpgradePriceResponse;
use UCloud\UDPN\Apis\ModifyUDPNBandwidthRequest;
use UCloud\UDPN\Apis\ModifyUDPNBandwidthResponse;
use UCloud\UDPN\Apis\ReleaseUDPNRequest;
use UCloud\UDPN\Apis\ReleaseUDPNResponse;

/**
 * This client is used to call actions of **UDPN** service
 */
class UDPNClient extends Client {

    /**
     * AllocateUDPN - 分配一条 UDPN 专线
     *
     * See also: https://docs.ucloud.cn/api/UDPN-api/allocate_udpn
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Peer1" => (string) 专线可用区1，支持地域：北京二：cn-bj2, 上海二：cn-sh2, 广东：cn-gd, 亚太： hk, 上海一：cn-sh1, 法兰克福：ge-fra, 新加坡：sg,  洛杉矶：us-ca， 华盛顿：us-ws， 东京：jpn-tky
     *     "Peer2" => (string) 专线可用区2，支持地域：北京二：cn-bj2, 上海二：cn-sh2, 广东：cn-gd, 亚太： hk, 上海一：cn-sh1, 法兰克福：ge-fra, 新加坡：sg,  洛杉矶：us-ca， 华盛顿：us-ws， 东京：jpn-tky
     *     "Bandwidth" => (integer) 带宽
     *     "ChargeType" => (string) 计费类型，枚举值为： Year，按年付费； Month，按月付费； Dynamic，按需付费
     *     "Quantity" => (integer) 计费时长，默认 1
     *     "PayMode" => (string) 计费模式. 枚举值："Traffic", 流量计费模式; 否则 带宽计费模式；
     *     "CouponId" => (string) 代金劵
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "UDPNId" => (string) 资源名称
     * ]
     *
     * @throws UCloudException
     */
    public function allocateUDPN(AllocateUDPNRequest $request = null): AllocateUDPNResponse {
        $resp = $this->invoke($request);
        return new AllocateUDPNResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * DescribeUDPN - 描述 UDPN
     *
     * See also: https://docs.ucloud.cn/api/UDPN-api/describe_udpn
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "UDPNId" => (string) 申请到的 UDPN 资源 ID。若为空，则查询该用户在机房所有的专线信息。非默认项目资源，需填写ProjectId
     *     "Offset" => (integer) 列表起始位置偏移量，默认为 0
     *     "Limit" => (integer) 返回数据长度，默认为 20
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) 查询到的总数量
     *     "DataSet" => (array<object>) UDPN详情[
     *         [
     *             "UDPNId" => (string) UDPN 资源短 ID
     *             "Peer1" => (string) 可用区域 1
     *             "Peer2" => (string) 可用区域 2
     *             "ChargeType" => (string) 计费类型
     *             "Bandwidth" => (integer) 带宽
     *             "CreateTime" => (integer) unix 时间戳 创建时间
     *             "ExpireTime" => (integer) unix 时间戳 到期时间
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function describeUDPN(DescribeUDPNRequest $request = null): DescribeUDPNResponse {
        $resp = $this->invoke($request);
        return new DescribeUDPNResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUDPNLineList - 获取当前支持的专线线路列表
     *
     * See also: https://docs.ucloud.cn/api/UDPN-api/get_udpn_line_list
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "TotalCount" => (integer) DataSet中的元素个数
     *     "DataSet" => (array<object>) 当前支持的专线线路详细信息，详见UDPNLineSet[
     *         [
     *             "LocalRegion" => (string) 支持UDPN的地域之一，北京二：cn-bj2, 上海二：cn-sh2, 广东：cn-gd, 亚太： hk, 上海一：cn-sh1, 法兰克福：ge-fra, 新加坡：sg, 华盛顿：us-ws, 洛杉矶：us-la， 东京：jpn-tky
     *             "RemoteRegion" => (string) 支持UDPN的地域之一，北京二：cn-bj2, 上海二：cn-sh2, 广东：cn-gd, 亚太： hk, 上海一：cn-sh1, 法兰克福：ge-fra, 新加坡：sg, 华盛顿：us-ws, 洛杉矶：us-la， 东京：jpn-tky
     *             "BandwidthUpperLimit" => (integer) 线路带宽上限,单位 M
     *         ]
     *     ]
     * ]
     *
     * @throws UCloudException
     */
    public function getUDPNLineList(GetUDPNLineListRequest $request = null): GetUDPNLineListResponse {
        $resp = $this->invoke($request);
        return new GetUDPNLineListResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUDPNPrice - 获取 UDPN 价格
     *
     * See also: https://docs.ucloud.cn/api/UDPN-api/get_udpn_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "Peer1" => (string) 专线可用区1，支持地域：北京二：cn-bj2, 上海二：cn-sh2, 广东：cn-gd, 亚太： hk, 上海一：cn-sh1, 法兰克福：ge-fra, 新加坡：sg, 洛杉矶：us-la， 华盛顿：us-ws， 东京：jpn-tky
     *     "Peer2" => (string) 专线可用区2，支持地域：北京二：cn-bj2, 上海二：cn-sh2, 广东：cn-gd, 亚太： hk, 上海一：cn-sh1, 法兰克福：ge-fra, 新加坡：sg, 洛杉矶：us-la， 华盛顿：us-ws， 东京：jpn-tky
     *     "Bandwidth" => (integer) 带宽信息
     *     "ChargeType" => (string) 计费类型
     *     "Quantity" => (integer) 购买时长
     *     "PayMode" => (string) PayMode，枚举值，Bandwidth：带宽；Traffic：流量  默认不填写：带宽
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "PurchaseValue" => (integer) 资源有效期 unix 时间戳
     *     "Price" => (number) 专线价格
     * ]
     *
     * @throws UCloudException
     */
    public function getUDPNPrice(GetUDPNPriceRequest $request = null): GetUDPNPriceResponse {
        $resp = $this->invoke($request);
        return new GetUDPNPriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * GetUDPNUpgradePrice - 获取专线升级价格
     *
     * See also: https://docs.ucloud.cn/api/UDPN-api/get_udpn_upgrade_price
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDPNId" => (string) 专线带宽资源 Id
     *     "Bandwidth" => (integer) 带宽
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "Price" => (number) 升级后的价格
     * ]
     *
     * @throws UCloudException
     */
    public function getUDPNUpgradePrice(GetUDPNUpgradePriceRequest $request = null): GetUDPNUpgradePriceResponse {
        $resp = $this->invoke($request);
        return new GetUDPNUpgradePriceResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ModifyUDPNBandwidth - 修改带宽值
     *
     * See also: https://docs.ucloud.cn/api/UDPN-api/modify_udpn_bandwidth
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDPNId" => (string) UDPN Id
     *     "Bandwidth" => (integer) 调整后专线带宽, 单位为Mbps，取值范围为大于等于2且小于等于1000([2-1000])的整数
     *     "CouponId" => (string) 代金劵 ID
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function modifyUDPNBandwidth(ModifyUDPNBandwidthRequest $request = null): ModifyUDPNBandwidthResponse {
        $resp = $this->invoke($request);
        return new ModifyUDPNBandwidthResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * ReleaseUDPN - 释放 UDPN
     *
     * See also: https://docs.ucloud.cn/api/UDPN-api/release_udpn
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *     "UDPNId" => (string) UDPN 资源 Id
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     * ]
     *
     * @throws UCloudException
     */
    public function releaseUDPN(ReleaseUDPNRequest $request = null): ReleaseUDPNResponse {
        $resp = $this->invoke($request);
        return new ReleaseUDPNResponse($resp->toArray(), $resp->getRequestId());
    }
}
