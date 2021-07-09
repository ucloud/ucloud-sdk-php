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
namespace UCloud\UNet\Apis;

use UCloud\Core\Request\Request;

class UpdateFirewallAttributeRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateFirewallAttribute"]);
        $this->markRequired("Region");
        $this->markRequired("FWId");
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
     * FWId: 防火墙资源ID
     *
     * @return string|null
     */
    public function getFWId(): string
    {
        return $this->get("FWId");
    }

    /**
     * FWId: 防火墙资源ID
     *
     * @param string $fwId
     */
    public function setFWId(string $fwId)
    {
        $this->set("FWId", $fwId);
    }

    /**
     * Name: 防火墙名称，默认为空，为空则不做修改。Name,Tag,Remark必须填写1个及以上
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: 防火墙名称，默认为空，为空则不做修改。Name,Tag,Remark必须填写1个及以上
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * Tag: 防火墙业务组，默认为空，为空则不做修改。Name,Tag,Remark必须填写1个及以上
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 防火墙业务组，默认为空，为空则不做修改。Name,Tag,Remark必须填写1个及以上
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 防火墙备注，默认为空，为空则不做修改。Name,Tag,Remark必须填写1个及以上
     *
     * @return string|null
     */
    public function getRemark(): string
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 防火墙备注，默认为空，为空则不做修改。Name,Tag,Remark必须填写1个及以上
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }
}
