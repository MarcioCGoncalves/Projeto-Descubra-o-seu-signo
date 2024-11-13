<?php include('layouts/header.php'); ?>
<body>
    <div class="container-fluid main-container d-flex align-items-center justify-content-center" style="min-height: 100vh; background-color: white;">
        <div class="content-wrapper text-center p-5" style="background-color: #FAEBD7; border-radius: 15px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); max-width: 400px;">
            <h1 class="title text-primary mb-3">Signos</h1>
            <p class="subtitle text-muted mb-4">Vamos ver o seu signo!</p>

            <form id="signo-form" method="POST" action="show_zodiac_sign.php">
                <div class="form-group">
                    <label for="data_nascimento" class="form-label text-secondary">Data de Nascimento</label>
                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                </div>
                <button type="submit" class="btn btn-primary mt-4 w-100">Enviar</button>
            </form>

            <footer class="footer mt-5">
                <p class="text-muted">Copyright &copy; 2024 by &lt;/Márcio Cardoso&gt;. All Rights Reserved </p>
            </footer>
        </div>
    </div>
</body>