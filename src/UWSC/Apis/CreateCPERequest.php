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
namespace UCloud\UWSC\Apis;

use UCloud\Core\Request\Request;

class CreateCPERequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateCPE"]);
        $this->markRequired("ProjectId");
        $this->markRequired("Name");
        $this->markRequired("Remark");
        $this->markRequired("DeviceType");
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
     * Name: cpe 名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: cpe 名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Remark: cpe 备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: cpe 备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * DeviceType: 设备型号，枚举值: UCPE3600、UCPE3601
     *
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->get("DeviceType");
    }

    /**
     * DeviceType: 设备型号，枚举值: UCPE3600、UCPE3601
     *
     * @param string $deviceType
     */
    public function setDeviceType($deviceType)
    {
        $this->set("DeviceType", $deviceType);
    }

    /**
     * Label: 标签：UReach智能网关：Access
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->get("Label");
    }

    /**
     * Label: 标签：UReach智能网关：Access
     *
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->set("Label", $label);
    }

    /**
     * UserInfo: 结构体，详见UserInfo模型
     *
     * @return string|null
     */
    public function getUserInfo()
    {
        return $this->get("UserInfo");
    }

    /**
     * UserInfo: 结构体，详见UserInfo模型
     *
     * @param string $userInfo
     */
    public function setUserInfo($userInfo)
    {
        $this->set("UserInfo", $userInfo);
    }

    /**
     * Count: 数量，默认为1
     *
     * @return integer|null
     */
    public function getCount()
    {
        return $this->get("Count");
    }

    /**
     * Count: 数量，默认为1
     *
     * @param int $count
     */
    public function setCount($count)
    {
        $this->set("Count", $count);
    }
}
