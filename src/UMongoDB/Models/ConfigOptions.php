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
namespace UCloud\UMongoDB\Models;

use UCloud\Core\Response\Response;

class ConfigOptions extends Response
{
    

    /**
     * MongodbVersion: mongo版本
     *
     * @return string|null
     */
    public function getMongodbVersion()
    {
        return $this->get("MongodbVersion");
    }

    /**
     * MongodbVersion: mongo版本
     *
     * @param string $mongodbVersion
     */
    public function setMongodbVersion($mongodbVersion)
    {
        $this->set("MongodbVersion", $mongodbVersion);
    }

    /**
     * OptionName: 配置选项名
     *
     * @return string|null
     */
    public function getOptionName()
    {
        return $this->get("OptionName");
    }

    /**
     * OptionName: 配置选项名
     *
     * @param string $optionName
     */
    public function setOptionName($optionName)
    {
        $this->set("OptionName", $optionName);
    }

    /**
     * OptionValueType: 配置选项类型 string,int,bool
     *
     * @return string|null
     */
    public function getOptionValueType()
    {
        return $this->get("OptionValueType");
    }

    /**
     * OptionValueType: 配置选项类型 string,int,bool
     *
     * @param string $optionValueType
     */
    public function setOptionValueType($optionValueType)
    {
        $this->set("OptionValueType", $optionValueType);
    }

    /**
     * OptionValues: 配置选项值范围
     *
     * @return string|null
     */
    public function getOptionValues()
    {
        return $this->get("OptionValues");
    }

    /**
     * OptionValues: 配置选项值范围
     *
     * @param string $optionValues
     */
    public function setOptionValues($optionValues)
    {
        $this->set("OptionValues", $optionValues);
    }

    /**
     * OptionDefaultValue: 默认值
     *
     * @return string|null
     */
    public function getOptionDefaultValue()
    {
        return $this->get("OptionDefaultValue");
    }

    /**
     * OptionDefaultValue: 默认值
     *
     * @param string $optionDefaultValue
     */
    public function setOptionDefaultValue($optionDefaultValue)
    {
        $this->set("OptionDefaultValue", $optionDefaultValue);
    }

    /**
     * IsDefaultOption: 是否为默认选项
     *
     * @return boolean|null
     */
    public function getIsDefaultOption()
    {
        return $this->get("IsDefaultOption");
    }

    /**
     * IsDefaultOption: 是否为默认选项
     *
     * @param boolean $isDefaultOption
     */
    public function setIsDefaultOption($isDefaultOption)
    {
        $this->set("IsDefaultOption", $isDefaultOption);
    }

    /**
     * EnableModify: 是否可修改
     *
     * @return boolean|null
     */
    public function getEnableModify()
    {
        return $this->get("EnableModify");
    }

    /**
     * EnableModify: 是否可修改
     *
     * @param boolean $enableModify
     */
    public function setEnableModify($enableModify)
    {
        $this->set("EnableModify", $enableModify);
    }

    /**
     * EnableDisplay: 是否前端展示
     *
     * @return boolean|null
     */
    public function getEnableDisplay()
    {
        return $this->get("EnableDisplay");
    }

    /**
     * EnableDisplay: 是否前端展示
     *
     * @param boolean $enableDisplay
     */
    public function setEnableDisplay($enableDisplay)
    {
        $this->set("EnableDisplay", $enableDisplay);
    }

    /**
     * ForceRestart: 是否需重启
     *
     * @return boolean|null
     */
    public function getForceRestart()
    {
        return $this->get("ForceRestart");
    }

    /**
     * ForceRestart: 是否需重启
     *
     * @param boolean $forceRestart
     */
    public function setForceRestart($forceRestart)
    {
        $this->set("ForceRestart", $forceRestart);
    }

    /**
     * OptionFormatType: 选项值格式
     *
     * @return string|null
     */
    public function getOptionFormatType()
    {
        return $this->get("OptionFormatType");
    }

    /**
     * OptionFormatType: 选项值格式
     *
     * @param string $optionFormatType
     */
    public function setOptionFormatType($optionFormatType)
    {
        $this->set("OptionFormatType", $optionFormatType);
    }

    /**
     * AllowedApplyType: 允许应用类型
     *
     * @return string|null
     */
    public function getAllowedApplyType()
    {
        return $this->get("AllowedApplyType");
    }

    /**
     * AllowedApplyType: 允许应用类型
     *
     * @param string $allowedApplyType
     */
    public function setAllowedApplyType($allowedApplyType)
    {
        $this->set("AllowedApplyType", $allowedApplyType);
    }

    /**
     * Description: 描述
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 描述
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }
}
