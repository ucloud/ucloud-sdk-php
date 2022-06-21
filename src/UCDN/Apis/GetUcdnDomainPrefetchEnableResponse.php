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
namespace UCloud\UCDN\Apis;

use UCloud\Core\Response\Response;

class GetUcdnDomainPrefetchEnableResponse extends Response
{
    

    /**
     * Enable: 0表示该域名未开启预取，1表示该域名已开启预取
     *
     * @return int|null
     */
    public function getEnable()
    {
        return $this->get("Enable");
    }

    /**
     * Enable: 0表示该域名未开启预取，1表示该域名已开启预取
     *
     * @param int $enable
     */
    public function setEnable($enable)
    {
        $this->set("Enable", $enable);
    }


}
