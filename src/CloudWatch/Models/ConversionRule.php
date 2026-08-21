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
namespace UCloud\CloudWatch\Models;

use UCloud\Core\Response\Response;

class ConversionRule extends Response
{
    

    /**
     * From: 来源
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->get("From");
    }

    /**
     * From: 来源
     *
     * @param string $from
     */
    public function setFrom($from)
    {
        $this->set("From", $from);
    }

    /**
     * To: 目标
     *
     * @return string|null
     */
    public function getTo()
    {
        return $this->get("To");
    }

    /**
     * To: 目标
     *
     * @param string $to
     */
    public function setTo($to)
    {
        $this->set("To", $to);
    }

    /**
     * ConversionFactor: 转换因子
     *
     * @return integer|null
     */
    public function getConversionFactor()
    {
        return $this->get("ConversionFactor");
    }

    /**
     * ConversionFactor: 转换因子
     *
     * @param int $conversionFactor
     */
    public function setConversionFactor($conversionFactor)
    {
        $this->set("ConversionFactor", $conversionFactor);
    }
}
