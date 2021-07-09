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
namespace UCloud\VPC\Apis;

use UCloud\Core\Response\Response;
use UCloud\VPC\Models\AssociationInfo;

class DescribeNetworkAclAssociationBySubnetResponse extends Response {
    

    /**
     * Association: 绑定信息
     *
     * @return AssociationInfo|null
     */
    public function getAssociation(): AssociationInfo {
        return new AssociationInfo($this->get("Association"));
    }

    /**
     * Association: 绑定信息
     *
     * @param AssociationInfo $association
     */
    public function setAssociation(AssociationInfo $association) {
        $this->set("Association", $association->getAll());
    }


}
