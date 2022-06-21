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

class Task extends Response
{
    

    /**
     * TaskId: Task的唯一标识	
     *
     * @return string|null
     */
    public function getTaskId()
    {
        return $this->get("TaskId");
    }

    /**
     * TaskId: Task的唯一标识	
     *
     * @param string $taskId
     */
    public function setTaskId($taskId)
    {
        $this->set("TaskId", $taskId);
    }

    /**
     * BeginTime: 任务处理开始时间，格式为Unix时间戳。	
     *
     * @return int|null
     */
    public function getBeginTime()
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 任务处理开始时间，格式为Unix时间戳。	
     *
     * @param int $beginTime
     */
    public function setBeginTime($beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }

    /**
     * EndTime: 任务处理结束时间，格式为Unix时间戳。	
     *
     * @return int|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 任务处理结束时间，格式为Unix时间戳。	
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * State: 任务状态* 等待中：PENDING* 运行中：RUNNING* 成功：SUCCESS* 失败：FAILED
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 任务状态* 等待中：PENDING* 运行中：RUNNING* 成功：SUCCESS* 失败：FAILED
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * ErrorMsg: Task错误信息
     *
     * @return string|null
     */
    public function getErrorMsg()
    {
        return $this->get("ErrorMsg");
    }

    /**
     * ErrorMsg: Task错误信息
     *
     * @param string $errorMsg
     */
    public function setErrorMsg($errorMsg)
    {
        $this->set("ErrorMsg", $errorMsg);
    }

    /**
     * ExecuteMsg: 异步任务执行结果
     *
     * @return string|null
     */
    public function getExecuteMsg()
    {
        return $this->get("ExecuteMsg");
    }

    /**
     * ExecuteMsg: 异步任务执行结果
     *
     * @param string $executeMsg
     */
    public function setExecuteMsg($executeMsg)
    {
        $this->set("ExecuteMsg", $executeMsg);
    }

    /**
     * UPhoneId: 云手机的唯一标识，云手机相关任务包含此字段。	
     *
     * @return string|null
     */
    public function getUPhoneId()
    {
        return $this->get("UPhoneId");
    }

    /**
     * UPhoneId: 云手机的唯一标识，云手机相关任务包含此字段。	
     *
     * @param string $uPhoneId
     */
    public function setUPhoneId($uPhoneId)
    {
        $this->set("UPhoneId", $uPhoneId);
    }

    /**
     * AppVersionId: 安装/卸载任务相关的应用版本唯一标识ID
     *
     * @return string|null
     */
    public function getAppVersionId()
    {
        return $this->get("AppVersionId");
    }

    /**
     * AppVersionId: 安装/卸载任务相关的应用版本唯一标识ID
     *
     * @param string $appVersionId
     */
    public function setAppVersionId($appVersionId)
    {
        $this->set("AppVersionId", $appVersionId);
    }


}
