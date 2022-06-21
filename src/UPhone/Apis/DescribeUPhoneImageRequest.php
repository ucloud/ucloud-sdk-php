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

class DescribeUPhoneImageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUPhoneImage"]);
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
     * Type: 希望获取的镜像类型，枚举值，不传则返回全部类型的镜像： <br /> >标准镜像: BASE; <br />>自制镜像: CUSTOM;  <br />
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 希望获取的镜像类型，枚举值，不传则返回全部类型的镜像： <br /> >标准镜像: BASE; <br />>自制镜像: CUSTOM;  <br />
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * ImageIds: 【数组】云手机镜像资源 ID，调用方式举例：ImageIds.0=希望获取信息的云手机镜像 1，ImageIds.1=云手机镜像 2。 如果不传入，则返回当前 城市 所有符合条件的云手机镜像。
     *
     * @return string[]|null
     */
    public function getImageIds()
    {
        return $this->get("ImageIds");
    }

    /**
     * ImageIds: 【数组】云手机镜像资源 ID，调用方式举例：ImageIds.0=希望获取信息的云手机镜像 1，ImageIds.1=云手机镜像 2。 如果不传入，则返回当前 城市 所有符合条件的云手机镜像。
     *
     * @param string[] $imageIds
     */
    public function setImageIds(array $imageIds)
    {
        $this->set("ImageIds", $imageIds);
    }

    /**
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @return string|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @param string $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 最大返回镜像数量，默认为20，最大100
     *
     * @return string|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 最大返回镜像数量，默认为20，最大100
     *
     * @param string $limit
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
