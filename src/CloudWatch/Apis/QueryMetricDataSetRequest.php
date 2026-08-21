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
use UCloud\CloudWatch\Params\QueryMetricDataSetParamMetricInfos;
use UCloud\CloudWatch\Params\QueryMetricDataSetParamMetricInfosTagList;

class QueryMetricDataSetRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "QueryMetricDataSet"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("ProductKey");
        $this->markRequired("StartTime");
        $this->markRequired("EndTime");
        $this->markRequired("CalcMethod");
        $this->markRequired("Period");
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
     * StartTime: 开始时间，值为10位数时间戳
     *
     * @return integer|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 开始时间，值为10位数时间戳
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * EndTime: 截止时间，值为10位数时间戳
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 截止时间，值为10位数时间戳
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * CalcMethod: 计算方式，枚举值如下：raw:原始值,max:最大值,min:最小值,avg:平均值,sum:求和
     *
     * @return string|null
     */
    public function getCalcMethod()
    {
        return $this->get("CalcMethod");
    }

    /**
     * CalcMethod: 计算方式，枚举值如下：raw:原始值,max:最大值,min:最小值,avg:平均值,sum:求和
     *
     * @param string $calcMethod
     */
    public function setCalcMethod($calcMethod)
    {
        $this->set("CalcMethod", $calcMethod);
    }

    /**
     * Period: 周期，单位为秒，即：数据查询时，返回数据点的时间间隔。不同的查询时间范围，对应的周期不同：0<时间范围<=1h——周期：1分钟/5分钟，对应的枚举值为60、300；1h<时间范围<=12h——周期：1分钟/5分钟/1小时，对应的枚举值为60、300、3600；12h<时间范围<=24h——周期：5分钟/1小时，对应的枚举值为300、3600；1天<时间范围<=30天——周期：1小时/6小时/24小时，对应的枚举值为3600、21600、86400
     *
     * @return integer|null
     */
    public function getPeriod()
    {
        return $this->get("Period");
    }

    /**
     * Period: 周期，单位为秒，即：数据查询时，返回数据点的时间间隔。不同的查询时间范围，对应的周期不同：0<时间范围<=1h——周期：1分钟/5分钟，对应的枚举值为60、300；1h<时间范围<=12h——周期：1分钟/5分钟/1小时，对应的枚举值为60、300、3600；12h<时间范围<=24h——周期：5分钟/1小时，对应的枚举值为300、3600；1天<时间范围<=30天——周期：1小时/6小时/24小时，对应的枚举值为3600、21600、86400
     *
     * @param int $period
     */
    public function setPeriod($period)
    {
        $this->set("Period", $period);
    }

    /**
     * MetricInfos:
     *
     * @return QueryMetricDataSetParamMetricInfos[]|null
     */
    public function getMetricInfos()
    {
        $items = $this->get("MetricInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new QueryMetricDataSetParamMetricInfos($item));
        }
        return $result;
    }

    /**
     * MetricInfos:
     *
     * @param QueryMetricDataSetParamMetricInfos[] $metricInfos
     */
    public function setMetricInfos(array $metricInfos)
    {
        $result = [];
        foreach ($metricInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
