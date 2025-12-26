<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UCompShare\Models;

use UCloud\Core\Response\Response;

class Projects extends Response
{
    

    /**
     * AccountName: 账号昵称
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->get("AccountName");
    }

    /**
     * AccountName: 账号昵称
     *
     * @param string $accountName
     */
    public function setAccountName($accountName)
    {
        $this->set("AccountName", $accountName);
    }

    /**
     * AccountId: 账号Id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->get("AccountId");
    }

    /**
     * AccountId: 账号Id
     *
     * @param string $accountId
     */
    public function setAccountId($accountId)
    {
        $this->set("AccountId", $accountId);
    }
}
