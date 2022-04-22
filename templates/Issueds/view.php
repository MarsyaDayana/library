<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Issued $issued
 */
?>

<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
            <?= $this->Html->link(__('List Issued'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-success']) ?>

             <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $issued->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $issued->id), 'class' => 'btn btn-danger']
            ) ?>
            <?= $this->Html->link(__('Edit Issued'), ['action' => 'edit', $issued->id], ['class' => 'btn btn-warning']) ?>
            <?= $this->Html->link(__('New Issued'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        </div> <br>
    </aside>
    <div class="column-responsive column-80">
        <div class="books view content">
            <table class="table table-striped"> 
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($issued->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Borrow') ?></th>
                    <td><?= $issued->has('borrow') ? $this->Html->link($issued->borrow->borrow_id, ['controller' => 'Borrows', 'action' => 'view', $issued->borrow->borrow_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fine') ?></th>
                    <td><?= $this->Number->format($issued->fine) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>