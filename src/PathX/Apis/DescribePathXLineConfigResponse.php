<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\PathX\Apis;

use UCloud\Core\Response\Response;
use UCloud\PathX\Models\UGAALine;
use UCloud\PathX\Models\LineDetail;

class DescribePathXLineConfigResponse extends Response
{
    

    /**
     * LineSet: UGAA线路列表,参考UGAALine字段定义
     *
     * @return UGAALine[]|null
     */
    public function getLineSet(): array
    {
        $items = $this->get("LineSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UGAALine($item));
        }
        return $result;
    }

    /**
     * LineSet: UGAA线路列表,参考UGAALine字段定义
     *
     * @param UGAALine[] $lineSet
     */
    public function setLineSet(array $lineSet)
    {
        $result = [];
        foreach ($lineSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
