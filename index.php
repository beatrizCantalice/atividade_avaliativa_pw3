<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda de Eventos ETEC</title>
    <style>

        body { 
            font-family: sans-serif; 
            max-width: 500px; 
            margin: 20px auto; 
            line-height: 1.6; 
        }
        input { 
            width: 100%; 
            padding: 8px; 
            margin: 5px 0 15px; 
        }
        button { 
            background: #222; 
            color: #fff; 
            border: 0; 
            padding: 10px 20px; 
            cursor: pointer; 
        }
        button:hover { 
            background: #444;
        }

    </style>
</head>
<body>
    <h1>Agenda de Eventos da ETEC</h1>

    <p>Visualizar dados atuais: <a href="api.php" target="_blank">Ver JSON de Eventos</a></p>

    <hr>

    <h2>Cadastrar Novo Evento</h2>
    <form method="POST" action="api.php">
        <label>Título do Evento:</label>
        <input type="text" name="titulo"required>

        <label>Data:</label>
        <input type="date" name="data" required>

        <label>Local:</label>
        <input type="text" name="local" required>

        <button type="submit">Enviar Evento</button>
    </form>
</body>
</html>