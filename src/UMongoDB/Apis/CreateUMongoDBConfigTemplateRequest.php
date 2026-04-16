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
namespace UCloud\UMongoDB\Apis;

use UCloud\Core\Request\Request;

class CreateUMongoDBConfigTemplateRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUMongoDBConfigTemplate"]);
        $this->markRequired("Region");
        $this->markRequired("TemplateName");
        $this->markRequired("ClusterType");
        $this->markRequired("MongodbVersion");
        $this->markRequired("BaseTemplateId");
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
     * TemplateName: 模板名称
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->get("TemplateName");
    }

    /**
     * TemplateName: 模板名称
     *
     * @param string $templateName
     */
    public function setTemplateName($templateName)
    {
        $this->set("TemplateName", $templateName);
    }

    /**
     * ClusterType: 集群类型
     *
     * @return string|null
     */
    public function getClusterType()
    {
        return $this->get("ClusterType");
    }

    /**
     * ClusterType: 集群类型
     *
     * @param string $clusterType
     */
    public function setClusterType($clusterType)
    {
        $this->set("ClusterType", $clusterType);
    }

    /**
     * MongodbVersion: mongo版本
     *
     * @return string|null
     */
    public function getMongodbVersion()
    {
        return $this->get("MongodbVersion");
    }

    /**
     * MongodbVersion: mongo版本
     *
     * @param string $mongodbVersion
     */
    public function setMongodbVersion($mongodbVersion)
    {
        $this->set("MongodbVersion", $mongodbVersion);
    }

    /**
     * BaseTemplateId: 基础模板
     *
     * @return string|null
     */
    public function getBaseTemplateId()
    {
        return $this->get("BaseTemplateId");
    }

    /**
     * BaseTemplateId: 基础模板
     *
     * @param string $baseTemplateId
     */
    public function setBaseTemplateId($baseTemplateId)
    {
        $this->set("BaseTemplateId", $baseTemplateId);
    }

    /**
     * Description: 模板描述
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 模板描述
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }
}
