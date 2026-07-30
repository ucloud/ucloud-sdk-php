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
namespace UCloud\UHost\Params;

use UCloud\Core\Request\Request;

class CheckUHostResourceCapacityParamDisksCustomBackup extends Request
{
    

    /**
     * Journal: Disks.N.BackupMode为"Custom"时，进行设置, 以12小时秒级为基础进行倍数扩增，如12、24、36、48。
     *
     * @return string|null
     */
    public function getJournal()
    {
        return $this->get("Journal");
    }

    /**
     * Journal: Disks.N.BackupMode为"Custom"时，进行设置, 以12小时秒级为基础进行倍数扩增，如12、24、36、48。
     *
     * @param string $journal
     */
    public function setJournal($journal)
    {
        $this->set("Journal", $journal);
    }

    /**
     * Hour: Disks.N.BackupMode为"Custom"时，进行设置, 以24小时级为基础进行倍数扩增，如24、48、72、96。
     *
     * @return string|null
     */
    public function getHour()
    {
        return $this->get("Hour");
    }

    /**
     * Hour: Disks.N.BackupMode为"Custom"时，进行设置, 以24小时级为基础进行倍数扩增，如24、48、72、96。
     *
     * @param string $hour
     */
    public function setHour($hour)
    {
        $this->set("Hour", $hour);
    }

    /**
     * Day: Disks.N.BackupMode为"Custom"时，进行设置, 以5天级为基础进行倍数扩增，如5、10、15、20、25、30。
     *
     * @return string|null
     */
    public function getDay()
    {
        return $this->get("Day");
    }

    /**
     * Day: Disks.N.BackupMode为"Custom"时，进行设置, 以5天级为基础进行倍数扩增，如5、10、15、20、25、30。
     *
     * @param string $day
     */
    public function setDay($day)
    {
        $this->set("Day", $day);
    }
}
