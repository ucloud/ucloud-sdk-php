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
namespace UCloud\VPC\Apis;

use UCloud\Core\Request\Request;

class CreateNetworkAclRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateNetworkAcl"]);
        $this->markRequired("Region");
        $this->markRequired("VpcId");
        $this->markRequired("AclName");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * VpcId: 将要创建的ACL所属VPC的ID
     *
     * @return string|null
     */
    public function getVpcId()
    {
        return $this->get("VpcId");
    }

    /**
     * VpcId: 将要创建的ACL所属VPC的ID
     *
     * @param string $vpcId
     */
    public function setVpcId($vpcId)
    {
        $this->set("VpcId", $vpcId);
    }

    /**
     * AclName: ACL的名称
     *
     * @return string|null
     */
    public function getAclName()
    {
        return $this->get("AclName");
    }

    /**
     * AclName: ACL的名称
     *
     * @param string $aclName
     */
    public function setAclName($aclName)
    {
        $this->set("AclName", $aclName);
    }

    /**
     * Description: ACL的描述
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: ACL的描述
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }


}
