<?php
/**
 * Created by PhpStorm.
 * User: lionel joseph
 * Date: 13-02-2018
 * Time: 17:10
 */

namespace OldGold\OldGold\ViewHelpers\Form;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;


class GetCountriesViewHelper extends AbstractViewHelper
{
    /**
     * @var array
     */
    protected $countries = [
        'Hof' => 'Hof',
        'Munchberg' => 'Munchberg',
        'Berlin' =>	'Berlin',
        'Hamburg' =>'Hamburg',
        'Berlin' => 'Berlin',
        'Hamburg'  =>'Hamburg',
        'München' =>'München',
        'Köln' =>'Köln',
        'Frankfurt' =>'Frankfurt',
        'Essen'	=>'Essen',
        'Dortmund' =>'Dortmund',
        'Stuttgart' =>'Stuttgart',
        'Düsseldorf'=>'Düsseldorf',
        'Bremen' =>'Bremen',
        'Hannover' =>'Hannover',
        'Duisburg' =>'Duisburg',
        'Nürnberg' =>'Nürnberg',
        'Leipzig' =>'Leipzig',
        'Dresden' =>'Dresden',
        'Bochum' =>'Bochum',
        'Wuppertal'=>'Wuppertal',
        'Bielefeld'=>'Bielefeld',
        'Bonn'	=>'Bonn',
        'Mannheim'=>'Mannheim',
        'Karlsruhe'=>'Karlsruhe',
        'Gelsenkirchen'=>'Gelsenkirchen',
        'Wiesbaden'=>'Wiesbaden',
        'Münster'=>'Münster',
        'Mönchengladbach'=>'Mönchengladbach',
        'Chemnitz'=>'Chemnitz',
        'Augsburg'=>'Augsburg',
        'Braunschweig'=>'Braunschweig',
        'Aachen' =>'Aachen',
        'Krefeld'=>'Krefeld',
        'Halle'=>'Halle',
        'Kiel'	=>'Kiel',
        'Magdeburg'=>'Magdeburg',
        'Oberhausen'=>'Oberhausen',
        'Lübeck'=>'Lübeck',
        'Freiburg'=>'Freiburg',
        'Hagen'=>'Hagen',
        'Erfurt'=>'Erfurt',
        'Kassel'=>'Kassel',
        'Rostock'=>'Rostock',
        'Mainz'	=>'Mainz',
        'Hamm'	=>'Hamm',
        'Saarbrücken'=>'Saarbrücken',
        'Herne'	=>'Herne',
        'Mülheim'=>'Mülheim',
        'Solingen'=>'Solingen',
        'Osnabrück'=>'Osnabrück',
        'Ludwigshafen'=>'Ludwigshafen',
        'Leverkusen'=>'Leverkusen',
        'Oldenburg'=>'Oldenburg',
        'Neuss'=>'Neuss',
        'Paderborn'=>'Paderborn',
        'Heidelberg'=>'Heidelberg',
        'Darmstadt'=>'Darmstadt',
        'Potsdam'=>'Potsdam',
        'Würzburg'=>'Würzburg',
        'Göttingen'=>'Göttingen',
        'Regensburg'=>'Regensburg',
        'Recklinghausen'=>'Recklinghausen',
        'Bottrop'=>'Bottrop',
        'Wolfsburg'=>'Wolfsburg',
        'Heilbronn'=>'Heilbronn',
        'Ingolstadt'=>'Ingolstadt',
        'Ulm'	=>'Ulm',
        'Remscheid'=>'Remscheid',
        'Pforzheim'=>'Pforzheim',
        'Bremerhaven'=>'Bremerhaven',
        'Offenbach'=>'Offenbach',
        'Fürth'	=>'Fürth',
        'Reutlingen'=>'Reutlingen',
        'Salzgitter'=>'Salzgitter',
        'Siegen'=>'Siegen',
        'Gera'	=>'Gera',
        'Koblenz'=>'Koblenz',
        'Moers'	=>'Moers',
        'Bergisch'=>'Bergisch',
        'Cottbus'=>'Cottbus',
        'Hildesheim'=>'Hildesheim',
        'Witten'=>'Witten',
        'Zwickau'=>'Zwickau',
        'Erlangen'=>'Erlangen',
        'Iserlohn'=>'Iserlohn',
        'Trier'	=>'Trier',
        'Kaiserslautern'=>'Kaiserslautern',
        'Jena'	=>'Jena',
        'Schwerin'=>'Schwerin',
        'Gütersloh'=>'Gütersloh',
        'Marl'=>'Marl',
        'Lünen'	=>'Lünen',
        'Esslingen'=>'Esslingen',
        'Velbert'=>'Velbert',
        'Ratingen'=>'Ratingen',
        'Düren'	=>'Düren',
        'Ludwigsburg'=>'Ludwigsburg',
        'Wilhelmshaven'=>'Wilhelmshaven',
        'Hanau'=>'Hanau',
        'Minden'=>'Minden',
        'Flensburg'=>'Flensburg',
        'Dessau'=>'Dessau',
        'Villingen-Schwenningen'=>'Villingen-Schwenningen'

    ];

    /**
     * Build an country array
     *
     * @return array
     */
    public function render(): array
    {
        return $this->countries;
    }
    public function getValuesFromKey(array $keys):array
    {
        $valueArray= [];
        foreach ($keys as $key){
            $value = $this->countries[$key];
            array_push($valueArray,$value);
        }
        return $valueArray;
    }
}
