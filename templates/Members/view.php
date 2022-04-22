<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member $member
 */
?>

<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
            <?= $this->Html->link(__('List Members'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-success']) ?>

             <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $member->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $member->id), 'class' => 'btn btn-danger']
            ) ?>
            <?= $this->Html->link(__('Edit Member'), ['action' => 'edit', $member->id], ['class' => 'btn btn-warning']) ?>
            <?= $this->Html->link(__('New Member'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        </div> <br>
    </aside> 

    <div class="column-responsive column-80">
        <div class="members view content">
            <table class="table table-striped"> 
                 <tr>
                    <th><?= __('Membership Number') ?></th>
                    <td><?= h($member->Membership_Number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($member->Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact') ?></th>
                    <td><?= h($member->Contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID Number') ?></th>
                    <td><?= $this->Number->format($member->ID_Number) ?></td>
                </tr>
            </table>

        </div>
    </div>
</div>
</div>
</div>
</div>
