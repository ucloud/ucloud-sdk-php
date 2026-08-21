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
namespace UCloud\CloudWatch\Models;

use UCloud\Core\Response\Response;

class MetricResult extends Response
{
    

    /**
     * ResourceId: 资源的短id
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源的短id
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * ResourceName: 资源名称
     *
     * @return string|null
     */
    public function getResourceName()
    {
        return $this->get("ResourceName");
    }

    /**
     * ResourceName: 资源名称
     *
     * @param string $resourceName
     */
    public function setResourceName($resourceName)
    {
        $this->set("ResourceName", $resourceName);
    }

    /**
     * TagList: 资源标签列表。每项为 TagListItem：Tag（标签名）和 TagValue（标签值）。
     *
     * @return int[]|null
     */
    public function getTagList()
    {
        return $this->get("TagList");
    }

    /**
     * TagList: 资源标签列表。每项为 TagListItem：Tag（标签名）和 TagValue（标签值）。
     *
     * @param int[] $tagList
     */
    public function setTagList(array $tagList)
    {
        $this->set("TagList", $tagList);
    }

    /**
     * Values: 指标数据点列表，元素为 MetricPoint
     *
     * @return MetricSample[]|null
     */
    public function getValues()
    {
        $items = $this->get("Values");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new MetricSample($item));
        }
        return $result;
    }

    /**
     * Values: 指标数据点列表，元素为 MetricPoint
     *
     * @param MetricSample[] $values
     */
    public function setValues(array $values)
    {
        $result = [];
        foreach ($values as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
