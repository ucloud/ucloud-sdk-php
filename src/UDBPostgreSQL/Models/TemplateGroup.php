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
namespace UCloud\UDBPostgreSQL\Models;

use UCloud\Core\Response\Response;

class TemplateGroup extends Response
{
    

    /**
     * GroupID: 参数模板ID
     *
     * @return integer|null
     */
    public function getGroupID()
    {
        return $this->get("GroupID");
    }

    /**
     * GroupID: 参数模板ID
     *
     * @param int $groupID
     */
    public function setGroupID($groupID)
    {
        $this->set("GroupID", $groupID);
    }

    /**
     * GroupName: 参数模板名称
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->get("GroupName");
    }

    /**
     * GroupName: 参数模板名称
     *
     * @param string $groupName
     */
    public function setGroupName($groupName)
    {
        $this->set("GroupName", $groupName);
    }

    /**
     * DBVersion: 应用的DB版本
     *
     * @return string|null
     */
    public function getDBVersion()
    {
        return $this->get("DBVersion");
    }

    /**
     * DBVersion: 应用的DB版本
     *
     * @param string $dbVersion
     */
    public function setDBVersion($dbVersion)
    {
        $this->set("DBVersion", $dbVersion);
    }

    /**
     * Description: 描述信息
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 描述信息
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }

    /**
     * Modifiable: 是否可以修改
     *
     * @return boolean|null
     */
    public function getModifiable()
    {
        return $this->get("Modifiable");
    }

    /**
     * Modifiable: 是否可以修改
     *
     * @param boolean $modifiable
     */
    public function setModifiable($modifiable)
    {
        $this->set("Modifiable", $modifiable);
    }

    /**
     * ParamGroupTypeName: 模板组类型名称
     *
     * @return string|null
     */
    public function getParamGroupTypeName()
    {
        return $this->get("ParamGroupTypeName");
    }

    /**
     * ParamGroupTypeName: 模板组类型名称
     *
     * @param string $paramGroupTypeName
     */
    public function setParamGroupTypeName($paramGroupTypeName)
    {
        $this->set("ParamGroupTypeName", $paramGroupTypeName);
    }
}
