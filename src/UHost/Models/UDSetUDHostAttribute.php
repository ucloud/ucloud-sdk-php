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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class UDSetUDHostAttribute extends Response
{
    

    /**
     * UDHostId: 私有专区宿主机
     *
     * @return string|null
     */
    public function getUDHostId()
    {
        return $this->get("UDHostId");
    }

    /**
     * UDHostId: 私有专区宿主机
     *
     * @param string $udHostId
     */
    public function setUDHostId($udHostId)
    {
        $this->set("UDHostId", $udHostId);
    }

    /**
     * UDSetId: 私有专区
     *
     * @return string|null
     */
    public function getUDSetId()
    {
        return $this->get("UDSetId");
    }

    /**
     * UDSetId: 私有专区
     *
     * @param string $udSetId
     */
    public function setUDSetId($udSetId)
    {
        $this->set("UDSetId", $udSetId);
    }

    /**
     * HostBinding: 是否绑定私有专区宿主机
     *
     * @return boolean|null
     */
    public function getHostBinding()
    {
        return $this->get("HostBinding");
    }

    /**
     * HostBinding: 是否绑定私有专区宿主机
     *
     * @param boolean $hostBinding
     */
    public function setHostBinding($hostBinding)
    {
        $this->set("HostBinding", $hostBinding);
    }
}
