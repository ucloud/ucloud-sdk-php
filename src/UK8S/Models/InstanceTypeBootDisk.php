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

class InstanceTypeBootDisk extends Response
{
    

    /**
     * Name: 系统盘类型名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 系统盘类型名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * InstantResize: 是否支持即时扩容
     *
     * @return boolean|null
     */
    public function getInstantResize()
    {
        return $this->get("InstantResize");
    }

    /**
     * InstantResize: 是否支持即时扩容
     *
     * @param boolean $instantResize
     */
    public function setInstantResize($instantResize)
    {
        $this->set("InstantResize", $instantResize);
    }

    /**
     * MaximalSize: 最大磁盘容量
     *
     * @return integer|null
     */
    public function getMaximalSize()
    {
        return $this->get("MaximalSize");
    }

    /**
     * MaximalSize: 最大磁盘容量
     *
     * @param int $maximalSize
     */
    public function setMaximalSize($maximalSize)
    {
        $this->set("MaximalSize", $maximalSize);
    }

    /**
     * Features: 磁盘特性列表
     *
     * @return string[]|null
     */
    public function getFeatures()
    {
        return $this->get("Features");
    }

    /**
     * Features: 磁盘特性列表
     *
     * @param string[] $features
     */
    public function setFeatures(array $features)
    {
        $this->set("Features", $features);
    }
}
