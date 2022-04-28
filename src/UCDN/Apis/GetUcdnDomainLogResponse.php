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
namespace UCloud\UCDN\Apis;

use UCloud\Core\Response\Response;
use UCloud\UCDN\Models\LogSetList;
use UCloud\UCDN\Models\LogSetInfo;

class GetUcdnDomainLogResponse extends Response
{
    

    /**
     * LogSet: 获取日志的连接地址。具体参考下面LogSetList
     *
     * @return LogSetList[]|null
     */
    public function getLogSet()
    {
        $items = $this->get("LogSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new LogSetList($item));
        }
        return $result;
    }

    /**
     * LogSet: 获取日志的连接地址。具体参考下面LogSetList
     *
     * @param LogSetList[] $logSet
     */
    public function setLogSet(array $logSet)
    {
        $result = [];
        foreach ($logSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
