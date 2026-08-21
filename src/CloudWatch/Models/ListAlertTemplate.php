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
namespace UCloud\CloudWatch\Models;

use UCloud\Core\Response\Response;

class ListAlertTemplate extends Response
{
    

    /**
     * CompanyID: 公司id
     *
     * @return integer|null
     */
    public function getCompanyID()
    {
        return $this->get("CompanyID");
    }

    /**
     * CompanyID: 公司id
     *
     * @param int $companyID
     */
    public function setCompanyID($companyID)
    {
        $this->set("CompanyID", $companyID);
    }

    /**
     * TemplateID: 模板Id
     *
     * @return integer|null
     */
    public function getTemplateID()
    {
        return $this->get("TemplateID");
    }

    /**
     * TemplateID: 模板Id
     *
     * @param int $templateID
     */
    public function setTemplateID($templateID)
    {
        $this->set("TemplateID", $templateID);
    }

    /**
     * Name: 告警模板名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 告警模板名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * ProductType: 产品类型(数值型)。参考ListMonitorProduct获取监控对象类型列表
     *
     * @return integer|null
     */
    public function getProductType()
    {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 产品类型(数值型)。参考ListMonitorProduct获取监控对象类型列表
     *
     * @param int $productType
     */
    public function setProductType($productType)
    {
        $this->set("ProductType", $productType);
    }

    /**
     * ProductKey: 产品类型(字符型)。参考ListMonitorProduct获取监控对象类型列表
     *
     * @return string|null
     */
    public function getProductKey()
    {
        return $this->get("ProductKey");
    }

    /**
     * ProductKey: 产品类型(字符型)。参考ListMonitorProduct获取监控对象类型列表
     *
     * @param string $productKey
     */
    public function setProductKey($productKey)
    {
        $this->set("ProductKey", $productKey);
    }

    /**
     * RuleSet: 告警条件规则
     *
     * @return AlertRule[]|null
     */
    public function getRuleSet()
    {
        $items = $this->get("RuleSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AlertRule($item));
        }
        return $result;
    }

    /**
     * RuleSet: 告警条件规则
     *
     * @param AlertRule[] $ruleSet
     */
    public function setRuleSet(array $ruleSet)
    {
        $result = [];
        foreach ($ruleSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Remark: 条件模板备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 条件模板备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }
}
