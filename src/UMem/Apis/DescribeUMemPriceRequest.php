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
namespace UCloud\UMem\Apis;

use UCloud\Core\Request\Request;

class DescribeUMemPriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUMemPrice"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("ProjectId");
        $this->markRequired("Size");
        $this->markRequired("Type");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Size: 购买umem大小,单位:GB,范围[1~1024]
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 购买umem大小,单位:GB,范围[1~1024]
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)(默认: double)
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)(默认: double)
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * ChargeType: Year， Month， Dynamic 如果不指定，则一次性获取三种计费
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year， Month， Dynamic 如果不指定，则一次性获取三种计费
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买UMem的时长，默认值为1
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买UMem的时长，默认值为1
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * HighPerformance: 实例类型是否为性能增强型。默认为false，或者不填，true为性能增强型。
     *
     * @return boolean|null
     */
    public function getHighPerformance()
    {
        return $this->get("HighPerformance");
    }

    /**
     * HighPerformance: 实例类型是否为性能增强型。默认为false，或者不填，true为性能增强型。
     *
     * @param boolean $highPerformance
     */
    public function setHighPerformance($highPerformance)
    {
        $this->set("HighPerformance", $highPerformance);
    }

    /**
     * BlockCnt: umem 分片个数
     *
     * @return integer|null
     */
    public function getBlockCnt()
    {
        return $this->get("BlockCnt");
    }

    /**
     * BlockCnt: umem 分片个数
     *
     * @param int $blockCnt
     */
    public function setBlockCnt($blockCnt)
    {
        $this->set("BlockCnt", $blockCnt);
    }

    /**
     * ProxySize: umem 代理CPU核心数
     *
     * @return integer|null
     */
    public function getProxySize()
    {
        return $this->get("ProxySize");
    }

    /**
     * ProxySize: umem 代理CPU核心数
     *
     * @param int $proxySize
     */
    public function setProxySize($proxySize)
    {
        $this->set("ProxySize", $proxySize);
    }

    /**
     * UlbMode: umem分布式代理类型，默认false，true为负载均衡型代理
     *
     * @return string|null
     */
    public function getUlbMode()
    {
        return $this->get("UlbMode");
    }

    /**
     * UlbMode: umem分布式代理类型，默认false，true为负载均衡型代理
     *
     * @param string $ulbMode
     */
    public function setUlbMode($ulbMode)
    {
        $this->set("UlbMode", $ulbMode);
    }

    /**
     * ClusterMode: 数据库类型，RWMode为读写分离
     *
     * @return string|null
     */
    public function getClusterMode()
    {
        return $this->get("ClusterMode");
    }

    /**
     * ClusterMode: 数据库类型，RWMode为读写分离
     *
     * @param string $clusterMode
     */
    public function setClusterMode($clusterMode)
    {
        $this->set("ClusterMode", $clusterMode);
    }

    /**
     * ProxyCnt: umem 代理个数
     *
     * @return integer|null
     */
    public function getProxyCnt()
    {
        return $this->get("ProxyCnt");
    }

    /**
     * ProxyCnt: umem 代理个数
     *
     * @param int $proxyCnt
     */
    public function setProxyCnt($proxyCnt)
    {
        $this->set("ProxyCnt", $proxyCnt);
    }
}
