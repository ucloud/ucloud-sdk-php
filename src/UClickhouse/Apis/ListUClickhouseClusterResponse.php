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
namespace UCloud\UClickhouse\Apis;

use UCloud\Core\Response\Response;
use UCloud\UClickhouse\Models\ListUClickhouseClusterResponseData;
use UCloud\UClickhouse\Models\ClickhouseCluster;

class ListUClickhouseClusterResponse extends Response
{
    

    /**
     * Data: 返回数据
     *
     * @return ListUClickhouseClusterResponseData|null
     */
    public function getData()
    {
        return new ListUClickhouseClusterResponseData($this->get("Data"));
    }

    /**
     * Data: 返回数据
     *
     * @param ListUClickhouseClusterResponseData $data
     */
    public function setData(array $data)
    {
        $this->set("Data", $data->getAll());
    }
}
