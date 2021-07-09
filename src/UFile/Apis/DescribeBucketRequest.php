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
namespace UCloud\UFile\Apis;

use UCloud\Core\Request\Request;

class DescribeBucketRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeBucket"]);
    }

    

    /**
     * Region: 如果提供此参数，则获取相应地域下所有空间的空间名称(只返回空间名称信息)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 如果提供此参数，则获取相应地域下所有空间的空间名称(只返回空间名称信息)
     *
     * @param string $region
     */
    public function setRegion(string $region) {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * BucketName: 待获取Bucket的名称，若不提供，则获取所有Bucket
     *
     * @return string|null
     */
    public function getBucketName(): string {
        return $this->get("BucketName");
    }

    /**
     * BucketName: 待获取Bucket的名称，若不提供，则获取所有Bucket
     *
     * @param string $bucketName
     */
    public function setBucketName(string $bucketName) {
        $this->set("BucketName", $bucketName);
    }

    /**
     * Offset: 获取所有Bucket列表的偏移数目，默认为0
     *
     * @return int|null
     */
    public function getOffset(): int {
        return $this->get("Offset");
    }

    /**
     * Offset: 获取所有Bucket列表的偏移数目，默认为0
     *
     * @param int $offset
     */
    public function setOffset(int $offset) {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 获取所有Bucket列表的限制数目，默认为20
     *
     * @return int|null
     */
    public function getLimit(): int {
        return $this->get("Limit");
    }

    /**
     * Limit: 获取所有Bucket列表的限制数目，默认为20
     *
     * @param int $limit
     */
    public function setLimit(int $limit) {
        $this->set("Limit", $limit);
    }


}
