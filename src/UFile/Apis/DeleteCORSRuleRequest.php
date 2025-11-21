<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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

class DeleteCORSRuleRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DeleteCORSRule"]);
        $this->markRequired("BucketName");
        $this->markRequired("CORSId");
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
     * BucketName: Bucket名称
     *
     * @return string|null
     */
    public function getBucketName()
    {
        return $this->get("BucketName");
    }

    /**
     * BucketName: Bucket名称
     *
     * @param string $bucketName
     */
    public function setBucketName($bucketName)
    {
        $this->set("BucketName", $bucketName);
    }

    /**
     * CORSId: 跨域规则ID
     *
     * @return string|null
     */
    public function getCORSId()
    {
        return $this->get("CORSId");
    }

    /**
     * CORSId: 跨域规则ID
     *
     * @param string $corsId
     */
    public function setCORSId($corsId)
    {
        $this->set("CORSId", $corsId);
    }
}
