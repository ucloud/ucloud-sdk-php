<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\ULB\Apis;

use UCloud\Core\Response\Response;
use UCloud\ULB\Models\BackendMsg;

class UpdateBackendBatchResponse extends Response
{
    

    /**
     * BackendSet: 返回ulb对每个rs的修改是否成功
     *
     * @return BackendMsg[]|null
     */
    public function getBackendSet()
    {
        $items = $this->get("BackendSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new BackendMsg($item));
        }
        return $result;
    }

    /**
     * BackendSet: 返回ulb对每个rs的修改是否成功
     *
     * @param BackendMsg[] $backendSet
     */
    public function setBackendSet(array $backendSet)
    {
        $result = [];
        foreach ($backendSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
