<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$hot_tags = array('OpenClaw', 'ChatGPT', 'Gemini', 'DeepSeek', 'Claude', 'Kimi', '豆包');
?>
<section class="qincai-hero container">
    <div class="qincai-hero__inner">
        <div class="qincai-hero__topbar">
            <div class="qincai-hero__brand">
                <div class="qincai-hero__brand-mark">芹</div>
                <div class="qincai-hero__brand-text">
                    <strong>芹菜AI</strong>
                    <span>qincai.ai</span>
                </div>
            </div>
            <div class="qincai-hero__actions">
                <a class="qincai-hero__icon-btn" href="#qincai-home-search" aria-label="搜索">
                    <i class="iconfont icon-search"></i>
                </a>
                <a class="qincai-hero__icon-btn" href="javascript:;" aria-label="菜单">
                    <i class="iconfont icon-category"></i>
                </a>
            </div>
        </div>
        <div class="qincai-hero__content">
            <p class="qincai-hero__eyebrow">芹菜AI工具导航平台</p>
            <h1 class="qincai-hero__title">发现最好用的 AI 工具</h1>
            <p class="qincai-hero__desc">收录 AI 写作、绘图、视频、办公、编程、大模型等热门工具与平台。</p>
            <form id="qincai-home-search" class="qincai-hero__search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="hidden" name="post_type" value="sites">
                <div class="qincai-hero__search-inputwrap">
                    <i class="iconfont icon-search"></i>
                    <input class="qincai-hero__input" type="search" name="s" placeholder="搜索AI工具，关键词…">
                </div>
                <button class="qincai-hero__button" type="submit">搜索</button>
            </form>
            <div class="qincai-hero__tags-wrap">
                <span class="qincai-hero__tags-label"><i class="iconfont icon-hot mr-1"></i>热门推荐</span>
                <div class="qincai-hero__tags">
                    <?php foreach ($hot_tags as $tag) : ?>
                        <a class="qincai-hero__tag" href="<?php echo esc_url(add_query_arg(array('s' => $tag, 'post_type' => 'sites'), home_url('/'))); ?>"><?php echo esc_html($tag); ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="qincai-primary-tabs" data-qincai-primary-tabs>
                <button class="qincai-primary-tab is-active" type="button" data-group="ai-tools">AI 工具</button>
                <button class="qincai-primary-tab" type="button" data-group="ai-platform">AI 平台</button>
                <button class="qincai-primary-tab" type="button" data-group="claw-eco">Claw生态</button>
                <button class="qincai-primary-tab" type="button" data-group="study">学习教程</button>
            </div>
        </div>
    </div>
</section>
