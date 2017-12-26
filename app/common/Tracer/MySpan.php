<?php
// +----------------------------------------------------------------------
// | MySpan.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Common\Tracer;

use OpenTracing\Span;
use OpenTracing\SpanContext;

class MySpan implements Span
{
    public function getOperationName()
    {
        return 'my_span';
    }

    public function getContext()
    {
        // TODO: Implement getContext() method.
    }

    public function finish($finishTime = null, array $logRecords = [])
    {
        // TODO: Implement finish() method.
    }

    public function overwriteOperationName($newOperationName)
    {
        // TODO: Implement overwriteOperationName() method.
    }

    public function setTags(array $tags)
    {
        // TODO: Implement setTags() method.
    }

    public function log(array $fields = [], $timestamp = null)
    {
        // TODO: Implement log() method.
    }

    public function addBaggageItem($key, $value)
    {
        // TODO: Implement addBaggageItem() method.
    }

    public function getBaggageItem($key)
    {
        // TODO: Implement getBaggageItem() method.
    }

}