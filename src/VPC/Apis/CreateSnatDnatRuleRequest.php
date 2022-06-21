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
namespace UCloud\VPC\Apis;

use UCloud\Core\Request\Request;

class CreateSnatDnatRuleRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateSnatDnatRule"]);
        $this->markRequired("Region");
        $this->markRequired("PrivateIp");
        $this->markRequired("EIP");
        $this->markRequired("NATGWId");
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
     * PrivateIp: 内网P地址
     *
     * @return string[]|null
     */
    public function getPrivateIp()
    {
        return $this->get("PrivateIp");
    }

    /**
     * PrivateIp: 内网P地址
     *
     * @param string[] $privateIp
     */
    public function setPrivateIp(array $privateIp)
    {
        $this->set("PrivateIp", $privateIp);
    }

    /**
     * EIP: EIP的IP地址。按入参顺序，PrivateIp与EIP一一对应建立映射关系。
     *
     * @return string[]|null
     */
    public function getEIP()
    {
        return $this->get("EIP");
    }

    /**
     * EIP: EIP的IP地址。按入参顺序，PrivateIp与EIP一一对应建立映射关系。
     *
     * @param string[] $eip
     */
    public function setEIP(array $eip)
    {
        $this->set("EIP", $eip);
    }

    /**
     * NATGWId: 映射所使用的NAT网关资源ID
     *
     * @return string|null
     */
    public function getNATGWId()
    {
        return $this->get("NATGWId");
    }

    /**
     * NATGWId: 映射所使用的NAT网关资源ID
     *
     * @param string $natgwId
     */
    public function setNATGWId($natgwId)
    {
        $this->set("NATGWId", $natgwId);
    }


}
