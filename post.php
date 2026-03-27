<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$titulo = $_POST["titulo"] ?? "Evento";
$data = $_POST["data"] ?? "Data";
$local = $_POST["local"] ?? "Local";

$evento([
   "status" => "sucesso",
   "metodo" => "POST",
   "tema" => "Agenda de Eventos da ETEC",
   "mensagem" => "Evento cadastrado com sucesso.",
   "evento" => [ 
      "id" => 4,
      "titulo" => $titulo, 
      "data" => $data,     
      "local" => $local    
   ]
   ]);


 echo json_encode($evento, JSON_PRETTY_PRINT);

} else {
   echo json_encode([
      "status" => "erro",
      "mensagem" => "Método inválido"
   ]);
}