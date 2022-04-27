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

class DeleteNATGWRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DeleteNATGW"]);
        $this->markRequired("Region");
        $this->markRequired("NATGWId");
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
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }
    /**
     * ProjectId: 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
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
    public function setNATGWId(string $natgwId)
    {
        $this->set("NATGWId", $natgwId);
    }
    /**
     * ReleaseEip: 是否释放绑定的EIP。true：解绑并释放；false：只解绑不释放。默认为false
     *
     * @return boolean|null
     */
    public function getReleaseEip()
    {
        return $this->get("ReleaseEip");
    }

    /**
     * ReleaseEip: 是否释放绑定的EIP。true：解绑并释放；false：只解绑不释放。默认为false
     *
     * @param boolean $releaseEip
     */
    public function setReleaseEip(bool $releaseEip)
    {
        $this->set("ReleaseEip", $releaseEip);
    }
}
