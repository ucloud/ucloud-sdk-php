<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\UVMS;

use UCloud\Core\Client;
use UCloud\Core\Exception\UCloudException;
use UCloud\UVMS\Apis\SendUVMSMessageRequest;
use UCloud\UVMS\Apis\SendUVMSMessageResponse;

/**
 * This client is used to call actions of **UVMS** service
 */
class UVMSClient extends Client
{

    /**
     * SendUVMSMessage - 向指定号码拨打电话
     *
     * See also: https://docs.ucloud.cn/api/uvms-api/send_uvms_message
     *
     * Arguments:
     *
     * $args = [
     *     "ProjectId" => (string) 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *     "CalledNumber" => (string) 被叫号码，采用 E.164 标准，格式为+[国家代码][用户号码]。例如：+8613512345678， 其中前面有一个+号 ，86为国家码，13512345678为手机号
     *     "TemplateId" => (string) 模板 ID，在控制台审核通过的模板 ID。
     *     "TemplateParams" => (array<string>) 模板可变参数，以数组的方式填写，举例，TemplateParams.0，TemplateParams.1，... 若模板中无可变参数，则该项可不填写；若模板中有可变参数，则该项为必填项，参数个数需与变量个数保持一致，否则无法发送；
     *     "FromNumber" => (string) 主叫号码，号码随机时不填。专属号码时传入已购买的号码，仅支持一个号码，在控制台查看已购买的号码。
     *     "UserId" => (string) 自定义的业务标识ID，字符串（ 长度不能超过32 位），不支持 单引号、表情包符号等特殊字符
     * ]
     *
     * Outputs:
     *
     * $outputs = [
     *     "ReqUuid" => (string) 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 ReqUuid。
     *     "SessionNo" => (string) 本次提交发送语音的唯一ID，可根据该值查询本次发送详情
     *     "UserId" => (string)     本次提交的自定义业务标识ID，仅当发送时传入有效的UserId，才返回该字段。
     * ]
     *
     * @return SendUVMSMessageResponse
     * @throws UCloudException
     */
    public function sendUVMSMessage(SendUVMSMessageRequest $request = null)
    {
        $resp = $this->invoke($request);
        return new SendUVMSMessageResponse($resp->toArray(), $resp->getRequestId());
    }
}
