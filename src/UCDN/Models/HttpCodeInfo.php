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

use UCloud\UCDN\Models\GetNewUcdnDomainHttpCodeResponse;
use UCloud\UCDN\Models\GetUcdnDomainOriginHttpCodeResponse;

class HttpCodeInfo extends Response
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
    public function setTime(int $time)
    {
        $this->set("Time", $time);
    }
    /**
     * HttpOneXX: 1xx数量
     *
     * @return integer|null
     */
    public function getHttpOneXX()
    {
        return $this->get("HttpOneXX");
    }

    /**
     * HttpOneXX: 1xx数量
     *
     * @param int $httpOneXX
     */
    public function setHttpOneXX(int $httpOneXX)
    {
        $this->set("HttpOneXX", $httpOneXX);
    }
    /**
     * HttpTwoXX: 2xx数量
     *
     * @return integer|null
     */
    public function getHttpTwoXX()
    {
        return $this->get("HttpTwoXX");
    }

    /**
     * HttpTwoXX: 2xx数量
     *
     * @param int $httpTwoXX
     */
    public function setHttpTwoXX(int $httpTwoXX)
    {
        $this->set("HttpTwoXX", $httpTwoXX);
    }
    /**
     * HttpThreeXX: 3xx数量
     *
     * @return integer|null
     */
    public function getHttpThreeXX()
    {
        return $this->get("HttpThreeXX");
    }

    /**
     * HttpThreeXX: 3xx数量
     *
     * @param int $httpThreeXX
     */
    public function setHttpThreeXX(int $httpThreeXX)
    {
        $this->set("HttpThreeXX", $httpThreeXX);
    }
    /**
     * HttpFourXX: 4xx数量
     *
     * @return integer|null
     */
    public function getHttpFourXX()
    {
        return $this->get("HttpFourXX");
    }

    /**
     * HttpFourXX: 4xx数量
     *
     * @param int $httpFourXX
     */
    public function setHttpFourXX(int $httpFourXX)
    {
        $this->set("HttpFourXX", $httpFourXX);
    }
    /**
     * HttpFiveXX: 5xx数量
     *
     * @return integer|null
     */
    public function getHttpFiveXX()
    {
        return $this->get("HttpFiveXX");
    }

    /**
     * HttpFiveXX: 5xx数量
     *
     * @param int $httpFiveXX
     */
    public function setHttpFiveXX(int $httpFiveXX)
    {
        $this->set("HttpFiveXX", $httpFiveXX);
    }
}
