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
namespace UCloud\UGN\Apis;

use UCloud\Core\Response\Response;
use UCloud\UGN\Models\Network;

class AttachUGNNetworksResponse extends Response
{
    

    /**
     * Networks: 数组，数组内每个元素的字段如下： NetworkID：string，网络实例 ID，如 uvnet-xxxx； Type：string，网络实例类型，枚举值：VPC/UCVR/...； Region：string，网络实例所属地域，如 cn-sh2； OrgName：string，网络实例所属项目名，如 org-xxx
     *
     * @return Network[]|null
     */
    public function getNetworks()
    {
        $items = $this->get("Networks");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new Network($item));
        }
        return $result;
    }

    /**
     * Networks: 数组，数组内每个元素的字段如下： NetworkID：string，网络实例 ID，如 uvnet-xxxx； Type：string，网络实例类型，枚举值：VPC/UCVR/...； Region：string，网络实例所属地域，如 cn-sh2； OrgName：string，网络实例所属项目名，如 org-xxx
     *
     * @param Network[] $networks
     */
    public function setNetworks(array $networks)
    {
        $result = [];
        foreach ($networks as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * UGNID: UGN ID
     *
     * @return string|null
     */
    public function getUGNID()
    {
        return $this->get("UGNID");
    }

    /**
     * UGNID: UGN ID
     *
     * @param string $ugnid
     */
    public function setUGNID($ugnid)
    {
        $this->set("UGNID", $ugnid);
    }
}
