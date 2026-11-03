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
namespace UCloud\ULB\Params;

use UCloud\Core\Request\Request;

class UpdateLoadBalancerAttributeParamAccessLogConfig extends Request
{
    

    /**
     * Enabled: （应用型专用）是否开启访问日志记录功能
     *
     * @return boolean|null
     */
    public function getEnabled()
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: （应用型专用）是否开启访问日志记录功能
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->set("Enabled", $enabled);
    }

    /**
     * US3BucketName: （应用型专用）用于存储访问日志的bucket
     *
     * @return string|null
     */
    public function getUS3BucketName()
    {
        return $this->get("US3BucketName");
    }

    /**
     * US3BucketName: （应用型专用）用于存储访问日志的bucket
     *
     * @param string $us3BucketName
     */
    public function setUS3BucketName($us3BucketName)
    {
        $this->set("US3BucketName", $us3BucketName);
    }

    /**
     * US3TokenId: （应用型专用）上传访问日志到bucket所需的token
     *
     * @return string|null
     */
    public function getUS3TokenId()
    {
        return $this->get("US3TokenId");
    }

    /**
     * US3TokenId: （应用型专用）上传访问日志到bucket所需的token
     *
     * @param string $us3TokenId
     */
    public function setUS3TokenId($us3TokenId)
    {
        $this->set("US3TokenId", $us3TokenId);
    }

    /**
     * Destination: （应用型专用）上传访问日志的目标；us3,elasticsearch,logstash,kafka,uls
     *
     * @return string|null
     */
    public function getDestination()
    {
        return $this->get("Destination");
    }

    /**
     * Destination: （应用型专用）上传访问日志的目标；us3,elasticsearch,logstash,kafka,uls
     *
     * @param string $destination
     */
    public function setDestination($destination)
    {
        $this->set("Destination", $destination);
    }

    /**
     * EnableCustomLog: （应用型专用）是否开启自定义日志功能
     *
     * @return boolean|null
     */
    public function getEnableCustomLog()
    {
        return $this->get("EnableCustomLog");
    }

    /**
     * EnableCustomLog: （应用型专用）是否开启自定义日志功能
     *
     * @param boolean $enableCustomLog
     */
    public function setEnableCustomLog($enableCustomLog)
    {
        $this->set("EnableCustomLog", $enableCustomLog);
    }

    /**
     * Params: （应用型专用）日志参数列表
     *
     * @return string[]|null
     */
    public function getParams()
    {
        return $this->get("Params");
    }

    /**
     * Params: （应用型专用）日志参数列表
     *
     * @param string[] $params
     */
    public function setParams(array $params)
    {
        $this->set("Params", $params);
    }

    /**
     * ContentType: （应用型专用）日志内容格式，space,json;
     *
     * @return string|null
     */
    public function getContentType()
    {
        return $this->get("ContentType");
    }

    /**
     * ContentType: （应用型专用）日志内容格式，space,json;
     *
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        $this->set("ContentType", $contentType);
    }

    /**
     * EnableAggregate: （应用型专用）是否开启日志聚合功能
     *
     * @return boolean|null
     */
    public function getEnableAggregate()
    {
        return $this->get("EnableAggregate");
    }

    /**
     * EnableAggregate: （应用型专用）是否开启日志聚合功能
     *
     * @param boolean $enableAggregate
     */
    public function setEnableAggregate($enableAggregate)
    {
        $this->set("EnableAggregate", $enableAggregate);
    }

    /**
     * Frequency: （应用型专用）日志聚合频率
     *
     * @return integer|null
     */
    public function getFrequency()
    {
        return $this->get("Frequency");
    }

    /**
     * Frequency: （应用型专用）日志聚合频率
     *
     * @param int $frequency
     */
    public function setFrequency($frequency)
    {
        $this->set("Frequency", $frequency);
    }

    /**
     * DestinationAddrs: （应用型专用）日志上传目标地址；仅对elasticsearch,logstash,kafka生效，最多支持五个
     *
     * @return string|null
     */
    public function getDestinationAddrs()
    {
        return $this->get("DestinationAddrs");
    }

    /**
     * DestinationAddrs: （应用型专用）日志上传目标地址；仅对elasticsearch,logstash,kafka生效，最多支持五个
     *
     * @param string $destinationAddrs
     */
    public function setDestinationAddrs($destinationAddrs)
    {
        $this->set("DestinationAddrs", $destinationAddrs);
    }

    /**
     * Topic: （应用型专用）kafka topic；仅对kafka生效
     *
     * @return string|null
     */
    public function getTopic()
    {
        return $this->get("Topic");
    }

    /**
     * Topic: （应用型专用）kafka topic；仅对kafka生效
     *
     * @param string $topic
     */
    public function setTopic($topic)
    {
        $this->set("Topic", $topic);
    }

    /**
     * ULSTopic: （应用型专用）uls topic；仅对上传目标为uls生效
     *
     * @return string|null
     */
    public function getULSTopic()
    {
        return $this->get("ULSTopic");
    }

    /**
     * ULSTopic: （应用型专用）uls topic；仅对上传目标为uls生效
     *
     * @param string $ulsTopic
     */
    public function setULSTopic($ulsTopic)
    {
        $this->set("ULSTopic", $ulsTopic);
    }
}
