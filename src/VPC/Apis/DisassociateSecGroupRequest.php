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

class DisassociateSecGroupRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DisassociateSecGroup"]);
        $this->markRequired("Region");
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
     * SecGroupId: 安全组ID，不传表示解绑安全组绑定的所以资源，安全组ID和资源ID至少传一个,且只能有一个批量。支持 string 数组格式。
     *
     * @return string[]|null
     */
    public function getSecGroupId()
    {
        return $this->get("SecGroupId");
    }

    /**
     * SecGroupId: 安全组ID，不传表示解绑安全组绑定的所以资源，安全组ID和资源ID至少传一个,且只能有一个批量。支持 string 数组格式。
     *
     * @param string[] $secGroupId
     */
    public function setSecGroupId(array $secGroupId)
    {
        $this->set("SecGroupId", $secGroupId);
    }

    /**
     * ResourceId: 资源ID，不传表示解绑资源上所有安全组，安全组ID和资源ID至少传一个，且只能有一个批量。支持 string 数组格式。
     *
     * @return string[]|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源ID，不传表示解绑资源上所有安全组，安全组ID和资源ID至少传一个，且只能有一个批量。支持 string 数组格式。
     *
     * @param string[] $resourceId
     */
    public function setResourceId(array $resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * Force: 是否强制解绑。默认为 false。为 true 表示强制解绑，用于删除资源前的解绑，因为开启安全组特性的资源至少绑定一个安全组，正常情况下是不允许解绑所有安全组。
     *
     * @return boolean|null
     */
    public function getForce()
    {
        return $this->get("Force");
    }

    /**
     * Force: 是否强制解绑。默认为 false。为 true 表示强制解绑，用于删除资源前的解绑，因为开启安全组特性的资源至少绑定一个安全组，正常情况下是不允许解绑所有安全组。
     *
     * @param boolean $force
     */
    public function setForce($force)
    {
        $this->set("Force", $force);
    }
}
