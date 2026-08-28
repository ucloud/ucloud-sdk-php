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
use UCloud\UK8S\Params\UpdateUK8SULSConfigParamExtractRule;
use UCloud\UK8S\Params\UpdateUK8SULSConfigParamInputDetail;
use UCloud\UK8S\Params\UpdateUK8SULSConfigParamInputDetailMetadata;
use UCloud\UK8S\Params\UpdateUK8SULSConfigParamInputDetailFilePaths;
use UCloud\UK8S\Params\UpdateUK8SULSConfigParamMatchRule;
use UCloud\UK8S\Params\UpdateUK8SULSConfigParamMatchRuleWorkloads;
use UCloud\UK8S\Params\UpdateUK8SULSConfigParamMatchRulePodLabels;
use UCloud\UK8S\Params\UpdateUK8SULSConfigParamMatchRulePodLabelsLabels;

class UpdateUK8SULSConfigRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUK8SULSConfig"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Name");
        $this->markRequired("ClusterId");
    }

    

    /**
     * Region: 地域。参见地域和可用区列表：https://docs.ucloud.cn/api/summary/regionlist
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。参见地域和可用区列表：https://docs.ucloud.cn/api/summary/regionlist
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见地域和可用区列表：https://docs.ucloud.cn/api/summary/regionlist
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见地域和可用区列表：https://docs.ucloud.cn/api/summary/regionlist
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。请参考GetProjectList接口：https://docs.ucloud.cn/api/summary/get_project_list
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。请参考GetProjectList接口：https://docs.ucloud.cn/api/summary/get_project_list
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Name: 要修改的日志采集规则名称。名称长度不能超过253个字符，只能包含小写字母、数字、破折号和点，并且必须以字母或数字开头和结尾。
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 要修改的日志采集规则名称。名称长度不能超过253个字符，只能包含小写字母、数字、破折号和点，并且必须以字母或数字开头和结尾。
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * ClusterId: UK8S集群ID。
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: UK8S集群ID。
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * TopicID: 日志服务中用于接收日志的目标Topic ID。不填写时保持原Topic ID不变。
     *
     * @return string|null
     */
    public function getTopicID()
    {
        return $this->get("TopicID");
    }

    /**
     * TopicID: 日志服务中用于接收日志的目标Topic ID。不填写时保持原Topic ID不变。
     *
     * @param string $topicID
     */
    public function setTopicID($topicID)
    {
        $this->set("TopicID", $topicID);
    }

    /**
     * ExtractRule:
     *
     * @return UpdateUK8SULSConfigParamExtractRule|null
     */
    public function getExtractRule()
    {
        return new UpdateUK8SULSConfigParamExtractRule($this->get("ExtractRule"));
    }

    /**
     * ExtractRule:
     *
     * @param UpdateUK8SULSConfigParamExtractRule $extractRule
     */
    public function setExtractRule(array $extractRule)
    {
        $this->set("ExtractRule", $extractRule->getAll());
    }

    /**
     * InputDetail:
     *
     * @return UpdateUK8SULSConfigParamInputDetail|null
     */
    public function getInputDetail()
    {
        return new UpdateUK8SULSConfigParamInputDetail($this->get("InputDetail"));
    }

    /**
     * InputDetail:
     *
     * @param UpdateUK8SULSConfigParamInputDetail $inputDetail
     */
    public function setInputDetail(array $inputDetail)
    {
        $this->set("InputDetail", $inputDetail->getAll());
    }

    /**
     * MatchRule:
     *
     * @return UpdateUK8SULSConfigParamMatchRule|null
     */
    public function getMatchRule()
    {
        return new UpdateUK8SULSConfigParamMatchRule($this->get("MatchRule"));
    }

    /**
     * MatchRule:
     *
     * @param UpdateUK8SULSConfigParamMatchRule $matchRule
     */
    public function setMatchRule(array $matchRule)
    {
        $this->set("MatchRule", $matchRule->getAll());
    }
}
