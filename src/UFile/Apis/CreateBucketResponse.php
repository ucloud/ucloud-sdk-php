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

namespace UCloud\UFile\Apis;

use UCloud\Core\Response\Response;

class CreateBucketResponse extends Response
{

    /**
     * BucketName: 已创建Bucket的名称
     *
     * @return string|null
     */
    public function getBucketName()
    {
        return $this->get("BucketName");
    }

    /**
     * BucketName: 已创建Bucket的名称
     *
     * @param string $bucketName
     */
    public function setBucketName(string $bucketName)
    {
        $this->set("BucketName", $bucketName);
    }
    /**
     * BucketId: 已创建Bucket的ID
     *
     * @return string|null
     */
    public function getBucketId()
    {
        return $this->get("BucketId");
    }

    /**
     * BucketId: 已创建Bucket的ID
     *
     * @param string $bucketId
     */
    public function setBucketId(string $bucketId)
    {
        $this->set("BucketId", $bucketId);
    }
}
