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

class OriginConf extends Response
{
    

    /**
     * OriginIpList: 源站ip即cdn服务器回源访问的ip地址。多个源站ip，可以这样表述，如：["1.1.1.1","2.2.2.2"]
     *
     * @return string[]|null
     */
    public function getOriginIpList()
    {
        return $this->get("OriginIpList");
    }

    /**
     * OriginIpList: 源站ip即cdn服务器回源访问的ip地址。多个源站ip，可以这样表述，如：["1.1.1.1","2.2.2.2"]
     *
     * @param string[] $originIpList
     */
    public function setOriginIpList(array $originIpList)
    {
        $this->set("OriginIpList", $originIpList);
    }

    /**
     * OriginHost: 回源Http请求头部Host，默认是加速域名
     *
     * @return string|null
     */
    public function getOriginHost()
    {
        return $this->get("OriginHost");
    }

    /**
     * OriginHost: 回源Http请求头部Host，默认是加速域名
     *
     * @param string $originHost
     */
    public function setOriginHost($originHost)
    {
        $this->set("OriginHost", $originHost);
    }

    /**
     * OriginPort: 回源端口
     *
     * @return int|null
     */
    public function getOriginPort()
    {
        return $this->get("OriginPort");
    }

    /**
     * OriginPort: 回源端口
     *
     * @param int $originPort
     */
    public function setOriginPort($originPort)
    {
        $this->set("OriginPort", $originPort);
    }

    /**
     * BackupOriginEnable: 1如果为false表示BackupOriginIp为空，表示没有备份源站，忽略BackupOriginIp，BackupOriginHost字段2如果为true表示BackupOriginIp.n必须至少有一个备份源站地址
     *
     * @return boolean|null
     */
    public function getBackupOriginEnable()
    {
        return $this->get("BackupOriginEnable");
    }

    /**
     * BackupOriginEnable: 1如果为false表示BackupOriginIp为空，表示没有备份源站，忽略BackupOriginIp，BackupOriginHost字段2如果为true表示BackupOriginIp.n必须至少有一个备份源站地址
     *
     * @param boolean $backupOriginEnable
     */
    public function setBackupOriginEnable($backupOriginEnable)
    {
        $this->set("BackupOriginEnable", $backupOriginEnable);
    }

    /**
     * BackupOriginIpList: 备份源站ip即cdn服务器回源访问的ip地址。多个源站ip，可以这样表述，如：["1.1.1.1","2.2.2.2"]
     *
     * @return string[]|null
     */
    public function getBackupOriginIpList()
    {
        return $this->get("BackupOriginIpList");
    }

    /**
     * BackupOriginIpList: 备份源站ip即cdn服务器回源访问的ip地址。多个源站ip，可以这样表述，如：["1.1.1.1","2.2.2.2"]
     *
     * @param string[] $backupOriginIpList
     */
    public function setBackupOriginIpList(array $backupOriginIpList)
    {
        $this->set("BackupOriginIpList", $backupOriginIpList);
    }

    /**
     * BackupOriginHost: 备份回源Http请求头部Host，默认是加速域名
     *
     * @return string|null
     */
    public function getBackupOriginHost()
    {
        return $this->get("BackupOriginHost");
    }

    /**
     * BackupOriginHost: 备份回源Http请求头部Host，默认是加速域名
     *
     * @param string $backupOriginHost
     */
    public function setBackupOriginHost($backupOriginHost)
    {
        $this->set("BackupOriginHost", $backupOriginHost);
    }

    /**
     * OriginErrorCode: 主源响应的回源错误码（如：404|500），默认空字符串
     *
     * @return string|null
     */
    public function getOriginErrorCode()
    {
        return $this->get("OriginErrorCode");
    }

    /**
     * OriginErrorCode: 主源响应的回源错误码（如：404|500），默认空字符串
     *
     * @param string $originErrorCode
     */
    public function setOriginErrorCode($originErrorCode)
    {
        $this->set("OriginErrorCode", $originErrorCode);
    }

    /**
     * OriginErrorNum: 回主源的回源失败数，默认1
     *
     * @return int|null
     */
    public function getOriginErrorNum()
    {
        return $this->get("OriginErrorNum");
    }

    /**
     * OriginErrorNum: 回主源的回源失败数，默认1
     *
     * @param int $originErrorNum
     */
    public function setOriginErrorNum($originErrorNum)
    {
        $this->set("OriginErrorNum", $originErrorNum);
    }

    /**
     * OriginProtocol: 源站协议http，http|https   默认http
     *
     * @return string|null
     */
    public function getOriginProtocol()
    {
        return $this->get("OriginProtocol");
    }

    /**
     * OriginProtocol: 源站协议http，http|https   默认http
     *
     * @param string $originProtocol
     */
    public function setOriginProtocol($originProtocol)
    {
        $this->set("OriginProtocol", $originProtocol);
    }

    /**
     * OriginFollow301: 跟随301跳转  0=不跟随 1=跟随
     *
     * @return int|null
     */
    public function getOriginFollow301()
    {
        return $this->get("OriginFollow301");
    }

    /**
     * OriginFollow301: 跟随301跳转  0=不跟随 1=跟随
     *
     * @param int $originFollow301
     */
    public function setOriginFollow301($originFollow301)
    {
        $this->set("OriginFollow301", $originFollow301);
    }


}
