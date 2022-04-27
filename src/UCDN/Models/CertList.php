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
namespace UCloud\UCDN\Models;

use UCloud\Core\Response\Response;

class CertList extends Response
{
    

    /**
     * CertName: 证书名
     *
     * @return string|null
     */
    public function getCertName(): string
    {
        return $this->get("CertName");
    }

    /**
     * CertName: 证书名
     *
     * @param string $certName
     */
    public function setCertName(string $certName)
    {
        $this->set("CertName", $certName);
    }

    /**
     * CommonName: 通用名
     *
     * @return string|null
     */
    public function getCommonName(): string
    {
        return $this->get("CommonName");
    }

    /**
     * CommonName: 通用名
     *
     * @param string $commonName
     */
    public function setCommonName(string $commonName)
    {
        $this->set("CommonName", $commonName);
    }

    /**
     * DnsName: dns名称
     *
     * @return string|null
     */
    public function getDnsName(): string
    {
        return $this->get("DnsName");
    }

    /**
     * DnsName: dns名称
     *
     * @param string $dnsName
     */
    public function setDnsName(string $dnsName)
    {
        $this->set("DnsName", $dnsName);
    }

    /**
     * BeginTime: 证书开始时间
     *
     * @return integer|null
     */
    public function getBeginTime(): int
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 证书开始时间
     *
     * @param int $beginTime
     */
    public function setBeginTime(int $beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }

    /**
     * EndTime: 证书获取时间
     *
     * @return integer|null
     */
    public function getEndTime(): int
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 证书获取时间
     *
     * @param int $endTime
     */
    public function setEndTime(int $endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * DomainCount: 已配置域名个数
     *
     * @return integer|null
     */
    public function getDomainCount(): int
    {
        return $this->get("DomainCount");
    }

    /**
     * DomainCount: 已配置域名个数
     *
     * @param int $domainCount
     */
    public function setDomainCount(int $domainCount)
    {
        $this->set("DomainCount", $domainCount);
    }

    /**
     * UserCert: 证书内容
     *
     * @return string|null
     */
    public function getUserCert(): string
    {
        return $this->get("UserCert");
    }

    /**
     * UserCert: 证书内容
     *
     * @param string $userCert
     */
    public function setUserCert(string $userCert)
    {
        $this->set("UserCert", $userCert);
    }

    /**
     * CaCert: ca证内容
     *
     * @return string|null
     */
    public function getCaCert(): string
    {
        return $this->get("CaCert");
    }

    /**
     * CaCert: ca证内容
     *
     * @param string $caCert
     */
    public function setCaCert(string $caCert)
    {
        $this->set("CaCert", $caCert);
    }

    /**
     * Domains: 已配置的域名列表
     *
     * @return string[]|null
     */
    public function getDomains(): array
    {
        return $this->get("Domains");
    }

    /**
     * Domains: 已配置的域名列表
     *
     * @param string[] $domains
     */
    public function setDomains(array $domains)
    {
        $this->set("Domains", $domains);
    }
}
