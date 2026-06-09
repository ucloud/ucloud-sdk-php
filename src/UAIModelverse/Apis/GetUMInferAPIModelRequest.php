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

class GetUMInferAPIModelRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUMInferAPIModel"]);
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
     * KeyId: apikey 的id
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: apikey 的id
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * ModelType: 模型类型，1: 文本生成，2: 图片生成。
     *
     * @return integer|null
     */
    public function getModelType()
    {
        return $this->get("ModelType");
    }

    /**
     * ModelType: 模型类型，1: 文本生成，2: 图片生成。
     *
     * @param int $modelType
     */
    public function setModelType($modelType)
    {
        $this->set("ModelType", $modelType);
    }

    /**
     * SquareId: 模型广场的id，用来跳转体验中心
     *
     * @return string|null
     */
    public function getSquareId()
    {
        return $this->get("SquareId");
    }

    /**
     * SquareId: 模型广场的id，用来跳转体验中心
     *
     * @param string $squareId
     */
    public function setSquareId($squareId)
    {
        $this->set("SquareId", $squareId);
    }
}
