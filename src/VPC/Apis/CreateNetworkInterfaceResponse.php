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
namespace UCloud\VPC\Apis;

use UCloud\Core\Response\Response;
use UCloud\VPC\Models\NetworkInterfaceInfo;

class CreateNetworkInterfaceResponse extends Response
{
    

    /**
     * NetworkInterface: 若创建成功，则返回虚拟网卡信息。创建失败，无此参数
     *
     * @return NetworkInterfaceInfo|null
     */
    public function getNetworkInterface()
    {
        return new NetworkInterfaceInfo($this->get("NetworkInterface"));
    }

    /**
     * NetworkInterface: 若创建成功，则返回虚拟网卡信息。创建失败，无此参数
     *
     * @param NetworkInterfaceInfo $networkInterface
     */
    public function setNetworkInterface(array $networkInterface)
    {
        $this->set("NetworkInterface", $networkInterface->getAll());
    }


}
