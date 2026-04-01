<?php
/*
 * @Author: iowen
 * @Author URI: https://www.iowen.cn/
 * @Date: 2024-08-20 22:31:36
 * @LastEditors: iowen
 * @LastEditTime: 2026-04-02 00:21:00
 * @FilePath: /onenav/inc/functions/io-home.php
 * @Description:
 */

function io_qincai_left_categories() {
    return array(
        array('name' => 'Claw小龙虾', 'icon' => 'iconfont icon-hot', 'href' => '#module_id_1'),
        array('name' => 'AI云端部署', 'icon' => 'iconfont icon-cloud', 'href' => '#module_id_2'),
        array('name' => 'AI聊天助手', 'icon' => 'iconfont icon-chat', 'href' => '#module_id_3'),
        array('name' => 'AI绘图工具', 'icon' => 'iconfont icon-picture', 'href' => '#module_id_4'),
        array('name' => 'AI写作工具', 'icon' => 'iconfont icon-edit', 'href' => '#module_id_5'),
        array('name' => 'AI视频工具', 'icon' => 'iconfont icon-video', 'href' => '#module_id_6'),
        array('name' => 'AI办公工具', 'icon' => 'iconfont icon-workbench', 'href' => '#module_id_7'),
        array('name' => 'AI设计工具', 'icon' => 'iconfont icon-design', 'href' => '#module_id_8'),
        array('name' => 'AI编程工具', 'icon' => 'iconfont icon-code', 'href' => '#module_id_9'),
        array('name' => 'AI大模型', 'icon' => 'iconfont icon-a-Model', 'href' => '#module_id_10'),
        array('name' => 'AISkills市场', 'icon' => 'iconfont icon-shop', 'href' => '#module_id_11'),
        array('name' => 'Agent生态', 'icon' => 'iconfont icon-app', 'href' => '#module_id_12'),
        array('name' => 'Agent支付', 'icon' => 'iconfont icon-pay', 'href' => '#module_id_13'),
        array('name' => 'AIMaas平台', 'icon' => 'iconfont icon-server', 'href' => '#module_id_14'),
        array('name' => 'AI音频工具', 'icon' => 'iconfont icon-sound', 'href' => '#module_id_15'),
        array('name' => 'AI搜索引擎', 'icon' => 'iconfont icon-search', 'href' => '#module_id_16'),
        array('name' => 'AI开发平台', 'icon' => 'iconfont icon-terminal', 'href' => '#module_id_17'),
        array('name' => 'AI学习网站', 'icon' => 'iconfont icon-book', 'href' => '#module_id_18'),
        array('name' => 'AI内容检测', 'icon' => 'iconfont icon-safety', 'href' => '#module_id_19'),
        array('name' => 'AI提示词', 'icon' => 'iconfont icon-lightbulb', 'href' => '#module_id_20'),
        array('name' => 'Coding Plan', 'icon' => 'iconfont icon-plan', 'href' => '#module_id_21'),
    );
}

function io_home_content($config)
{
    if (empty($config['page_module'])) {
        return;
    }

    echo '<div class="qincai-home-page">';
    get_template_part('templates/home-hero');
    echo '<div class="qincai-home-shell">';
    echo '<div class="qincai-main-grid">';

    if ($config['aside_show']) {
        echo '<div class="qincai-left-sidebar">';
        echo '<div class="qincai-left-sidebar__header"><h3>分类导航</h3><p>快速定位 AI 工具与平台</p></div>';
        io_show_layout_aside($config['page_module']);
        echo '</div>';
    }

    echo '<div class="qincai-center-content">';
    io_show_page_module($config['page_module']);
    echo '</div>';

    get_template_part('templates/home-right-aside');

    echo '</div>';
    echo '</div>';
    echo '</div>';
}

