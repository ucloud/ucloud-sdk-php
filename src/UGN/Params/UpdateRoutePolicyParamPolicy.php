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
namespace UCloud\UGN\Params;

use UCloud\Core\Request\Request;

class UpdateRoutePolicyParamPolicy extends Request
{
    

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
     * Name: 策略名称，限定长度 255
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 策略名称，限定长度 255
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
     * RouteAction: 策略执行动作，限定取值："Permit"/"Deny"
     *
     * @return string|null
     */
    public function getRouteAction()
    {
        return $this->get("RouteAction");
    }

    /**
     * RouteAction: 策略执行动作，限定取值："Permit"/"Deny"
     *
     * @param string $routeAction
     */
    public function setRouteAction($routeAction)
    {
        $this->set("RouteAction", $routeAction);
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
     * SrcNetworks:
     *
     * @return UpdateRoutePolicyParamPolicySrcNetworks[]|null
     */
    public function getSrcNetworks()
    {
        $items = $this->get("SrcNetworks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UpdateRoutePolicyParamPolicySrcNetworks($item));
        }
        return $result;
    }

    /**
     * SrcNetworks:
     *
     * @param UpdateRoutePolicyParamPolicySrcNetworks[] $srcNetworks
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
     * DstNetworks:
     *
     * @return UpdateRoutePolicyParamPolicyDstNetworks[]|null
     */
    public function getDstNetworks()
    {
        $items = $this->get("DstNetworks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UpdateRoutePolicyParamPolicyDstNetworks($item));
        }
        return $result;
    }

    /**
     * DstNetworks:
     *
     * @param UpdateRoutePolicyParamPolicyDstNetworks[] $dstNetworks
     */
    public function setDstNetworks(array $dstNetworks)
    {
        $result = [];
        foreach ($dstNetworks as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
