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
namespace UCloud\UBill\Apis;

use UCloud\Core\Response\Response;
use UCloud\UBill\Models\AccountInfo;

class GetBalanceResponse extends Response
{
    

    /**
     * AccountInfo: 账户余额信息
     *
     * @return AccountInfo|null
     */
    public function getAccountInfo()
    {
        return new AccountInfo($this->get("AccountInfo"));
    }

    /**
     * AccountInfo: 账户余额信息
     *
     * @param AccountInfo $accountInfo
     */
    public function setAccountInfo(array $accountInfo)
    {
        $this->set("AccountInfo", $accountInfo->getAll());
    }
}