function io_show_layout_aside($modules){
    $categories = io_qincai_left_categories();
    $nav = '';
    foreach ($categories as $item) {
        $nav .= '<li class="aside-item"><a href="' . esc_url($item['href']) . '" class="aside-btn hide-target smooth"><i class="' . esc_attr($item['icon']) . ' icon-fw"></i><span class="ml-2 qincai-aside-text">' . esc_html($item['name']) . '</span></a></li>';
    }

    $aside = '<aside class="ioui-aside switch-container' . get_page_mode_class() . '">';
    $aside .= '<div class="aside-body" id="layout_aside">';
    $aside .= '<div class="aside-card blur-bg shadow h-100">';
    $aside .= '<ul class="aside-ul overflow-y-auto no-scrollbar">';
    $aside .= $nav;
    $aside .= '</ul>';
    $aside .= '</div>';
    $aside .= '</div>';
    $aside .= '</aside>';

    echo $aside;
}

function io_show_page_module($modules)
{
    foreach ($modules as $index => $module) {
        switch ($module['type']) {
            case 'search':
                io_module_search($module['search_config'], $index);
                if (!$index) {
                    do_action('io_home_content_before');
                }
                break;
            case 'content':
                if (!$index) {
                    do_action('io_home_content_before');
                }
                io_module_content($module['content_config'], $index);
                break;
            case 'tools':
                if (!$index) {
                    do_action('io_home_content_before');
                }
                io_module_tools($module['tools_config'], $index);
                break;
            case 'custom':
                if (!$index) {
                    do_action('io_home_content_before');
                }
                io_module_custom($module['custom_config'], $index);
                break;
        }
    }
    do_action('io_home_content_after');
}

function io_home_content_before_action(){
    iopay_get_auto_ad_html('home', 'mb-4 container home-content', 'content');
    show_ad('ad_home_card_top', true, 'container home-content');
}
add_action('io_home_content_before', 'io_home_content_before_action');

function io_home_content_after_action(){
    show_ad('ad_home_link_top', true, 'container home-content');
}
add_action('io_home_content_after', 'io_home_content_after_action');

function io_module_search($config, $index){
    io_head_search($config['search_id'], $index);
}

function io_module_is_there_sidebar($config, &$is_sidebar, &$sidebar_id) {
    $sidebar_id = '';
    $is_sidebar = false;
    if ('none' !== $config['sidebar_tools']) {
        $sidebar_id = 'sidebar-home-content-' . $config['sidebar_id'];
        if (is_mininav()) {
            $module_id  = get_query_var('module_list_id');
            $sidebar_id = 'sidebar-second-content-' . $module_id . '-' . $config['sidebar_id'];
        }
        if ((is_active_sidebar($sidebar_id))) {
            $is_sidebar = true;
        }
    }
}

