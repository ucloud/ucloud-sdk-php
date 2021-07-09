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
namespace UCloud\ULB\Apis;

use UCloud\Core\Request\Request;

class DeleteULBRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "DeleteULB"]);
        $this->markRequired("Region");
        $this->markRequired("ULBId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
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
     * ULBId: 负载均衡实例的ID
     *
     * @return string|null
     */
    public function getULBId(): string {
        return $this->get("ULBId");
    }

    /**
     * ULBId: 负载均衡实例的ID
     *
     * @param string $ulbId
     */
    public function setULBId(string $ulbId) {
        $this->set("ULBId", $ulbId);
    }

    /**
     * ReleaseEip: 删除ulb时是否释放绑定的EIP，false标识只解绑EIP，true表示会释放绑定的EIP，默认是false。Anycast IP 此参数无效
     *
     * @return boolean|null
     */
    public function getReleaseEip(): bool {
        return $this->get("ReleaseEip");
    }

    /**
     * ReleaseEip: 删除ulb时是否释放绑定的EIP，false标识只解绑EIP，true表示会释放绑定的EIP，默认是false。Anycast IP 此参数无效
     *
     * @param boolean $releaseEip
     */
    public function setReleaseEip(bool $releaseEip) {
        $this->set("ReleaseEip", $releaseEip);
    }


}
