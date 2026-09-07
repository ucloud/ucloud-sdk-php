<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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

class CopySecGroupRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CopySecGroup"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("SecGroupId");
        $this->markRequired("DstRegion");
        $this->markRequired("DstProjectId");
        $this->markRequired("DstVPCId");
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
     * SecGroupId: 源安全组ID
     *
     * @return string|null
     */
    public function getSecGroupId()
    {
        return $this->get("SecGroupId");
    }

    /**
     * SecGroupId: 源安全组ID
     *
     * @param string $secGroupId
     */
    public function setSecGroupId($secGroupId)
    {
        $this->set("SecGroupId", $secGroupId);
    }

    /**
     * DstRegion: 目的地域
     *
     * @return string|null
     */
    public function getDstRegion()
    {
        return $this->get("DstRegion");
    }

    /**
     * DstRegion: 目的地域
     *
     * @param string $dstRegion
     */
    public function setDstRegion($dstRegion)
    {
        $this->set("DstRegion", $dstRegion);
    }

    /**
     * DstProjectId: 目的项目ID
     *
     * @return string|null
     */
    public function getDstProjectId()
    {
        return $this->get("DstProjectId");
    }

    /**
     * DstProjectId: 目的项目ID
     *
     * @param string $dstProjectId
     */
    public function setDstProjectId($dstProjectId)
    {
        $this->set("DstProjectId", $dstProjectId);
    }

    /**
     * DstVPCId: 目的VPC ID
     *
     * @return string|null
     */
    public function getDstVPCId()
    {
        return $this->get("DstVPCId");
    }

    /**
     * DstVPCId: 目的VPC ID
     *
     * @param string $dstVPCId
     */
    public function setDstVPCId($dstVPCId)
    {
        $this->set("DstVPCId", $dstVPCId);
    }

    /**
     * DstName: 目的安全组名称，最长64个字符
     *
     * @return string|null
     */
    public function getDstName()
    {
        return $this->get("DstName");
    }

    /**
     * DstName: 目的安全组名称，最长64个字符
     *
     * @param string $dstName
     */
    public function setDstName($dstName)
    {
        $this->set("DstName", $dstName);
    }

    /**
     * DstRemark: 目的安全组备注
     *
     * @return string|null
     */
    public function getDstRemark()
    {
        return $this->get("DstRemark");
    }

    /**
     * DstRemark: 目的安全组备注
     *
     * @param string $dstRemark
     */
    public function setDstRemark($dstRemark)
    {
        $this->set("DstRemark", $dstRemark);
    }
}
