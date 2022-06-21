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

class DescribeUPhoneJobRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUPhoneJob"]);
        $this->markRequired("CityId");
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
     * JobIds: 【数组】Job 的唯一标识 Id，调用方式举例：JobIds.0=希望查询状态的 Job1，JobIds.1=Job2。 如果不传入，则返回当前 城市 所有符合条件的 Job 。
     *
     * @return string[]|null
     */
    public function getJobIds()
    {
        return $this->get("JobIds");
    }

    /**
     * JobIds: 【数组】Job 的唯一标识 Id，调用方式举例：JobIds.0=希望查询状态的 Job1，JobIds.1=Job2。 如果不传入，则返回当前 城市 所有符合条件的 Job 。
     *
     * @param string[] $jobIds
     */
    public function setJobIds(array $jobIds)
    {
        $this->set("JobIds", $jobIds);
    }

    /**
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @return integer|null
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
     * @return integer|null
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
     * State: Job状态，枚举值：* 等待状态: PENDING;* 运行状态: RUNNING;* 成功状态: SUCCESS* 失败状态: FAILED* 部分成功状态：PARTIAL_SUCCESS
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: Job状态，枚举值：* 等待状态: PENDING;* 运行状态: RUNNING;* 成功状态: SUCCESS* 失败状态: FAILED* 部分成功状态：PARTIAL_SUCCESS
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * Types: 【数组】Job 类型，调用方式举例：JobTypes.0=希望查询的 Job 类型 1，JobTypes.1=Job 类型 2。 如果不传入，则返回当前 城市 所有符合条件的 Job 类型。Job 类型仅支持 INSTALL_APP、UNINSTALL_APP、RUN_ASYNC_COMMAND、CREATE_SERVER_AND_UPHONE、SET_UPHONE_GPS、SET_UPHONE_CONFIG、UPLOAD_FILE、DELETE_UPHONE
     *
     * @return string[]|null
     */
    public function getTypes()
    {
        return $this->get("Types");
    }

    /**
     * Types: 【数组】Job 类型，调用方式举例：JobTypes.0=希望查询的 Job 类型 1，JobTypes.1=Job 类型 2。 如果不传入，则返回当前 城市 所有符合条件的 Job 类型。Job 类型仅支持 INSTALL_APP、UNINSTALL_APP、RUN_ASYNC_COMMAND、CREATE_SERVER_AND_UPHONE、SET_UPHONE_GPS、SET_UPHONE_CONFIG、UPLOAD_FILE、DELETE_UPHONE
     *
     * @param string[] $types
     */
    public function setTypes(array $types)
    {
        $this->set("Types", $types);
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
