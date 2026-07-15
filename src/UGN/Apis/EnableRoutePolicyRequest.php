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
namespace UCloud\UGN\Apis;

use UCloud\Core\Request\Request;

class EnableRoutePolicyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "EnableRoutePolicy"]);
        $this->markRequired("ProjectId");
        $this->markRequired("UGNID");
        $this->markRequired("PolicyId");
        $this->markRequired("Enable");
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
     * UGNID: 云联网实例ID
     *
     * @return string|null
     */
    public function getUGNID()
    {
        return $this->get("UGNID");
    }

    /**
     * UGNID: 云联网实例ID
     *
     * @param string $ugnid
     */
    public function setUGNID($ugnid)
    {
        $this->set("UGNID", $ugnid);
    }

    /**
     * PolicyId: 路由策略ID
     *
     * @return string|null
     */
    public function getPolicyId()
    {
        return $this->get("PolicyId");
    }

    /**
     * PolicyId: 路由策略ID
     *
     * @param string $policyId
     */
    public function setPolicyId($policyId)
    {
        $this->set("PolicyId", $policyId);
    }

    /**
     * Enable: 是否启用
     *
     * @return boolean|null
     */
    public function getEnable()
    {
        return $this->get("Enable");
    }

    /**
     * Enable: 是否启用
     *
     * @param boolean $enable
     */
    public function setEnable($enable)
    {
        $this->set("Enable", $enable);
    }
}
