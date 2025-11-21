<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UFile\Apis;

use UCloud\Core\Request\Request;

class UpdateBucketStaticPageRuleRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateBucketStaticPageRule"]);
        $this->markRequired("Region");
        $this->markRequired("Bucket");
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
     * Bucket: 存储桶名称
     *
     * @return string|null
     */
    public function getBucket()
    {
        return $this->get("Bucket");
    }

    /**
     * Bucket: 存储桶名称
     *
     * @param string $bucket
     */
    public function setBucket($bucket)
    {
        $this->set("Bucket", $bucket);
    }

    /**
     * Status: 启用状态(enable/disable,只有绑定了自定义域名才能开启)
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 启用状态(enable/disable,只有绑定了自定义域名才能开启)
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * DefaultIndex: 默认首页
     *
     * @return string|null
     */
    public function getDefaultIndex()
    {
        return $this->get("DefaultIndex");
    }

    /**
     * DefaultIndex: 默认首页
     *
     * @param string $defaultIndex
     */
    public function setDefaultIndex($defaultIndex)
    {
        $this->set("DefaultIndex", $defaultIndex);
    }

    /**
     * SubDirRedirect: 子目录是否启用重定向
     *
     * @return string|null
     */
    public function getSubDirRedirect()
    {
        return $this->get("SubDirRedirect");
    }

    /**
     * SubDirRedirect: 子目录是否启用重定向
     *
     * @param string $subDirRedirect
     */
    public function setSubDirRedirect($subDirRedirect)
    {
        $this->set("SubDirRedirect", $subDirRedirect);
    }

    /**
     * RuleFor404: 404规则
     *
     * @return string|null
     */
    public function getRuleFor404()
    {
        return $this->get("RuleFor404");
    }

    /**
     * RuleFor404: 404规则
     *
     * @param string $ruleFor404
     */
    public function setRuleFor404($ruleFor404)
    {
        $this->set("RuleFor404", $ruleFor404);
    }

    /**
     * DefaultPage404: 404时的默认页面
     *
     * @return string|null
     */
    public function getDefaultPage404()
    {
        return $this->get("DefaultPage404");
    }

    /**
     * DefaultPage404: 404时的默认页面
     *
     * @param string $defaultPage404
     */
    public function setDefaultPage404($defaultPage404)
    {
        $this->set("DefaultPage404", $defaultPage404);
    }
}
