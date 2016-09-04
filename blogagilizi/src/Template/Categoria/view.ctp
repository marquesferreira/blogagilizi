<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categorium'), ['action' => 'edit', $categorium->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categorium'), ['action' => 'delete', $categorium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorium->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categoria'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorium'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoria view large-9 medium-8 columns content">
    <h3><?= h($categorium->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($categorium->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($categorium->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Criado') ?></th>
            <td><?= h($categorium->criado) ?></td>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($categorium->modificado) ?></td>
        </tr>
    </table>
</div>
