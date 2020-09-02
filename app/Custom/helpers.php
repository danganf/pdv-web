<?php
if ( !function_exists('camel_case')) {
    function camel_case( $string ){
        return \Illuminate\Support\Str::camel( $string );
    }
}
if ( !function_exists('array_has')) {
    function array_has( $array, $key ){
        return \Illuminate\Support\Arr::has( $array, $key );
    }
}
if ( !function_exists('array_get')) {
    function array_get( $array, $key, $default=null ){
        return \Illuminate\Support\Arr::get( $array, $key, $default );
    }
}
if ( !function_exists('array_pull')) {
    function array_pull( &$array, $key, $default=null ){
        return \Illuminate\Support\Arr::pull($array, $key, $default);
    }
}