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
namespace UCloud\UGN\Models;

use UCloud\Core\Response\Response;

class Policy extends Response
{
    

    /**
     * Region: 作用地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 作用地域
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * PolicyId: 路由策略ID
     *
     * @return string|null
     */
    public function getPolicyId()
    {
        return $this->get("PolicyId");
    }

    /**
     * PolicyId: 路由策略ID
     *
     * @param string $policyId
     */
    public function setPolicyId($policyId)
    {
        $this->set("PolicyId", $policyId);
    }

    /**
     * Name: 路由策略名称，限定长度255
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 路由策略名称，限定长度255
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Direction: 策略方向，限定取值："In"/"Out"
     *
     * @return string|null
     */
    public function getDirection()
    {
        return $this->get("Direction");
    }

    /**
     * Direction: 策略方向，限定取值："In"/"Out"
     *
     * @param string $direction
     */
    public function setDirection($direction)
    {
        $this->set("Direction", $direction);
    }

    /**
     * Enabled: 是否启用
     *
     * @return boolean|null
     */
    public function getEnabled()
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: 是否启用
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->set("Enabled", $enabled);
    }

    /**
     * Priority: 策略优先级，范围：[1,255]，数值越小优先级越大，同一方向，策略优先级不可重复
     *
     * @return integer|null
     */
    public function getPriority()
    {
        return $this->get("Priority");
    }

    /**
     * Priority: 策略优先级，范围：[1,255]，数值越小优先级越大，同一方向，策略优先级不可重复
     *
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->set("Priority", $priority);
    }

    /**
     * Action: 策略执行动作，限定取值："Permit"/"Deny"
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->get("Action");
    }

    /**
     * Action: 策略执行动作，限定取值："Permit"/"Deny"
     *
     * @param string $action
     */
    public function setAction($action)
    {
        $this->set("Action", $action);
    }

    /**
     * RoutePriority: 当执行动作为 "Permit" 时，给匹配中的路由设置路由优先级，范围：[1,255]，数值越小优先级越大
     *
     * @return integer|null
     */
    public function getRoutePriority()
    {
        return $this->get("RoutePriority");
    }

    /**
     * RoutePriority: 当执行动作为 "Permit" 时，给匹配中的路由设置路由优先级，范围：[1,255]，数值越小优先级越大
     *
     * @param int $routePriority
     */
    public function setRoutePriority($routePriority)
    {
        $this->set("RoutePriority", $routePriority);
    }

    /**
     * SrcRegions: 路由策略需要匹配的路由的所在地域数组
     *
     * @return string[]|null
     */
    public function getSrcRegions()
    {
        return $this->get("SrcRegions");
    }

    /**
     * SrcRegions: 路由策略需要匹配的路由的所在地域数组
     *
     * @param string[] $srcRegions
     */
    public function setSrcRegions(array $srcRegions)
    {
        $this->set("SrcRegions", $srcRegions);
    }

    /**
     * SrcNetworkTypes: 路由策略需要匹配的路由的网络实例类型数组，限定取值："VPC" / "UWAN-VRouter"
     *
     * @return string[]|null
     */
    public function getSrcNetworkTypes()
    {
        return $this->get("SrcNetworkTypes");
    }

    /**
     * SrcNetworkTypes: 路由策略需要匹配的路由的网络实例类型数组，限定取值："VPC" / "UWAN-VRouter"
     *
     * @param string[] $srcNetworkTypes
     */
    public function setSrcNetworkTypes(array $srcNetworkTypes)
    {
        $this->set("SrcNetworkTypes", $srcNetworkTypes);
    }

    /**
     * SrcNetworks: 路由策略需要匹配的路由的网络实例类型以及该实例下的网段信息
     *
     * @return NetworkAndPrefix[]|null
     */
    public function getSrcNetworks()
    {
        $items = $this->get("SrcNetworks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NetworkAndPrefix($item));
        }
        return $result;
    }

    /**
     * SrcNetworks: 路由策略需要匹配的路由的网络实例类型以及该实例下的网段信息
     *
     * @param NetworkAndPrefix[] $srcNetworks
     */
    public function setSrcNetworks(array $srcNetworks)
    {
        $result = [];
        foreach ($srcNetworks as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * DstNetworkTypes: 路由策略需要作用的网络实例类型数组，限定取值："VPC" / "UWAN-VRouter"
     *
     * @return string[]|null
     */
    public function getDstNetworkTypes()
    {
        return $this->get("DstNetworkTypes");
    }

    /**
     * DstNetworkTypes: 路由策略需要作用的网络实例类型数组，限定取值："VPC" / "UWAN-VRouter"
     *
     * @param string[] $dstNetworkTypes
     */
    public function setDstNetworkTypes(array $dstNetworkTypes)
    {
        $this->set("DstNetworkTypes", $dstNetworkTypes);
    }

    /**
     * DstNetworks: 路由策略需要作用的网络实例ID
     *
     * @return NetworkAndPrefix[]|null
     */
    public function getDstNetworks()
    {
        $items = $this->get("DstNetworks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NetworkAndPrefix($item));
        }
        return $result;
    }

    /**
     * DstNetworks: 路由策略需要作用的网络实例ID
     *
     * @param NetworkAndPrefix[] $dstNetworks
     */
    public function setDstNetworks(array $dstNetworks)
    {
        $result = [];
        foreach ($dstNetworks as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * Matched: 是否匹配中路由
     *
     * @return boolean|null
     */
    public function getMatched()
    {
        return $this->get("Matched");
    }

    /**
     * Matched: 是否匹配中路由
     *
     * @param boolean $matched
     */
    public function setMatched($matched)
    {
        $this->set("Matched", $matched);
    }
}
