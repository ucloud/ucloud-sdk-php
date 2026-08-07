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
namespace UCloud\UKMS\Apis;

use UCloud\Core\Request\Request;

class VerifyMacRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "VerifyMac"]);
        $this->markRequired("Region");
        $this->markRequired("KeyId");
        $this->markRequired("MacMessage");
        $this->markRequired("Mac");
        $this->markRequired("MacAlgorithm");
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
     * KeyId: 密钥ID
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: 密钥ID
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * MacMessage: 用于验证的消息。请输入与生成 HMAC 时所用消息相同的消息。
     *
     * @return string|null
     */
    public function getMacMessage()
    {
        return $this->get("MacMessage");
    }

    /**
     * MacMessage: 用于验证的消息。请输入与生成 HMAC 时所用消息相同的消息。
     *
     * @param string $macMessage
     */
    public function setMacMessage($macMessage)
    {
        $this->set("MacMessage", $macMessage);
    }

    /**
     * Mac: 要验证的 HMAC。请输入由 GenerateMac 操作生成的 HMAC，前提是您指定的消息、HMAC KMS 密钥和 MAC 算法与此请求中指定的值相同。
     *
     * @return string|null
     */
    public function getMac()
    {
        return $this->get("Mac");
    }

    /**
     * Mac: 要验证的 HMAC。请输入由 GenerateMac 操作生成的 HMAC，前提是您指定的消息、HMAC KMS 密钥和 MAC 算法与此请求中指定的值相同。
     *
     * @param string $mac
     */
    public function setMac($mac)
    {
        $this->set("Mac", $mac);
    }

    /**
     * MacAlgorithm: 验证过程中将使用的 MAC 算法。请输入与计算 HMAC 时相同的 MAC 算法。此算法必须受 KeyId 参数标识的 HMAC KMS 密钥支持。
     *
     * @return string|null
     */
    public function getMacAlgorithm()
    {
        return $this->get("MacAlgorithm");
    }

    /**
     * MacAlgorithm: 验证过程中将使用的 MAC 算法。请输入与计算 HMAC 时相同的 MAC 算法。此算法必须受 KeyId 参数标识的 HMAC KMS 密钥支持。
     *
     * @param string $macAlgorithm
     */
    public function setMacAlgorithm($macAlgorithm)
    {
        $this->set("MacAlgorithm", $macAlgorithm);
    }
}
