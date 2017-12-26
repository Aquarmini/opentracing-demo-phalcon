<?php

namespace App\Tasks\OpenTrace;

use App\Common\Tracer\MyTracer;
use App\Tasks\Task;
use Xin\Cli\Color;
use OpenTracing\Formats;
use OpenTracing\GlobalTracer;

class TestTask extends Task
{

    public function mainAction()
    {
        echo Color::head('Help:') . PHP_EOL;
        echo Color::colorize('  清理缓存信息') . PHP_EOL . PHP_EOL;

        echo Color::head('Usage:') . PHP_EOL;
        echo Color::colorize('  php run open_trace:test@[action]', Color::FG_LIGHT_GREEN) . PHP_EOL . PHP_EOL;

        echo Color::head('Actions:') . PHP_EOL;
        echo Color::colorize('  test    发送测试到OpenTracing', Color::FG_LIGHT_GREEN) . PHP_EOL;
    }

    public function testAction()
    {
        $spanContext = GlobalTracer::get()->extract(
            Formats\HTTP_HEADERS,
            ['message' => 'hi, Agnes!']
        );

        $span = GlobalTracer::get()->startSpan('my_span', [
            'child_of' => $spanContext,
        ]);


        $span->log([
            'event' => 'soft error',
            'type' => 'cache timeout',
            'waiter.millis' => 1500,
        ]);

        $span->finish();
    }

}

