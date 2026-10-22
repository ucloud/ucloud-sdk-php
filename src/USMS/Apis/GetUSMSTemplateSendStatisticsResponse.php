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
namespace UCloud\USMS\Apis;

use UCloud\Core\Response\Response;
use UCloud\USMS\Models\StatisticsData;
use UCloud\USMS\Models\TemplateStatisticsDataInfo;

class GetUSMSTemplateSendStatisticsResponse extends Response
{
    

    /**
     * Total: 返回记录数
     *
     * @return integer|null
     */
    public function getTotal()
    {
        return $this->get("Total");
    }

    /**
     * Total: 返回记录数
     *
     * @param int $total
     */
    public function setTotal($total)
    {
        $this->set("Total", $total);
    }

    /**
     * StatisticsData: 符合查询条件的发送数据统计求和集，具体字段信息见StatisticsData模型
     *
     * @return StatisticsData|null
     */
    public function getStatisticsData()
    {
        return new StatisticsData($this->get("StatisticsData"));
    }

    /**
     * StatisticsData: 符合查询条件的发送数据统计求和集，具体字段信息见StatisticsData模型
     *
     * @param StatisticsData $statisticsData
     */
    public function setStatisticsData(array $statisticsData)
    {
        $this->set("StatisticsData", $statisticsData->getAll());
    }

    /**
     * Data: 以天为统计维度的发送数据统计集合，每天的统计数据字段详见TemplateStatisticsDataInfo模型
     *
     * @return TemplateStatisticsDataInfo[]|null
     */
    public function getData()
    {
        $items = $this->get("Data");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new TemplateStatisticsDataInfo($item));
        }
        return $result;
    }

    /**
     * Data: 以天为统计维度的发送数据统计集合，每天的统计数据字段详见TemplateStatisticsDataInfo模型
     *
     * @param TemplateStatisticsDataInfo[] $data
     */
    public function setData(array $data)
    {
        $result = [];
        foreach ($data as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
