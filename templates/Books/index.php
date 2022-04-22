<div class="card">
    <div class="card-body">
        <div class="row justify_content_between>">
            <div class ="col-md-auto">
                 <h3><?= __('BOOKS  ') ?><a href="#" class="some-class"><img src="/library-intern/webroot/img/books.png" style="width:50px;height:50px;" /></a></h3>
                <?= $this->Html->link(__('+ Book'), ['plugin' => false , 'action' => 'add'], ['label' => false, 'class' => 'btn btn-primary']) ?>
            </div>

            <div class="col-md-auto ml-auto">
                <?= $this->Form->create($filter, ['id' => 'search' , 'type' => 'get', 'class' => 'form-inline d-block d-md-flex mt-4 mt-md-0']); ?>
                <?= $this->Form->control('search', ["label" => false, "placeholder" => "Search", "templateVars" => ["addonClass" => "mr-md-2"] ]); ?>
                <?= $this->Form->control('publisher_id', ["label" => false, 'empty' => 'Choose Publisher' , "placeholder" => "Search",  'options' => $publishers, "templateVars" => ["addonClass" => "mr-md-2"] ]); ?>
                <?= $this->Form->submit('Filter', ['class' => 'btn btn-outline-primary']); ?>
                <?= $this->Form->end(); ?>
            </div>
           
         </div>

         <div class="table-responsive mt-3 "> 
            <table class="table table-striped"> 
                <thead> 
                    <tr>
                        <th><?= $this->Paginator->sort('name', ['label' => __('#')]) ?></th> 
                        <th><?= $this->Paginator->sort('name', ['label' => __('ISBN No')]) ?></th> 
                        <th><?= $this->Paginator->sort('cycle', ['label' => __('Book Title')]) ?></th> 
                        <th><?= $this->Paginator->sort('status', ['label' => __('Book Type')]) ?></th> 
                        <th><?= $this->Paginator->sort('status', ['label' => __('Author Name')]) ?></th> 
                        <th><?= $this->Paginator->sort('status', ['label' => __('Quantity')]) ?></th> 
                        <th><?= $this->Paginator->sort('status', ['label' => __('Purchase Date')]) ?></th> 
                        <th><?= $this->Paginator->sort('status', ['label' => __('Edition')]) ?></th> 
                        <th><?= $this->Paginator->sort('status', ['label' => __('Price')]) ?></th> 
                        <th><?= $this->Paginator->sort('status', ['label' => __('Pages')]) ?></th> 
                        <th><?= $this->Paginator->sort('status', ['label' => __('Publisher')]) ?></th>
                        <th class="actions text-center"><?= __('Actions') ?></th> 
                    </tr> 
                </thead> 
                <tbody>
                    <?php 
                    $page = $this->request->getAttributes()['paging']['Books']['page']; 
                    $limit = 1; 
                    $counter = ($page * $limit) - $limit + 1; 
                    ?>

                    <?php foreach ($books as $book): ?>
                        <tr> 
                            <td><?=$counter++; ?></td>
                            <td><?= h($book->ISBN_NO) ?></td>
                            <td><?= h($book->Book_Title) ?></td>
                            <td><?= (!empty($book->type)) ? $book->type->Name : '' ?></td>
                            <td><?= h($book->Author_Name) ?></td>
                            <td><?= h($book->Quantity) ?></td>
                            <td><?= h($book->Purchase_Date) ?></td>
                            <td><?= h($book->Edition) ?></td>
                            <td><?= h($book->Price) ?></td>
                            <td><?= h($book->Pages) ?></td>
                            <td><?= (!empty($book->publisher)) ? $book->publisher->pub_name : '' ?></td>
                            <td class="actions">
                            <div class="col-md-auto ml-auto">
                                <?= $this->Html->link(__(''), ['action' => 'view', $book->id], ['class' => 'fa fa-eye']) ?>
                            </div>
                            <div class="col-md-auto ml-auto">
                                <?= $this->Html->link(__(''), ['action' => 'edit', $book->id], ['class' => 'fas fa-edit']) ?>
                            </div>
                            <div class="col-md-auto ml-auto">
                                <?= $this->Form->postLink(__(''), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id) ,'class' => 'fas fa-trash']) ?>
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
<div class="books index content">
    
    <div class="my-2">
        <?= $this->element('paginator'); ?>
    </div>
    
</div>
