<div class="card">
    <div class="card-body">
        <div class="row justify_content_between>">
            <div class ="col-md-auto">
                <h3><?= __('BORROWS  ') ?><a href="#" class="some-class"><img src="/library-intern/webroot/img/borrow.png" style="width:50px;height:50px;" /></a></h3>
                <?= $this->Html->link(__('+ Borrow'), ['plugin' => false , 'action' => 'add'], ['label' => false, 'class' => 'btn btn-primary']) ?>
            </div>
            <div class="col-md-auto ml-auto">

                <?= $this->Form->create($filter, ['borrow_id' => 'search' , 'type' => 'get', 'class' => 'form-inline d-block d-md-flex mt-4 mt-md-0']); ?>
                <?= $this->Form->control('search', ["label" => false, "placeholder" => "Search", "templateVars" => ["addonClass" => "mr-md-2"] ]); ?>
                <?= $this->Form->submit('Filter', ['class' => 'btn btn-outline-primary']); ?>
                <?= $this->Form->end(); ?>
            </div>
         </div>
<div class="table-responsive mt-3 "> 
            <table class="table table-striped"> 
                <thead> 
                    <tr>
                         <th><?= $this->Paginator->sort('borrow_id', ['label' => __('#')]) ?></th> 
                    <th><?= $this->Paginator->sort('borrow_date') ?></th>
                    <th><?= $this->Paginator->sort('return_date') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('book_id') ?></th>
                    <th><?= $this->Paginator->sort('magazine_id') ?></th>
                    <th><?= $this->Paginator->sort('newspaper_id') ?></th>
                    <th><?= $this->Paginator->sort('member_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                 <?php 
                    $page = $this->request->getAttributes()['paging']['Borrows']['page']; 
                    $limit = 1; 
                    $counter = ($page * $limit) - $limit + 1; 
                    ?>
                    <?php foreach ($borrows as $borrow): ?>
                <tr>
                    <td><?=$counter++; ?></td>
                    <td><?= h($borrow->borrow_date) ?></td>
                    <td><?= h($borrow->return_date) ?></td>
                    <td><?= h($borrow->status) ?></td>
                    <td><?= (!empty($borrow->book)) ? $borrow->book->Book_Title : '' ?></td>
                    <td><?= (!empty($borrow->magazine)) ? $borrow->magazine->Name : '' ?></td>
                    <td><?= (!empty($borrow->newspaper)) ? $borrow->newspaper->Name : '' ?></td>
                    <td><?= (!empty($borrow->member)) ? $borrow->member->Name : '' ?></td>
                    
                   <td class="actions">
                            <div class="col-md-auto ml-auto">
                                <?= $this->Html->link(__(''), ['action' => 'view', $borrow->id], ['class' => 'fa fa-eye']) ?>
                            </div>
                            <div class="col-md-auto ml-auto">
                                <?= $this->Html->link(__(''), ['action' => 'edit', $borrow->id], ['class' => 'fas fa-edit']) ?>
                            </div>
                            <div class="col-md-auto ml-auto">
                                <?= $this->Form->postLink(__(''), ['action' => 'delete', $borrow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $borrow->id) ,'class' => 'fas fa-trash']) ?>
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
<div class="borrows index content">
    
    <div class="my-2">
        <?= $this->element('paginator'); ?>
    </div>
    
</div>



