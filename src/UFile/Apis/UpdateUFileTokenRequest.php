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
namespace UCloud\UFile\Apis;

use UCloud\Core\Request\Request;

class UpdateUFileTokenRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUFileToken"]);
        $this->markRequired("ProjectId");
        $this->markRequired("TokenId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * TokenId: 令牌ID
     *
     * @return string|null
     */
    public function getTokenId(): string
    {
        return $this->get("TokenId");
    }

    /**
     * TokenId: 令牌ID
     *
     * @param string $tokenId
     */
    public function setTokenId(string $tokenId)
    {
        $this->set("TokenId", $tokenId);
    }

    /**
     * TokenName: 令牌名称
     *
     * @return string|null
     */
    public function getTokenName(): string
    {
        return $this->get("TokenName");
    }

    /**
     * TokenName: 令牌名称
     *
     * @param string $tokenName
     */
    public function setTokenName(string $tokenName)
    {
        $this->set("TokenName", $tokenName);
    }

    /**
     * AllowedOps: 令牌允许执行的操作，[ TOKEN_ALLOW_NONE , TOKEN_ALLOW_READ , TOKEN_ALLOW_WRITE , TOKEN_ALLOW_DELETE , TOKEN_ALLOW_LIST, TOKEN_ALLOW_IOP , TOKEN_ALLOW_DP ]
     *
     * @return string[]|null
     */
    public function getAllowedOps(): array
    {
        return $this->get("AllowedOps");
    }

    /**
     * AllowedOps: 令牌允许执行的操作，[ TOKEN_ALLOW_NONE , TOKEN_ALLOW_READ , TOKEN_ALLOW_WRITE , TOKEN_ALLOW_DELETE , TOKEN_ALLOW_LIST, TOKEN_ALLOW_IOP , TOKEN_ALLOW_DP ]
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
    public function getAllowedPrefixes(): array
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
    public function getAllowedBuckets(): array
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
     * ExpireTime: 令牌的超时时间点（时间戳）;注意：过期时间不能超过 4102416000
     *
     * @return integer|null
     */
    public function getExpireTime(): int
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 令牌的超时时间点（时间戳）;注意：过期时间不能超过 4102416000
     *
     * @param int $expireTime
     */
    public function setExpireTime(int $expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }
}
