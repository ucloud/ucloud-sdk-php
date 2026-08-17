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
namespace UCloud\UHadoop\Models;

use UCloud\Core\Response\Response;

class DiskInfo extends Response
{
    

    /**
     * DiskNum: 磁盘数量
     *
     * @return integer|null
     */
    public function getDiskNum()
    {
        return $this->get("DiskNum");
    }

    /**
     * DiskNum: 磁盘数量
     *
     * @param int $diskNum
     */
    public function setDiskNum($diskNum)
    {
        $this->set("DiskNum", $diskNum);
    }

    /**
     * DiskRole: 磁盘角色，一般分Boot和Data两种
     *
     * @return string|null
     */
    public function getDiskRole()
    {
        return $this->get("DiskRole");
    }

    /**
     * DiskRole: 磁盘角色，一般分Boot和Data两种
     *
     * @param string $diskRole
     */
    public function setDiskRole($diskRole)
    {
        $this->set("DiskRole", $diskRole);
    }

    /**
     * DiskSize: 磁盘大小，单位为GB
     *
     * @return integer|null
     */
    public function getDiskSize()
    {
        return $this->get("DiskSize");
    }

    /**
     * DiskSize: 磁盘大小，单位为GB
     *
     * @param int $diskSize
     */
    public function setDiskSize($diskSize)
    {
        $this->set("DiskSize", $diskSize);
    }

    /**
     * DiskType: 磁盘类型，分为CLOUD_RSSD(云盘RSSD)、CLOUD_SSD(云盘SSD)、LOCAL_SSD（本地SSD盘）、LOCAL_NORMAL（本地普通盘）、SATA（SATA盘）
     *
     * @return string|null
     */
    public function getDiskType()
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 磁盘类型，分为CLOUD_RSSD(云盘RSSD)、CLOUD_SSD(云盘SSD)、LOCAL_SSD（本地SSD盘）、LOCAL_NORMAL（本地普通盘）、SATA（SATA盘）
     *
     * @param string $diskType
     */
    public function setDiskType($diskType)
    {
        $this->set("DiskType", $diskType);
    }
}
