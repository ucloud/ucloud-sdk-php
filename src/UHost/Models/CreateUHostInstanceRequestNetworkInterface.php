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

namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

use UCloud\UHost\Models\CreateUHostInstanceRequestNetworkInterfaceIPv6;
use UCloud\UHost\Models\CreateUHostInstanceRequestNetworkInterfaceEIP;
use UCloud\UHost\Models\CreateUHostInstanceRequest;

class CreateUHostInstanceRequestNetworkInterface extends Response
{

    /**
     * EIP:
     *
     * @return CreateUHostInstanceRequestNetworkInterfaceEIPModel|null
     */
    public function getEIP()
    {
        return new CreateUHostInstanceRequestNetworkInterfaceEIPModel($this->get("EIP"));
    }

    /**
     * EIP:
     *
     * @param CreateUHostInstanceRequestNetworkInterfaceEIPModel $eip
     */
    public function setEIP(CreateUHostInstanceRequestNetworkInterfaceEIPModel $eip)
    {
        $this->set("EIP", $eip->getAll());
    }
    /**
     * IPv6:
     *
     * @return CreateUHostInstanceRequestNetworkInterfaceIPv6Model|null
     */
    public function getIPv6()
    {
        return new CreateUHostInstanceRequestNetworkInterfaceIPv6Model($this->get("IPv6"));
    }

    /**
     * IPv6:
     *
     * @param CreateUHostInstanceRequestNetworkInterfaceIPv6Model $iPv6
     */
    public function setIPv6(CreateUHostInstanceRequestNetworkInterfaceIPv6Model $iPv6)
    {
        $this->set("IPv6", $iPv6->getAll());
    }
    /**
     * CreateCernetIp: 申请并绑定一个教育网EIP。True为申请并绑定，False为不会申请绑定，默认False。当前只支持具有HPC特性的机型。
     *
     * @return boolean|null
     */
    public function getCreateCernetIp()
    {
        return $this->get("CreateCernetIp");
    }

    /**
     * CreateCernetIp: 申请并绑定一个教育网EIP。True为申请并绑定，False为不会申请绑定，默认False。当前只支持具有HPC特性的机型。
     *
     * @param boolean $createCernetIp
     */
    public function setCreateCernetIp(bool $createCernetIp)
    {
        $this->set("CreateCernetIp", $createCernetIp);
    }
}
