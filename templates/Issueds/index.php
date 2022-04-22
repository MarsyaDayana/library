<div class="card">
    <div class="card-body">
        <div class="row justify_content_between>">
            <div class ="col-md-auto">
                <?= $this->Html->link(__('+ Issued'), ['plugin' => false , 'action' => 'add'], ['label' => false, 'class' => 'btn btn-primary']) ?>
            </div>
            <div class="col-md-auto ml-auto">
                
                <?= $this->Form->submit('Filter', ['class' => 'btn btn-outline-primary']); ?>
                <?= $this->Form->end(); ?>
            </div>
         </div>
<div class="table-responsive mt-3 "> 
            <table class="table table-striped"> 
                <thead> 
                    <tr>
                        <th><?= $this->Paginator->sort('id', ['label' => __('#')]) ?></th> 
                    <th><?= $this->Paginator->sort('fine') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('borrow_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $page = $this->request->getAttributes()['paging']['Issueds']['page']; 
                    $limit = 1; 
                    $counter = ($page * $limit) - $limit + 1; 
                    ?>
                     <?php foreach ($issueds as $issued): ?>
                <tr>
                    <td><?= $this->Number->format($issued->id) ?></td>
                    <td><?= $this->Number->format($issued->fine) ?></td>
                    <td><?= h($issued->status) ?></td>
                    <td><?= (!empty($issued->borrow->member)) ? $issued->borrow->member->Name : '' ?></td>
                    <td class="actions">
                            <div class="col-md-auto ml-auto">
                                <?= $this->Html->link(__(''), ['action' => 'view', $issued->id], ['class' => 'fa fa-eye']) ?>
                            </div>
                            <div class="col-md-auto ml-auto">
                                <?= $this->Html->link(__(''), ['action' => 'edit', $issued->id], ['class' => 'fas fa-edit']) ?>
                            </div>
                            <div class="col-md-auto ml-auto">
                                <?= $this->Form->postLink(__(''), ['action' => 'delete', $issued->id], ['confirm' => __('Are you sure you want to delete # {0}?', $issued->id) ,'class' => 'fas fa-trash']) ?>
                            </div>
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
<div class="issueds index content">
    
    <div class="my-2">
        <?= $this->element('paginator'); ?>
    </div>
    
</div>


