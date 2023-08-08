<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeleteClusterRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $keepSlb;

    /**
     * @example false
     *
     * @var bool
     */
    public $retainAllResources;

    /**
     * @var string[]
     */
    public $retainResources;
    protected $_name = [
        'keepSlb'            => 'keep_slb',
        'retainAllResources' => 'retain_all_resources',
        'retainResources'    => 'retain_resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keepSlb) {
            $res['keep_slb'] = $this->keepSlb;
        }
        if (null !== $this->retainAllResources) {
            $res['retain_all_resources'] = $this->retainAllResources;
        }
        if (null !== $this->retainResources) {
            $res['retain_resources'] = $this->retainResources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['keep_slb'])) {
            $model->keepSlb = $map['keep_slb'];
        }
        if (isset($map['retain_all_resources'])) {
            $model->retainAllResources = $map['retain_all_resources'];
        }
        if (isset($map['retain_resources'])) {
            if (!empty($map['retain_resources'])) {
                $model->retainResources = $map['retain_resources'];
            }
        }

        return $model;
    }
}
