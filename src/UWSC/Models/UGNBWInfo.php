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
namespace UCloud\UWSC\Models;

use UCloud\Core\Response\Response;

class UGNBWInfo extends Response
{
    

    /**
     * UGNBWId: UGN带宽包ID
     *
     * @return string|null
     */
    public function getUGNBWId()
    {
        return $this->get("UGNBWId");
    }

    /**
     * UGNBWId: UGN带宽包ID
     *
     * @param string $ugnbwId
     */
    public function setUGNBWId($ugnbwId)
    {
        $this->set("UGNBWId", $ugnbwId);
    }

    /**
     * UGNBWName: UGN带宽包名称
     *
     * @return string|null
     */
    public function getUGNBWName()
    {
        return $this->get("UGNBWName");
    }

    /**
     * UGNBWName: UGN带宽包名称
     *
     * @param string $ugnbwName
     */
    public function setUGNBWName($ugnbwName)
    {
        $this->set("UGNBWName", $ugnbwName);
    }
}
