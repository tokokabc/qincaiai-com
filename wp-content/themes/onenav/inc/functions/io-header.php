<?php
/*
 * Qincai homepage header rebuild with original logo chain.
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

if (!function_exists('io_qincai_render_brand')) {
    function io_qincai_render_brand() {
        echo '<div class="qincai-header-brand">';
        if (function_exists('io_get_logo_html')) {
            echo io_get_logo_html();
        } elseif (function_exists('the_custom_logo') && has_custom_logo()) {
            the_custom_logo();
        } else {
            echo '<a class="qincai-brand qincai-brand--fallback" href="' . esc_url(home_url('/')) . '"><span class="qincai-brand__mark">芹</span><span class="qincai-brand__text"><strong>' . esc_html(get_bloginfo('name')) . '</strong><small>' . esc_html(get_bloginfo('description')) . '</small></span></a>';
        }
        echo '</div>';
    }
}

if (!function_exists('io_qincai_render_header_menu')) {
    function io_qincai_render_header_menu() {
        $items = io_qincai_header_menu_items();
        echo '<div class="qincai-navbar-header-menu">';
        echo '<ul class="qincai-navbar-header">';
        foreach ($items as $item) {
            echo '<li class="menu-item"><a href="' . esc_url($item['href']) . '">' . esc_html($item['label']) . '</a></li>';
        }
        echo '</ul>';
        echo '</div>';
    }
}

if (!function_exists('io_qincai_render_header_tools')) {
    function io_qincai_render_header_tools() {
        echo '<div class="qincai-header-tools">';
        echo '<a class="qincai-header-tool" href="#qincai-home-search" title="搜索"><i class="iconfont icon-search"></i></a>';
        echo '</div>';
    }
}

if (!function_exists('io_header')) {
    function io_header()
    {
        io_show_header();
    }
}

if (!function_exists('io_show_header')) {
    function io_show_header(){
        echo '<header class="main-header header-fixed qincai-header">';
        echo '<div class="header-nav blur-bg">';
        echo '<div class="qincai-header-row container-header">';
        io_qincai_render_brand();
        io_qincai_render_header_menu();
        io_qincai_render_header_tools();
        echo '</div>';
        echo '</div>';
        echo '</header>';
    }
}

if (!function_exists('io_show_mobile_header')) {
    function io_show_mobile_header(){
        echo '<div class="qincai-mobile-nav d-md-none">';
        echo '<div class="qincai-mobile-nav__inner">';
        echo '<a class="qincai-mobile-nav__brand" href="' . esc_url(home_url('/')) . '">' . esc_html(get_bloginfo('name')) . '</a>';
        echo '<a class="qincai-mobile-nav__search" href="#qincai-home-search">搜索工具</a>';
        echo '</div>';
        echo '</div>';
    }
}
