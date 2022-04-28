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

class UHostKeyPair extends Response
{
    

    /**
     * KeyPairId: 密钥对ID
     *
     * @return string|null
     */
    public function getKeyPairId()
    {
        return $this->get("KeyPairId");
    }

    /**
     * KeyPairId: 密钥对ID
     *
     * @param string $keyPairId
     */
    public function setKeyPairId($keyPairId)
    {
        $this->set("KeyPairId", $keyPairId);
    }

    /**
     * KeyPairState: 主机密钥对状态，Normal 正常，Deleted 删除
     *
     * @return string|null
     */
    public function getKeyPairState()
    {
        return $this->get("KeyPairState");
    }

    /**
     * KeyPairState: 主机密钥对状态，Normal 正常，Deleted 删除
     *
     * @param string $keyPairState
     */
    public function setKeyPairState($keyPairState)
    {
        $this->set("KeyPairState", $keyPairState);
    }
}
