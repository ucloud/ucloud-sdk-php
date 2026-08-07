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
namespace UCloud\UKMS\Apis;

use UCloud\Core\Response\Response;
use UCloud\UKMS\Models\AliasInfo;

class ListAliasesResponse extends Response
{
    

    /**
     * TotalCount: 别名总数。
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 别名总数。
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * Aliases: 别名列表，每项为 AliasInfo。
     *
     * @return AliasInfo[]|null
     */
    public function getAliases()
    {
        $items = $this->get("Aliases");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AliasInfo($item));
        }
        return $result;
    }

    /**
     * Aliases: 别名列表，每项为 AliasInfo。
     *
     * @param AliasInfo[] $aliases
     */
    public function setAliases(array $aliases)
    {
        $result = [];
        foreach ($aliases as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
