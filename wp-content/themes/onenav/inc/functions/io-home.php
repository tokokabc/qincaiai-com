<?php
/*
 * Homepage shell rebuilt for qincai AI tools platform.
 */

function io_home_content($config)
{
    if (empty($config['page_module'])) {
        return;
    }

    echo '<div class="qincai-home-page">';
    get_template_part('templates/home-hero');
    echo '<div class="qincai-home-shell qincai-home-shell--ready">';
    echo '<div class="qincai-home-intro">';
    echo '<div class="qincai-home-intro__item"><strong>分类导览更清晰</strong><span>首页左栏直接承接 AI 聊天、绘图、视频、编程、MaaS、Agent、部署等核心入口。</span></div>';
    echo '<div class="qincai-home-intro__item"><strong>主内容更像平台首页</strong><span>中间内容区强调重点模块、工具卡片与二级分组，不再是原主题松散堆叠。</span></div>';
    echo '<div class="qincai-home-intro__item"><strong>右侧栏开始承接真实运营位</strong><span>热门排行、最新收录、投稿、社群、二维码入口都已预留。</span></div>';
    echo '</div>';
    echo '<div class="qincai-main-grid" id="qincai-main-content">';

    if (!empty($config['aside_show'])) {
        echo '<div class="qincai-left-sidebar">';
        echo '<div class="qincai-left-sidebar__header"><h3>AI分类导航</h3><p>按使用场景快速定位工具与平台</p></div>';
        io_show_layout_aside($config['page_module']);
        echo '</div>';
    }

    echo '<div class="qincai-center-content">';
    echo '<div class="qincai-center-content__header"><h2>首页核心推荐</h2><p>按工具赛道、平台能力、Agent 生态与学习资源进行聚合展示。</p></div>';
    io_show_page_module($config['page_module']);
    echo '</div>';

    get_template_part('templates/home-right-aside');

    echo '</div>';
    echo '</div>';
    echo '</div>';
}

function io_show_layout_aside($modules){
    $nav = '';
    foreach ($modules as $index => $module) {
        switch ($module['type']) {
            case 'search':
            case 'tools':
            case 'custom':
                $config = $module[$module['type'] . '_config'];
                $url    = $module['type'] === 'search' ? '#qincai-home-search' : '#module_id_' . $index;
                if (!empty($config['aside_name'])) {
                    $nav .= '<li class="aside-item"><a href="' . esc_url($url) . '" class="aside-btn smooth"><i class="' . esc_attr($config['aside_icon']) . ' icon-fw"></i><span class="ml-2 qincai-aside-text">' . esc_html($config['aside_name']) . '</span></a></li>';
                }
                break;
            case 'content':
                $config = $module['content_config'];
                $menus  = function_exists('get_menu_items_by_level') ? get_menu_items_by_level($config['nav_id']) : array();
                if (!empty($config['aside_s']) && !empty($menus)) {
                    foreach ($menus as $menu) {
                        $class  = 'smooth';
                        $url    = '#term-' . $config['nav_id'] . $menu['object_id'];
                        $target = '';
                        if ($menu['type'] != 'taxonomy' && !empty($menu['url'])) {
                            $url = trim($menu['url']);
                            if (strpos($url, 'http') === 0) {
                                $class = '';
                                if (!empty($menu['target'])) {
                                    $target = ' target="_blank"';
                                }
                            } elseif (substr($url, 0, 1) !== '#') {
                                continue 2;
                            }
                        }
                        $icon = function_exists('get_tag_ico') ? get_tag_ico($menu['object'], $menu) : 'iconfont icon-category';
                        $nav .= '<li class="aside-item"><a href="' . esc_url($url) . '" class="aside-btn ' . esc_attr($class) . '"' . $target . '><i class="' . esc_attr($icon) . ' icon-fw"></i><span class="ml-2 qincai-aside-text">' . esc_html($menu['title']) . '</span></a></li>';
                    }
                }
                break;
        }
    }

    echo '<aside class="ioui-aside switch-container' . get_page_mode_class() . '">';
    echo '<div class="aside-body" id="layout_aside">';
    echo '<div class="aside-card blur-bg shadow h-100">';
    echo '<ul class="aside-ul overflow-y-auto no-scrollbar">' . $nav . '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</aside>';
}

