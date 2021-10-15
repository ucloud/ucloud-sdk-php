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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class LoggerSet extends Response
{
    

    /**
     * BucketName: ulb日志上传的bucket
     *
     * @return string|null
     */
    public function getBucketName()
    {
        return $this->get("BucketName");
    }

    /**
     * BucketName: ulb日志上传的bucket
     *
     * @param string $bucketName
     */
    public function setBucketName($bucketName)
    {
        $this->set("BucketName", $bucketName);
    }

    /**
     * TokenID: 上传到bucket使用的token的tokenid
     *
     * @return string|null
     */
    public function getTokenID()
    {
        return $this->get("TokenID");
    }

    /**
     * TokenID: 上传到bucket使用的token的tokenid
     *
     * @param string $tokenID
     */
    public function setTokenID($tokenID)
    {
        $this->set("TokenID", $tokenID);
    }

    /**
     * TokenName: bucket的token名称
     *
     * @return string|null
     */
    public function getTokenName()
    {
        return $this->get("TokenName");
    }

    /**
     * TokenName: bucket的token名称
     *
     * @param string $tokenName
     */
    public function setTokenName($tokenName)
    {
        $this->set("TokenName", $tokenName);
    }
}
