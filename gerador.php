<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $job_titles = $_POST['job_title'];
    $companies = $_POST['company'];
    $job_descs = $_POST['job_desc'];
    
    echo "<div class='container mt-5'>";
    echo "<h1>Currículo de $name</h1>";
    echo "<p>Data de Nascimento: $birthdate</p>";
    echo "<p>Idade: $age</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Telefone: $phone</p>";
    echo "<h2>Experiência Profissional</h2>";
    
    for ($i = 0; $i < count($job_titles); $i++) {
        echo "<div class='mb-3'>";
        echo "<h3>{$job_titles[$i]}</h3>";
        echo "<p>Empresa: {$companies[$i]}</p>";
        echo "<p>Descrição: {$job_descs[$i]}</p>";
        echo "</div>";
    }
    echo "<button class='btn btn-primary' onclick='window.print();'>Imprimir Currículo</button>";
    echo "</div>";
} else {
    echo "Método de requisição inválido.";
}
?>
