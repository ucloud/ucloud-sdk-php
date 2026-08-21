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
namespace UCloud\CloudWatch\Apis;

use UCloud\Core\Request\Request;

class QueryMetricDataSummaryRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "QueryMetricDataSummary"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("ProductKey");
        $this->markRequired("Offset");
        $this->markRequired("Limit");
    }

    

    /**
     * Region: 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
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
     * ProductKey: 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *
     * @return string|null
     */
    public function getProductKey()
    {
        return $this->get("ProductKey");
    }

    /**
     * ProductKey: 产品唯一标识，参见 [产品概览](https://docs.ucloud.cn/cloudwatch/metric/intro)
     *
     * @param string $productKey
     */
    public function setProductKey($productKey)
    {
        $this->set("ProductKey", $productKey);
    }

    /**
     * Offset: 跳过的数量
     *
     * @return integer|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 跳过的数量
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 当前页数据尺寸
     *
     * @return integer|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 当前页数据尺寸
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * Metrics: 指定要查询的指标列表，不指定则使用默认的指标集合
     *
     * @return string[]|null
     */
    public function getMetrics()
    {
        return $this->get("Metrics");
    }

    /**
     * Metrics: 指定要查询的指标列表，不指定则使用默认的指标集合
     *
     * @param string[] $metrics
     */
    public function setMetrics(array $metrics)
    {
        $this->set("Metrics", $metrics);
    }

    /**
     * ResourceIds: 指定要查询的资源ID列表
     *
     * @return string[]|null
     */
    public function getResourceIds()
    {
        return $this->get("ResourceIds");
    }

    /**
     * ResourceIds: 指定要查询的资源ID列表
     *
     * @param string[] $resourceIds
     */
    public function setResourceIds(array $resourceIds)
    {
        $this->set("ResourceIds", $resourceIds);
    }
}
