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
namespace UCloud\UHost\Apis;

use UCloud\Core\Request\Request;

class CopyCustomImageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CopyCustomImage"]);
        $this->markRequired("Region");
        $this->markRequired("SourceImageId");
        $this->markRequired("TargetProjectId");
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
     * SourceImageId: 源镜像Id, 参见 DescribeImage
     *
     * @return string|null
     */
    public function getSourceImageId()
    {
        return $this->get("SourceImageId");
    }

    /**
     * SourceImageId: 源镜像Id, 参见 DescribeImage
     *
     * @param string $sourceImageId
     */
    public function setSourceImageId($sourceImageId)
    {
        $this->set("SourceImageId", $sourceImageId);
    }

    /**
     * TargetProjectId: 目标项目Id, 参见 GetProjectList
     *
     * @return string|null
     */
    public function getTargetProjectId()
    {
        return $this->get("TargetProjectId");
    }

    /**
     * TargetProjectId: 目标项目Id, 参见 GetProjectList
     *
     * @param string $targetProjectId
     */
    public function setTargetProjectId($targetProjectId)
    {
        $this->set("TargetProjectId", $targetProjectId);
    }

    /**
     * TargetRegion: 目标地域，不跨地域不用填
     *
     * @return string|null
     */
    public function getTargetRegion()
    {
        return $this->get("TargetRegion");
    }

    /**
     * TargetRegion: 目标地域，不跨地域不用填
     *
     * @param string $targetRegion
     */
    public function setTargetRegion($targetRegion)
    {
        $this->set("TargetRegion", $targetRegion);
    }

    /**
     * TargetImageName: 目标镜像名称
     *
     * @return string|null
     */
    public function getTargetImageName()
    {
        return $this->get("TargetImageName");
    }

    /**
     * TargetImageName: 目标镜像名称
     *
     * @param string $targetImageName
     */
    public function setTargetImageName($targetImageName)
    {
        $this->set("TargetImageName", $targetImageName);
    }

    /**
     * TargetImageDescription: 目标镜像描述
     *
     * @return string|null
     */
    public function getTargetImageDescription()
    {
        return $this->get("TargetImageDescription");
    }

    /**
     * TargetImageDescription: 目标镜像描述
     *
     * @param string $targetImageDescription
     */
    public function setTargetImageDescription($targetImageDescription)
    {
        $this->set("TargetImageDescription", $targetImageDescription);
    }


}
