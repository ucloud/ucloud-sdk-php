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
namespace UCloud\VPC\Apis;

use UCloud\Core\Request\Request;

class UnassignIPv6Request extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UnassignIPv6"]);
        $this->markRequired("Region");
        $this->markRequired("ObjectId");
        $this->markRequired("IPv6Addresses");
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
     * ObjectId: 资源ID
     *
     * @return string|null
     */
    public function getObjectId()
    {
        return $this->get("ObjectId");
    }

    /**
     * ObjectId: 资源ID
     *
     * @param string $objectId
     */
    public function setObjectId($objectId)
    {
        $this->set("ObjectId", $objectId);
    }

    /**
     * IPv6Addresses: IPv6地址
     *
     * @return string[]|null
     */
    public function getIPv6Addresses()
    {
        return $this->get("IPv6Addresses");
    }

    /**
     * IPv6Addresses: IPv6地址
     *
     * @param string[] $iPv6Addresses
     */
    public function setIPv6Addresses(array $iPv6Addresses)
    {
        $this->set("IPv6Addresses", $iPv6Addresses);
    }
}
