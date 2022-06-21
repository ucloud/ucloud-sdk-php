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
namespace UCloud\UMem\Models;

use UCloud\Core\Response\Response;

class URedisSlowlogSet extends Response
{
    

    /**
     * StartTime: 查询发生的时间
     *
     * @return int|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 查询发生的时间
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * SpendTime: 查询消耗的时间
     *
     * @return int|null
     */
    public function getSpendTime()
    {
        return $this->get("SpendTime");
    }

    /**
     * SpendTime: 查询消耗的时间
     *
     * @param int $spendTime
     */
    public function setSpendTime($spendTime)
    {
        $this->set("SpendTime", $spendTime);
    }

    /**
     * Command: 查询命令
     *
     * @return string|null
     */
    public function getCommand()
    {
        return $this->get("Command");
    }

    /**
     * Command: 查询命令
     *
     * @param string $command
     */
    public function setCommand($command)
    {
        $this->set("Command", $command);
    }


}
