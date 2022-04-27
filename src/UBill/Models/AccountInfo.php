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
namespace UCloud\UBill\Models;

use UCloud\Core\Response\Response;

class AccountInfo extends Response
{
    

    /**
     * AmountFreeze: 冻结账户金额
     *
     * @return string|null
     */
    public function getAmountFreeze(): string
    {
        return $this->get("AmountFreeze");
    }

    /**
     * AmountFreeze: 冻结账户金额
     *
     * @param string $amountFreeze
     */
    public function setAmountFreeze(string $amountFreeze)
    {
        $this->set("AmountFreeze", $amountFreeze);
    }

    /**
     * AmountCredit: 信用账户余额
     *
     * @return string|null
     */
    public function getAmountCredit(): string
    {
        return $this->get("AmountCredit");
    }

    /**
     * AmountCredit: 信用账户余额
     *
     * @param string $amountCredit
     */
    public function setAmountCredit(string $amountCredit)
    {
        $this->set("AmountCredit", $amountCredit);
    }

    /**
     * AmountFree: 赠送账户余额
     *
     * @return string|null
     */
    public function getAmountFree(): string
    {
        return $this->get("AmountFree");
    }

    /**
     * AmountFree: 赠送账户余额
     *
     * @param string $amountFree
     */
    public function setAmountFree(string $amountFree)
    {
        $this->set("AmountFree", $amountFree);
    }

    /**
     * Amount: 账户余额
     *
     * @return string|null
     */
    public function getAmount(): string
    {
        return $this->get("Amount");
    }

    /**
     * Amount: 账户余额
     *
     * @param string $amount
     */
    public function setAmount(string $amount)
    {
        $this->set("Amount", $amount);
    }

    /**
     * AmountAvailable: 账户可用余额
     *
     * @return string|null
     */
    public function getAmountAvailable(): string
    {
        return $this->get("AmountAvailable");
    }

    /**
     * AmountAvailable: 账户可用余额
     *
     * @param string $amountAvailable
     */
    public function setAmountAvailable(string $amountAvailable)
    {
        $this->set("AmountAvailable", $amountAvailable);
    }
}
