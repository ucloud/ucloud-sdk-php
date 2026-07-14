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
namespace UCloud\UK8S\Params;

use UCloud\Core\Request\Request;

class AddUK8SUHostNodeParamNetworkInterface extends Request
{
    

    /**
     * EIP:
     *
     * @return AddUK8SUHostNodeParamNetworkInterfaceEIP|null
     */
    public function getEIP()
    {
        return new AddUK8SUHostNodeParamNetworkInterfaceEIP($this->get("EIP"));
    }

    /**
     * EIP:
     *
     * @param AddUK8SUHostNodeParamNetworkInterfaceEIP $eip
     */
    public function setEIP(array $eip)
    {
        $this->set("EIP", $eip->getAll());
    }
}
