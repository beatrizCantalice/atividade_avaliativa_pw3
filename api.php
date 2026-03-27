<?php
header('Content-Type: application/json; charset=utf-8');

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo === 'GET') {
   
    $dados = [
        "status" => "sucesso",
        "metodo" => "GET",
        "tema" => "Agenda de Eventos da ETEC",
        "dados" => [
            "turma" => "3DS",
            "periodo" => "Diurno",
            "eventos" => [
                [
                    "id" => 1,
                    "titulo" => "Feira Tecnológica", 
                    "data" => "2026-04-10", 
                    "local" => "Pátio Principal"
                ],
                [
                    "id" => 2, 
                    "titulo" => "Semana da Programação", 
                    "data" => "2026-05-18", 
                    "local" => "Laboratório 2"
                ],
                [
                    "id" => 3, 
                    "titulo" => "Mostra de TCC", 
                    "data" => "2026-06-22", 
                    "local" => "Auditório"
                ]
            ]
        ]
    ];
    echo json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

} elseif ($metodo === 'POST') {
    
    $titulo = $_POST['titulo'] ?? 'Sem título';
    $data   = $_POST['data']   ?? 'Data não informada';
    $local  = $_POST['local']  ?? 'Local não informado';

    $resposta = [
        "status" => "sucesso",
        "metodo" => "POST",
        "mensagem" => "Evento cadastrado com sucesso!",
        "evento_recebido" => [
            "id" => rand(10, 100),
            "titulo" => $titulo,
            "data" => $data,
            "local" => $local
        ]
    ];
    echo json_encode($resposta, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

} else {
   
    http_response_code(405);
    echo json_encode(["status" => "erro", "mensagem" => "Método não permitido"]);
}