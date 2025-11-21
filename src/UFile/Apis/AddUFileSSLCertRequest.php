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

class AddUFileSSLCertRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AddUFileSSLCert"]);
        $this->markRequired("BucketName");
        $this->markRequired("Domain");
        $this->markRequired("CertificateName");
    }

    

    /**
     * BucketName: 存储桶名称，全局唯一
     *
     * @return string|null
     */
    public function getBucketName()
    {
        return $this->get("BucketName");
    }

    /**
     * BucketName: 存储桶名称，全局唯一
     *
     * @param string $bucketName
     */
    public function setBucketName($bucketName)
    {
        $this->set("BucketName", $bucketName);
    }

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

    /**
     * Certificate: 填写SSL证书文件内容（PEM编码）。证书文件内容填写格式：如果您的业务场景仅需确保服务端证书可信，则证书文件需要包含服务器证书（①）和中间证书（②）。如果您的中间证书和服务器证书是两个文件，您可以在证书链配置项填写中间证书内容即可。
     *
     * @return string|null
     */
    public function getCertificate()
    {
        return $this->get("Certificate");
    }

    /**
     * Certificate: 填写SSL证书文件内容（PEM编码）。证书文件内容填写格式：如果您的业务场景仅需确保服务端证书可信，则证书文件需要包含服务器证书（①）和中间证书（②）。如果您的中间证书和服务器证书是两个文件，您可以在证书链配置项填写中间证书内容即可。
     *
     * @param string $certificate
     */
    public function setCertificate($certificate)
    {
        $this->set("Certificate", $certificate);
    }

    /**
     * CertificateKey: 填写SSL证书私钥内容（PEM编码）。
     *
     * @return string|null
     */
    public function getCertificateKey()
    {
        return $this->get("CertificateKey");
    }

    /**
     * CertificateKey: 填写SSL证书私钥内容（PEM编码）。
     *
     * @param string $certificateKey
     */
    public function setCertificateKey($certificateKey)
    {
        $this->set("CertificateKey", $certificateKey);
    }

    /**
     * USSLId: ussl证书的资源ID
     *
     * @return string|null
     */
    public function getUSSLId()
    {
        return $this->get("USSLId");
    }

    /**
     * USSLId: ussl证书的资源ID
     *
     * @param string $usslId
     */
    public function setUSSLId($usslId)
    {
        $this->set("USSLId", $usslId);
    }
}