function io_module_content($config, $index = 0){
    if (!isset($config['nav_id']) || empty($config['nav_id'])) {
        return;
    }
    $menu = get_menu_items_by_level($config['nav_id']);
    $card = $config['show_card'] ? ' show-card' : '';
    io_module_is_there_sidebar($config, $is_sidebar, $sidebar_id);
    $sidebar_class = $is_sidebar ? 'sidebar_' . $config['sidebar_tools'] : 'sidebar_no';
    $style_attr = get_div_custom_background($config, $card);
    do_action('io_module_content_before', $config, $index);
    echo '<section id="module_id_' . $index . '" class="custom-background module-id-' . $index . '" ' . $style_attr . '>';
    echo '<div class="ioui-content switch-container home-container ' . $sidebar_class . get_page_mode_class() . '">';
    echo '<div class="ioui-main">';
    echo '<div class="content-wrap">';
    echo '<div class="content-layout' . $card . '">';
    foreach($menu as $category) {
        if ($category['menu_item_parent'] == 0) {
            if (empty($category['children'])) {
                $terms = get_menu_category_list();
                if ($category['type'] != 'taxonomy') {
                    $url = trim($category['url']);
                    if (strlen($url) > 1) {
                        if (substr($url, 0, 1) == '#' || substr($url, 0, 4) == 'http')
                            continue;
                        echo get_none_html("“{$category['title']}”不支持的菜单项，请到菜单删除", 'home-list content-card', 'error', false);
                    }
                } elseif ($category['type'] == 'taxonomy' && in_array($category['object'], $terms)) {
                    io_home_a_content($config['nav_id'], $category, $is_sidebar);
                } else {
                    echo get_none_html("“{$category['title']}”不支持的菜单项，请到菜单删除", 'home-list content-card', 'error', false);
                }
            } else {
                $is_null = true;
                foreach ($category['children'] as $mid) {
                    if ($mid['type'] != 'taxonomy') {
                        continue;
                    }
                    $is_null = false;
                }
                if ($is_null)
                    continue;
                io_home_tab_content($config['nav_id'], $category['children'], $category, $config['tab_ajax'], $is_sidebar);
            }
        }
    }
    echo '</div>';
    echo '</div>';
    if($is_sidebar){
        echo '<div class="sidebar sidebar-tools d-none d-lg-block">';
        dynamic_sidebar($sidebar_id);
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
    echo '</section>';
    do_action('io_module_content_after', $config, $index);
}

function io_module_tools($config, $index) {
    global $is_sidebar;
    io_module_is_there_sidebar($config, $is_sidebar, $sidebar_id);
    $sidebar_class = $is_sidebar ? 'sidebar_' . $config['sidebar_tools'] : 'sidebar_no';
    $style_attr = get_div_custom_background($config, $card);
    $tools     = '';
    $module_name = '首页-模块' . ($index + 1);
    $tool_id     = 'max-home-tools-' . $config['tool_id'];
    if (is_mininav()) {
        $module_id   = get_query_var('module_list_id');
        $module_name = '子ID' . $module_id . '-模块' . ($index + 1);
        $tool_id     = 'max-second-tools-' . $module_id . '-' . $config['tool_id'];
    }
    if (!is_active_sidebar($tool_id)) {
        if (is_super_admin()) {
            $tools = '<div class="card"><div class="card-body py-5 text-center"><p>' . $module_name . ' 的[小工具]内容为空，请到后台添加</p> <a href="' . admin_url('widgets.php') . '" class="btn vc-l-purple" target="_blank">小工具编辑</a></div></div>';
        } else {
            return;
        }
    }
    do_action('io_module_tools_before', $config, $index);
    echo '<section id="module_id_' . $index . '" class="custom-background module-id-' . $index . '" ' . $style_attr . '>';
    echo '<div class="ioui-content switch-container home-container ' . $sidebar_class . get_page_mode_class() . '">';
    echo '<div class="ioui-main">';
    echo '<div class="content-wrap">';
    echo '<div class="content-layout' . $card . '">';
    if (empty($tools)) {
        dynamic_sidebar($tool_id);
    } else {
        echo $tools;
    }
    echo '</div>';
    echo '</div>';
    if($is_sidebar){
        echo '<div class="sidebar sidebar-tools d-none d-lg-block">';
        dynamic_sidebar($sidebar_id);
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
    echo '</section>';
    do_action('io_module_tools_after', $config, $index);
}

function io_module_custom($config, $index){
    io_module_is_there_sidebar($config, $is_sidebar, $sidebar_id);
    $sidebar_class = $is_sidebar ? 'sidebar_' . $config['sidebar_tools'] : 'sidebar_no';
    $style_attr = get_div_custom_background($config, $card);
    $html = $config['html_code'];
    if (empty($html)) {
        if (is_super_admin()) {
            $_tab = is_mininav() ? '子页面布局' : '';
            $html = '<div class="card"><div class="card-body py-5 text-center"><p>自定义模块 (id: ' . $index . ') 内容为空，请到后台编辑</p> <a href="' . io_get_admin_iocf_url($_tab, 'home_module') . '" class="btn vc-l-purple" target="_blank">后台编辑</a></div></div>';
        } else {
            return;
        }
    }
    do_action('io_module_custom_before', $config, $index);
    echo '<section id="module_id_' . $index . '" class="custom-background module-id-' . $index . '" ' . $style_attr . '>';
    echo '<div class="ioui-content switch-container home-container ' . $sidebar_class . get_page_mode_class() . '">';
    echo '<div class="ioui-main">';
    echo '<div class="content-wrap">';
    echo '<div class="content-layout' . $card . '">';
    echo $html;
    echo '</div>';
    echo '</div>';
    if($is_sidebar){
        echo '<div class="sidebar sidebar-tools d-none d-lg-block">';
        dynamic_sidebar($sidebar_id);
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
    echo '</section>';
    do_action('io_module_custom_after', $config, $index);
}
