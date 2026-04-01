<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$ranking_items = array(
    array('name' => 'ChatGPT', 'tag' => '对话'),
    array('name' => 'Claude', 'tag' => 'Agent'),
    array('name' => 'DeepSeek', 'tag' => '模型'),
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
    <section class="qincai-panel qincai-community-panel">
        <div class="qincai-panel__header"><h3>投稿 / 社群</h3></div>
        <p class="qincai-community-panel__text">右侧栏保留真实运营位：提交工具、加入社群、商务合作。</p>
        <div class="qincai-community-links">
            <a class="qincai-community-links__item" href="javascript:;"><strong>提交工具</strong><span>补充你的 AI 产品入口</span></a>
            <a class="qincai-community-links__item" href="javascript:;"><strong>加入社群</strong><span>获取更新提醒和玩法讨论</span></a>
            <a class="qincai-community-links__item" href="javascript:;"><strong>商务合作</strong><span>品牌露出 / 流量合作 / 栏位合作</span></a>
        </div>
    </section>
</aside>
