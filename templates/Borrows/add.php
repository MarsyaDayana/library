<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
            <?= $this->Html->link(__('List Borrow'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-success']) ?>
       </aside>
        </div>
        <br>

        <div class="borrows form content">
            <?= $this->Form->create($borrow) ?>
            <fieldset>
                <legend><?= __('Add Borrow') ?></legend>

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
                    ?>
                    <div>
                        <br>
                    </div>
                    <?php
                    echo $this->Form->control('member_id' , ["label" => 'Member']);
                ?>
            </div>
                <div class="col-md-6">
                <?php
                    echo $this->Form->control('book_id', ["label" => 'Book' , 'empty' => 'Choose Book', 'options' => $books]);
                    echo $this->Form->control('magazine_id', ["label" => 'Magazine' , 'empty' => 'Choose Magazine', 'options' => $magazines]);
                    echo $this->Form->control('newspaper_id', ["label" => 'Newspaper' , 'empty' => 'Choose Newspaper', 'options' => $newspapers]);
                    
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