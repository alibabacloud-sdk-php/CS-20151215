<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CleanUserPermissionsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 687C5BAA-D103-4993-884B-C35E4314****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task ID.
     *
     * @example clean-user-permissions-2085266204********-6694c16e6ae07***********
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requestId' => 'request_id',
        'taskId' => 'task_id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CleanUserPermissionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }

        return $model;
    }
}
