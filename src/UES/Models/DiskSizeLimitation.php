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
namespace UCloud\UES\Models;

use UCloud\Core\Response\Response;

class DiskSizeLimitation extends Response
{
    

    /**
     * DiskType: 数据盘类别，包含普通云盘|CLOUD_NORMAL、SSD云盘|CLOUD_SSD和RSSD云盘|CLOUD_RSSD。普通本地盘只包含普通本地盘|LOCAL_NORMAL一种。SSD本地盘只包含SSD本地盘|LOCAL_SSD一种。
     *
     * @return string|null
     */
    public function getDiskType()
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 数据盘类别，包含普通云盘|CLOUD_NORMAL、SSD云盘|CLOUD_SSD和RSSD云盘|CLOUD_RSSD。普通本地盘只包含普通本地盘|LOCAL_NORMAL一种。SSD本地盘只包含SSD本地盘|LOCAL_SSD一种。
     *
     * @param string $diskType
     */
    public function setDiskType($diskType)
    {
        $this->set("DiskType", $diskType);
    }

    /**
     * MaxSize: 最大值，单位GB
     *
     * @return integer|null
     */
    public function getMaxSize()
    {
        return $this->get("MaxSize");
    }

    /**
     * MaxSize: 最大值，单位GB
     *
     * @param int $maxSize
     */
    public function setMaxSize($maxSize)
    {
        $this->set("MaxSize", $maxSize);
    }

    /**
     * MinSize: 最小值，单位GB
     *
     * @return integer|null
     */
    public function getMinSize()
    {
        return $this->get("MinSize");
    }

    /**
     * MinSize: 最小值，单位GB
     *
     * @param int $minSize
     */
    public function setMinSize($minSize)
    {
        $this->set("MinSize", $minSize);
    }
}
