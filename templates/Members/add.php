<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
            <?= $this->Html->link(__('List Member'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-success']) ?>
       </aside>
        </div>
        <br>

         <div class="members form content">
            <?= $this->Form->create($member) ?>
            <fieldset>
                <legend><?= __('Add Member') ?></legend>

                <div class="row">
                <div class="col-md-6">
                <?php
                    echo $this->Form->control('Membership_Number');
                    echo $this->Form->control('Name');
                ?>
                 </div>
                <div class="col-md-6">
                    <?php
                    echo $this->Form->control('Contact');
                    echo $this->Form->control('ID_Number', ["label" => 'ID Number']);
                ?>
                 </div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

       