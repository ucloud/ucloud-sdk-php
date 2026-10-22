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

class AddUSMSSignatureQualificationRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AddUSMSSignatureQualification"]);
        $this->markRequired("ProjectId");
        $this->markRequired("Name");
        $this->markRequired("Attr");
        $this->markRequired("Status");
        $this->markRequired("HandlerPhone");
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
     * Attr: 资质属性，0-自用 1-他用
     *
     * @return integer|null
     */
    public function getAttr()
    {
        return $this->get("Attr");
    }

    /**
     * Attr: 资质属性，0-自用 1-他用
     *
     * @param int $attr
     */
    public function setAttr($attr)
    {
        $this->set("Attr", $attr);
    }

    /**
     * Status: 状态：0-草稿，1-提交审核
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 状态：0-草稿，1-提交审核
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * HandlerPhone: 经办人手机号
     *
     * @return string|null
     */
    public function getHandlerPhone()
    {
        return $this->get("HandlerPhone");
    }

    /**
     * HandlerPhone: 经办人手机号
     *
     * @param string $handlerPhone
     */
    public function setHandlerPhone($handlerPhone)
    {
        $this->set("HandlerPhone", $handlerPhone);
    }

    /**
     * CompanyName: 公司名称，长度限制100
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->get("CompanyName");
    }

    /**
     * CompanyName: 公司名称，长度限制100
     *
     * @param string $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->set("CompanyName", $companyName);
    }

    /**
     * CompanyCreditCode: 公司统一社会信用代码
     *
     * @return string|null
     */
    public function getCompanyCreditCode()
    {
        return $this->get("CompanyCreditCode");
    }

    /**
     * CompanyCreditCode: 公司统一社会信用代码
     *
     * @param string $companyCreditCode
     */
    public function setCompanyCreditCode($companyCreditCode)
    {
        $this->set("CompanyCreditCode", $companyCreditCode);
    }

    /**
     * CompanyCertificateFileId: 公司证件文件FileId
     *
     * @return string|null
     */
    public function getCompanyCertificateFileId()
    {
        return $this->get("CompanyCertificateFileId");
    }

    /**
     * CompanyCertificateFileId: 公司证件文件FileId
     *
     * @param string $companyCertificateFileId
     */
    public function setCompanyCertificateFileId($companyCertificateFileId)
    {
        $this->set("CompanyCertificateFileId", $companyCertificateFileId);
    }

    /**
     * CompanyWorkScenePhotosFileId: 公司工作现场照片FileId
     *
     * @return string|null
     */
    public function getCompanyWorkScenePhotosFileId()
    {
        return $this->get("CompanyWorkScenePhotosFileId");
    }

    /**
     * CompanyWorkScenePhotosFileId: 公司工作现场照片FileId
     *
     * @param string $companyWorkScenePhotosFileId
     */
    public function setCompanyWorkScenePhotosFileId($companyWorkScenePhotosFileId)
    {
        $this->set("CompanyWorkScenePhotosFileId", $companyWorkScenePhotosFileId);
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
     * HandlerIDNumber: 经办人身份证号码
     *
     * @return string|null
     */
    public function getHandlerIDNumber()
    {
        return $this->get("HandlerIDNumber");
    }

    /**
     * HandlerIDNumber: 经办人身份证号码
     *
     * @param string $handlerIDNumber
     */
    public function setHandlerIDNumber($handlerIDNumber)
    {
        $this->set("HandlerIDNumber", $handlerIDNumber);
    }

    /**
     * HandlerIDCardFrontImageFileId: 经办人身份证人像面图片FileId
     *
     * @return string|null
     */
    public function getHandlerIDCardFrontImageFileId()
    {
        return $this->get("HandlerIDCardFrontImageFileId");
    }

    /**
     * HandlerIDCardFrontImageFileId: 经办人身份证人像面图片FileId
     *
     * @param string $handlerIDCardFrontImageFileId
     */
    public function setHandlerIDCardFrontImageFileId($handlerIDCardFrontImageFileId)
    {
        $this->set("HandlerIDCardFrontImageFileId", $handlerIDCardFrontImageFileId);
    }

    /**
     * HandlerIDCardBackImageFileId: 经办人身份证国徽面图片FileId
     *
     * @return string|null
     */
    public function getHandlerIDCardBackImageFileId()
    {
        return $this->get("HandlerIDCardBackImageFileId");
    }

    /**
     * HandlerIDCardBackImageFileId: 经办人身份证国徽面图片FileId
     *
     * @param string $handlerIDCardBackImageFileId
     */
    public function setHandlerIDCardBackImageFileId($handlerIDCardBackImageFileId)
    {
        $this->set("HandlerIDCardBackImageFileId", $handlerIDCardBackImageFileId);
    }

    /**
     * HandlerHandHeldImageFileId: 经办人手持身份证图片FileId
     *
     * @return string|null
     */
    public function getHandlerHandHeldImageFileId()
    {
        return $this->get("HandlerHandHeldImageFileId");
    }

    /**
     * HandlerHandHeldImageFileId: 经办人手持身份证图片FileId
     *
     * @param string $handlerHandHeldImageFileId
     */
    public function setHandlerHandHeldImageFileId($handlerHandHeldImageFileId)
    {
        $this->set("HandlerHandHeldImageFileId", $handlerHandHeldImageFileId);
    }

    /**
     * ManagerName: 法人姓名
     *
     * @return string|null
     */
    public function getManagerName()
    {
        return $this->get("ManagerName");
    }

    /**
     * ManagerName: 法人姓名
     *
     * @param string $managerName
     */
    public function setManagerName($managerName)
    {
        $this->set("ManagerName", $managerName);
    }

    /**
     * ManagerPhone: 法人手机号
     *
     * @return string|null
     */
    public function getManagerPhone()
    {
        return $this->get("ManagerPhone");
    }

    /**
     * ManagerPhone: 法人手机号
     *
     * @param string $managerPhone
     */
    public function setManagerPhone($managerPhone)
    {
        $this->set("ManagerPhone", $managerPhone);
    }

    /**
     * ManagerIDNumber: 法人身份证号码
     *
     * @return string|null
     */
    public function getManagerIDNumber()
    {
        return $this->get("ManagerIDNumber");
    }

    /**
     * ManagerIDNumber: 法人身份证号码
     *
     * @param string $managerIDNumber
     */
    public function setManagerIDNumber($managerIDNumber)
    {
        $this->set("ManagerIDNumber", $managerIDNumber);
    }
}
