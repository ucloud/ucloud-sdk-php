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

class InferenceRegionInfo extends Response
{
    

    /**
     * RegionCode: 地域代码: sg(新加坡)/us(美国)/hk(香港)
     *
     * @return string|null
     */
    public function getRegionCode()
    {
        return $this->get("RegionCode");
    }

    /**
     * RegionCode: 地域代码: sg(新加坡)/us(美国)/hk(香港)
     *
     * @param string $regionCode
     */
    public function setRegionCode($regionCode)
    {
        $this->set("RegionCode", $regionCode);
    }

    /**
     * RegionName: 地域名称: 新加坡/美国/香港
     *
     * @return string|null
     */
    public function getRegionName()
    {
        return $this->get("RegionName");
    }

    /**
     * RegionName: 地域名称: 新加坡/美国/香港
     *
     * @param string $regionName
     */
    public function setRegionName($regionName)
    {
        $this->set("RegionName", $regionName);
    }

    /**
     * RegionNameEn: 地域名称(英文): Singapore/United States/Hong Kong
     *
     * @return string|null
     */
    public function getRegionNameEn()
    {
        return $this->get("RegionNameEn");
    }

    /**
     * RegionNameEn: 地域名称(英文): Singapore/United States/Hong Kong
     *
     * @param string $regionNameEn
     */
    public function setRegionNameEn($regionNameEn)
    {
        $this->set("RegionNameEn", $regionNameEn);
    }

    /**
     * ModelId: 地域模型ID (例如: deepseek-v4-flash-sg)
     *
     * @return string|null
     */
    public function getModelId()
    {
        return $this->get("ModelId");
    }

    /**
     * ModelId: 地域模型ID (例如: deepseek-v4-flash-sg)
     *
     * @param string $modelId
     */
    public function setModelId($modelId)
    {
        $this->set("ModelId", $modelId);
    }

    /**
     * SquareModelId: 广场模型ID (umodel-xxx)
     *
     * @return string|null
     */
    public function getSquareModelId()
    {
        return $this->get("SquareModelId");
    }

    /**
     * SquareModelId: 广场模型ID (umodel-xxx)
     *
     * @param string $squareModelId
     */
    public function setSquareModelId($squareModelId)
    {
        $this->set("SquareModelId", $squareModelId);
    }

    /**
     * Status: 状态: published(已发布)/unpublished(未发布)
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 状态: published(已发布)/unpublished(未发布)
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }
}
