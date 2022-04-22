<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Borrow $borrow
 */
?>

<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
            <?= $this->Html->link(__('List Borrow'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-success']) ?>

             <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $borrow->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $borrow->id), 'class' => 'btn btn-danger']
            ) ?>
            <?= $this->Html->link(__('Edit Book'), ['action' => 'edit', $borrow->id], ['class' => 'btn btn-warning']) ?>
            <?= $this->Html->link(__('New Borrow'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        </div> <br>
    </aside>
    <div class="column-responsive column-80">
        <div class="borrows view content">
            <table class="table table-striped"> 
                <tr>
                    <th><?= __('Book') ?></th>
                    <td><?= (!empty($borrow->book)) ? $borrow->book->Book_Title: '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Magazine') ?></th>
                    <td><?= (!empty($borrow->magazine)) ? $borrow->magazine->Name: '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Newspaper') ?></th>
                    <td><?= (!empty($borrow->newspaper)) ? $borrow->newspaper->Name: '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Member') ?></th>
                    <td><?= (!empty($borrow->member)) ? $borrow->member->Name: '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($borrow->status) ?></td
                </tr>
                <tr>
                    <th><?= __('Borrow Date') ?></th>
                    <td><?= h($borrow->borrow_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Return Date') ?></th>
                    <td><?= h($borrow->return_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
