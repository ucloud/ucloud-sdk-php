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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class UpdateUDBParamGroupRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUDBParamGroup"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("GroupId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region) {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone(): string {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone) {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * GroupId: 配置参数组id，使用DescribeUDBParamGroup获得
     *
     * @return int|null
     */
    public function getGroupId(): int {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 配置参数组id，使用DescribeUDBParamGroup获得
     *
     * @param int $groupId
     */
    public function setGroupId(int $groupId) {
        $this->set("GroupId", $groupId);
    }

    /**
     * Key: 参数名称（与Value配合使用）
     *
     * @return string|null
     */
    public function getKey(): string {
        return $this->get("Key");
    }

    /**
     * Key: 参数名称（与Value配合使用）
     *
     * @param string $key
     */
    public function setKey(string $key) {
        $this->set("Key", $key);
    }

    /**
     * Value: 参数值（与Key配合使用）
     *
     * @return string|null
     */
    public function getValue(): string {
        return $this->get("Value");
    }

    /**
     * Value: 参数值（与Key配合使用）
     *
     * @param string $value
     */
    public function setValue(string $value) {
        $this->set("Value", $value);
    }

    /**
     * Name: 配置文件的名字，不传时认为不修改名字，传了则不能为空
     *
     * @return string|null
     */
    public function getName(): string {
        return $this->get("Name");
    }

    /**
     * Name: 配置文件的名字，不传时认为不修改名字，传了则不能为空
     *
     * @param string $name
     */
    public function setName(string $name) {
        $this->set("Name", $name);
    }

    /**
     * Description: 配置文件的描述，不传时认为不修改
     *
     * @return string|null
     */
    public function getDescription(): string {
        return $this->get("Description");
    }

    /**
     * Description: 配置文件的描述，不传时认为不修改
     *
     * @param string $description
     */
    public function setDescription(string $description) {
        $this->set("Description", $description);
    }

    /**
     * RegionFlag: 该配置文件是否是地域级别配置文件，默认是false
     *
     * @return boolean|null
     */
    public function getRegionFlag(): bool {
        return $this->get("RegionFlag");
    }

    /**
     * RegionFlag: 该配置文件是否是地域级别配置文件，默认是false
     *
     * @param boolean $regionFlag
     */
    public function setRegionFlag(bool $regionFlag) {
        $this->set("RegionFlag", $regionFlag);
    }


}
