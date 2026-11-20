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
namespace UCloud\UDBProxy\Apis;

use UCloud\Core\Response\Response;
use UCloud\UDBProxy\Models\UDBProxyBaseItem;
use UCloud\UDBProxy\Models\BaseDBData;

class ListUDBProxyInstanceByDBResponse extends Response
{
    

    /**
     * UDBProxyBaseItems: 代理列表数据
     *
     * @return UDBProxyBaseItem[]|null
     */
    public function getUDBProxyBaseItems()
    {
        $items = $this->get("UDBProxyBaseItems");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UDBProxyBaseItem($item));
        }
        return $result;
    }

    /**
     * UDBProxyBaseItems: 代理列表数据
     *
     * @param UDBProxyBaseItem[] $udbProxyBaseItems
     */
    public function setUDBProxyBaseItems(array $udbProxyBaseItems)
    {
        $result = [];
        foreach ($udbProxyBaseItems as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
