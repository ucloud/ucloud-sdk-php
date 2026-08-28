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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class ULSExtractRule extends Response
{
    

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
     * LogType: 日志解析类型，决定了如何结构化日志。
     *
     * @return string|null
     */
    public function getLogType()
    {
        return $this->get("LogType");
    }

    /**
     * LogType: 日志解析类型，决定了如何结构化日志。
     *
     * @param string $logType
     */
    public function setLogType($logType)
    {
        $this->set("LogType", $logType);
    }

    /**
     * Delimiter: 当 LogType 为delimiter_log 时可选，可选字段 ' ',' ','|',';',','
     *
     * @return string|null
     */
    public function getDelimiter()
    {
        return $this->get("Delimiter");
    }

    /**
     * Delimiter: 当 LogType 为delimiter_log 时可选，可选字段 ' ',' ','|',';',','
     *
     * @param string $delimiter
     */
    public function setDelimiter($delimiter)
    {
        $this->set("Delimiter", $delimiter);
    }

    /**
     * BeginningRegex: 行首正则表达式。当 logType 为多行模式 (如 multiline_log 或 multiline_fullregex_log) 时，用于标识一条新日志的开始。
     *
     * @return string|null
     */
    public function getBeginningRegex()
    {
        return $this->get("BeginningRegex");
    }

    /**
     * BeginningRegex: 行首正则表达式。当 logType 为多行模式 (如 multiline_log 或 multiline_fullregex_log) 时，用于标识一条新日志的开始。
     *
     * @param string $beginningRegex
     */
    public function setBeginningRegex($beginningRegex)
    {
        $this->set("BeginningRegex", $beginningRegex);
    }

    /**
     * LogRegex: 日志提取正则表达式。当 logType 为正则模式 (如 fullregex_log 或 multiline_fullregex_log) 时，用于从日志中提取字段。
     *
     * @return string|null
     */
    public function getLogRegex()
    {
        return $this->get("LogRegex");
    }

    /**
     * LogRegex: 日志提取正则表达式。当 logType 为正则模式 (如 fullregex_log 或 multiline_fullregex_log) 时，用于从日志中提取字段。
     *
     * @param string $logRegex
     */
    public function setLogRegex($logRegex)
    {
        $this->set("LogRegex", $logRegex);
    }

    /**
     * TimeKey: 指定时间字段。
     *
     * @return string|null
     */
    public function getTimeKey()
    {
        return $this->get("TimeKey");
    }

    /**
     * TimeKey: 指定时间字段。
     *
     * @param string $timeKey
     */
    public function setTimeKey($timeKey)
    {
        $this->set("TimeKey", $timeKey);
    }

    /**
     * TimeFormat: timeKey 对应的时间格式。如： %Y-%m-%d %H:%M:%S
     *
     * @return string|null
     */
    public function getTimeFormat()
    {
        return $this->get("TimeFormat");
    }

    /**
     * TimeFormat: timeKey 对应的时间格式。如： %Y-%m-%d %H:%M:%S
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
     * UnMatchKey: 如果 unMatchUpload 为 true，无法解析的日志原文将被存放在此字段指定的 Key 下。默认为 LogParseFailure。
     *
     * @return string|null
     */
    public function getUnMatchKey()
    {
        return $this->get("UnMatchKey");
    }

    /**
     * UnMatchKey: 如果 unMatchUpload 为 true，无法解析的日志原文将被存放在此字段指定的 Key 下。默认为 LogParseFailure。
     *
     * @param string $unMatchKey
     */
    public function setUnMatchKey($unMatchKey)
    {
        $this->set("UnMatchKey", $unMatchKey);
    }
}
