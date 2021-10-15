<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UMem\Apis;

use UCloud\Core\Request\Request;

class CheckURedisAllowanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CheckURedisAllowance"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Size");
        $this->markRequired("Count");
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
     * Size: 创建实例的容量大小, 单位:GB 目前仅支持1/2/4/8/16/32六种规格；扩缩容时，表示实例的目标资源大小
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 创建实例的容量大小, 单位:GB 目前仅支持1/2/4/8/16/32六种规格；扩缩容时，表示实例的目标资源大小
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * Count: 创建实例的数量，[1-10]
     *
     * @return integer|null
     */
    public function getCount()
    {
        return $this->get("Count");
    }

    /**
     * Count: 创建实例的数量，[1-10]
     *
     * @param int $count
     */
    public function setCount($count)
    {
        $this->set("Count", $count);
    }

    /**
     * Protocol:
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->get("Protocol");
    }

    /**
     * Protocol:
     *
     * @param string $protocol
     */
    public function setProtocol($protocol)
    {
        $this->set("Protocol", $protocol);
    }

    /**
     * RegionFlag: 是否是跨机房URedis(默认false)
     *
     * @return boolean|null
     */
    public function getRegionFlag()
    {
        return $this->get("RegionFlag");
    }

    /**
     * RegionFlag: 是否是跨机房URedis(默认false)
     *
     * @param boolean $regionFlag
     */
    public function setRegionFlag($regionFlag)
    {
        $this->set("RegionFlag", $regionFlag);
    }

    /**
     * GroupId: 资源ID，扩容实例资源时的必传参数
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 资源ID，扩容实例资源时的必传参数
     *
     * @param string $groupId
     */
    public function setGroupId($groupId)
    {
        $this->set("GroupId", $groupId);
    }
}
