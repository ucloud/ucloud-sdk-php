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

class Pricing extends Response
{
    

    /**
     * Completion: 输出定价
     *
     * @return float|null
     */
    public function getCompletion()
    {
        return $this->get("Completion");
    }

    /**
     * Completion: 输出定价
     *
     * @param float $completion
     */
    public function setCompletion($completion)
    {
        $this->set("Completion", $completion);
    }

    /**
     * Prompt: 提示词定价
     *
     * @return float|null
     */
    public function getPrompt()
    {
        return $this->get("Prompt");
    }

    /**
     * Prompt: 提示词定价
     *
     * @param float $prompt
     */
    public function setPrompt($prompt)
    {
        $this->set("Prompt", $prompt);
    }

    /**
     * Image: 生图定价
     *
     * @return float|null
     */
    public function getImage()
    {
        return $this->get("Image");
    }

    /**
     * Image: 生图定价
     *
     * @param float $image
     */
    public function setImage($image)
    {
        $this->set("Image", $image);
    }

    /**
     * Currency: 币种
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->get("Currency");
    }

    /**
     * Currency: 币种
     *
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->set("Currency", $currency);
    }
}
