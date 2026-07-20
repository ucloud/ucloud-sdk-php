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
namespace UCloud\UAIModelverse\Models;

use UCloud\Core\Response\Response;

class PayResult extends Response
{
    

    /**
     * OrderNo: 订单号
     *
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->get("OrderNo");
    }

    /**
     * OrderNo: 订单号
     *
     * @param string $orderNo
     */
    public function setOrderNo($orderNo)
    {
        $this->set("OrderNo", $orderNo);
    }

    /**
     * Success: 是否支付成功
     *
     * @return boolean|null
     */
    public function getSuccess()
    {
        return $this->get("Success");
    }

    /**
     * Success: 是否支付成功
     *
     * @param boolean $success
     */
    public function setSuccess($success)
    {
        $this->set("Success", $success);
    }

    /**
     * Reason: 失败原因（成功时为空）
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->get("Reason");
    }

    /**
     * Reason: 失败原因（成功时为空）
     *
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->set("Reason", $reason);
    }
}
