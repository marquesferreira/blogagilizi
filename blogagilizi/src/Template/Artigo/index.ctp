<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Artigo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categoria'), ['controller' => 'Categoria', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categorium'), ['controller' => 'Categoria', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="artigo index large-9 medium-8 columns content">
    <h3><?= __('Artigo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('categoria_id') ?></th>
                <th><?= $this->Paginator->sort('titulo') ?></th>
                <th><?= $this->Paginator->sort('criado') ?></th>
                <th><?= $this->Paginator->sort('modificado') ?></th>
                <th><?= $this->Paginator->sort('photo_dir') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($artigo as $artigo): ?>
            <tr>
                <td><?= $this->Number->format($artigo->id) ?></td>
                <td><?= $artigo->has('categorium') ? $this->Html->link($artigo->categorium->title, ['controller' => 'Categoria', 'action' => 'view', $artigo->categorium->id]) : '' ?></td>
                <td><?= h($artigo->titulo) ?></td>
                <td><?= h($artigo->criado) ?></td>
                <td><?= h($artigo->modificado) ?></td>
                <td><?= h($artigo->photo_dir) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $artigo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artigo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artigo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artigo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
