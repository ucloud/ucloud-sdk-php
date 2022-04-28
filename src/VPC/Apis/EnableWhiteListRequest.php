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

class EnableWhiteListRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "EnableWhiteList"]);
        $this->markRequired("Region");
        $this->markRequired("NATGWId");
        $this->markRequired("IfOpen");
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
     * ProjectId: 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * NATGWId: NAT网关Id
     *
     * @return string|null
     */
    public function getNATGWId()
    {
        return $this->get("NATGWId");
    }

    /**
     * NATGWId: NAT网关Id
     *
     * @param string $natgwId
     */
    public function setNATGWId($natgwId)
    {
        $this->set("NATGWId", $natgwId);
    }

    /**
     * IfOpen: 白名单开关标记。0：关闭；1：开启。默认为0
     *
     * @return integer|null
     */
    public function getIfOpen()
    {
        return $this->get("IfOpen");
    }

    /**
     * IfOpen: 白名单开关标记。0：关闭；1：开启。默认为0
     *
     * @param int $ifOpen
     */
    public function setIfOpen($ifOpen)
    {
        $this->set("IfOpen", $ifOpen);
    }
}
