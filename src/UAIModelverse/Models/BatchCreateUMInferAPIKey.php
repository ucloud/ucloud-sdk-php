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
namespace UCloud\UAIModelverse\Models;

use UCloud\Core\Response\Response;

class BatchCreateUMInferAPIKey extends Response
{
    

    /**
     * KeyId: KeyId
     *
     * @return string|null
     */
    public function getKeyId()
    {
        return $this->get("KeyId");
    }

    /**
     * KeyId: KeyId
     *
     * @param string $keyId
     */
    public function setKeyId($keyId)
    {
        $this->set("KeyId", $keyId);
    }

    /**
     * Name: 名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * APIKey: 密钥
     *
     * @return string|null
     */
    public function getAPIKey()
    {
        return $this->get("APIKey");
    }

    /**
     * APIKey: 密钥
     *
     * @param string $apiKey
     */
    public function setAPIKey($apiKey)
    {
        $this->set("APIKey", $apiKey);
    }

    /**
     * Success: 是否成功
     *
     * @return boolean|null
     */
    public function getSuccess()
    {
        return $this->get("Success");
    }

    /**
     * Success: 是否成功
     *
     * @param boolean $success
     */
    public function setSuccess($success)
    {
        $this->set("Success", $success);
    }
}
