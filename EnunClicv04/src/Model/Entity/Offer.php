<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Offer Entity
 *
 * @property int $offers_id
 * @property string|null $offer_names
 * @property string|null $offer_descriptions
 * @property \Cake\I18n\FrozenDate|null $offer_start_dates
 * @property \Cake\I18n\FrozenDate|null $offer_final_dates
 * @property int|null $offer_prices
 * @property int $product_id
 *
 * @property \App\Model\Entity\Product $product
 */
class Offer extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'offer_names' => true,
        'offer_descriptions' => true,
        'offer_start_dates' => true,
        'offer_final_dates' => true,
        'offer_prices' => true,
        'product_id' => true,
        'product' => true,
    ];
}
