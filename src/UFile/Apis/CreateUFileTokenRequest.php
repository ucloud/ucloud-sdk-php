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
namespace UCloud\UFile\Apis;

use UCloud\Core\Request\Request;

class CreateUFileTokenRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUFileToken"]);
        $this->markRequired("TokenName");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
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
     * AllowedOps: 令牌允许执行的操作，[ TOKEN_ALLOW_NONE , TOKEN_ALLOW_READ , TOKEN_ALLOW_WRITE , TOKEN_ALLOW_DELETE , TOKEN_ALLOW_LIST, TOKEN_ALLOW_IOP , TOKEN_ALLOW_DP  ]。默认TOKEN_ALLOW_NONE
     *
     * @return string[]|null
     */
    public function getAllowedOps()
    {
        return $this->get("AllowedOps");
    }

    /**
     * AllowedOps: 令牌允许执行的操作，[ TOKEN_ALLOW_NONE , TOKEN_ALLOW_READ , TOKEN_ALLOW_WRITE , TOKEN_ALLOW_DELETE , TOKEN_ALLOW_LIST, TOKEN_ALLOW_IOP , TOKEN_ALLOW_DP  ]。默认TOKEN_ALLOW_NONE
     *
     * @param string[] $allowedOps
     */
    public function setAllowedOps(array $allowedOps)
    {
        $this->set("AllowedOps", $allowedOps);
    }

    /**
     * AllowedPrefixes: 令牌允许操作的key前缀，默认*表示全部
     *
     * @return string[]|null
     */
    public function getAllowedPrefixes()
    {
        return $this->get("AllowedPrefixes");
    }

    /**
     * AllowedPrefixes: 令牌允许操作的key前缀，默认*表示全部
     *
     * @param string[] $allowedPrefixes
     */
    public function setAllowedPrefixes(array $allowedPrefixes)
    {
        $this->set("AllowedPrefixes", $allowedPrefixes);
    }

    /**
     * AllowedBuckets: 令牌允许操作的bucket，默认*表示全部
     *
     * @return string[]|null
     */
    public function getAllowedBuckets()
    {
        return $this->get("AllowedBuckets");
    }

    /**
     * AllowedBuckets: 令牌允许操作的bucket，默认*表示全部
     *
     * @param string[] $allowedBuckets
     */
    public function setAllowedBuckets(array $allowedBuckets)
    {
        $this->set("AllowedBuckets", $allowedBuckets);
    }

    /**
     * ExpireTime: Unix 时间戳，精确到秒，为令牌过期时间点。默认过期时间为一天（即当前Unix时间戳+86400）；注意：过期时间不能超过 4102416000
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: Unix 时间戳，精确到秒，为令牌过期时间点。默认过期时间为一天（即当前Unix时间戳+86400）；注意：过期时间不能超过 4102416000
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }
}
