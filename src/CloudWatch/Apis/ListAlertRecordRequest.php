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
namespace UCloud\CloudWatch\Apis;

use UCloud\Core\Request\Request;
use UCloud\CloudWatch\Params\ListAlertRecordParamFilter;

class ListAlertRecordRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ListAlertRecord"]);
        $this->markRequired("ProjectId");
        $this->markRequired("StartAt");
        $this->markRequired("EndAt");
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
     * StartAt: 开始时间，查询告警记录开始时间，不支持查询距当前时间一年前的数据)，值为10位数时间戳
     *
     * @return integer|null
     */
    public function getStartAt()
    {
        return $this->get("StartAt");
    }

    /**
     * StartAt: 开始时间，查询告警记录开始时间，不支持查询距当前时间一年前的数据)，值为10位数时间戳
     *
     * @param int $startAt
     */
    public function setStartAt($startAt)
    {
        $this->set("StartAt", $startAt);
    }

    /**
     * EndAt: 结束时间，查询告警记录结束时间(查询开始时间和结束时间不能超过一个月)，值为10位数时间戳
     *
     * @return integer|null
     */
    public function getEndAt()
    {
        return $this->get("EndAt");
    }

    /**
     * EndAt: 结束时间，查询告警记录结束时间(查询开始时间和结束时间不能超过一个月)，值为10位数时间戳
     *
     * @param int $endAt
     */
    public function setEndAt($endAt)
    {
        $this->set("EndAt", $endAt);
    }

    /**
     * Fuzzy: 模糊查询(支持资源id模糊搜索)
     *
     * @return string|null
     */
    public function getFuzzy()
    {
        return $this->get("Fuzzy");
    }

    /**
     * Fuzzy: 模糊查询(支持资源id模糊搜索)
     *
     * @param string $fuzzy
     */
    public function setFuzzy($fuzzy)
    {
        $this->set("Fuzzy", $fuzzy);
    }

    /**
     * Filter:
     *
     * @return ListAlertRecordParamFilter|null
     */
    public function getFilter()
    {
        return new ListAlertRecordParamFilter($this->get("Filter"));
    }

    /**
     * Filter:
     *
     * @param ListAlertRecordParamFilter $filter
     */
    public function setFilter(array $filter)
    {
        $this->set("Filter", $filter->getAll());
    }

    /**
     * OrderType: 排序(默认根据告警发生时间倒序)，枚举值：asc-升序，desc-降序
     *
     * @return string|null
     */
    public function getOrderType()
    {
        return $this->get("OrderType");
    }

    /**
     * OrderType: 排序(默认根据告警发生时间倒序)，枚举值：asc-升序，desc-降序
     *
     * @param string $orderType
     */
    public function setOrderType($orderType)
    {
        $this->set("OrderType", $orderType);
    }

    /**
     * Limit: 查询返回数量，默认值300，最大值：300。
     *
     * @return integer|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 查询返回数量，默认值300，最大值：300。
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * Offset: 数据偏移量 (默认0)
     *
     * @return integer|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 数据偏移量 (默认0)
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }
}
