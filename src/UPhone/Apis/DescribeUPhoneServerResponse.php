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
use UCloud\UPhone\Models\ServerInstance;
use UCloud\UPhone\Models\ServerModelInstance;
use UCloud\UPhone\Models\ServerDiskSet;
use UCloud\UPhone\Models\UPhoneSpec;
use UCloud\UPhone\Models\IpSet;

class DescribeUPhoneServerResponse extends Response
{
    

    /**
     * TotalCount: ServerInstance总数
     *
     * @return integer|null
     */
    public function getTotalCount()
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: ServerInstance总数
     *
     * @param int $totalCount
     */
    public function setTotalCount($totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * Servers: 云手机服务器列表，每项参数可见数据模型 [ServerInstance](#ServerInstance)
     *
     * @return ServerInstance[]|null
     */
    public function getServers()
    {
        $items = $this->get("Servers");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ServerInstance($item));
        }
        return $result;
    }

    /**
     * Servers: 云手机服务器列表，每项参数可见数据模型 [ServerInstance](#ServerInstance)
     *
     * @param ServerInstance[] $servers
     */
    public function setServers(array $servers)
    {
        $result = [];
        foreach ($servers as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
