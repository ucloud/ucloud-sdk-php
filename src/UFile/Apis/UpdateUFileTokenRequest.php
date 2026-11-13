<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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
        $this->markRequired("TokenId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
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
     * AllowedOps: 令牌允许执行的操作，[ TOKEN_ALLOW_NONE , TOKEN_ALLOW_READ , TOKEN_ALLOW_WRITE , TOKEN_ALLOW_DELETE , TOKEN_ALLOW_LIST, TOKEN_ALLOW_IOP , TOKEN_ALLOW_DP ，TOKEN_DENY_UPDATE]
     *
     * @return string[]|null
     */
    public function getAllowedOps()
    {
        return $this->get("AllowedOps");
    }

    /**
     * AllowedOps: 令牌允许执行的操作，[ TOKEN_ALLOW_NONE , TOKEN_ALLOW_READ , TOKEN_ALLOW_WRITE , TOKEN_ALLOW_DELETE , TOKEN_ALLOW_LIST, TOKEN_ALLOW_IOP , TOKEN_ALLOW_DP ，TOKEN_DENY_UPDATE]
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
     * ExpireTime: 令牌的超时时间点（时间戳）;注意：过期时间不能超过 4102416000
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 令牌的超时时间点（时间戳）;注意：过期时间不能超过 4102416000
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * BlackIPList: 令牌黑名单，支持ipv4，ipv6格式。
     *
     * @return string[]|null
     */
    public function getBlackIPList()
    {
        return $this->get("BlackIPList");
    }

    /**
     * BlackIPList: 令牌黑名单，支持ipv4，ipv6格式。
     *
     * @param string[] $blackIPList
     */
    public function setBlackIPList(array $blackIPList)
    {
        $this->set("BlackIPList", $blackIPList);
    }

    /**
     * WhiteIPList: 令牌黑名单，支持ipv4，ipv6格式。
     *
     * @return string[]|null
     */
    public function getWhiteIPList()
    {
        return $this->get("WhiteIPList");
    }

    /**
     * WhiteIPList: 令牌黑名单，支持ipv4，ipv6格式。
     *
     * @param string[] $whiteIPList
     */
    public function setWhiteIPList(array $whiteIPList)
    {
        $this->set("WhiteIPList", $whiteIPList);
    }

    /**
     * FakeRegion: bucket的可用区
     *
     * @return string|null
     */
    public function getFakeRegion()
    {
        return $this->get("FakeRegion");
    }

    /**
     * FakeRegion: bucket的可用区
     *
     * @param string $fakeRegion
     */
    public function setFakeRegion($fakeRegion)
    {
        $this->set("FakeRegion", $fakeRegion);
    }
}
