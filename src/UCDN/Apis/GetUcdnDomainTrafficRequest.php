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

class GetUcdnDomainTrafficRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUcdnDomainTraffic"]);
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
     * AccountType: 指定按项目查询，还是按整个账户查询  取值 top 表示按整个账户查询，取值org表示按项目查询
     *
     * @return string|null
     */
    public function getAccountType(): string
    {
        return $this->get("AccountType");
    }

    /**
     * AccountType: 指定按项目查询，还是按整个账户查询  取值 top 表示按整个账户查询，取值org表示按项目查询
     *
     * @param string $accountType
     */
    public function setAccountType(string $accountType)
    {
        $this->set("AccountType", $accountType);
    }

    /**
     * DomainId: 域名ID，创建加速域名时生成，n从自然数0开始。默认全部域名
     *
     * @return string[]|null
     */
    public function getDomainId(): array
    {
        return $this->get("DomainId");
    }

    /**
     * DomainId: 域名ID，创建加速域名时生成，n从自然数0开始。默认全部域名
     *
     * @param string[] $domainId
     */
    public function setDomainId(array $domainId)
    {
        $this->set("DomainId", $domainId);
    }

    /**
     * Areacode: 查询流量区域 cn代表国内 abroad代表海外，默认全部区域
     *
     * @return string|null
     */
    public function getAreacode(): string
    {
        return $this->get("Areacode");
    }

    /**
     * Areacode: 查询流量区域 cn代表国内 abroad代表海外，默认全部区域
     *
     * @param string $areacode
     */
    public function setAreacode(string $areacode)
    {
        $this->set("Areacode", $areacode);
    }

    /**
     * BeginTime: 查询的起始日期，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值
     *
     * @return integer|null
     */
    public function getBeginTime(): int
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 查询的起始日期，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值
     *
     * @param int $beginTime
     */
    public function setBeginTime(int $beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }

    /**
     * EndTime: 查询的结束日期，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天
     *
     * @return integer|null
     */
    public function getEndTime(): int
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 查询的结束日期，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天
     *
     * @param int $endTime
     */
    public function setEndTime(int $endTime)
    {
        $this->set("EndTime", $endTime);
    }
}
