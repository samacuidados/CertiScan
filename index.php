<?php require 'dados.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMA Cuidados - Consulta de Certificados</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="navbar">
        <div class="container">
            <a href="index.php">Consulta</a>
            <a href="emitir.php">Emitir Certificado</a>
        </div>
    </div>
    
    <div class="container">
        <h1>SAMA Cuidados</h1>
        <h2>Consulta Pública de Autenticidade de Diplomas e Certificados</h2>
        
        <div class="formulario">
            <form action="verificar.php" method="get">
                <div class="form-group">
                    <label for="codigo">Código do Certificado</label>
                    <input type="text" id="codigo" name="codigo" placeholder="Ex: AU2525CI" required>
                </div>
                
                <div class="form-group">
                    <label for="cpf">CPF do Aluno</label>
                    <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                </div>
                
                <button type="submit">Verificar Autenticidade</button>
            </form>
        </div>
    </div>
    
    <script>
        // Máscara para CPF
        document.getElementById('cpf').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length > 3) {
                value = value.substring(0, 3) + '.' + value.substring(3);
            }
            if (value.length > 7) {
                value = value.substring(0, 7) + '.' + value.substring(7);
            }
            if (value.length > 11) {
                value = value.substring(0, 11) + '-' + value.substring(11);
            }
            if (value.length > 14) {
                value = value.substring(0, 14);
            }
            
            e.target.value = value;
        });
    </script>
</body>
</html>
