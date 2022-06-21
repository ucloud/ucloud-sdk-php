<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class FeatureModes extends Response
{
    

    /**
     * Name: 模式|特性名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 模式|特性名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * RelatedToImageFeature: 为镜像上支持这个特性的标签。例如DescribeImage返回的字段Features包含HotPlug，说明该镜像支持热升级。
     *
     * @return string[]|null
     */
    public function getRelatedToImageFeature()
    {
        return $this->get("RelatedToImageFeature");
    }

    /**
     * RelatedToImageFeature: 为镜像上支持这个特性的标签。例如DescribeImage返回的字段Features包含HotPlug，说明该镜像支持热升级。
     *
     * @param string[] $relatedToImageFeature
     */
    public function setRelatedToImageFeature(array $relatedToImageFeature)
    {
        $this->set("RelatedToImageFeature", $relatedToImageFeature);
    }

    /**
     * MinimalCpuPlatform: 这个特性必须是列出来的CPU平台及以上的CPU才支持
     *
     * @return string[]|null
     */
    public function getMinimalCpuPlatform()
    {
        return $this->get("MinimalCpuPlatform");
    }

    /**
     * MinimalCpuPlatform: 这个特性必须是列出来的CPU平台及以上的CPU才支持
     *
     * @param string[] $minimalCpuPlatform
     */
    public function setMinimalCpuPlatform(array $minimalCpuPlatform)
    {
        $this->set("MinimalCpuPlatform", $minimalCpuPlatform);
    }


}
