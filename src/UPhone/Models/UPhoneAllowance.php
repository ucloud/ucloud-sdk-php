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

class UPhoneAllowance extends Response
{
    

    /**
     * ModelName: 枚举值，云手机型号名称，取值：UPhone X，UPhone Plus，UPhone Pro
     *
     * @return string|null
     */
    public function getModelName()
    {
        return $this->get("ModelName");
    }

    /**
     * ModelName: 枚举值，云手机型号名称，取值：UPhone X，UPhone Plus，UPhone Pro
     *
     * @param string $modelName
     */
    public function setModelName($modelName)
    {
        $this->set("ModelName", $modelName);
    }

    /**
     * Allowance: 可创建云手机个数
     *
     * @return int|null
     */
    public function getAllowance()
    {
        return $this->get("Allowance");
    }

    /**
     * Allowance: 可创建云手机个数
     *
     * @param int $allowance
     */
    public function setAllowance($allowance)
    {
        $this->set("Allowance", $allowance);
    }


}
