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
namespace UCloud\UAIModelverse\Models;

use UCloud\Core\Response\Response;

class RequestLogSummary extends Response
{
    

    /**
     * TotalRequests: 查询条件命中的总请求数
     *
     * @return integer|null
     */
    public function getTotalRequests()
    {
        return $this->get("TotalRequests");
    }

    /**
     * TotalRequests: 查询条件命中的总请求数
     *
     * @param int $totalRequests
     */
    public function setTotalRequests($totalRequests)
    {
        $this->set("TotalRequests", $totalRequests);
    }

    /**
     * FailedRequests: 查询条件命中的失败请求数
     *
     * @return integer|null
     */
    public function getFailedRequests()
    {
        return $this->get("FailedRequests");
    }

    /**
     * FailedRequests: 查询条件命中的失败请求数
     *
     * @param int $failedRequests
     */
    public function setFailedRequests($failedRequests)
    {
        $this->set("FailedRequests", $failedRequests);
    }
}
