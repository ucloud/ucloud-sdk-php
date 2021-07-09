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
namespace UCloud\UCDN\Models;

use UCloud\Core\Response\Response;

class TaskInfo extends Response
{
    

    /**
     * TaskId: 提交任务时返回的任务ID
     *
     * @return string|null
     */
    public function getTaskId(): string
    {
        return $this->get("TaskId");
    }

    /**
     * TaskId: 提交任务时返回的任务ID
     *
     * @param string $taskId
     */
    public function setTaskId(string $taskId)
    {
        $this->set("TaskId", $taskId);
    }

    /**
     * UrlLists: 任务url的信息列表，参考UrlProgressInfo
     *
     * @return UrlProgressInfo[]|null
     */
    public function getUrlLists(): array
    {
        $items = $this->get("UrlLists") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UrlProgressInfo($item));
        }
        return $result;
    }

    /**
     * UrlLists: 任务url的信息列表，参考UrlProgressInfo
     *
     * @param UrlProgressInfo[] $urlLists
     */
    public function setUrlLists(array $urlLists)
    {
        $result = [];
        foreach ($urlLists as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * CreateTime: 刷新任务创建的时间。格式为Unix Timestamp
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 刷新任务创建的时间。格式为Unix Timestamp
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * Status: 刷新任务的当前状态，枚举值：success：成功；wait：排队中；process：处理中；failure：失败； unknow：未知
     *
     * @return string|null
     */
    public function getStatus(): string
    {
        return $this->get("Status");
    }

    /**
     * Status: 刷新任务的当前状态，枚举值：success：成功；wait：排队中；process：处理中；failure：失败； unknow：未知
     *
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->set("Status", $status);
    }
}
