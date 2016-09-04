<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Artigo'), ['action' => 'edit', $artigo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Artigo'), ['action' => 'delete', $artigo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artigo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Artigo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artigo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categoria'), ['controller' => 'Categoria', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorium'), ['controller' => 'Categoria', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="artigo view large-9 medium-8 columns content">
    <h3><?= h($artigo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Categorium') ?></th>
            <td><?= $artigo->has('categorium') ? $this->Html->link($artigo->categorium->title, ['controller' => 'Categoria', 'action' => 'view', $artigo->categorium->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($artigo->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Photo Dir') ?></th>
            <td><?= h($artigo->photo_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($artigo->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Criado') ?></th>
            <td><?= h($artigo->criado) ?></td>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($artigo->modificado) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Texto') ?></h4>
        <?= $this->Text->autoParagraph(h($artigo->texto)); ?>
    </div>
    <div class="row">
        <h4><?= __('Photo') ?></h4>
        <?= $this->Text->autoParagraph(h($artigo->photo)); ?>
    </div>
</div>
