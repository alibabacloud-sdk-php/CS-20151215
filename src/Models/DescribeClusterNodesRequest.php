<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterNodesRequest extends Model {
    protected $_name = [
        'headers' => 'headers',
        'query' => 'query',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['headers'] = $this->headers;
        $res['query'] = null !== $this->query ? $this->query->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeClusterNodesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['headers'])){
            $model->headers = $map['headers'];
        }
        if(isset($map['query'])){
            $model->query = DescribeClusterNodesQuery::fromMap($map['query']);
        }
        return $model;
    }
    /**
     * @description headers
     * @var array
     */
    public $headers;

    /**
     * @description query
     * @var DescribeClusterNodesQuery
     */
    public $query;

}
