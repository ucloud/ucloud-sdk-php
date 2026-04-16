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
namespace UCloud\UMongoDB\Models;

use UCloud\Core\Response\Response;

class DiskInfo extends Response
{
    

    /**
     * DiskId: 磁盘id
     *
     * @return string|null
     */
    public function getDiskId()
    {
        return $this->get("DiskId");
    }

    /**
     * DiskId: 磁盘id
     *
     * @param string $diskId
     */
    public function setDiskId($diskId)
    {
        $this->set("DiskId", $diskId);
    }

    /**
     * DiskSize: 磁盘容量单位GB
     *
     * @return integer|null
     */
    public function getDiskSize()
    {
        return $this->get("DiskSize");
    }

    /**
     * DiskSize: 磁盘容量单位GB
     *
     * @param int $diskSize
     */
    public function setDiskSize($diskSize)
    {
        $this->set("DiskSize", $diskSize);
    }
}
