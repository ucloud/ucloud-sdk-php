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

class LogInfo extends Response
{
    

    /**
     * LogTime: Unix时间戳
     *
     * @return int|null
     */
    public function getLogTime()
    {
        return $this->get("LogTime");
    }

    /**
     * LogTime: Unix时间戳
     *
     * @param int $logTime
     */
    public function setLogTime($logTime)
    {
        $this->set("LogTime", $logTime);
    }

    /**
     * LogUrl: 日志url地址
     *
     * @return string|null
     */
    public function getLogUrl()
    {
        return $this->get("LogUrl");
    }

    /**
     * LogUrl: 日志url地址
     *
     * @param string $logUrl
     */
    public function setLogUrl($logUrl)
    {
        $this->set("LogUrl", $logUrl);
    }


}
