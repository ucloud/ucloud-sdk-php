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
namespace UCloud\UEC\Models;

use UCloud\Core\Response\Response;

class StorVolumeInfo extends Response
{
    

    /**
     * Name: 名称
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: 名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * ResourceId: 资源id
     *
     * @return string|null
     */
    public function getResourceId(): string
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源id
     *
     * @param string $resourceId
     */
    public function setResourceId(string $resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * MountPoint: 挂载点
     *
     * @return string|null
     */
    public function getMountPoint(): string
    {
        return $this->get("MountPoint");
    }

    /**
     * MountPoint: 挂载点
     *
     * @param string $mountPoint
     */
    public function setMountPoint(string $mountPoint)
    {
        $this->set("MountPoint", $mountPoint);
    }

    /**
     * DiskSize: 容量（单位GB）
     *
     * @return integer|null
     */
    public function getDiskSize(): int
    {
        return $this->get("DiskSize");
    }

    /**
     * DiskSize: 容量（单位GB）
     *
     * @param int $diskSize
     */
    public function setDiskSize(int $diskSize)
    {
        $this->set("DiskSize", $diskSize);
    }
}
