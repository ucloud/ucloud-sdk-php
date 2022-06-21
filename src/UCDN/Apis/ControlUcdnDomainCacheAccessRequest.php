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
namespace UCloud\UCDN\Apis;

use UCloud\Core\Request\Request;

class ControlUcdnDomainCacheAccessRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ControlUcdnDomainCacheAccess"]);
        $this->markRequired("UrlList");
        $this->markRequired("Type");
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
     * UrlList: 待封禁的Url，一次封禁多个Url时最多一次30条，只能对表示文件的Url进行操作
     *
     * @return string[]|null
     */
    public function getUrlList()
    {
        return $this->get("UrlList");
    }

    /**
     * UrlList: 待封禁的Url，一次封禁多个Url时最多一次30条，只能对表示文件的Url进行操作
     *
     * @param string[] $urlList
     */
    public function setUrlList(array $urlList)
    {
        $this->set("UrlList", $urlList);
    }

    /**
     * Type: forbid=封禁   unforbid=解封  其他值非法
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: forbid=封禁   unforbid=解封  其他值非法
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }


}
