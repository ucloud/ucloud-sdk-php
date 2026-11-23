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
use UCloud\UAIModelverse\Models\BatchCreateUMInferAPIKey;

class BatchCreateUMInferAPIKeyResponse extends Response
{
    

    /**
     * Data: 创建的key列表
     *
     * @return BatchCreateUMInferAPIKey[]|null
     */
    public function getData()
    {
        $items = $this->get("Data");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new BatchCreateUMInferAPIKey($item));
        }
        return $result;
    }

    /**
     * Data: 创建的key列表
     *
     * @param BatchCreateUMInferAPIKey[] $data
     */
    public function setData(array $data)
    {
        $result = [];
        foreach ($data as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
