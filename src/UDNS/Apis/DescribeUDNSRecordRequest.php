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

class DescribeUDNSRecordRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUDNSRecord"]);
        $this->markRequired("Region");
        $this->markRequired("DNSZoneId");
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
     * RecordIds: 域名记录资源ID
     *
     * @return string[]|null
     */
    public function getRecordIds()
    {
        return $this->get("RecordIds");
    }

    /**
     * RecordIds: 域名记录资源ID
     *
     * @param string[] $recordIds
     */
    public function setRecordIds(array $recordIds)
    {
        $this->set("RecordIds", $recordIds);
    }

    /**
     * Limit: 数据分页值, 默认为20
     *
     * @return integer|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 数据分页值, 默认为20
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * Offset: 数据偏移量, 默认为0
     *
     * @return integer|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 数据偏移量, 默认为0
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Query: 模糊查询记录
     *
     * @return string|null
     */
    public function getQuery()
    {
        return $this->get("Query");
    }

    /**
     * Query: 模糊查询记录
     *
     * @param string $query
     */
    public function setQuery($query)
    {
        $this->set("Query", $query);
    }

    /**
     * SortKey: 排序字段，只支持host update_time
     *
     * @return string|null
     */
    public function getSortKey()
    {
        return $this->get("SortKey");
    }

    /**
     * SortKey: 排序字段，只支持host update_time
     *
     * @param string $sortKey
     */
    public function setSortKey($sortKey)
    {
        $this->set("SortKey", $sortKey);
    }

    /**
     * SortDir: 排序方式，支持asc desc
     *
     * @return string|null
     */
    public function getSortDir()
    {
        return $this->get("SortDir");
    }

    /**
     * SortDir: 排序方式，支持asc desc
     *
     * @param string $sortDir
     */
    public function setSortDir($sortDir)
    {
        $this->set("SortDir", $sortDir);
    }
}
