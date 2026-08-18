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

use UCloud\Core\Response\Response;

class VerifyMacResponse extends Response
{
    

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
     * MacAlgorithm: 验证中使用的 MAC 算法。
     *
     * @return string|null
     */
    public function getMacAlgorithm()
    {
        return $this->get("MacAlgorithm");
    }

    /**
     * MacAlgorithm: 验证中使用的 MAC 算法。
     *
     * @param string $macAlgorithm
     */
    public function setMacAlgorithm($macAlgorithm)
    {
        $this->set("MacAlgorithm", $macAlgorithm);
    }

    /**
     * MacValid: 一个布尔值，表示 HMAC 是否已验证。
     *
     * @return boolean|null
     */
    public function getMacValid()
    {
        return $this->get("MacValid");
    }

    /**
     * MacValid: 一个布尔值，表示 HMAC 是否已验证。
     *
     * @param boolean $macValid
     */
    public function setMacValid($macValid)
    {
        $this->set("MacValid", $macValid);
    }
}
