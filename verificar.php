<?php 
require 'dados.php';

$codigo = $_GET['codigo'] ?? '';
$cpf = $_GET['cpf'] ?? '';

$certificado = null;

if (!empty($codigo) && !empty($cpf) && isset($certificados[$codigo])) {
    if ($certificados[$codigo]['cpf'] === $cpf) {
        $certificado = $certificados[$codigo];
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Verificação - SAMA Cuidados</title>
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
        <h1>Resultado da Verificação</h1>
        
        <?php if ($certificado): ?>
            <div class="resultado">
                <p class="autenticado">✔ Este Certificado foi autenticado!</p>
                
                <div class="certificado-info">
                    <h3>SISTEMA DE VERIFICAÇÃO DE AUTENTICIDADE DE CERTIFICADO</h3>
                    <p><strong>Aluno:</strong> <?= $certificado['nome_aluno'] ?></p>
                    <p><strong>CPF:</strong> <?= $certificado['cpf'] ?></p>
                    <p><strong>Data de Nascimento:</strong> <?= $certificado['data_nascimento'] ?></p>
                    <p><strong>Naturalidade:</strong> <?= $certificado['naturalidade_cidade'] ?> - <?= $certificado['naturalidade_estado'] ?></p>
                    <p><strong>Instituição:</strong> <?= $certificado['nome_instituicao'] ?></p>
                    <p><strong>Curso:</strong> <?= $certificado['curso'] ?></p>
                    <p><strong>Carga Horária:</strong> <?= $certificado['carga_horaria'] ?> horas</p>
                    <p><strong>Data de Conclusão:</strong> <?= $certificado['data_conclusao'] ?></p>
                    <p><strong>Código do Certificado:</strong> <?= $codigo ?></p>
                    
                    <p>Certificado registrado sob o número <?= $codigo ?> e com validade 
                    nacional em conformidade com a Lei nº 9394/96; Decreto nº 5.154/04; Deliberação CEE 14/97 (indicação CEE 14/97)</p>
                </div>
                
                <div style="margin-top: 20px;">
                    <a href="certificado.php?codigo=<?= $codigo ?>" class="btn" target="_blank">Visualizar Certificado</a>
                    <a href="certificado.php?codigo=<?= $codigo ?>&download=1" class="btn">Baixar Certificado</a>
                </div>
            </div>
        <?php else: ?>
            <div class="resultado">
                <p class="nao-encontrado">Certificado não encontrado ou informações não correspondem.</p>
                <p>Por favor, verifique o código do certificado e o CPF informados e tente novamente.</p>
                <a href="index.php" class="btn">Voltar</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
