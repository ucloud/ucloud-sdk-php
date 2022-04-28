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
    public function getCertName()
    {
        return $this->get("CertName");
    }

    /**
     * CertName: 证书名
     *
     * @param string $certName
     */
    public function setCertName($certName)
    {
        $this->set("CertName", $certName);
    }

    /**
     * CommonName: 通用名
     *
     * @return string|null
     */
    public function getCommonName()
    {
        return $this->get("CommonName");
    }

    /**
     * CommonName: 通用名
     *
     * @param string $commonName
     */
    public function setCommonName($commonName)
    {
        $this->set("CommonName", $commonName);
    }

    /**
     * DnsName: dns名称
     *
     * @return string|null
     */
    public function getDnsName()
    {
        return $this->get("DnsName");
    }

    /**
     * DnsName: dns名称
     *
     * @param string $dnsName
     */
    public function setDnsName($dnsName)
    {
        $this->set("DnsName", $dnsName);
    }

    /**
     * BeginTime: 证书开始时间
     *
     * @return integer|null
     */
    public function getBeginTime()
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 证书开始时间
     *
     * @param int $beginTime
     */
    public function setBeginTime($beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }

    /**
     * EndTime: 证书获取时间
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 证书获取时间
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * DomainCount: 已配置域名个数
     *
     * @return integer|null
     */
    public function getDomainCount()
    {
        return $this->get("DomainCount");
    }

    /**
     * DomainCount: 已配置域名个数
     *
     * @param int $domainCount
     */
    public function setDomainCount($domainCount)
    {
        $this->set("DomainCount", $domainCount);
    }

    /**
     * UserCert: 证书内容
     *
     * @return string|null
     */
    public function getUserCert()
    {
        return $this->get("UserCert");
    }

    /**
     * UserCert: 证书内容
     *
     * @param string $userCert
     */
    public function setUserCert($userCert)
    {
        $this->set("UserCert", $userCert);
    }

    /**
     * CaCert: ca证内容
     *
     * @return string|null
     */
    public function getCaCert()
    {
        return $this->get("CaCert");
    }

    /**
     * CaCert: ca证内容
     *
     * @param string $caCert
     */
    public function setCaCert($caCert)
    {
        $this->set("CaCert", $caCert);
    }

    /**
     * Domains: 已配置的域名列表
     *
     * @return string[]|null
     */
    public function getDomains()
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
