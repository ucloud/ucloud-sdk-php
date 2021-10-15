<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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

class CheckUDBInstanceToHAAllowanceResponse extends Response
{
    

    /**
     * Allowance: Yes ，No ，Yes即可以升级，No为不可以升级
     *
     * @return string|null
     */
    public function getAllowance()
    {
        return $this->get("Allowance");
    }

    /**
     * Allowance: Yes ，No ，Yes即可以升级，No为不可以升级
     *
     * @param string $allowance
     */
    public function setAllowance($allowance)
    {
        $this->set("Allowance", $allowance);
    }
}
