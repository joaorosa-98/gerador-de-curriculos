$(document).ready(function() {
    $('#birthdate').change(function() {
        const birthdate = new Date($(this).val());
        const age = new Date().getFullYear() - birthdate.getFullYear();
        $('#age').val(age);
    });

    $('#addExperience').click(function() {
        const newExperience = `
        <div class="experience mb-3">
            <label for="job_title[]" class="form-label">Título do Trabalho:</label>
            <input type="text" class="form-control" name="job_title[]" required>

            <label for="company[]" class="form-label">Empresa:</label>
            <input type="text" class="form-control" name="company[]" required>

            <label for="job_desc[]" class="form-label">Descrição do Trabalho:</label>
            <textarea class="form-control" name="job_desc[]" required></textarea>
        </div>`;
        $('#experienceFields').append(newExperience);
    });
});
