<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\UHost\Apis;

use UCloud\Core\Request\Request;

class ModifyUHostIPRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ModifyUHostIP"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("PresentIpAddress");
        $this->markRequired("UHostId");
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
     * ProjectId: 项目ID。不填写时为默认项目。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写时为默认项目。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * PresentIpAddress: 需要修改为的 IP 地址。新的IP地址和旧IP地址必须属于统一子网，且和主机内部的配置文件一致。
     *
     * @return string|null
     */
    public function getPresentIpAddress()
    {
        return $this->get("PresentIpAddress");
    }

    /**
     * PresentIpAddress: 需要修改为的 IP 地址。新的IP地址和旧IP地址必须属于统一子网，且和主机内部的配置文件一致。
     *
     * @param string $presentIpAddress
     */
    public function setPresentIpAddress($presentIpAddress)
    {
        $this->set("PresentIpAddress", $presentIpAddress);
    }

    /**
     * UHostId: 指定云主机 ID。
     *
     * @return string|null
     */
    public function getUHostId()
    {
        return $this->get("UHostId");
    }

    /**
     * UHostId: 指定云主机 ID。
     *
     * @param string $uHostId
     */
    public function setUHostId($uHostId)
    {
        $this->set("UHostId", $uHostId);
    }

    /**
     * PreviousIpAddress: 所需修改的原 IP 地址 ，当云主机只有一个IP地址时，此参数不必填写。
     *
     * @return string|null
     */
    public function getPreviousIpAddress()
    {
        return $this->get("PreviousIpAddress");
    }

    /**
     * PreviousIpAddress: 所需修改的原 IP 地址 ，当云主机只有一个IP地址时，此参数不必填写。
     *
     * @param string $previousIpAddress
     */
    public function setPreviousIpAddress($previousIpAddress)
    {
        $this->set("PreviousIpAddress", $previousIpAddress);
    }


}