function io_show_page_module($modules)
{
    foreach ($modules as $index => $module) {
        $module_class = 'qincai-home-module qincai-home-module--' . esc_attr($module['type']);
        switch ($module['type']) {
            case 'search':
                echo '<div class="' . $module_class . '">';
                io_module_search($module['search_config'], $index);
                echo '</div>';
                if (!$index) {
                    do_action('io_home_content_before');
                }
                break;
            case 'content':
                if (!$index) {
                    do_action('io_home_content_before');
                }
                echo '<div class="' . $module_class . '">';
                io_module_content($module['content_config'], $index);
                echo '</div>';
                break;
            case 'tools':
                if (!$index) {
                    do_action('io_home_content_before');
                }
                echo '<div class="' . $module_class . '">';
                io_module_tools($module['tools_config'], $index);
                echo '</div>';
                break;
            case 'custom':
                if (!$index) {
                    do_action('io_home_content_before');
                }
                echo '<div class="' . $module_class . '">';
                io_module_custom($module['custom_config'], $index);
                echo '</div>';
                break;
        }
    }

    do_action('io_home_content_after');
}

function io_home_content_before_action(){ }
add_action('io_home_content_before', 'io_home_content_before_action');

function io_home_content_after_action(){ }
add_action('io_home_content_after', 'io_home_content_after_action');

function io_module_search($config, $index){
    if (function_exists('io_head_search')) {
        io_head_search($config['search_id'], $index);
    }
}

function io_module_is_there_sidebar($config, &$is_sidebar, &$sidebar_id) {
    $sidebar_id = '';
    $is_sidebar = false;
}

function io_module_content($config, $index = 0){
    echo '<section id="module_id_' . intval($index) . '" class="custom-background module-id-' . intval($index) . '">';
    echo '<div class="ioui-content switch-container home-container sidebar_no' . get_page_mode_class() . '">';
    echo '<div class="ioui-main"><div class="content-wrap"><div class="content-layout show-card">';
    echo '<div class="content-card"><div class="tab-title">内容模块 #' . intval($index + 1) . '</div><p class="text-sm">当前主题目录被清空后，这里保留新版首页壳层与展示结构，等完整 OneNav 模块恢复后继续承接真实数据。</p></div>';
    echo '</div></div></div></div>';
    echo '</section>';
}

function io_module_tools($config, $index) {
    echo '<section id="module_id_' . intval($index) . '" class="custom-background module-id-' . intval($index) . '">';
    echo '<div class="ioui-content switch-container home-container sidebar_no' . get_page_mode_class() . '">';
    echo '<div class="ioui-main"><div class="content-wrap"><div class="content-layout">';
    echo '<div class="content-card"><div class="tab-title">工具模块 #' . intval($index + 1) . '</div><p class="text-sm">保留新版卡片布局与主内容区样式，等待完整工具数据重新接入。</p></div>';
    echo '</div></div></div></div>';
    echo '</section>';
}

function io_module_custom($config, $index){
    echo '<section id="module_id_' . intval($index) . '" class="custom-background module-id-' . intval($index) . '">';
    echo '<div class="ioui-content switch-container home-container sidebar_no' . get_page_mode_class() . '">';
    echo '<div class="ioui-main"><div class="content-wrap"><div class="content-layout">';
    echo '<div class="content-card"><div class="tab-title">自定义模块 #' . intval($index + 1) . '</div><p class="text-sm">这里用于承接运营文案、专题内容或后续扩展模块。</p></div>';
    echo '</div></div></div></div>';
    echo '</section>';
}
