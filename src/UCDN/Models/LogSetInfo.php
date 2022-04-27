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

class LogSetInfo extends Response
{
    

    /**
     * Time: 日志时间UnixTime
     *
     * @return integer|null
     */
    public function getTime(): int
    {
        return $this->get("Time");
    }

    /**
     * Time: 日志时间UnixTime
     *
     * @param int $time
     */
    public function setTime(int $time)
    {
        $this->set("Time", $time);
    }

    /**
     * CnLog: 国内日志url列表
     *
     * @return string[]|null
     */
    public function getCnLog(): array
    {
        return $this->get("CnLog");
    }

    /**
     * CnLog: 国内日志url列表
     *
     * @param string[] $cnLog
     */
    public function setCnLog(array $cnLog)
    {
        $this->set("CnLog", $cnLog);
    }

    /**
     * AbroadLog: 国外日志url列表
     *
     * @return string[]|null
     */
    public function getAbroadLog(): array
    {
        return $this->get("AbroadLog");
    }

    /**
     * AbroadLog: 国外日志url列表
     *
     * @param string[] $abroadLog
     */
    public function setAbroadLog(array $abroadLog)
    {
        $this->set("AbroadLog", $abroadLog);
    }
}
