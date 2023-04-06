<?php

if (!function_exists('per_page')) {
      function per_page($per_page = null){
            if (null != $per_page) {
                  return $per_page;
            }
            return 10;
      }
}