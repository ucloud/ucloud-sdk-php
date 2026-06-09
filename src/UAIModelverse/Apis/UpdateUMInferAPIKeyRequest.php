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

class UpdateUMInferAPIKeyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUMInferAPIKey"]);
        $this->markRequired("ProjectId");
        $this->markRequired("KeyId");
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
     * KeyId: apikey的id
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: apikey的id
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * Name: 更新的名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 更新的名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
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
     * SandBoxDisabled: 是否沙盒可用 0: 启用 1: 禁用
     *
     * @return integer|null
     */
    public function getSandBoxDisabled()
    {
        return $this->get("SandBoxDisabled");
    }

    /**
     * SandBoxDisabled: 是否沙盒可用 0: 启用 1: 禁用
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
}
