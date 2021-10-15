<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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

class ImageInfo extends Response
{
    

    /**
     * ZoneId: 可用区 Id
     *
     * @return integer|null
     */
    public function getZoneId()
    {
        return $this->get("ZoneId");
    }

    /**
     * ZoneId: 可用区 Id
     *
     * @param int $zoneId
     */
    public function setZoneId($zoneId)
    {
        $this->set("ZoneId", $zoneId);
    }

    /**
     * ImageId: 镜像 Id
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像 Id
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * ImageName: 镜像名称
     *
     * @return string|null
     */
    public function getImageName()
    {
        return $this->get("ImageName");
    }

    /**
     * ImageName: 镜像名称
     *
     * @param string $imageName
     */
    public function setImageName($imageName)
    {
        $this->set("ImageName", $imageName);
    }

    /**
     * NotSupportGPU: 该镜像是否支持GPU机型，枚举值[true:不支持，false:支持]。
     *
     * @return boolean|null
     */
    public function getNotSupportGPU()
    {
        return $this->get("NotSupportGPU");
    }

    /**
     * NotSupportGPU: 该镜像是否支持GPU机型，枚举值[true:不支持，false:支持]。
     *
     * @param boolean $notSupportGPU
     */
    public function setNotSupportGPU($notSupportGPU)
    {
        $this->set("NotSupportGPU", $notSupportGPU);
    }
}
