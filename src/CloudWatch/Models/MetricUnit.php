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
namespace UCloud\CloudWatch\Models;

use UCloud\Core\Response\Response;

class MetricUnit extends Response
{
    

    /**
     * UnitID: 单位id
     *
     * @return integer|null
     */
    public function getUnitID()
    {
        return $this->get("UnitID");
    }

    /**
     * UnitID: 单位id
     *
     * @param int $unitID
     */
    public function setUnitID($unitID)
    {
        $this->set("UnitID", $unitID);
    }

    /**
     * GroupId: GroupId
     *
     * @return integer|null
     */
    public function getGroupId()
    {
        return $this->get("GroupId");
    }

    /**
     * GroupId: GroupId
     *
     * @param int $groupId
     */
    public function setGroupId($groupId)
    {
        $this->set("GroupId", $groupId);
    }

    /**
     * UnitEnName: 单位英文名称
     *
     * @return string|null
     */
    public function getUnitEnName()
    {
        return $this->get("UnitEnName");
    }

    /**
     * UnitEnName: 单位英文名称
     *
     * @param string $unitEnName
     */
    public function setUnitEnName($unitEnName)
    {
        $this->set("UnitEnName", $unitEnName);
    }

    /**
     * UnitChName: 单位中文名称
     *
     * @return string|null
     */
    public function getUnitChName()
    {
        return $this->get("UnitChName");
    }

    /**
     * UnitChName: 单位中文名称
     *
     * @param string $unitChName
     */
    public function setUnitChName($unitChName)
    {
        $this->set("UnitChName", $unitChName);
    }

    /**
     * UnitDesc: 单位描述
     *
     * @return string|null
     */
    public function getUnitDesc()
    {
        return $this->get("UnitDesc");
    }

    /**
     * UnitDesc: 单位描述
     *
     * @param string $unitDesc
     */
    public function setUnitDesc($unitDesc)
    {
        $this->set("UnitDesc", $unitDesc);
    }

    /**
     * ConversionFactor: 转换因子
     *
     * @return integer|null
     */
    public function getConversionFactor()
    {
        return $this->get("ConversionFactor");
    }

    /**
     * ConversionFactor: 转换因子
     *
     * @param int $conversionFactor
     */
    public function setConversionFactor($conversionFactor)
    {
        $this->set("ConversionFactor", $conversionFactor);
    }

    /**
     * CreatedBy: 创建人
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->get("CreatedBy");
    }

    /**
     * CreatedBy: 创建人
     *
     * @param string $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->set("CreatedBy", $createdBy);
    }

    /**
     * UpdatedBy: 修改人
     *
     * @return string|null
     */
    public function getUpdatedBy()
    {
        return $this->get("UpdatedBy");
    }

    /**
     * UpdatedBy: 修改人
     *
     * @param string $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->set("UpdatedBy", $updatedBy);
    }

    /**
     * CreatedAt: 创建时间
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->get("CreatedAt");
    }

    /**
     * CreatedAt: 创建时间
     *
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->set("CreatedAt", $createdAt);
    }

    /**
     * UpdatedAt: 修改时间
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->get("UpdatedAt");
    }

    /**
     * UpdatedAt: 修改时间
     *
     * @param string $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->set("UpdatedAt", $updatedAt);
    }

    /**
     * DeletedAt: 删除时间
     *
     * @return integer|null
     */
    public function getDeletedAt()
    {
        return $this->get("DeletedAt");
    }

    /**
     * DeletedAt: 删除时间
     *
     * @param int $deletedAt
     */
    public function setDeletedAt($deletedAt)
    {
        $this->set("DeletedAt", $deletedAt);
    }
}
