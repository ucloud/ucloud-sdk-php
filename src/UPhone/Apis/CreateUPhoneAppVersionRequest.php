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

class CreateUPhoneAppVersionRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUPhoneAppVersion"]);
        $this->markRequired("Name");
        $this->markRequired("AppId");
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
     * Name: 应用版本名称，最大字符长度为255。
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 应用版本名称，最大字符长度为255。
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * AppId: 应用的唯一标识ID。
     *
     * @return string|null
     */
    public function getAppId()
    {
        return $this->get("AppId");
    }

    /**
     * AppId: 应用的唯一标识ID。
     *
     * @param string $appId
     */
    public function setAppId($appId)
    {
        $this->set("AppId", $appId);
    }

    /**
     * URL: 应用版本相关的Apk文件存放的公网URL地址。
     *
     * @return string|null
     */
    public function getURL()
    {
        return $this->get("URL");
    }

    /**
     * URL: 应用版本相关的Apk文件存放的公网URL地址。
     *
     * @param string $url
     */
    public function setURL($url)
    {
        $this->set("URL", $url);
    }

    /**
     * Description: 应用版本描述。
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 应用版本描述。
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
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
