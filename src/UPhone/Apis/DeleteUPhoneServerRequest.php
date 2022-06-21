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
namespace UCloud\UPhone\Apis;

use UCloud\Core\Request\Request;

class DeleteUPhoneServerRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DeleteUPhoneServer"]);
        $this->markRequired("ServerId");
        $this->markRequired("CityId");
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
     * ServerId: 云手机服务器的实例ID 可通过 [DescribeUPhoneServer]()获取
     *
     * @return string|null
     */
    public function getServerId()
    {
        return $this->get("ServerId");
    }

    /**
     * ServerId: 云手机服务器的实例ID 可通过 [DescribeUPhoneServer]()获取
     *
     * @param string $serverId
     */
    public function setServerId($serverId)
    {
        $this->set("ServerId", $serverId);
    }

    /**
     * CityId: 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *
     * @return string|null
     */
    public function getCityId()
    {
        return $this->get("CityId");
    }

    /**
     * CityId: 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *
     * @param string $cityId
     */
    public function setCityId($cityId)
    {
        $this->set("CityId", $cityId);
    }

    /**
     * ReleaseEIP: 删除云手机服务器时是否释放绑定的EIP。默认为false。	
     *
     * @return boolean|null
     */
    public function getReleaseEIP()
    {
        return $this->get("ReleaseEIP");
    }

    /**
     * ReleaseEIP: 删除云手机服务器时是否释放绑定的EIP。默认为false。	
     *
     * @param boolean $releaseEIP
     */
    public function setReleaseEIP($releaseEIP)
    {
        $this->set("ReleaseEIP", $releaseEIP);
    }

    /**
     * ReleaseUDisk: 删除云手机服务器时是否同时删除挂载的数据盘。默认为false。	
     *
     * @return boolean|null
     */
    public function getReleaseUDisk()
    {
        return $this->get("ReleaseUDisk");
    }

    /**
     * ReleaseUDisk: 删除云手机服务器时是否同时删除挂载的数据盘。默认为false。	
     *
     * @param boolean $releaseUDisk
     */
    public function setReleaseUDisk($releaseUDisk)
    {
        $this->set("ReleaseUDisk", $releaseUDisk);
    }


}
