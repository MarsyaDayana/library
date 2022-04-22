<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Borrow $borrow
 * @var string[]|\Cake\Collection\CollectionInterface $books
 * @var string[]|\Cake\Collection\CollectionInterface $magazines
 * @var string[]|\Cake\Collection\CollectionInterface $newspapers
 */
?>
<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
            <?= $this->Html->link(__('List Borrow'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-primary']) ?>

             <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $borrow->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $borrow->id), 'class' => 'btn btn-danger']
            ) ?>

       </aside>
    
    </aside>
    <div class="column-responsive column-80">
        <div class="books form content">
            <?= $this->Form->create($borrow) ?>
            <fieldset>
                <legend><?= __('Edit Book') ?></legend>
                <div class="row">
                <div class="col-md-6">
                     <?php
                    echo $this->Form->control('borrow_date');
                    echo $this->Form->control('return_date');
                    ?>
                    <div>
                        <b>Status</b>
                    </div>
                    <?php
                    echo $this->Form->select('status',array(['empty' => 'Choose Status','Progress' => 'Progress', 'Return'=> 'Return' , 'Not Return' => 'Not Return']));
                    echo $this->Form->control('member_id', ['options' => $members]);
                ?>
                 </div>
                <div class="col-md-6">
                    <?php
                    echo $this->Form->control('book_id', ['options' => $books]);
                    echo $this->Form->control('magazine_id', ['options' => $magazines]);
                    echo $this->Form->control('newspaper_id', ['options' => $newspapers]);
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
