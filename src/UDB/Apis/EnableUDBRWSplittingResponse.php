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

namespace UCloud\UDB\Apis;

use UCloud\Core\Response\Response;

class EnableUDBRWSplittingResponse extends Response
{

    /**
     * MasterDBId: DB实例ID（主库）
     *
     * @return string|null
     */
    public function getMasterDBId()
    {
        return $this->get("MasterDBId");
    }

    /**
     * MasterDBId: DB实例ID（主库）
     *
     * @param string $masterDBId
     */
    public function setMasterDBId(string $masterDBId)
    {
        $this->set("MasterDBId", $masterDBId);
    }
    /**
     * RWIp: 读写分离访问IP
     *
     * @return string|null
     */
    public function getRWIp()
    {
        return $this->get("RWIp");
    }

    /**
     * RWIp: 读写分离访问IP
     *
     * @param string $rwIp
     */
    public function setRWIp(string $rwIp)
    {
        $this->set("RWIp", $rwIp);
    }
}
