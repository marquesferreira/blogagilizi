<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Artigo'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categoria'), ['controller' => 'Categoria', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categorium'), ['controller' => 'Categoria', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="artigo form large-9 medium-8 columns content">
    <?= $this->Form->create($artigo,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Artigo') ?></legend>
        <?php
            echo $this->Form->input('categoria_id', ['options' => $categoria]);
            echo $this->Form->input('titulo');
            echo $this->Form->input('texto');
            echo $this->Form->input('photo',['type' => 'file']);
            echo $this->Form->input('criado', ['empty' => true]);
            echo $this->Form->input('modificado', ['empty' => true]);
            echo $this->Form->input('photo_dir',['type' => 'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
