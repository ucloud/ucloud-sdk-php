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
namespace UCloud\UAIModelverse\Apis;

use UCloud\Core\Request\Request;

class BatchCreateUMInferAPIKeyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "BatchCreateUMInferAPIKey"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Prefix");
        $this->markRequired("Start");
        $this->markRequired("Count");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
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
     * Prefix: 名称前缀
     *
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->get("Prefix");
    }

    /**
     * Prefix: 名称前缀
     *
     * @param string $prefix
     */
    public function setPrefix($prefix)
    {
        $this->set("Prefix", $prefix);
    }

    /**
     * Start: 开始序号
     *
     * @return integer|null
     */
    public function getStart()
    {
        return $this->get("Start");
    }

    /**
     * Start: 开始序号
     *
     * @param int $start
     */
    public function setStart($start)
    {
        $this->set("Start", $start);
    }

    /**
     * Count: 创建个数
     *
     * @return integer|null
     */
    public function getCount()
    {
        return $this->get("Count");
    }

    /**
     * Count: 创建个数
     *
     * @param int $count
     */
    public function setCount($count)
    {
        $this->set("Count", $count);
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
     * GrantedModels: 授权模型，内容为数组格式。当 GrantAllModels 为false时 当前key只可访问数组中模型。例：["deepseek-ai/DeepSeek-V3.2-Think"]
     *
     * @return string|null
     */
    public function getGrantedModels()
    {
        return $this->get("GrantedModels");
    }

    /**
     * GrantedModels: 授权模型，内容为数组格式。当 GrantAllModels 为false时 当前key只可访问数组中模型。例：["deepseek-ai/DeepSeek-V3.2-Think"]
     *
     * @param string $grantedModels
     */
    public function setGrantedModels($grantedModels)
    {
        $this->set("GrantedModels", $grantedModels);
    }

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
     * TotalLimitAmount: 总限额，单位随用户所在渠道。126渠道单位为美元
     *
     * @return string|null
     */
    public function getTotalLimitAmount()
    {
        return $this->get("TotalLimitAmount");
    }

    /**
     * TotalLimitAmount: 总限额，单位随用户所在渠道。126渠道单位为美元
     *
     * @param string $totalLimitAmount
     */
    public function setTotalLimitAmount($totalLimitAmount)
    {
        $this->set("TotalLimitAmount", $totalLimitAmount);
    }

    /**
     * ExpireTime: 过期时间（秒级 Unix 时间戳）。缺省 = -1 永不过期；必须为 -1 或未来时间，且 ≤ 253402300799（9999-12-31 23:59:59 UTC）
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 过期时间（秒级 Unix 时间戳）。缺省 = -1 永不过期；必须为 -1 或未来时间，且 ≤ 253402300799（9999-12-31 23:59:59 UTC）
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * ModelAccessMode: 访问模式：whitelist（默认）/ blacklist
     *
     * @return string|null
     */
    public function getModelAccessMode()
    {
        return $this->get("ModelAccessMode");
    }

    /**
     * ModelAccessMode: 访问模式：whitelist（默认）/ blacklist
     *
     * @param string $modelAccessMode
     */
    public function setModelAccessMode($modelAccessMode)
    {
        $this->set("ModelAccessMode", $modelAccessMode);
    }

    /**
     * DeniedModels: 黑名单模型，仅 blacklist 模式生效，["deepseek-ai/DeepSeek-V3.2-Think"，"gemini-4-neon"]
     *
     * @return string|null
     */
    public function getDeniedModels()
    {
        return $this->get("DeniedModels");
    }

    /**
     * DeniedModels: 黑名单模型，仅 blacklist 模式生效，["deepseek-ai/DeepSeek-V3.2-Think"，"gemini-4-neon"]
     *
     * @param string $deniedModels
     */
    public function setDeniedModels($deniedModels)
    {
        $this->set("DeniedModels", $deniedModels);
    }

    /**
     * IPBlacklist: ip黑名单，换行分割的多组ip。支持IPv4和网段,输入后回车生效,最多100个, 示例: ﻿ 192.168.1.1 192.168.1.10-192.168.1.100 192.168.1.10/24
     *
     * @return string|null
     */
    public function getIPBlacklist()
    {
        return $this->get("IPBlacklist");
    }

    /**
     * IPBlacklist: ip黑名单，换行分割的多组ip。支持IPv4和网段,输入后回车生效,最多100个, 示例: ﻿ 192.168.1.1 192.168.1.10-192.168.1.100 192.168.1.10/24
     *
     * @param string $ipBlacklist
     */
    public function setIPBlacklist($ipBlacklist)
    {
        $this->set("IPBlacklist", $ipBlacklist);
    }

    /**
     * DailyQuotaAlertThreshold: 日配额告警阈值 0~100（百分比）
     *
     * @return integer|null
     */
    public function getDailyQuotaAlertThreshold()
    {
        return $this->get("DailyQuotaAlertThreshold");
    }

    /**
     * DailyQuotaAlertThreshold: 日配额告警阈值 0~100（百分比）
     *
     * @param int $dailyQuotaAlertThreshold
     */
    public function setDailyQuotaAlertThreshold($dailyQuotaAlertThreshold)
    {
        $this->set("DailyQuotaAlertThreshold", $dailyQuotaAlertThreshold);
    }

    /**
     * MonthlyQuotaAlertThreshold: 月配额告警阈值 0~100
     *
     * @return integer|null
     */
    public function getMonthlyQuotaAlertThreshold()
    {
        return $this->get("MonthlyQuotaAlertThreshold");
    }

    /**
     * MonthlyQuotaAlertThreshold: 月配额告警阈值 0~100
     *
     * @param int $monthlyQuotaAlertThreshold
     */
    public function setMonthlyQuotaAlertThreshold($monthlyQuotaAlertThreshold)
    {
        $this->set("MonthlyQuotaAlertThreshold", $monthlyQuotaAlertThreshold);
    }

    /**
     * TotalQuotaAlertThreshold: 总配额告警阈值 0~100
     *
     * @return integer|null
     */
    public function getTotalQuotaAlertThreshold()
    {
        return $this->get("TotalQuotaAlertThreshold");
    }

    /**
     * TotalQuotaAlertThreshold: 总配额告警阈值 0~100
     *
     * @param int $totalQuotaAlertThreshold
     */
    public function setTotalQuotaAlertThreshold($totalQuotaAlertThreshold)
    {
        $this->set("TotalQuotaAlertThreshold", $totalQuotaAlertThreshold);
    }

    /**
     * QuotaAlertChannels: []string；告警渠道：email / sms / phone（去重、转小写）。任一阈值 >0 时必填
     *
     * @return string|null
     */
    public function getQuotaAlertChannels()
    {
        return $this->get("QuotaAlertChannels");
    }

    /**
     * QuotaAlertChannels: []string；告警渠道：email / sms / phone（去重、转小写）。任一阈值 >0 时必填
     *
     * @param string $quotaAlertChannels
     */
    public function setQuotaAlertChannels($quotaAlertChannels)
    {
        $this->set("QuotaAlertChannels", $quotaAlertChannels);
    }

    /**
     * QuotaAlertEmail: 渠道含 email 时必填且需合法邮箱
     *
     * @return string|null
     */
    public function getQuotaAlertEmail()
    {
        return $this->get("QuotaAlertEmail");
    }

    /**
     * QuotaAlertEmail: 渠道含 email 时必填且需合法邮箱
     *
     * @param string $quotaAlertEmail
     */
    public function setQuotaAlertEmail($quotaAlertEmail)
    {
        $this->set("QuotaAlertEmail", $quotaAlertEmail);
    }

    /**
     * QuotaAlertPhone: 渠道含 sms/phone 时必填
     *
     * @return string|null
     */
    public function getQuotaAlertPhone()
    {
        return $this->get("QuotaAlertPhone");
    }

    /**
     * QuotaAlertPhone: 渠道含 sms/phone 时必填
     *
     * @param string $quotaAlertPhone
     */
    public function setQuotaAlertPhone($quotaAlertPhone)
    {
        $this->set("QuotaAlertPhone", $quotaAlertPhone);
    }

    /**
     * QuotaAlertEmailVerificationToken: 启用 email 渠道时必填，需先调验证码接口获取，服务端校验并一次性消费
     *
     * @return string|null
     */
    public function getQuotaAlertEmailVerificationToken()
    {
        return $this->get("QuotaAlertEmailVerificationToken");
    }

    /**
     * QuotaAlertEmailVerificationToken: 启用 email 渠道时必填，需先调验证码接口获取，服务端校验并一次性消费
     *
     * @param string $quotaAlertEmailVerificationToken
     */
    public function setQuotaAlertEmailVerificationToken($quotaAlertEmailVerificationToken)
    {
        $this->set("QuotaAlertEmailVerificationToken", $quotaAlertEmailVerificationToken);
    }

    /**
     * QuotaAlertPhoneVerificationToken: 启用 sms/phone 渠道时必填，同上
     *
     * @return string|null
     */
    public function getQuotaAlertPhoneVerificationToken()
    {
        return $this->get("QuotaAlertPhoneVerificationToken");
    }

    /**
     * QuotaAlertPhoneVerificationToken: 启用 sms/phone 渠道时必填，同上
     *
     * @param string $quotaAlertPhoneVerificationToken
     */
    public function setQuotaAlertPhoneVerificationToken($quotaAlertPhoneVerificationToken)
    {
        $this->set("QuotaAlertPhoneVerificationToken", $quotaAlertPhoneVerificationToken);
    }
}
