<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <fieldset>
        <legend>Cadastro de usuarios</legend>

        <form action="/use/form/save" method="post">
            <label for="name">Nome:</label>
            <input type="text" name="name" placeholder="Nome">

            <label for="cpf">Cpf:</label>
            <input type="text" name="cpf" placeholder="Cpf">

            <label for="birth">Data de nascimento:</label>
            <input type="date" name="birth" placeholder="dd/mm/aaaa">

            <button type="submit">Salvar</button>
        </form>
    </fieldset>
</body>
</html>