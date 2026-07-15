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

class SendUGNApplyNetworkRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SendUGNApplyNetwork"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("NetworkID");
        $this->markRequired("NetworkType");
        $this->markRequired("NetworkRegion");
        $this->markRequired("NetworkOrgName");
        $this->markRequired("UGNID");
        $this->markRequired("UGNCompanyID");
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
     * NetworkID: 网络实例 ID，如 uvnet-xxxx
     *
     * @return string|null
     */
    public function getNetworkID()
    {
        return $this->get("NetworkID");
    }

    /**
     * NetworkID: 网络实例 ID，如 uvnet-xxxx
     *
     * @param string $networkID
     */
    public function setNetworkID($networkID)
    {
        $this->set("NetworkID", $networkID);
    }

    /**
     * NetworkType: 网络实例类型，枚举值：VPC/UWAN-VRouter/...
     *
     * @return string|null
     */
    public function getNetworkType()
    {
        return $this->get("NetworkType");
    }

    /**
     * NetworkType: 网络实例类型，枚举值：VPC/UWAN-VRouter/...
     *
     * @param string $networkType
     */
    public function setNetworkType($networkType)
    {
        $this->set("NetworkType", $networkType);
    }

    /**
     * NetworkRegion: 网络实例所属地域，如 cn-sh2
     *
     * @return string|null
     */
    public function getNetworkRegion()
    {
        return $this->get("NetworkRegion");
    }

    /**
     * NetworkRegion: 网络实例所属地域，如 cn-sh2
     *
     * @param string $networkRegion
     */
    public function setNetworkRegion($networkRegion)
    {
        $this->set("NetworkRegion", $networkRegion);
    }

    /**
     * NetworkOrgName: 网络实例所属项目名，如 org-xxx
     *
     * @return string|null
     */
    public function getNetworkOrgName()
    {
        return $this->get("NetworkOrgName");
    }

    /**
     * NetworkOrgName: 网络实例所属项目名，如 org-xxx
     *
     * @param string $networkOrgName
     */
    public function setNetworkOrgName($networkOrgName)
    {
        $this->set("NetworkOrgName", $networkOrgName);
    }

    /**
     * UGNID: UGN id
     *
     * @return string|null
     */
    public function getUGNID()
    {
        return $this->get("UGNID");
    }

    /**
     * UGNID: UGN id
     *
     * @param string $ugnid
     */
    public function setUGNID($ugnid)
    {
        $this->set("UGNID", $ugnid);
    }

    /**
     * UGNCompanyID: UGN所属公司 id
     *
     * @return integer|null
     */
    public function getUGNCompanyID()
    {
        return $this->get("UGNCompanyID");
    }

    /**
     * UGNCompanyID: UGN所属公司 id
     *
     * @param int $ugnCompanyID
     */
    public function setUGNCompanyID($ugnCompanyID)
    {
        $this->set("UGNCompanyID", $ugnCompanyID);
    }
}
