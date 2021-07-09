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
namespace UCloud\UPHost\Apis;

use UCloud\Core\Request\Request;

class DescribePHostImageRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "DescribePHostImage"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
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
     * ImageType: 镜像类别，枚举值，Base是基础镜像；
     *
     * @return string|null
     */
    public function getImageType(): string {
        return $this->get("ImageType");
    }

    /**
     * ImageType: 镜像类别，枚举值，Base是基础镜像；
     *
     * @param string $imageType
     */
    public function setImageType(string $imageType) {
        $this->set("ImageType", $imageType);
    }

    /**
     * ImageId: 镜像ID
     *
     * @return string[]|null
     */
    public function getImageId(): array {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像ID
     *
     * @param string[] $imageId
     */
    public function setImageId(array $imageId) {
        $this->set("ImageId", $imageId);
    }

    /**
     * Offset: 数据偏移量，默认为0
     *
     * @return int|null
     */
    public function getOffset(): int {
        return $this->get("Offset");
    }

    /**
     * Offset: 数据偏移量，默认为0
     *
     * @param int $offset
     */
    public function setOffset(int $offset) {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 返回数据长度，默认为20
     *
     * @return int|null
     */
    public function getLimit(): int {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回数据长度，默认为20
     *
     * @param int $limit
     */
    public function setLimit(int $limit) {
        $this->set("Limit", $limit);
    }

    /**
     * MachineType: 机器型号，只支持当前zone的展示机型
     *
     * @return string|null
     */
    public function getMachineType(): string {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 机器型号，只支持当前zone的展示机型
     *
     * @param string $machineType
     */
    public function setMachineType(string $machineType) {
        $this->set("MachineType", $machineType);
    }


}
