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

class LogContent extends Response
{
    

    /**
     * LogId: 日志标识ID
     *
     * @return string|null
     */
    public function getLogId()
    {
        return $this->get("LogId");
    }

    /**
     * LogId: 日志标识ID
     *
     * @param string $logId
     */
    public function setLogId($logId)
    {
        $this->set("LogId", $logId);
    }

    /**
     * HostName: 日志来源主机
     *
     * @return string|null
     */
    public function getHostName()
    {
        return $this->get("HostName");
    }

    /**
     * HostName: 日志来源主机
     *
     * @param string $hostName
     */
    public function setHostName($hostName)
    {
        $this->set("HostName", $hostName);
    }

    /**
     * FileName: 日志文件路径
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->get("FileName");
    }

    /**
     * FileName: 日志文件路径
     *
     * @param string $fileName
     */
    public function setFileName($fileName)
    {
        $this->set("FileName", $fileName);
    }

    /**
     * Timestamp: 日志时间
     *
     * @return integer|null
     */
    public function getTimestamp()
    {
        return $this->get("Timestamp");
    }

    /**
     * Timestamp: 日志时间
     *
     * @param int $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->set("Timestamp", $timestamp);
    }

    /**
     * LogJson: JSON格式的日志内容
     *
     * @return string|null
     */
    public function getLogJson()
    {
        return $this->get("LogJson");
    }

    /**
     * LogJson: JSON格式的日志内容
     *
     * @param string $logJson
     */
    public function setLogJson($logJson)
    {
        $this->set("LogJson", $logJson);
    }
}
