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
namespace UCloud\UHost\Apis;

use UCloud\Core\Response\Response;
use UCloud\UHost\Models\KeyPair;

class DescribeUHostKeyPairsResponse extends Response
{
    

    /**
     * KeyPairs: 密钥对信息集合
     *
     * @return KeyPair[]|null
     */
    public function getKeyPairs(): array
    {
        $items = $this->get("KeyPairs") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new KeyPair($item));
        }
        return $result;
    }

    /**
     * KeyPairs: 密钥对信息集合
     *
     * @param KeyPair[] $keyPairs
     */
    public function setKeyPairs(array $keyPairs)
    {
        $result = [];
        foreach ($keyPairs as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: 密钥对总数
     *
     * @return integer|null
     */
    public function getTotalCount(): int
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 密钥对总数
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
