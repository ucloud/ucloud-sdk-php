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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class NodeGroupDiskConfig extends Response
{
    

    /**
     * IsBoot: 是否为系统盘
     *
     * @return boolean|null
     */
    public function getIsBoot()
    {
        return $this->get("IsBoot");
    }

    /**
     * IsBoot: 是否为系统盘
     *
     * @param boolean $isBoot
     */
    public function setIsBoot($isBoot)
    {
        $this->set("IsBoot", $isBoot);
    }

    /**
     * Type: 磁盘类型
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 磁盘类型
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * Size: 磁盘大小，单位 GB
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 磁盘大小，单位 GB
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * KmsKeyId: 磁盘加密密钥 ID
     *
     * @return string|null
     */
    public function getKmsKeyId()
    {
        return $this->get("KmsKeyId");
    }

    /**
     * KmsKeyId: 磁盘加密密钥 ID
     *
     * @param string $kmsKeyId
     */
    public function setKmsKeyId($kmsKeyId)
    {
        $this->set("KmsKeyId", $kmsKeyId);
    }
}
