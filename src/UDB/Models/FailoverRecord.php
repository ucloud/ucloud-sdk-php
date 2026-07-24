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
namespace UCloud\UDB\Models;

use UCloud\Core\Response\Response;

class FailoverRecord extends Response
{
    

    /**
     * SessionId: 时间ID
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->get("SessionId");
    }

    /**
     * SessionId: 时间ID
     *
     * @param string $sessionId
     */
    public function setSessionId($sessionId)
    {
        $this->set("SessionId", $sessionId);
    }

    /**
     * FailoverType: 容灾类型
     *
     * @return integer|null
     */
    public function getFailoverType()
    {
        return $this->get("FailoverType");
    }

    /**
     * FailoverType: 容灾类型
     *
     * @param int $failoverType
     */
    public function setFailoverType($failoverType)
    {
        $this->set("FailoverType", $failoverType);
    }

    /**
     * StartTime: 开始时间
     *
     * @return integer|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 开始时间
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * EndTime: 结束时间
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 结束时间
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * FailoverState: 容灾状态
     *
     * @return string|null
     */
    public function getFailoverState()
    {
        return $this->get("FailoverState");
    }

    /**
     * FailoverState: 容灾状态
     *
     * @param string $failoverState
     */
    public function setFailoverState($failoverState)
    {
        $this->set("FailoverState", $failoverState);
    }
}
