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

class UPhoneCommandResult extends Response
{
    

    /**
     * UPhoneId: 云手机实例的资源ID。
     *
     * @return string|null
     */
    public function getUPhoneId()
    {
        return $this->get("UPhoneId");
    }

    /**
     * UPhoneId: 云手机实例的资源ID。
     *
     * @param string $uPhoneId
     */
    public function setUPhoneId($uPhoneId)
    {
        $this->set("UPhoneId", $uPhoneId);
    }

    /**
     * ExecuteMsg: 同步shell命令的执行结果。
     *
     * @return string|null
     */
    public function getExecuteMsg()
    {
        return $this->get("ExecuteMsg");
    }

    /**
     * ExecuteMsg: 同步shell命令的执行结果。
     *
     * @param string $executeMsg
     */
    public function setExecuteMsg($executeMsg)
    {
        $this->set("ExecuteMsg", $executeMsg);
    }


}
