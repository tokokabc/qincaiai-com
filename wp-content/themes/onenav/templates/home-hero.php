<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$hot_tags = array('OpenClaw', 'ChatGPT', 'Gemini', 'DeepSeek', 'Claude', 'Kimi');
?>
<section class="qincai-hero container">
    <div class="qincai-hero__inner">
        <div class="qincai-hero__content qincai-hero__content--single">
            <p class="qincai-hero__eyebrow">芹菜AI工具导航平台</p>
            <h1 class="qincai-hero__title">发现最好用的 AI 工具、平台与生态入口</h1>
            <p class="qincai-hero__desc">整合 AI 工具、模型、部署、教程、资讯与 Claw 生态，用平台首页方式重新组织主内容区。</p>
            <form id="qincai-home-search" class="qincai-hero__search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="hidden" name="post_type" value="sites">
                <div class="qincai-hero__search-inputwrap">
                    <i class="iconfont icon-search"></i>
                    <input class="qincai-hero__input" type="search" name="s" placeholder="搜索AI工具 / 平台 / 模型 / 教程…">
                </div>
                <button class="qincai-hero__button" type="submit">搜索</button>
            </form>
            <div class="qincai-hero__tags">
                <?php foreach ($hot_tags as $tag) : ?>
                    <a class="qincai-hero__tag" href="<?php echo esc_url(add_query_arg(array('s' => $tag, 'post_type' => 'sites'), home_url('/'))); ?>"><?php echo esc_html($tag); ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
