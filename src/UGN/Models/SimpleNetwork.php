<?php
/**
 * Copyright 2023 UCloud Technology Co., Ltd.
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
namespace UCloud\UGN\Models;

use UCloud\Core\Response\Response;

class SimpleNetwork extends Response
{
    

    /**
     * Region: 网络实例所在地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 网络实例所在地域
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * NetworkID: 网络实例的ID，如 vnet-xxxxx
     *
     * @return string|null
     */
    public function getNetworkID()
    {
        return $this->get("NetworkID");
    }

    /**
     * NetworkID: 网络实例的ID，如 vnet-xxxxx
     *
     * @param string $networkID
     */
    public function setNetworkID($networkID)
    {
        $this->set("NetworkID", $networkID);
    }

    /**
     * Name: 网络实例名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 网络实例名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Type: 网络实例类型：VPC/HybridGW/...
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 网络实例类型：VPC/HybridGW/...
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * OrgName: 网络实例所在项目名
     *
     * @return string|null
     */
    public function getOrgName()
    {
        return $this->get("OrgName");
    }

    /**
     * OrgName: 网络实例所在项目名
     *
     * @param string $orgName
     */
    public function setOrgName($orgName)
    {
        $this->set("OrgName", $orgName);
    }

    /**
     * RegionID: 网络实例所在地域ID
     *
     * @return integer|null
     */
    public function getRegionID()
    {
        return $this->get("RegionID");
    }

    /**
     * RegionID: 网络实例所在地域ID
     *
     * @param int $regionID
     */
    public function setRegionID($regionID)
    {
        $this->set("RegionID", $regionID);
    }

    /**
     * OrgID: 网络实例所在项目的ID
     *
     * @return integer|null
     */
    public function getOrgID()
    {
        return $this->get("OrgID");
    }

    /**
     * OrgID: 网络实例所在项目的ID
     *
     * @param int $orgID
     */
    public function setOrgID($orgID)
    {
        $this->set("OrgID", $orgID);
    }

    /**
     * CreateTime:
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime:
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }
}
