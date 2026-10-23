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

class ListUMInferAPIKeyV2Request extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ListUMInferAPIKeyV2"]);
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
     * KeyId: 按 API Key 资源 ID 精确过滤；为空不限制
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: 按 API Key 资源 ID 精确过滤；为空不限制
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * Offset: 从 0 开始的页号，默认 0；不是记录偏移量
     *
     * @return string|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 从 0 开始的页号，默认 0；不是记录偏移量
     *
     * @param string $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 每页条数；0 表示不限制条数
     *
     * @return integer|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 每页条数；0 表示不限制条数
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * AllStatus: 默认 false，排除已删除记录；true 包含已删除记录
     *
     * @return integer|null
     */
    public function getAllStatus()
    {
        return $this->get("AllStatus");
    }

    /**
     * AllStatus: 默认 false，排除已删除记录；true 包含已删除记录
     *
     * @param int $allStatus
     */
    public function setAllStatus($allStatus)
    {
        $this->set("AllStatus", $allStatus);
    }

    /**
     * SandBoxDisabled: 不传不限制；0 启用，1 禁用
     *
     * @return string|null
     */
    public function getSandBoxDisabled()
    {
        return $this->get("SandBoxDisabled");
    }

    /**
     * SandBoxDisabled: 不传不限制；0 启用，1 禁用
     *
     * @param string $sandBoxDisabled
     */
    public function setSandBoxDisabled($sandBoxDisabled)
    {
        $this->set("SandBoxDisabled", $sandBoxDisabled);
    }

    /**
     * SortByCreateTimeAsc: true 按创建时间升序，false 降序
     *
     * @return boolean|null
     */
    public function getSortByCreateTimeAsc()
    {
        return $this->get("SortByCreateTimeAsc");
    }

    /**
     * SortByCreateTimeAsc: true 按创建时间升序，false 降序
     *
     * @param boolean $sortByCreateTimeAsc
     */
    public function setSortByCreateTimeAsc($sortByCreateTimeAsc)
    {
        $this->set("SortByCreateTimeAsc", $sortByCreateTimeAsc);
    }

    /**
     * SortByUpdateTimeAsc: true 按更新时间升序，false 降序；优先于创建时间排序
     *
     * @return boolean|null
     */
    public function getSortByUpdateTimeAsc()
    {
        return $this->get("SortByUpdateTimeAsc");
    }

    /**
     * SortByUpdateTimeAsc: true 按更新时间升序，false 降序；优先于创建时间排序
     *
     * @param boolean $sortByUpdateTimeAsc
     */
    public function setSortByUpdateTimeAsc($sortByUpdateTimeAsc)
    {
        $this->set("SortByUpdateTimeAsc", $sortByUpdateTimeAsc);
    }
}
