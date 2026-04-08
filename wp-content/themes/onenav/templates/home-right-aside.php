<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$ranking_items = array('OpenClaw','ChatGPT','Gemini','DeepSeek','Claude','Kimi','豆包','Midjoumey','即梦AI','通义灵码');
$latest_items = array('OpenClaw Pro', 'ClawCoder', 'DeepMusic AI');
?>
<aside class="qincai-right-aside d-none d-xl-flex">
    <section class="qincai-panel">
        <div class="qincai-panel__header"><h3>🔥 热门排行</h3></div>
        <ol class="qincai-rank-list">
            <?php foreach ($ranking_items as $index => $item) : ?>
                <li class="qincai-rank-list__item"><span class="qincai-rank-list__num"><?php echo esc_html($index + 1); ?></span><span class="qincai-rank-list__name"><?php echo esc_html($item); ?></span></li>
            <?php endforeach; ?>
        </ol>
    </section>

    <section class="qincai-panel">
        <div class="qincai-panel__header"><h3>🖥 最新收录</h3></div>
        <div class="qincai-latest-list">
            <?php foreach ($latest_items as $item) : ?>
                <a class="qincai-latest-list__item" href="#"><span class="qincai-latest-list__logo">●</span><span class="qincai-latest-list__content"><?php echo esc_html($item); ?></span></a>
            <?php endforeach; ?>
        </div>
        <a class="qincai-side-more" href="#">查看全部 ›</a>
    </section>

    <section class="qincai-panel">
        <div class="qincai-panel__header"><h3>💬 加入交流群</h3></div>
        <div class="qincai-latest-list">
            <?php foreach ($latest_items as $item) : ?>
                <a class="qincai-latest-list__item" href="#"><span class="qincai-latest-list__logo">●</span><span class="qincai-latest-list__content"><?php echo esc_html($item); ?></span></a>
            <?php endforeach; ?>
        </div>
        <a class="qincai-side-more" href="#">查看全部 ›</a>
    </section>

    <section class="qincai-panel qincai-qrcode-panel">
        <div class="qincai-panel__header"><h3>📌 加入交流群</h3></div>
        <p class="qincai-qrcode-panel__tip">扫码加入AGI最狠交流群</p>
        <div class="qincai-qrcode-panel__box"><div class="qincai-qrcode-panel__placeholder">二维码</div></div>
    </section>
</aside>
