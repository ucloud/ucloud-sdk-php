<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\ULB\Params;

use UCloud\Core\Request\Request;

class UpdateRuleAttributeParamRuleActionsFixedResponseConfig extends Request
{
    

    /**
     * HttpCode: 返回的 HTTP 响应码，仅支持 2xx、4xx、5xx 数字，x 为任意数字。
     *
     * @return integer|null
     */
    public function getHttpCode()
    {
        return $this->get("HttpCode");
    }

    /**
     * HttpCode: 返回的 HTTP 响应码，仅支持 2xx、4xx、5xx 数字，x 为任意数字。
     *
     * @param int $httpCode
     */
    public function setHttpCode($httpCode)
    {
        $this->set("HttpCode", $httpCode);
    }

    /**
     * Content: 返回的固定内容。最大支持存储 1 KB，只支持 ASCII 码值ch >= 32 && ch < 127范围内、不包括 $ 的可打印字符。
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->get("Content");
    }

    /**
     * Content: 返回的固定内容。最大支持存储 1 KB，只支持 ASCII 码值ch >= 32 && ch < 127范围内、不包括 $ 的可打印字符。
     *
     * @param string $content
     */
    public function setContent($content)
    {
        $this->set("Content", $content);
    }
}
