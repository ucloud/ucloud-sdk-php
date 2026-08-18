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

class GenerateMacResponse extends Response
{
    

    /**
     * Mac: 针对指定消息生成的基于哈希的消息认证码 (HMAC)、HMAC KMS 密钥和 MAC 算法。
     *
     * @return string|null
     */
    public function getMac()
    {
        return $this->get("Mac");
    }

    /**
     * Mac: 针对指定消息生成的基于哈希的消息认证码 (HMAC)、HMAC KMS 密钥和 MAC 算法。
     *
     * @param string $mac
     */
    public function setMac($mac)
    {
        $this->set("Mac", $mac);
    }

    /**
     * MacAlgorithm: 用于生成 HMAC 的 MAC 算法。
     *
     * @return string|null
     */
    public function getMacAlgorithm()
    {
        return $this->get("MacAlgorithm");
    }

    /**
     * MacAlgorithm: 用于生成 HMAC 的 MAC 算法。
     *
     * @param string $macAlgorithm
     */
    public function setMacAlgorithm($macAlgorithm)
    {
        $this->set("MacAlgorithm", $macAlgorithm);
    }
}
