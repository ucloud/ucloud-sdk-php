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

class GetUcdnDomainInfoListRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUcdnDomainInfoList"]);
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
     * PageSize: 分页的大小，不填默认每页20个
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->get("PageSize");
    }

    /**
     * PageSize: 分页的大小，不填默认每页20个
     *
     * @param int $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->set("PageSize", $pageSize);
    }

    /**
     * PageIndex: 返回第几页，不填默认是第1页
     *
     * @return int|null
     */
    public function getPageIndex()
    {
        return $this->get("PageIndex");
    }

    /**
     * PageIndex: 返回第几页，不填默认是第1页
     *
     * @param int $pageIndex
     */
    public function setPageIndex($pageIndex)
    {
        $this->set("PageIndex", $pageIndex);
    }


}
