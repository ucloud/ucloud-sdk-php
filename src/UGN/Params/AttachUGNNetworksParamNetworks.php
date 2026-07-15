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
namespace UCloud\UGN\Params;

use UCloud\Core\Request\Request;

class AttachUGNNetworksParamNetworks extends Request
{
    

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
     * Type: 网络实例类型，枚举值：VPC/UCVR/...
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 网络实例类型，枚举值：VPC/UCVR/...
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Region: 网络实例所属地域，如 cn-sh2
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 网络实例所属地域，如 cn-sh2
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * OrgName: 网络实例所属项目名，如 org-xxx
     *
     * @return string|null
     */
    public function getOrgName()
    {
        return $this->get("OrgName");
    }

    /**
     * OrgName: 网络实例所属项目名，如 org-xxx
     *
     * @param string $orgName
     */
    public function setOrgName($orgName)
    {
        $this->set("OrgName", $orgName);
    }
}
