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

class DescribeUFileTokenRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUFileToken"]);
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
     * TokenId: 令牌ID，只返回指定ID信息，否则拉取所有令牌
     *
     * @return string|null
     */
    public function getTokenId()
    {
        return $this->get("TokenId");
    }

    /**
     * TokenId: 令牌ID，只返回指定ID信息，否则拉取所有令牌
     *
     * @param string $tokenId
     */
    public function setTokenId($tokenId)
    {
        $this->set("TokenId", $tokenId);
    }

    /**
     * TokenName: 令牌名称，只返回指定令牌名称信息，否则拉取所有令牌
     *
     * @return string|null
     */
    public function getTokenName()
    {
        return $this->get("TokenName");
    }

    /**
     * TokenName: 令牌名称，只返回指定令牌名称信息，否则拉取所有令牌
     *
     * @param string $tokenName
     */
    public function setTokenName($tokenName)
    {
        $this->set("TokenName", $tokenName);
    }

    /**
     * Display: 0表示显示部分token信息；不传递和其他情况表示显示全部token信息
     *
     * @return integer|null
     */
    public function getDisplay()
    {
        return $this->get("Display");
    }

    /**
     * Display: 0表示显示部分token信息；不传递和其他情况表示显示全部token信息
     *
     * @param int $display
     */
    public function setDisplay($display)
    {
        $this->set("Display", $display);
    }
}
