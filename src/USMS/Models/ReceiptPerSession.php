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
namespace UCloud\USMS\Models;

use UCloud\Core\Response\Response;

class ReceiptPerSession extends Response
{
    

    /**
     * SessionNo: 发送短信时返回的SessionNo
     *
     * @return string|null
     */
    public function getSessionNo(): string
    {
        return $this->get("SessionNo");
    }

    /**
     * SessionNo: 发送短信时返回的SessionNo
     *
     * @param string $sessionNo
     */
    public function setSessionNo(string $sessionNo)
    {
        $this->set("SessionNo", $sessionNo);
    }

    /**
     * ReceiptSet: 每个手机号的短信回执信息集合
     *
     * @return ReceiptPerPhone[]|null
     */
    public function getReceiptSet(): array
    {
        $items = $this->get("ReceiptSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ReceiptPerPhone($item));
        }
        return $result;
    }

    /**
     * ReceiptSet: 每个手机号的短信回执信息集合
     *
     * @param ReceiptPerPhone[] $receiptSet
     */
    public function setReceiptSet(array $receiptSet)
    {
        $result = [];
        foreach ($receiptSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
