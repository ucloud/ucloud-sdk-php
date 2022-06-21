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
namespace UCloud\UAccount\Apis;

use UCloud\Core\Request\Request;

class AddMemberToProjectRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AddMemberToProject"]);
        $this->markRequired("MemberEmail");
        $this->markRequired("CharacterId");
    }

    

    /**
     * ProjectId: 项目ID，请参考[GetProjectList接口](../summary/get_project_list.html)的描述。不填写为创建时间最早的项目。 
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID，请参考[GetProjectList接口](../summary/get_project_list.html)的描述。不填写为创建时间最早的项目。 
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * MemberEmail: 被加入成员Email
     *
     * @return string|null
     */
    public function getMemberEmail()
    {
        return $this->get("MemberEmail");
    }

    /**
     * MemberEmail: 被加入成员Email
     *
     * @param string $memberEmail
     */
    public function setMemberEmail($memberEmail)
    {
        $this->set("MemberEmail", $memberEmail);
    }

    /**
     * CharacterId: 被加入成员归属角色ID
     *
     * @return string|null
     */
    public function getCharacterId()
    {
        return $this->get("CharacterId");
    }

    /**
     * CharacterId: 被加入成员归属角色ID
     *
     * @param string $characterId
     */
    public function setCharacterId($characterId)
    {
        $this->set("CharacterId", $characterId);
    }


}
