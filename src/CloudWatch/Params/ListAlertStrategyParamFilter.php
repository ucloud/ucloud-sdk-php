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
namespace UCloud\CloudWatch\Params;

use UCloud\Core\Request\Request;

class ListAlertStrategyParamFilter extends Request
{
    

    /**
     * ProductTypes: 产品ID，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *
     * @return int[]|null
     */
    public function getProductTypes()
    {
        return $this->get("ProductTypes");
    }

    /**
     * ProductTypes: 产品ID，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *
     * @param int[] $productTypes
     */
    public function setProductTypes(array $productTypes)
    {
        $this->set("ProductTypes", $productTypes);
    }

    /**
     * AlertStrategyIDs: 告警策略id，根据策略id获取告警策略列表
     *
     * @return int[]|null
     */
    public function getAlertStrategyIDs()
    {
        return $this->get("AlertStrategyIDs");
    }

    /**
     * AlertStrategyIDs: 告警策略id，根据策略id获取告警策略列表
     *
     * @param int[] $alertStrategyIDs
     */
    public function setAlertStrategyIDs(array $alertStrategyIDs)
    {
        $this->set("AlertStrategyIDs", $alertStrategyIDs);
    }

    /**
     * Status: 告警策略状态，根据告警策略状态精确搜索对应的告警策略，枚举值：0-停用，1-启用
     *
     * @return int[]|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 告警策略状态，根据告警策略状态精确搜索对应的告警策略，枚举值：0-停用，1-启用
     *
     * @param int[] $status
     */
    public function setStatus(array $status)
    {
        $this->set("Status", $status);
    }
}
