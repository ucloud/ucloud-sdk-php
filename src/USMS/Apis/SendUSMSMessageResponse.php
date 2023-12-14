<?php
/**
 * Copyright 2023 UCloud Technology Co., Ltd.
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
namespace UCloud\USMS\Apis;

use UCloud\Core\Response\Response;

class SendUSMSMessageResponse extends Response
{
    

    /**
     * SessionNo: 本次提交发送的短信的唯一ID，可根据该值查询本次发送的短信列表
     *
     * @return string|null
     */
    public function getSessionNo()
    {
        return $this->get("SessionNo");
    }

    /**
     * SessionNo: 本次提交发送的短信的唯一ID，可根据该值查询本次发送的短信列表
     *
     * @param string $sessionNo
     */
    public function setSessionNo($sessionNo)
    {
        $this->set("SessionNo", $sessionNo);
    }

    /**
     * UserId: 本次提交的自定义业务标识ID，仅当发送时传入有效的UserId，才返回该字段。
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->get("UserId");
    }

    /**
     * UserId: 本次提交的自定义业务标识ID，仅当发送时传入有效的UserId，才返回该字段。
     *
     * @param string $userId
     */
    public function setUserId($userId)
    {
        $this->set("UserId", $userId);
    }
}
