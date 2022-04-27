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
namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class DescribeUGA3AreaRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUGA3Area"]);
    }

    

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * IPList: IP集合，非必填。如果填IP或者域名，会推荐一个地域在返回列表的第一个，源站IP集合，以逗号分隔[127.0.0.1,127.0.0.2]
     *
     * @return string|null
     */
    public function getIPList(): string
    {
        return $this->get("IPList");
    }

    /**
     * IPList: IP集合，非必填。如果填IP或者域名，会推荐一个地域在返回列表的第一个，源站IP集合，以逗号分隔[127.0.0.1,127.0.0.2]
     *
     * @param string $ipList
     */
    public function setIPList(string $ipList)
    {
        $this->set("IPList", $ipList);
    }

    /**
     * Domain: 域名，非必填。如果填IP或者域名，会推荐一个地域在返回列表的第一个
     *
     * @return string|null
     */
    public function getDomain(): string
    {
        return $this->get("Domain");
    }

    /**
     * Domain: 域名，非必填。如果填IP或者域名，会推荐一个地域在返回列表的第一个
     *
     * @param string $domain
     */
    public function setDomain(string $domain)
    {
        $this->set("Domain", $domain);
    }
}
