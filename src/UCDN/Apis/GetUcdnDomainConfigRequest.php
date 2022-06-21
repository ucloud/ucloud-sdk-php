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
namespace UCloud\UCDN\Apis;

use UCloud\Core\Request\Request;

class GetUcdnDomainConfigRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUcdnDomainConfig"]);
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
     * Offset: 数据偏移量，默认0，非负整数
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 数据偏移量，默认0，非负整数
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 返回数据长度， 默认全部，非负整数
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回数据长度， 默认全部，非负整数
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * DomainId: 域名id，创建域名时生成的id。默认获取账号下的所有域名信息,n为自然数,从DomainId.0开始。
     *
     * @return string[]|null
     */
    public function getDomainId()
    {
        return $this->get("DomainId");
    }

    /**
     * DomainId: 域名id，创建域名时生成的id。默认获取账号下的所有域名信息,n为自然数,从DomainId.0开始。
     *
     * @param string[] $domainId
     */
    public function setDomainId(array $domainId)
    {
        $this->set("DomainId", $domainId);
    }

    /**
     * ChannelType: 产品类型ucdn，可不填，默认为ucdn
     *
     * @return string|null
     */
    public function getChannelType()
    {
        return $this->get("ChannelType");
    }

    /**
     * ChannelType: 产品类型ucdn，可不填，默认为ucdn
     *
     * @param string $channelType
     */
    public function setChannelType($channelType)
    {
        $this->set("ChannelType", $channelType);
    }


}
