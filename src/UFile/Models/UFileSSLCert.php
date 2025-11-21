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
namespace UCloud\UFile\Models;

use UCloud\Core\Response\Response;

class UFileSSLCert extends Response
{
    

    /**
     * Domain: 域名
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->get("Domain");
    }

    /**
     * Domain: 域名
     *
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->set("Domain", $domain);
    }

    /**
     * Certificate: SSL证书内容，和域名对应
     *
     * @return string|null
     */
    public function getCertificate()
    {
        return $this->get("Certificate");
    }

    /**
     * Certificate: SSL证书内容，和域名对应
     *
     * @param string $certificate
     */
    public function setCertificate($certificate)
    {
        $this->set("Certificate", $certificate);
    }

    /**
     * CertificateKey: SSL证书对应的私钥
     *
     * @return string|null
     */
    public function getCertificateKey()
    {
        return $this->get("CertificateKey");
    }

    /**
     * CertificateKey: SSL证书对应的私钥
     *
     * @param string $certificateKey
     */
    public function setCertificateKey($certificateKey)
    {
        $this->set("CertificateKey", $certificateKey);
    }

    /**
     * CertificateName: SSL证书名称
     *
     * @return string|null
     */
    public function getCertificateName()
    {
        return $this->get("CertificateName");
    }

    /**
     * CertificateName: SSL证书名称
     *
     * @param string $certificateName
     */
    public function setCertificateName($certificateName)
    {
        $this->set("CertificateName", $certificateName);
    }
}
