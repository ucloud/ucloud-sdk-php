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

class CreateUK8SULSConfigParamExtractRule extends Request
{
    

    /**
     * LogType: 日志解析类型，决定了如何结构化日志。可选值: multi_line_delimiter：多行分隔符，delimiter:分隔符，full_regex:完全正则，multi_line_full_regex:多行完全正则，minimal_list:单行全文日志,multi_line:多行全文日志
     *
     * @return string|null
     */
    public function getLogType()
    {
        return $this->get("LogType");
    }

    /**
     * LogType: 日志解析类型，决定了如何结构化日志。可选值: multi_line_delimiter：多行分隔符，delimiter:分隔符，full_regex:完全正则，multi_line_full_regex:多行完全正则，minimal_list:单行全文日志,multi_line:多行全文日志
     *
     * @param string $logType
     */
    public function setLogType($logType)
    {
        $this->set("LogType", $logType);
    }

    /**
     * CollectPolicy: 采集策略。可选值: full (全量采集存量日志), increment (从当前时间点增量采集)。默认为 full。
     *
     * @return string|null
     */
    public function getCollectPolicy()
    {
        return $this->get("CollectPolicy");
    }

    /**
     * CollectPolicy: 采集策略。可选值: full (全量采集存量日志), increment (从当前时间点增量采集)。默认为 full。
     *
     * @param string $collectPolicy
     */
    public function setCollectPolicy($collectPolicy)
    {
        $this->set("CollectPolicy", $collectPolicy);
    }

    /**
     * Encode: 日志原文的编码格式。可选值: utf-8, gbk。默认为 utf-8。
     *
     * @return string|null
     */
    public function getEncode()
    {
        return $this->get("Encode");
    }

    /**
     * Encode: 日志原文的编码格式。可选值: utf-8, gbk。默认为 utf-8。
     *
     * @param string $encode
     */
    public function setEncode($encode)
    {
        $this->set("Encode", $encode);
    }

    /**
     * Keys: 当LogType 为分隔符、正则、多行正则时可用
     *
     * @return string[]|null
     */
    public function getKeys()
    {
        return $this->get("Keys");
    }

    /**
     * Keys: 当LogType 为分隔符、正则、多行正则时可用
     *
     * @param string[] $keys
     */
    public function setKeys(array $keys)
    {
        $this->set("Keys", $keys);
    }

    /**
     * Delimiter: 当 LogType 为delimiter 时可选，接收 "space"、"tab"、"|"、";"、","。
     *
     * @return string|null
     */
    public function getDelimiter()
    {
        return $this->get("Delimiter");
    }

    /**
     * Delimiter: 当 LogType 为delimiter 时可选，接收 "space"、"tab"、"|"、";"、","。
     *
     * @param string $delimiter
     */
    public function setDelimiter($delimiter)
    {
        $this->set("Delimiter", $delimiter);
    }

    /**
     * BeginningRegex: 行首正则表达式。当 logType 为多行模式 (如 multi_line 或 multi_line_full_regex) 时，用于标识一条新日志的开始。
     *
     * @return string|null
     */
    public function getBeginningRegex()
    {
        return $this->get("BeginningRegex");
    }

    /**
     * BeginningRegex: 行首正则表达式。当 logType 为多行模式 (如 multi_line 或 multi_line_full_regex) 时，用于标识一条新日志的开始。
     *
     * @param string $beginningRegex
     */
    public function setBeginningRegex($beginningRegex)
    {
        $this->set("BeginningRegex", $beginningRegex);
    }

    /**
     * LogRegex: 日志提取正则表达式。当 logType 为正则模式 (如 full_regex,multi_line_full_regex) 时，用于从日志中提取字段。
     *
     * @return string|null
     */
    public function getLogRegex()
    {
        return $this->get("LogRegex");
    }

    /**
     * LogRegex: 日志提取正则表达式。当 logType 为正则模式 (如 full_regex,multi_line_full_regex) 时，用于从日志中提取字段。
     *
     * @param string $logRegex
     */
    public function setLogRegex($logRegex)
    {
        $this->set("LogRegex", $logRegex);
    }

    /**
     * ExtractRule:
     *
     * @return CreateUK8SULSConfigParamExtractRuleExtractRule|null
     */
    public function getExtractRule()
    {
        return new CreateUK8SULSConfigParamExtractRuleExtractRule($this->get("ExtractRule"));
    }

    /**
     * ExtractRule:
     *
     * @param CreateUK8SULSConfigParamExtractRuleExtractRule $extractRule
     */
    public function setExtractRule(array $extractRule)
    {
        $this->set("ExtractRule", $extractRule->getAll());
    }

    /**
     * TimeKey: 当日志为 json 或正则提取时，指定包含日志时间的字段名 (Key)。
     *
     * @return string|null
     */
    public function getTimeKey()
    {
        return $this->get("TimeKey");
    }

    /**
     * TimeKey: 当日志为 json 或正则提取时，指定包含日志时间的字段名 (Key)。
     *
     * @param string $timeKey
     */
    public function setTimeKey($timeKey)
    {
        $this->set("TimeKey", $timeKey);
    }

    /**
     * TimeFormat: timeKey 对应的时间格式。
     *
     * @return string|null
     */
    public function getTimeFormat()
    {
        return $this->get("TimeFormat");
    }

    /**
     * TimeFormat: timeKey 对应的时间格式。
     *
     * @param string $timeFormat
     */
    public function setTimeFormat($timeFormat)
    {
        $this->set("TimeFormat", $timeFormat);
    }

    /**
     * UnMatchUpload: 是否上传解析失败的日志。true 表示上传，false 表示丢弃。默认为 false。
     *
     * @return string|null
     */
    public function getUnMatchUpload()
    {
        return $this->get("UnMatchUpload");
    }

    /**
     * UnMatchUpload: 是否上传解析失败的日志。true 表示上传，false 表示丢弃。默认为 false。
     *
     * @param string $unMatchUpload
     */
    public function setUnMatchUpload($unMatchUpload)
    {
        $this->set("UnMatchUpload", $unMatchUpload);
    }

    /**
     * UnMatchKey: 没有设置默认值；UnMatchUpload="true" 时强制要求填写
     *
     * @return string|null
     */
    public function getUnMatchKey()
    {
        return $this->get("UnMatchKey");
    }

    /**
     * UnMatchKey: 没有设置默认值；UnMatchUpload="true" 时强制要求填写
     *
     * @param string $unMatchKey
     */
    public function setUnMatchKey($unMatchKey)
    {
        $this->set("UnMatchKey", $unMatchKey);
    }

    /**
     * DelimiterBase64: Base64 编码的分隔符，优先级高于 Delimiter
     *
     * @return string|null
     */
    public function getDelimiterBase64()
    {
        return $this->get("DelimiterBase64");
    }

    /**
     * DelimiterBase64: Base64 编码的分隔符，优先级高于 Delimiter
     *
     * @param string $delimiterBase64
     */
    public function setDelimiterBase64($delimiterBase64)
    {
        $this->set("DelimiterBase64", $delimiterBase64);
    }

    /**
     * BeginningRegexBase64: Base64 编码的行首正则，优先级高于 BeginningRegex
     *
     * @return string|null
     */
    public function getBeginningRegexBase64()
    {
        return $this->get("BeginningRegexBase64");
    }

    /**
     * BeginningRegexBase64: Base64 编码的行首正则，优先级高于 BeginningRegex
     *
     * @param string $beginningRegexBase64
     */
    public function setBeginningRegexBase64($beginningRegexBase64)
    {
        $this->set("BeginningRegexBase64", $beginningRegexBase64);
    }
}
