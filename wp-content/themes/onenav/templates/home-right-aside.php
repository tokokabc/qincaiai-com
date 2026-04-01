<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$ranking_items = array(
    array('name' => 'ChatGPT', 'tag' => 'TOP1'),
    array('name' => 'Claude', 'tag' => 'TOP2'),
    array('name' => 'DeepSeek', 'tag' => 'TOP3'),
    array('name' => 'Gemini', 'tag' => '搜索'),
    array('name' => 'Cursor', 'tag' => '编程'),
    array('name' => 'Midjourney', 'tag' => '绘图'),
);
$latest_items = array(
    array('name' => 'OpenClaw', 'desc' => 'Agent平台 / Skills / 自动化'),
    array('name' => 'Kimi', 'desc' => '长文本与搜索能力'),
    array('name' => 'Coze', 'desc' => 'Bot 与工作流平台'),
    array('name' => 'Runway', 'desc' => 'AI 视频创作工具'),
);
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
        <div class="qincai-panel__header qincai-panel__header--with-link">
            <h3>最新收录</h3>
            <a href="#module_id_2">刚刚更新</a>
        </div>
        <div class="qincai-latest-list">
            <?php foreach ($latest_items as $item) : ?>
                <div class="qincai-latest-list__item">
                    <div class="qincai-latest-list__logo"><?php echo esc_html(mb_substr($item['name'], 0, 1)); ?></div>
                    <div class="qincai-latest-list__content"><h4><?php echo esc_html($item['name']); ?></h4><p><?php echo esc_html($item['desc']); ?></p></div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="qincai-panel qincai-community-panel">
        <div class="qincai-panel__header"><h3>加入交流群</h3></div>
        <p class="qincai-community-panel__text">获取 AI 工具更新、导航提交、产品讨论与合作机会。</p>
        <div class="qincai-community-links">
            <a class="qincai-community-links__item" href="javascript:;"><strong>提交工具</strong><span>收录你的 AI 产品 / 网站 / 平台</span></a>
            <a class="qincai-community-links__item" href="javascript:;"><strong>加入社群</strong><span>获取每日更新与玩法讨论</span></a>
            <a class="qincai-community-links__item" href="javascript:;"><strong>商务合作</strong><span>品牌曝光 / 专题合作 / 栏位合作</span></a>
        </div>
    </section>
    <section class="qincai-panel qincai-qrcode-panel">
        <div class="qincai-panel__header"><h3>扫码进群</h3></div>
        <div class="qincai-qrcode-panel__box"><div class="qincai-qrcode-panel__placeholder">二维码位</div></div>
    </section>
</aside>
