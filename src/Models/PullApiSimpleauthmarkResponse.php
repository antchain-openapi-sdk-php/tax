<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\TAX\Models;

use AlibabaCloud\Tea\Model;

class PullApiSimpleauthmarkResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 拉取推送系统时间
    /**
     * @var string
     */
    public $timestamp;

    // 请求id，幂等控制
    /**
     * @var string
     */
    public $bizUniqueId;

    // 调用的租户
    /**
     * @var string
     */
    public $instCode;

    // oss文件的域名地址
    // 测试环境域名：http://invoice-oss-sit.oss-cn-hangzhou.aliyuncs.com
    // 生产环境域名：http://invoice-commercial-prod.oss-cn-hangzhou.aliyuncs.com
    // 端口是默认的80
    /**
     * @var DataMarkFileResult[]
     */
    public $resultList;
    protected $_name = [
        'reqMsgId'    => 'req_msg_id',
        'resultCode'  => 'result_code',
        'resultMsg'   => 'result_msg',
        'timestamp'   => 'timestamp',
        'bizUniqueId' => 'biz_unique_id',
        'instCode'    => 'inst_code',
        'resultList'  => 'result_list',
    ];

    public function validate()
    {
        Model::validatePattern('timestamp', $this->timestamp, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}([Z]|([\\.]\\d{1,9})?[\\+]\\d{2}[\\:]?\\d{2})');
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }
        if (null !== $this->bizUniqueId) {
            $res['biz_unique_id'] = $this->bizUniqueId;
        }
        if (null !== $this->instCode) {
            $res['inst_code'] = $this->instCode;
        }
        if (null !== $this->resultList) {
            $res['result_list'] = [];
            if (null !== $this->resultList && \is_array($this->resultList)) {
                $n = 0;
                foreach ($this->resultList as $item) {
                    $res['result_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PullApiSimpleauthmarkResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }
        if (isset($map['biz_unique_id'])) {
            $model->bizUniqueId = $map['biz_unique_id'];
        }
        if (isset($map['inst_code'])) {
            $model->instCode = $map['inst_code'];
        }
        if (isset($map['result_list'])) {
            if (!empty($map['result_list'])) {
                $model->resultList = [];
                $n                 = 0;
                foreach ($map['result_list'] as $item) {
                    $model->resultList[$n++] = null !== $item ? DataMarkFileResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
