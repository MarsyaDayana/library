<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
            <?= $this->Html->link(__('List Magazines'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-success']) ?>
       </aside>
        </div>
        <br>

        <div class="magazines form content">
            <?= $this->Form->create($magazine) ?>
            <fieldset>
                <legend><?= __('Add Magazine') ?></legend>

                <div class="row">
                <div class="col-md-6">
                    <?php
                    echo $this->Form->control('Type');
                    echo $this->Form->control('Name');
                    echo $this->Form->control('Date_Of_Receipt', ['empty' => true]);
                    echo $this->Form->control('Date_Published', ['empty' => true]);
                ?>
                </div>
                <div class="col-md-6">
                     <?php
                    echo $this->Form->control('Pages');
                    echo $this->Form->control('Price');
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


