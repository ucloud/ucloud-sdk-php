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

namespace UCloud\IPSecVPN\Apis;

use UCloud\Core\Request\Request;

class CreateRemoteVPNGatewayRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateRemoteVPNGateway"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("RemoteVPNGatewayName");
        $this->markRequired("RemoteVPNGatewayAddr");
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
    public function setRegion(string $region)
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
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * RemoteVPNGatewayName: 客户VPN网关名称
     *
     * @return string|null
     */
    public function getRemoteVPNGatewayName()
    {
        return $this->get("RemoteVPNGatewayName");
    }

    /**
     * RemoteVPNGatewayName: 客户VPN网关名称
     *
     * @param string $remoteVPNGatewayName
     */
    public function setRemoteVPNGatewayName(string $remoteVPNGatewayName)
    {
        $this->set("RemoteVPNGatewayName", $remoteVPNGatewayName);
    }
    /**
     * RemoteVPNGatewayAddr: 客户VPN网关地址
     *
     * @return string|null
     */
    public function getRemoteVPNGatewayAddr()
    {
        return $this->get("RemoteVPNGatewayAddr");
    }

    /**
     * RemoteVPNGatewayAddr: 客户VPN网关地址
     *
     * @param string $remoteVPNGatewayAddr
     */
    public function setRemoteVPNGatewayAddr(string $remoteVPNGatewayAddr)
    {
        $this->set("RemoteVPNGatewayAddr", $remoteVPNGatewayAddr);
    }
    /**
     * Tag: 业务组名称，默认为 "Default"
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组名称，默认为 "Default"
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }
    /**
     * Remark: 备注，默认为空
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注，默认为空
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }
}
