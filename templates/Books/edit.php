<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
            <?= $this->Html->link(__('List Book'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-primary']) ?>

             <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $book->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $book->id), 'class' => 'btn btn-danger']
            ) ?>

       </aside>
    
    </aside>
    <div class="column-responsive column-80">
        <div class="books form content">
            <?= $this->Form->create($book) ?>
            <fieldset>
                <legend><?= __('Edit Book') ?></legend>
                <div class="row">
                <div class="col-md-6">
                <?php
                    echo $this->Form->control('ISBN_NO' , ["label" => 'ISBN No' ]);
                    echo $this->Form->control('Book_Title');
                    echo $this->Form->control('Book_Type' , ['options' => $types]);
                    echo $this->Form->control('Author_Name');
                    echo $this->Form->control('Quantity');
                ?>
            </div>
                <div class="col-md-6">
                <?php
                    echo $this->Form->control('Purchase_Date', ['empty' => true]);
                    echo $this->Form->control('Edition');
                    echo $this->Form->control('Price');
                    echo $this->Form->control('Pages');
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
