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

class TopicInfo extends Response
{
    

    /**
     * TopicName: 主题名称
     *
     * @return string|null
     */
    public function getTopicName()
    {
        return $this->get("TopicName");
    }

    /**
     * TopicName: 主题名称
     *
     * @param string $topicName
     */
    public function setTopicName($topicName)
    {
        $this->set("TopicName", $topicName);
    }

    /**
     * TopicId: 主题ID
     *
     * @return string|null
     */
    public function getTopicId()
    {
        return $this->get("TopicId");
    }

    /**
     * TopicId: 主题ID
     *
     * @param string $topicId
     */
    public function setTopicId($topicId)
    {
        $this->set("TopicId", $topicId);
    }

    /**
     * TopicShardNum: 分区数量，固定是2
     *
     * @return integer|null
     */
    public function getTopicShardNum()
    {
        return $this->get("TopicShardNum");
    }

    /**
     * TopicShardNum: 分区数量，固定是2
     *
     * @param int $topicShardNum
     */
    public function setTopicShardNum($topicShardNum)
    {
        $this->set("TopicShardNum", $topicShardNum);
    }

    /**
     * ReserveAge: 保存时间 1~730 天
     *
     * @return integer|null
     */
    public function getReserveAge()
    {
        return $this->get("ReserveAge");
    }

    /**
     * ReserveAge: 保存时间 1~730 天
     *
     * @param int $reserveAge
     */
    public function setReserveAge($reserveAge)
    {
        $this->set("ReserveAge", $reserveAge);
    }

    /**
     * IsReserved: 是否保留：0 - NORMAL, 1 - RESERVED
     *
     * @return integer|null
     */
    public function getIsReserved()
    {
        return $this->get("IsReserved");
    }

    /**
     * IsReserved: 是否保留：0 - NORMAL, 1 - RESERVED
     *
     * @param int $isReserved
     */
    public function setIsReserved($isReserved)
    {
        $this->set("IsReserved", $isReserved);
    }

    /**
     * TopicDesc: 主题描述
     *
     * @return string|null
     */
    public function getTopicDesc()
    {
        return $this->get("TopicDesc");
    }

    /**
     * TopicDesc: 主题描述
     *
     * @param string $topicDesc
     */
    public function setTopicDesc($topicDesc)
    {
        $this->set("TopicDesc", $topicDesc);
    }
}
