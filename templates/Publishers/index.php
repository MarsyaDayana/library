<div class="card">
    <div class="card-body">
        <div class="row justify_content_between>">
            <div class ="col-md-auto">
                <?= $this->Html->link(__('+ Publisher'), ['plugin' => false , 'action' => 'add'], ['label' => false, 'class' => 'btn btn-primary']) ?>
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
                    <th><?= $this->Paginator->sort('pub_id', ['label' => __('#')]) ?></th> 
                    <th><?= $this->Paginator->sort('pub_name', ['label' => __('Name')]) ?></th> 
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $page = $this->request->getAttributes()['paging']['Publishers']['page']; 
                    $limit = 1; 
                    $counter = ($page * $limit) - $limit + 1; 
                    ?>

                    <?php foreach ($publishers as $publisher): ?>
                         <tr>
                    <td><?=$counter++; ?></td>
                    <td><?= h($publisher->pub_name) ?></td>
                    <td><?= $this->Number->format($publisher->status) ?></td>
                    <td><?= h($publisher->created) ?></td>
                    <td><?= h($publisher->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $publisher->pub_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publisher->pub_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $publisher->pub_id], ['confirm' => __('Are you sure you want to delete # {0}?', $publisher->pub_id)]) ?>
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
 * @var \App\Model\Entity\Book[]|\Cake\Collection\CollectionInterface $publishers
 */
?>
<div class="publishers index content">
    
    <div class="my-2">
        <?= $this->element('paginator'); ?>
    </div>
    
</div>


