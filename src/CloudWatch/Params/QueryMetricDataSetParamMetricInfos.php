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
namespace UCloud\CloudWatch\Params;

use UCloud\Core\Request\Request;

class QueryMetricDataSetParamMetricInfos extends Request
{
    

    /**
     * Metric: 指标名，参数中N的取值范围为 0～9
     *
     * @return string|null
     */
    public function getMetric()
    {
        return $this->get("Metric");
    }

    /**
     * Metric: 指标名，参数中N的取值范围为 0～9
     *
     * @param string $metric
     */
    public function setMetric($metric)
    {
        $this->set("Metric", $metric);
    }

    /**
     * ResourceId: 指标所属资源id，参数中N的取值范围为 0～9
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 指标所属资源id，参数中N的取值范围为 0～9
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * TagOperation: 多个 Tag 条件的匹配方式；可选 and（默认）或 or。TagList 中使用 or 时最多支持 3 个 Tag。
     *
     * @return string|null
     */
    public function getTagOperation()
    {
        return $this->get("TagOperation");
    }

    /**
     * TagOperation: 多个 Tag 条件的匹配方式；可选 and（默认）或 or。TagList 中使用 or 时最多支持 3 个 Tag。
     *
     * @param string $tagOperation
     */
    public function setTagOperation($tagOperation)
    {
        $this->set("TagOperation", $tagOperation);
    }

    /**
     * TagList:
     *
     * @return QueryMetricDataSetParamMetricInfosTagList[]|null
     */
    public function getTagList()
    {
        $items = $this->get("TagList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new QueryMetricDataSetParamMetricInfosTagList($item));
        }
        return $result;
    }

    /**
     * TagList:
     *
     * @param QueryMetricDataSetParamMetricInfosTagList[] $tagList
     */
    public function setTagList(array $tagList)
    {
        $result = [];
        foreach ($tagList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
