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
use UCloud\UAIModelverse\Models\PayResult;

class StartPayUnpaidOrdersResponse extends Response
{
    

    /**
     * SuccessCount: 支付成功数量
     *
     * @return integer|null
     */
    public function getSuccessCount()
    {
        return $this->get("SuccessCount");
    }

    /**
     * SuccessCount: 支付成功数量
     *
     * @param int $successCount
     */
    public function setSuccessCount($successCount)
    {
        $this->set("SuccessCount", $successCount);
    }

    /**
     * FailureCount: 支付失败数量
     *
     * @return integer|null
     */
    public function getFailureCount()
    {
        return $this->get("FailureCount");
    }

    /**
     * FailureCount: 支付失败数量
     *
     * @param int $failureCount
     */
    public function setFailureCount($failureCount)
    {
        $this->set("FailureCount", $failureCount);
    }

    /**
     * Results: 支付结果
     *
     * @return PayResult|null
     */
    public function getResults()
    {
        return new PayResult($this->get("Results"));
    }

    /**
     * Results: 支付结果
     *
     * @param PayResult $results
     */
    public function setResults(array $results)
    {
        $this->set("Results", $results->getAll());
    }
}
