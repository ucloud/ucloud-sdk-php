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
namespace UCloud\UAccount\Apis;

use UCloud\Core\Request\Request;

class InviteSubaccountRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "InviteSubaccount"]);
        $this->markRequired("UserEmail");
        $this->markRequired("UserPhone");
        $this->markRequired("UserName");
        $this->markRequired("IsFinance");
    }

    

    /**
     * UserEmail: 受邀成员邮箱地址，不得重复
     *
     * @return string|null
     */
    public function getUserEmail(): string {
        return $this->get("UserEmail");
    }

    /**
     * UserEmail: 受邀成员邮箱地址，不得重复
     *
     * @param string $userEmail
     */
    public function setUserEmail(string $userEmail) {
        $this->set("UserEmail", $userEmail);
    }

    /**
     * UserPhone: 受邀成员手机号码
     *
     * @return string|null
     */
    public function getUserPhone(): string {
        return $this->get("UserPhone");
    }

    /**
     * UserPhone: 受邀成员手机号码
     *
     * @param string $userPhone
     */
    public function setUserPhone(string $userPhone) {
        $this->set("UserPhone", $userPhone);
    }

    /**
     * UserName: 受邀成员姓名
     *
     * @return string|null
     */
    public function getUserName(): string {
        return $this->get("UserName");
    }

    /**
     * UserName: 受邀成员姓名
     *
     * @param string $userName
     */
    public function setUserName(string $userName) {
        $this->set("UserName", $userName);
    }

    /**
     * IsFinance: 是否有财务权限(true:是,false:否,默认为否)
     *
     * @return string|null
     */
    public function getIsFinance(): string {
        return $this->get("IsFinance");
    }

    /**
     * IsFinance: 是否有财务权限(true:是,false:否,默认为否)
     *
     * @param string $isFinance
     */
    public function setIsFinance(string $isFinance) {
        $this->set("IsFinance", $isFinance);
    }


}
