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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Response\Response;
use UCloud\UK8S\Models\ImageInfo;

class DescribeUK8SImageResponse extends Response
{
    

    /**
     * ImageSet: 虚拟机可用镜像集合, 详见ImageInfo 数组
     *
     * @return ImageInfo[]|null
     */
    public function getImageSet()
    {
        $items = $this->get("ImageSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ImageInfo($item));
        }
        return $result;
    }

    /**
     * ImageSet: 虚拟机可用镜像集合, 详见ImageInfo 数组
     *
     * @param ImageInfo[] $imageSet
     */
    public function setImageSet(array $imageSet)
    {
        $result = [];
        foreach ($imageSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * PHostImageSet: 裸金属可用镜像集合, 详见ImageInfo 数组
     *
     * @return ImageInfo[]|null
     */
    public function getPHostImageSet()
    {
        $items = $this->get("PHostImageSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ImageInfo($item));
        }
        return $result;
    }

    /**
     * PHostImageSet: 裸金属可用镜像集合, 详见ImageInfo 数组
     *
     * @param ImageInfo[] $pHostImageSet
     */
    public function setPHostImageSet(array $pHostImageSet)
    {
        $result = [];
        foreach ($pHostImageSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * CustomImageSet: 虚拟机自制可用镜像集合, 详见ImageInfo 数组
     *
     * @return ImageInfo[]|null
     */
    public function getCustomImageSet()
    {
        $items = $this->get("CustomImageSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ImageInfo($item));
        }
        return $result;
    }

    /**
     * CustomImageSet: 虚拟机自制可用镜像集合, 详见ImageInfo 数组
     *
     * @param ImageInfo[] $customImageSet
     */
    public function setCustomImageSet(array $customImageSet)
    {
        $result = [];
        foreach ($customImageSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * CustomPHostImageSet: 裸金属自制可用镜像集合, 详见ImageInfo 数组
     *
     * @return ImageInfo[]|null
     */
    public function getCustomPHostImageSet()
    {
        $items = $this->get("CustomPHostImageSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ImageInfo($item));
        }
        return $result;
    }

    /**
     * CustomPHostImageSet: 裸金属自制可用镜像集合, 详见ImageInfo 数组
     *
     * @param ImageInfo[] $customPHostImageSet
     */
    public function setCustomPHostImageSet(array $customPHostImageSet)
    {
        $result = [];
        foreach ($customPHostImageSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
