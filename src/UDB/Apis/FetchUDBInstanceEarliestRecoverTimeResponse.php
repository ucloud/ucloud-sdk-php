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
namespace UCloud\UDB\Apis;

use UCloud\Core\Response\Response;

class FetchUDBInstanceEarliestRecoverTimeResponse extends Response
{
    

    /**
     * EarliestTime: 获取最早可回档时间点
     *
     * @return integer|null
     */
    public function getEarliestTime()
    {
        return $this->get("EarliestTime");
    }

    /**
     * EarliestTime: 获取最早可回档时间点
     *
     * @param int $earliestTime
     */
    public function setEarliestTime($earliestTime)
    {
        $this->set("EarliestTime", $earliestTime);
    }
}
