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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class TLSAndCiphers extends Response
{
    

    /**
     * TLSVersion: TLS最低版本
     *
     * @return string|null
     */
    public function getTLSVersion()
    {
        return $this->get("TLSVersion");
    }

    /**
     * TLSVersion: TLS最低版本
     *
     * @param string $tlsVersion
     */
    public function setTLSVersion($tlsVersion)
    {
        $this->set("TLSVersion", $tlsVersion);
    }

    /**
     * SSLCiphers: 加密套件
     *
     * @return string[]|null
     */
    public function getSSLCiphers()
    {
        return $this->get("SSLCiphers");
    }

    /**
     * SSLCiphers: 加密套件
     *
     * @param string[] $sslCiphers
     */
    public function setSSLCiphers(array $sslCiphers)
    {
        $this->set("SSLCiphers", $sslCiphers);
    }
}
