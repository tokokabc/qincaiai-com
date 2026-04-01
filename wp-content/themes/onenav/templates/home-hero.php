<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$hot_tags = array('OpenClaw', 'ChatGPT', 'Gemini', 'DeepSeek', 'Claude', 'Kimi', '豆包', 'Cursor');
$quick_links = array(
    array('label' => 'AI聊天助手', 'anchor' => '#module_id_1'),
    array('label' => 'AI绘图工具', 'anchor' => '#module_id_2'),
    array('label' => 'AI视频工具', 'anchor' => '#module_id_3'),
    array('label' => 'AI编程工具', 'anchor' => '#module_id_4'),
);
$hero_stats = array(
    array('num' => '21+', 'label' => '核心分类'),
    array('num' => '1000+', 'label' => '精选工具'),
    array('num' => '每日', 'label' => '持续更新'),
);
?>
<section class="qincai-hero container">
    <div class="qincai-hero__inner">
        <div class="qincai-hero__topbar">
            <div class="qincai-hero__brand">
                <div class="qincai-hero__brand-mark">芹</div>
                <div class="qincai-hero__brand-text">
                    <strong>芹菜AI</strong>
                    <span>AI工具导航平台</span>
                </div>
            </div>
            <div class="qincai-hero__actions">
                <a class="qincai-hero__ghost" href="#qincai-main-content">开始探索</a>
                <a class="qincai-hero__button qincai-hero__button--soft" href="#module_id_1">热门工具</a>
            </div>
        </div>

        <div class="qincai-hero__content">
            <div class="qincai-hero__copy">
                <p class="qincai-hero__eyebrow">芹菜AI工具导航平台首页</p>
                <h1 class="qincai-hero__title">把 AI 工具、平台、Agent 生态整理成一张可直接开用的首页</h1>
                <p class="qincai-hero__desc">覆盖 AI 聊天、绘图、写作、视频、编程、大模型、Agent、MaaS、Skills 市场与部署方案，首页直接检索、快速跳转、持续更新。</p>

                <form id="qincai-home-search" class="qincai-hero__search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="hidden" name="post_type" value="sites">
                    <div class="qincai-hero__search-inputwrap">
                        <i class="iconfont icon-search"></i>
                        <input class="qincai-hero__input" type="search" name="s" placeholder="搜索 AI 工具 / 平台 / Prompt / Skills ...">
                    </div>
                    <button class="qincai-hero__button" type="submit">立即搜索</button>
                </form>

                <div class="qincai-hero__tags-wrap">
                    <span class="qincai-hero__tags-label"><i class="iconfont icon-hot mr-1"></i>热门搜索</span>
                    <div class="qincai-hero__tags">
                        <?php foreach ($hot_tags as $tag) : ?>
                            <a class="qincai-hero__tag" href="<?php echo esc_url(add_query_arg(array('s' => $tag, 'post_type' => 'sites'), home_url('/'))); ?>"><?php echo esc_html($tag); ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="qincai-primary-tabs" data-qincai-primary-tabs>
                    <?php foreach ($quick_links as $item) : ?>
                        <a class="qincai-primary-tab" href="<?php echo esc_url($item['anchor']); ?>"><?php echo esc_html($item['label']); ?></a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="qincai-hero__sidecard">
                <div class="qincai-hero__feature-card">
                    <div class="qincai-hero__feature-head">
                        <span class="qincai-hero__feature-badge">本周重点</span>
                        <strong>AI 平台速览</strong>
                    </div>
                    <ul class="qincai-hero__feature-list">
                        <li>Claw小龙虾 / Agent 生态入口</li>
                        <li>AI 开发平台 / AI MaaS 平台</li>
                        <li>AI 云端部署 / Coding Plan</li>
                        <li>AI 提示词 / AI 内容检测</li>
                    </ul>
                </div>
                <div class="qincai-hero__stats">
                    <?php foreach ($hero_stats as $stat) : ?>
                        <div class="qincai-hero__stat">
                            <strong><?php echo esc_html($stat['num']); ?></strong>
                            <span><?php echo esc_html($stat['label']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
