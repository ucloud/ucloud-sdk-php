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
use UCloud\UGN\Params\AddRoutePolicyParamPolicy;
use UCloud\UGN\Params\AddRoutePolicyParamPolicySrcNetworks;
use UCloud\UGN\Params\AddRoutePolicyParamPolicyDstNetworks;

class AddRoutePolicyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AddRoutePolicy"]);
        $this->markRequired("ProjectId");
        $this->markRequired("UGNID");
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
     * Policy:
     *
     * @return AddRoutePolicyParamPolicy|null
     */
    public function getPolicy()
    {
        return new AddRoutePolicyParamPolicy($this->get("Policy"));
    }

    /**
     * Policy:
     *
     * @param AddRoutePolicyParamPolicy $policy
     */
    public function setPolicy(array $policy)
    {
        $this->set("Policy", $policy->getAll());
    }
}
