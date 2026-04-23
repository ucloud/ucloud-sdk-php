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
namespace UCloud\UES\Apis;

use UCloud\Core\Response\Response;
use UCloud\UES\Models\DiskSizeLimitation;

class GetUESDiskSizeLimitationResponse extends Response
{
    

    /**
     * DiskSizeLimitationSet: 各磁盘类型容量限制列表
     *
     * @return DiskSizeLimitation[]|null
     */
    public function getDiskSizeLimitationSet()
    {
        $items = $this->get("DiskSizeLimitationSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DiskSizeLimitation($item));
        }
        return $result;
    }

    /**
     * DiskSizeLimitationSet: 各磁盘类型容量限制列表
     *
     * @param DiskSizeLimitation[] $diskSizeLimitationSet
     */
    public function setDiskSizeLimitationSet(array $diskSizeLimitationSet)
    {
        $result = [];
        foreach ($diskSizeLimitationSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
