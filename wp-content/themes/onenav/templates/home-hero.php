<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$hot_tags = array('OpenClaw', 'ChatGPT', 'Gemini', 'DeepSeek', 'Claude', 'Kimi', 'Cursor');
$hero_points = array('AI工具导航', 'AI模型入口', 'AI部署方案', 'AI教程资源');
?>
<section class="qincai-hero container">
    <div class="qincai-hero__inner">
        <div class="qincai-hero__content">
            <div class="qincai-hero__main">
                <p class="qincai-hero__eyebrow">芹菜AI工具导航平台</p>
                <h1 class="qincai-hero__title">发现最好用的 AI 工具、平台与 Claw 生态入口</h1>
                <p class="qincai-hero__desc">把 AI 工具、模型、云部署、教程资源、AI资讯和 Claw 生态统一收进首页，主搜索区直接作为中间主入口。</p>
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
            <div class="qincai-hero__side">
                <div class="qincai-hero__feature-card">
                    <h3>首页重点</h3>
                    <ul>
                        <?php foreach ($hero_points as $point) : ?>
                            <li><?php echo esc_html($point); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
