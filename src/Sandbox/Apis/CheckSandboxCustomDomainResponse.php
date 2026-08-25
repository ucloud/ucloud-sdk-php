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
namespace UCloud\Sandbox\Apis;

use UCloud\Core\Response\Response;

class CheckSandboxCustomDomainResponse extends Response
{
    

    /**
     * Status: 检查结果Unknown:未知Checking：检查中Success：成功Timeout：超时Error：检查失败
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 检查结果Unknown:未知Checking：检查中Success：成功Timeout：超时Error：检查失败
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }
}
