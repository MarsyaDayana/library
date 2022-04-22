<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Magazine $magazine
 */
?>

<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
                <?= $this->Html->link(__('List Magazine'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-success']) ?>

             <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $magazine->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $magazine->id), 'class' => 'btn btn-danger']
            ) ?>
            <?= $this->Html->link(__('Edit Magazine'), ['action' => 'edit', $magazine->id], ['class' => 'btn btn-warning']) ?>
            <?= $this->Html->link(__('New Magazine'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        </div> <br>
    </aside>
<div class="column-responsive column-80">
     <div class="table-responsive mt-3 "> 
        <div class="magazine view content">
            <table class="table table-striped"> 
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($magazine->Type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($magazine->Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pages') ?></th>
                    <td><?= $this->Number->format($magazine->Pages) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($magazine->Price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Publisher') ?></th>
                    <td><?= (!empty($magazine->publisher)) ? $magazine->publisher->pub_name : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Receipt') ?></th>
                    <td><?= h($magazine->Date_Of_Receipt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Published') ?></th>
                    <td><?= h($magazine->Date_Published) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
