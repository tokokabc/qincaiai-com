<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$hot_tags = array('OpenClaw', 'ChatGPT', 'Gemini', 'DeepSeek', 'Claude', 'Kimi', 'Cursor', 'Runway');
$hero_stats = array(
    array('num' => '1000+', 'label' => '精选工具'),
    array('num' => '21', 'label' => '核心分类'),
    array('num' => 'Daily', 'label' => '持续更新'),
);
?>
<section class="qincai-hero container">
    <div class="qincai-hero__inner">
        <div class="qincai-hero__content qincai-hero__content--split">
            <div class="qincai-hero__main">
                <p class="qincai-hero__eyebrow">芹菜AI工具导航平台</p>
                <h1 class="qincai-hero__title">发现最好用的 AI 工具、平台与 Claw 生态入口</h1>
                <p class="qincai-hero__desc">把 AI 工具、模型、部署、教程资源、AI资讯和 Claw 生态统一收进首页，主搜索区作为核心入口。</p>
                <form id="qincai-home-search" class="qincai-hero__search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="hidden" name="post_type" value="sites">
                    <div class="qincai-hero__search-inputwrap">
                        <i class="iconfont icon-search"></i>
                        <input class="qincai-hero__input" type="search" name="s" placeholder="搜索AI工具 / 平台 / 模型 / 教程…">
                    </div>
                    <button class="qincai-hero__button" type="submit">搜索</button>
                </form>
                <div class="qincai-hero__tags-wrap">
                    <span class="qincai-hero__tags-label">热门搜索</span>
                    <div class="qincai-hero__tags">
                        <?php foreach ($hot_tags as $tag) : ?>
                            <a class="qincai-hero__tag" href="<?php echo esc_url(add_query_arg(array('s' => $tag, 'post_type' => 'sites'), home_url('/'))); ?>"><?php echo esc_html($tag); ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="qincai-hero__stats-panel">
                <h3>平台速览</h3>
                <div class="qincai-hero__stats-grid">
                    <?php foreach ($hero_stats as $item) : ?>
                        <div class="qincai-hero__stat-box">
                            <strong><?php echo esc_html($item['num']); ?></strong>
                            <span><?php echo esc_html($item['label']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
                <ul class="qincai-hero__bullet-list">
                    <li>AI 工具 / 大模型 / 云部署</li>
                    <li>教程资源 / AI资讯 / Claw生态</li>
                    <li>支持平台化首页持续扩展</li>
                </ul>
            </div>
        </div>
    </div>
</section>
