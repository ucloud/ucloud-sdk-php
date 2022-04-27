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

namespace UCloud\UHost\Apis;

use UCloud\Core\Response\Response;

class CreateUHostInstanceResponse extends Response
{

    /**
     * UHostIds: UHost实例Id集合
     *
     * @return string[]|null
     */
    public function getUHostIds()
    {
        return $this->get("UHostIds");
    }

    /**
     * UHostIds: UHost实例Id集合
     *
     * @param string[] $uHostIds
     */
    public function setUHostIds(array $uHostIds)
    {
        $this->set("UHostIds", $uHostIds);
    }
    /**
     * IPs: 【批量创建不会返回】IP信息
     *
     * @return string[]|null
     */
    public function getIPs()
    {
        return $this->get("IPs");
    }

    /**
     * IPs: 【批量创建不会返回】IP信息
     *
     * @param string[] $iPs
     */
    public function setIPs(array $iPs)
    {
        $this->set("IPs", $iPs);
    }
}
