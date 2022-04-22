<div class="card">
    <div class="card-body">
        <div class="row justify_content_between>">
            <div class ="col-md-auto">
                <?= $this->Html->link(__('+ Member'), ['plugin' => false , 'action' => 'add'], ['label' => false, 'class' => 'btn btn-primary']) ?>
            </div>
            <div class="col-md-auto ml-auto">
                <?= $this->Form->create($filter, ['id' => 'search' , 'type' => 'get', 'class' => 'form-inline d-block d-md-flex mt-4 mt-md-0']); ?>
                <?= $this->Form->control('search', ["label" => false, "placeholder" => "Search", "templateVars" => ["addonClass" => "mr-md-2"] ]); ?>
                <?= $this->Form->submit('Filter', ['class' => 'btn btn-outline-primary']); ?>
                <?= $this->Form->end(); ?>
            </div>
           
         </div>

         <div class="table-responsive mt-3 "> 
            <table class="table table-striped"> 
                <thead> 
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Membership_Number') ?></th>
                    <th><?= $this->Paginator->sort('Name') ?></th>
                    <th><?= $this->Paginator->sort('Contact') ?></th>
                    <th><?= $this->Paginator->sort('ID_Number') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                     </tr> 
                </thead> 
                <tbody>
                    <?php 
                    $page = $this->request->getAttributes()['paging']['Members']['page']; 
                    $limit = 1; 
                    $counter = ($page * $limit) - $limit + 1; 
                    ?>

                <?php foreach ($members as $member): ?>
                <tr>
                    <td><?= $this->Number->format($member->id) ?></td>
                    <td><?= h($member->Membership_Number) ?></td>
                    <td><?= h($member->Name) ?></td>
                    <td><?= h($member->Contact) ?></td>
                    <td><?= $this->Number->format($member->ID_Number) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $member->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $member->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?>
                     </td>
                        </tr> 
                        <?php endforeach; ?>
                </tbody> 
            </table> 
        </div>
    </div>
</div>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book[]|\Cake\Collection\CollectionInterface $books
 */
?>
<div class="members index content">
    
    <div class="my-2">
        <?= $this->element('paginator'); ?>
    </div>
    
</div>
