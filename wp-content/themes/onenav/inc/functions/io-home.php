<?php
/* Qincai homepage shell. */
function io_qincai_left_categories() {
    return array(
        array('name' => 'Claw芹虾', 'icon' => 'iconfont icon-hot', 'href' => '#module_id_1'),
        array('name' => 'AI云端部署', 'icon' => 'iconfont icon-cloud', 'href' => '#module_id_2'),
        array('name' => 'AI舰队合集', 'icon' => 'iconfont icon-folder', 'href' => '#module_id_3'),
        array('name' => 'AI聊天助手', 'icon' => 'iconfont icon-chat', 'href' => '#module_id_4'),
        array('name' => 'AI提效工具', 'icon' => 'iconfont icon-workbench', 'href' => '#module_id_5'),
        array('name' => 'AI写作工具', 'icon' => 'iconfont icon-edit', 'href' => '#module_id_6'),
        array('name' => 'AI办公工具', 'icon' => 'iconfont icon-office', 'href' => '#module_id_7'),
        array('name' => 'AI视频工具', 'icon' => 'iconfont icon-video', 'href' => '#module_id_8'),
        array('name' => 'AI设计工具', 'icon' => 'iconfont icon-design', 'href' => '#module_id_9'),
        array('name' => 'AI编程工具', 'icon' => 'iconfont icon-code', 'href' => '#module_id_10'),
        array('name' => 'AI开发平台', 'icon' => 'iconfont icon-terminal', 'href' => '#module_id_11'),
        array('name' => 'AI学习网站', 'icon' => 'iconfont icon-book', 'href' => '#module_id_12'),
        array('name' => 'AI提示词', 'icon' => 'iconfont icon-lightbulb', 'href' => '#module_id_13'),
        array('name' => 'AI Coding Plan', 'icon' => 'iconfont icon-plan', 'href' => '#module_id_14'),
        array('name' => 'AI MaaS平台', 'icon' => 'iconfont icon-server', 'href' => '#module_id_15'),
        array('name' => 'Skills市场', 'icon' => 'iconfont icon-shop', 'href' => '#module_id_16'),
        array('name' => 'AI文生图', 'icon' => 'iconfont icon-picture', 'href' => '#module_id_17'),
        array('name' => 'Agent生态', 'icon' => 'iconfont icon-app', 'href' => '#module_id_18'),
    );
}

function io_qincai_center_sections() {
    return array(
        array(
            'title' => 'Claw芹虾',
            'subtitle' => 'AI云测即插 | AI聊天助手 | AI舰队合集',
            'cards' => array('OpenClaw', 'ChatLaw', '明星火苟', '司灵AI', 'TabClaw', 'Claw王国', 'Claw炎团', 'AutoClaw', 'MaxClaw', 'DataClaw', 'Claw Saver', 'GaibClaw', 'BotClawmaster', '模赛锤服入'),
        ),
        array(
            'title' => 'AI图像工具',
            'subtitle' => '短间AI视频工具 | AI图生图 | AI修图工具',
            'cards' => array('CanClaw', 'Goo Claw', 'GucciClaw', 'BClaw', 'Batacoumasert', '澜勃Claw', '叠大刃锐', 'AutoClaw', 'FaClaw', 'SuperClaw', 'Dauno祈', 'DeperClaw搜图', '罡曼团搏', 'PatClaw', 'PerebClaw'),
        ),
        array(
            'title' => 'AI办公工具',
            'subtitle' => 'AI会议助手 | AI文档协作 | AI效率工具',
            'cards' => array('LarkClaw', '递密Claw', 'ICHIM', 'Claw效擎', 'SoraClaw', 'HyperClaw', '山芬Claw', 'ReportCrab', 'Claw效擎助手'),
        ),
        array(
            'title' => 'AI设计工具',
            'subtitle' => 'AI视频工具 | AI修图工具 | AI写作工具',
            'cards' => array('LarkClaw', '浮踪Claw', 'CHIIM', 'Claw伯奥', 'SoraClaw', 'HyperClaw', '山芬Claw', 'ReportCrab', 'Claw效擎助手'),
        ),
        array(
            'title' => 'AI大模型',
            'subtitle' => 'Skills市场 | Agent生态 | AI Coding Plan | AI MaaS平台',
            'cards' => array('OpenClaw Pro', 'ClawCoder', 'DeepMusic AI', '豆包', 'Kimi', 'Gemini', 'DeepSeek', 'Claude'),
        ),
        array(
            'title' => 'AI内容检测',
            'subtitle' => 'AI检测间',
            'cards' => array('AceClaw', 'HackerClaw', 'DreamLab', 'NessieMedia'),
        ),
    );
}

function io_home_content($config){
    echo '<div class="qincai-home-page">';
    get_template_part('templates/home-hero');
    echo '<div class="qincai-home-shell"><div class="qincai-main-grid">';
    echo '<div class="qincai-left-sidebar"><div class="qincai-left-sidebar__header"><h3>AI工具分类</h3></div>';
    io_show_layout_aside($config['page_module']);
    echo '</div>';
    echo '<div class="qincai-center-content">';
    io_show_page_module($config['page_module']);
    echo '</div>';
    get_template_part('templates/home-right-aside');
    echo '</div></div></div>';
}

function io_show_layout_aside($modules){
    $nav = '';
    foreach (io_qincai_left_categories() as $item) {
        $nav .= '<li class="aside-item"><a href="' . esc_url($item['href']) . '" class="aside-btn hide-target smooth"><i class="' . esc_attr($item['icon']) . ' icon-fw"></i><span class="ml-2 qincai-aside-text">' . esc_html($item['name']) . '</span></a></li>';
    }
    echo '<aside class="ioui-aside switch-container' . get_page_mode_class() . '"><div class="aside-body" id="layout_aside"><div class="aside-card blur-bg shadow h-100"><ul class="aside-ul overflow-y-auto no-scrollbar">' . $nav . '</ul></div></div></aside>';
}

function io_show_page_module($modules){
    foreach (io_qincai_center_sections() as $index => $section) {
        echo '<section id="module_id_' . ($index + 1) . '" class="qincai-home-module qincai-home-module--manual">';
        echo '<div class="content-layout"><div class="content-card">';
        echo '<div class="qincai-module-head"><div><div class="tab-title">' . esc_html($section['title']) . '</div><p class="text-sm">' . esc_html($section['subtitle']) . '</p></div><a class="btn-more" href="#">更多 <i class="iconfont icon-arrow-r"></i></a></div>';
        echo '<div class="qincai-module-grid">';
        foreach ($section['cards'] as $card) {
            echo '<a class="qincai-module-card" href="#"><span class="qincai-module-card__logo">●</span><span class="qincai-module-card__title">' . esc_html($card) . '</span><span class="qincai-module-card__desc">芹菜AI收录</span></a>';
        }
        echo '</div></div></div></section>';
    }
}

function io_home_content_before_action(){}
add_action('io_home_content_before', 'io_home_content_before_action');
function io_home_content_after_action(){}
add_action('io_home_content_after', 'io_home_content_after_action');
function io_module_search($config, $index){io_head_search($config['search_id'], $index);} function io_module_is_there_sidebar($config, &$is_sidebar, &$sidebar_id){$sidebar_id='';$is_sidebar=false;} function io_module_content($config,$index=0){} function io_module_tools($config,$index){} function io_module_custom($config,$index){}
