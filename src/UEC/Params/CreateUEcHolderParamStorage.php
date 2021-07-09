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
namespace UCloud\UEC\Params;

use UCloud\Core\Request\Request;

class CreateUEcHolderParamStorage extends Request {
    

    /**
     * Path: 存储卷挂载路径
     *
     * @return string|null
     */
    public function getPath(): string {
        return $this->get("Path");
    }

    /**
     * Path: 存储卷挂载路径
     *
     * @param string $path
     */
    public function setPath(string $path) {
        $this->set("Path", $path);
    }

    /**
     * ResourceId: 存储卷资源id
     *
     * @return string|null
     */
    public function getResourceId(): string {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 存储卷资源id
     *
     * @param string $resourceId
     */
    public function setResourceId(string $resourceId) {
        $this->set("ResourceId", $resourceId);
    }


}
