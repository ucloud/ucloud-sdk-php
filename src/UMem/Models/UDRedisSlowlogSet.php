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

class UDRedisSlowlogSet extends Response
{
    

    /**
     * StartTime: 查询发生的时间
     *
     * @return integer|null
     */
    public function getStartTime(): int
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 查询发生的时间
     *
     * @param int $startTime
     */
    public function setStartTime(int $startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * SpendTime: 查询消耗的时间
     *
     * @return integer|null
     */
    public function getSpendTime(): int
    {
        return $this->get("SpendTime");
    }

    /**
     * SpendTime: 查询消耗的时间
     *
     * @param int $spendTime
     */
    public function setSpendTime(int $spendTime)
    {
        $this->set("SpendTime", $spendTime);
    }

    /**
     * Command: 查询命令
     *
     * @return string|null
     */
    public function getCommand(): string
    {
        return $this->get("Command");
    }

    /**
     * Command: 查询命令
     *
     * @param string $command
     */
    public function setCommand(string $command)
    {
        $this->set("Command", $command);
    }

    /**
     * BlockId: 分片id
     *
     * @return string|null
     */
    public function getBlockId(): string
    {
        return $this->get("BlockId");
    }

    /**
     * BlockId: 分片id
     *
     * @param string $blockId
     */
    public function setBlockId(string $blockId)
    {
        $this->set("BlockId", $blockId);
    }
}
