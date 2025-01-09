<?php require_once('header.php')?>

         
<div class="form-container">
        <h2>Entre em Contato</h2>
        <form action="processar_formulario.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" required ></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
    
<?php require_once('footer.php')?>