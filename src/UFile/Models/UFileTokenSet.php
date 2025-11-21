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

class UFileTokenSet extends Response
{
    

    /**
     * Region: 所属地区
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 所属地区
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * TokenId: 令牌ID
     *
     * @return string|null
     */
    public function getTokenId()
    {
        return $this->get("TokenId");
    }

    /**
     * TokenId: 令牌ID
     *
     * @param string $tokenId
     */
    public function setTokenId($tokenId)
    {
        $this->set("TokenId", $tokenId);
    }

    /**
     * TokenName: 令牌名称
     *
     * @return string|null
     */
    public function getTokenName()
    {
        return $this->get("TokenName");
    }

    /**
     * TokenName: 令牌名称
     *
     * @param string $tokenName
     */
    public function setTokenName($tokenName)
    {
        $this->set("TokenName", $tokenName);
    }

    /**
     * PublicKey: 令牌公钥
     *
     * @return string|null
     */
    public function getPublicKey()
    {
        return $this->get("PublicKey");
    }

    /**
     * PublicKey: 令牌公钥
     *
     * @param string $publicKey
     */
    public function setPublicKey($publicKey)
    {
        $this->set("PublicKey", $publicKey);
    }

    /**
     * PrivateKey: 令牌私钥
     *
     * @return string|null
     */
    public function getPrivateKey()
    {
        return $this->get("PrivateKey");
    }

    /**
     * PrivateKey: 令牌私钥
     *
     * @param string $privateKey
     */
    public function setPrivateKey($privateKey)
    {
        $this->set("PrivateKey", $privateKey);
    }

    /**
     * AllowedOps: 令牌允许执行的操作，[ TOKEN_ALLOW_NONE 没有权限, TOKEN_ALLOW_READ 下载权限, TOKEN_ALLOW_WRITE 上传权限, TOKEN_ALLOW_DELETE 删除权限, TOKEN_ALLOW_LIST 列表权限, TOKEN_ALLOW_IOP 图片处理权限]
     *
     * @return string[]|null
     */
    public function getAllowedOps()
    {
        return $this->get("AllowedOps");
    }

    /**
     * AllowedOps: 令牌允许执行的操作，[ TOKEN_ALLOW_NONE 没有权限, TOKEN_ALLOW_READ 下载权限, TOKEN_ALLOW_WRITE 上传权限, TOKEN_ALLOW_DELETE 删除权限, TOKEN_ALLOW_LIST 列表权限, TOKEN_ALLOW_IOP 图片处理权限]
     *
     * @param string[] $allowedOps
     */
    public function setAllowedOps(array $allowedOps)
    {
        $this->set("AllowedOps", $allowedOps);
    }

    /**
     * AllowedPrefixes: 令牌允许操作的key前缀
     *
     * @return string[]|null
     */
    public function getAllowedPrefixes()
    {
        return $this->get("AllowedPrefixes");
    }

    /**
     * AllowedPrefixes: 令牌允许操作的key前缀
     *
     * @param string[] $allowedPrefixes
     */
    public function setAllowedPrefixes(array $allowedPrefixes)
    {
        $this->set("AllowedPrefixes", $allowedPrefixes);
    }

    /**
     * AllowedBuckets: 令牌允许操作的bucket
     *
     * @return string[]|null
     */
    public function getAllowedBuckets()
    {
        return $this->get("AllowedBuckets");
    }

    /**
     * AllowedBuckets: 令牌允许操作的bucket
     *
     * @param string[] $allowedBuckets
     */
    public function setAllowedBuckets(array $allowedBuckets)
    {
        $this->set("AllowedBuckets", $allowedBuckets);
    }

    /**
     * ExpireTime: 令牌的超时时间点
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 令牌的超时时间点
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ModifyTime: 修改时间
     *
     * @return integer|null
     */
    public function getModifyTime()
    {
        return $this->get("ModifyTime");
    }

    /**
     * ModifyTime: 修改时间
     *
     * @param int $modifyTime
     */
    public function setModifyTime($modifyTime)
    {
        $this->set("ModifyTime", $modifyTime);
    }

    /**
     * BlackIPList: 令牌黑名单
     *
     * @return string[]|null
     */
    public function getBlackIPList()
    {
        return $this->get("BlackIPList");
    }

    /**
     * BlackIPList: 令牌黑名单
     *
     * @param string[] $blackIPList
     */
    public function setBlackIPList(array $blackIPList)
    {
        $this->set("BlackIPList", $blackIPList);
    }

    /**
     * WhiteIPList: 令牌白名单
     *
     * @return string[]|null
     */
    public function getWhiteIPList()
    {
        return $this->get("WhiteIPList");
    }

    /**
     * WhiteIPList: 令牌白名单
     *
     * @param string[] $whiteIPList
     */
    public function setWhiteIPList(array $whiteIPList)
    {
        $this->set("WhiteIPList", $whiteIPList);
    }
}
