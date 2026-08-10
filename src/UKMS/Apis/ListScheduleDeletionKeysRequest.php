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
namespace UCloud\UKMS\Apis;

use UCloud\Core\Request\Request;

class ListScheduleDeletionKeysRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ListScheduleDeletionKeys"]);
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
     * Offset: 输出列表起始位置，默认从0开始
     *
     * @return integer|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 输出列表起始位置，默认从0开始
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 输出列表数量，默认返回200个
     *
     * @return integer|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 输出列表数量，默认返回200个
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * OrderBy: 列表排序方式, 可选项: "-created_time", "created_time","plan_delete_time","-plan_delete_time";默认按-plan_delete_time 计划删除时间升序返回
     *
     * @return string|null
     */
    public function getOrderBy()
    {
        return $this->get("OrderBy");
    }

    /**
     * OrderBy: 列表排序方式, 可选项: "-created_time", "created_time","plan_delete_time","-plan_delete_time";默认按-plan_delete_time 计划删除时间升序返回
     *
     * @param string $orderBy
     */
    public function setOrderBy($orderBy)
    {
        $this->set("OrderBy", $orderBy);
    }

    /**
     * Alias: 按密钥 ID 或别名模糊过滤
     *
     * @return string|null
     */
    public function getAlias()
    {
        return $this->get("Alias");
    }

    /**
     * Alias: 按密钥 ID 或别名模糊过滤
     *
     * @param string $alias
     */
    public function setAlias($alias)
    {
        $this->set("Alias", $alias);
    }

    /**
     * ResourceId: UKMS 实例资源 ID
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: UKMS 实例资源 ID
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * Sort: 排序方向，默认 desc
     *
     * @return string|null
     */
    public function getSort()
    {
        return $this->get("Sort");
    }

    /**
     * Sort: 排序方向，默认 desc
     *
     * @param string $sort
     */
    public function setSort($sort)
    {
        $this->set("Sort", $sort);
    }
}
