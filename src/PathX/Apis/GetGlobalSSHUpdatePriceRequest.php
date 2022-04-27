<?php

/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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

namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class GetGlobalSSHUpdatePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetGlobalSSHUpdatePrice"]);
        $this->markRequired("ProjectId");
        $this->markRequired("InstanceType");
    }


    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * InstanceType: 升级后的实例类型。枚举值，Enterprise:企业版；Basic:基础版。
     *
     * @return string|null
     */
    public function getInstanceType()
    {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: 升级后的实例类型。枚举值，Enterprise:企业版；Basic:基础版。
     *
     * @param string $instanceType
     */
    public function setInstanceType(string $instanceType)
    {
        $this->set("InstanceType", $instanceType);
    }
    /**
     * InstanceId: 实例ID，唯一资源标识。从免费版升级到付费版可不填，其他情况必填。
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 实例ID，唯一资源标识。从免费版升级到付费版可不填，其他情况必填。
     *
     * @param string $instanceId
     */
    public function setInstanceId(string $instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }
    /**
     * Quantity: 购买周期，如果ChargeType为Month，Quantity可以不填默认为0；其他情况必须为正整数。
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买周期，如果ChargeType为Month，Quantity可以不填默认为0；其他情况必须为正整数。
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->set("Quantity", $quantity);
    }
    /**
     * ChargeType: 计费类型：Dynamic，Month，Year。从免费版升级到付费版必须传，其他情况不需要传
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费类型：Dynamic，Month，Year。从免费版升级到付费版必须传，其他情况不需要传
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }
}
