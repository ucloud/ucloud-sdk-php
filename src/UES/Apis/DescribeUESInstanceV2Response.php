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
namespace UCloud\UES\Apis;

use UCloud\Core\Response\Response;
use UCloud\UES\Models\ClusterNodeV2Info;
use UCloud\UES\Models\ClusterV2Info;
use UCloud\UES\Models\NodeV2Info;

class DescribeUESInstanceV2Response extends Response
{
    

    /**
     * Result: 返回结果
     *
     * @return ClusterNodeV2Info|null
     */
    public function getResult()
    {
        return new ClusterNodeV2Info($this->get("Result"));
    }

    /**
     * Result: 返回结果
     *
     * @param ClusterNodeV2Info $result
     */
    public function setResult(array $result)
    {
        $this->set("Result", $result->getAll());
    }
}
