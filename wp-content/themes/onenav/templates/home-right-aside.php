<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$ranking_items = array(
    array('name' => 'ChatGPT', 'tag' => 'Top1'),
    array('name' => 'Claude', 'tag' => 'Top2'),
    array('name' => 'DeepSeek', 'tag' => 'Top3'),
    array('name' => 'Gemini', 'tag' => '搜索'),
    array('name' => 'Cursor', 'tag' => '编程'),
    array('name' => 'Midjourney', 'tag' => '绘图'),
);
$latest_items = array('OpenClaw', 'Kimi', 'Coze', 'Runway');
?>
<aside class="qincai-right-aside d-none d-xl-flex">
    <section class="qincai-panel">
        <div class="qincai-panel__header qincai-panel__header--with-link">
            <h3>热门排行</h3>
            <a href="#module_id_1">查看全部</a>
        </div>
        <ol class="qincai-rank-list">
            <?php foreach ($ranking_items as $index => $item) : ?>
                <li class="qincai-rank-list__item <?php echo $index < 3 ? 'is-top' : ''; ?>">
                    <span class="qincai-rank-list__num"><?php echo esc_html($index + 1); ?></span>
                    <span class="qincai-rank-list__name"><?php echo esc_html($item['name']); ?></span>
                    <span class="qincai-rank-list__tag"><?php echo esc_html($item['tag']); ?></span>
                </li>
            <?php endforeach; ?>
        </ol>
    </section>
    <section class="qincai-panel">
        <div class="qincai-panel__header"><h3>最新收录</h3></div>
        <div class="qincai-latest-list">
            <?php foreach ($latest_items as $item) : ?>
                <div class="qincai-latest-list__item">
                    <div class="qincai-latest-list__logo"><?php echo esc_html(mb_substr($item, 0, 1)); ?></div>
                    <div class="qincai-latest-list__content"><h4><?php echo esc_html($item); ?></h4><p>刚刚加入首页工具库</p></div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="qincai-panel qincai-qrcode-panel">
        <div class="qincai-panel__header"><h3>扫码进群</h3></div>
        <div class="qincai-qrcode-panel__box"><div class="qincai-qrcode-panel__placeholder">120 × 120 二维码位</div></div>
        <p class="qincai-community-panel__text">右侧预留社群转化位</p>
    </section>
</aside>
