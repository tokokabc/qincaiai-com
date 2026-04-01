<?php
/*
 * Qincai homepage header rebuild with original logo chain.
 */

if (!function_exists('io_qincai_header_menu_items')) {
    function io_qincai_header_menu_items() {
        return array(
            array('label' => 'AI聊天助手', 'href' => '#module_id_1'),
            array('label' => 'AI绘图工具', 'href' => '#module_id_2'),
            array('label' => 'AI视频工具', 'href' => '#module_id_3'),
            array('label' => 'AI办公工具', 'href' => '#module_id_4'),
            array('label' => 'AI编程工具', 'href' => '#module_id_5'),
            array('label' => 'Agent生态', 'href' => '#module_id_6'),
            array('label' => 'AI开发平台', 'href' => '#module_id_7'),
            array('label' => 'AI学习网站', 'href' => '#module_id_8'),
        );
    }
}

if (!function_exists('io_qincai_render_brand')) {
    function io_qincai_render_brand() {
        echo '<div class="navbar-logo d-flex mr-4">';
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
        echo '<ul class="nav navbar-header qincai-navbar-header d-none d-md-flex mr-3">';
        foreach ($items as $item) {
            echo '<li class="menu-item"><a href="' . esc_url($item['href']) . '">' . esc_html($item['label']) . '</a></li>';
        }
        echo '</ul>';
        echo '</div>';
    }
}

if (!function_exists('io_qincai_render_header_tools')) {
    function io_qincai_render_header_tools() {
        echo '<div class="qincai-header-fill flex-fill"></div>';
        echo '<ul class="nav header-tools qincai-header-tools position-relative">';
        echo '<li class="header-icon-btn nav-search"><a href="#qincai-home-search" class="search-ico-btn nav-search-icon"><i class="iconfont icon-search"></i></a></li>';
        echo '<li class="header-icon-btn nav-submit d-none d-md-block"><a href="#qincai-main-content" title="提交工具"><i class="iconfont icon-add"></i></a></li>';
        echo '</ul>';
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
        echo '<nav class="switch-container container-header nav-top qincai-nav-top d-flex align-items-center h-100">';
        io_qincai_render_brand();
        io_qincai_render_header_menu();
        io_qincai_render_header_tools();
        echo '</nav>';
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
