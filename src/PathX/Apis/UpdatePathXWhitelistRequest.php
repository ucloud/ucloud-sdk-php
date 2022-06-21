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

class UpdatePathXWhitelistRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdatePathXWhitelist"]);
        $this->markRequired("ProjectId");
        $this->markRequired("InstanceId");
    }

    

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * InstanceId: GlobalSSH实例ID，资源唯一标识
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: GlobalSSH实例ID，资源唯一标识
     *
     * @param string $instanceId
     */
    public function setInstanceId($instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * Whitelist: 白名单规则,例如 "Whitelist.0": "192.168.1.1/24|tcp|22"，"Whitelist.1": "192.168.1.2|tcp|8080:8090"，第一个参数为ip或ip段，第二个参数代表协议（tcp/udp），第三个参数代表端口号或端口范围（使用 ':' 隔开）；可以添加多条规则（递增Whitelist.n字段内的n值）；此接口需要列出全部规则，例如不填则为清空白名单规则，如若需要增量添加，使用InsertPathXWhitelist接口,globalssh 没有端口范围：端口设置成加速端口，协议设置成tcp:ip|tcp|加速端口
     *
     * @return string[]|null
     */
    public function getWhitelist()
    {
        return $this->get("Whitelist");
    }

    /**
     * Whitelist: 白名单规则,例如 "Whitelist.0": "192.168.1.1/24|tcp|22"，"Whitelist.1": "192.168.1.2|tcp|8080:8090"，第一个参数为ip或ip段，第二个参数代表协议（tcp/udp），第三个参数代表端口号或端口范围（使用 ':' 隔开）；可以添加多条规则（递增Whitelist.n字段内的n值）；此接口需要列出全部规则，例如不填则为清空白名单规则，如若需要增量添加，使用InsertPathXWhitelist接口,globalssh 没有端口范围：端口设置成加速端口，协议设置成tcp:ip|tcp|加速端口
     *
     * @param string[] $whitelist
     */
    public function setWhitelist(array $whitelist)
    {
        $this->set("Whitelist", $whitelist);
    }


}
