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
namespace UCloud\UCDN\Apis;

use UCloud\Core\Request\Request;

class GetUcdnProIspBandwidthV2Request extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUcdnProIspBandwidthV2"]);
        $this->markRequired("BeginTime");
        $this->markRequired("EndTime");
        $this->markRequired("Type");
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
     * BeginTime: 查询的起始日期，格式为Unix Timestamp
     *
     * @return integer|null
     */
    public function getBeginTime(): int
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 查询的起始日期，格式为Unix Timestamp
     *
     * @param int $beginTime
     */
    public function setBeginTime(int $beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }

    /**
     * EndTime: 查询的结束日期，格式为Unix Timestamp
     *
     * @return integer|null
     */
    public function getEndTime(): int
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 查询的结束日期，格式为Unix Timestamp
     *
     * @param int $endTime
     */
    public function setEndTime(int $endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * Type: 时间粒度0 (按5分钟粒度)1 (按小时粒度)2(按天粒度)3(按分钟粒度）
     *
     * @return integer|null
     */
    public function getType(): int
    {
        return $this->get("Type");
    }

    /**
     * Type: 时间粒度0 (按5分钟粒度)1 (按小时粒度)2(按天粒度)3(按分钟粒度）
     *
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->set("Type", $type);
    }

    /**
     * DomainId: 域名id，创建域名时生成的id。默认全部域名
     *
     * @return string[]|null
     */
    public function getDomainId(): array
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
     * Province: 省份代码（省份拼音），可以传多个，不传则查询所有省份
     *
     * @return string[]|null
     */
    public function getProvince(): array
    {
        return $this->get("Province");
    }

    /**
     * Province: 省份代码（省份拼音），可以传多个，不传则查询所有省份
     *
     * @param string[] $province
     */
    public function setProvince(array $province)
    {
        $this->set("Province", $province);
    }

    /**
     * Isp: 运营商代码（运营商拼音），一次只能查询一个运营商，不传递默认取所有运营商
     *
     * @return string|null
     */
    public function getIsp(): string
    {
        return $this->get("Isp");
    }

    /**
     * Isp: 运营商代码（运营商拼音），一次只能查询一个运营商，不传递默认取所有运营商
     *
     * @param string $isp
     */
    public function setIsp(string $isp)
    {
        $this->set("Isp", $isp);
    }
}
