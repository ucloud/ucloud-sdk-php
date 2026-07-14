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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Response\Response;
use UCloud\UK8S\Models\UK8SVersionData;

class GetUK8SVersionsResponse extends Response
{
    

    /**
     * Data: UK8S 版本信息列表。
     *
     * @return UK8SVersionData[]|null
     */
    public function getData()
    {
        $items = $this->get("Data");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UK8SVersionData($item));
        }
        return $result;
    }

    /**
     * Data: UK8S 版本信息列表。
     *
     * @param UK8SVersionData[] $data
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
