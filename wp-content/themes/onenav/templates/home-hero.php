<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$hot_tags = array('OpenClaw', 'ChatGPT', 'Gemini', 'DeepSeek', 'Claude', 'Kimi', '豆包');
?>
<section class="qincai-hero container">
    <div class="qincai-hero__inner">
        <form id="qincai-home-search" class="qincai-hero__search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="hidden" name="post_type" value="sites">
            <div class="qincai-hero__search-inputwrap">
                <i class="iconfont icon-search"></i>
                <input class="qincai-hero__input" type="search" name="s" placeholder="搜索AI工具： OpenClaw / ChatGPT / DeepSeek">
            </div>
            <button class="qincai-hero__button" type="submit">搜索</button>
        </form>
        <div class="qincai-hero__tags">
            <?php foreach ($hot_tags as $tag) : ?>
                <a class="qincai-hero__tag" href="<?php echo esc_url(add_query_arg(array('s' => $tag, 'post_type' => 'sites'), home_url('/'))); ?>"><?php echo esc_html($tag); ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
