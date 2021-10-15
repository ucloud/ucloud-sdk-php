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
namespace UCloud\IPSecVPN\Apis;

use UCloud\Core\Request\Request;

class DeleteVPNGatewayRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DeleteVPNGateway"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("VPNGatewayId");
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
     * VPNGatewayId: VPN网关的资源ID
     *
     * @return string|null
     */
    public function getVPNGatewayId()
    {
        return $this->get("VPNGatewayId");
    }

    /**
     * VPNGatewayId: VPN网关的资源ID
     *
     * @param string $vpnGatewayId
     */
    public function setVPNGatewayId($vpnGatewayId)
    {
        $this->set("VPNGatewayId", $vpnGatewayId);
    }

    /**
     * ReleaseEip: 删除VPN时是否一并释放EIP。false，只解绑EIP不删除EIP；true，解绑并释放EIP。默认是false
     *
     * @return boolean|null
     */
    public function getReleaseEip()
    {
        return $this->get("ReleaseEip");
    }

    /**
     * ReleaseEip: 删除VPN时是否一并释放EIP。false，只解绑EIP不删除EIP；true，解绑并释放EIP。默认是false
     *
     * @param boolean $releaseEip
     */
    public function setReleaseEip($releaseEip)
    {
        $this->set("ReleaseEip", $releaseEip);
    }
}
