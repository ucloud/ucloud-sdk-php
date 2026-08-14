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
namespace UCloud\UFile\Models;

use UCloud\Core\Response\Response;

class PkgUsage extends Response
{
    

    /**
     * Date: 日期
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->get("Date");
    }

    /**
     * Date: 日期
     *
     * @param string $date
     */
    public function setDate($date)
    {
        $this->set("Date", $date);
    }

    /**
     * Cost: 使用量，单位为B
     *
     * @return string|null
     */
    public function getCost()
    {
        return $this->get("Cost");
    }

    /**
     * Cost: 使用量，单位为B
     *
     * @param string $cost
     */
    public function setCost($cost)
    {
        $this->set("Cost", $cost);
    }
}
