<?php
/*
 * Qincai header: logo + fixed first-level nav + search.
 */

if (!function_exists('io_qincai_header_menu_items')) {
    function io_qincai_header_menu_items() {
        return array(
            array('label' => 'AI 工具', 'href' => '#module_id_1'),
            array('label' => 'AI大模型', 'href' => '#module_id_2'),
            array('label' => 'AI云端部署', 'href' => '#module_id_3'),
            array('label' => 'AI教程资源', 'href' => '#module_id_4'),
            array('label' => 'AI资讯', 'href' => '#module_id_5'),
            array('label' => 'Claw生态', 'href' => '#module_id_6'),
        );
    }
}

if (!function_exists('io_qincai_get_logo_markup')) {
    function io_qincai_get_logo_markup() {
        if (function_exists('get_custom_logo') && has_custom_logo()) {
            return get_custom_logo();
        }
        return '<a class="qincai-brand qincai-brand--fallback" href="' . esc_url(home_url('/')) . '"><span class="qincai-brand__mark">芹</span><span class="qincai-brand__text">' . esc_html(get_bloginfo('name')) . '</span></a>';
    }
}

if (!function_exists('io_header')) {
    function io_header()
    {
        io_show_header();
        io_show_mobile_header();
    }
}

if (!function_exists('io_show_header')) {
    function io_show_header(){
        $items = io_qincai_header_menu_items();
        echo '<header class="main-header header-fixed qincai-header">';
        echo '<div class="header-nav blur-bg">';
        echo '<div class="qincai-header-row container-header">';
        echo '<div class="qincai-header-brand">' . io_qincai_get_logo_markup() . '</div>';
        echo '<nav class="qincai-navbar-header-menu" aria-label="首页顶部导航">';
        echo '<ul class="qincai-navbar-header">';
        foreach ($items as $item) {
            echo '<li class="menu-item"><a href="' . esc_url($item['href']) . '">' . esc_html($item['label']) . '</a></li>';
        }
        echo '</ul>';
        echo '</nav>';
        echo '<div class="qincai-header-tools">';
        echo '<a class="qincai-header-tool" href="#qincai-home-search" aria-label="搜索工具"><i class="iconfont icon-search"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</header>';
    }
}

if (!function_exists('io_show_mobile_header')) {
    function io_show_mobile_header(){
        echo '<div class="qincai-mobile-nav d-md-none">';
        echo '<div class="qincai-mobile-nav__inner">';
        echo '<div class="qincai-mobile-nav__brand">' . wp_kses_post(io_qincai_get_logo_markup()) . '</div>';
        echo '<a class="qincai-mobile-nav__search" href="#qincai-home-search">搜索工具</a>';
        echo '</div>';
        echo '</div>';
    }
}
