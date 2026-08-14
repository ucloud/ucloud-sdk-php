<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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
namespace UCloud\UFile\Apis;

use UCloud\Core\Request\Request;

class GetUFileMonthlyBillRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUFileMonthlyBill"]);
        $this->markRequired("Region");
        $this->markRequired("StartMonth");
        $this->markRequired("EndMonth");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
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
     * StartMonth: 查询开始月份;例如"1994-07"
     *
     * @return string|null
     */
    public function getStartMonth()
    {
        return $this->get("StartMonth");
    }

    /**
     * StartMonth: 查询开始月份;例如"1994-07"
     *
     * @param string $startMonth
     */
    public function setStartMonth($startMonth)
    {
        $this->set("StartMonth", $startMonth);
    }

    /**
     * EndMonth: 查询结束时间;例如"1994-07"
     *
     * @return string|null
     */
    public function getEndMonth()
    {
        return $this->get("EndMonth");
    }

    /**
     * EndMonth: 查询结束时间;例如"1994-07"
     *
     * @param string $endMonth
     */
    public function setEndMonth($endMonth)
    {
        $this->set("EndMonth", $endMonth);
    }

    /**
     * BucketName: 空间名称。此字段不为空，返回此Bucket日账单,否则，返回这个项目的日账单
     *
     * @return string|null
     */
    public function getBucketName()
    {
        return $this->get("BucketName");
    }

    /**
     * BucketName: 空间名称。此字段不为空，返回此Bucket日账单,否则，返回这个项目的日账单
     *
     * @param string $bucketName
     */
    public function setBucketName($bucketName)
    {
        $this->set("BucketName", $bucketName);
    }
}
