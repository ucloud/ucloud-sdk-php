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
namespace UCloud\CloudWatch\Apis;

use UCloud\Core\Response\Response;
use UCloud\CloudWatch\Models\ListMonitorProduct;
use UCloud\CloudWatch\Models\Product;

class ListMonitorProductResponse extends Response
{
    

    /**
     * Data: 返回数据
     *
     * @return ListMonitorProduct|null
     */
    public function getData()
    {
        return new ListMonitorProduct($this->get("Data"));
    }

    /**
     * Data: 返回数据
     *
     * @param ListMonitorProduct $data
     */
    public function setData(array $data)
    {
        $this->set("Data", $data->getAll());
    }

    /**
     * TraceId: 链路ID
     *
     * @return string|null
     */
    public function getTraceId()
    {
        return $this->get("TraceId");
    }

    /**
     * TraceId: 链路ID
     *
     * @param string $traceId
     */
    public function setTraceId($traceId)
    {
        $this->set("TraceId", $traceId);
    }
}
