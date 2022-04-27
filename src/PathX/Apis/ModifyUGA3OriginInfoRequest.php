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

class ModifyUGA3OriginInfoRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ModifyUGA3OriginInfo"]);
        $this->markRequired("ProjectId");
        $this->markRequired("InstanceId");
        $this->markRequired("OriginDomain");
        $this->markRequired("OriginIPList");
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
     * InstanceId: 加速配置实例ID，格式uga3-xxxx。
     *
     * @return string|null
     */
    public function getInstanceId(): string
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 加速配置实例ID，格式uga3-xxxx。
     *
     * @param string $instanceId
     */
    public function setInstanceId(string $instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * OriginDomain: 加速源域名，仅支持1个域名。修改源站时 OriginIPList和OriginDomain至少填一个。OriginIPList和OriginDomain都填时 以Domain为准,如果两个都不填，不修改
     *
     * @return string|null
     */
    public function getOriginDomain(): string
    {
        return $this->get("OriginDomain");
    }

    /**
     * OriginDomain: 加速源域名，仅支持1个域名。修改源站时 OriginIPList和OriginDomain至少填一个。OriginIPList和OriginDomain都填时 以Domain为准,如果两个都不填，不修改
     *
     * @param string $originDomain
     */
    public function setOriginDomain(string $originDomain)
    {
        $this->set("OriginDomain", $originDomain);
    }

    /**
     * OriginIPList: ，加速源IP，多个IP用英文半角逗号(,)隔开。修改源站时 ，OriginIPList和OriginDomain至少填一个。OriginIPList和OriginDomain都填时 以OriginDomain为准。如果两个都不填，不修改
     *
     * @return string|null
     */
    public function getOriginIPList(): string
    {
        return $this->get("OriginIPList");
    }

    /**
     * OriginIPList: ，加速源IP，多个IP用英文半角逗号(,)隔开。修改源站时 ，OriginIPList和OriginDomain至少填一个。OriginIPList和OriginDomain都填时 以OriginDomain为准。如果两个都不填，不修改
     *
     * @param string $originIPList
     */
    public function setOriginIPList(string $originIPList)
    {
        $this->set("OriginIPList", $originIPList);
    }
}
