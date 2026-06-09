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
namespace UCloud\UAIModelverse\Apis;

use UCloud\Core\Request\Request;

class ListUFSquareModelRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ListUFSquareModel"]);
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
     * ModelType: 模型类型
     *
     * @return string|null
     */
    public function getModelType()
    {
        return $this->get("ModelType");
    }

    /**
     * ModelType: 模型类型
     *
     * @param string $modelType
     */
    public function setModelType($modelType)
    {
        $this->set("ModelType", $modelType);
    }

    /**
     * Keyword: 关键字
     *
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->get("Keyword");
    }

    /**
     * Keyword: 关键字
     *
     * @param string $keyword
     */
    public function setKeyword($keyword)
    {
        $this->set("Keyword", $keyword);
    }

    /**
     * Offset: 偏移量
     *
     * @return integer|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 偏移量
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 每页数量
     *
     * @return integer|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 每页数量
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * OrderBy: 排序字段
     *
     * @return string|null
     */
    public function getOrderBy()
    {
        return $this->get("OrderBy");
    }

    /**
     * OrderBy: 排序字段
     *
     * @param string $orderBy
     */
    public function setOrderBy($orderBy)
    {
        $this->set("OrderBy", $orderBy);
    }

    /**
     * Order: 排序顺序，默认倒序
     *
     * @return string|null
     */
    public function getOrder()
    {
        return $this->get("Order");
    }

    /**
     * Order: 排序顺序，默认倒序
     *
     * @param string $order
     */
    public function setOrder($order)
    {
        $this->set("Order", $order);
    }

    /**
     * MaxModelLen: 上下文长度，数组类型，可选值 [0,4096,16384,32768,131072,256000,262144,1048576]
     *
     * @return int[]|null
     */
    public function getMaxModelLen()
    {
        return $this->get("MaxModelLen");
    }

    /**
     * MaxModelLen: 上下文长度，数组类型，可选值 [0,4096,16384,32768,131072,256000,262144,1048576]
     *
     * @param int[] $maxModelLen
     */
    public function setMaxModelLen(array $maxModelLen)
    {
        $this->set("MaxModelLen", $maxModelLen);
    }

    /**
     * Language: 语言，数组类型，可选值 ["chinese", "english"]
     *
     * @return string[]|null
     */
    public function getLanguage()
    {
        return $this->get("Language");
    }

    /**
     * Language: 语言，数组类型，可选值 ["chinese", "english"]
     *
     * @param string[] $language
     */
    public function setLanguage(array $language)
    {
        $this->set("Language", $language);
    }
}
