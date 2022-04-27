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

namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class DescribeUDBParamGroupRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUDBParamGroup"]);
        $this->markRequired("Region");
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
    public function setRegion(string $region)
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
    public function setZone(string $zone)
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
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * Offset: 分页显示的起始偏移，列表操作则指定
     *
     * @return integer|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 分页显示的起始偏移，列表操作则指定
     *
     * @param int $offset
     */
    public function setOffset(int $offset)
    {
        $this->set("Offset", $offset);
    }
    /**
     * Limit: 分页显示的条目数，列表操作则指定
     *
     * @return integer|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 分页显示的条目数，列表操作则指定
     *
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->set("Limit", $limit);
    }
    /**
     * GroupId: 参数组id，如果指定则获取描述，否则是列表操作，需要 指定Offset/Limit
     *
     * @return integer|null
     */
    public function getGroupId()
    {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 参数组id，如果指定则获取描述，否则是列表操作，需要 指定Offset/Limit
     *
     * @param int $groupId
     */
    public function setGroupId(int $groupId)
    {
        $this->set("GroupId", $groupId);
    }
    /**
     * IsInUDBC: 是否选取专区中配置
     *
     * @return boolean|null
     */
    public function getIsInUDBC()
    {
        return $this->get("IsInUDBC");
    }

    /**
     * IsInUDBC: 是否选取专区中配置
     *
     * @param boolean $isInUDBC
     */
    public function setIsInUDBC(bool $isInUDBC)
    {
        $this->set("IsInUDBC", $isInUDBC);
    }
    /**
     * RegionFlag: 当请求没有填写Zone时，如果指定为true，表示只拉取跨可用区的相关配置文件，否则，拉取所有机房的配置文件（包括每个单可用区和跨可用区）
     *
     * @return boolean|null
     */
    public function getRegionFlag()
    {
        return $this->get("RegionFlag");
    }

    /**
     * RegionFlag: 当请求没有填写Zone时，如果指定为true，表示只拉取跨可用区的相关配置文件，否则，拉取所有机房的配置文件（包括每个单可用区和跨可用区）
     *
     * @param boolean $regionFlag
     */
    public function setRegionFlag(bool $regionFlag)
    {
        $this->set("RegionFlag", $regionFlag);
    }
    /**
     * ClassType: 如果未指定GroupId，则可选是否选取特定DB类型的配置(sql, nosql, postgresql, sqlserver)
     *
     * @return string|null
     */
    public function getClassType()
    {
        return $this->get("ClassType");
    }

    /**
     * ClassType: 如果未指定GroupId，则可选是否选取特定DB类型的配置(sql, nosql, postgresql, sqlserver)
     *
     * @param string $classType
     */
    public function setClassType(string $classType)
    {
        $this->set("ClassType", $classType);
    }
}
