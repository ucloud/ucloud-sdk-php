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
namespace UCloud\SES\Apis;

use UCloud\Core\Request\Request;
use UCloud\SES\Params\SendSESEmailParamAttachments;
use UCloud\SES\Params\SendSESEmailParamHeaders;

class SendSESEmailRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SendSESEmail"]);
        $this->markRequired("Subject");
        $this->markRequired("From");
        $this->markRequired("To");
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
     * Subject: 邮件主题（长度 1~200 字符）
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->get("Subject");
    }

    /**
     * Subject: 邮件主题（长度 1~200 字符）
     *
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->set("Subject", $subject);
    }

    /**
     * From: 发件人邮箱，配置地址：https://console.ucloud.cn/ses/email-config?tab=sender-list
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->get("From");
    }

    /**
     * From: 发件人邮箱，配置地址：https://console.ucloud.cn/ses/email-config?tab=sender-list
     *
     * @param string $from
     */
    public function setFrom($from)
    {
        $this->set("From", $from);
    }

    /**
     * To: 收件人
     *
     * @return string[]|null
     */
    public function getTo()
    {
        return $this->get("To");
    }

    /**
     * To: 收件人
     *
     * @param string[] $to
     */
    public function setTo(array $to)
    {
        $this->set("To", $to);
    }

    /**
     * Html: HTML 内容 （与Text二选一，长度上限 10,485,760个字符）
     *
     * @return string|null
     */
    public function getHtml()
    {
        return $this->get("Html");
    }

    /**
     * Html: HTML 内容 （与Text二选一，长度上限 10,485,760个字符）
     *
     * @param string $html
     */
    public function setHtml($html)
    {
        $this->set("Html", $html);
    }

    /**
     * Text: 纯文本内容 （与Html二选一，长度上限 10,485,760个字符）
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->get("Text");
    }

    /**
     * Text: 纯文本内容 （与Html二选一，长度上限 10,485,760个字符）
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->set("Text", $text);
    }

    /**
     * PreHeader: 邮件预览文本
     *
     * @return string|null
     */
    public function getPreHeader()
    {
        return $this->get("PreHeader");
    }

    /**
     * PreHeader: 邮件预览文本
     *
     * @param string $preHeader
     */
    public function setPreHeader($preHeader)
    {
        $this->set("PreHeader", $preHeader);
    }

    /**
     * FromName: 发件人名称，不传或为空时，自动回落到该发件人在控制台配置的别名（Alias）
     *
     * @return string|null
     */
    public function getFromName()
    {
        return $this->get("FromName");
    }

    /**
     * FromName: 发件人名称，不传或为空时，自动回落到该发件人在控制台配置的别名（Alias）
     *
     * @param string $fromName
     */
    public function setFromName($fromName)
    {
        $this->set("FromName", $fromName);
    }

    /**
     * Cc: 抄送（抄送+密送总数量不能超过100）
     *
     * @return string[]|null
     */
    public function getCc()
    {
        return $this->get("Cc");
    }

    /**
     * Cc: 抄送（抄送+密送总数量不能超过100）
     *
     * @param string[] $cc
     */
    public function setCc(array $cc)
    {
        $this->set("Cc", $cc);
    }

    /**
     * Bcc: 密送（抄送+密送总数量不能超过100）
     *
     * @return string[]|null
     */
    public function getBcc()
    {
        return $this->get("Bcc");
    }

    /**
     * Bcc: 密送（抄送+密送总数量不能超过100）
     *
     * @param string[] $bcc
     */
    public function setBcc(array $bcc)
    {
        $this->set("Bcc", $bcc);
    }

    /**
     * Attachments:
     *
     * @return SendSESEmailParamAttachments[]|null
     */
    public function getAttachments()
    {
        $items = $this->get("Attachments");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SendSESEmailParamAttachments($item));
        }
        return $result;
    }

    /**
     * Attachments:
     *
     * @param SendSESEmailParamAttachments[] $attachments
     */
    public function setAttachments(array $attachments)
    {
        $result = [];
        foreach ($attachments as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Headers:
     *
     * @return SendSESEmailParamHeaders[]|null
     */
    public function getHeaders()
    {
        $items = $this->get("Headers");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SendSESEmailParamHeaders($item));
        }
        return $result;
    }

    /**
     * Headers:
     *
     * @param SendSESEmailParamHeaders[] $headers
     */
    public function setHeaders(array $headers)
    {
        $result = [];
        foreach ($headers as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
