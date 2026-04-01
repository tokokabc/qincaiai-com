<?php
/* Qincai homepage shell. */
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
        array('title' => 'AI 工具精选', 'desc' => '聊天、写作、绘图、视频、办公、编程等高频入口。', 'cards' => array('ChatGPT','Claude','Kimi','豆包','Cursor','Midjourney','Notion AI','Canva AI','Runway','Gamma','Suno','Perplexity')),
        array('title' => 'AI 平台 / 模型', 'desc' => '大模型、MaaS、Agent、开发平台等中台入口。', 'cards' => array('DeepSeek','Gemini','OpenClaw','Dify','Coze','硅基流动','通义千问','文心一言','Moonshot','扣子空间','百炼','腾讯元宝')),
        array('title' => 'AI 教程 / 资讯', 'desc' => '教程资源、学习网站、提示词、资讯内容集中展示。', 'cards' => array('提示词库','AI教程合集','部署指南','实战案例','AI资讯快讯','Agent周报','模型评测','工具盘点','入门路线图','学习导航','行业观察','自动化案例')),
        array('title' => 'Claw / Agent 生态', 'desc' => '聚合 Claw 小龙虾、Agent 生态、支付、Skills 市场等场景。', 'cards' => array('Claw小龙虾','Agent生态','Agent支付','AISkills市场','AIMaaS平台','AI开发平台','云端部署','Coding Plan','自动化工作流','多Agent协作','技能商店','企业入口')),
        array('title' => '设计 / 办公 / 音频', 'desc' => '把办公效率、音频创作、设计生产力补齐到首页中部。', 'cards' => array('Figma AI','Photoshop AI','剪映AI','讯飞听见','Suno','Adobe Firefly','WPS AI','飞书智能伙伴','AI思维导图','会议纪要','配音工具','音乐生成')),
    );
}
function io_home_content($config){
    echo '<div class="qincai-home-page">';
    get_template_part('templates/home-hero');
    echo '<div class="qincai-home-shell"><div class="qincai-main-grid">';
    echo '<div class="qincai-left-sidebar"><div class="qincai-left-sidebar__header"><h3>分类导航</h3><p>快速定位 AI 工具与平台</p></div>';
    io_show_layout_aside($config['page_module']);
    echo '</div>';
    echo '<div class="qincai-center-content"><div class="qincai-center-content__header"><h2>首页核心模块</h2><p>按工具、平台、模型、教程、资讯进行平台化编排，提高模块数量、卡片密度与主内容区信息量。</p></div>';
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
        echo '<div class="qincai-module-head"><div><div class="tab-title">' . esc_html($section['title']) . '</div><p class="text-sm">' . esc_html($section['desc']) . '</p></div><a class="btn-more" href="#">查看更多</a></div>';
        echo '<div class="qincai-module-grid">';
        foreach ($section['cards'] as $card) {
            echo '<a class="qincai-module-card" href="#"><span class="qincai-module-card__logo">AI</span><span class="qincai-module-card__title">' . esc_html($card) . '</span><span class="qincai-module-card__desc">精选 AI 工具入口</span></a>';
        }
        echo '</div></div></div></section>';
    }
}
function io_home_content_before_action(){}
add_action('io_home_content_before', 'io_home_content_before_action');
function io_home_content_after_action(){}
add_action('io_home_content_after', 'io_home_content_after_action');
function io_module_search($config, $index){io_head_search($config['search_id'], $index);} function io_module_is_there_sidebar($config, &$is_sidebar, &$sidebar_id){$sidebar_id='';$is_sidebar=false;} function io_module_content($config,$index=0){} function io_module_tools($config,$index){} function io_module_custom($config,$index){}
