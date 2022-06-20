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
namespace UCloud\UPhone\Apis;

use UCloud\Core\Request\Request;

class SetUPhoneConfigRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SetUPhoneConfig"]);
        $this->markRequired("CityId");
        $this->markRequired("UPhoneIds");
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
     * CityId: 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *
     * @return string|null
     */
    public function getCityId()
    {
        return $this->get("CityId");
    }

    /**
     * CityId: 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *
     * @param string $cityId
     */
    public function setCityId($cityId)
    {
        $this->set("CityId", $cityId);
    }

    /**
     * UPhoneIds: 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=云手机实例 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。
     *
     * @return string[]|null
     */
    public function getUPhoneIds()
    {
        return $this->get("UPhoneIds");
    }

    /**
     * UPhoneIds: 【数组】云手机实例的资源 ID，调用方式举例：UPhoneIds.0=云手机实例 1 的 UPhoneId，UPhoneIds.1=云手机实例 2 的 UPhoneId。
     *
     * @param string[] $uPhoneIds
     */
    public function setUPhoneIds(array $uPhoneIds)
    {
        $this->set("UPhoneIds", $uPhoneIds);
    }

    /**
     * Resolution: 云手机画面分辨率（宽x高） （例，1920x1080，中间是字母x）宽和高的取值范围[100,5000]
     *
     * @return string|null
     */
    public function getResolution()
    {
        return $this->get("Resolution");
    }

    /**
     * Resolution: 云手机画面分辨率（宽x高） （例，1920x1080，中间是字母x）宽和高的取值范围[100,5000]
     *
     * @param string $resolution
     */
    public function setResolution($resolution)
    {
        $this->set("Resolution", $resolution);
    }

    /**
     * Refresh: 云手机画面刷新率，即帧率（例，30）取值范围[1,200]
     *
     * @return string|null
     */
    public function getRefresh()
    {
        return $this->get("Refresh");
    }

    /**
     * Refresh: 云手机画面刷新率，即帧率（例，30）取值范围[1,200]
     *
     * @param string $refresh
     */
    public function setRefresh($refresh)
    {
        $this->set("Refresh", $refresh);
    }

    /**
     * Bitrate: 云手机画面传输码率（例，8000）取值范围[100,50000]
     *
     * @return string|null
     */
    public function getBitrate()
    {
        return $this->get("Bitrate");
    }

    /**
     * Bitrate: 云手机画面传输码率（例，8000）取值范围[100,50000]
     *
     * @param string $bitrate
     */
    public function setBitrate($bitrate)
    {
        $this->set("Bitrate", $bitrate);
    }

    /**
     * Async: 异步请求开关，只有为1的时候才是异步，不填或者其他数值为同步
     *
     * @return string|null
     */
    public function getAsync()
    {
        return $this->get("Async");
    }

    /**
     * Async: 异步请求开关，只有为1的时候才是异步，不填或者其他数值为同步
     *
     * @param string $async
     */
    public function setAsync($async)
    {
        $this->set("Async", $async);
    }

    /**
     * Dpi: 云手机dpi，取值范围[100,1000]
     *
     * @return string|null
     */
    public function getDpi()
    {
        return $this->get("Dpi");
    }

    /**
     * Dpi: 云手机dpi，取值范围[100,1000]
     *
     * @param string $dpi
     */
    public function setDpi($dpi)
    {
        $this->set("Dpi", $dpi);
    }

    /**
     * ProductType: 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     *
     * @return string|null
     */
    public function getProductType()
    {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 枚举值。当前操作的产品类型，1、uphone：云手机场景；2、uphone-server：云手机服务器场景。默认云手机服务器场景。
     *
     * @param string $productType
     */
    public function setProductType($productType)
    {
        $this->set("ProductType", $productType);
    }
}
