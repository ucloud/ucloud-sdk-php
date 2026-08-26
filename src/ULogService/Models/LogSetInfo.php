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
namespace UCloud\ULogService\Models;

use UCloud\Core\Response\Response;

class LogSetInfo extends Response
{
    

    /**
     * TopicCount: 日志集下主题数量
     *
     * @return integer|null
     */
    public function getTopicCount()
    {
        return $this->get("TopicCount");
    }

    /**
     * TopicCount: 日志集下主题数量
     *
     * @param int $topicCount
     */
    public function setTopicCount($topicCount)
    {
        $this->set("TopicCount", $topicCount);
    }

    /**
     * LogSetRemark: 日志集备注
     *
     * @return string|null
     */
    public function getLogSetRemark()
    {
        return $this->get("LogSetRemark");
    }

    /**
     * LogSetRemark: 日志集备注
     *
     * @param string $logSetRemark
     */
    public function setLogSetRemark($logSetRemark)
    {
        $this->set("LogSetRemark", $logSetRemark);
    }

    /**
     * LogSetName: 日志集名称
     *
     * @return string|null
     */
    public function getLogSetName()
    {
        return $this->get("LogSetName");
    }

    /**
     * LogSetName: 日志集名称
     *
     * @param string $logSetName
     */
    public function setLogSetName($logSetName)
    {
        $this->set("LogSetName", $logSetName);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * UpdateTime: 更新时间
     *
     * @return integer|null
     */
    public function getUpdateTime()
    {
        return $this->get("UpdateTime");
    }

    /**
     * UpdateTime: 更新时间
     *
     * @param int $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->set("UpdateTime", $updateTime);
    }
}
