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
namespace UCloud\UMongoDB\Apis;

use UCloud\Core\Response\Response;

class DescribeUMongoDBBackupURLResponse extends Response
{
    

    /**
     * InternetAddress: 备份文件公网地址
     *
     * @return string|null
     */
    public function getInternetAddress()
    {
        return $this->get("InternetAddress");
    }

    /**
     * InternetAddress: 备份文件公网地址
     *
     * @param string $internetAddress
     */
    public function setInternetAddress($internetAddress)
    {
        $this->set("InternetAddress", $internetAddress);
    }

    /**
     * IntranetAddress: 备份文件内网地址
     *
     * @return string|null
     */
    public function getIntranetAddress()
    {
        return $this->get("IntranetAddress");
    }

    /**
     * IntranetAddress: 备份文件内网地址
     *
     * @param string $intranetAddress
     */
    public function setIntranetAddress($intranetAddress)
    {
        $this->set("IntranetAddress", $intranetAddress);
    }
}
