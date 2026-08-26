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

use UCloud\Core\Request\Request;

class CreateULogServiceTopicRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateULogServiceTopic"]);
        $this->markRequired("Region");
        $this->markRequired("TopicName");
        $this->markRequired("ReserveAge");
        $this->markRequired("LogSetId");
        $this->markRequired("TopicShardNum");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * TopicName: 主题名称，校验规则"^[\w]{1,64}$"
     *
     * @return string|null
     */
    public function getTopicName()
    {
        return $this->get("TopicName");
    }

    /**
     * TopicName: 主题名称，校验规则"^[\w]{1,64}$"
     *
     * @param string $topicName
     */
    public function setTopicName($topicName)
    {
        $this->set("TopicName", $topicName);
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
     * LogSetId: 日志集ID
     *
     * @return string|null
     */
    public function getLogSetId()
    {
        return $this->get("LogSetId");
    }

    /**
     * LogSetId: 日志集ID
     *
     * @param string $logSetId
     */
    public function setLogSetId($logSetId)
    {
        $this->set("LogSetId", $logSetId);
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
}
