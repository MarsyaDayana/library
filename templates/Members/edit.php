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
            <?= $this->Html->link(__('List Book'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-primary']) ?>

             <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $member->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $member->id), 'class' => 'btn btn-danger']
            ) ?>

       </aside>
    
    </aside>
    <div class="column-responsive column-80">
        <div class="members form content">
             <?= $this->Form->create($member) ?>
            <fieldset>
                <legend><?= __('Edit Member') ?></legend>
                <?php
                    echo $this->Form->control('Membership_Number');
                    echo $this->Form->control('Name');
                    echo $this->Form->control('Contact');
                    echo $this->Form->control('ID_Number');
                ?>
           </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
    </div>
    </div>
</div>

           