<?php
function filter_wpseo_breadcrumb_separator($this_options_breadcrumbs_sep)
{
    return '<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" class="breadcrumbs__separator" data-v-469cfe6c="">
    <g fill="none" fill-rule="evenodd" data-v-469cfe6c=""><path d="M0 0h16v16H0z" data-v-469cfe6c=""></path><path d="M5.22 3.28a.75.75 0 011.06-1.06l5.25 5.25a.75.75 0 010 1.06l-5.25 5.25a.75.75 0 01-1.06-1.06L9.94 8 5.22 3.28z" fill="currentColor" fill-rule="nonzero" data-v-469cfe6c=""></path>
    </g></svg>';
}

add_filter('wpseo_breadcrumb_separator', 'filter_wpseo_breadcrumb_separator', 10, 1);
