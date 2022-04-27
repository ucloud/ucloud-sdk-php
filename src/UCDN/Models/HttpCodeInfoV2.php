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

use UCloud\UCDN\Models\HttpCodeV2Detail;
use UCloud\UCDN\Models\GetUcdnDomainHttpCodeV2Response;

class HttpCodeInfoV2 extends Response
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
     * Http1XX: 1xx信息，参考HttpCodeV2Detail结构
     *
     * @return HttpCodeV2DetailModel|null
     */
    public function getHttp1XX()
    {
        return new HttpCodeV2DetailModel($this->get("Http1XX"));
    }

    /**
     * Http1XX: 1xx信息，参考HttpCodeV2Detail结构
     *
     * @param HttpCodeV2DetailModel $http1XX
     */
    public function setHttp1XX(HttpCodeV2DetailModel $http1XX)
    {
        $this->set("Http1XX", $http1XX->getAll());
    }
    /**
     * Http2XX: 2xx信息，参考HttpCodeV2Detail结构
     *
     * @return HttpCodeV2DetailModel|null
     */
    public function getHttp2XX()
    {
        return new HttpCodeV2DetailModel($this->get("Http2XX"));
    }

    /**
     * Http2XX: 2xx信息，参考HttpCodeV2Detail结构
     *
     * @param HttpCodeV2DetailModel $http2XX
     */
    public function setHttp2XX(HttpCodeV2DetailModel $http2XX)
    {
        $this->set("Http2XX", $http2XX->getAll());
    }
    /**
     * Http3XX: 3xx信息，参考HttpCodeV2Detail结构
     *
     * @return HttpCodeV2DetailModel|null
     */
    public function getHttp3XX()
    {
        return new HttpCodeV2DetailModel($this->get("Http3XX"));
    }

    /**
     * Http3XX: 3xx信息，参考HttpCodeV2Detail结构
     *
     * @param HttpCodeV2DetailModel $http3XX
     */
    public function setHttp3XX(HttpCodeV2DetailModel $http3XX)
    {
        $this->set("Http3XX", $http3XX->getAll());
    }
    /**
     * Http4XX: 4xx信息，参考HttpCodeV2Detail结构
     *
     * @return HttpCodeV2DetailModel|null
     */
    public function getHttp4XX()
    {
        return new HttpCodeV2DetailModel($this->get("Http4XX"));
    }

    /**
     * Http4XX: 4xx信息，参考HttpCodeV2Detail结构
     *
     * @param HttpCodeV2DetailModel $http4XX
     */
    public function setHttp4XX(HttpCodeV2DetailModel $http4XX)
    {
        $this->set("Http4XX", $http4XX->getAll());
    }
    /**
     * Http5XX: 5xx信息，参考HttpCodeV2Detail结构
     *
     * @return HttpCodeV2DetailModel|null
     */
    public function getHttp5XX()
    {
        return new HttpCodeV2DetailModel($this->get("Http5XX"));
    }

    /**
     * Http5XX: 5xx信息，参考HttpCodeV2Detail结构
     *
     * @param HttpCodeV2DetailModel $http5XX
     */
    public function setHttp5XX(HttpCodeV2DetailModel $http5XX)
    {
        $this->set("Http5XX", $http5XX->getAll());
    }
    /**
     * Http6XX: 6xx信息，参考HttpCodeV2Detail结构
     *
     * @return HttpCodeV2DetailModel|null
     */
    public function getHttp6XX()
    {
        return new HttpCodeV2DetailModel($this->get("Http6XX"));
    }

    /**
     * Http6XX: 6xx信息，参考HttpCodeV2Detail结构
     *
     * @param HttpCodeV2DetailModel $http6XX
     */
    public function setHttp6XX(HttpCodeV2DetailModel $http6XX)
    {
        $this->set("Http6XX", $http6XX->getAll());
    }
}
