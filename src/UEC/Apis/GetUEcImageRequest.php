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

class GetUEcImageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUEcImage"]);
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
     * ImageType: 镜像类型：1标准镜像，2行业镜像，3自定义镜像
     *
     * @return string|null
     */
    public function getImageType()
    {
        return $this->get("ImageType");
    }

    /**
     * ImageType: 镜像类型：1标准镜像，2行业镜像，3自定义镜像
     *
     * @param string $imageType
     */
    public function setImageType($imageType)
    {
        $this->set("ImageType", $imageType);
    }

    /**
     * Offset: 数据偏移量，默认0，非负整数
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 数据偏移量，默认0，非负整数
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 返回数据长度， 默认20，非负整数
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回数据长度， 默认20，非负整数
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }


}
