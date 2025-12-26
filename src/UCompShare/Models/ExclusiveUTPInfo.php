<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UCompShare\Models;

use UCloud\Core\Response\Response;

class ExclusiveUTPInfo extends Response
{
    

    /**
     * TotalSize: 当前周期总流量
     *
     * @return integer|null
     */
    public function getTotalSize()
    {
        return $this->get("TotalSize");
    }

    /**
     * TotalSize: 当前周期总流量
     *
     * @param int $totalSize
     */
    public function setTotalSize($totalSize)
    {
        $this->set("TotalSize", $totalSize);
    }

    /**
     * AvailableSize: 当前周期剩余流量
     *
     * @return integer|null
     */
    public function getAvailableSize()
    {
        return $this->get("AvailableSize");
    }

    /**
     * AvailableSize: 当前周期剩余流量
     *
     * @param int $availableSize
     */
    public function setAvailableSize($availableSize)
    {
        $this->set("AvailableSize", $availableSize);
    }

    /**
     * UsedSize: 当前周期已使用流量
     *
     * @return integer|null
     */
    public function getUsedSize()
    {
        return $this->get("UsedSize");
    }

    /**
     * UsedSize: 当前周期已使用流量
     *
     * @param int $usedSize
     */
    public function setUsedSize($usedSize)
    {
        $this->set("UsedSize", $usedSize);
    }

    /**
     * ExcessSize: 当前周期超出限额的流量
     *
     * @return integer|null
     */
    public function getExcessSize()
    {
        return $this->get("ExcessSize");
    }

    /**
     * ExcessSize: 当前周期超出限额的流量
     *
     * @param int $excessSize
     */
    public function setExcessSize($excessSize)
    {
        $this->set("ExcessSize", $excessSize);
    }

    /**
     * LastResetTime: 上次重置时间
     *
     * @return integer|null
     */
    public function getLastResetTime()
    {
        return $this->get("LastResetTime");
    }

    /**
     * LastResetTime: 上次重置时间
     *
     * @param int $lastResetTime
     */
    public function setLastResetTime($lastResetTime)
    {
        $this->set("LastResetTime", $lastResetTime);
    }

    /**
     * NextResetTime: 下次重置时间
     *
     * @return integer|null
     */
    public function getNextResetTime()
    {
        return $this->get("NextResetTime");
    }

    /**
     * NextResetTime: 下次重置时间
     *
     * @param int $nextResetTime
     */
    public function setNextResetTime($nextResetTime)
    {
        $this->set("NextResetTime", $nextResetTime);
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
}
