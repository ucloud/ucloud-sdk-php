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

class UpdateUK8SULSConfigParamExtractRule extends Request
{
    

    /**
     * CollectPolicy: 采集策略。可选值：full（全量采集存量日志）、increment（从当前时间点增量采集）。默认为full。
     *
     * @return string|null
     */
    public function getCollectPolicy()
    {
        return $this->get("CollectPolicy");
    }

    /**
     * CollectPolicy: 采集策略。可选值：full（全量采集存量日志）、increment（从当前时间点增量采集）。默认为full。
     *
     * @param string $collectPolicy
     */
    public function setCollectPolicy($collectPolicy)
    {
        $this->set("CollectPolicy", $collectPolicy);
    }

    /**
     * Encode: 日志原文的编码格式。可选值：utf-8、gbk。默认为utf-8。
     *
     * @return string|null
     */
    public function getEncode()
    {
        return $this->get("Encode");
    }

    /**
     * Encode: 日志原文的编码格式。可选值：utf-8、gbk。默认为utf-8。
     *
     * @param string $encode
     */
    public function setEncode($encode)
    {
        $this->set("Encode", $encode);
    }

    /**
     * LogType: 日志解析类型。可选值：json、delimiter、full_regex、multi_line_full_regex、multi_line_delimiter、minimal_list、multi_line。
     *
     * @return string|null
     */
    public function getLogType()
    {
        return $this->get("LogType");
    }

    /**
     * LogType: 日志解析类型。可选值：json、delimiter、full_regex、multi_line_full_regex、multi_line_delimiter、minimal_list、multi_line。
     *
     * @param string $logType
     */
    public function setLogType($logType)
    {
        $this->set("LogType", $logType);
    }

    /**
     * BeginningRegex: 行首正则表达式。multi_line、multi_line_full_regex或multi_line_delimiter模式下，BeginningRegex和BeginningRegexBase64必须至少填写一个。
     *
     * @return string|null
     */
    public function getBeginningRegex()
    {
        return $this->get("BeginningRegex");
    }

    /**
     * BeginningRegex: 行首正则表达式。multi_line、multi_line_full_regex或multi_line_delimiter模式下，BeginningRegex和BeginningRegexBase64必须至少填写一个。
     *
     * @param string $beginningRegex
     */
    public function setBeginningRegex($beginningRegex)
    {
        $this->set("BeginningRegex", $beginningRegex);
    }

    /**
     * BeginningRegexBase64: Base64编码的行首正则表达式。填写时优先于BeginningRegex。
     *
     * @return string|null
     */
    public function getBeginningRegexBase64()
    {
        return $this->get("BeginningRegexBase64");
    }

    /**
     * BeginningRegexBase64: Base64编码的行首正则表达式。填写时优先于BeginningRegex。
     *
     * @param string $beginningRegexBase64
     */
    public function setBeginningRegexBase64($beginningRegexBase64)
    {
        $this->set("BeginningRegexBase64", $beginningRegexBase64);
    }

    /**
     * LogRegex: 日志提取正则表达式。full_regex或multi_line_full_regex模式下，LogRegex和LogRegexBase64必须至少填写一个。
     *
     * @return string|null
     */
    public function getLogRegex()
    {
        return $this->get("LogRegex");
    }

    /**
     * LogRegex: 日志提取正则表达式。full_regex或multi_line_full_regex模式下，LogRegex和LogRegexBase64必须至少填写一个。
     *
     * @param string $logRegex
     */
    public function setLogRegex($logRegex)
    {
        $this->set("LogRegex", $logRegex);
    }

    /**
     * LogRegexBase64: Base64编码的日志提取正则表达式。填写时优先于LogRegex。
     *
     * @return string|null
     */
    public function getLogRegexBase64()
    {
        return $this->get("LogRegexBase64");
    }

