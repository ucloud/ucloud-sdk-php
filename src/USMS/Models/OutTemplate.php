<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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

class OutTemplate extends Response {
    

    /**
     * TemplateId: 短信模板ID
     *
     * @return string|null
     */
    public function getTemplateId(): string {
        return $this->get("TemplateId");
    }

    /**
     * TemplateId: 短信模板ID
     *
     * @param string $templateId
     */
    public function setTemplateId(string $templateId) {
        $this->set("TemplateId", $templateId);
    }

    /**
     * Purpose: 模板类型，选项：1-验证码类 2-通知类 3-会员推广类
     *
     * @return int|null
     */
    public function getPurpose(): int {
        return $this->get("Purpose");
    }

    /**
     * Purpose: 模板类型，选项：1-验证码类 2-通知类 3-会员推广类
     *
     * @param int $purpose
     */
    public function setPurpose(int $purpose) {
        $this->set("Purpose", $purpose);
    }

    /**
     * TemplateName: 短信模板名称
     *
     * @return string|null
     */
    public function getTemplateName(): string {
        return $this->get("TemplateName");
    }

    /**
     * TemplateName: 短信模板名称
     *
     * @param string $templateName
     */
    public function setTemplateName(string $templateName) {
        $this->set("TemplateName", $templateName);
    }

    /**
     * Template: 短信模板内容
     *
     * @return string|null
     */
    public function getTemplate(): string {
        return $this->get("Template");
    }

    /**
     * Template: 短信模板内容
     *
     * @param string $template
     */
    public function setTemplate(string $template) {
        $this->set("Template", $template);
    }

    /**
     * UnsubscribeInfo: 退订信息；一般填写方式“回T退订”，当purpose为3（也即会员推广类）时，为必填项
     *
     * @return string|null
     */
    public function getUnsubscribeInfo(): string {
        return $this->get("UnsubscribeInfo");
    }

    /**
     * UnsubscribeInfo: 退订信息；一般填写方式“回T退订”，当purpose为3（也即会员推广类）时，为必填项
     *
     * @param string $unsubscribeInfo
     */
    public function setUnsubscribeInfo(string $unsubscribeInfo) {
        $this->set("UnsubscribeInfo", $unsubscribeInfo);
    }

    /**
     * Status: 短信模板状态；状态说明：0-待审核，1-审核中，2-审核通过，3-审核未通过，4-被禁用
     *
     * @return int|null
     */
    public function getStatus(): int {
        return $this->get("Status");
    }

    /**
     * Status: 短信模板状态；状态说明：0-待审核，1-审核中，2-审核通过，3-审核未通过，4-被禁用
     *
     * @param int $status
     */
    public function setStatus(int $status) {
        $this->set("Status", $status);
    }

    /**
     * Remark: 模板说明
     *
     * @return string|null
     */
    public function getRemark(): string {
        return $this->get("Remark");
    }

    /**
     * Remark: 模板说明
     *
     * @param string $remark
     */
    public function setRemark(string $remark) {
        $this->set("Remark", $remark);
    }

    /**
     * ErrDesc: 审核失败原因
     *
     * @return string|null
     */
    public function getErrDesc(): string {
        return $this->get("ErrDesc");
    }

    /**
     * ErrDesc: 审核失败原因
     *
     * @param string $errDesc
     */
    public function setErrDesc(string $errDesc) {
        $this->set("ErrDesc", $errDesc);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return int|null
     */
    public function getCreateTime(): int {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime) {
        $this->set("CreateTime", $createTime);
    }


}
