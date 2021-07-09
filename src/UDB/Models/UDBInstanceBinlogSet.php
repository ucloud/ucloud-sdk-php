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
namespace UCloud\UDB\Models;

use UCloud\Core\Response\Response;

class UDBInstanceBinlogSet extends Response {
    

    /**
     * Name: Binlog文件名
     *
     * @return string|null
     */
    public function getName(): string {
        return $this->get("Name");
    }

    /**
     * Name: Binlog文件名
     *
     * @param string $name
     */
    public function setName(string $name) {
        $this->set("Name", $name);
    }

    /**
     * Size: Binlog文件大小
     *
     * @return int|null
     */
    public function getSize(): int {
        return $this->get("Size");
    }

    /**
     * Size: Binlog文件大小
     *
     * @param int $size
     */
    public function setSize(int $size) {
        $this->set("Size", $size);
    }

    /**
     * BeginTime: Binlog文件生成时间(时间戳)
     *
     * @return int|null
     */
    public function getBeginTime(): int {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: Binlog文件生成时间(时间戳)
     *
     * @param int $beginTime
     */
    public function setBeginTime(int $beginTime) {
        $this->set("BeginTime", $beginTime);
    }

    /**
     * EndTime: Binlog文件结束时间(时间戳)
     *
     * @return int|null
     */
    public function getEndTime(): int {
        return $this->get("EndTime");
    }

    /**
     * EndTime: Binlog文件结束时间(时间戳)
     *
     * @param int $endTime
     */
    public function setEndTime(int $endTime) {
        $this->set("EndTime", $endTime);
    }


}
