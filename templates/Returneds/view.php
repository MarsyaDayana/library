<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Returned $returned
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Returned'), ['action' => 'edit', $returned->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Returned'), ['action' => 'delete', $returned->id], ['confirm' => __('Are you sure you want to delete # {0}?', $returned->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Returneds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Returned'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="returneds view content">
            <h3><?= h($returned->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($returned->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Book Number') ?></th>
                    <td><?= $this->Number->format($returned->Book_Number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Book Title') ?></th>
                    <td><?= $this->Number->format($returned->Book_Title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Issue Date') ?></th>
                    <td><?= $this->Number->format($returned->Issue_Date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Due Date') ?></th>
                    <td><?= $this->Number->format($returned->Due_Date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Member') ?></th>
                    <td><?= $this->Number->format($returned->Member) ?></td>
                </tr>
                <tr>
                    <th><?= __('Member Number') ?></th>
                    <td><?= $this->Number->format($returned->Member_Number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fine') ?></th>
                    <td><?= $this->Number->format($returned->Fine) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($returned->Status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Return Date') ?></th>
                    <td><?= h($returned->Return_Date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
