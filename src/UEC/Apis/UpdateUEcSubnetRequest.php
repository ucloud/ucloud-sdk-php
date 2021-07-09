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
namespace UCloud\UEC\Apis;

use UCloud\Core\Request\Request;

class UpdateUEcSubnetRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUEcSubnet"]);
        $this->markRequired("SubnetId");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * SubnetId: 子网ID
     *
     * @return string|null
     */
    public function getSubnetId(): string {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网ID
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId) {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * SubnetName: 子网名称
     *
     * @return string|null
     */
    public function getSubnetName(): string {
        return $this->get("SubnetName");
    }

    /**
     * SubnetName: 子网名称
     *
     * @param string $subnetName
     */
    public function setSubnetName(string $subnetName) {
        $this->set("SubnetName", $subnetName);
    }

    /**
     * Comment: 备注
     *
     * @return string|null
     */
    public function getComment(): string {
        return $this->get("Comment");
    }

    /**
     * Comment: 备注
     *
     * @param string $comment
     */
    public function setComment(string $comment) {
        $this->set("Comment", $comment);
    }


}
