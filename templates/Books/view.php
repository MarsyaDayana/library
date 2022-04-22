<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>

<div class="card">
    <div class="card-body">
         <div class="side-nav">
            <aside class="column">
            <?= $this->Html->link(__('List Book'), ['plugin' => false , 'action' => 'index'], ['label' => false, 'class' => 'btn btn-success']) ?>

             <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $book->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $book->id), 'class' => 'btn btn-danger']
            ) ?>
            <?= $this->Html->link(__('Edit Book'), ['action' => 'edit', $book->id], ['class' => 'btn btn-warning']) ?>
            <?= $this->Html->link(__('New Book'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        </div> <br>
    </aside>
    <div class="column-responsive column-80">
        <div class="books view content">
            <table class="table table-striped"> 
                <tr>
                    <th><?= __('ISBN No') ?></th>
                    <td><?= h($book->ISBN_NO) ?></td>
                </tr>
                <tr>
                    <th><?= __('Book Title') ?></th>
                    <td><?= h($book->Book_Title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Author Name') ?></th>
                    <td><?= h($book->Author_Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Edition') ?></th>
                    <td><?= h($book->Edition) ?></td>
                </tr>
                <tr>
                    <th><?= __('Book Type') ?></th>
                    <td><?= (!empty($book->type)) ? $book->type->Name : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($book->Quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($book->Price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pages') ?></th>
                    <td><?= $this->Number->format($book->Pages) ?></td>
                </tr>
                <tr>
                    <th><?= __('Publisher') ?></th>
                    <td><?= (!empty($book->publisher)) ? $book->publisher->pub_name : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Purchase Date') ?></th>
                    <td><?= h($book->Purchase_Date) ?></td>
                </tr>
            </table>

        </div>
    </div>
</div>
</div>
</div>
</div>

