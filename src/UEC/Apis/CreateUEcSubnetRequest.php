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
namespace UCloud\UEC\Apis;

use UCloud\Core\Request\Request;

class CreateUEcSubnetRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUEcSubnet"]);
        $this->markRequired("IdcId");
        $this->markRequired("CIDR");
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
     * IdcId: 机房ID
     *
     * @return string|null
     */
    public function getIdcId()
    {
        return $this->get("IdcId");
    }

    /**
     * IdcId: 机房ID
     *
     * @param string $idcId
     */
    public function setIdcId($idcId)
    {
        $this->set("IdcId", $idcId);
    }

    /**
     * CIDR: 子网cidr
     *
     * @return string|null
     */
    public function getCIDR()
    {
        return $this->get("CIDR");
    }

    /**
     * CIDR: 子网cidr
     *
     * @param string $cidr
     */
    public function setCIDR($cidr)
    {
        $this->set("CIDR", $cidr);
    }

    /**
     * SubnetName: 子网名称
     *
     * @return string|null
     */
    public function getSubnetName()
    {
        return $this->get("SubnetName");
    }

    /**
     * SubnetName: 子网名称
     *
     * @param string $subnetName
     */
    public function setSubnetName($subnetName)
    {
        $this->set("SubnetName", $subnetName);
    }

    /**
     * Comment: 备注
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->get("Comment");
    }

    /**
     * Comment: 备注
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->set("Comment", $comment);
    }


}
