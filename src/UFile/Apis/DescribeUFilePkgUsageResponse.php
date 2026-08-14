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
namespace UCloud\UFile\Apis;

use UCloud\Core\Response\Response;
use UCloud\UFile\Models\PkgUsage;

class DescribeUFilePkgUsageResponse extends Response
{
    

    /**
     * Usage: 按天返回的使用明细
     *
     * @return PkgUsage[]|null
     */
    public function getUsage()
    {
        $items = $this->get("Usage");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new PkgUsage($item));
        }
        return $result;
    }

    /**
     * Usage: 按天返回的使用明细
     *
     * @param PkgUsage[] $usage
     */
    public function setUsage(array $usage)
    {
        $result = [];
        foreach ($usage as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
