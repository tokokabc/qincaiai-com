<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$ranking_items = array('ChatGPT', 'Claude', 'DeepSeek', 'Midjourney', 'GitHub Copilot', 'Kimi', 'Gemini', 'Cursor', 'Runway', 'Dify');
$latest_items = array(
    array('name' => 'OpenClaw Pro', 'desc' => '智能 Agent 平台'),
    array('name' => 'ClawCoder', 'desc' => 'AI 开发助手'),
    array('name' => 'DeepMusic AI', 'desc' => 'AI 音乐创作工具'),
    array('name' => 'FlowAgent', 'desc' => '可视化工作流平台'),
);
?>
<aside class="qincai-right-aside">
    <section class="qincai-panel">
        <div class="qincai-panel__header">
            <h3>热门排行</h3>
        </div>
        <ol class="qincai-rank-list">
            <?php foreach ($ranking_items as $index => $item) : ?>
                <li class="qincai-rank-list__item <?php echo $index < 3 ? 'is-top' : ''; ?>">
                    <span class="qincai-rank-list__num"><?php echo esc_html($index + 1); ?></span>
                    <span class="qincai-rank-list__name"><?php echo esc_html($item); ?></span>
                </li>
            <?php endforeach; ?>
        </ol>
    </section>

    <section class="qincai-panel">
        <div class="qincai-panel__header">
            <h3>最新收录</h3>
        </div>
        <div class="qincai-latest-list">
            <?php foreach ($latest_items as $item) : ?>
                <article class="qincai-latest-list__item">
                    <div class="qincai-latest-list__logo"><?php echo esc_html(mb_substr($item['name'], 0, 1)); ?></div>
                    <div class="qincai-latest-list__content">
                        <h4><?php echo esc_html($item['name']); ?></h4>
                        <p><?php echo esc_html($item['desc']); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="qincai-panel qincai-community-panel">
        <div class="qincai-panel__header">
            <h3>加入社群</h3>
        </div>
        <p class="qincai-community-panel__text">加入芹菜AI交流群，获取最新工具推荐与实战分享。</p>
        <div class="qincai-community-panel__actions">
            <a href="javascript:;" class="qincai-secondary-btn">提交工具</a>
            <a href="javascript:;" class="qincai-secondary-btn is-ghost">加入交流群</a>
        </div>
    </section>

    <section class="qincai-panel qincai-qrcode-panel">
        <div class="qincai-panel__header">
            <h3>扫码进群</h3>
        </div>
        <div class="qincai-qrcode-panel__box">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/wechat_qrcode.png')); ?>" alt="扫码进群">
        </div>
        <p class="qincai-qrcode-panel__text">扫码加入芹菜AI交流群</p>
    </section>
</aside>
