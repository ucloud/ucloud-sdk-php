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

class QueryMetricDenseDataParamMetricInfosTags extends Request
{
    

    /**
     * AnyKey: AnyKey：代表任意一个用户自定义的key。Tags是一个用户自定义对象map，是要查询指标的tag的key和value。用户自定义的Tags对象里的key和value，它们分别是要查询的tag的key和value。如："Tags":{  "tag1":"value1",  "tag2":"value2",  "tag3":"value3"}
     *
     * @return string|null
     */
    public function getAnyKey()
    {
        return $this->get("AnyKey");
    }

    /**
     * AnyKey: AnyKey：代表任意一个用户自定义的key。Tags是一个用户自定义对象map，是要查询指标的tag的key和value。用户自定义的Tags对象里的key和value，它们分别是要查询的tag的key和value。如："Tags":{  "tag1":"value1",  "tag2":"value2",  "tag3":"value3"}
     *
     * @param string $anyKey
     */
    public function setAnyKey($anyKey)
    {
        $this->set("AnyKey", $anyKey);
    }
}
