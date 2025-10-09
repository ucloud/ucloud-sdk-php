<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class Certificate extends Response
{
    

    /**
     * SSLId: 证书ID
     *
     * @return string|null
     */
    public function getSSLId()
    {
        return $this->get("SSLId");
    }

    /**
     * SSLId: 证书ID
     *
     * @param string $sslId
     */
    public function setSSLId($sslId)
    {
        $this->set("SSLId", $sslId);
    }

    /**
     * IsDefault: 是否为默认证书
     *
     * @return boolean|null
     */
    public function getIsDefault()
    {
        return $this->get("IsDefault");
    }

    /**
     * IsDefault: 是否为默认证书
     *
     * @param boolean $isDefault
     */
    public function setIsDefault($isDefault)
    {
        $this->set("IsDefault", $isDefault);
    }
}
