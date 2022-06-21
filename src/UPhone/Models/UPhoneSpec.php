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
namespace UCloud\UPhone\Models;

use UCloud\Core\Response\Response;

class UPhoneSpec extends Response
{
    

    /**
     * UPhoneModelName: 手机规格名
     *
     * @return string|null
     */
    public function getUPhoneModelName()
    {
        return $this->get("UPhoneModelName");
    }

    /**
     * UPhoneModelName: 手机规格名
     *
     * @param string $uPhoneModelName
     */
    public function setUPhoneModelName($uPhoneModelName)
    {
        $this->set("UPhoneModelName", $uPhoneModelName);
    }

    /**
     * UPhoneCount: 手机开数，即该服务器规格能生成对应手机规格的云手机个数
     *
     * @return int|null
     */
    public function getUPhoneCount()
    {
        return $this->get("UPhoneCount");
    }

    /**
     * UPhoneCount: 手机开数，即该服务器规格能生成对应手机规格的云手机个数
     *
     * @param int $uPhoneCount
     */
    public function setUPhoneCount($uPhoneCount)
    {
        $this->set("UPhoneCount", $uPhoneCount);
    }


}
