<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Biblioteca</title>
</head>
<body>

    <h2>Cadastro de Empréstimo de Livro</h2>

    <form method="POST" action="actionProcessar.php">

        <h3>Usuário</h3>

        <label>Nome do usuário:</label><br>
        <input type="text" name="usuario"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Matrícula:</label><br>
        <input type="text" name="matricula"><br><br>

        <h3>Autor</h3>

        <label>Nome do autor:</label><br>
        <input type="text" name="autor"><br><br>

        <label>Nacionalidade:</label><br>
        <input type="text" name="nacionalidade"><br><br>

        <h3>Editora</h3>

        <label>Nome da editora:</label><br>
        <input type="text" name="editora"><br><br>

        <label>Cidade:</label><br>
        <input type="text" name="cidade"><br><br>

        <h3>Livro</h3>

        <label>Título:</label><br>
        <input type="text" name="titulo"><br><br>

        <label>ISBN:</label><br>
        <input type="text" name="isbn"><br><br>

        <label>Categoria:</label><br>
        <input type="text" name="categoria"><br><br>

        <h3>Empréstimo</h3>

        <label>Código:</label><br>
        <input type="number" name="codigo"><br><br>

        <label>Data do empréstimo:</label><br>
        <input type="date" name="dataEmprestimo"><br><br>

        <label>Data de devolução:</label><br>
        <input type="date" name="dataDevolucao"><br><br>

        <input type="submit" value="Cadastrar">

    </form>

</body>
</html>
