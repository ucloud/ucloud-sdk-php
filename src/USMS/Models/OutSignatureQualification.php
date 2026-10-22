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
namespace UCloud\USMS\Models;

use UCloud\Core\Response\Response;

class OutSignatureQualification extends Response
{
    

    /**
     * QualificationId: 资质Id
     *
     * @return string|null
     */
    public function getQualificationId()
    {
        return $this->get("QualificationId");
    }

    /**
     * QualificationId: 资质Id
     *
     * @param string $qualificationId
     */
    public function setQualificationId($qualificationId)
    {
        $this->set("QualificationId", $qualificationId);
    }

    /**
     * AccountId: 项目Id
     *
     * @return integer|null
     */
    public function getAccountId()
    {
        return $this->get("AccountId");
    }

    /**
     * AccountId: 项目Id
     *
     * @param int $accountId
     */
    public function setAccountId($accountId)
    {
        $this->set("AccountId", $accountId);
    }

    /**
     * Name: 资质名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 资质名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Attr: 资质属性: 0-自用 1-他用
     *
     * @return integer|null
     */
    public function getAttr()
    {
        return $this->get("Attr");
    }

    /**
     * Attr: 资质属性: 0-自用 1-他用
     *
     * @param int $attr
     */
    public function setAttr($attr)
    {
        $this->set("Attr", $attr);
    }

    /**
     * CompanyName: 公司名称
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->get("CompanyName");
    }

    /**
     * CompanyName: 公司名称
     *
     * @param string $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->set("CompanyName", $companyName);
    }

    /**
     * ManagerName: 负责人姓名
     *
     * @return string|null
     */
    public function getManagerName()
    {
        return $this->get("ManagerName");
    }

    /**
     * ManagerName: 负责人姓名
     *
     * @param string $managerName
     */
    public function setManagerName($managerName)
    {
        $this->set("ManagerName", $managerName);
    }

    /**
     * HandlerName: 经办人姓名
     *
     * @return string|null
     */
    public function getHandlerName()
    {
        return $this->get("HandlerName");
    }

    /**
     * HandlerName: 经办人姓名
     *
     * @param string $handlerName
     */
    public function setHandlerName($handlerName)
    {
        $this->set("HandlerName", $handlerName);
    }

    /**
     * Status: 状态:0-草稿 1-审核中 2-审核通过 3-审核未通过 4-人工禁用
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 状态:0-草稿 1-审核中 2-审核通过 3-审核未通过 4-人工禁用
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * ErrCode: 审核未通过错误码
     *
     * @return integer|null
     */
    public function getErrCode()
    {
        return $this->get("ErrCode");
    }

    /**
     * ErrCode: 审核未通过错误码
     *
     * @param int $errCode
     */
    public function setErrCode($errCode)
    {
        $this->set("ErrCode", $errCode);
    }

    /**
     * ErrDesc: 审核未通过错误原因
     *
     * @return string|null
     */
    public function getErrDesc()
    {
        return $this->get("ErrDesc");
    }

    /**
     * ErrDesc: 审核未通过错误原因
     *
     * @param string $errDesc
     */
    public function setErrDesc($errDesc)
    {
        $this->set("ErrDesc", $errDesc);
    }

    /**
     * CreateTime: 创建时间戳
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ModifyTime: 修改时间戳
     *
     * @return integer|null
     */
    public function getModifyTime()
    {
        return $this->get("ModifyTime");
    }

    /**
     * ModifyTime: 修改时间戳
     *
     * @param int $modifyTime
     */
    public function setModifyTime($modifyTime)
    {
        $this->set("ModifyTime", $modifyTime);
    }

    /**
     * ReviewStartTime: 审核开始时间戳
     *
     * @return integer|null
     */
    public function getReviewStartTime()
    {
        return $this->get("ReviewStartTime");
    }

    /**
     * ReviewStartTime: 审核开始时间戳
     *
     * @param int $reviewStartTime
     */
    public function setReviewStartTime($reviewStartTime)
    {
        $this->set("ReviewStartTime", $reviewStartTime);
    }

    /**
     * ReviewEndTime: 审核完成时间戳
     *
     * @return integer|null
     */
    public function getReviewEndTime()
    {
        return $this->get("ReviewEndTime");
    }

    /**
     * ReviewEndTime: 审核完成时间戳
     *
     * @param int $reviewEndTime
     */
    public function setReviewEndTime($reviewEndTime)
    {
        $this->set("ReviewEndTime", $reviewEndTime);
    }
}
