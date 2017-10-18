<?php

$origins = urlencode($_POST['origem']);
$destination = urlencode($_POST['destino']);
$json = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?origins=$origins&destinations=$destination&mode=driving&language=pt");
$objeto = json_decode($json);
$destino = $objeto->destination_addresses[0];
$origem = $objeto->origin_addresses[0];
$distancia = $objeto->rows[0]->elements[0]->distance->text;
$duracao = $objeto->rows[0]->elements[0]->duration->text;