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

class GetUcdnDomain95BandwidthV2Request extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUcdnDomain95BandwidthV2"]);
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
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * BeginTime: 查询的起始日期，格式为Unix Timestamp  
     *
     * @return int|null
     */
    public function getBeginTime()
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 查询的起始日期，格式为Unix Timestamp  
     *
     * @param int $beginTime
     */
    public function setBeginTime($beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }

    /**
     * EndTime: 查询的结束日期，格式为Unix Timestamp 
     *
     * @return int|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 查询的结束日期，格式为Unix Timestamp 
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
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
     * Areacode: 查询带宽区域 cn代表国内 abroad代表海外 不填默认为全部区域
     *
     * @return string|null
     */
    public function getAreacode()
    {
        return $this->get("Areacode");
    }

    /**
     * Areacode: 查询带宽区域 cn代表国内 abroad代表海外 不填默认为全部区域
     *
     * @param string $areacode
     */
    public function setAreacode($areacode)
    {
        $this->set("Areacode", $areacode);
    }


}
