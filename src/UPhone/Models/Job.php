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
namespace UCloud\UPhone\Models;

use UCloud\Core\Response\Response;

class Job extends Response
{
    

    /**
     * JobId: Job的唯一标识Id	
     *
     * @return string|null
     */
    public function getJobId()
    {
        return $this->get("JobId");
    }

    /**
     * JobId: Job的唯一标识Id	
     *
     * @param string $jobId
     */
    public function setJobId($jobId)
    {
        $this->set("JobId", $jobId);
    }

    /**
     * CreateTime: Job创建时间，格式为Unix时间戳。	
     *
     * @return int|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: Job创建时间，格式为Unix时间戳。	
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * BeginTime: Job处理开始时间，格式为Unix时间戳。	
     *
     * @return int|null
     */
    public function getBeginTime()
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: Job处理开始时间，格式为Unix时间戳。	
     *
     * @param int $beginTime
     */
    public function setBeginTime($beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }

    /**
     * EndTime: Job处理结束时间，格式为Unix时间戳。	
     *
     * @return int|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: Job处理结束时间，格式为Unix时间戳。	
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * State: 任务状态* 等待中：PENDING* 运行中：RUNNING* 成功：SUCCESS* 部分成功：PARTIAL_SUCCESS* 失败：FAILED
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 任务状态* 等待中：PENDING* 运行中：RUNNING* 成功：SUCCESS* 部分成功：PARTIAL_SUCCESS* 失败：FAILED
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * JobType: Job类型，仅支持INSTALL_APP、UNINSTALL_APP、RUN_ASYNC_COMMAND。
     *
     * @return string|null
     */
    public function getJobType()
    {
        return $this->get("JobType");
    }

    /**
     * JobType: Job类型，仅支持INSTALL_APP、UNINSTALL_APP、RUN_ASYNC_COMMAND。
     *
     * @param string $jobType
     */
    public function setJobType($jobType)
    {
        $this->set("JobType", $jobType);
    }

    /**
     * Tasks: Task信息，详情见数据结构Task（如果State为PENDING，此字段为空）	
     *
     * @return Task[]|null
     */
    public function getTasks()
    {
        $items = $this->get("Tasks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Task($item));
        }
        return $result;
    }

    /**
     * Tasks: Task信息，详情见数据结构Task（如果State为PENDING，此字段为空）	
     *
     * @param Task[] $tasks
     */
    public function setTasks(array $tasks)
    {
        $result = [];
        foreach ($tasks as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * AppVersionId: 安装/卸载Job相关的应用版本唯一标识
     *
     * @return string|null
     */
    public function getAppVersionId()
    {
        return $this->get("AppVersionId");
    }

    /**
     * AppVersionId: 安装/卸载Job相关的应用版本唯一标识
     *
     * @param string $appVersionId
     */
    public function setAppVersionId($appVersionId)
    {
        $this->set("AppVersionId", $appVersionId);
    }

    /**
     * UPhoneIds: 此Job相关的云手机唯一标识
     *
     * @return string[]|null
     */
    public function getUPhoneIds()
    {
        return $this->get("UPhoneIds");
    }

    /**
     * UPhoneIds: 此Job相关的云手机唯一标识
     *
     * @param string[] $uPhoneIds
     */
    public function setUPhoneIds(array $uPhoneIds)
    {
        $this->set("UPhoneIds", $uPhoneIds);
    }


}
