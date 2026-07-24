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
namespace UCloud\UDB\Apis;

use UCloud\Core\Response\Response;

class DescribeUDBBinlogBackupStrategyResponse extends Response
{
    

    /**
     * EnableBinlogBackup: 是否开启binlog自动备份，false:关闭,true:开启
     *
     * @return boolean|null
     */
    public function getEnableBinlogBackup()
    {
        return $this->get("EnableBinlogBackup");
    }

    /**
     * EnableBinlogBackup: 是否开启binlog自动备份，false:关闭,true:开启
     *
     * @param boolean $enableBinlogBackup
     */
    public function setEnableBinlogBackup($enableBinlogBackup)
    {
        $this->set("EnableBinlogBackup", $enableBinlogBackup);
    }

    /**
     * BinlogRemoteSaveDays: 远端binlog保存时长(天)
     *
     * @return integer|null
     */
    public function getBinlogRemoteSaveDays()
    {
        return $this->get("BinlogRemoteSaveDays");
    }

    /**
     * BinlogRemoteSaveDays: 远端binlog保存时长(天)
     *
     * @param int $binlogRemoteSaveDays
     */
    public function setBinlogRemoteSaveDays($binlogRemoteSaveDays)
    {
        $this->set("BinlogRemoteSaveDays", $binlogRemoteSaveDays);
    }
}
