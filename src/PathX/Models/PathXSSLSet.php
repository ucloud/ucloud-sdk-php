<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class PathXSSLSet extends Response {
    

    /**
     * SSLId: SSL证书的Id
     *
     * @return string|null
     */
    public function getSSLId(): string {
        return $this->get("SSLId");
    }

    /**
     * SSLId: SSL证书的Id
     *
     * @param string $sslId
     */
    public function setSSLId(string $sslId) {
        $this->set("SSLId", $sslId);
    }

    /**
     * SSLName: SSL证书的名字
     *
     * @return string|null
     */
    public function getSSLName(): string {
        return $this->get("SSLName");
    }

    /**
     * SSLName: SSL证书的名字
     *
     * @param string $sslName
     */
    public function setSSLName(string $sslName) {
        $this->set("SSLName", $sslName);
    }

    /**
     * SubjectName: 证书域名
     *
     * @return string|null
     */
    public function getSubjectName(): string {
        return $this->get("SubjectName");
    }

    /**
     * SubjectName: 证书域名
     *
     * @param string $subjectName
     */
    public function setSubjectName(string $subjectName) {
        $this->set("SubjectName", $subjectName);
    }

    /**
     * ExpireTime: 证书过期时间 时间戳
     *
     * @return int|null
     */
    public function getExpireTime(): int {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 证书过期时间 时间戳
     *
     * @param int $expireTime
     */
    public function setExpireTime(int $expireTime) {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * SourceType: 证书来源，0：用户上传 1: 免费颁发
     *
     * @return int|null
     */
    public function getSourceType(): int {
        return $this->get("SourceType");
    }

    /**
     * SourceType: 证书来源，0：用户上传 1: 免费颁发
     *
     * @param int $sourceType
     */
    public function setSourceType(int $sourceType) {
        $this->set("SourceType", $sourceType);
    }

    /**
     * SSLMD5: SSL证书（用户证书、私钥、ca证书合并）内容md5值
     *
     * @return string|null
     */
    public function getSSLMD5(): string {
        return $this->get("SSLMD5");
    }

    /**
     * SSLMD5: SSL证书（用户证书、私钥、ca证书合并）内容md5值
     *
     * @param string $sslmd5
     */
    public function setSSLMD5(string $sslmd5) {
        $this->set("SSLMD5", $sslmd5);
    }

    /**
     * CreateTime: SSL证书的创建时间 时间戳
     *
     * @return int|null
     */
    public function getCreateTime(): int {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: SSL证书的创建时间 时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime) {
        $this->set("CreateTime", $createTime);
    }

    /**
     * SSLBindedTargetSet: SSL证书绑定的对象
     *
     * @return SSLBindedTargetSet[]|null
     */
    public function getSSLBindedTargetSet(): array {
        $items = $this->get("SSLBindedTargetSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SSLBindedTargetSet($item));
        }
        return $result;
    }

    /**
     * SSLBindedTargetSet: SSL证书绑定的对象
     *
     * @param SSLBindedTargetSet[] $sslBindedTargetSet
     */
    public function setSSLBindedTargetSet(array $sslBindedTargetSet) {
        $result = [];
        foreach ($sslBindedTargetSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * SSLContent: SSL证书内容
     *
     * @return string|null
     */
    public function getSSLContent(): string {
        return $this->get("SSLContent");
    }

    /**
     * SSLContent: SSL证书内容
     *
     * @param string $sslContent
     */
    public function setSSLContent(string $sslContent) {
        $this->set("SSLContent", $sslContent);
    }


}
