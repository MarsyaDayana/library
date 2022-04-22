<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
            <?= $this->Html->link(__('List Issued'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-success']) ?>
       </aside>
        </div>
        <br>

        <div class="issueds form content">
            <?= $this->Form->create($issued) ?>
            <fieldset>
                <legend><?= __('Add Issued') ?></legend>
                <?php
                    echo $this->Form->control('fine');
                    echo $this->Form->control('status');
                    echo $this->Form->control('borrow_id', ['options' => $borrows]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
</div>
            