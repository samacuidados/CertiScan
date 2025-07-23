<?php
$certificados = [
    'AU2525CI' => [
        'nome_aluno' => 'MARIA DA AJUDA VIEIRA DOS SANTOS',
        'cpf' => '955.868.655-72',
        'data_nascimento' => '02/06/1977',
        'naturalidade_cidade' => 'Cruz da Vitória',
        'naturalidade_estado' => 'BA',
        'data_conclusao' => '28/06/2025',
        'data_emissao' => '31/04/2025',
        'carga_horaria' => 280,
        'curso' => 'CURSO PROFISSIONALIZANTE DE CUIDADOR DE IDOSOS',
        'titulo_conferido' => 'CUIDADOR DE IDOSOS',
        'cnpj_instituicao' => '61.022.045/0001-51',
        'nome_instituicao' => 'SAMA Cuidados',
        'nome_responsavel' => 'Eventos Barbosa dos Santos',
        'cargo_responsavel' => 'CEO'
    ],
    'AU2500CI' => [
        'nome_aluno' => 'CAMYLLA COSTA SANTOS',
        'cpf' => '074.530.095-11',
        'data_nascimento' => '26/07/2002',
        'naturalidade_cidade' => 'Canavieiras',
        'naturalidade_estado' => 'BA',
        'data_conclusao' => '28/06/2025',
        'data_emissao' => '31/04/2025',
        'carga_horaria' => 280,
        'curso' => 'CURSO PROFISSIONALIZANTE DE CUIDADOR DE IDOSOS',
        'titulo_conferido' => 'CUIDADOR DE IDOSOS',
        'cnpj_instituicao' => '61.022.045/0001-51',
        'nome_instituicao' => 'SAMA Cuidados',
        'nome_responsavel' => 'Eventos Barbosa dos Santos',
        'cargo_responsavel' => 'CEO'
    ],
    'AU2507CI' => [
        'nome_aluno' => 'VANESSA VIEIRA ALVES',
        'cpf' => '175.459.247-38',
        'data_nascimento' => '04/11/1999',
        'naturalidade_cidade' => 'Viana',
        'naturalidade_estado' => 'ES',
        'data_conclusao' => '28/06/2025',
        'data_emissao' => '31/04/2025',
        'carga_horaria' => 280,
        'curso' => 'CURSO PROFISSIONALIZANTE DE CUIDADOR DE IDOSOS',
        'titulo_conferido' => 'CUIDADOR DE IDOSOS',
        'cnpj_instituicao' => '61.022.045/0001-51',
        'nome_instituicao' => 'SAMA Cuidados',
        'nome_responsavel' => 'Eventos Barbosa dos Santos',
        'cargo_responsavel' => 'CEO'
    ]
];

function gerarCodigoCertificado() {
    return 'AU' . rand(1000, 9999) . 'CI';
}
?>
