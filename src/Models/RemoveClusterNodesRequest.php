<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RemoveClusterNodesRequest extends Model {
    protected $_name = [
        'headers' => 'headers',
        'body' => 'body',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['headers'] = $this->headers;
        $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return RemoveClusterNodesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['headers'])){
            $model->headers = $map['headers'];
        }
        if(isset($map['body'])){
            $model->body = RemoveClusterNodesBody::fromMap($map['body']);
        }
        return $model;
    }
    /**
     * @description headers
     * @var array
     */
    public $headers;

    /**
     * @description body
     * @var RemoveClusterNodesBody
     */
    public $body;

}
