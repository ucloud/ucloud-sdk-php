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
use UCloud\UHost\Models\CopyImageTaskInfo;

class CopyCustomImageResponse extends Response
{
    

    /**
     * TargetImageId: 目标镜像Id，只有非批量复制的时候该字段才存在
     *
     * @return string|null
     */
    public function getTargetImageId()
    {
        return $this->get("TargetImageId");
    }

    /**
     * TargetImageId: 目标镜像Id，只有非批量复制的时候该字段才存在
     *
     * @param string $targetImageId
     */
    public function setTargetImageId($targetImageId)
    {
        $this->set("TargetImageId", $targetImageId);
    }

    /**
     * TaskId: 目标镜像复制的任务Id，只有非批量复制的时候该字段才存在
     *
     * @return string|null
     */
    public function getTaskId()
    {
        return $this->get("TaskId");
    }

    /**
     * TaskId: 目标镜像复制的任务Id，只有非批量复制的时候该字段才存在
     *
     * @param string $taskId
     */
    public function setTaskId($taskId)
    {
        $this->set("TaskId", $taskId);
    }

    /**
     * Infos: 批量复制时的任务信息，参考下方的CopyImageTaskInfo
     *
     * @return CopyImageTaskInfo[]|null
     */
    public function getInfos()
    {
        $items = $this->get("Infos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CopyImageTaskInfo($item));
        }
        return $result;
    }

    /**
     * Infos: 批量复制时的任务信息，参考下方的CopyImageTaskInfo
     *
     * @param CopyImageTaskInfo[] $infos
     */
    public function setInfos(array $infos)
    {
        $result = [];
        foreach ($infos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
