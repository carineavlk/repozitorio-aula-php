<!DOCTYPE html>
<html>
    <body>
        <form id="formCadastro" name="formCadastro" method="POST" action="recebeForm.php">
            <B>Qual seu sistema Operacional?</B><br>
            <input type=radio name=sistema value="Windons 8.1"> Win 98 <br>
            <input type=radio name=sistema value="Windons 10"> Win XP <br>
            <input type=radio name=sistema value="Linux"> Linux <br>
            <input type=radio name=sistema value="Mac"> Mac <br><br>
            
            <!-- Check Box -->
            </B>Escolha os numeros de sua preferencia:</B><br>
            <input type=checkbox name="numeros[]" value=10> 10 <br>
            <input type=checkbox name="numeros[]" value=10> 100 <br>
            <input type=checkbox name="numeros[]" value=10> 1000 <br><br>
            <!-- Dropdown  -->
             <B>Qual seu processador?</B><br>
             <select name=processador>
             <option value=Pentium>Pentium</option>
             <option value=AMD>AMD</option>
             <option value=Celeron>Celeron</option>
             </select><BR><BR>

             <input id="botaoEnviar" type="submit" value="Enviar">
         </form>
    </body>
</html>