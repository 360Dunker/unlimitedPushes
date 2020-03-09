<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 09.12.2019
 * Time: 12:50
 */

include 'vendor/autoload.php';

$view=new \TYPO3Fluid\Fluid\View\TemplateView();
$paths =$view->getTemplatePaths();
$paths->setTemplatePathAndFilename(
    './Recources/privat/Templates/Main.html'
);

$values['user'][]="WSF";
$values['user'][]="KSP";
$values['user'][]="STF Dance King";

$view->assignMultiple($values);

echo  $view->render();

