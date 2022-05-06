<?php


?>
<form name = "dadosAluno" action = "conexao.php" method="POST">
    <table border="1">
        <tbody>
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" value="" /></td>
        </tr>
        <tr>
            <td>Nascimento</td>
            <td><input type="date" name="nascimento" value="" /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="" /></td>
        </tr>
        <tr>
            <td><input type="hidden" name="acao" value="cadastrar" /></td>
            <td><input type="submit" value="Cadastrar" name="Cadastrar" /></td>
        </tr>
        </tbody>
    </table>
</form>