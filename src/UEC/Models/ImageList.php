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
namespace UCloud\UEC\Models;

use UCloud\Core\Response\Response;

class ImageList extends Response
{
    

    /**
     * StoreAddr: 仓库地址
     *
     * @return string|null
     */
    public function getStoreAddr()
    {
        return $this->get("StoreAddr");
    }

    /**
     * StoreAddr: 仓库地址
     *
     * @param string $storeAddr
     */
    public function setStoreAddr($storeAddr)
    {
        $this->set("StoreAddr", $storeAddr);
    }

    /**
     * UserName: 用户名称
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->get("UserName");
    }

    /**
     * UserName: 用户名称
     *
     * @param string $userName
     */
    public function setUserName($userName)
    {
        $this->set("UserName", $userName);
    }

    /**
     * ImageKey: 镜像密钥
     *
     * @return string|null
     */
    public function getImageKey()
    {
        return $this->get("ImageKey");
    }

    /**
     * ImageKey: 镜像密钥
     *
     * @param string $imageKey
     */
    public function setImageKey($imageKey)
    {
        $this->set("ImageKey", $imageKey);
    }
}
