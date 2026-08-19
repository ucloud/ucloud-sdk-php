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
namespace UCloud\UWSC\Apis;

use UCloud\Core\Request\Request;

class CreateCEGatewayRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateCEGateway"]);
        $this->markRequired("PopGwId");
        $this->markRequired("PublicIp");
        $this->markRequired("IpType");
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
     * PopGwId: 所属UWAN虚拟路由器资源ID
     *
     * @return string|null
     */
    public function getPopGwId()
    {
        return $this->get("PopGwId");
    }

    /**
     * PopGwId: 所属UWAN虚拟路由器资源ID
     *
     * @param string $popGwId
     */
    public function setPopGwId($popGwId)
    {
        $this->set("PopGwId", $popGwId);
    }

    /**
     * PublicIp: 客户自有公网IP
     *
     * @return string|null
     */
    public function getPublicIp()
    {
        return $this->get("PublicIp");
    }

    /**
     * PublicIp: 客户自有公网IP
     *
     * @param string $publicIp
     */
    public function setPublicIp($publicIp)
    {
        $this->set("PublicIp", $publicIp);
    }

    /**
     * IpType: IP类型 枚举值：静态IP(Static) | 动态IP(Dynamic)
     *
     * @return string|null
     */
    public function getIpType()
    {
        return $this->get("IpType");
    }

    /**
     * IpType: IP类型 枚举值：静态IP(Static) | 动态IP(Dynamic)
     *
     * @param string $ipType
     */
    public function setIpType($ipType)
    {
        $this->set("IpType", $ipType);
    }

    /**
     * Name: 资源名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 资源名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }
}
