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
namespace UCloud\UCDN\Models;

use UCloud\Core\Response\Response;

class AccessControlConf extends Response
{
    

    /**
     * IpBlackList: ip黑名单，多个ip，可表示为：IpBlackList.0=1.1.1.1，IpBlackList.1=2.2.2.2
     *
     * @return string[]|null
     */
    public function getIpBlackList()
    {
        return $this->get("IpBlackList");
    }

    /**
     * IpBlackList: ip黑名单，多个ip，可表示为：IpBlackList.0=1.1.1.1，IpBlackList.1=2.2.2.2
     *
     * @param string[] $ipBlackList
     */
    public function setIpBlackList(array $ipBlackList)
    {
        $this->set("IpBlackList", $ipBlackList);
    }

    /**
     * ReferConf: refer配置
     *
     * @return ReferConf|null
     */
    public function getReferConf()
    {
        return new ReferConf($this->get("ReferConf"));
    }

    /**
     * ReferConf: refer配置
     *
     * @param ReferConf $referConf
     */
    public function setReferConf(array $referConf)
    {
        $this->set("ReferConf", $referConf->getAll());
    }


}
