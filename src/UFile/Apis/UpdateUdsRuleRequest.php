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
namespace UCloud\UFile\Apis;

use UCloud\Core\Request\Request;

class UpdateUdsRuleRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUdsRule"]);
        $this->markRequired("RuleId");
        $this->markRequired("RuleName");
        $this->markRequired("SrcBucket");
        $this->markRequired("SrcTokenId");
        $this->markRequired("DstBucket");
        $this->markRequired("DstTokenId");
        $this->markRequired("DstDirectory");
        $this->markRequired("KeepUS3Name");
        $this->markRequired("Prefixes");
    }

    

    /**
     * RuleId: 规则的唯一Id
     *
     * @return string|null
     */
    public function getRuleId()
    {
        return $this->get("RuleId");
    }

    /**
     * RuleId: 规则的唯一Id
     *
     * @param string $ruleId
     */
    public function setRuleId($ruleId)
    {
        $this->set("RuleId", $ruleId);
    }

    /**
     * RuleName: 规则名称
     *
     * @return string|null
     */
    public function getRuleName()
    {
        return $this->get("RuleName");
    }

    /**
     * RuleName: 规则名称
     *
     * @param string $ruleName
     */
    public function setRuleName($ruleName)
    {
        $this->set("RuleName", $ruleName);
    }

    /**
     * SrcBucket: 源Bucket名字，全局唯一
     *
     * @return string|null
     */
    public function getSrcBucket()
    {
        return $this->get("SrcBucket");
    }

    /**
     * SrcBucket: 源Bucket名字，全局唯一
     *
     * @param string $srcBucket
     */
    public function setSrcBucket($srcBucket)
    {
        $this->set("SrcBucket", $srcBucket);
    }

    /**
     * SrcTokenId: 源bucket的token之一的tokenId
     *
     * @return string|null
     */
    public function getSrcTokenId()
    {
        return $this->get("SrcTokenId");
    }

    /**
     * SrcTokenId: 源bucket的token之一的tokenId
     *
     * @param string $srcTokenId
     */
    public function setSrcTokenId($srcTokenId)
    {
        $this->set("SrcTokenId", $srcTokenId);
    }

    /**
     * DstBucket: 目标Bucket名字，全局唯一
     *
     * @return string|null
     */
    public function getDstBucket()
    {
        return $this->get("DstBucket");
    }

    /**
     * DstBucket: 目标Bucket名字，全局唯一
     *
     * @param string $dstBucket
     */
    public function setDstBucket($dstBucket)
    {
        $this->set("DstBucket", $dstBucket);
    }

    /**
     * DstTokenId: 目标bucket的token之一的tokenId
     *
     * @return string|null
     */
    public function getDstTokenId()
    {
        return $this->get("DstTokenId");
    }

    /**
     * DstTokenId: 目标bucket的token之一的tokenId
     *
     * @param string $dstTokenId
     */
    public function setDstTokenId($dstTokenId)
    {
        $this->set("DstTokenId", $dstTokenId);
    }

    /**
     * DstDirectory: 解压后的目标目录
     *
     * @return string|null
     */
    public function getDstDirectory()
    {
        return $this->get("DstDirectory");
    }

    /**
     * DstDirectory: 解压后的目标目录
     *
     * @param string $dstDirectory
     */
    public function setDstDirectory($dstDirectory)
    {
        $this->set("DstDirectory", $dstDirectory);
    }

    /**
     * KeepUS3Name: 是否以压缩文件的前缀为最后一层目录
     *
     * @return boolean|null
     */
    public function getKeepUS3Name()
    {
        return $this->get("KeepUS3Name");
    }

    /**
     * KeepUS3Name: 是否以压缩文件的前缀为最后一层目录
     *
     * @param boolean $keepUS3Name
     */
    public function setKeepUS3Name($keepUS3Name)
    {
        $this->set("KeepUS3Name", $keepUS3Name);
    }

    /**
     * Prefixes: 触发解压缩的前缀
     *
     * @return string|null
     */
    public function getPrefixes()
    {
        return $this->get("Prefixes");
    }

    /**
     * Prefixes: 触发解压缩的前缀
     *
     * @param string $prefixes
     */
    public function setPrefixes($prefixes)
    {
        $this->set("Prefixes", $prefixes);
    }

    /**
     * Ops: 操作的ops数组,"Ops.0":"unzip"
     *
     * @return string[]|null
     */
    public function getOps()
    {
        return $this->get("Ops");
    }

    /**
     * Ops: 操作的ops数组,"Ops.0":"unzip"
     *
     * @param string[] $ops
     */
    public function setOps(array $ops)
    {
        $this->set("Ops", $ops);
    }

    /**
     * Events: 通知的事件数组
     *
     * @return string[]|null
     */
    public function getEvents()
    {
        return $this->get("Events");
    }

    /**
     * Events: 通知的事件数组
     *
     * @param string[] $events
     */
    public function setEvents(array $events)
    {
        $this->set("Events", $events);
    }

    /**
     * ContactGroupId: 联系的用户组ID
     *
     * @return string|null
     */
    public function getContactGroupId()
    {
        return $this->get("ContactGroupId");
    }

    /**
     * ContactGroupId: 联系的用户组ID
     *
     * @param string $contactGroupId
     */
    public function setContactGroupId($contactGroupId)
    {
        $this->set("ContactGroupId", $contactGroupId);
    }

    /**
     * NotificationTypes: 通知的类型数组
     *
     * @return string[]|null
     */
    public function getNotificationTypes()
    {
        return $this->get("NotificationTypes");
    }

    /**
     * NotificationTypes: 通知的类型数组
     *
     * @param string[] $notificationTypes
     */
    public function setNotificationTypes(array $notificationTypes)
    {
        $this->set("NotificationTypes", $notificationTypes);
    }
}
