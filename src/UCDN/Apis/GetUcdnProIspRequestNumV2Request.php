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

namespace UCloud\UCDN\Apis;

use UCloud\Core\Request\Request;

class GetUcdnProIspRequestNumV2Request extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUcdnProIspRequestNumV2"]);
        $this->markRequired("BeginTime");
        $this->markRequired("EndTime");
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
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * BeginTime: 查询的起始日期，格式为Unix Timestamp  忽略时间部分
     *
     * @return integer|null
     */
    public function getBeginTime()
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 查询的起始日期，格式为Unix Timestamp  忽略时间部分
     *
     * @param int $beginTime
     */
    public function setBeginTime(int $beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }
    /**
     * EndTime: 查询的结束日期，格式为Unix Timestamp  忽略时间部分
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 查询的结束日期，格式为Unix Timestamp  忽略时间部分
     *
     * @param int $endTime
     */
    public function setEndTime(int $endTime)
    {
        $this->set("EndTime", $endTime);
    }
    /**
     * DomainId: 域名id，创建域名时生成的id。默认全部域名
     *
     * @return string[]|null
     */
    public function getDomainId()
    {
        return $this->get("DomainId");
    }

    /**
     * DomainId: 域名id，创建域名时生成的id。默认全部域名
     *
     * @param string[] $domainId
     */
    public function setDomainId(array $domainId)
    {
        $this->set("DomainId", $domainId);
    }
    /**
     * Province: 省份代码，可以传多个，不传则查询所有省份
     *
     * @return string[]|null
     */
    public function getProvince()
    {
        return $this->get("Province");
    }

    /**
     * Province: 省份代码，可以传多个，不传则查询所有省份
     *
     * @param string[] $province
     */
    public function setProvince(array $province)
    {
        $this->set("Province", $province);
    }
    /**
     * Isp: 运营商代码，一次只能查询一个运营商，不传递默认取所有运营商
     *
     * @return string|null
     */
    public function getIsp()
    {
        return $this->get("Isp");
    }

    /**
     * Isp: 运营商代码，一次只能查询一个运营商，不传递默认取所有运营商
     *
     * @param string $isp
     */
    public function setIsp(string $isp)
    {
        $this->set("Isp", $isp);
    }
    /**
     * Type: 时间粒度（0表示按照5分钟粒度，1表示按照1小时粒度，2表示按照一天粒度，3表示按照一分钟粒度）
     *
     * @return integer|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 时间粒度（0表示按照5分钟粒度，1表示按照1小时粒度，2表示按照一天粒度，3表示按照一分钟粒度）
     *
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->set("Type", $type);
    }
}
