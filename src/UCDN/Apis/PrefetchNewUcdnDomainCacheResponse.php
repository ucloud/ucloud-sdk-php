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
namespace UCloud\UCDN\Apis;

use UCloud\Core\Response\Response;

class PrefetchNewUcdnDomainCacheResponse extends Response
{
    

    /**
     * TaskId: 本次提交url对应的任务id
     *
     * @return string|null
     */
    public function getTaskId()
    {
        return $this->get("TaskId");
    }

    /**
     * TaskId: 本次提交url对应的任务id
     *
     * @param string $taskId
     */
    public function setTaskId($taskId)
    {
        $this->set("TaskId", $taskId);
    }
}
