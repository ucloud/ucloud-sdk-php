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

namespace UCloud\UFS\Apis;

use UCloud\Core\Response\Response;

class CreateUFSVolumeResponse extends Response
{

    /**
     * VolumeName: 文件系统名称
     *
     * @return string|null
     */
    public function getVolumeName()
    {
        return $this->get("VolumeName");
    }

    /**
     * VolumeName: 文件系统名称
     *
     * @param string $volumeName
     */
    public function setVolumeName(string $volumeName)
    {
        $this->set("VolumeName", $volumeName);
    }
    /**
     * VolumeId: 文件系统ID
     *
     * @return string|null
     */
    public function getVolumeId()
    {
        return $this->get("VolumeId");
    }

    /**
     * VolumeId: 文件系统ID
     *
     * @param string $volumeId
     */
    public function setVolumeId(string $volumeId)
    {
        $this->set("VolumeId", $volumeId);
    }
    /**
     * VolumeStatus: 文件系统挂载点状态
     *
     * @return string|null
     */
    public function getVolumeStatus()
    {
        return $this->get("VolumeStatus");
    }

    /**
     * VolumeStatus: 文件系统挂载点状态
     *
     * @param string $volumeStatus
     */
    public function setVolumeStatus(string $volumeStatus)
    {
        $this->set("VolumeStatus", $volumeStatus);
    }
}
