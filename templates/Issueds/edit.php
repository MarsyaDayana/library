<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Issued $issued
 * @var string[]|\Cake\Collection\CollectionInterface $borrows
 */
?>
<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
            <?= $this->Html->link(__('List Issued'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-primary']) ?>

             <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $issued->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $issued->id), 'class' => 'btn btn-danger']
            ) ?>

       </aside>
    
    </aside>
    <div class="column-responsive column-80">
        <div class="issueds form content">
            <?= $this->Form->create($issued) ?>
            <fieldset>
                <legend><?= __('Edit Issued') ?></legend>
                <?php
                    echo $this->Form->control('fine');
                    echo $this->Form->control('status');
                    echo $this->Form->control('borrow_id', ['options' => $borrows]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
</div>
            