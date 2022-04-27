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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class ULBSSLSet extends Response
{
    

    /**
     * SSLId: SSL证书的Id
     *
     * @return string|null
     */
    public function getSSLId(): string
    {
        return $this->get("SSLId");
    }

    /**
     * SSLId: SSL证书的Id
     *
     * @param string $sslId
     */
    public function setSSLId(string $sslId)
    {
        $this->set("SSLId", $sslId);
    }

    /**
     * SSLName: SSL证书的名字
     *
     * @return string|null
     */
    public function getSSLName(): string
    {
        return $this->get("SSLName");
    }

    /**
     * SSLName: SSL证书的名字
     *
     * @param string $sslName
     */
    public function setSSLName(string $sslName)
    {
        $this->set("SSLName", $sslName);
    }

    /**
     * SSLType: SSL证书类型，暂时只有 Pem 一种类型
     *
     * @return string|null
     */
    public function getSSLType(): string
    {
        return $this->get("SSLType");
    }

    /**
     * SSLType: SSL证书类型，暂时只有 Pem 一种类型
     *
     * @param string $sslType
     */
    public function setSSLType(string $sslType)
    {
        $this->set("SSLType", $sslType);
    }

    /**
     * SSLContent: SSL证书的内容
     *
     * @return string|null
     */
    public function getSSLContent(): string
    {
        return $this->get("SSLContent");
    }

    /**
     * SSLContent: SSL证书的内容
     *
     * @param string $sslContent
     */
    public function setSSLContent(string $sslContent)
    {
        $this->set("SSLContent", $sslContent);
    }

    /**
     * CreateTime: SSL证书的创建时间
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: SSL证书的创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * HashValue: SSL证书的HASH值
     *
     * @return string|null
     */
    public function getHashValue(): string
    {
        return $this->get("HashValue");
    }

    /**
     * HashValue: SSL证书的HASH值
     *
     * @param string $hashValue
     */
    public function setHashValue(string $hashValue)
    {
        $this->set("HashValue", $hashValue);
    }

    /**
     * BindedTargetSet: SSL证书绑定到的对象
     *
     * @return SSLBindedTargetSet[]|null
     */
    public function getBindedTargetSet(): array
    {
        $items = $this->get("BindedTargetSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SSLBindedTargetSet($item));
        }
        return $result;
    }

    /**
     * BindedTargetSet: SSL证书绑定到的对象
     *
     * @param SSLBindedTargetSet[] $bindedTargetSet
     */
    public function setBindedTargetSet(array $bindedTargetSet)
    {
        $result = [];
        foreach ($bindedTargetSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
