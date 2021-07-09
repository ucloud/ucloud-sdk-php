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
namespace UCloud\UCDN\Apis;

use UCloud\Core\Request\Request;

class DescribeNewUcdnRefreshCacheTaskRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeNewUcdnRefreshCacheTask"]);
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * TaskId: 提交任务时返回的任务ID
     *
     * @return string[]|null
     */
    public function getTaskId(): array
    {
        return $this->get("TaskId");
    }

    /**
     * TaskId: 提交任务时返回的任务ID
     *
     * @param string[] $taskId
     */
    public function setTaskId(array $taskId)
    {
        $this->set("TaskId", $taskId);
    }

    /**
     * BeginTime: 查询的起始时间，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值
     *
     * @return integer|null
     */
    public function getBeginTime(): int
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 查询的起始时间，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值
     *
     * @param int $beginTime
     */
    public function setBeginTime(int $beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }

    /**
     * EndTime: 查询的结束时间，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天时间。
     *
     * @return integer|null
     */
    public function getEndTime(): int
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 查询的结束时间，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天时间。
     *
     * @param int $endTime
     */
    public function setEndTime(int $endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * Status: 需要获取的内容刷新的状态，枚举值：success：成功；wait：等待处理；process：正在处理；failure：失败； unknow：未知，默认选择所有状态
     *
     * @return string|null
     */
    public function getStatus(): string
    {
        return $this->get("Status");
    }

    /**
     * Status: 需要获取的内容刷新的状态，枚举值：success：成功；wait：等待处理；process：正在处理；failure：失败； unknow：未知，默认选择所有状态
     *
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->set("Status", $status);
    }

    /**
     * Offset: 数据偏移量，默认为0，自然数
     *
     * @return integer|null
     */
    public function getOffset(): int
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 数据偏移量，默认为0，自然数
     *
     * @param int $offset
     */
    public function setOffset(int $offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 返回数据长度,默认全部，自然数
     *
     * @return integer|null
     */
    public function getLimit(): int
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回数据长度,默认全部，自然数
     *
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->set("Limit", $limit);
    }
}
