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
namespace UCloud\UDBPostgreSQL\Apis;

use UCloud\Core\Request\Request;

class UploadUPgSQLParamTemplateRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UploadUPgSQLParamTemplate"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("GroupName");
        $this->markRequired("DBVersion");
        $this->markRequired("Content");
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
     * GroupName: 模板名称
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->get("GroupName");
    }

    /**
     * GroupName: 模板名称
     *
     * @param string $groupName
     */
    public function setGroupName($groupName)
    {
        $this->set("GroupName", $groupName);
    }

    /**
     * DBVersion: 应用的DB版本
     *
     * @return string|null
     */
    public function getDBVersion()
    {
        return $this->get("DBVersion");
    }

    /**
     * DBVersion: 应用的DB版本
     *
     * @param string $dbVersion
     */
    public function setDBVersion($dbVersion)
    {
        $this->set("DBVersion", $dbVersion);
    }

    /**
     * Content: base64编码过的
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->get("Content");
    }

    /**
     * Content: base64编码过的
     *
     * @param string $content
     */
    public function setContent($content)
    {
        $this->set("Content", $content);
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

    /**
     * ParamGroupType: 版本
     *
     * @return string|null
     */
    public function getParamGroupType()
    {
        return $this->get("ParamGroupType");
    }

    /**
     * ParamGroupType: 版本
     *
     * @param string $paramGroupType
     */
    public function setParamGroupType($paramGroupType)
    {
        $this->set("ParamGroupType", $paramGroupType);
    }
}
