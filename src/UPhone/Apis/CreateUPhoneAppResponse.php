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
namespace UCloud\UPhone\Apis;

use UCloud\Core\Response\Response;

class CreateUPhoneAppResponse extends Response
{
    

    /**
     * AppId: 应用的唯一标识ID
     *
     * @return string|null
     */
    public function getAppId()
    {
        return $this->get("AppId");
    }

    /**
     * AppId: 应用的唯一标识ID
     *
     * @param string $appId
     */
    public function setAppId($appId)
    {
        $this->set("AppId", $appId);
    }
}
