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

class CheckSandboxCustomDomainRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CheckSandboxCustomDomain"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("CustomDomain");
        $this->markRequired("TargetDomain");
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
     * CustomDomain: 自定义域名
     *
     * @return string|null
     */
    public function getCustomDomain()
    {
        return $this->get("CustomDomain");
    }

    /**
     * CustomDomain: 自定义域名
     *
     * @param string $customDomain
     */
    public function setCustomDomain($customDomain)
    {
        $this->set("CustomDomain", $customDomain);
    }

    /**
     * TargetDomain: 目标域名
     *
     * @return string|null
     */
    public function getTargetDomain()
    {
        return $this->get("TargetDomain");
    }

    /**
     * TargetDomain: 目标域名
     *
     * @param string $targetDomain
     */
    public function setTargetDomain($targetDomain)
    {
        $this->set("TargetDomain", $targetDomain);
    }

    /**
     * Get: 如果为true，则表示获取检查结果
     *
     * @return boolean|null
     */
    public function getGet()
    {
        return $this->get("Get");
    }

    /**
     * Get: 如果为true，则表示获取检查结果
     *
     * @param boolean $get
     */
    public function setGet($get)
    {
        $this->set("Get", $get);
    }
}
