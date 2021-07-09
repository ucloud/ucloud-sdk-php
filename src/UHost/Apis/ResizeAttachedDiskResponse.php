<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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

class ResizeAttachedDiskResponse extends Response {
    

    /**
     * DiskId: 改配成功的磁盘id
     *
     * @return string|null
     */
    public function getDiskId(): string {
        return $this->get("DiskId");
    }

    /**
     * DiskId: 改配成功的磁盘id
     *
     * @param string $diskId
     */
    public function setDiskId(string $diskId) {
        $this->set("DiskId", $diskId);
    }

    /**
     * NeedRestart: 扩容后的状态。NeedRestart = true，必须关闭后启动实例才能使用扩容的磁盘空间。NeedRestart = false,磁盘扩容后无需重启操作。
     *
     * @return boolean|null
     */
    public function getNeedRestart(): bool {
        return $this->get("NeedRestart");
    }

    /**
     * NeedRestart: 扩容后的状态。NeedRestart = true，必须关闭后启动实例才能使用扩容的磁盘空间。NeedRestart = false,磁盘扩容后无需重启操作。
     *
     * @param boolean $needRestart
     */
    public function setNeedRestart(bool $needRestart) {
        $this->set("NeedRestart", $needRestart);
    }


}
