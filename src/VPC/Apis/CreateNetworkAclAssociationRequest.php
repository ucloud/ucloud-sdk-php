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

class CreateNetworkAclAssociationRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateNetworkAclAssociation"]);
        $this->markRequired("Region");
        $this->markRequired("AclId");
        $this->markRequired("SubnetworkId");
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
     * AclId: ACL的ID
     *
     * @return string|null
     */
    public function getAclId()
    {
        return $this->get("AclId");
    }

    /**
     * AclId: ACL的ID
     *
     * @param string $aclId
     */
    public function setAclId($aclId)
    {
        $this->set("AclId", $aclId);
    }

    /**
     * SubnetworkId: 需要绑定的子网ID
     *
     * @return string|null
     */
    public function getSubnetworkId()
    {
        return $this->get("SubnetworkId");
    }

    /**
     * SubnetworkId: 需要绑定的子网ID
     *
     * @param string $subnetworkId
     */
    public function setSubnetworkId($subnetworkId)
    {
        $this->set("SubnetworkId", $subnetworkId);
    }


}
