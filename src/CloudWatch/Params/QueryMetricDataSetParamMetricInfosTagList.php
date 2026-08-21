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

class QueryMetricDataSetParamMetricInfosTagList extends Request
{
    

    /**
     * TagKey: 要查询指标的Tag的key，参数中N的取值范围为 0～9
     *
     * @return string|null
     */
    public function getTagKey()
    {
        return $this->get("TagKey");
    }

    /**
     * TagKey: 要查询指标的Tag的key，参数中N的取值范围为 0～9
     *
     * @param string $tagKey
     */
    public function setTagKey($tagKey)
    {
        $this->set("TagKey", $tagKey);
    }

    /**
     * TagValues: 要查询指标的Tag的Value，参数中N的取值范围为 0～9
     *
     * @return string[]|null
     */
    public function getTagValues()
    {
        return $this->get("TagValues");
    }

    /**
     * TagValues: 要查询指标的Tag的Value，参数中N的取值范围为 0～9
     *
     * @param string[] $tagValues
     */
    public function setTagValues(array $tagValues)
    {
        $this->set("TagValues", $tagValues);
    }
}
