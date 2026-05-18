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
namespace UCloud\UDB\Apis;

use UCloud\Core\Response\Response;

class GetUDBInstanceSSLCertURLResponse extends Response
{
    

    /**
     * InternetUrl: 外网链接
     *
     * @return string|null
     */
    public function getInternetUrl()
    {
        return $this->get("InternetUrl");
    }

    /**
     * InternetUrl: 外网链接
     *
     * @param string $internetUrl
     */
    public function setInternetUrl($internetUrl)
    {
        $this->set("InternetUrl", $internetUrl);
    }

    /**
     * InnerUrl: 内网链接
     *
     * @return string|null
     */
    public function getInnerUrl()
    {
        return $this->get("InnerUrl");
    }

    /**
     * InnerUrl: 内网链接
     *
     * @param string $innerUrl
     */
    public function setInnerUrl($innerUrl)
    {
        $this->set("InnerUrl", $innerUrl);
    }
}
