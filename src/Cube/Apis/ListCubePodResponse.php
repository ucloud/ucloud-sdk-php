<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\Cube\Apis;

use UCloud\Core\Response\Response;

class ListCubePodResponse extends Response
{
    

    /**
     * Pods: Pod列表，每条数据都做了base64编码
     *
     * @return string[]|null
     */
    public function getPods(): array
    {
        return $this->get("Pods");
    }

    /**
     * Pods: Pod列表，每条数据都做了base64编码
     *
     * @param string[] $pods
     */
    public function setPods(array $pods)
    {
        $this->set("Pods", $pods);
    }

    /**
     * TotalCount: Cube的总数
     *
     * @return integer|null
     */
    public function getTotalCount(): int
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: Cube的总数
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
