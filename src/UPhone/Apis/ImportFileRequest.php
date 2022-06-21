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

class ImportFileRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ImportFile"]);
        $this->markRequired("UPhoneIds");
        $this->markRequired("FileName");
        $this->markRequired("CityId");
        $this->markRequired("URL");
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
     * UPhoneIds: 云手机ID
     *
     * @return string[]|null
     */
    public function getUPhoneIds()
    {
        return $this->get("UPhoneIds");
    }

    /**
     * UPhoneIds: 云手机ID
     *
     * @param string[] $uPhoneIds
     */
    public function setUPhoneIds(array $uPhoneIds)
    {
        $this->set("UPhoneIds", $uPhoneIds);
    }

    /**
     * FileName: 文件名
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->get("FileName");
    }

    /**
     * FileName: 文件名
     *
     * @param string $fileName
     */
    public function setFileName($fileName)
    {
        $this->set("FileName", $fileName);
    }

    /**
     * CityId: 城市。 参见 [云手机城市列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_cities)
     *
     * @return string|null
     */
    public function getCityId()
    {
        return $this->get("CityId");
    }

    /**
     * CityId: 城市。 参见 [云手机城市列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_cities)
     *
     * @param string $cityId
     */
    public function setCityId($cityId)
    {
        $this->set("CityId", $cityId);
    }

    /**
     * URL: 文件下载链接
     *
     * @return string|null
     */
    public function getURL()
    {
        return $this->get("URL");
    }

    /**
     * URL: 文件下载链接
     *
     * @param string $url
     */
    public function setURL($url)
    {
        $this->set("URL", $url);
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
