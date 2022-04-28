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
use UCloud\UPhone\Models\Job;
use UCloud\UPhone\Models\Task;

class DescribeUPhoneJobResponse extends Response
{
    

    /**
     * Jobs: Job信息，详情见数据结构Job（如果Status为等待中，此字段为空）
     *
     * @return Job[]|null
     */
    public function getJobs()
    {
        $items = $this->get("Jobs");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Job($item));
        }
        return $result;
    }

    /**
     * Jobs: Job信息，详情见数据结构Job（如果Status为等待中，此字段为空）
     *
     * @param Job[] $jobs
     */
    public function setJobs(array $jobs)
    {
        $result = [];
        foreach ($jobs as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: Job总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: Job总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
