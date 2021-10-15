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
namespace UCloud\USMS\Models;

use UCloud\Core\Response\Response;

class OutSignature extends Response
{
    

    /**
     * SigId: 短信签名ID
     *
     * @return string|null
     */
    public function getSigId()
    {
        return $this->get("SigId");
    }

    /**
     * SigId: 短信签名ID
     *
     * @param string $sigId
     */
    public function setSigId($sigId)
    {
        $this->set("SigId", $sigId);
    }

    /**
     * SigContent: 短信签名内容
     *
     * @return string|null
     */
    public function getSigContent()
    {
        return $this->get("SigContent");
    }

    /**
     * SigContent: 短信签名内容
     *
     * @param string $sigContent
     */
    public function setSigContent($sigContent)
    {
        $this->set("SigContent", $sigContent);
    }

    /**
     * Status: 签名状态，0-待审核 1-审核中 2-审核通过 3-审核未通过 4-被禁用
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 签名状态，0-待审核 1-审核中 2-审核通过 3-审核未通过 4-被禁用
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * ErrDesc: 短信签名未通过审核原因
     *
     * @return string|null
     */
    public function getErrDesc()
    {
        return $this->get("ErrDesc");
    }

    /**
     * ErrDesc: 短信签名未通过审核原因
     *
     * @param string $errDesc
     */
    public function setErrDesc($errDesc)
    {
        $this->set("ErrDesc", $errDesc);
    }
}
