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
namespace UCloud\UHost\Apis;

use UCloud\Core\Response\Response;
use UCloud\UHost\Models\KeyPairDesc;

class DescribeUHostKeyPairsResponse extends Response
{
    

    /**
     * KeyPairs: 密钥对信息集合
     *
     * @return KeyPairDesc[]|null
     */
    public function getKeyPairs()
    {
        $items = $this->get("KeyPairs");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new KeyPairDesc($item));
        }
        return $result;
    }

    /**
     * KeyPairs: 密钥对信息集合
     *
     * @param KeyPairDesc[] $keyPairs
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
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 密钥对总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }


}
