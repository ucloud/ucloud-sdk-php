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
namespace UCloud\UFile\Apis;

use UCloud\Core\Request\Request;

class DescribeUFileLifeCycleRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUFileLifeCycle"]);
        $this->markRequired("BucketName");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * BucketName: 存储空间名称
     *
     * @return string|null
     */
    public function getBucketName(): string
    {
        return $this->get("BucketName");
    }

    /**
     * BucketName: 存储空间名称
     *
     * @param string $bucketName
     */
    public function setBucketName(string $bucketName)
    {
        $this->set("BucketName", $bucketName);
    }

    /**
     * LifeCycleId: 生命周期Id；不传递此参数拉取存储空间下面的所有生命周期信息
     *
     * @return string|null
     */
    public function getLifeCycleId(): string
    {
        return $this->get("LifeCycleId");
    }

    /**
     * LifeCycleId: 生命周期Id；不传递此参数拉取存储空间下面的所有生命周期信息
     *
     * @param string $lifeCycleId
     */
    public function setLifeCycleId(string $lifeCycleId)
    {
        $this->set("LifeCycleId", $lifeCycleId);
    }
}
