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
namespace UCloud\UEC\Params;

use UCloud\Core\Request\Request;

class CreateUEcHolderParamImage extends Request
{
    

    /**
     * Message: 镜像用户名和密码（如镜像名：密码）
     *
     * @return string|null
     */
    public function getMessage(): string
    {
        return $this->get("Message");
    }

    /**
     * Message: 镜像用户名和密码（如镜像名：密码）
     *
     * @param string $message
     */
    public function setMessage(string $message)
    {
        $this->set("Message", $message);
    }

    /**
     * StoreAddress: 镜像仓库地址
     *
     * @return string|null
     */
    public function getStoreAddress(): string
    {
        return $this->get("StoreAddress");
    }

    /**
     * StoreAddress: 镜像仓库地址
     *
     * @param string $storeAddress
     */
    public function setStoreAddress(string $storeAddress)
    {
        $this->set("StoreAddress", $storeAddress);
    }
}
