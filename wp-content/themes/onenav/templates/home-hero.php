<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$hot_tags = array('OpenClaw', 'ChatGPT', 'Gemini', 'DeepSeek', 'Claude', 'Kimi', '豆包');
?>
<section class="qincai-hero container">
    <div class="qincai-hero__inner">
        <div class="qincai-hero__content">
            <p class="qincai-hero__eyebrow">芹菜AI工具导航平台</p>
            <h1 class="qincai-hero__title">发现最好用的 AI 工具</h1>
            <p class="qincai-hero__desc">收录 AI 写作、绘图、视频、办公、编程、大模型等热门工具与平台。</p>
            <form class="qincai-hero__search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="hidden" name="post_type" value="sites">
                <input class="qincai-hero__input" type="search" name="s" placeholder="搜索 AI 工具：OpenClaw / ChatGPT / DeepSeek / Claude">
                <button class="qincai-hero__button" type="submit">搜索</button>
            </form>
            <div class="qincai-hero__tags">
                <span class="qincai-hero__tags-label">热门搜索</span>
                <?php foreach ($hot_tags as $tag) : ?>
                    <a class="qincai-hero__tag" href="<?php echo esc_url(add_query_arg(array('s' => $tag, 'post_type' => 'sites'), home_url('/'))); ?>"><?php echo esc_html($tag); ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
