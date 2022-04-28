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
namespace UCloud\UPhone\Apis;

use UCloud\Core\Response\Response;
use UCloud\UPhone\Models\UPhoneCommandResult;

class RunSyncCommandResponse extends Response
{
    

    /**
     * Results: 云主机实例列表，每项参数可见数据模型 [UPhoneCommandResult](#UPhoneCommandResult)
     *
     * @return UPhoneCommandResult[]|null
     */
    public function getResults()
    {
        $items = $this->get("Results");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UPhoneCommandResult($item));
        }
        return $result;
    }

    /**
     * Results: 云主机实例列表，每项参数可见数据模型 [UPhoneCommandResult](#UPhoneCommandResult)
     *
     * @param UPhoneCommandResult[] $results
     */
    public function setResults(array $results)
    {
        $result = [];
        foreach ($results as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
