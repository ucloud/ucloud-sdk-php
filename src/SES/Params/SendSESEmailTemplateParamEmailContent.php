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
namespace UCloud\SES\Params;

use UCloud\Core\Request\Request;

class SendSESEmailTemplateParamEmailContent extends Request
{
    

    /**
     * To: 收件人，最多100条
     *
     * @return string|null
     */
    public function getTo()
    {
        return $this->get("To");
    }

    /**
     * To: 收件人，最多100条
     *
     * @param string $to
     */
    public function setTo($to)
    {
        $this->set("To", $to);
    }

    /**
     * Cc: 抄送（抄送+密送总数量不能超过100）
     *
     * @return string[]|null
     */
    public function getCc()
    {
        return $this->get("Cc");
    }

    /**
     * Cc: 抄送（抄送+密送总数量不能超过100）
     *
     * @param string[] $cc
     */
    public function setCc(array $cc)
    {
        $this->set("Cc", $cc);
    }

    /**
     * Bcc: 密送（抄送+密送总数量不能超过100）
     *
     * @return string[]|null
     */
    public function getBcc()
    {
        return $this->get("Bcc");
    }

    /**
     * Bcc: 密送（抄送+密送总数量不能超过100）
     *
     * @param string[] $bcc
     */
    public function setBcc(array $bcc)
    {
        $this->set("Bcc", $bcc);
    }

    /**
     * TemplateVariableParams: 模版变量，格式 variableName{##}variableValue （例：{"name{##}Tom", "code{##}1234"}）
     *
     * @return string[]|null
     */
    public function getTemplateVariableParams()
    {
        return $this->get("TemplateVariableParams");
    }

    /**
     * TemplateVariableParams: 模版变量，格式 variableName{##}variableValue （例：{"name{##}Tom", "code{##}1234"}）
     *
     * @param string[] $templateVariableParams
     */
    public function setTemplateVariableParams(array $templateVariableParams)
    {
        $this->set("TemplateVariableParams", $templateVariableParams);
    }
}
