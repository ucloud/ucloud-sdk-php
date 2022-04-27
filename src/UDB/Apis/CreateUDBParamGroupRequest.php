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

class CreateUDBParamGroupRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUDBParamGroup"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("GroupName");
        $this->markRequired("Description");
        $this->markRequired("SrcGroupId");
        $this->markRequired("DBTypeId");
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
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }
    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
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
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * GroupName: 新配置参数组名称
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->get("GroupName");
    }

    /**
     * GroupName: 新配置参数组名称
     *
     * @param string $groupName
     */
    public function setGroupName(string $groupName)
    {
        $this->set("GroupName", $groupName);
    }
    /**
     * Description: 参数组描述
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 参数组描述
     *
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->set("Description", $description);
    }
    /**
     * SrcGroupId: 源参数组id
     *
     * @return integer|null
     */
    public function getSrcGroupId()
    {
        return $this->get("SrcGroupId");
    }

    /**
     * SrcGroupId: 源参数组id
     *
     * @param int $srcGroupId
     */
    public function setSrcGroupId(int $srcGroupId)
    {
        $this->set("SrcGroupId", $srcGroupId);
    }
    /**
     * DBTypeId: DB类型id，mysql/mongodb/postgesql按版本细分 1：mysql-5.1，2：mysql-5.5，3：percona-5.5，4：mysql-5.6，5：percona-5.6，6：mysql-5.7，7：percona-5.7，8：mariadb-10.0，9：mongodb-2.4，10：mongodb-2.6，11：mongodb-3.0，12：mongodb-3.2,13：postgresql-9.4，14：postgresql-9.6
     *
     * @return string|null
     */
    public function getDBTypeId()
    {
        return $this->get("DBTypeId");
    }

    /**
     * DBTypeId: DB类型id，mysql/mongodb/postgesql按版本细分 1：mysql-5.1，2：mysql-5.5，3：percona-5.5，4：mysql-5.6，5：percona-5.6，6：mysql-5.7，7：percona-5.7，8：mariadb-10.0，9：mongodb-2.4，10：mongodb-2.6，11：mongodb-3.0，12：mongodb-3.2,13：postgresql-9.4，14：postgresql-9.6
     *
     * @param string $dbTypeId
     */
    public function setDBTypeId(string $dbTypeId)
    {
        $this->set("DBTypeId", $dbTypeId);
    }
    /**
     * RegionFlag: 是否是地域级别的配置文件，默认是false
     *
     * @return boolean|null
     */
    public function getRegionFlag()
    {
        return $this->get("RegionFlag");
    }

    /**
     * RegionFlag: 是否是地域级别的配置文件，默认是false
     *
     * @param boolean $regionFlag
     */
    public function setRegionFlag(bool $regionFlag)
    {
        $this->set("RegionFlag", $regionFlag);
    }
}
