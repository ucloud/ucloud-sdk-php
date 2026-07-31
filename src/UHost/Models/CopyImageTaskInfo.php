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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class CopyImageTaskInfo extends Response
{
    

    /**
     * TaskId: 目标镜像复制的任务Id
     *
     * @return string|null
     */
    public function getTaskId()
    {
        return $this->get("TaskId");
    }

    /**
     * TaskId: 目标镜像复制的任务Id
     *
     * @param string $taskId
     */
    public function setTaskId($taskId)
    {
        $this->set("TaskId", $taskId);
    }

    /**
     * TargetImageId: 目标镜像Id
     *
     * @return string|null
     */
    public function getTargetImageId()
    {
        return $this->get("TargetImageId");
    }

    /**
     * TargetImageId: 目标镜像Id
     *
     * @param string $targetImageId
     */
    public function setTargetImageId($targetImageId)
    {
        $this->set("TargetImageId", $targetImageId);
    }

    /**
     * TargetRegion: 目标地域
     *
     * @return string|null
     */
    public function getTargetRegion()
    {
        return $this->get("TargetRegion");
    }

    /**
     * TargetRegion: 目标地域
     *
     * @param string $targetRegion
     */
    public function setTargetRegion($targetRegion)
    {
        $this->set("TargetRegion", $targetRegion);
    }
}
