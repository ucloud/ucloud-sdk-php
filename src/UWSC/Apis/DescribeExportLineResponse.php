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
namespace UCloud\UWSC\Apis;

use UCloud\Core\Response\Response;
use UCloud\UWSC\Models\LineInfo;
use UCloud\UWSC\Models\SocksInfo;

class DescribeExportLineResponse extends Response
{
    

    /**
     * LineInfos: 线路信息
     *
     * @return LineInfo[]|null
     */
    public function getLineInfos()
    {
        $items = $this->get("LineInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new LineInfo($item));
        }
        return $result;
    }

    /**
     * LineInfos: 线路信息
     *
     * @param LineInfo[] $lineInfos
     */
    public function setLineInfos(array $lineInfos)
    {
        $result = [];
        foreach ($lineInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
