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

class ReferConf extends Response
{
    

    /**
     * ReferType: Refer防盗链配置  0白名单，1黑名单
     *
     * @return integer|null
     */
    public function getReferType()
    {
        return $this->get("ReferType");
    }

    /**
     * ReferType: Refer防盗链配置  0白名单，1黑名单
     *
     * @param int $referType
     */
    public function setReferType($referType)
    {
        $this->set("ReferType", $referType);
    }

    /**
     * NullRefer: ReferType为白名单时（删除），NullRefer为0代表不允许NULL refer访问，为1代表允许Null refer访问
     *
     * @return integer|null
     */
    public function getNullRefer()
    {
        return $this->get("NullRefer");
    }

    /**
     * NullRefer: ReferType为白名单时（删除），NullRefer为0代表不允许NULL refer访问，为1代表允许Null refer访问
     *
     * @param int $nullRefer
     */
    public function setNullRefer($nullRefer)
    {
        $this->set("NullRefer", $nullRefer);
    }

    /**
     * ReferList: Refer防盗链规则列表，支持正则表达式
     *
     * @return string[]|null
     */
    public function getReferList()
    {
        return $this->get("ReferList");
    }

    /**
     * ReferList: Refer防盗链规则列表，支持正则表达式
     *
     * @param string[] $referList
     */
    public function setReferList(array $referList)
    {
        $this->set("ReferList", $referList);
    }
}
