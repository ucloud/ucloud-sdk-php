<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class GetUGA3UpdatePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUGA3UpdatePrice"]);
        $this->markRequired("ProjectId");
        $this->markRequired("InstanceId");
    }

    

    /**
     * ProjectId: 项目ID。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * InstanceId: 资源ID
     *
     * @return string|null
     */
    public function getInstanceId(): string
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 资源ID
     *
     * @param string $instanceId
     */
    public function setInstanceId(string $instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * Bandwidth: 只有升级带宽的时候有价格变化
     *
     * @return integer|null
     */
    public function getBandwidth(): int
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 只有升级带宽的时候有价格变化
     *
     * @param int $bandwidth
     */
    public function setBandwidth(int $bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * AccelerationArea: 暂未支持，加速大区，在更换加速大区的时候使用
     *
     * @return string|null
     */
    public function getAccelerationArea(): string
    {
        return $this->get("AccelerationArea");
    }

    /**
     * AccelerationArea: 暂未支持，加速大区，在更换加速大区的时候使用
     *
     * @param string $accelerationArea
     */
    public function setAccelerationArea(string $accelerationArea)
    {
        $this->set("AccelerationArea", $accelerationArea);
    }

    /**
     * AreaCode: 暂未支持，源站区域
     *
     * @return string|null
     */
    public function getAreaCode(): string
    {
        return $this->get("AreaCode");
    }

    /**
     * AreaCode: 暂未支持，源站区域
     *
     * @param string $areaCode
     */
    public function setAreaCode(string $areaCode)
    {
        $this->set("AreaCode", $areaCode);
    }
}
