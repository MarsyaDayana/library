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
                 <?= $this->Html->link(__('List Newspaper'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-primary']) ?>

             <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $newspaper->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $newspaper->id), 'class' => 'btn btn-danger']
            ) ?>

       </aside>
    
    </aside>
    <div class="column-responsive column-80">
        <div class="newspapers form content">
            <?= $this->Form->create($newspaper) ?>
            <fieldset>
                <legend><?= __('Edit Newspaper') ?></legend>
                <div class="row">
                <div class="col-md-6">
                    <?php
                    echo $this->Form->control('Language');
                    echo $this->Form->control('Name');
                    echo $this->Form->control('Date_Of_Receipt', ['empty' => true]);
                    echo $this->Form->control('Date_Published', ['empty' => true]);
                ?>
                </div>
                <div class="col-md-6">
                    <?php
                    echo $this->Form->control('Pages');
                    echo $this->Form->control('Price');
                    echo $this->Form->control('Type');
                    echo $this->Form->control('pub_id' , ["label" => 'Publisher' , 'options' => $publishers]);
                ?>
</div>
        </div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
    </div>
    </div>
</div>
