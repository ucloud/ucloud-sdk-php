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
namespace UCloud\UDNS\Apis;

use UCloud\Core\Request\Request;

class ModifyUDNSRecordRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ModifyUDNSRecord"]);
        $this->markRequired("Region");
        $this->markRequired("DNSZoneId");
        $this->markRequired("RecordId");
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
     * DNSZoneId: 域名资源ID
     *
     * @return string|null
     */
    public function getDNSZoneId()
    {
        return $this->get("DNSZoneId");
    }

    /**
     * DNSZoneId: 域名资源ID
     *
     * @param string $dnsZoneId
     */
    public function setDNSZoneId($dnsZoneId)
    {
        $this->set("DNSZoneId", $dnsZoneId);
    }

    /**
     * RecordId: 域名记录资源ID
     *
     * @return string|null
     */
    public function getRecordId()
    {
        return $this->get("RecordId");
    }

    /**
     * RecordId: 域名记录资源ID
     *
     * @param string $recordId
     */
    public function setRecordId($recordId)
    {
        $this->set("RecordId", $recordId);
    }

    /**
     * Value: 数值组，支持逗号分割。格式为：Value|权重|Enable，其中权重支持1-10，Enable为枚举值（1为启用，0为禁用）。输入格式示例：192.168.1.1|1|1,192.168.1.2|10|0。
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->get("Value");
    }

    /**
     * Value: 数值组，支持逗号分割。格式为：Value|权重|Enable，其中权重支持1-10，Enable为枚举值（1为启用，0为禁用）。输入格式示例：192.168.1.1|1|1,192.168.1.2|10|0。
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->set("Value", $value);
    }

    /**
     * ValueType: 值类型。枚举值，“Normal”，标准；“Multivalue”，多值返回。仅在值为“Multivalue”时，Value的权重生效。
     *
     * @return string|null
     */
    public function getValueType()
    {
        return $this->get("ValueType");
    }

    /**
     * ValueType: 值类型。枚举值，“Normal”，标准；“Multivalue”，多值返回。仅在值为“Multivalue”时，Value的权重生效。
     *
     * @param string $valueType
     */
    public function setValueType($valueType)
    {
        $this->set("ValueType", $valueType);
    }

    /**
     * TTL: TTL值，单位为秒
     *
     * @return integer|null
     */
    public function getTTL()
    {
        return $this->get("TTL");
    }

    /**
     * TTL: TTL值，单位为秒
     *
     * @param int $ttl
     */
    public function setTTL($ttl)
    {
        $this->set("TTL", $ttl);
    }

    /**
     * Remark: 记录的备注信息
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 记录的备注信息
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * Type: 记录类型。枚举值，“A”,"CNAME","MX","AAAA","SRV","PTR","TXT"。
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 记录类型。枚举值，“A”,"CNAME","MX","AAAA","SRV","PTR","TXT"。
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }
}
