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
namespace UCloud\UClickhouse\Models;

use UCloud\Core\Response\Response;

class ClickhouseDataDisk extends Response
{
    

    /**
     * DiskType: 磁盘类型
     *
     * @return string|null
     */
    public function getDiskType()
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 磁盘类型
     *
     * @param string $diskType
     */
    public function setDiskType($diskType)
    {
        $this->set("DiskType", $diskType);
    }

    /**
     * MinDiskSize: 最小值，GB
     *
     * @return integer|null
     */
    public function getMinDiskSize()
    {
        return $this->get("MinDiskSize");
    }

    /**
     * MinDiskSize: 最小值，GB
     *
     * @param int $minDiskSize
     */
    public function setMinDiskSize($minDiskSize)
    {
        $this->set("MinDiskSize", $minDiskSize);
    }

    /**
     * MaxDiskSize: 最大值，GB
     *
     * @return integer|null
     */
    public function getMaxDiskSize()
    {
        return $this->get("MaxDiskSize");
    }

    /**
     * MaxDiskSize: 最大值，GB
     *
     * @param int $maxDiskSize
     */
    public function setMaxDiskSize($maxDiskSize)
    {
        $this->set("MaxDiskSize", $maxDiskSize);
    }

    /**
     * DefaultDataDiskSize: 默认大小，GB
     *
     * @return integer|null
     */
    public function getDefaultDataDiskSize()
    {
        return $this->get("DefaultDataDiskSize");
    }

    /**
     * DefaultDataDiskSize: 默认大小，GB
     *
     * @param int $defaultDataDiskSize
     */
    public function setDefaultDataDiskSize($defaultDataDiskSize)
    {
        $this->set("DefaultDataDiskSize", $defaultDataDiskSize);
    }

    /**
     * Step: 步长，GB
     *
     * @return integer|null
     */
    public function getStep()
    {
        return $this->get("Step");
    }

    /**
     * Step: 步长，GB
     *
     * @param int $step
     */
    public function setStep($step)
    {
        $this->set("Step", $step);
    }
}
