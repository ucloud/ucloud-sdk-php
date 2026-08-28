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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class ULSLogConfig extends Response
{
    

    /**
     * ClusterId: uk8s集群id
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: uk8s集群id
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * MachineGroup: 机器组
     *
     * @return string|null
     */
    public function getMachineGroup()
    {
        return $this->get("MachineGroup");
    }

    /**
     * MachineGroup: 机器组
     *
     * @param string $machineGroup
     */
    public function setMachineGroup($machineGroup)
    {
        $this->set("MachineGroup", $machineGroup);
    }

    /**
     * ExtractRule: 定义日志的提取、解析和格式化规则。见 ULSExtractRule
     *
     * @return ULSExtractRule|null
     */
    public function getExtractRule()
    {
        return new ULSExtractRule($this->get("ExtractRule"));
    }

    /**
     * ExtractRule: 定义日志的提取、解析和格式化规则。见 ULSExtractRule
     *
     * @param ULSExtractRule $extractRule
     */
    public function setExtractRule(array $extractRule)
    {
        $this->set("ExtractRule", $extractRule->getAll());
    }

    /**
     * InputDetail: 定义日志的输入来源（例如容器文件）。见 ULSInputDetail
     *
     * @return ULSInputDetail|null
     */
    public function getInputDetail()
    {
        return new ULSInputDetail($this->get("InputDetail"));
    }

    /**
     * InputDetail: 定义日志的输入来源（例如容器文件）。见 ULSInputDetail
     *
     * @param ULSInputDetail $inputDetail
     */
    public function setInputDetail(array $inputDetail)
    {
        $this->set("InputDetail", $inputDetail->getAll());
    }

    /**
     * MatchRule: 定义此采集规则要匹配的目标 Pod 或工作负载。见 ULSMatchRule
     *
     * @return ULSMatchRule|null
     */
    public function getMatchRule()
    {
        return new ULSMatchRule($this->get("MatchRule"));
    }

    /**
     * MatchRule: 定义此采集规则要匹配的目标 Pod 或工作负载。见 ULSMatchRule
     *
     * @param ULSMatchRule $matchRule
     */
    public function setMatchRule(array $matchRule)
    {
        $this->set("MatchRule", $matchRule->getAll());
    }

    /**
     * TopicID: 日志服务中用于接收日志的目标 Topic ID。
     *
     * @return string|null
     */
    public function getTopicID()
    {
        return $this->get("TopicID");
    }

    /**
     * TopicID: 日志服务中用于接收日志的目标 Topic ID。
     *
     * @param string $topicID
     */
    public function setTopicID($topicID)
    {
        $this->set("TopicID", $topicID);
    }

    /**
     * Name: 采集配置规则名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 采集配置规则名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }
}
