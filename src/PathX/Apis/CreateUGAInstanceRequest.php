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
namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class CreateUGAInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUGAInstance"]);
        $this->markRequired("ProjectId");
        $this->markRequired("Name");
    }

    

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Name: 加速配置实例名称
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: 加速配置实例名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * IPList: 加速源IP，多个IP用英文半角逗号(,)隔开；IPList和Domain二选一必填
     *
     * @return string|null
     */
    public function getIPList(): string
    {
        return $this->get("IPList");
    }

    /**
     * IPList: 加速源IP，多个IP用英文半角逗号(,)隔开；IPList和Domain二选一必填
     *
     * @param string $ipList
     */
    public function setIPList(string $ipList)
    {
        $this->set("IPList", $ipList);
    }

    /**
     * Domain: 加速源域名，IPList和Domain二选一必填
     *
     * @return string|null
     */
    public function getDomain(): string
    {
        return $this->get("Domain");
    }

    /**
     * Domain: 加速源域名，IPList和Domain二选一必填
     *
     * @param string $domain
     */
    public function setDomain(string $domain)
    {
        $this->set("Domain", $domain);
    }

    /**
     * TCP: TCP端口号，已废弃。请使用 CreateUGAForwarder API 创建端口
     *
     * @return string[]|null
     */
    public function getTCP(): array
    {
        return $this->get("TCP");
    }

    /**
     * TCP: TCP端口号，已废弃。请使用 CreateUGAForwarder API 创建端口
     *
     * @param string[] $tcp
     */
    public function setTCP(array $tcp)
    {
        $this->set("TCP", $tcp);
    }

    /**
     * UDP: UDP端口号，已废弃。请使用 CreateUGAForwarder API 创建端口
     *
     * @return string[]|null
     */
    public function getUDP(): array
    {
        return $this->get("UDP");
    }

    /**
     * UDP: UDP端口号，已废弃。请使用 CreateUGAForwarder API 创建端口
     *
     * @param string[] $udp
     */
    public function setUDP(array $udp)
    {
        $this->set("UDP", $udp);
    }
}
