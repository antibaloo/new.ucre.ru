<link href="/css/custom.css?<?=time()?>" rel="stylesheet">
<?
  use yii\helpers\Html;
  $this->title = 'Objects';
  $this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-objects">  
<?
  $objects = json_decode(file_get_contents('https://bpm.ucre.ru/ro.json'));//Получаем вектор активных объектов портала
  for ($i=0;$i<=count($objects);$i+=3){
?>
  <div class="row">
<?if (isset($objects[$i])){?>    
    <div class="col-sm-4">
      <div class="col-sm-12 adheader"><?=$objects[$i]->NAME?></div>
      <div class="col-sm-12"><?=$objects[$i]->REGION?></div>
      <div class="col-sm-12"><?=($objects[$i]->DISTRICT)?$objects[$i]->DISTRICT:"&nbsp;"?></div>
      <div class="col-sm-12"><?=$objects[$i]->CITY?></div>
      <div class="col-sm-12"><?=$objects[$i]->ADDRESS?></div>
      <div class="col-sm-12 lightcyan">Номер в базе: <?=$objects[$i]->ID?></div>
    </div>
<?}
if (isset($objects[$i+1])){?>    
    <div class="col-sm-4">
      <div class="col-sm-12 adheader"><?=$objects[$i+1]->NAME?></div>
      <div class="col-sm-12"><?=$objects[$i+1]->REGION?></div>
      <div class="col-sm-12"><?=($objects[$i+1]->DISTRICT)?$objects[$i+1]->DISTRICT:"&nbsp;"?></div>
      <div class="col-sm-12"><?=$objects[$i+1]->CITY?></div>
      <div class="col-sm-12"><?=$objects[$i+1]->ADDRESS?></div>
      <div class="col-sm-12 lightcyan">Номер в базе: <?=$objects[$i+1]->ID?></div>
    </div>
<?}
if (isset($objects[$i+2])){?>      
    <div class="col-sm-4">
      <div class="col-sm-12 adheader"><?=$objects[$i+2]->NAME?></div>
      <div class="col-sm-12"><?=$objects[$i+2]->REGION?></div>
      <div class="col-sm-12"><?=($objects[$i+2]->DISTRICT)?$objects[$i+2]->DISTRICT:"&nbsp;"?></div>
      <div class="col-sm-12"><?=$objects[$i+2]->CITY?></div>
      <div class="col-sm-12"><?=$objects[$i+2]->ADDRESS?></div>
      <div class="col-sm-12 lightcyan">Номер в базе: <?=$objects[$i+3]->ID?></div>
    </div>
<?}?>
  </div>
<?}?>    
</div>