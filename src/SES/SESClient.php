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
namespace UCloud\SES;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\SES\Apis\SendSESEmailRequest;
use UCloud\SES\Apis\SendSESEmailResponse;
use UCloud\SES\Apis\SendSESEmailTemplateRequest;
use UCloud\SES\Apis\SendSESEmailTemplateResponse;

/**
 * This client is used to call actions of **SES** service
 */
class SESClient extends Client
{

    /**
     * SendSESEmail - 直接发送邮件，无需创建发送任务和模版，支持 HTML/纯文本内容、主题、抄送/密送、附件和邮件头，单次最多 100 个收件人。
     *
     * See also: https://docs.ucloud.cn/api/ses-api/send_ses_email
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "Subject" => (string) 邮件主题（长度 1~200 字符）
     *     "From" => (string) 发件人邮箱，配置地址：https://console.ucloud.cn/ses/email-config?tab=sender-list
     *     "To" => (array<string>) 收件人
     *     "Html" => (string) HTML 内容 （与Text二选一，长度上限 10,485,760个字符）
     *     "Text" => (string) 纯文本内容 （与Html二选一，长度上限 10,485,760个字符）
     *     "PreHeader" => (string) 邮件预览文本
     *     "FromName" => (string) 发件人名称，不传或为空时，自动回落到该发件人在控制台配置的别名（Alias）
     *     "Cc" => (array<string>) 抄送（抄送+密送总数量不能超过100）
     *     "Bcc" => (array<string>) 密送（抄送+密送总数量不能超过100）
     *     "Attachments" => (array<object>) [
     *         [
     *             "Filename" => (string) 附件文件名
     *             "ContentType" => (string) MIME 类型，如： application/pdf
     *             "Data" => (string) 附件内容（Base64 编码），单次请求最多 10 个附件；总大小不超过 10MB
     *         ]
     *     ]
     *     "Headers" => (array<object>) [
     *         [
     *             "Name" => (string) 邮件头名称，最多 20 个且仅允许字母、数字和 -（正则 ^[A-Za-z0-9-]+$）。禁止使用保留名称：From/To/Cc/Bcc/Subject/Reply-To/Content-Type/Mime-Version，以及 X-SES- 前缀（均不区分大小写）。
     *             "Value" => (string) 邮件头值
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SessionNo" => (string) 本次发送任务的唯一标识
     *     "SuccessCount" => (integer) 发送成功数
     *     "FailContent" => (array<object>) 发送失败的收件人列表[
     *         [
     *             "To" => (string) 收件人
     *             "EmailAddress" => (string) 收件邮箱
     *             "Cc" => (array<string>) 抄送
     *             "Bcc" => (array<string>) 密送
     *             "TemplateVariableParams" => (array<string>) 模版变量,variableName{##}variableValue 格式；仅使用模版发送（SendSESEmailTemplate）时返回，未使用模版发送（SendSESEmail）时不返回该字段
     *             "FailureReason" => (string) 失败原因
     *         ]
     *     ]
     * ]
     *
     * @return SendSESEmailResponse
     * @throws UCloudException
     */
    public function sendSESEmail(SendSESEmailRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SendSESEmailResponse($resp->toArray(), $resp->getRequestId());
    }

    /**
     * SendSESEmailTemplate - 通过模版发送邮件，无需创建发送任务。支持自定义主题、摘要、预览文本、抄送/密送、附件和邮件头，单次最多 100 个收件人。
     *
     * See also: https://docs.ucloud.cn/api/ses-api/send_ses_email_template
     *
     * Arguments:
     *
     * $args = [
     *     "Region" => (string) 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "Zone" => (string) 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "TemplateId" => (string) 模版 ID，获取：https://console.ucloud.cn/ses/email-config?tab=template
     *     "From" => (string) 发件人邮箱
     *     "Subject" => (string) 邮件主题
     *     "PreHeader" => (string) 邮件预览文本
     *     "EmailContent" => (array<object>) [
     *         [
     *             "To" => (string) 收件人，最多100条
     *             "Cc" => (array<string>) 抄送（抄送+密送总数量不能超过100）
     *             "Bcc" => (array<string>) 密送（抄送+密送总数量不能超过100）
     *             "TemplateVariableParams" => (array<string>) 模版变量，格式 variableName{##}variableValue （例：{"name{##}Tom", "code{##}1234"}）
     *         ]
     *     ]
     *     "FromName" => (string) 发件人名称，不传或为空时，自动回落到该发件人在控制台配置的别名（Alias）
     *     "Attachments" => (array<object>) [
     *         [
     *             "Filename" => (string) 附件文件名
     *             "ContentType" => (string) MIME 类型，如： application/pdf
     *             "Data" => (string) 附件内容（Base64 编码），单次请求最多 10 个附件；总大小不超过 10MB
     *         ]
     *     ]
     *     "Headers" => (array<object>) [
     *         [
     *             "Name" => (string) 邮件头名称，最多 20 个且仅允许字母、数字和 -（正则 ^[A-Za-z0-9-]+$）。禁止使用保留名称：From/To/Cc/Bcc/Subject/Reply-To/Content-Type/Mime-Version，以及 X-SES- 前缀（均不区分大小写）。
     *             "Value" => (string) 邮件头值
     *         ]
     *     ]
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "SessionNo" => (string) 本次发送任务的唯一标识
     *     "SuccessCount" => (integer) 发送成功数
     *     "FailContent" => (array<object>) 发送失败的收件人列表[
     *         [
     *             "To" => (string) 收件人
     *             "EmailAddress" => (string) 收件邮箱
     *             "Cc" => (array<string>) 抄送
     *             "Bcc" => (array<string>) 密送
     *             "TemplateVariableParams" => (array<string>) 模版变量,variableName{##}variableValue 格式；仅使用模版发送（SendSESEmailTemplate）时返回，未使用模版发送（SendSESEmail）时不返回该字段
     *             "FailureReason" => (string) 失败原因
     *         ]
     *     ]
     * ]
     *
     * @return SendSESEmailTemplateResponse
     * @throws UCloudException
     */
    public function sendSESEmailTemplate(SendSESEmailTemplateRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SendSESEmailTemplateResponse($resp->toArray(), $resp->getRequestId());
    }
}
