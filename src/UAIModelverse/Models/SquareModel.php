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

class SquareModel extends Response
{
    

    /**
     * Id: 主键
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->get("Id");
    }

    /**
     * Id: 主键
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->set("Id", $id);
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
     * SimpleDescribe: 简要描述
     *
     * @return string|null
     */
    public function getSimpleDescribe()
    {
        return $this->get("SimpleDescribe");
    }

    /**
     * SimpleDescribe: 简要描述
     *
     * @param string $simpleDescribe
     */
    public function setSimpleDescribe($simpleDescribe)
    {
        $this->set("SimpleDescribe", $simpleDescribe);
    }

    /**
     * Describe: 详细描述
     *
     * @return string|null
     */
    public function getDescribe()
    {
        return $this->get("Describe");
    }

    /**
     * Describe: 详细描述
     *
     * @param string $describe
     */
    public function setDescribe($describe)
    {
        $this->set("Describe", $describe);
    }

    /**
     * Language: 语言
     *
     * @return string[]|null
     */
    public function getLanguage()
    {
        return $this->get("Language");
    }

    /**
     * Language: 语言
     *
     * @param string[] $language
     */
    public function setLanguage(array $language)
    {
        $this->set("Language", $language);
    }

    /**
     * MaxModelLen: 模型长度
     *
     * @return integer|null
     */
    public function getMaxModelLen()
    {
        return $this->get("MaxModelLen");
    }

    /**
     * MaxModelLen: 模型长度
     *
     * @param int $maxModelLen
     */
    public function setMaxModelLen($maxModelLen)
    {
        $this->set("MaxModelLen", $maxModelLen);
    }

    /**
     * ModelType: 模型类型
     *
     * @return string|null
     */
    public function getModelType()
    {
        return $this->get("ModelType");
    }

    /**
     * ModelType: 模型类型
     *
     * @param string $modelType
     */
    public function setModelType($modelType)
    {
        $this->set("ModelType", $modelType);
    }

    /**
     * HfUpdateTime: HuggingFace 更新时间
     *
     * @return integer|null
     */
    public function getHfUpdateTime()
    {
        return $this->get("HfUpdateTime");
    }

    /**
     * HfUpdateTime: HuggingFace 更新时间
     *
     * @param int $hfUpdateTime
     */
    public function setHfUpdateTime($hfUpdateTime)
    {
        $this->set("HfUpdateTime", $hfUpdateTime);
    }

    /**
     * CreateAt: 创建时间
     *
     * @return integer|null
     */
    public function getCreateAt()
    {
        return $this->get("CreateAt");
    }

    /**
     * CreateAt: 创建时间
     *
     * @param int $createAt
     */
    public function setCreateAt($createAt)
    {
        $this->set("CreateAt", $createAt);
    }

    /**
     * UpdateAt: 更新时间
     *
     * @return integer|null
     */
    public function getUpdateAt()
    {
        return $this->get("UpdateAt");
    }

    /**
     * UpdateAt: 更新时间
     *
     * @param int $updateAt
     */
    public function setUpdateAt($updateAt)
    {
        $this->set("UpdateAt", $updateAt);
    }

    /**
     * SupportedCapabilities: 模型能力
     *
     * @return string[]|null
     */
    public function getSupportedCapabilities()
    {
        return $this->get("SupportedCapabilities");
    }

    /**
     * SupportedCapabilities: 模型能力
     *
     * @param string[] $supportedCapabilities
     */
    public function setSupportedCapabilities(array $supportedCapabilities)
    {
        $this->set("SupportedCapabilities", $supportedCapabilities);
    }

    /**
     * Icon: 图标
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->get("Icon");
    }

    /**
     * Icon: 图标
     *
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->set("Icon", $icon);
    }

    /**
     * Pricing: 定价策略
     *
     * @return Pricing|null
     */
    public function getPricing()
    {
        return new Pricing($this->get("Pricing"));
    }

    /**
     * Pricing: 定价策略
     *
     * @param Pricing $pricing
     */
    public function setPricing(array $pricing)
    {
        $this->set("Pricing", $pricing->getAll());
    }
}
