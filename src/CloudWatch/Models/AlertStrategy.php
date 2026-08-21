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

class AlertStrategy extends Response
{
    

    /**
     * RuleSet: 告警规则集合
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
     * RuleSet: 告警规则集合
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
     * AlertStrategyID: 告警策略Id
     *
     * @return integer|null
     */
    public function getAlertStrategyID()
    {
        return $this->get("AlertStrategyID");
    }

    /**
     * AlertStrategyID: 告警策略Id
     *
     * @param int $alertStrategyID
     */
    public function setAlertStrategyID($alertStrategyID)
    {
        $this->set("AlertStrategyID", $alertStrategyID);
    }

    /**
     * Name: 告警策略名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 告警策略名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * ProductType: 资源类型
     *
     * @return integer|null
     */
    public function getProductType()
    {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 资源类型
     *
     * @param int $productType
     */
    public function setProductType($productType)
    {
        $this->set("ProductType", $productType);
    }

    /**
     * ProductKey: 资源类型名称
     *
     * @return string|null
     */
    public function getProductKey()
    {
        return $this->get("ProductKey");
    }

    /**
     * ProductKey: 资源类型名称
     *
     * @param string $productKey
     */
    public function setProductKey($productKey)
    {
        $this->set("ProductKey", $productKey);
    }

    /**
     * ConfigMode: 告警规则配置类型(基于模板配置、基于手工配置)
     *
     * @return integer|null
     */
    public function getConfigMode()
    {
        return $this->get("ConfigMode");
    }

    /**
     * ConfigMode: 告警规则配置类型(基于模板配置、基于手工配置)
     *
     * @param int $configMode
     */
    public function setConfigMode($configMode)
    {
        $this->set("ConfigMode", $configMode);
    }

    /**
     * TemplateId: 模板Id
     *
     * @return integer|null
     */
    public function getTemplateId()
    {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: 模板Id
     *
     * @param int $templateId
     */
    public function setTemplateId($templateId)
    {
        $this->set("TemplateId", $templateId);
    }

    /**
     * NotifyType: 通知方式(通知组：group，通知人：user)
     *
     * @return string|null
     */
    public function getNotifyType()
    {
        return $this->get("NotifyType");
    }

    /**
     * NotifyType: 通知方式(通知组：group，通知人：user)
     *
     * @param string $notifyType
     */
    public function setNotifyType($notifyType)
    {
        $this->set("NotifyType", $notifyType);
    }

    /**
     * NotifyUserIDs: 通知人用户id集合
     *
     * @return int[]|null
     */
    public function getNotifyUserIDs()
    {
        return $this->get("NotifyUserIDs");
    }

    /**
     * NotifyUserIDs: 通知人用户id集合
     *
     * @param int[] $notifyUserIDs
     */
    public function setNotifyUserIDs(array $notifyUserIDs)
    {
        $this->set("NotifyUserIDs", $notifyUserIDs);
    }

    /**
     * NotifyGroupIDs: 通知组id集合
     *
     * @return int[]|null
     */
    public function getNotifyGroupIDs()
    {
        return $this->get("NotifyGroupIDs");
    }

    /**
     * NotifyGroupIDs: 通知组id集合
     *
     * @param int[] $notifyGroupIDs
     */
    public function setNotifyGroupIDs(array $notifyGroupIDs)
    {
        $this->set("NotifyGroupIDs", $notifyGroupIDs);
    }

    /**
     * NotifyChannelDs: 通知渠道('email', 'sms', 'webhook')
     *
     * @return string[]|null
     */
    public function getNotifyChannelDs()
    {
        return $this->get("NotifyChannelDs");
    }

    /**
     * NotifyChannelDs: 通知渠道('email', 'sms', 'webhook')
     *
     * @param string[] $notifyChannelDs
     */
    public function setNotifyChannelDs(array $notifyChannelDs)
    {
        $this->set("NotifyChannelDs", $notifyChannelDs);
    }

    /**
     * CallbackLanguage: 回调语言(cn,en)
     *
     * @return string|null
     */
    public function getCallbackLanguage()
    {
        return $this->get("CallbackLanguage");
    }

    /**
     * CallbackLanguage: 回调语言(cn,en)
     *
     * @param string $callbackLanguage
     */
    public function setCallbackLanguage($callbackLanguage)
    {
        $this->set("CallbackLanguage", $callbackLanguage);
    }

    /**
     * CallbackUrls: 回调地址
     *
     * @return string[]|null
     */
    public function getCallbackUrls()
    {
        return $this->get("CallbackUrls");
    }

    /**
     * CallbackUrls: 回调地址
     *
     * @param string[] $callbackUrls
     */
    public function setCallbackUrls(array $callbackUrls)
    {
        $this->set("CallbackUrls", $callbackUrls);
    }

    /**
     * Status: 告警策略状态
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 告警策略状态
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * Remark: 告警策略备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 告警策略备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * CreatedBy: 创建人
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->get("CreatedBy");
    }

    /**
     * CreatedBy: 创建人
     *
     * @param string $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->set("CreatedBy", $createdBy);
    }

    /**
     * UpdatedBy: 更新人
     *
     * @return string|null
     */
    public function getUpdatedBy()
    {
        return $this->get("UpdatedBy");
    }

    /**
     * UpdatedBy: 更新人
     *
     * @param string $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->set("UpdatedBy", $updatedBy);
    }

    /**
     * CreatedAt: 创建时间
     *
     * @return integer|null
     */
    public function getCreatedAt()
    {
        return $this->get("CreatedAt");
    }

    /**
     * CreatedAt: 创建时间
     *
     * @param int $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->set("CreatedAt", $createdAt);
    }

    /**
     * UpdatedAt: 更新时间
     *
     * @return integer|null
     */
    public function getUpdatedAt()
    {
        return $this->get("UpdatedAt");
    }

    /**
     * UpdatedAt: 更新时间
     *
     * @param int $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->set("UpdatedAt", $updatedAt);
    }
}
