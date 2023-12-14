<?php
/**
 * Copyright 2023 UCloud Technology Co., Ltd.
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
namespace UCloud\UGN\Models;

use UCloud\Core\Response\Response;

class SimpleRoute extends Response
{
    

    /**
     * DstAddr: 目的网段
     *
     * @return string|null
     */
    public function getDstAddr()
    {
        return $this->get("DstAddr");
    }

    /**
     * DstAddr: 目的网段
     *
     * @param string $dstAddr
     */
    public function setDstAddr($dstAddr)
    {
        $this->set("DstAddr", $dstAddr);
    }

    /**
     * NextHopID: 下一跳网络实例 ID
     *
     * @return string|null
     */
    public function getNextHopID()
    {
        return $this->get("NextHopID");
    }

    /**
     * NextHopID: 下一跳网络实例 ID
     *
     * @param string $nextHopID
     */
    public function setNextHopID($nextHopID)
    {
        $this->set("NextHopID", $nextHopID);
    }

    /**
     * NextHopType: 下一跳网络实例类型
     *
     * @return string|null
     */
    public function getNextHopType()
    {
        return $this->get("NextHopType");
    }

    /**
     * NextHopType: 下一跳网络实例类型
     *
     * @param string $nextHopType
     */
    public function setNextHopType($nextHopType)
    {
        $this->set("NextHopType", $nextHopType);
    }

    /**
     * NextHopRegion: 下一跳网络实例所属地域
     *
     * @return string|null
     */
    public function getNextHopRegion()
    {
        return $this->get("NextHopRegion");
    }

    /**
     * NextHopRegion: 下一跳网络实例所属地域
     *
     * @param string $nextHopRegion
     */
    public function setNextHopRegion($nextHopRegion)
    {
        $this->set("NextHopRegion", $nextHopRegion);
    }

    /**
     * NextHopRegionID: 下一跳网络实例所属地域 id
     *
     * @return integer|null
     */
    public function getNextHopRegionID()
    {
        return $this->get("NextHopRegionID");
    }

    /**
     * NextHopRegionID: 下一跳网络实例所属地域 id
     *
     * @param int $nextHopRegionID
     */
    public function setNextHopRegionID($nextHopRegionID)
    {
        $this->set("NextHopRegionID", $nextHopRegionID);
    }

    /**
     * Priority: 路由优先级
     *
     * @return integer|null
     */
    public function getPriority()
    {
        return $this->get("Priority");
    }

    /**
     * Priority: 路由优先级
     *
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->set("Priority", $priority);
    }
}
