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
namespace UCloud\UDB\Apis;

use UCloud\Core\Response\Response;

class DescribeUDBBackupBlacklistResponse extends Response
{
    

    /**
     * Blacklist: DB的黑名单列表, db.%为指定库 dbname.tablename为指定表
     *
     * @return string|null
     */
    public function getBlacklist()
    {
        return $this->get("Blacklist");
    }

    /**
     * Blacklist: DB的黑名单列表, db.%为指定库 dbname.tablename为指定表
     *
     * @param string $blacklist
     */
    public function setBlacklist($blacklist)
    {
        $this->set("Blacklist", $blacklist);
    }


}
