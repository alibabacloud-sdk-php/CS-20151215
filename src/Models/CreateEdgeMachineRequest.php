<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeMachineRequest extends Model
{
    /**
     * @example ACK-B-B010-****
     *
     * @var string
     */
    public $hostname;

    /**
     * @example ACK-V-B010
     *
     * @var string
     */
    public $model;

    /**
     * @example Q2CB5XZAFBFG****
     *
     * @var string
     */
    public $sn;
    protected $_name = [
        'hostname' => 'hostname',
        'model'    => 'model',
        'sn'       => 'sn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['hostname'] = $this->hostname;
        }
        if (null !== $this->model) {
            $res['model'] = $this->model;
        }
        if (null !== $this->sn) {
            $res['sn'] = $this->sn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEdgeMachineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hostname'])) {
            $model->hostname = $map['hostname'];
        }
        if (isset($map['model'])) {
            $model->model = $map['model'];
        }
        if (isset($map['sn'])) {
            $model->sn = $map['sn'];
        }

        return $model;
    }
}
