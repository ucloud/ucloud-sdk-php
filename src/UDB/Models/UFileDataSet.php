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

class UFileDataSet extends Response
{
    

    /**
     * TokenID: Ufile的令牌tokenid
     *
     * @return string|null
     */
    public function getTokenID(): string
    {
        return $this->get("TokenID");
    }

    /**
     * TokenID: Ufile的令牌tokenid
     *
     * @param string $tokenID
     */
    public function setTokenID(string $tokenID)
    {
        $this->set("TokenID", $tokenID);
    }

    /**
     * Bucket: bucket名称
     *
     * @return string|null
     */
    public function getBucket(): string
    {
        return $this->get("Bucket");
    }

    /**
     * Bucket: bucket名称
     *
     * @param string $bucket
     */
    public function setBucket(string $bucket)
    {
        $this->set("Bucket", $bucket);
    }
}
