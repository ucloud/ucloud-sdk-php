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

class UpdateUK8SAutoScalingGroupV2Request extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUK8SAutoScalingGroupV2"]);
        $this->markRequired("Region");
        $this->markRequired("ClusterId");
        $this->markRequired("Id");
        $this->markRequired("Name");
        $this->markRequired("Min");
        $this->markRequired("Max");
    }

    

    /**
     * Zone: 可用区，可选。此接口按集群和伸缩组 ID 更新配置。
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区，可选。此接口按集群和伸缩组 ID 更新配置。
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Region: 地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
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
     * Id: 伸缩组ID
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->get("Id");
    }

    /**
     * Id: 伸缩组ID
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->set("Id", $id);
    }

    /**
     * Name: 伸缩组名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 伸缩组名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Min: 最小节点数，范围 0–100。
     *
     * @return integer|null
     */
    public function getMin()
    {
        return $this->get("Min");
    }

    /**
     * Min: 最小节点数，范围 0–100。
     *
     * @param int $min
     */
    public function setMin($min)
    {
        $this->set("Min", $min);
    }

    /**
     * Max: 最大节点数，范围 1–100。
     *
     * @return integer|null
     */
    public function getMax()
    {
        return $this->get("Max");
    }

    /**
     * Max: 最大节点数，范围 1–100。
     *
     * @param int $max
     */
    public function setMax($max)
    {
        $this->set("Max", $max);
    }

    /**
     * Priority: 伸缩组优先级，范围 1–100，值越大越优先。省略或传 0 时保持原优先级。
     *
     * @return integer|null
     */
    public function getPriority()
    {
        return $this->get("Priority");
    }

    /**
     * Priority: 伸缩组优先级，范围 1–100，值越大越优先。省略或传 0 时保持原优先级。
     *
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->set("Priority", $priority);
    }
}
