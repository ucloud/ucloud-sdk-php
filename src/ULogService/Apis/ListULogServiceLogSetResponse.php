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
namespace UCloud\ULogService\Apis;

use UCloud\Core\Response\Response;
use UCloud\ULogService\Models\LogSetInfo;

class ListULogServiceLogSetResponse extends Response
{
    

    /**
     * Data: 返回日志主题数据，是一个数组
     *
     * @return LogSetInfo[]|null
     */
    public function getData()
    {
        $items = $this->get("Data");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new LogSetInfo($item));
        }
        return $result;
    }

    /**
     * Data: 返回日志主题数据，是一个数组
     *
     * @param LogSetInfo[] $data
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
