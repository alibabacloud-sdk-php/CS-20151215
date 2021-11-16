<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeleteClusterRequest extends Model
{
    /**
     * @description 是否保留SLB。  true：保留 false：不保留 默认值：false。
     *
     * @var bool
     */
    public $keepSlb;

    /**
     * @description 是否保留所有资源,如果设置了该值，将会忽略retain_resources。  true：保留 false：不保留 默认值：fase。
     *
     * @var bool
     */
    public $retainAllResources;

    /**
     * @description 要保留的资源列表。
     *
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
