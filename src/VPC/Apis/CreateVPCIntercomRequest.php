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
namespace UCloud\VPC\Apis;

use UCloud\Core\Request\Request;

class CreateVPCIntercomRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateVPCIntercom"]);
        $this->markRequired("Region");
        $this->markRequired("VPCId");
        $this->markRequired("DstVPCId");
    }

    

    /**
     * Region: 源VPC所在地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 源VPC所在地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 源VPC所在项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 源VPC所在项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * VPCId: 源VPC短ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 源VPC短ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * DstVPCId: 目的VPC短ID
     *
     * @return string|null
     */
    public function getDstVPCId()
    {
        return $this->get("DstVPCId");
    }

    /**
     * DstVPCId: 目的VPC短ID
     *
     * @param string $dstVPCId
     */
    public function setDstVPCId($dstVPCId)
    {
        $this->set("DstVPCId", $dstVPCId);
    }

    /**
     * DstRegion: 目的VPC所在地域，默认与源VPC同地域。
     *
     * @return string|null
     */
    public function getDstRegion()
    {
        return $this->get("DstRegion");
    }

    /**
     * DstRegion: 目的VPC所在地域，默认与源VPC同地域。
     *
     * @param string $dstRegion
     */
    public function setDstRegion($dstRegion)
    {
        $this->set("DstRegion", $dstRegion);
    }

    /**
     * DstProjectId: 目的VPC项目ID。默认与源VPC同项目。
     *
     * @return string|null
     */
    public function getDstProjectId()
    {
        return $this->get("DstProjectId");
    }

    /**
     * DstProjectId: 目的VPC项目ID。默认与源VPC同项目。
     *
     * @param string $dstProjectId
     */
    public function setDstProjectId($dstProjectId)
    {
        $this->set("DstProjectId", $dstProjectId);
    }
}
