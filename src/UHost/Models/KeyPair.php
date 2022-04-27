<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class KeyPair extends Response
{
    

    /**
     * ProjectId: 项目ID。
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * KeyPairId: 密钥对ID。
     *
     * @return string|null
     */
    public function getKeyPairId(): string
    {
        return $this->get("KeyPairId");
    }

    /**
     * KeyPairId: 密钥对ID。
     *
     * @param string $keyPairId
     */
    public function setKeyPairId(string $keyPairId)
    {
        $this->set("KeyPairId", $keyPairId);
    }

    /**
     * KeyPairName: 密钥对名称。 长度为1~63个英文或中文字符。
     *
     * @return string|null
     */
    public function getKeyPairName(): string
    {
        return $this->get("KeyPairName");
    }

    /**
     * KeyPairName: 密钥对名称。 长度为1~63个英文或中文字符。
     *
     * @param string $keyPairName
     */
    public function setKeyPairName(string $keyPairName)
    {
        $this->set("KeyPairName", $keyPairName);
    }

    /**
     * KeyPairFingerPrint: 密钥对指纹。md5(ProjectId|KeyPairId|PublicKey)
     *
     * @return string|null
     */
    public function getKeyPairFingerPrint(): string
    {
        return $this->get("KeyPairFingerPrint");
    }

    /**
     * KeyPairFingerPrint: 密钥对指纹。md5(ProjectId|KeyPairId|PublicKey)
     *
     * @param string $keyPairFingerPrint
     */
    public function setKeyPairFingerPrint(string $keyPairFingerPrint)
    {
        $this->set("KeyPairFingerPrint", $keyPairFingerPrint);
    }

    /**
     * PrivateKeyBody: 密钥对的私钥内容。只有创建接口才会返回。
     *
     * @return string|null
     */
    public function getPrivateKeyBody(): string
    {
        return $this->get("PrivateKeyBody");
    }

    /**
     * PrivateKeyBody: 密钥对的私钥内容。只有创建接口才会返回。
     *
     * @param string $privateKeyBody
     */
    public function setPrivateKeyBody(string $privateKeyBody)
    {
        $this->set("PrivateKeyBody", $privateKeyBody);
    }

    /**
     * CreateTime: 密钥对的创建时间，格式为Unix Timestamp。
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 密钥对的创建时间，格式为Unix Timestamp。
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }
}
