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
namespace UCloud\UAIModelverse\Models;

use UCloud\Core\Response\Response;

class ModelCapabilities extends Response
{
    

    /**
     * ContextCaching: 是否支持上下文缓存
     *
     * @return boolean|null
     */
    public function getContextCaching()
    {
        return $this->get("ContextCaching");
    }

    /**
     * ContextCaching: 是否支持上下文缓存
     *
     * @param boolean $contextCaching
     */
    public function setContextCaching($contextCaching)
    {
        $this->set("ContextCaching", $contextCaching);
    }

    /**
     * BatchInference: 是否支持批量推理
     *
     * @return boolean|null
     */
    public function getBatchInference()
    {
        return $this->get("BatchInference");
    }

    /**
     * BatchInference: 是否支持批量推理
     *
     * @param boolean $batchInference
     */
    public function setBatchInference($batchInference)
    {
        $this->set("BatchInference", $batchInference);
    }

    /**
     * StructuredOutput: 是否支持结构化输出
     *
     * @return boolean|null
     */
    public function getStructuredOutput()
    {
        return $this->get("StructuredOutput");
    }

    /**
     * StructuredOutput: 是否支持结构化输出
     *
     * @param boolean $structuredOutput
     */
    public function setStructuredOutput($structuredOutput)
    {
        $this->set("StructuredOutput", $structuredOutput);
    }

    /**
     * FunctionCall: 是否支持函数调用
     *
     * @return boolean|null
     */
    public function getFunctionCall()
    {
        return $this->get("FunctionCall");
    }

    /**
     * FunctionCall: 是否支持函数调用
     *
     * @param boolean $functionCall
     */
    public function setFunctionCall($functionCall)
    {
        $this->set("FunctionCall", $functionCall);
    }

    /**
     * WebSearch: 是否支持联网搜索
     *
     * @return boolean|null
     */
    public function getWebSearch()
    {
        return $this->get("WebSearch");
    }

    /**
     * WebSearch: 是否支持联网搜索
     *
     * @param boolean $webSearch
     */
    public function setWebSearch($webSearch)
    {
        $this->set("WebSearch", $webSearch);
    }

    /**
     * KnowledgeBase: 是否支持知识库
     *
     * @return boolean|null
     */
    public function getKnowledgeBase()
    {
        return $this->get("KnowledgeBase");
    }

    /**
     * KnowledgeBase: 是否支持知识库
     *
     * @param boolean $knowledgeBase
     */
    public function setKnowledgeBase($knowledgeBase)
    {
        $this->set("KnowledgeBase", $knowledgeBase);
    }

    /**
     * Mcp: 是否支持MCP
     *
     * @return boolean|null
     */
    public function getMcp()
    {
        return $this->get("Mcp");
    }

    /**
     * Mcp: 是否支持MCP
     *
     * @param boolean $mcp
     */
    public function setMcp($mcp)
    {
        $this->set("Mcp", $mcp);
    }

    /**
     * Experience: 是否支持体验
     *
     * @return boolean|null
     */
    public function getExperience()
    {
        return $this->get("Experience");
    }

    /**
     * Experience: 是否支持体验
     *
     * @param boolean $experience
     */
    public function setExperience($experience)
    {
        $this->set("Experience", $experience);
    }
}
