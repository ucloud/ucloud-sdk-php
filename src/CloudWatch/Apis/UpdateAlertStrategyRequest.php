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
use UCloud\CloudWatch\Params\UpdateAlertStrategyParamRuleSet;

class UpdateAlertStrategyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateAlertStrategy"]);
        $this->markRequired("ProjectId");
        $this->markRequired("AlertStrategyID");
        $this->markRequired("Name");
        $this->markRequired("ProductKey");
        $this->markRequired("ObjectType");
        $this->markRequired("ConfigMode");
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
     * AlertStrategyID: 告警策略id
     *
     * @return string|null
     */
    public function getAlertStrategyID()
    {
        return $this->get("AlertStrategyID");
    }

    /**
     * AlertStrategyID: 告警策略id
     *
     * @param string $alertStrategyID
     */
    public function setAlertStrategyID($alertStrategyID)
    {
        $this->set("AlertStrategyID", $alertStrategyID);
    }

    /**
     * Name: 告警策略名称。最大长度255个字符
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 告警策略名称。最大长度255个字符
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
     * ObjectType: 绑定资源类型 1 资源组 2 资源
     *
     * @return integer|null
     */
    public function getObjectType()
    {
        return $this->get("ObjectType");
    }

    /**
     * ObjectType: 绑定资源类型 1 资源组 2 资源
     *
     * @param int $objectType
     */
    public function setObjectType($objectType)
    {
        $this->set("ObjectType", $objectType);
    }

    /**
     * ConfigMode: 条件设置方式 1. 手动配置 2.选择模版
     *
     * @return integer|null
     */
    public function getConfigMode()
    {
        return $this->get("ConfigMode");
    }

    /**
     * ConfigMode: 条件设置方式 1. 手动配置 2.选择模版
     *
     * @param int $configMode
     */
    public function setConfigMode($configMode)
    {
        $this->set("ConfigMode", $configMode);
    }

    /**
     * Resources: 绑定资源，对应绑定资源类型ObjectType=2
     *
     * @return string[]|null
     */
    public function getResources()
    {
        return $this->get("Resources");
    }

    /**
     * Resources: 绑定资源，对应绑定资源类型ObjectType=2
     *
     * @param string[] $resources
     */
    public function setResources(array $resources)
    {
        $this->set("Resources", $resources);
    }

    /**
     * ResourceGroupIDs: 绑定资源组，对应绑定资源类型ObjectType=1
     *
     * @return int[]|null
     */
    public function getResourceGroupIDs()
    {
        return $this->get("ResourceGroupIDs");
    }

    /**
     * ResourceGroupIDs: 绑定资源组，对应绑定资源类型ObjectType=1
     *
     * @param int[] $resourceGroupIDs
     */
    public function setResourceGroupIDs(array $resourceGroupIDs)
    {
        $this->set("ResourceGroupIDs", $resourceGroupIDs);
    }

    /**
     * TemplateId: 模板id.对应ConfigMode=2
     *
     * @return integer|null
     */
    public function getTemplateId()
    {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: 模板id.对应ConfigMode=2
     *
     * @param int $templateId
     */
    public function setTemplateId($templateId)
    {
        $this->set("TemplateId", $templateId);
    }

    /**
     * RuleSet:
     *
     * @return UpdateAlertStrategyParamRuleSet[]|null
     */
    public function getRuleSet()
    {
        $items = $this->get("RuleSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UpdateAlertStrategyParamRuleSet($item));
        }
        return $result;
    }

    /**
     * RuleSet:
     *
     * @param UpdateAlertStrategyParamRuleSet[] $ruleSet
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
     * NotifyType: 通知类型 通知组 group 通知人 user
     *
     * @return string|null
     */
    public function getNotifyType()
    {
        return $this->get("NotifyType");
    }

    /**
     * NotifyType: 通知类型 通知组 group 通知人 user
     *
     * @param string $notifyType
     */
    public function setNotifyType($notifyType)
    {
        $this->set("NotifyType", $notifyType);
    }

    /**
     * NotifyUserIDs: 通知人id
     *
     * @return int[]|null
     */
    public function getNotifyUserIDs()
    {
        return $this->get("NotifyUserIDs");
    }

    /**
     * NotifyUserIDs: 通知人id
     *
     * @param int[] $notifyUserIDs
     */
    public function setNotifyUserIDs(array $notifyUserIDs)
    {
        $this->set("NotifyUserIDs", $notifyUserIDs);
    }

    /**
     * NotifyGroupIDs: 通知人组id
     *
     * @return int[]|null
     */
    public function getNotifyGroupIDs()
    {
        return $this->get("NotifyGroupIDs");
    }

    /**
     * NotifyGroupIDs: 通知人组id
     *
     * @param int[] $notifyGroupIDs
     */
    public function setNotifyGroupIDs(array $notifyGroupIDs)
    {
        $this->set("NotifyGroupIDs", $notifyGroupIDs);
    }

    /**
     * NotifyChannelDs: 通知渠道 短信sms 邮件email 回调webhook
     *
     * @return string[]|null
     */
    public function getNotifyChannelDs()
    {
        return $this->get("NotifyChannelDs");
    }

    /**
     * NotifyChannelDs: 通知渠道 短信sms 邮件email 回调webhook
     *
     * @param string[] $notifyChannelDs
     */
    public function setNotifyChannelDs(array $notifyChannelDs)
    {
        $this->set("NotifyChannelDs", $notifyChannelDs);
    }

    /**
     * CallbackLanguage: 通知渠道回调webhook 回调语言 中文cn 英文en
     *
     * @return string|null
     */
    public function getCallbackLanguage()
    {
        return $this->get("CallbackLanguage");
    }

    /**
     * CallbackLanguage: 通知渠道回调webhook 回调语言 中文cn 英文en
     *
     * @param string $callbackLanguage
     */
    public function setCallbackLanguage($callbackLanguage)
    {
        $this->set("CallbackLanguage", $callbackLanguage);
    }

    /**
     * CallbackUrls: 回调url
     *
     * @return string[]|null
     */
    public function getCallbackUrls()
    {
        return $this->get("CallbackUrls");
    }

    /**
     * CallbackUrls: 回调url
     *
     * @param string[] $callbackUrls
     */
    public function setCallbackUrls(array $callbackUrls)
    {
        $this->set("CallbackUrls", $callbackUrls);
    }
}
