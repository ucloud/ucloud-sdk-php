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
use UCloud\UWSC\Models\WhiteListInfo;

class DescribeExportLineRulesResponse extends Response
{
    

    /**
     * WhiteListInfos: 白名单信息
     *
     * @return WhiteListInfo[]|null
     */
    public function getWhiteListInfos()
    {
        $items = $this->get("WhiteListInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new WhiteListInfo($item));
        }
        return $result;
    }

    /**
     * WhiteListInfos: 白名单信息
     *
     * @param WhiteListInfo[] $whiteListInfos
     */
    public function setWhiteListInfos(array $whiteListInfos)
    {
        $result = [];
        foreach ($whiteListInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
