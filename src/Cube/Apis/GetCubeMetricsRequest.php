<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\Cube\Apis;

use UCloud\Core\Request\Request;

class GetCubeMetricsRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "GetCubeMetrics"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("ResourceId");
        $this->markRequired("MetricName");
        $this->markRequired("BeginTime");
        $this->markRequired("EndTime");
        $this->markRequired("ContainerName");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region) {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone(): string {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone(string $zone) {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * ResourceId: Cube实例资源ID
     *
     * @return string|null
     */
    public function getResourceId(): string {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: Cube实例资源ID
     *
     * @param string $resourceId
     */
    public function setResourceId(string $resourceId) {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * MetricName: 监控指标名称
     *
     * @return string[]|null
     */
    public function getMetricName(): array {
        return $this->get("MetricName");
    }

    /**
     * MetricName: 监控指标名称
     *
     * @param string[] $metricName
     */
    public function setMetricName(array $metricName) {
        $this->set("MetricName", $metricName);
    }

    /**
     * BeginTime: 开始时间
     *
     * @return int|null
     */
    public function getBeginTime(): int {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 开始时间
     *
     * @param int $beginTime
     */
    public function setBeginTime(int $beginTime) {
        $this->set("BeginTime", $beginTime);
    }

    /**
     * EndTime: 结束时间，必须大于开始时间
     *
     * @return int|null
     */
    public function getEndTime(): int {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 结束时间，必须大于开始时间
     *
     * @param int $endTime
     */
    public function setEndTime(int $endTime) {
        $this->set("EndTime", $endTime);
    }

    /**
     * ContainerName: Pod内容器名称
     *
     * @return string|null
     */
    public function getContainerName(): string {
        return $this->get("ContainerName");
    }

    /**
     * ContainerName: Pod内容器名称
     *
     * @param string $containerName
     */
    public function setContainerName(string $containerName) {
        $this->set("ContainerName", $containerName);
    }


}
