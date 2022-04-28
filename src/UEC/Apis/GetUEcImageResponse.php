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
namespace UCloud\UEC\Apis;

use UCloud\Core\Response\Response;
use UCloud\UEC\Models\ImageInfo;
use UCloud\UEC\Models\DeployImageInfo;

class GetUEcImageResponse extends Response
{
    

    /**
     * ImageList: 获取的镜像信息，具体参考下面ImageInfo
     *
     * @return ImageInfo[]|null
     */
    public function getImageList()
    {
        $items = $this->get("ImageList");
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
     * ImageList: 获取的镜像信息，具体参考下面ImageInfo
     *
     * @param ImageInfo[] $imageList
     */
    public function setImageList(array $imageList)
    {
        $result = [];
        foreach ($imageList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: 镜像总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 镜像总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
