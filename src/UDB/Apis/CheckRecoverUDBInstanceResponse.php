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

class CheckRecoverUDBInstanceResponse extends Response
{
    

    /**
     * LastestTime: 核查成功返回值为可以回档到的最近时刻,核查失败不返回
     *
     * @return integer|null
     */
    public function getLastestTime()
    {
        return $this->get("LastestTime");
    }

    /**
     * LastestTime: 核查成功返回值为可以回档到的最近时刻,核查失败不返回
     *
     * @param int $lastestTime
     */
    public function setLastestTime($lastestTime)
    {
        $this->set("LastestTime", $lastestTime);
    }
}
