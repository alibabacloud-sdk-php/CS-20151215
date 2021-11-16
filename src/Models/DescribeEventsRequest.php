<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventsRequest extends Model
{
    /**
     * @description 集群ID
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 没页记录数量
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 页数
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 事件类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterId'  => 'cluster_id',
        'pageNumber' => 'page_number',
        'pageSize'   => 'page_size',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->pageNumber) {
            $res['page_number'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['page_number'])) {
            $model->pageNumber = $map['page_number'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
