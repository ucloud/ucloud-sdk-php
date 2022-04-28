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
namespace UCloud\UPhone\Apis;

use UCloud\Core\Response\Response;

class InstallUPhoneAppVersionResponse extends Response
{
    

    /**
     * JobId: 请求的唯一标识Id，`RetCode`为0时返回，可根据此ID查询请求的执行状态
     *
     * @return string|null
     */
    public function getJobId()
    {
        return $this->get("JobId");
    }

    /**
     * JobId: 请求的唯一标识Id，`RetCode`为0时返回，可根据此ID查询请求的执行状态
     *
     * @param string $jobId
     */
    public function setJobId($jobId)
    {
        $this->set("JobId", $jobId);
    }
}
