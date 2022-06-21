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

class UrlStatistics extends Response
{
    

    /**
     * UrlList: 
     *
     * @return DownloadStatisticInfo[]|null
     */
    public function getUrlList()
    {
        $items = $this->get("UrlList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DownloadStatisticInfo($item));
        }
        return $result;
    }

    /**
     * UrlList: 
     *
     * @param DownloadStatisticInfo[] $urlList
     */
    public function setUrlList(array $urlList)
    {
        $result = [];
        foreach ($urlList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

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
    public function setDate($date)
    {
        $this->set("Date", $date);
    }


}
