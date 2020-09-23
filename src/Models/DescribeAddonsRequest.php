<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeAddonsRequest extends Model
{
    /**
     * @description Region ID。
     *
     * @var string
     */
    public $region;

    /**
     * @description 集群类型，默认为kubernetes。
     *
     * @var string
     */
    public $clusterType;
    protected $_name = [
        'region'      => 'region',
        'clusterType' => 'cluster_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->clusterType) {
            $res['cluster_type'] = $this->clusterType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAddonsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }

        return $model;
    }
}
