<?php
require_once "vendor/autoload.php";


$str = 'hello @neo';
preg_match('/@(?<fullname>\w+)/', $str, $m);

var_dump([1, 2, 3, 4, 5, 6]);

$m = foo(10);







function foo($a)
{
    $a + 2;

    $tmp = [$a, 2, 5];

    $min = min($tmp);

    return $min;
}
// dump($m);

/*$array = [2, 2.2, 5, 4.5];
$fl_array = preg_grep("/^(\d+)?\.\d+$/", $array);
dump($fl_array);*/



// https://vk.com/doc10903696_208805128?hash=ca3a558dbc4ad29d3f&dl=ec6195707f8368caf8
//$str = 'hello visit my web site http://onliner.by https://tut.by https://ya.ru';
// echo preg_replace('@((?:ht|f)tps?://([^.]+)\.\w+)@', '<a href="$1">$2</a>', $str, -1, $c);
//$result = preg_match_all('@((?:ht|f)tps?://([^.]+)\.\w+)@', $str, $m, PREG_OFFSET_CAPTURE|PREG_SET_ORDER);
//dump($m);
/*$str = 'string';

dump(
    preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY)
);*/
// dump($c);
/*$re = '/php ?[57]/u';
$str = 'i like php 5';
preg_match($re, $str, $m);*/

/*
zend_extension="%sprogdir%/modules/php/%phpdriver%/ext/php_xdebug.dll"
xdebug.default_enable = 1
xdebug.auto_trace = 0
xdebug.collect_includes = 1
;xdebug.collect_params = 4
;xdebug.collect_return = 1
;xdebug.collect_assignments = 1
;xdebug.collect_vars = 1
xdebug.dump.REQUEST = *
xdebug.dump.SESSION = *
xdebug.dump.SERVER = REMOTE_ADDR,REQUEST_METHOD
;xdebug.dump.COOKIE =
;xdebug.dump.FILES =
;xdebug.dump.GET =
;xdebug.dump.POST =
xdebug.dump_globals = 1
xdebug.dump_once = 1
xdebug.dump_undefined = 1
xdebug.extended_info = 1
;xdebug.file_link_format = ""
;xdebug.idekey = ""
;xdebug.manual_url = "http://www.php.net"
xdebug.max_nesting_level = 256
xdebug.overload_var_dump = 1
;xdebug.profiler_append = 1
xdebug.profiler_enable = 0
xdebug.profiler_enable_trigger = 0
xdebug.profiler_output_dir="%sprogdir%/userdata/temp/xdebug/"
xdebug.profiler_output_name = "cachegrind.out.%H%R"
xdebug.remote_autostart = 1
xdebug.remote_enable = 1
;xdebug.remote_handler = "dbgp"
xdebug.remote_host = "localhost"
;xdebug.remote_log = "none"
;xdebug.remote_mode = "req"
xdebug.remote_port = 9000
;xdebug.scream = 1
;xdebug.show_exception_trace = 0
;xdebug.show_local_vars = 1
;xdebug.show_mem_delta = 1
;xdebug.trace_format = 1
;xdebug.trace_options = 1
xdebug.trace_output_dir = "%sprogdir%/userdata/temp/xdebug/"
;xdebug.trace_output_name = "trace.%H%R"
xdebug.var_display_max_children = 256
;xdebug.var_display_max_data = 1024
xdebug.var_display_max_depth = 16
;xdebug.remote_cookie_expire_time = 3600
 */