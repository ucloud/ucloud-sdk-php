<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UCompShare\Apis;

use UCloud\Core\Response\Response;
use UCloud\UCompShare\Models\CompShareImage;
use UCloud\UCompShare\Models\Software;
use UCloud\UCompShare\Models\Projects;

class DescribeCompShareImagesResponse extends Response
{
    

    /**
     * ImageSet: 镜像详情列表
     *
     * @return CompShareImage[]|null
     */
    public function getImageSet()
    {
        $items = $this->get("ImageSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CompShareImage($item));
        }
        return $result;
    }

    /**
     * ImageSet: 镜像详情列表
     *
     * @param CompShareImage[] $imageSet
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
     * TotalCount: 总数量
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 总数量
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
