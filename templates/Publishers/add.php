<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
            <?= $this->Html->link(__('List Publisher'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-success']) ?>
       </aside>
        </div>
        <br>

        <div class="publishers form content">
            <?= $this->Form->create($publisher) ?>
            <fieldset>
                <legend><?= __('Add Publisher') ?></legend>

                <div class="row">
                <div class="col-md-6">
                    <?php
                    echo $this->Form->control('pub_name');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</fieldset>
</div>
</div>
</div>
</div>
                