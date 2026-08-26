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
namespace UCloud\ULogService\Apis;

use UCloud\Core\Request\Request;
use UCloud\ULogService\Params\UpdateULogServiceCollectConfParamFilePaths;

class UpdateULogServiceCollectConfRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateULogServiceCollectConf"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("TopicId");
        $this->markRequired("CollectConfId");
        $this->markRequired("LogType");
        $this->markRequired("CollectPolicy");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
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
     * TopicId: 日志主题ID
     *
     * @return string|null
     */
    public function getTopicId()
    {
        return $this->get("TopicId");
    }

    /**
     * TopicId: 日志主题ID
     *
     * @param string $topicId
     */
    public function setTopicId($topicId)
    {
        $this->set("TopicId", $topicId);
    }

    /**
     * CollectConfId: 日志主题采集配置ID
     *
     * @return integer|null
     */
    public function getCollectConfId()
    {
        return $this->get("CollectConfId");
    }

    /**
     * CollectConfId: 日志主题采集配置ID
     *
     * @param int $collectConfId
     */
    public function setCollectConfId($collectConfId)
    {
        $this->set("CollectConfId", $collectConfId);
    }

    /**
     * LogType: 日志解析类型，决定了如何结构化日志。可选值: json:json 格式，delimiter:分隔符，full_regex:完全正则，multi_line_full_regex:多行完全正则，multi_line_delimiter: 多行分隔符正则，minimal_list:单行全文日志,multi_line:多行全文日志
     *
     * @return string|null
     */
    public function getLogType()
    {
        return $this->get("LogType");
    }

    /**
     * LogType: 日志解析类型，决定了如何结构化日志。可选值: json:json 格式，delimiter:分隔符，full_regex:完全正则，multi_line_full_regex:多行完全正则，multi_line_delimiter: 多行分隔符正则，minimal_list:单行全文日志,multi_line:多行全文日志
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
     * Keys: 索引字段key，是一个数组
     *
     * @return string[]|null
     */
    public function getKeys()
    {
        return $this->get("Keys");
    }

    /**
     * Keys: 索引字段key，是一个数组
     *
     * @param string[] $keys
     */
    public function setKeys(array $keys)
    {
        $this->set("Keys", $keys);
    }

    /**
     * Delimiter: 当 LogType 为delimiter 或multi_line_delimiter时可选，支持多字符分隔，需要转换成Base64
     *
     * @return string|null
     */
    public function getDelimiter()
    {
        return $this->get("Delimiter");
    }

    /**
     * Delimiter: 当 LogType 为delimiter 或multi_line_delimiter时可选，支持多字符分隔，需要转换成Base64
     *
     * @param string $delimiter
     */
    public function setDelimiter($delimiter)
    {
        $this->set("Delimiter", $delimiter);
    }

    /**
     * MatchRule: 行首正则表达式。当 logType 为多行模式 (如 multi_line 或 multi_line_full_regex或multi_line_delimiter) 时，用于标识一条新日志的开始。需要转换成Base64
     *
     * @return string|null
     */
    public function getMatchRule()
    {
        return $this->get("MatchRule");
    }

    /**
     * MatchRule: 行首正则表达式。当 logType 为多行模式 (如 multi_line 或 multi_line_full_regex或multi_line_delimiter) 时，用于标识一条新日志的开始。需要转换成Base64
     *
     * @param string $matchRule
     */
    public function setMatchRule($matchRule)
    {
        $this->set("MatchRule", $matchRule);
    }

    /**
     * ExtractRule: 日志提取正则表达式。当 logType 为正则模式 (如 full_regex,multi_line_full_regex) 时，用于从日志中提取字段。需要转换成Base64
     *
     * @return string|null
     */
    public function getExtractRule()
    {
        return $this->get("ExtractRule");
    }

    /**
     * ExtractRule: 日志提取正则表达式。当 logType 为正则模式 (如 full_regex,multi_line_full_regex) 时，用于从日志中提取字段。需要转换成Base64
     *
     * @param string $extractRule
     */
    public function setExtractRule($extractRule)
    {
        $this->set("ExtractRule", $extractRule);
    }

    /**
     * UnMatchKey: 如果 UnMatchUpload 为 true，无法解析的日志原文将被存放在此字段指定的 Key 下。默认为 LogParseFailure。
     *
     * @return string|null
     */
    public function getUnMatchKey()
    {
        return $this->get("UnMatchKey");
    }

    /**
     * UnMatchKey: 如果 UnMatchUpload 为 true，无法解析的日志原文将被存放在此字段指定的 Key 下。默认为 LogParseFailure。
     *
     * @param string $unMatchKey
     */
    public function setUnMatchKey($unMatchKey)
    {
        $this->set("UnMatchKey", $unMatchKey);
    }

    /**
     * FilePaths:
     *
     * @return UpdateULogServiceCollectConfParamFilePaths[]|null
     */
    public function getFilePaths()
    {
        $items = $this->get("FilePaths");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UpdateULogServiceCollectConfParamFilePaths($item));
        }
        return $result;
    }

    /**
     * FilePaths:
     *
     * @param UpdateULogServiceCollectConfParamFilePaths[] $filePaths
     */
    public function setFilePaths(array $filePaths)
    {
        $result = [];
        foreach ($filePaths as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
