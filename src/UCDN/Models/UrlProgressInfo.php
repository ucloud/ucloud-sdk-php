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
namespace UCloud\UCDN\Models;

use UCloud\Core\Response\Response;

class UrlProgressInfo extends Response
{
    

    /**
     * Url: 刷新的单条url
     *
     * @return string|null
     */
    public function getUrl(): string
    {
        return $this->get("Url");
    }

    /**
     * Url: 刷新的单条url
     *
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->set("Url", $url);
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
     * FinishTime: 任务完成时间。格式为Unix Timestamp
     *
     * @return integer|null
     */
    public function getFinishTime(): int
    {
        return $this->get("FinishTime");
    }

    /**
     * FinishTime: 任务完成时间。格式为Unix Timestamp
     *
     * @param int $finishTime
     */
    public function setFinishTime(int $finishTime)
    {
        $this->set("FinishTime", $finishTime);
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

    /**
     * Progress: 刷新进度，单位%
     *
     * @return integer|null
     */
    public function getProgress(): int
    {
        return $this->get("Progress");
    }

    /**
     * Progress: 刷新进度，单位%
     *
     * @param int $progress
     */
    public function setProgress(int $progress)
    {
        $this->set("Progress", $progress);
    }
}
