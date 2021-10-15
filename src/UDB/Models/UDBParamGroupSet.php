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
namespace UCloud\UDB\Models;

use UCloud\Core\Response\Response;

class UDBParamGroupSet extends Response
{
    

    /**
     * GroupId: 参数组id
     *
     * @return integer|null
     */
    public function getGroupId()
    {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 参数组id
     *
     * @param int $groupId
     */
    public function setGroupId($groupId)
    {
        $this->set("GroupId", $groupId);
    }

    /**
     * GroupName: 参数组名称
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->get("GroupName");
    }

    /**
     * GroupName: 参数组名称
     *
     * @param string $groupName
     */
    public function setGroupName($groupName)
    {
        $this->set("GroupName", $groupName);
    }

    /**
     * DBTypeId: DB类型id，mysql/mongodb按版本细分各有一个id 目前id的取值范围为[1,7],数值对应的版本如下 1：mysql-5.5，2：mysql-5.1，3：percona-5.5 4：mongodb-2.4，5：mongodb-2.6，6：mysql-5.6 7：percona-5.6
     *
     * @return string|null
     */
    public function getDBTypeId()
    {
        return $this->get("DBTypeId");
    }

    /**
     * DBTypeId: DB类型id，mysql/mongodb按版本细分各有一个id 目前id的取值范围为[1,7],数值对应的版本如下 1：mysql-5.5，2：mysql-5.1，3：percona-5.5 4：mongodb-2.4，5：mongodb-2.6，6：mysql-5.6 7：percona-5.6
     *
     * @param string $dbTypeId
     */
    public function setDBTypeId($dbTypeId)
    {
        $this->set("DBTypeId", $dbTypeId);
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
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }

    /**
     * Modifiable: 参数组是否可修改
     *
     * @return boolean|null
     */
    public function getModifiable()
    {
        return $this->get("Modifiable");
    }

    /**
     * Modifiable: 参数组是否可修改
     *
     * @param boolean $modifiable
     */
    public function setModifiable($modifiable)
    {
        $this->set("Modifiable", $modifiable);
    }

    /**
     * ParamMember: 参数的键值对表 UDBParamMemberSet
     *
     * @return UDBParamMemberSet[]|null
     */
    public function getParamMember()
    {
        $items = $this->get("ParamMember");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UDBParamMemberSet($item));
        }
        return $result;
    }

    /**
     * ParamMember: 参数的键值对表 UDBParamMemberSet
     *
     * @param UDBParamMemberSet[] $paramMember
     */
    public function setParamMember(array $paramMember)
    {
        $result = [];
        foreach ($paramMember as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
