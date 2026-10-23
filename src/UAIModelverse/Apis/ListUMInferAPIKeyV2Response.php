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
namespace UCloud\UAIModelverse\Apis;

use UCloud\Core\Response\Response;
use UCloud\UAIModelverse\Models\APIKey;

class ListUMInferAPIKeyV2Response extends Response
{
    

    /**
     * Data: data
     *
     * @return APIKey[]|null
     */
    public function getData()
    {
        $items = $this->get("Data");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new APIKey($item));
        }
        return $result;
    }

    /**
     * Data: data
     *
     * @param APIKey[] $data
     */
    public function setData(array $data)
    {
        $result = [];
        foreach ($data as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Timestamp: 时间戳
     *
     * @return integer|null
     */
    public function getTimestamp()
    {
        return $this->get("Timestamp");
    }

    /**
     * Timestamp: 时间戳
     *
     * @param int $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->set("Timestamp", $timestamp);
    }

    /**
     * TotalCount: 数据量
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 数据量
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
