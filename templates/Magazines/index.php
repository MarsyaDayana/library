<div class="card">
    <div class="card-body">
        <div class="row justify_content_between>">
            <div class ="col-md-auto">
                 <h3><?= __('MAGAZINE  ') ?><a href="#" class="some-class"><img src="/library-intern/webroot/img/Magazine.png" style="width:50px;height:50px;" /></a></h3>
                <?= $this->Html->link(__('+ Magazine'), ['plugin' => false , 'action' => 'add'], ['label' => false, 'class' => 'btn btn-primary']) ?>
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
                    <th><?= $this->Paginator->sort('id', ['label' => __('#')]) ?></th> 
                    <th><?= $this->Paginator->sort('Type', ['label' => __('Type')]) ?></th> 
                    <th><?= $this->Paginator->sort('Name', ['label' => __('Name')]) ?></th> 
                    <th><?= $this->Paginator->sort('Date_Of_Receipt', ['label' => __('Date Of Receipt')]) ?></th> 
                    <th><?= $this->Paginator->sort('Date_Published', ['label' => __('Date Published')]) ?></th> 
                    <th><?= $this->Paginator->sort('Pages', ['label' => __('Pages')]) ?></th> 
                    <th><?= $this->Paginator->sort('Price', ['label' => __('Price')]) ?></th> 
                    <th><?= $this->Paginator->sort('pub_id', ['label' => __('Publisher')]) ?></th> 
                    <th class="actions"><?= __('Actions') ?></th>

                    </tr> 
                </thead> 

                 <tbody>
                    <?php 
                    $page = $this->request->getAttributes()['paging']['Magazines']['page']; 
                    $limit = 1; 
                    $counter = ($page * $limit) - $limit + 1; 
                    ?>

                     <?php foreach ($magazines as $magazine): ?>
                <tr>
                    <td><?= $this->Number->format($magazine->id) ?></td>
                    <td><?= h($magazine->Type) ?></td>
                    <td><?= h($magazine->Name) ?></td>
                    <td><?= h($magazine->Date_Of_Receipt) ?></td>
                    <td><?= h($magazine->Date_Published) ?></td>
                    <td><?= $this->Number->format($magazine->Pages) ?></td>
                    <td><?= $this->Number->format($magazine->Price) ?></td>
                    <td><?= (!empty($magazine->publisher)) ? $magazine->publisher->pub_name : '' ?></td>
                     <td class="actions">
                            <div class="col-md-auto ml-auto">
                                <?= $this->Html->link(__(''), ['action' => 'view', $magazine->id], ['class' => 'fa fa-eye']) ?>
                            </div>
                            <div class="col-md-auto ml-auto">
                                <?= $this->Html->link(__(''), ['action' => 'edit', $magazine->id], ['class' => 'fas fa-edit']) ?>
                            </div>
                            <div class="col-md-auto ml-auto">
                                <?= $this->Form->postLink(__(''), ['action' => 'delete', $magazine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $magazine->id) ,'class' => 'fas fa-trash']) ?>
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
 * @var \App\Model\Entity\Magazine[]|\Cake\Collection\CollectionInterface $magazines
 */
?>

 <div class="magazines index content">
    
    <div class="my-2">
        <?= $this->element('paginator'); ?>
    </div>
    
</div>
    
