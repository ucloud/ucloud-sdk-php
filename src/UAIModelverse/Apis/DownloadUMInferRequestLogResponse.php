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
namespace UCloud\UAIModelverse\Apis;

use UCloud\Core\Response\Response;

class DownloadUMInferRequestLogResponse extends Response
{
    

    /**
     * TaskId: 导出任务 ID
     *
     * @return string|null
     */
    public function getTaskId()
    {
        return $this->get("TaskId");
    }

    /**
     * TaskId: 导出任务 ID
     *
     * @param string $taskId
     */
    public function setTaskId($taskId)
    {
        $this->set("TaskId", $taskId);
    }

    /**
     * TotalCount: 本次导出查询命中的日志行数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 本次导出查询命中的日志行数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
