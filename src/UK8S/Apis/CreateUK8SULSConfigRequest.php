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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Request\Request;
use UCloud\UK8S\Params\CreateUK8SULSConfigParamExtractRule;
use UCloud\UK8S\Params\CreateUK8SULSConfigParamExtractRuleExtractRule;
use UCloud\UK8S\Params\CreateUK8SULSConfigParamInputDetail;
use UCloud\UK8S\Params\CreateUK8SULSConfigParamInputDetailMetadata;
use UCloud\UK8S\Params\CreateUK8SULSConfigParamInputDetailFilePaths;
use UCloud\UK8S\Params\CreateUK8SULSConfigParamMatchRule;
use UCloud\UK8S\Params\CreateUK8SULSConfigParamMatchRuleWorkloads;
use UCloud\UK8S\Params\CreateUK8SULSConfigParamMatchRulePodLabels;
use UCloud\UK8S\Params\CreateUK8SULSConfigParamMatchRulePodLabelsLabels;

class CreateUK8SULSConfigRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUK8SULSConfig"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("TopicID");
        $this->markRequired("ClusterId");
        $this->markRequired("Name");
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
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
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
     * ClusterId: UK8S 集群ID。
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: UK8S 集群ID。
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * Name: 要创建的日志的采集规则的名称，不能重复。总长度不能超过 253个字符。字符类型：只能包含小写字母（a-z）、数字（0-9）、破折号（-）和点（.）。开头和结尾字符：必须以小写字母或数字开头，并且也必须以小写字母或数字结尾。不允许以 - 或 . 开头或结尾。连续特殊字符：不能连续出现点（.）或破折号（-）。
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 要创建的日志的采集规则的名称，不能重复。总长度不能超过 253个字符。字符类型：只能包含小写字母（a-z）、数字（0-9）、破折号（-）和点（.）。开头和结尾字符：必须以小写字母或数字开头，并且也必须以小写字母或数字结尾。不允许以 - 或 . 开头或结尾。连续特殊字符：不能连续出现点（.）或破折号（-）。
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * ExtractRule:
     *
     * @return CreateUK8SULSConfigParamExtractRule|null
     */
    public function getExtractRule()
    {
        return new CreateUK8SULSConfigParamExtractRule($this->get("ExtractRule"));
    }

    /**
     * ExtractRule:
     *
     * @param CreateUK8SULSConfigParamExtractRule $extractRule
     */
    public function setExtractRule(array $extractRule)
    {
        $this->set("ExtractRule", $extractRule->getAll());
    }

    /**
     * InputDetail:
     *
     * @return CreateUK8SULSConfigParamInputDetail|null
     */
    public function getInputDetail()
    {
        return new CreateUK8SULSConfigParamInputDetail($this->get("InputDetail"));
    }

    /**
     * InputDetail:
     *
     * @param CreateUK8SULSConfigParamInputDetail $inputDetail
     */
    public function setInputDetail(array $inputDetail)
    {
        $this->set("InputDetail", $inputDetail->getAll());
    }

    /**
     * MatchRule:
     *
     * @return CreateUK8SULSConfigParamMatchRule|null
     */
    public function getMatchRule()
    {
        return new CreateUK8SULSConfigParamMatchRule($this->get("MatchRule"));
    }

    /**
     * MatchRule:
     *
     * @param CreateUK8SULSConfigParamMatchRule $matchRule
     */
    public function setMatchRule(array $matchRule)
    {
        $this->set("MatchRule", $matchRule->getAll());
    }
}
