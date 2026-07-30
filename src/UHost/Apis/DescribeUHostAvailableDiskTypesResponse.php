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
namespace UCloud\UHost\Apis;

use UCloud\Core\Response\Response;
use UCloud\UHost\Models\AvailableDiskTypes;
use UCloud\UHost\Models\Disks;
use UCloud\UHost\Models\BootDiskInfo;
use UCloud\UHost\Models\DataDiskInfo;

class DescribeUHostAvailableDiskTypesResponse extends Response
{
    

    /**
     * DiskTypeSet: 可挂载的磁盘信息列表
     *
     * @return AvailableDiskTypes[]|null
     */
    public function getDiskTypeSet()
    {
        $items = $this->get("DiskTypeSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AvailableDiskTypes($item));
        }
        return $result;
    }

    /**
     * DiskTypeSet: 可挂载的磁盘信息列表
     *
     * @param AvailableDiskTypes[] $diskTypeSet
     */
    public function setDiskTypeSet(array $diskTypeSet)
    {
        $result = [];
        foreach ($diskTypeSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
