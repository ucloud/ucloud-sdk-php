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

class ApiProtocols extends Response
{
    

    /**
     * ChatCompletions: 是否支持chat协议
     *
     * @return boolean|null
     */
    public function getChatCompletions()
    {
        return $this->get("ChatCompletions");
    }

    /**
     * ChatCompletions: 是否支持chat协议
     *
     * @param boolean $chatCompletions
     */
    public function setChatCompletions($chatCompletions)
    {
        $this->set("ChatCompletions", $chatCompletions);
    }

    /**
     * Responses: 是否支持responses协议
     *
     * @return boolean|null
     */
    public function getResponses()
    {
        return $this->get("Responses");
    }

    /**
     * Responses: 是否支持responses协议
     *
     * @param boolean $responses
     */
    public function setResponses($responses)
    {
        $this->set("Responses", $responses);
    }

    /**
     * Gemini: 是否支持gemini协议
     *
     * @return boolean|null
     */
    public function getGemini()
    {
        return $this->get("Gemini");
    }

    /**
     * Gemini: 是否支持gemini协议
     *
     * @param boolean $gemini
     */
    public function setGemini($gemini)
    {
        $this->set("Gemini", $gemini);
    }

    /**
     * Anthropic: 是否支持Anthropic协议
     *
     * @return boolean|null
     */
    public function getAnthropic()
    {
        return $this->get("Anthropic");
    }

    /**
     * Anthropic: 是否支持Anthropic协议
     *
     * @param boolean $anthropic
     */
    public function setAnthropic($anthropic)
    {
        $this->set("Anthropic", $anthropic);
    }
}
