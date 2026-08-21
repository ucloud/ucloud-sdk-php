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
namespace UCloud\CloudWatch\Apis;

use UCloud\Core\Request\Request;
use UCloud\CloudWatch\Params\UpdateAlertStrategyTemplateParamRuleSet;

class UpdateAlertStrategyTemplateRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateAlertStrategyTemplate"]);
        $this->markRequired("ProjectId");
        $this->markRequired("TemplateID");
        $this->markRequired("Name");
        $this->markRequired("ProductKey");
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
     * TemplateID: 条件模板ID
     *
     * @return integer|null
     */
    public function getTemplateID()
    {
        return $this->get("TemplateID");
    }

    /**
     * TemplateID: 条件模板ID
     *
     * @param int $templateID
     */
    public function setTemplateID($templateID)
    {
        $this->set("TemplateID", $templateID);
    }

    /**
     * Name: 告警模板名称。最大长度64个字符
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 告警模板名称。最大长度64个字符
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * ProductKey: 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *
     * @return string|null
     */
    public function getProductKey()
    {
        return $this->get("ProductKey");
    }

    /**
     * ProductKey: 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *
     * @param string $productKey
     */
    public function setProductKey($productKey)
    {
        $this->set("ProductKey", $productKey);
    }

    /**
     * RuleSet:
     *
     * @return UpdateAlertStrategyTemplateParamRuleSet[]|null
     */
    public function getRuleSet()
    {
        $items = $this->get("RuleSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UpdateAlertStrategyTemplateParamRuleSet($item));
        }
        return $result;
    }

    /**
     * RuleSet:
     *
     * @param UpdateAlertStrategyTemplateParamRuleSet[] $ruleSet
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
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }
}
