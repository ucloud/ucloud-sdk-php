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
use UCloud\UPhone\Models\Results;

class SetUPhoneConfigResponse extends Response
{
    

    /**
     * RequestId: request_uuid，唯一值，用于区分request
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->get("RequestId");
    }

    /**
     * RequestId: request_uuid，唯一值，用于区分request
     *
     * @param string $requestId
     */
    public function setRequestId($requestId)
    {
        $this->set("RequestId", $requestId);
    }

    /**
     * JobId: 异步请求成功后返回JobId，用以查询Job状态
     *
     * @return string|null
     */
    public function getJobId()
    {
        return $this->get("JobId");
    }

    /**
     * JobId: 异步请求成功后返回JobId，用以查询Job状态
     *
     * @param string $jobId
     */
    public function setJobId($jobId)
    {
        $this->set("JobId", $jobId);
    }

    /**
     * Results: 同步请求会返回命令行结果，异步请求该参数为空
     *
     * @return Results[]|null
     */
    public function getResults()
    {
        $items = $this->get("Results");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Results($item));
        }
        return $result;
    }

    /**
     * Results: 同步请求会返回命令行结果，异步请求该参数为空
     *
     * @param Results[] $results
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
