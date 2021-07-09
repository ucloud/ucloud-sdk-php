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
namespace UCloud\UHost\Apis;

use UCloud\Core\Response\Response;

class ModifyUHostInstanceNameResponse extends Response {
    

    /**
     * UHostId: UHost实例ID
     *
     * @return string|null
     */
    public function getUHostId(): string {
        return $this->get("UHostId");
    }

    /**
     * UHostId: UHost实例ID
     *
     * @param string $uHostId
     */
    public function setUHostId(string $uHostId) {
        $this->set("UHostId", $uHostId);
    }


}
