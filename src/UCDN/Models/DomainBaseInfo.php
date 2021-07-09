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
namespace UCloud\UCDN\Models;

use UCloud\Core\Response\Response;

class DomainBaseInfo extends Response {
    

    /**
     * Domain: 域名
     *
     * @return string|null
     */
    public function getDomain(): string {
        return $this->get("Domain");
    }

    /**
     * Domain: 域名
     *
     * @param string $domain
     */
    public function setDomain(string $domain) {
        $this->set("Domain", $domain);
    }

    /**
     * DomainId: 域名的资源id
     *
     * @return string|null
     */
    public function getDomainId(): string {
        return $this->get("DomainId");
    }

    /**
     * DomainId: 域名的资源id
     *
     * @param string $domainId
     */
    public function setDomainId(string $domainId) {
        $this->set("DomainId", $domainId);
    }


}
