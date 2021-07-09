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
namespace UCloud\UHost\Params;

use UCloud\Core\Request\Request;

class CreateUHostInstanceParamDisks extends Request {
    

    /**
     * IsBoot: 是否是系统盘。枚举值：\\ > True，是系统盘 \\ > False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *
     * @return string|null
     */
    public function getIsBoot(): string {
        return $this->get("IsBoot");
    }

    /**
     * IsBoot: 是否是系统盘。枚举值：\\ > True，是系统盘 \\ > False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *
     * @param string $isBoot
     */
    public function setIsBoot(string $isBoot) {
        $this->set("IsBoot", $isBoot);
    }

    /**
     * Type: 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *
     * @return string|null
     */
    public function getType(): string {
        return $this->get("Type");
    }

    /**
     * Type: 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *
     * @param string $type
     */
    public function setType(string $type) {
        $this->set("Type", $type);
    }

    /**
     * Size: 磁盘大小，单位GB，必须是10GB的整数倍。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *
     * @return int|null
     */
    public function getSize(): int {
        return $this->get("Size");
    }

    /**
     * Size: 磁盘大小，单位GB，必须是10GB的整数倍。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *
     * @param int $size
     */
    public function setSize(int $size) {
        $this->set("Size", $size);
    }

    /**
     * BackupType: 磁盘备份方案。枚举值：\\ > NONE，无备份 \\ > DATAARK，数据方舟 \\ > SNAPSHOT（SNAPSHOT模式目前仅在上海C支持），快照 \\当前磁盘支持的备份模式参考 [[api:uhost-api:disk_type|磁盘类型]],默认值:NONE
     *
     * @return string|null
     */
    public function getBackupType(): string {
        return $this->get("BackupType");
    }

    /**
     * BackupType: 磁盘备份方案。枚举值：\\ > NONE，无备份 \\ > DATAARK，数据方舟 \\ > SNAPSHOT（SNAPSHOT模式目前仅在上海C支持），快照 \\当前磁盘支持的备份模式参考 [[api:uhost-api:disk_type|磁盘类型]],默认值:NONE
     *
     * @param string $backupType
     */
    public function setBackupType(string $backupType) {
        $this->set("BackupType", $backupType);
    }

    /**
     * Encrypted: 【功能仅部分可用区开放，详询技术支持】磁盘是否加密。加密：true, 不加密: false加密必须传入对应的的KmsKeyId,默认值false
     *
     * @return boolean|null
     */
    public function getEncrypted(): bool {
        return $this->get("Encrypted");
    }

    /**
     * Encrypted: 【功能仅部分可用区开放，详询技术支持】磁盘是否加密。加密：true, 不加密: false加密必须传入对应的的KmsKeyId,默认值false
     *
     * @param boolean $encrypted
     */
    public function setEncrypted(bool $encrypted) {
        $this->set("Encrypted", $encrypted);
    }

    /**
     * KmsKeyId: 【功能仅部分可用区开放，详询技术支持】kms key id。选择加密盘时必填。
     *
     * @return string|null
     */
    public function getKmsKeyId(): string {
        return $this->get("KmsKeyId");
    }

    /**
     * KmsKeyId: 【功能仅部分可用区开放，详询技术支持】kms key id。选择加密盘时必填。
     *
     * @param string $kmsKeyId
     */
    public function setKmsKeyId(string $kmsKeyId) {
        $this->set("KmsKeyId", $kmsKeyId);
    }

    /**
     * CouponId: 云盘代金券id。不适用于系统盘/本地盘。请通过DescribeCoupon接口查询，或登录用户中心查看
     *
     * @return string|null
     */
    public function getCouponId(): string {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 云盘代金券id。不适用于系统盘/本地盘。请通过DescribeCoupon接口查询，或登录用户中心查看
     *
     * @param string $couponId
     */
    public function setCouponId(string $couponId) {
        $this->set("CouponId", $couponId);
    }


}
