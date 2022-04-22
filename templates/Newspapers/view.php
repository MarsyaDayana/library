<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newspaper $newspaper
 */
?>

<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
                <?= $this->Html->link(__('List Newspaper'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-success']) ?>

             <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $newspaper->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $newspaper->id), 'class' => 'btn btn-danger']
            ) ?>
            <?= $this->Html->link(__('Edit Newspaper'), ['action' => 'edit', $newspaper->id], ['class' => 'btn btn-warning']) ?>
            <?= $this->Html->link(__('New Newspaper'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        </div> <br>
    </aside>
<div class="column-responsive column-80">
     <div class="table-responsive mt-3 "> 
        <div class="newspaper view content">
            <table class="table table-striped"> 
                <tr>
                    <th><?= __('Language') ?></th>
                    <td><?= h($newspaper->Language) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($newspaper->Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($newspaper->Type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pages') ?></th>
                    <td><?= $this->Number->format($newspaper->Pages) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($newspaper->Price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Publisher') ?></th>
                    <td><?= (!empty($newspaper->publisher)) ? $newspaper->publisher->pub_name : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Receipt') ?></th>
                    <td><?= h($newspaper->Date_Of_Receipt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Published') ?></th>
                    <td><?= h($newspaper->Date_Published) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
