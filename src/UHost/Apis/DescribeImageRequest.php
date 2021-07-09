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
namespace UCloud\UHost\Apis;

use UCloud\Core\Request\Request;

class DescribeImageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeImage"]);
        $this->markRequired("Region");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * ImageType: 镜像类型。标准镜像：Base，镜像市场：Business， 自定义镜像：Custom，默认返回所有类型
     *
     * @return string|null
     */
    public function getImageType(): string
    {
        return $this->get("ImageType");
    }

    /**
     * ImageType: 镜像类型。标准镜像：Base，镜像市场：Business， 自定义镜像：Custom，默认返回所有类型
     *
     * @param string $imageType
     */
    public function setImageType(string $imageType)
    {
        $this->set("ImageType", $imageType);
    }

    /**
     * OsType: 操作系统类型：Linux， Windows 默认返回所有类型
     *
     * @return string|null
     */
    public function getOsType(): string
    {
        return $this->get("OsType");
    }

    /**
     * OsType: 操作系统类型：Linux， Windows 默认返回所有类型
     *
     * @param string $osType
     */
    public function setOsType(string $osType)
    {
        $this->set("OsType", $osType);
    }

    /**
     * ImageId: 镜像Id
     *
     * @return string|null
     */
    public function getImageId(): string
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像Id
     *
     * @param string $imageId
     */
    public function setImageId(string $imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @return integer|null
     */
    public function getOffset(): int
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @param int $offset
     */
    public function setOffset(int $offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 返回数据长度，默认为20
     *
     * @return integer|null
     */
    public function getLimit(): int
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回数据长度，默认为20
     *
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * PriceSet: 是否返回价格：1返回，0不返回；默认不返回
     *
     * @return integer|null
     */
    public function getPriceSet(): int
    {
        return $this->get("PriceSet");
    }

    /**
     * PriceSet: 是否返回价格：1返回，0不返回；默认不返回
     *
     * @param int $priceSet
     */
    public function setPriceSet(int $priceSet)
    {
        $this->set("PriceSet", $priceSet);
    }
}
