<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeleteClusterRequest extends Model
{
    /**
     * @description 要保留的资源列表。
     *
     * @var string[]
     */
    public $retainResources;
    protected $_name = [
        'retainResources' => 'retain_resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['retain_resources'])) {
            if (!empty($map['retain_resources'])) {
                $model->retainResources = $map['retain_resources'];
            }
        }

        return $model;
    }
}
