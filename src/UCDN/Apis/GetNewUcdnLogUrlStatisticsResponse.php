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

use UCloud\UCDN\Models\DownloadStatisticInfo;
use UCloud\UCDN\Models\UrlStatistics;

class GetNewUcdnLogUrlStatisticsResponse extends Response
{

    /**
     * UrlStatisticsList: 按天统计实例。
     *
     * @return UrlStatisticsModel[]|null
     */
    public function getUrlStatisticsList()
    {
        $items = $this->get("UrlStatisticsList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UrlStatisticsModel($item));
        }
        return $result;
    }

    /**
     * UrlStatisticsList: 按天统计实例。
     *
     * @param UrlStatisticsModel[] $urlStatisticsList
     */
    public function setUrlStatisticsList(array $urlStatisticsList)
    {
        $result = [];
        foreach ($urlStatisticsList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
