<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$ranking_items = array(
    array('name' => 'ChatGPT', 'tag' => '对话'),
    array('name' => 'Claude', 'tag' => 'Agent'),
    array('name' => 'DeepSeek', 'tag' => '模型'),
    array('name' => 'Gemini', 'tag' => '搜索'),
    array('name' => 'Cursor', 'tag' => '编程'),
    array('name' => 'Midjourney', 'tag' => '绘图'),
    array('name' => 'Runway', 'tag' => '视频'),
    array('name' => 'Dify', 'tag' => '工作流'),
);
$latest_items = array(
    array('name' => 'OpenClaw', 'desc' => 'Agent 平台 / Skills / 自动化'),
    array('name' => 'Kimi', 'desc' => '长文本与搜索能力'),
    array('name' => 'Trae', 'desc' => 'AI 开发工具协同'),
    array('name' => 'Coze', 'desc' => 'Bot 与工作流平台'),
);
$community_links = array(
    array('title' => '提交工具', 'desc' => '补充你的 AI 产品 / 平台 / 网站'),
    array('title' => '加入交流群', 'desc' => '获取日更工具与实战玩法'),
    array('title' => '商务合作', 'desc' => '流量入口、品牌露出、联合活动'),
);
?>
<aside class="qincai-right-aside d-none d-lg-flex">
    <section class="qincai-panel qincai-panel--rank">
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

    <section class="qincai-panel qincai-panel--latest">
        <div class="qincai-panel__header qincai-panel__header--with-link">
            <h3>最新收录</h3>
            <a href="#qincai-main-content">刚刚更新</a>
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
            <h3>社群 / 合作</h3>
        </div>
        <p class="qincai-community-panel__text">把首页右栏做成真实运营位：既能承接投稿，也能给社群和合作入口留出明确位置。</p>
        <div class="qincai-community-links">
            <?php foreach ($community_links as $link) : ?>
                <a class="qincai-community-links__item" href="javascript:;">
                    <strong><?php echo esc_html($link['title']); ?></strong>
                    <span><?php echo esc_html($link['desc']); ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="qincai-panel qincai-qrcode-panel">
        <div class="qincai-panel__header qincai-panel__header--with-link">
            <h3>扫码进群</h3>
            <a href="javascript:;">微信社群</a>
        </div>
        <div class="qincai-qrcode-panel__box">
            <div class="qincai-qrcode-panel__placeholder">微信群二维码位</div>
        </div>
        <p class="qincai-qrcode-panel__text">这里替换成真实群二维码后，右侧栏就能直接承担转化入口。</p>
    </section>
</aside>
