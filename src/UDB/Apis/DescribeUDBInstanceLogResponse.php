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
namespace UCloud\UDB\Apis;

use UCloud\Core\Response\Response;

class DescribeUDBInstanceLogResponse extends Response
{
    

    /**
     * Log: 查询到的日志内容，一段纯文本
     *
     * @return string|null
     */
    public function getLog()
    {
        return $this->get("Log");
    }

    /**
     * Log: 查询到的日志内容，一段纯文本
     *
     * @param string $log
     */
    public function setLog($log)
    {
        $this->set("Log", $log);
    }

    /**
     * NextTime: 此次查询到的日志的下一个时间，用于下一次轮询时的BeginTime参数；如果日志查询结束则返回为空，前端结束查询
     *
     * @return string|null
     */
    public function getNextTime()
    {
        return $this->get("NextTime");
    }

    /**
     * NextTime: 此次查询到的日志的下一个时间，用于下一次轮询时的BeginTime参数；如果日志查询结束则返回为空，前端结束查询
     *
     * @param string $nextTime
     */
    public function setNextTime($nextTime)
    {
        $this->set("NextTime", $nextTime);
    }


}
