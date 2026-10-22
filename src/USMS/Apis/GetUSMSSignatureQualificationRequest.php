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

class GetUSMSSignatureQualificationRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUSMSSignatureQualification"]);
        $this->markRequired("ProjectId");
        $this->markRequired("Page");
        $this->markRequired("NumPerPage");
        $this->markRequired("OrderBy");
        $this->markRequired("OrderType");
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
     * Page: 页索引
     *
     * @return integer|null
     */
    public function getPage()
    {
        return $this->get("Page");
    }

    /**
     * Page: 页索引
     *
     * @param int $page
     */
    public function setPage($page)
    {
        $this->set("Page", $page);
    }

    /**
     * NumPerPage: 每页个数
     *
     * @return integer|null
     */
    public function getNumPerPage()
    {
        return $this->get("NumPerPage");
    }

    /**
     * NumPerPage: 每页个数
     *
     * @param int $numPerPage
     */
    public function setNumPerPage($numPerPage)
    {
        $this->set("NumPerPage", $numPerPage);
    }

    /**
     * OrderBy: 排序字段，QualificationId/CreateTime
     *
     * @return string|null
     */
    public function getOrderBy()
    {
        return $this->get("OrderBy");
    }

    /**
     * OrderBy: 排序字段，QualificationId/CreateTime
     *
     * @param string $orderBy
     */
    public function setOrderBy($orderBy)
    {
        $this->set("OrderBy", $orderBy);
    }

    /**
     * OrderType: 排序类型: desc、asc
     *
     * @return string|null
     */
    public function getOrderType()
    {
        return $this->get("OrderType");
    }

    /**
     * OrderType: 排序类型: desc、asc
     *
     * @param string $orderType
     */
    public function setOrderType($orderType)
    {
        $this->set("OrderType", $orderType);
    }

    /**
     * QualificationAttr: 签名资质属性: 0-自用，1-他用
     *
     * @return integer|null
     */
    public function getQualificationAttr()
    {
        return $this->get("QualificationAttr");
    }

    /**
     * QualificationAttr: 签名资质属性: 0-自用，1-他用
     *
     * @param int $qualificationAttr
     */
    public function setQualificationAttr($qualificationAttr)
    {
        $this->set("QualificationAttr", $qualificationAttr);
    }

    /**
     * Status: 签名资质状态: 0-草稿 1-审核中 2-审核通过 3-审核未通过 4-人工禁用
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 签名资质状态: 0-草稿 1-审核中 2-审核通过 3-审核未通过 4-人工禁用
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * InAccountIds: 项目ID列表
     *
     * @return string[]|null
     */
    public function getInAccountIds()
    {
        return $this->get("InAccountIds");
    }

    /**
     * InAccountIds: 项目ID列表
     *
     * @param string[] $inAccountIds
     */
    public function setInAccountIds(array $inAccountIds)
    {
        $this->set("InAccountIds", $inAccountIds);
    }
}
