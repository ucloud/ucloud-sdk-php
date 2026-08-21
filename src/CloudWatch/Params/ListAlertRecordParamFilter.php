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

class ListAlertRecordParamFilter extends Request
{
    

    /**
     * ProductTypes: 产品ID，根据产品类型精确搜索对应的告警记录，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *
     * @return int[]|null
     */
    public function getProductTypes()
    {
        return $this->get("ProductTypes");
    }

    /**
     * ProductTypes: 产品ID，根据产品类型精确搜索对应的告警记录，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *
     * @param int[] $productTypes
     */
    public function setProductTypes(array $productTypes)
    {
        $this->set("ProductTypes", $productTypes);
    }

    /**
     * Levels: 告警级别，根据告警级别精确搜索对应的告警记录，枚举值:P0,P1,P2,P3
     *
     * @return string[]|null
     */
    public function getLevels()
    {
        return $this->get("Levels");
    }

    /**
     * Levels: 告警级别，根据告警级别精确搜索对应的告警记录，枚举值:P0,P1,P2,P3
     *
     * @param string[] $levels
     */
    public function setLevels(array $levels)
    {
        $this->set("Levels", $levels);
    }

    /**
     * Status: 告警状态，根据告警状态精确搜索对应的告警记录，枚举值：firing-告警中，resolved-已恢复
     *
     * @return string[]|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 告警状态，根据告警状态精确搜索对应的告警记录，枚举值：firing-告警中，resolved-已恢复
     *
     * @param string[] $status
     */
    public function setStatus(array $status)
    {
        $this->set("Status", $status);
    }
}
