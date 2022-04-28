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

class DescribeSnatRuleRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeSnatRule"]);
        $this->markRequired("Region");
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
     * NATGWId: NAT网关的ID
     *
     * @return string|null
     */
    public function getNATGWId()
    {
        return $this->get("NATGWId");
    }

    /**
     * NATGWId: NAT网关的ID
     *
     * @param string $natgwId
     */
    public function setNATGWId($natgwId)
    {
        $this->set("NATGWId", $natgwId);
    }

    /**
     * SourceIp: 需要出外网的私网IP地址，例如10.9.7.xx
     *
     * @return string|null
     */
    public function getSourceIp()
    {
        return $this->get("SourceIp");
    }

    /**
     * SourceIp: 需要出外网的私网IP地址，例如10.9.7.xx
     *
     * @param string $sourceIp
     */
    public function setSourceIp($sourceIp)
    {
        $this->set("SourceIp", $sourceIp);
    }

    /**
     * SnatIp: EIP的ip地址,例如106.75.xx.xx
     *
     * @return string|null
     */
    public function getSnatIp()
    {
        return $this->get("SnatIp");
    }

    /**
     * SnatIp: EIP的ip地址,例如106.75.xx.xx
     *
     * @param string $snatIp
     */
    public function setSnatIp($snatIp)
    {
        $this->set("SnatIp", $snatIp);
    }

    /**
     * Offset: 偏移，默认为0
     *
     * @return string|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 偏移，默认为0
     *
     * @param string $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 分页，默认为20
     *
     * @return string|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 分页，默认为20
     *
     * @param string $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }
}
