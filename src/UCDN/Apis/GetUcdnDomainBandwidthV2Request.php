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

class GetUcdnDomainBandwidthV2Request extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUcdnDomainBandwidthV2"]);
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
     * Type: 时间粒度（0表示按照5分钟粒度，1表示按照1小时粒度，2表示按照一天的粒度，3表示按照1分钟粒度）
     *
     * @return integer|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 时间粒度（0表示按照5分钟粒度，1表示按照1小时粒度，2表示按照一天的粒度，3表示按照1分钟粒度）
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
    public function setAreacode(string $areacode)
    {
        $this->set("Areacode", $areacode);
    }
    /**
     * BeginTime: 查询的起始时间，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值。如没有赋值，则返回缺少参 数错误，如果没有EndTime，BeginTime也可以不赋值，EndTime默认当前时间，BeginTime 默认前一天的当前时间。
     *
     * @return integer|null
     */
    public function getBeginTime()
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 查询的起始时间，格式为Unix Timestamp。如果有EndTime，BeginTime必须赋值。如没有赋值，则返回缺少参 数错误，如果没有EndTime，BeginTime也可以不赋值，EndTime默认当前时间，BeginTime 默认前一天的当前时间。
     *
     * @param int $beginTime
     */
    public function setBeginTime(int $beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }
    /**
     * EndTime: 查询的结束时间，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天时间。
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 查询的结束时间，格式为Unix Timestamp。EndTime默认为当前时间，BeginTime默认为当前时间前一天时间。
     *
     * @param int $endTime
     */
    public function setEndTime(int $endTime)
    {
        $this->set("EndTime", $endTime);
    }
    /**
     * Protocol: 协议，http、https  不传则查所有协议的带宽
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->get("Protocol");
    }

    /**
     * Protocol: 协议，http、https  不传则查所有协议的带宽
     *
     * @param string $protocol
     */
    public function setProtocol(string $protocol)
    {
        $this->set("Protocol", $protocol);
    }
    /**
     * Primeval: 原始带宽，不为0则获取原始带宽，默认为0
     *
     * @return integer|null
     */
    public function getPrimeval()
    {
        return $this->get("Primeval");
    }

    /**
     * Primeval: 原始带宽，不为0则获取原始带宽，默认为0
     *
     * @param int $primeval
     */
    public function setPrimeval(int $primeval)
    {
        $this->set("Primeval", $primeval);
    }
}
