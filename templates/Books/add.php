<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
            <?= $this->Html->link(__('List Book'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-success']) ?>
       </aside>
        </div>
        <br>

        <div class="books form content">
            <?= $this->Form->create($book) ?>
            <fieldset>
                <legend><?= __('Add Book') ?></legend>

                <div class="row">
                <div class="col-md-6">
                <?php
                    echo $this->Form->control('ISBN_NO' , ["label" => 'ISBN No' ]);
                    echo $this->Form->control('Book_Title');
                    echo $this->Form->control('Book_Type'  , ['empty' => 'Choose Book Types','options' => $types]);
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
                    echo $this->Form->control('pub_id' , ["label" => 'Publisher' , 'empty' => 'Choose Publisher', 'options' => $publishers]);
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