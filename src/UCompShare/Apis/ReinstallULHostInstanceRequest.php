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
namespace UCloud\UCompShare\Apis;

use UCloud\Core\Request\Request;

class ReinstallULHostInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ReinstallULHostInstance"]);
        $this->markRequired("Region");
        $this->markRequired("ImageId");
        $this->markRequired("ULHostId");
        $this->markRequired("Password");
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
     * ImageId: 镜像Id。暂不支持使用自定义镜像重装
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像Id。暂不支持使用自定义镜像重装
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * ULHostId: 实例Id
     *
     * @return string|null
     */
    public function getULHostId()
    {
        return $this->get("ULHostId");
    }

    /**
     * ULHostId: 实例Id
     *
     * @param string $ulHostId
     */
    public function setULHostId($ulHostId)
    {
        $this->set("ULHostId", $ulHostId);
    }

    /**
     * Password: 登陆密码。密码需使用base64进行编码，举例如下：# echo -n Password1 | base64 UGFzc3dvcmQx
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->get("Password");
    }

    /**
     * Password: 登陆密码。密码需使用base64进行编码，举例如下：# echo -n Password1 | base64 UGFzc3dvcmQx
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->set("Password", $password);
    }
}
