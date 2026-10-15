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

class UpdateUK8SAutoscalerRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUK8SAutoscaler"]);
        $this->markRequired("Region");
        $this->markRequired("ClusterId");
        $this->markRequired("ScaleDownUnneededTime");
        $this->markRequired("ScaleDownUtilizationThreshold");
        $this->markRequired("ScaleDownDelayAfterAdd");
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
     * ClusterId: 集群ID
     *
     * @return string|null
     */
    public function getClusterId()
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 集群ID
     *
     * @param string $clusterId
     */
    public function setClusterId($clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * ScaleDownUnneededTime: 节点持续不需要后触发缩容的等待时间，单位分钟，范围 1–1440。
     *
     * @return integer|null
     */
    public function getScaleDownUnneededTime()
    {
        return $this->get("ScaleDownUnneededTime");
    }

    /**
     * ScaleDownUnneededTime: 节点持续不需要后触发缩容的等待时间，单位分钟，范围 1–1440。
     *
     * @param int $scaleDownUnneededTime
     */
    public function setScaleDownUnneededTime($scaleDownUnneededTime)
    {
        $this->set("ScaleDownUnneededTime", $scaleDownUnneededTime);
    }

    /**
     * ScaleDownUtilizationThreshold: 节点缩容利用率阈值，单位百分比，范围 0–100。例如 50 表示 50%。
     *
     * @return integer|null
     */
    public function getScaleDownUtilizationThreshold()
    {
        return $this->get("ScaleDownUtilizationThreshold");
    }

    /**
     * ScaleDownUtilizationThreshold: 节点缩容利用率阈值，单位百分比，范围 0–100。例如 50 表示 50%。
     *
     * @param int $scaleDownUtilizationThreshold
     */
    public function setScaleDownUtilizationThreshold($scaleDownUtilizationThreshold)
    {
        $this->set("ScaleDownUtilizationThreshold", $scaleDownUtilizationThreshold);
    }

    /**
     * ScaleDownDelayAfterAdd: 添加节点后等待缩容的时间，单位分钟，范围 1–1440。
     *
     * @return integer|null
     */
    public function getScaleDownDelayAfterAdd()
    {
        return $this->get("ScaleDownDelayAfterAdd");
    }

    /**
     * ScaleDownDelayAfterAdd: 添加节点后等待缩容的时间，单位分钟，范围 1–1440。
     *
     * @param int $scaleDownDelayAfterAdd
     */
    public function setScaleDownDelayAfterAdd($scaleDownDelayAfterAdd)
    {
        $this->set("ScaleDownDelayAfterAdd", $scaleDownDelayAfterAdd);
    }

    /**
     * ScaleDownGPUUtilizationThreshold: GPU 缩容利用率阈值，单位百分比，范围 0–100。省略时使用 ScaleDownUtilizationThreshold。
     *
     * @return integer|null
     */
    public function getScaleDownGPUUtilizationThreshold()
    {
        return $this->get("ScaleDownGPUUtilizationThreshold");
    }

    /**
     * ScaleDownGPUUtilizationThreshold: GPU 缩容利用率阈值，单位百分比，范围 0–100。省略时使用 ScaleDownUtilizationThreshold。
     *
     * @param int $scaleDownGPUUtilizationThreshold
     */
    public function setScaleDownGPUUtilizationThreshold($scaleDownGPUUtilizationThreshold)
    {
        $this->set("ScaleDownGPUUtilizationThreshold", $scaleDownGPUUtilizationThreshold);
    }
}
