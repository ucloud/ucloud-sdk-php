<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UCompShare\Apis;

use UCloud\Core\Request\Request;
use UCloud\UCompShare\Params\DescribeCommunityImagesParamSortCondition;

class DescribeCommunityImagesRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeCommunityImages"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
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
     * CompShareImageId: 镜像Id。支持指定镜像Id查询
     *
     * @return string|null
     */
    public function getCompShareImageId()
    {
        return $this->get("CompShareImageId");
    }

    /**
     * CompShareImageId: 镜像Id。支持指定镜像Id查询
     *
     * @param string $compShareImageId
     */
    public function setCompShareImageId($compShareImageId)
    {
        $this->set("CompShareImageId", $compShareImageId);
    }

    /**
     * Name: 镜像名称。模糊搜索
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 镜像名称。模糊搜索
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Author: 搜索指定作者发布的镜像
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->get("Author");
    }

    /**
     * Author: 搜索指定作者发布的镜像
     *
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->set("Author", $author);
    }

    /**
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @return integer|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 返回数据长度，默认为20，最大100
     *
     * @return string|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回数据长度，默认为20，最大100
     *
     * @param string $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * Tag: 按标签名称搜索，精确匹配
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 按标签名称搜索，精确匹配
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * SortCondition:
     *
     * @return DescribeCommunityImagesParamSortCondition|null
     */
    public function getSortCondition()
    {
        return new DescribeCommunityImagesParamSortCondition($this->get("SortCondition"));
    }

    /**
     * SortCondition:
     *
     * @param DescribeCommunityImagesParamSortCondition $sortCondition
     */
    public function setSortCondition(array $sortCondition)
    {
        $this->set("SortCondition", $sortCondition->getAll());
    }
}
