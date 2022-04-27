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

namespace UCloud\UEC\Apis;

use UCloud\Core\Request\Request;

class CreateUEcCustomImageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUEcCustomImage"]);
        $this->markRequired("NodeId");
        $this->markRequired("ImageName");
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
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * NodeId: 虚拟机实例ID
     *
     * @return string|null
     */
    public function getNodeId()
    {
        return $this->get("NodeId");
    }

    /**
     * NodeId: 虚拟机实例ID
     *
     * @param string $nodeId
     */
    public function setNodeId(string $nodeId)
    {
        $this->set("NodeId", $nodeId);
    }
    /**
     * ImageName: 镜像名称
     *
     * @return string|null
     */
    public function getImageName()
    {
        return $this->get("ImageName");
    }

    /**
     * ImageName: 镜像名称
     *
     * @param string $imageName
     */
    public function setImageName(string $imageName)
    {
        $this->set("ImageName", $imageName);
    }
    /**
     * ImageDescription: 镜像描述
     *
     * @return string|null
     */
    public function getImageDescription()
    {
        return $this->get("ImageDescription");
    }

    /**
     * ImageDescription: 镜像描述
     *
     * @param string $imageDescription
     */
    public function setImageDescription(string $imageDescription)
    {
        $this->set("ImageDescription", $imageDescription);
    }
}
