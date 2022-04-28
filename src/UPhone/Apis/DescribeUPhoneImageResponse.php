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
namespace UCloud\UPhone\Apis;

use UCloud\Core\Response\Response;
use UCloud\UPhone\Models\UPhoneImageInstance;
use UCloud\UPhone\Models\AppVersionInstance;

class DescribeUPhoneImageResponse extends Response
{
    

    /**
     * Images: 云手机镜像实例列表，具体参数见 [UPhoneImageInstance](#uphoneimageinstance)
     *
     * @return UPhoneImageInstance[]|null
     */
    public function getImages()
    {
        $items = $this->get("Images");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UPhoneImageInstance($item));
        }
        return $result;
    }

    /**
     * Images: 云手机镜像实例列表，具体参数见 [UPhoneImageInstance](#uphoneimageinstance)
     *
     * @param UPhoneImageInstance[] $images
     */
    public function setImages(array $images)
    {
        $result = [];
        foreach ($images as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: UPhoneImageInstance总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: UPhoneImageInstance总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
