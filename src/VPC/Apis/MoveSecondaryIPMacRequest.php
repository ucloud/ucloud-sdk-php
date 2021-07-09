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

class MoveSecondaryIPMacRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "MoveSecondaryIPMac"]);
        $this->markRequired("Region");
        $this->markRequired("Ip");
        $this->markRequired("OldMac");
        $this->markRequired("NewMac");
        $this->markRequired("SubnetId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Ip: Secondary IP
     *
     * @return string|null
     */
    public function getIp(): string
    {
        return $this->get("Ip");
    }

    /**
     * Ip: Secondary IP
     *
     * @param string $ip
     */
    public function setIp(string $ip)
    {
        $this->set("Ip", $ip);
    }

    /**
     * OldMac: 旧 Mac。Secondary IP 当前所绑定的 Mac
     *
     * @return string|null
     */
    public function getOldMac(): string
    {
        return $this->get("OldMac");
    }

    /**
     * OldMac: 旧 Mac。Secondary IP 当前所绑定的 Mac
     *
     * @param string $oldMac
     */
    public function setOldMac(string $oldMac)
    {
        $this->set("OldMac", $oldMac);
    }

    /**
     * NewMac: 新 Mac。Secondary IP 迁移的目的 Mac
     *
     * @return string|null
     */
    public function getNewMac(): string
    {
        return $this->get("NewMac");
    }

    /**
     * NewMac: 新 Mac。Secondary IP 迁移的目的 Mac
     *
     * @param string $newMac
     */
    public function setNewMac(string $newMac)
    {
        $this->set("NewMac", $newMac);
    }

    /**
     * SubnetId: 子网 ID。IP/OldMac/NewMac 三者必须在同一子网
     *
     * @return string|null
     */
    public function getSubnetId(): string
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网 ID。IP/OldMac/NewMac 三者必须在同一子网
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }
}
