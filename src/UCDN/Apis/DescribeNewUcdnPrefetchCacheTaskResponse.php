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
use UCloud\UCDN\Models\TaskInfo;
use UCloud\UCDN\Models\UrlProgressInfo;

class DescribeNewUcdnPrefetchCacheTaskResponse extends Response
{
    

    /**
     * TotalCount: 预热任务的总数
     *
     * @return integer|null
     */
    public function getTotalCount(): int
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 预热任务的总数
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * TaskList: 预热任务信息，参考TaskInfo
     *
     * @return TaskInfo[]|null
     */
    public function getTaskList(): array
    {
        $items = $this->get("TaskList") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new TaskInfo($item));
        }
        return $result;
    }

    /**
     * TaskList: 预热任务信息，参考TaskInfo
     *
     * @param TaskInfo[] $taskList
     */
    public function setTaskList(array $taskList)
    {
        $result = [];
        foreach ($taskList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
