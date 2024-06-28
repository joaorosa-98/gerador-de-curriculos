<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Gerador de Currículos</h1>
        <form id="resumeForm" action="generate_resume.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="birthdate" class="form-label">Data de Nascimento:</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Idade:</label>
                <input type="text" class="form-control" id="age" name="age" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <h3>Experiência Profissional</h3>
            <div id="experienceFields">
                <div class="experience mb-3">
                    <label for="job_title[]" class="form-label">Título do Trabalho:</label>
                    <input type="text" class="form-control" name="job_title[]" required>

                    <label for="company[]" class="form-label">Empresa:</label>
                    <input type="text" class="form-control" name="company[]" required>

                    <label for="job_desc[]" class="form-label">Descrição do Trabalho:</label>
                    <textarea class="form-control" name="job_desc[]" required></textarea>
                </div>
            </div>
            <button type="button" class="btn btn-primary" id="addExperience">Adicionar Experiência</button>

            <button type="submit" class="btn btn-success mt-3">Gerar Currículo</button>
        </form>
    </div>
    <?php include 'includes/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
