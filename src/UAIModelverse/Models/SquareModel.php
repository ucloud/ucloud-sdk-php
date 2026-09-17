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
     * BatchSquareModelId: 关联的 batch 模型广场id
     *
     * @return string|null
     */
    public function getBatchSquareModelId()
    {
        return $this->get("BatchSquareModelId");
    }

    /**
     * BatchSquareModelId: 关联的 batch 模型广场id
     *
     * @param string $batchSquareModelId
     */
    public function setBatchSquareModelId($batchSquareModelId)
    {
        $this->set("BatchSquareModelId", $batchSquareModelId);
    }

    /**
     * ModelCategory: 一级分类
     *
     * @return string|null
     */
    public function getModelCategory()
    {
        return $this->get("ModelCategory");
    }

    /**
     * ModelCategory: 一级分类
     *
     * @param string $modelCategory
     */
    public function setModelCategory($modelCategory)
    {
        $this->set("ModelCategory", $modelCategory);
    }

    /**
     * ModelSubCategories: 二级分类列表
     *
     * @return string|null
     */
    public function getModelSubCategories()
    {
        return $this->get("ModelSubCategories");
    }

    /**
     * ModelSubCategories: 二级分类列表
     *
     * @param string $modelSubCategories
     */
    public function setModelSubCategories($modelSubCategories)
    {
        $this->set("ModelSubCategories", $modelSubCategories);
    }

    /**
     * IsHasBatch: 是否关联有可用 batch 模型
     *
     * @return boolean|null
     */
    public function getIsHasBatch()
    {
        return $this->get("IsHasBatch");
    }

    /**
     * IsHasBatch: 是否关联有可用 batch 模型
     *
     * @param boolean $isHasBatch
     */
    public function setIsHasBatch($isHasBatch)
    {
        $this->set("IsHasBatch", $isHasBatch);
    }

    /**
     * BatchName: 关联的 batch 模型名称
     *
     * @return string|null
     */
    public function getBatchName()
    {
        return $this->get("BatchName");
    }

    /**
     * BatchName: 关联的 batch 模型名称
     *
     * @param string $batchName
     */
    public function setBatchName($batchName)
    {
        $this->set("BatchName", $batchName);
    }

    /**
     * IsHasInferenceRegions: 是否有关联的推理地域模型
     *
     * @return boolean|null
     */
    public function getIsHasInferenceRegions()
    {
        return $this->get("IsHasInferenceRegions");
    }

    /**
     * IsHasInferenceRegions: 是否有关联的推理地域模型
     *
     * @param boolean $isHasInferenceRegions
     */
    public function setIsHasInferenceRegions($isHasInferenceRegions)
    {
        $this->set("IsHasInferenceRegions", $isHasInferenceRegions);
    }

    /**
     * InferenceRegions: 推理地域模型列表
     *
     * @return InferenceRegionInfo[]|null
     */
    public function getInferenceRegions()
    {
        $items = $this->get("InferenceRegions");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new InferenceRegionInfo($item));
        }
        return $result;
    }

    /**
     * InferenceRegions: 推理地域模型列表
     *
     * @param InferenceRegionInfo[] $inferenceRegions
     */
    public function setInferenceRegions(array $inferenceRegions)
    {
        $result = [];
        foreach ($inferenceRegions as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Manufacturer: 制造商
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->get("Manufacturer");
    }

    /**
     * Manufacturer: 制造商
     *
     * @param string $manufacturer
     */
    public function setManufacturer($manufacturer)
    {
        $this->set("Manufacturer", $manufacturer);
    }

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
     * MaxModelLen: 模型长度，单位 token
     *
     * @return integer|null
     */
    public function getMaxModelLen()
    {
        return $this->get("MaxModelLen");
    }

    /**
     * MaxModelLen: 模型长度，单位 token
     *
     * @param int $maxModelLen
     */
    public function setMaxModelLen($maxModelLen)
    {
        $this->set("MaxModelLen", $maxModelLen);
    }

    /**
     * MaxModelLenNew: 模型长度，单位 K tokens
     *
     * @return integer|null
     */
    public function getMaxModelLenNew()
    {
        return $this->get("MaxModelLenNew");
    }

    /**
     * MaxModelLenNew: 模型长度，单位 K tokens
     *
     * @param int $maxModelLenNew
     */
    public function setMaxModelLenNew($maxModelLenNew)
    {
        $this->set("MaxModelLenNew", $maxModelLenNew);
    }

    /**
     * MaxInputTokens: 最大输入token数
     *
     * @return integer|null
     */
    public function getMaxInputTokens()
    {
        return $this->get("MaxInputTokens");
    }

    /**
     * MaxInputTokens: 最大输入token数
     *
     * @param int $maxInputTokens
     */
    public function setMaxInputTokens($maxInputTokens)
    {
        $this->set("MaxInputTokens", $maxInputTokens);
    }

    /**
     * MaxOutputTokens: 最大输出token数
     *
     * @return integer|null
     */
    public function getMaxOutputTokens()
    {
        return $this->get("MaxOutputTokens");
    }

    /**
     * MaxOutputTokens: 最大输出token数
     *
     * @param int $maxOutputTokens
     */
    public function setMaxOutputTokens($maxOutputTokens)
    {
        $this->set("MaxOutputTokens", $maxOutputTokens);
    }

    /**
     * ModelTypeMap: 模型类型映射
     *
     * @return ModelTypeMap|null
     */
    public function getModelTypeMap()
    {
        return new ModelTypeMap($this->get("ModelTypeMap"));
    }

    /**
     * ModelTypeMap: 模型类型映射
     *
     * @param ModelTypeMap $modelTypeMap
     */
    public function setModelTypeMap(array $modelTypeMap)
    {
        $this->set("ModelTypeMap", $modelTypeMap->getAll());
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
     * CoverUrl: 模型封面链接
     *
     * @return string|null
     */
    public function getCoverUrl()
    {
        return $this->get("CoverUrl");
    }

    /**
     * CoverUrl: 模型封面链接
     *
     * @param string $coverUrl
     */
    public function setCoverUrl($coverUrl)
    {
        $this->set("CoverUrl", $coverUrl);
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
     * Capabilities: 模型能力详细映射
     *
     * @return ModelCapabilities|null
     */
    public function getCapabilities()
    {
        return new ModelCapabilities($this->get("Capabilities"));
    }

    /**
     * Capabilities: 模型能力详细映射
     *
     * @param ModelCapabilities $capabilities
     */
    public function setCapabilities(array $capabilities)
    {
        $this->set("Capabilities", $capabilities->getAll());
    }

    /**
     * ExtraModelTags: 模型额外标签
     *
     * @return string[]|null
     */
    public function getExtraModelTags()
    {
        return $this->get("ExtraModelTags");
    }

    /**
     * ExtraModelTags: 模型额外标签
     *
     * @param string[] $extraModelTags
     */
    public function setExtraModelTags(array $extraModelTags)
    {
        $this->set("ExtraModelTags", $extraModelTags);
    }

    /**
     * ApiProtocols: api协议映射
     *
     * @return ApiProtocols|null
     */
    public function getApiProtocols()
    {
        return new ApiProtocols($this->get("ApiProtocols"));
    }

    /**
     * ApiProtocols: api协议映射
     *
     * @param ApiProtocols $apiProtocols
     */
    public function setApiProtocols(array $apiProtocols)
    {
        $this->set("ApiProtocols", $apiProtocols->getAll());
    }

    /**
     * InputModalities: 输入模态
     *
     * @return string[]|null
     */
    public function getInputModalities()
    {
        return $this->get("InputModalities");
    }

    /**
     * InputModalities: 输入模态
     *
     * @param string[] $inputModalities
     */
    public function setInputModalities(array $inputModalities)
    {
        $this->set("InputModalities", $inputModalities);
    }

    /**
     * OutputModalities: 输出模态
     *
     * @return string[]|null
     */
    public function getOutputModalities()
    {
        return $this->get("OutputModalities");
    }

    /**
     * OutputModalities: 输出模态
     *
     * @param string[] $outputModalities
     */
    public function setOutputModalities(array $outputModalities)
    {
        $this->set("OutputModalities", $outputModalities);
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

    /**
     * Tiers: 价格阶梯（有序数组）
     *
     * @return PriceTier[]|null
     */
    public function getTiers()
    {
        $items = $this->get("Tiers");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new PriceTier($item));
        }
        return $result;
    }

    /**
     * Tiers: 价格阶梯（有序数组）
     *
     * @param PriceTier[] $tiers
     */
    public function setTiers(array $tiers)
    {
        $result = [];
        foreach ($tiers as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
