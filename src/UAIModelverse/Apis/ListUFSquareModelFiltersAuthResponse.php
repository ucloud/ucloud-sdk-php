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

use UCloud\Core\Response\Response;
use UCloud\UAIModelverse\Models\FilterOption;

class ListUFSquareModelFiltersAuthResponse extends Response
{
    

    /**
     * ModalTypes: 模型类型筛选（一级/二级分类树）
     *
     * @return FilterOption[]|null
     */
    public function getModalTypes()
    {
        $items = $this->get("ModalTypes");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOption($item));
        }
        return $result;
    }

    /**
     * ModalTypes: 模型类型筛选（一级/二级分类树）
     *
     * @param FilterOption[] $modalTypes
     */
    public function setModalTypes(array $modalTypes)
    {
        $result = [];
        foreach ($modalTypes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Manufacturers: 厂商选项
     *
     * @return FilterOption[]|null
     */
    public function getManufacturers()
    {
        $items = $this->get("Manufacturers");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOption($item));
        }
        return $result;
    }

    /**
     * Manufacturers: 厂商选项
     *
     * @param FilterOption[] $manufacturers
     */
    public function setManufacturers(array $manufacturers)
    {
        $result = [];
        foreach ($manufacturers as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * MaxModelLens: 最大上下文长度选项
     *
     * @return FilterOption[]|null
     */
    public function getMaxModelLens()
    {
        $items = $this->get("MaxModelLens");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOption($item));
        }
        return $result;
    }

    /**
     * MaxModelLens: 最大上下文长度选项
     *
     * @param FilterOption[] $maxModelLens
     */
    public function setMaxModelLens(array $maxModelLens)
    {
        $result = [];
        foreach ($maxModelLens as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Capabilities: 能力选项
     *
     * @return FilterOption[]|null
     */
    public function getCapabilities()
    {
        $items = $this->get("Capabilities");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOption($item));
        }
        return $result;
    }

    /**
     * Capabilities: 能力选项
     *
     * @param FilterOption[] $capabilities
     */
    public function setCapabilities(array $capabilities)
    {
        $result = [];
        foreach ($capabilities as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * InputModalities: 输入模态选项
     *
     * @return FilterOption[]|null
     */
    public function getInputModalities()
    {
        $items = $this->get("InputModalities");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOption($item));
        }
        return $result;
    }

    /**
     * InputModalities: 输入模态选项
     *
     * @param FilterOption[] $inputModalities
     */
    public function setInputModalities(array $inputModalities)
    {
        $result = [];
        foreach ($inputModalities as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * OutputModalities: 输出模态选项
     *
     * @return FilterOption[]|null
     */
    public function getOutputModalities()
    {
        $items = $this->get("OutputModalities");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOption($item));
        }
        return $result;
    }

    /**
     * OutputModalities: 输出模态选项
     *
     * @param FilterOption[] $outputModalities
     */
    public function setOutputModalities(array $outputModalities)
    {
        $result = [];
        foreach ($outputModalities as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * ApiProtocols: API协议选项
     *
     * @return FilterOption[]|null
     */
    public function getApiProtocols()
    {
        $items = $this->get("ApiProtocols");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOption($item));
        }
        return $result;
    }

    /**
     * ApiProtocols: API协议选项
     *
     * @param FilterOption[] $apiProtocols
     */
    public function setApiProtocols(array $apiProtocols)
    {
        $result = [];
        foreach ($apiProtocols as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * InferenceRegions: 推理地域选项
     *
     * @return FilterOption[]|null
     */
    public function getInferenceRegions()
    {
        $items = $this->get("InferenceRegions");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOption($item));
        }
        return $result;
    }

    /**
     * InferenceRegions: 推理地域选项
     *
     * @param FilterOption[] $inferenceRegions
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
     * IsComingOffline: 模型状态选项
     *
     * @return FilterOption[]|null
     */
    public function getIsComingOffline()
    {
        $items = $this->get("IsComingOffline");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FilterOption($item));
        }
        return $result;
    }

    /**
     * IsComingOffline: 模型状态选项
     *
     * @param FilterOption[] $isComingOffline
     */
    public function setIsComingOffline(array $isComingOffline)
    {
        $result = [];
        foreach ($isComingOffline as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
