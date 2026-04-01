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
</aside>
