<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CancelWorkflowRequest extends Model
{
    /**
     * @description 执行的操作，目前只支持cancel。
     *
     * @var string
     */
    public $action;
    protected $_name = [
        'action' => 'action',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelWorkflowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        return $model;
    }
}
