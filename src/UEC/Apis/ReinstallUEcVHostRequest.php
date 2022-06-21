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

class ReinstallUEcVHostRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ReinstallUEcVHost"]);
        $this->markRequired("NodeId");
        $this->markRequired("ImageId");
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
     * NodeId: 虚拟机资源ID
     *
     * @return string|null
     */
    public function getNodeId()
    {
        return $this->get("NodeId");
    }

    /**
     * NodeId: 虚拟机资源ID
     *
     * @param string $nodeId
     */
    public function setNodeId($nodeId)
    {
        $this->set("NodeId", $nodeId);
    }

    /**
     * ImageId: 镜像ID
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像ID
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * KeepData: 是否保留数据盘数据， 0-不保留，1-保留，默认为1
     *
     * @return int|null
     */
    public function getKeepData()
    {
        return $this->get("KeepData");
    }

    /**
     * KeepData: 是否保留数据盘数据， 0-不保留，1-保留，默认为1
     *
     * @param int $keepData
     */
    public function setKeepData($keepData)
    {
        $this->set("KeepData", $keepData);
    }

    /**
     * Password: 节点密码
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->get("Password");
    }

    /**
     * Password: 节点密码
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->set("Password", $password);
    }

    /**
     * SysDiskSize: 系统盘大小，单位GB
     *
     * @return int|null
     */
    public function getSysDiskSize()
    {
        return $this->get("SysDiskSize");
    }

    /**
     * SysDiskSize: 系统盘大小，单位GB
     *
     * @param int $sysDiskSize
     */
    public function setSysDiskSize($sysDiskSize)
    {
        $this->set("SysDiskSize", $sysDiskSize);
    }


}
