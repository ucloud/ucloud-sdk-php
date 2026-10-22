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
namespace UCloud\USMS\Apis;

use UCloud\Core\Request\Request;

class GetUSMSTemplateSendStatisticsRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUSMSTemplateSendStatistics"]);
        $this->markRequired("ProjectId");
        $this->markRequired("Page");
        $this->markRequired("NumPerPage");
        $this->markRequired("OrderBy");
        $this->markRequired("OrderType");
        $this->markRequired("StartDate");
        $this->markRequired("EndDate");
        $this->markRequired("Domestic");
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
     * Page: 页编号，从0开始
     *
     * @return integer|null
     */
    public function getPage()
    {
        return $this->get("Page");
    }

    /**
     * Page: 页编号，从0开始
     *
     * @param int $page
     */
    public function setPage($page)
    {
        $this->set("Page", $page);
    }

    /**
     * NumPerPage: 每页记录个数
     *
     * @return integer|null
     */
    public function getNumPerPage()
    {
        return $this->get("NumPerPage");
    }

    /**
     * NumPerPage: 每页记录个数
     *
     * @param int $numPerPage
     */
    public function setNumPerPage($numPerPage)
    {
        $this->set("NumPerPage", $numPerPage);
    }

    /**
     * OrderBy: 排序字段，如BrevityCode表示按照BrevityCode排列，配合OrderType使用。目前支持SendDate、BrevityCode
     *
     * @return string|null
     */
    public function getOrderBy()
    {
        return $this->get("OrderBy");
    }

    /**
     * OrderBy: 排序字段，如BrevityCode表示按照BrevityCode排列，配合OrderType使用。目前支持SendDate、BrevityCode
     *
     * @param string $orderBy
     */
    public function setOrderBy($orderBy)
    {
        $this->set("OrderBy", $orderBy);
    }

    /**
     * OrderType: 排序方式，asc-正序 desc-倒序
     *
     * @return string|null
     */
    public function getOrderType()
    {
        return $this->get("OrderType");
    }

    /**
     * OrderType: 排序方式，asc-正序 desc-倒序
     *
     * @param string $orderType
     */
    public function setOrderType($orderType)
    {
        $this->set("OrderType", $orderType);
    }

    /**
     * StartDate: 开始日期，格式为YYYY-MM-DD
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->get("StartDate");
    }

    /**
     * StartDate: 开始日期，格式为YYYY-MM-DD
     *
     * @param string $startDate
     */
    public function setStartDate($startDate)
    {
        $this->set("StartDate", $startDate);
    }

    /**
     * EndDate: 结束日期，格式为YYYY-MM-DD
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->get("EndDate");
    }

    /**
     * EndDate: 结束日期，格式为YYYY-MM-DD
     *
     * @param string $endDate
     */
    public function setEndDate($endDate)
    {
        $this->set("EndDate", $endDate);
    }

    /**
     * Domestic: 国内标记，0-国际短信 1-国内短信
     *
     * @return integer|null
     */
    public function getDomestic()
    {
        return $this->get("Domestic");
    }

    /**
     * Domestic: 国内标记，0-国际短信 1-国内短信
     *
     * @param int $domestic
     */
    public function setDomestic($domestic)
    {
        $this->set("Domestic", $domestic);
    }

    /**
     * BrevityCode: 国际简码，如CN表示中国，当需要查询多个国家时，使用-分割，如CN-ID。
     *
     * @return string|null
     */
    public function getBrevityCode()
    {
        return $this->get("BrevityCode");
    }

    /**
     * BrevityCode: 国际简码，如CN表示中国，当需要查询多个国家时，使用-分割，如CN-ID。
     *
     * @param string $brevityCode
     */
    public function setBrevityCode($brevityCode)
    {
        $this->set("BrevityCode", $brevityCode);
    }

    /**
     * TemplateId: 短信模板ID
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: 短信模板ID
     *
     * @param string $templateId
     */
    public function setTemplateId($templateId)
    {
        $this->set("TemplateId", $templateId);
    }
}
