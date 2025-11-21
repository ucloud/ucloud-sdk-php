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
namespace UCloud\UFile\Models;

use UCloud\Core\Response\Response;

class BucketStaticPageRule extends Response
{
    

    /**
     * Status: 启用状态
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 启用状态
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * DefaultIndex: 默认网页
     *
     * @return string|null
     */
    public function getDefaultIndex()
    {
        return $this->get("DefaultIndex");
    }

    /**
     * DefaultIndex: 默认网页
     *
     * @param string $defaultIndex
     */
    public function setDefaultIndex($defaultIndex)
    {
        $this->set("DefaultIndex", $defaultIndex);
    }

    /**
     * SubDirRedirect: 子目录重定向功能的启用状态
     *
     * @return string|null
     */
    public function getSubDirRedirect()
    {
        return $this->get("SubDirRedirect");
    }

    /**
     * SubDirRedirect: 子目录重定向功能的启用状态
     *
     * @param string $subDirRedirect
     */
    public function setSubDirRedirect($subDirRedirect)
    {
        $this->set("SubDirRedirect", $subDirRedirect);
    }

    /**
     * RuleFor404: 404时的处理规则
     *
     * @return string|null
     */
    public function getRuleFor404()
    {
        return $this->get("RuleFor404");
    }

    /**
     * RuleFor404: 404时的处理规则
     *
     * @param string $ruleFor404
     */
    public function setRuleFor404($ruleFor404)
    {
        $this->set("RuleFor404", $ruleFor404);
    }

    /**
     * DefaultPage404: 默认404页面在存储桶的路径
     *
     * @return string|null
     */
    public function getDefaultPage404()
    {
        return $this->get("DefaultPage404");
    }

    /**
     * DefaultPage404: 默认404页面在存储桶的路径
     *
     * @param string $defaultPage404
     */
    public function setDefaultPage404($defaultPage404)
    {
        $this->set("DefaultPage404", $defaultPage404);
    }
}
