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

class DescribeUPhoneModelRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUPhoneModel"]);
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
     * UPhoneModelNames: 【数组】要获得信息的 UPhoneModel 名称。调用方式举例：UPhoneModelNames.0=希望获取信息的 UPhoneModel1，UPhoneModelNames.1=UPhoneModel2。 如果不传入，则返回当前 城市 所有符合条件的 UPhoneModel。
     *
     * @return string[]|null
     */
    public function getUPhoneModelNames()
    {
        return $this->get("UPhoneModelNames");
    }

    /**
     * UPhoneModelNames: 【数组】要获得信息的 UPhoneModel 名称。调用方式举例：UPhoneModelNames.0=希望获取信息的 UPhoneModel1，UPhoneModelNames.1=UPhoneModel2。 如果不传入，则返回当前 城市 所有符合条件的 UPhoneModel。
     *
     * @param string[] $uPhoneModelNames
     */
    public function setUPhoneModelNames(array $uPhoneModelNames)
    {
        $this->set("UPhoneModelNames", $uPhoneModelNames);
    }

    /**
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 返回数据长度，默认为20，最大100
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回数据长度，默认为20，最大100
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
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
