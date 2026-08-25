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
namespace UCloud\Sandbox\Apis;

use UCloud\Core\Request\Request;
use UCloud\Sandbox\Params\UpdateSandboxSiteParamIPAccess;

class UpdateSandboxSiteRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateSandboxSite"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("SandboxID");
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
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
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
     * SandboxID: 站点沙箱ID
     *
     * @return string|null
     */
    public function getSandboxID()
    {
        return $this->get("SandboxID");
    }

    /**
     * SandboxID: 站点沙箱ID
     *
     * @param string $sandboxID
     */
    public function setSandboxID($sandboxID)
    {
        $this->set("SandboxID", $sandboxID);
    }

    /**
     * Name: 更新站点空间名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 更新站点空间名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * APIKey: 更新站点空间API Key
     *
     * @return string|null
     */
    public function getAPIKey()
    {
        return $this->get("APIKey");
    }

    /**
     * APIKey: 更新站点空间API Key
     *
     * @param string $apiKey
     */
    public function setAPIKey($apiKey)
    {
        $this->set("APIKey", $apiKey);
    }

    /**
     * KeyID: 更新站点空间Key ID（需要和APIKey一起传）
     *
     * @return string|null
     */
    public function getKeyID()
    {
        return $this->get("KeyID");
    }

    /**
     * KeyID: 更新站点空间Key ID（需要和APIKey一起传）
     *
     * @param string $keyID
     */
    public function setKeyID($keyID)
    {
        $this->set("KeyID", $keyID);
    }

    /**
     * Envs: 更新站点空间环境变量，格式为["Key=Value"]
     *
     * @return string|null
     */
    public function getEnvs()
    {
        return $this->get("Envs");
    }

    /**
     * Envs: 更新站点空间环境变量，格式为["Key=Value"]
     *
     * @param string $envs
     */
    public function setEnvs($envs)
    {
        $this->set("Envs", $envs);
    }

    /**
     * AccessCode: 访问码
     *
     * @return string|null
     */
    public function getAccessCode()
    {
        return $this->get("AccessCode");
    }

    /**
     * AccessCode: 访问码
     *
     * @param string $accessCode
     */
    public function setAccessCode($accessCode)
    {
        $this->set("AccessCode", $accessCode);
    }

    /**
     * IPAccess:
     *
     * @return UpdateSandboxSiteParamIPAccess|null
     */
    public function getIPAccess()
    {
        return new UpdateSandboxSiteParamIPAccess($this->get("IPAccess"));
    }

    /**
     * IPAccess:
     *
     * @param UpdateSandboxSiteParamIPAccess $ipAccess
     */
    public function setIPAccess(array $ipAccess)
    {
        $this->set("IPAccess", $ipAccess->getAll());
    }
}
