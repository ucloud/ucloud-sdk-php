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

class DescribeNewUcdnRefreshCacheTaskResponse extends Response
{
    

    /**
     * TotalCount: 刷新任务的总数
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 刷新任务的总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * TaskList: 刷新任务信息，参考TaskInfo
     *
     * @return TaskInfo[]|null
     */
    public function getTaskList()
    {
        $items = $this->get("TaskList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new TaskInfo($item));
        }
        return $result;
    }

    /**
     * TaskList: 刷新任务信息，参考TaskInfo
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
