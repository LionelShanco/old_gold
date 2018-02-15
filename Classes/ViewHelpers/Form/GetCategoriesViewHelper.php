<?php
/**
 * Created by PhpStorm.
 * User: lionel joseph
 * Date: 13-02-2018
 * Time: 18:46
 */
namespace OldGold\OldGold\ViewHelpers\Form;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

class GetCategoriesViewHelper extends AbstractViewHelper
{
    /**
     * @var array
     */
    protected $categories = [
        'Electronics' => 'Electronics',
        'Furnitures' =>'Furnitures',
        'Automobiles' =>'Automobiles',
        'Household' =>'HouseHold',
        'Books' =>'Books',
        'Clothing' =>'Clothing',
        'Sports' =>'Sports',
        'Music' =>'Music'
    ];
    /**
     * Build an country array
     *
     * @return array
     */
    public function render(): array
    {
        return $this->categories;
    }
    public function getValuesFromKey(array $keys):array
    {
        $valueArray= [];
        foreach ($keys as $key){
            $value = $this->categories[$key];
            array_push($valueArray,$value);
        }
        return $valueArray;
    }

}