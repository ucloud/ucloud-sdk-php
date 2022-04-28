<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\UFile\Apis;

use UCloud\Core\Response\Response;
use UCloud\UFile\Models\LifeCycleItem;

class DescribeUFileLifeCycleResponse extends Response
{
    

    /**
     * DateSet: 生命周期信息
     *
     * @return LifeCycleItem[]|null
     */
    public function getDateSet()
    {
        $items = $this->get("DateSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new LifeCycleItem($item));
        }
        return $result;
    }

    /**
     * DateSet: 生命周期信息
     *
     * @param LifeCycleItem[] $dateSet
     */
    public function setDateSet(array $dateSet)
    {
        $result = [];
        foreach ($dateSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
