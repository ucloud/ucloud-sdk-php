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
namespace UCloud\UHost\Params;

use UCloud\Core\Request\Request;

class CreateUHostInstanceParamFeatures extends Request
{
    

    /**
     * UNI: 弹性网卡特性。开启了弹性网卡权限位，此特性才生效，默认 false 未开启，true 开启，仅与 NetCapability Normal 兼容。
     *
     * @return boolean|null
     */
    public function getUNI()
    {
        return $this->get("UNI");
    }

    /**
     * UNI: 弹性网卡特性。开启了弹性网卡权限位，此特性才生效，默认 false 未开启，true 开启，仅与 NetCapability Normal 兼容。
     *
     * @param boolean $uni
     */
    public function setUNI($uni)
    {
        $this->set("UNI", $uni);
    }


}
