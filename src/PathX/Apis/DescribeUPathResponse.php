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
use UCloud\PathX\Models\UPathInfo;
use UCloud\PathX\Models\PathXUGAInfo;
use UCloud\PathX\Models\OutPublicIpInfo;

class DescribeUPathResponse extends Response
{
    

    /**
     * UPathSet: 线路信息数组
     *
     * @return UPathInfo[]|null
     */
    public function getUPathSet(): array
    {
        $items = $this->get("UPathSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UPathInfo($item));
        }
        return $result;
    }

    /**
     * UPathSet: 线路信息数组
     *
     * @param UPathInfo[] $uPathSet
     */
    public function setUPathSet(array $uPathSet)
    {
        $result = [];
        foreach ($uPathSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
