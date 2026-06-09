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
namespace UCloud\UAIModelverse\Apis;

use UCloud\Core\Request\Request;

class ListUMInferAPIKeyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ListUMInferAPIKey"]);
        $this->markRequired("ProjectId");
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
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @return integer|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 返回数据长度，默认为20，最大100
     *
     * @return integer|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回数据长度，默认为20，最大100
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * ModelverseDisabled: 是否modelverse可用 0: 启用 1: 禁用
     *
     * @return integer|null
     */
    public function getModelverseDisabled()
    {
        return $this->get("ModelverseDisabled");
    }

    /**
     * ModelverseDisabled: 是否modelverse可用 0: 启用 1: 禁用
     *
     * @param int $modelverseDisabled
     */
    public function setModelverseDisabled($modelverseDisabled)
    {
        $this->set("ModelverseDisabled", $modelverseDisabled);
    }

    /**
     * SandBoxDisabled: 是否沙盒可用 0: 启用 1: 禁用(astraflow 沙盒控制未上线，暂时无效)
     *
     * @return integer|null
     */
    public function getSandBoxDisabled()
    {
        return $this->get("SandBoxDisabled");
    }

    /**
     * SandBoxDisabled: 是否沙盒可用 0: 启用 1: 禁用(astraflow 沙盒控制未上线，暂时无效)
     *
     * @param int $sandBoxDisabled
     */
    public function setSandBoxDisabled($sandBoxDisabled)
    {
        $this->set("SandBoxDisabled", $sandBoxDisabled);
    }
}
