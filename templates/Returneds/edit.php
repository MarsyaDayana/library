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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $returned->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $returned->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Returneds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="returneds form content">
            <?= $this->Form->create($returned) ?>
            <fieldset>
                <legend><?= __('Edit Returned') ?></legend>
                <?php
                    echo $this->Form->control('Book_Number');
                    echo $this->Form->control('Book_Title');
                    echo $this->Form->control('Issue_Date');
                    echo $this->Form->control('Due_Date');
                    echo $this->Form->control('Return_Date', ['empty' => true]);
                    echo $this->Form->control('Member');
                    echo $this->Form->control('Member_Number');
                    echo $this->Form->control('Fine');
                    echo $this->Form->control('Status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
