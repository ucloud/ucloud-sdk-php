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

class BootDiskInfo extends Response
{
    

    /**
     * Name: 系统盘类别，包含普通云盘|CLOUD_NORMAL、SSD云盘|CLOUD_SSD和RSSD云盘|CLOUD_RSSD。普通本地盘只包含普通本地盘|LOCAL_NORMAL一种。SSD本地盘只包含SSD本地盘|LOCAL_SSD一种。
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 系统盘类别，包含普通云盘|CLOUD_NORMAL、SSD云盘|CLOUD_SSD和RSSD云盘|CLOUD_RSSD。普通本地盘只包含普通本地盘|LOCAL_NORMAL一种。SSD本地盘只包含SSD本地盘|LOCAL_SSD一种。
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * InstantResize: 系统盘是否允许扩容，如果是本地盘，则不允许扩容，InstantResize为false。
     *
     * @return boolean|null
     */
    public function getInstantResize()
    {
        return $this->get("InstantResize");
    }

    /**
     * InstantResize: 系统盘是否允许扩容，如果是本地盘，则不允许扩容，InstantResize为false。
     *
     * @param boolean $instantResize
     */
    public function setInstantResize($instantResize)
    {
        $this->set("InstantResize", $instantResize);
    }

    /**
     * MaximalSize: MaximalSize为磁盘最大值
     *
     * @return int|null
     */
    public function getMaximalSize()
    {
        return $this->get("MaximalSize");
    }

    /**
     * MaximalSize: MaximalSize为磁盘最大值
     *
     * @param int $maximalSize
     */
    public function setMaximalSize($maximalSize)
    {
        $this->set("MaximalSize", $maximalSize);
    }

    /**
     * Features: 磁盘可支持的服务
     *
     * @return string[]|null
     */
    public function getFeatures()
    {
        return $this->get("Features");
    }

    /**
     * Features: 磁盘可支持的服务
     *
     * @param string[] $features
     */
    public function setFeatures(array $features)
    {
        $this->set("Features", $features);
    }


}
