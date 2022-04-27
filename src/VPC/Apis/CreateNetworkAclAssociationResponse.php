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
namespace UCloud\VPC\Apis;

use UCloud\Core\Response\Response;
use UCloud\VPC\Models\AssociationInfo;

class CreateNetworkAclAssociationResponse extends Response
{
    

    /**
     * AssociationId: 创建的绑定关系的ID
     *
     * @return string|null
     */
    public function getAssociationId(): string
    {
        return $this->get("AssociationId");
    }

    /**
     * AssociationId: 创建的绑定关系的ID
     *
     * @param string $associationId
     */
    public function setAssociationId(string $associationId)
    {
        $this->set("AssociationId", $associationId);
    }

    /**
     * PrevAssociation: 该子网之前的绑定关系信息
     *
     * @return AssociationInfo|null
     */
    public function getPrevAssociation(): AssociationInfo
    {
        return new AssociationInfo($this->get("PrevAssociation"));
    }

    /**
     * PrevAssociation: 该子网之前的绑定关系信息
     *
     * @param AssociationInfo $prevAssociation
     */
    public function setPrevAssociation(AssociationInfo $prevAssociation)
    {
        $this->set("PrevAssociation", $prevAssociation->getAll());
    }
}
