<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\UFile\Apis;

use UCloud\Core\Response\Response;
use UCloud\UFile\Models\UFileTokenSet;

class CreateUFileTokenResponse extends Response
{
    

    /**
     * TokenId: 令牌唯一ID
     *
     * @return string|null
     */
    public function getTokenId()
    {
        return $this->get("TokenId");
    }

    /**
     * TokenId: 令牌唯一ID
     *
     * @param string $tokenId
     */
    public function setTokenId($tokenId)
    {
        $this->set("TokenId", $tokenId);
    }

    /**
     * UFileTokenSet: 创建令牌的详细信息
     *
     * @return UFileTokenSet|null
     */
    public function getUFileTokenSet()
    {
        return new UFileTokenSet($this->get("UFileTokenSet"));
    }

    /**
     * UFileTokenSet: 创建令牌的详细信息
     *
     * @param UFileTokenSet $uFileTokenSet
     */
    public function setUFileTokenSet(array $uFileTokenSet)
    {
        $this->set("UFileTokenSet", $uFileTokenSet->getAll());
    }
}
