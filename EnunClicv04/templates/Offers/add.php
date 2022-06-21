<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offer $offer
 * @var \Cake\Collection\CollectionInterface|string[] $products
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Offers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="offers form content">
            <?= $this->Form->create($offer) ?>
            <fieldset>
                <legend><?= __('Add Offer') ?></legend>
                <?php
                    echo $this->Form->control('offer_names');
                    echo $this->Form->control('offer_descriptions');
                    echo $this->Form->control('offer_start_dates', ['empty' => true]);
                    echo $this->Form->control('offer_final_dates', ['empty' => true]);
                    echo $this->Form->control('offer_prices');
                    echo $this->Form->control('product_id', ['options' => $products]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
