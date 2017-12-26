<?php
// +----------------------------------------------------------------------
// | MyTracer.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Common\Tracer;

use OpenTracing\Exceptions\InvalidReferencesSet;
use OpenTracing\Exceptions\InvalidSpanOption;
use OpenTracing\SpanContext;
use OpenTracing\SpanReference;
use OpenTracing\Tag;
use OpenTracing\Tracer;

class MyTracer implements Tracer
{
    public function startSpan($operationName, $options = [])
    {
        // TODO: Implement startSpan() method.
    }

    public function inject(SpanContext $spanContext, $format, &$carrier)
    {
        // TODO: Implement inject() method.
    }

    public function extract($format, $carrier)
    {
        // TODO: Implement extract() method.
    }

    public function flush()
    {
        // TODO: Implement flush() method.
    }

}