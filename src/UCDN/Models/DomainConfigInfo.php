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

class DomainConfigInfo extends Response
{
    

    /**
     * AreaCode: 查询带宽区域 cn代表国内 abroad代表海外 all表示全部区域
     *
     * @return string|null
     */
    public function getAreaCode(): string
    {
        return $this->get("AreaCode");
    }

    /**
     * AreaCode: 查询带宽区域 cn代表国内 abroad代表海外 all表示全部区域
     *
     * @param string $areaCode
     */
    public function setAreaCode(string $areaCode)
    {
        $this->set("AreaCode", $areaCode);
    }

    /**
     * CdnType: 加速域名的业务类型，web代表网站，stream代表视频 ，download 代表下载
     *
     * @return string|null
     */
    public function getCdnType(): string
    {
        return $this->get("CdnType");
    }

    /**
     * CdnType: 加速域名的业务类型，web代表网站，stream代表视频 ，download 代表下载
     *
     * @param string $cdnType
     */
    public function setCdnType(string $cdnType)
    {
        $this->set("CdnType", $cdnType);
    }

    /**
     * Status: 创建的加速域名的当前的状态。check代表审核中，checkSuccess代表审核通过，checkFail代表审核失败，enable代表加速中，disable代表停止加速，delete代表删除加速enableing代表正在开启加速，disableing代表正在停止加速中，deleteing代表删除中
     *
     * @return string|null
     */
    public function getStatus(): string
    {
        return $this->get("Status");
    }

    /**
     * Status: 创建的加速域名的当前的状态。check代表审核中，checkSuccess代表审核通过，checkFail代表审核失败，enable代表加速中，disable代表停止加速，delete代表删除加速enableing代表正在开启加速，disableing代表正在停止加速中，deleteing代表删除中
     *
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->set("Status", $status);
    }

    /**
     * Cname: cdn域名。创建加速域名生成的cdn域名，用于设置CNAME记录
     *
     * @return string|null
     */
    public function getCname(): string
    {
        return $this->get("Cname");
    }

    /**
     * Cname: cdn域名。创建加速域名生成的cdn域名，用于设置CNAME记录
     *
     * @param string $cname
     */
    public function setCname(string $cname)
    {
        $this->set("Cname", $cname);
    }

    /**
     * CreateTime: 域名创建的时间。格式：时间戳
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 域名创建的时间。格式：时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * TestUrl: 测试url。用于域名创建加速时的测试
     *
     * @return string|null
     */
    public function getTestUrl(): string
    {
        return $this->get("TestUrl");
    }

    /**
     * TestUrl: 测试url。用于域名创建加速时的测试
     *
     * @param string $testUrl
     */
    public function setTestUrl(string $testUrl)
    {
        $this->set("TestUrl", $testUrl);
    }

    /**
     * HttpsStatusCn: 国内https状态 enableing-开启中 fail-开启失败 enable-启用 disable-未启用
     *
     * @return string|null
     */
    public function getHttpsStatusCn(): string
    {
        return $this->get("HttpsStatusCn");
    }

    /**
     * HttpsStatusCn: 国内https状态 enableing-开启中 fail-开启失败 enable-启用 disable-未启用
     *
     * @param string $httpsStatusCn
     */
    public function setHttpsStatusCn(string $httpsStatusCn)
    {
        $this->set("HttpsStatusCn", $httpsStatusCn);
    }

    /**
     * HttpsStatusAbroad: 国外https状态 enableing-开启中  fail-开启失败 enable-启用 disable-未启用
     *
     * @return string|null
     */
    public function getHttpsStatusAbroad(): string
    {
        return $this->get("HttpsStatusAbroad");
    }

    /**
     * HttpsStatusAbroad: 国外https状态 enableing-开启中  fail-开启失败 enable-启用 disable-未启用
     *
     * @param string $httpsStatusAbroad
     */
    public function setHttpsStatusAbroad(string $httpsStatusAbroad)
    {
        $this->set("HttpsStatusAbroad", $httpsStatusAbroad);
    }

    /**
     * CertNameCn: 国内证书名称
     *
     * @return string|null
     */
    public function getCertNameCn(): string
    {
        return $this->get("CertNameCn");
    }

    /**
     * CertNameCn: 国内证书名称
     *
     * @param string $certNameCn
     */
    public function setCertNameCn(string $certNameCn)
    {
        $this->set("CertNameCn", $certNameCn);
    }

    /**
     * CertNameAbroad: 国外证书名称
     *
     * @return string|null
     */
    public function getCertNameAbroad(): string
    {
        return $this->get("CertNameAbroad");
    }

    /**
     * CertNameAbroad: 国外证书名称
     *
     * @param string $certNameAbroad
     */
    public function setCertNameAbroad(string $certNameAbroad)
    {
        $this->set("CertNameAbroad", $certNameAbroad);
    }

    /**
     * Tag: 业务组：Default
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组：Default
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * DomainId: 域名Id
     *
     * @return string|null
     */
    public function getDomainId(): string
    {
        return $this->get("DomainId");
    }

    /**
     * DomainId: 域名Id
     *
     * @param string $domainId
     */
    public function setDomainId(string $domainId)
    {
        $this->set("DomainId", $domainId);
    }

    /**
     * Domain: 域名
     *
     * @return string|null
     */
    public function getDomain(): string
    {
        return $this->get("Domain");
    }

    /**
     * Domain: 域名
     *
     * @param string $domain
     */
    public function setDomain(string $domain)
    {
        $this->set("Domain", $domain);
    }

    /**
     * OriginConf: 源站配置 参考OriginConf
     *
     * @return OriginConf|null
     */
    public function getOriginConf(): OriginConf
    {
        return new OriginConf($this->get("OriginConf"));
    }

    /**
     * OriginConf: 源站配置 参考OriginConf
     *
     * @param OriginConf $originConf
     */
    public function setOriginConf(OriginConf $originConf)
    {
        $this->set("OriginConf", $originConf->getAll());
    }

    /**
     * AccessControlConf: 访问控制配置 参考AccessControlConf
     *
     * @return AccessControlConf|null
     */
    public function getAccessControlConf(): AccessControlConf
    {
        return new AccessControlConf($this->get("AccessControlConf"));
    }

    /**
     * AccessControlConf: 访问控制配置 参考AccessControlConf
     *
     * @param AccessControlConf $accessControlConf
     */
    public function setAccessControlConf(AccessControlConf $accessControlConf)
    {
        $this->set("AccessControlConf", $accessControlConf->getAll());
    }

    /**
     * CacheConf: 缓存配置 参考CacheAllConfig
     *
     * @return CacheAllConfig|null
     */
    public function getCacheConf(): CacheAllConfig
    {
        return new CacheAllConfig($this->get("CacheConf"));
    }

    /**
     * CacheConf: 缓存配置 参考CacheAllConfig
     *
     * @param CacheAllConfig $cacheConf
     */
    public function setCacheConf(CacheAllConfig $cacheConf)
    {
        $this->set("CacheConf", $cacheConf->getAll());
    }

    /**
     * AdvancedConf: 高级配置 参考AdvancedConf
     *
     * @return AdvancedConf|null
     */
    public function getAdvancedConf(): AdvancedConf
    {
        return new AdvancedConf($this->get("AdvancedConf"));
    }

    /**
     * AdvancedConf: 高级配置 参考AdvancedConf
     *
     * @param AdvancedConf $advancedConf
     */
    public function setAdvancedConf(AdvancedConf $advancedConf)
    {
        $this->set("AdvancedConf", $advancedConf->getAll());
    }
}