    /**
     * LogRegexBase64: Base64编码的日志提取正则表达式。填写时优先于LogRegex。
     *
     * @param string $logRegexBase64
     */
    public function setLogRegexBase64($logRegexBase64)
    {
        $this->set("LogRegexBase64", $logRegexBase64);
    }

    /**
     * Delimiter: 分隔符。delimiter或multi_line_delimiter模式下可用。可选值：space、tab、|、;、,。
     *
     * @return string|null
     */
    public function getDelimiter()
    {
        return $this->get("Delimiter");
    }

    /**
     * Delimiter: 分隔符。delimiter或multi_line_delimiter模式下可用。可选值：space、tab、|、;、,。
     *
     * @param string $delimiter
     */
    public function setDelimiter($delimiter)
    {
        $this->set("Delimiter", $delimiter);
    }

    /**
     * DelimiterBase64: Base64编码的分隔符。填写时优先于Delimiter。
     *
     * @return string|null
     */
    public function getDelimiterBase64()
    {
        return $this->get("DelimiterBase64");
    }

    /**
     * DelimiterBase64: Base64编码的分隔符。填写时优先于Delimiter。
     *
     * @param string $delimiterBase64
     */
    public function setDelimiterBase64($delimiterBase64)
    {
        $this->set("DelimiterBase64", $delimiterBase64);
    }

    /**
     * TimeKey: 包含日志时间的字段名。
     *
     * @return string|null
     */
    public function getTimeKey()
    {
        return $this->get("TimeKey");
    }

    /**
     * TimeKey: 包含日志时间的字段名。
     *
     * @param string $timeKey
     */
    public function setTimeKey($timeKey)
    {
        $this->set("TimeKey", $timeKey);
    }

    /**
     * TimeFormat: TimeKey对应的时间格式。json、full_regex或multi_line_full_regex模式下，填写TimeKey时必须同时填写TimeFormat。
     *
     * @return string|null
     */
    public function getTimeFormat()
    {
        return $this->get("TimeFormat");
    }

    /**
     * TimeFormat: TimeKey对应的时间格式。json、full_regex或multi_line_full_regex模式下，填写TimeKey时必须同时填写TimeFormat。
     *
     * @param string $timeFormat
     */
    public function setTimeFormat($timeFormat)
    {
        $this->set("TimeFormat", $timeFormat);
    }

    /**
     * UnMatchUpload: 是否上传解析失败的日志。字符串true表示上传，false表示丢弃。默认为false。
     *
     * @return string|null
     */
    public function getUnMatchUpload()
    {
        return $this->get("UnMatchUpload");
    }

    /**
     * UnMatchUpload: 是否上传解析失败的日志。字符串true表示上传，false表示丢弃。默认为false。
     *
     * @param string $unMatchUpload
     */
    public function setUnMatchUpload($unMatchUpload)
    {
        $this->set("UnMatchUpload", $unMatchUpload);
    }

    /**
     * UnMatchKey: 存放无法解析的日志原文的Key。UnMatchUpload为true时必须填写。
     *
     * @return string|null
     */
    public function getUnMatchKey()
    {
        return $this->get("UnMatchKey");
    }

    /**
     * UnMatchKey: 存放无法解析的日志原文的Key。UnMatchUpload为true时必须填写。
     *
     * @param string $unMatchKey
     */
    public function setUnMatchKey($unMatchKey)
    {
        $this->set("UnMatchKey", $unMatchKey);
    }

    /**
     * Keys: 提取后的字段名。仅适用于delimiter、full_regex、multi_line_full_regex和multi_line_delimiter。
     *
     * @return string[]|null
     */
    public function getKeys()
    {
        return $this->get("Keys");
    }

    /**
     * Keys: 提取后的字段名。仅适用于delimiter、full_regex、multi_line_full_regex和multi_line_delimiter。
     *
     * @param string[] $keys
     */
    public function setKeys(array $keys)
    {
        $this->set("Keys", $keys);
    }
}
