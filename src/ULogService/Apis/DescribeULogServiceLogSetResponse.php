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
namespace UCloud\ULogService\Apis;

use UCloud\Core\Response\Response;
use UCloud\ULogService\Models\LogSetInfo;

class DescribeULogServiceLogSetResponse extends Response
{
    

    /**
     * TotalCount: 日志集总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 日志集总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * LogSetInfo: 日志集信息
     *
     * @return LogSetInfo|null
     */
    public function getLogSetInfo()
    {
        return new LogSetInfo($this->get("LogSetInfo"));
    }

    /**
     * LogSetInfo: 日志集信息
     *
     * @param LogSetInfo $logSetInfo
     */
    public function setLogSetInfo(array $logSetInfo)
    {
        $this->set("LogSetInfo", $logSetInfo->getAll());
    }
}
