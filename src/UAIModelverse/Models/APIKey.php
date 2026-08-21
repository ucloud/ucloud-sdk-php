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
namespace UCloud\UAIModelverse\Models;

use UCloud\Core\Response\Response;

class APIKey extends Response
{
    

    /**
     * IPWhitelist: ip白名单，换行分割的多组ip。支持IPv4和网段,输入后回车生效,最多100个, 示例: ﻿ 192.168.1.1 192.168.1.10-192.168.1.100 192.168.1.10/24
     *
     * @return string|null
     */
    public function getIPWhitelist()
    {
        return $this->get("IPWhitelist");
    }

    /**
     * IPWhitelist: ip白名单，换行分割的多组ip。支持IPv4和网段,输入后回车生效,最多100个, 示例: ﻿ 192.168.1.1 192.168.1.10-192.168.1.100 192.168.1.10/24
     *
     * @param string $ipWhitelist
     */
    public function setIPWhitelist($ipWhitelist)
    {
        $this->set("IPWhitelist", $ipWhitelist);
    }

    /**
     * InferenceLogEnabled: 是否开启推理日志
     *
     * @return integer|null
     */
    public function getInferenceLogEnabled()
    {
        return $this->get("InferenceLogEnabled");
    }

    /**
     * InferenceLogEnabled: 是否开启推理日志
     *
     * @param int $inferenceLogEnabled
     */
    public function setInferenceLogEnabled($inferenceLogEnabled)
    {
        $this->set("InferenceLogEnabled", $inferenceLogEnabled);
    }

    /**
     * DeniedModels: 禁止访问的模型列表。当 ModelAccessMode=blacklist 时生效。
     *
     * @return string[]|null
     */
    public function getDeniedModels()
    {
        return $this->get("DeniedModels");
    }

    /**
     * DeniedModels: 禁止访问的模型列表。当 ModelAccessMode=blacklist 时生效。
     *
     * @param string[] $deniedModels
     */
    public function setDeniedModels(array $deniedModels)
    {
        $this->set("DeniedModels", $deniedModels);
    }

    /**
     * ModelAccessMode: 模型访问策略。可选值：whitelist（白名单模式，默认）或 blacklist（黑名单模式）。
     *
     * @return string|null
     */
    public function getModelAccessMode()
    {
        return $this->get("ModelAccessMode");
    }

    /**
     * ModelAccessMode: 模型访问策略。可选值：whitelist（白名单模式，默认）或 blacklist（黑名单模式）。
     *
     * @param string $modelAccessMode
     */
    public function setModelAccessMode($modelAccessMode)
    {
        $this->set("ModelAccessMode", $modelAccessMode);
    }

    /**
     * KeyId: 资源ID
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: 资源ID
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * Name: 名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * ChannelId: 渠道id
     *
     * @return integer|null
     */
    public function getChannelId()
    {
        return $this->get("ChannelId");
    }

    /**
     * ChannelId: 渠道id
     *
     * @param int $channelId
     */
    public function setChannelId($channelId)
    {
        $this->set("ChannelId", $channelId);
    }

    /**
     * TopOrganizationId: 公司id
     *
     * @return integer|null
     */
    public function getTopOrganizationId()
    {
        return $this->get("TopOrganizationId");
    }

    /**
     * TopOrganizationId: 公司id
     *
     * @param int $topOrganizationId
     */
    public function setTopOrganizationId($topOrganizationId)
    {
        $this->set("TopOrganizationId", $topOrganizationId);
    }

    /**
     * OrganizationId: 项目id
     *
     * @return integer|null
     */
    public function getOrganizationId()
    {
        return $this->get("OrganizationId");
    }

    /**
     * OrganizationId: 项目id
     *
     * @param int $organizationId
     */
    public function setOrganizationId($organizationId)
    {
        $this->set("OrganizationId", $organizationId);
    }

    /**
     * Status: 状态，1 正常
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 状态，1 正常
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
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
     * Key: 密钥值
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->get("Key");
    }

    /**
     * Key: 密钥值
     *
     * @param string $key
     */
    public function setKey($key)
    {
        $this->set("Key", $key);
    }

    /**
     * ExpireTime: 过期时间的unix时间戳，-1 用不过期
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 过期时间的unix时间戳，-1 用不过期
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * ModelverseDisabled: 是否modelverse可用 0: 启用 1: 禁用
     *
     * @return integer|null
     */
    public function getModelverseDisabled()
    {
        return $this->get("ModelverseDisabled");
    }

