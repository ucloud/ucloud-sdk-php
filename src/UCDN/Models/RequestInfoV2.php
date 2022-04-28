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
namespace UCloud\UCDN\Models;

use UCloud\Core\Response\Response;

class RequestInfoV2 extends Response
{
    

    /**
     * Time: 带宽获取的时间点。格式：时间戳
     *
     * @return integer|null
     */
    public function getTime()
    {
        return $this->get("Time");
    }

    /**
     * Time: 带宽获取的时间点。格式：时间戳
     *
     * @param int $time
     */
    public function setTime($time)
    {
        $this->set("Time", $time);
    }

    /**
     * CdnRequest: 返回值返回指定时间区间内的cdn收到的请求次数之和
     *
     * @return float|null
     */
    public function getCdnRequest()
    {
        return $this->get("CdnRequest");
    }

    /**
     * CdnRequest: 返回值返回指定时间区间内的cdn收到的请求次数之和
     *
     * @param float $cdnRequest
     */
    public function setCdnRequest($cdnRequest)
    {
        $this->set("CdnRequest", $cdnRequest);
    }
}
