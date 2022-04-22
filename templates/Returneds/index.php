<div class="card">
    <div class="card-body">
        <div class="row justify_content_between>">
            <div class ="col-md-auto">
                <?= $this->Html->link(__('+ Book'), ['plugin' => false , 'action' => 'add'], ['label' => false, 'class' => 'btn btn-primary']) ?>
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
                    <th><?= $this->Paginator->sort('Book_Number') ?></th>
                    <th><?= $this->Paginator->sort('Book_Title') ?></th>
                    <th><?= $this->Paginator->sort('Issue_Date') ?></th>
                    <th><?= $this->Paginator->sort('Due_Date') ?></th>
                    <th><?= $this->Paginator->sort('Return_Date') ?></th>
                    <th><?= $this->Paginator->sort('Member') ?></th>
                    <th><?= $this->Paginator->sort('Member_Number') ?></th>
                    <th><?= $this->Paginator->sort('Fine') ?></th>
                    <th><?= $this->Paginator->sort('Status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $page = $this->request->getAttributes()['paging']['Returneds']['page']; 
                    $limit = 1; 
                    $counter = ($page * $limit) - $limit + 1; 
                    ?>
                    <tbody>
                <?php foreach ($returneds as $returned): ?>
                <tr>
                    <td><?= $this->Number->format($returned->id) ?></td>
                    <td><?= $this->Number->format($returned->Book_Number) ?></td>
                    <td><?= $this->Number->format($returned->Book_Title) ?></td>
                    <td><?= $this->Number->format($returned->Issue_Date) ?></td>
                    <td><?= $this->Number->format($returned->Due_Date) ?></td>
                    <td><?= h($returned->Return_Date) ?></td>
                    <td><?= $this->Number->format($returned->Member) ?></td>
                    <td><?= $this->Number->format($returned->Member_Number) ?></td>
                    <td><?= $this->Number->format($returned->Fine) ?></td>
                    <td><?= $this->Number->format($returned->Status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $returned->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $returned->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $returned->id], ['confirm' => __('Are you sure you want to delete # {0}?', $returned->id)]) ?>
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
<div class="books index content">
    
    <div class="my-2">
        <?= $this->element('paginator'); ?>
    </div>
    
</div>

