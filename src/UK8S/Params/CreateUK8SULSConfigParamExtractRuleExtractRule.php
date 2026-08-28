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
namespace UCloud\UK8S\Params;

use UCloud\Core\Request\Request;

class CreateUK8SULSConfigParamExtractRuleExtractRule extends Request
{
    

    /**
     * LogRegexBase64: Base64 编码的日志提取正则表达式。
     *
     * @return string|null
     */
    public function getLogRegexBase64()
    {
        return $this->get("LogRegexBase64");
    }

    /**
     * LogRegexBase64: Base64 编码的日志提取正则表达式。
     *
     * @param string $logRegexBase64
     */
    public function setLogRegexBase64($logRegexBase64)
    {
        $this->set("LogRegexBase64", $logRegexBase64);
    }
}