    /**
     * ModelverseDisabled: 是否modelverse可用 0: 启用 1: 禁用
     *
     * @param int $modelverseDisabled
     */
    public function setModelverseDisabled($modelverseDisabled)
    {
        $this->set("ModelverseDisabled", $modelverseDisabled);
    }

    /**
     * SandBoxDisabled: 是否沙盒可用 0: 启用 1: 禁用(astraflow 沙盒控制未上线，暂时无效)
     *
     * @return integer|null
     */
    public function getSandBoxDisabled()
    {
        return $this->get("SandBoxDisabled");
    }

    /**
     * SandBoxDisabled: 是否沙盒可用 0: 启用 1: 禁用(astraflow 沙盒控制未上线，暂时无效)
     *
     * @param int $sandBoxDisabled
     */
    public function setSandBoxDisabled($sandBoxDisabled)
    {
        $this->set("SandBoxDisabled", $sandBoxDisabled);
    }

    /**
     * DailyLimitAmount: 日限额，单位随用户所在渠道。126渠道单位为美元
     *
     * @return string|null
     */
    public function getDailyLimitAmount()
    {
        return $this->get("DailyLimitAmount");
    }

    /**
     * DailyLimitAmount: 日限额，单位随用户所在渠道。126渠道单位为美元
     *
     * @param string $dailyLimitAmount
     */
    public function setDailyLimitAmount($dailyLimitAmount)
    {
        $this->set("DailyLimitAmount", $dailyLimitAmount);
    }

    /**
     * DailyUsedAmount: 日已使用额，单位随用户所在渠道。126渠道单位为美元
     *
     * @return string|null
     */
    public function getDailyUsedAmount()
    {
        return $this->get("DailyUsedAmount");
    }

    /**
     * DailyUsedAmount: 日已使用额，单位随用户所在渠道。126渠道单位为美元
     *
     * @param string $dailyUsedAmount
     */
    public function setDailyUsedAmount($dailyUsedAmount)
    {
        $this->set("DailyUsedAmount", $dailyUsedAmount);
    }

    /**
     * MonthlyLimitAmount: 月限额，单位随用户所在渠道。126渠道单位为美元
     *
     * @return string|null
     */
    public function getMonthlyLimitAmount()
    {
        return $this->get("MonthlyLimitAmount");
    }

    /**
     * MonthlyLimitAmount: 月限额，单位随用户所在渠道。126渠道单位为美元
     *
     * @param string $monthlyLimitAmount
     */
    public function setMonthlyLimitAmount($monthlyLimitAmount)
    {
        $this->set("MonthlyLimitAmount", $monthlyLimitAmount);
    }

    /**
     * MonthlyUsedAmount: 月已使用额，单位随用户所在渠道。126渠道单位为美元
     *
     * @return string|null
     */
    public function getMonthlyUsedAmount()
    {
        return $this->get("MonthlyUsedAmount");
    }

    /**
     * MonthlyUsedAmount: 月已使用额，单位随用户所在渠道。126渠道单位为美元
     *
     * @param string $monthlyUsedAmount
     */
    public function setMonthlyUsedAmount($monthlyUsedAmount)
    {
        $this->set("MonthlyUsedAmount", $monthlyUsedAmount);
    }

    /**
     * GrantAllModels: 全部模型访问开关，开启不受 GrantedModels 参数控制，关闭只能访问 GrantedModels 中添加模型
     *
     * @return boolean|null
     */
    public function getGrantAllModels()
    {
        return $this->get("GrantAllModels");
    }

    /**
     * GrantAllModels: 全部模型访问开关，开启不受 GrantedModels 参数控制，关闭只能访问 GrantedModels 中添加模型
     *
     * @param boolean $grantAllModels
     */
    public function setGrantAllModels($grantAllModels)
    {
        $this->set("GrantAllModels", $grantAllModels);
    }

    /**
     * GrantedModels: 授权的模型，英文逗号分隔，all表示所有模型都有权限
     *
     * @return string[]|null
     */
    public function getGrantedModels()
    {
        return $this->get("GrantedModels");
    }

    /**
     * GrantedModels: 授权的模型，英文逗号分隔，all表示所有模型都有权限
     *
     * @param string[] $grantedModels
     */
    public function setGrantedModels(array $grantedModels)
    {
        $this->set("GrantedModels", $grantedModels);
    }
}
