<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php'; // config.php carrega init.php, que inicia a sessão e prepara $_SESSION

function voltar_com_erro(array $erros, array $antigos = []): void
{
    $_SESSION['erros']   = $erros;
    $_SESSION['antigos'] = $antigos;
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $senha === '') {
    voltar_com_erro(['Informe e-mail e senha válidos.'], ['email' => $email]);
}

// Procura o usuário dentro de $_SESSION['usuarios']
$usuario = buscarUsuarioPorEmail($email);

if ($usuario && password_verify($senha, $usuario['senha'])) {
    session_regenerate_id(true);

    $_SESSION['usuario_id']    = $usuario['id'];
    $_SESSION['usuario_nome']  = $usuario['nome'];
    $_SESSION['usuario_admin'] = !empty($usuario['admin']);

    // A home da loja é o index.php (não existe home.php)
    header('Location: ../index.php');
    exit;
}

voltar_com_erro(['E-mail ou senha incorretos.'], ['email' => $email]);
