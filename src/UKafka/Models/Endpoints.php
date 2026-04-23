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
namespace UCloud\UKafka\Models;

use UCloud\Core\Response\Response;

class Endpoints extends Response
{
    

    /**
     * PlainText: PLAINTEXT 协议访问信息
     *
     * @return Url|null
     */
    public function getPlainText()
    {
        return new Url($this->get("PlainText"));
    }

    /**
     * PlainText: PLAINTEXT 协议访问信息
     *
     * @param Url $plainText
     */
    public function setPlainText(array $plainText)
    {
        $this->set("PlainText", $plainText->getAll());
    }

    /**
     * SaslPlainText: SASL_PLAINTEXT 协议访问信息
     *
     * @return Url|null
     */
    public function getSaslPlainText()
    {
        return new Url($this->get("SaslPlainText"));
    }

    /**
     * SaslPlainText: SASL_PLAINTEXT 协议访问信息
     *
     * @param Url $saslPlainText
     */
    public function setSaslPlainText(array $saslPlainText)
    {
        $this->set("SaslPlainText", $saslPlainText->getAll());
    }
}
