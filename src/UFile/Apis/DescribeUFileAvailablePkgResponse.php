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
use UCloud\UFile\Models\AvailablePkg;
use UCloud\UFile\Models\AvailablePkgSpecs;
use UCloud\UFile\Models\AvailablePkgDurations;
use UCloud\UFile\Models\AvailablePkgDurations;

class DescribeUFileAvailablePkgResponse extends Response
{
    

    /**
     * PkgList: 可购买的资源包规格
     *
     * @return AvailablePkg[]|null
     */
    public function getPkgList()
    {
        $items = $this->get("PkgList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AvailablePkg($item));
        }
        return $result;
    }

    /**
     * PkgList: 可购买的资源包规格
     *
     * @param AvailablePkg[] $pkgList
     */
    public function setPkgList(array $pkgList)
    {
        $result = [];
        foreach ($pkgList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
