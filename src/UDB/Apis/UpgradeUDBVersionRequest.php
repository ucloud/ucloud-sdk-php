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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class UpgradeUDBVersionRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpgradeUDBVersion"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("DBId");
        $this->markRequired("DBSubVersion");
        $this->markRequired("SwitchType");
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
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
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
     * DBId: db实例资源id
     *
     * @return string|null
     */
    public function getDBId()
    {
        return $this->get("DBId");
    }

    /**
     * DBId: db实例资源id
     *
     * @param string $dbId
     */
    public function setDBId($dbId)
    {
        $this->set("DBId", $dbId);
    }

    /**
     * DBSubVersion: db需要升级的小版本
     *
     * @return string|null
     */
    public function getDBSubVersion()
    {
        return $this->get("DBSubVersion");
    }

    /**
     * DBSubVersion: db需要升级的小版本
     *
     * @param string $dbSubVersion
     */
    public function setDBSubVersion($dbSubVersion)
    {
        $this->set("DBSubVersion", $dbSubVersion);
    }

    /**
     * SwitchType: 切换类型，可选值为"immediately"和"customize"，分别代表立即切换和自定义切换时间，自定义切换时间需要填写SwitchStartTime和SwitchEndTime
     *
     * @return string|null
     */
    public function getSwitchType()
    {
        return $this->get("SwitchType");
    }

    /**
     * SwitchType: 切换类型，可选值为"immediately"和"customize"，分别代表立即切换和自定义切换时间，自定义切换时间需要填写SwitchStartTime和SwitchEndTime
     *
     * @param string $switchType
     */
    public function setSwitchType($switchType)
    {
        $this->set("SwitchType", $switchType);
    }

    /**
     * SwitchStartTime: 该值为一个unix时间戳，代表开始切换实例的时间
     *
     * @return integer|null
     */
    public function getSwitchStartTime()
    {
        return $this->get("SwitchStartTime");
    }

    /**
     * SwitchStartTime: 该值为一个unix时间戳，代表开始切换实例的时间
     *
     * @param int $switchStartTime
     */
    public function setSwitchStartTime($switchStartTime)
    {
        $this->set("SwitchStartTime", $switchStartTime);
    }

    /**
     * SwitchEndTime: 该值为一个unix时间戳，代表开始预期切换实例结束的时间
     *
     * @return integer|null
     */
    public function getSwitchEndTime()
    {
        return $this->get("SwitchEndTime");
    }

    /**
     * SwitchEndTime: 该值为一个unix时间戳，代表开始预期切换实例结束的时间
     *
     * @param int $switchEndTime
     */
    public function setSwitchEndTime($switchEndTime)
    {
        $this->set("SwitchEndTime", $switchEndTime);
    }
}
