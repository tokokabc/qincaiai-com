<?php
/*
 * Qincai homepage shell.
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

function io_qincai_center_sections() {
    return array(
        array(
            'title' => 'AI 工具精选',
            'desc'  => '优先展示聊天、写作、绘图、视频、办公与编程类高频入口。',
            'cards' => array('ChatGPT', 'Claude', 'Kimi', '豆包', 'Cursor', 'Midjourney'),
        ),
        array(
            'title' => 'AI 平台 / 模型',
            'desc'  => '面向大模型、MaaS、Agent 与开发平台的中台入口。',
            'cards' => array('DeepSeek', 'Gemini', 'OpenClaw', 'Dify', 'Coze', '硅基流动'),
        ),
        array(
            'title' => 'AI 教程 / 资讯',
            'desc'  => '把教程资源、学习网站、提示词、资讯内容集中到首页中区。',
            'cards' => array('提示词库', 'AI教程合集', '部署指南', '实战案例', 'AI资讯快讯', 'Agent周报'),
        ),
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
    echo '<div class="qincai-center-content__header"><h2>首页核心模块</h2><p>按工具、平台、模型、教程、资讯进行平台化编排。</p></div>';
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
    echo '<aside class="ioui-aside switch-container' . get_page_mode_class() . '"><div class="aside-body" id="layout_aside"><div class="aside-card blur-bg shadow h-100"><ul class="aside-ul overflow-y-auto no-scrollbar">' . $nav . '</ul></div></div></aside>';
}

function io_show_page_module($modules)
{
    $sections = io_qincai_center_sections();
    foreach ($sections as $index => $section) {
        echo '<section id="module_id_' . ($index + 1) . '" class="qincai-home-module qincai-home-module--manual">';
        echo '<div class="content-layout">';
        echo '<div class="content-card">';
        echo '<div class="tab-title">' . esc_html($section['title']) . '</div>';
        echo '<p class="text-sm">' . esc_html($section['desc']) . '</p>';
        echo '<div class="qincai-module-grid">';
        foreach ($section['cards'] as $card) {
            echo '<a class="qincai-module-card" href="#">';
            echo '<span class="qincai-module-card__title">' . esc_html($card) . '</span>';
            echo '<span class="qincai-module-card__meta">进入查看</span>';
            echo '</a>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    }
}

function io_home_content_before_action(){}
add_action('io_home_content_before', 'io_home_content_before_action');

function io_home_content_after_action(){}
add_action('io_home_content_after', 'io_home_content_after_action');

function io_module_search($config, $index){
    io_head_search($config['search_id'], $index);
}

function io_module_is_there_sidebar($config, &$is_sidebar, &$sidebar_id) {
    $sidebar_id = '';
    $is_sidebar = false;
}

function io_module_content($config, $index = 0){}
function io_module_tools($config, $index) {}
function io_module_custom($config, $index){}
