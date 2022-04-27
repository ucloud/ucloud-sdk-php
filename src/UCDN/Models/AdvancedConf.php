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

class AdvancedConf extends Response
{
    

    /**
     * HttpClientHeader: 客户端响应http头列表
     *
     * @return string[]|null
     */
    public function getHttpClientHeader(): array
    {
        return $this->get("HttpClientHeader");
    }

    /**
     * HttpClientHeader: 客户端响应http头列表
     *
     * @param string[] $httpClientHeader
     */
    public function setHttpClientHeader(array $httpClientHeader)
    {
        $this->set("HttpClientHeader", $httpClientHeader);
    }

    /**
     * HttpOriginHeader: 源站http头列表
     *
     * @return string[]|null
     */
    public function getHttpOriginHeader(): array
    {
        return $this->get("HttpOriginHeader");
    }

    /**
     * HttpOriginHeader: 源站http头列表
     *
     * @param string[] $httpOriginHeader
     */
    public function setHttpOriginHeader(array $httpOriginHeader)
    {
        $this->set("HttpOriginHeader", $httpOriginHeader);
    }

    /**
     * Http2Https: http转https回源 true是，false否
     *
     * @return boolean|null
     */
    public function getHttp2Https(): bool
    {
        return $this->get("Http2Https");
    }

    /**
     * Http2Https: http转https回源 true是，false否
     *
     * @param boolean $http2Https
     */
    public function setHttp2Https(bool $http2Https)
    {
        $this->set("Http2Https", $http2Https);
    }
}
