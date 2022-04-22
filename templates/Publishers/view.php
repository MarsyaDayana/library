<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publisher $publisher
 */
?>
<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
            <?= $this->Html->link(__('List Publisher'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-success']) ?>

             <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $publisher->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $publisher->id), 'class' => 'btn btn-danger']
            ) ?>
            <?= $this->Html->link(__('Edit Book'), ['action' => 'edit', $publisher->id], ['class' => 'btn btn-warning']) ?>
            <?= $this->Html->link(__('New Book'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        </div> <br>
    </aside>
    <div class="column-responsive column-80">
        <div class="publishers view content">
            <table class="table table-striped">
            <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($publisher->pub_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($publisher->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($publisher->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($publisher->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>
</div>

