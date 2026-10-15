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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class InstanceTypeFeatureMode extends Response
{
    

    /**
     * Name: 模式名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 模式名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * RelatedToImageFeature: 关联的镜像特性
     *
     * @return string[]|null
     */
    public function getRelatedToImageFeature()
    {
        return $this->get("RelatedToImageFeature");
    }

    /**
     * RelatedToImageFeature: 关联的镜像特性
     *
     * @param string[] $relatedToImageFeature
     */
    public function setRelatedToImageFeature(array $relatedToImageFeature)
    {
        $this->set("RelatedToImageFeature", $relatedToImageFeature);
    }

    /**
     * MinimalCpuPlatform: 最低 CPU 平台列表
     *
     * @return string[]|null
     */
    public function getMinimalCpuPlatform()
    {
        return $this->get("MinimalCpuPlatform");
    }

    /**
     * MinimalCpuPlatform: 最低 CPU 平台列表
     *
     * @param string[] $minimalCpuPlatform
     */
    public function setMinimalCpuPlatform(array $minimalCpuPlatform)
    {
        $this->set("MinimalCpuPlatform", $minimalCpuPlatform);
    }
}
