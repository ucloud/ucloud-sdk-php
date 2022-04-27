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

namespace UCloud\UCDN\Models;

use UCloud\Core\Response\Response;

use UCloud\UCDN\Models\GetNewUcdnLogRefererStatisticsResponse;
use UCloud\UCDN\Models\RefererList;

class RefererStatistics extends Response
{

    /**
     * Date: 日期
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->get("Date");
    }

    /**
     * Date: 日期
     *
     * @param string $date
     */
    public function setDate(string $date)
    {
        $this->set("Date", $date);
    }
    /**
     * RefererList: Referer实例表
     *
     * @return RefererListModel[]|null
     */
    public function getRefererList()
    {
        $items = $this->get("RefererList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new RefererListModel($item));
        }
        return $result;
    }

    /**
     * RefererList: Referer实例表
     *
     * @param RefererListModel[] $refererList
     */
    public function setRefererList(array $refererList)
    {
        $result = [];
        foreach ($refererList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
