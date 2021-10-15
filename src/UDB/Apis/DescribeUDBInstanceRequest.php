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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class DescribeUDBInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUDBInstance"]);
        $this->markRequired("Region");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区，不填时默认全部可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区，不填时默认全部可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * ClassType: DB种类，如果是列表操作，则需要指定,不区分大小写，其取值如下：mysql: SQL；mongo: NOSQL；postgresql: postgresql
     *
     * @return string|null
     */
    public function getClassType()
    {
        return $this->get("ClassType");
    }

    /**
     * ClassType: DB种类，如果是列表操作，则需要指定,不区分大小写，其取值如下：mysql: SQL；mongo: NOSQL；postgresql: postgresql
     *
     * @param string $classType
     */
    public function setClassType($classType)
    {
        $this->set("ClassType", $classType);
    }

    /**
     * Offset: 分页显示起始偏移位置，列表操作时必填
     *
     * @return integer|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 分页显示起始偏移位置，列表操作时必填
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 分页显示数量，列表操作时必填
     *
     * @return integer|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 分页显示数量，列表操作时必填
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * DBId: DB实例id，如果指定则获取单个db实例的描述，否则为列表操作。 指定DBId时无需填写ClassType、Offset、Limit
     *
     * @return string|null
     */
    public function getDBId()
    {
        return $this->get("DBId");
    }

    /**
     * DBId: DB实例id，如果指定则获取单个db实例的描述，否则为列表操作。 指定DBId时无需填写ClassType、Offset、Limit
     *
     * @param string $dbId
     */
    public function setDBId($dbId)
    {
        $this->set("DBId", $dbId);
    }

    /**
     * IsInUDBC: 是否查看专区里面DB
     *
     * @return boolean|null
     */
    public function getIsInUDBC()
    {
        return $this->get("IsInUDBC");
    }

    /**
     * IsInUDBC: 是否查看专区里面DB
     *
     * @param boolean $isInUDBC
     */
    public function setIsInUDBC($isInUDBC)
    {
        $this->set("IsInUDBC", $isInUDBC);
    }

    /**
     * UDBCId: IsInUDBC为True,UDBCId为空，说明查看整个可用区的专区的db，如果UDBId不为空则只查看此专区下面的db
     *
     * @return string|null
     */
    public function getUDBCId()
    {
        return $this->get("UDBCId");
    }

    /**
     * UDBCId: IsInUDBC为True,UDBCId为空，说明查看整个可用区的专区的db，如果UDBId不为空则只查看此专区下面的db
     *
     * @param string $udbcId
     */
    public function setUDBCId($udbcId)
    {
        $this->set("UDBCId", $udbcId);
    }

    /**
     * IncludeSlaves: 当只获取这个特定DBId的信息时，如果有该选项，那么把这个DBId实例的所有从库信息一起拉取并返回
     *
     * @return boolean|null
     */
    public function getIncludeSlaves()
    {
        return $this->get("IncludeSlaves");
    }

    /**
     * IncludeSlaves: 当只获取这个特定DBId的信息时，如果有该选项，那么把这个DBId实例的所有从库信息一起拉取并返回
     *
     * @param boolean $includeSlaves
     */
    public function setIncludeSlaves($includeSlaves)
    {
        $this->set("IncludeSlaves", $includeSlaves);
    }
}
