<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>Formulaire - Examen PHP </title>

</head>

<body>

    <H2 align="center">
        <Font color="darkblue">Formulaire de contact </Font>
    </H2>
    <fieldset>
        <legend align="center"><b>FORMULAIRE</b></legend>

        <table width="1000" border="10" align="center" cellpadding="15" cellspacing="10" bgcolor="#00CCFF">

            <form name="registration" method="post" action="confirm.php" enctype="multipart/form-data">

                <tr>
                    <td width="55%" align="center"> Nom </td>
                    <td colspan="4">
                        <input type="text" name="name" size="75" maxlenght="75"></td>
                </tr>

                <tr>
                    <td width="55%" align="center"> Prenom</td>
                    <td colspan="4">
                        <input type="text" name="name" size="75" maxlenght="75"></td>
                </tr>

                <tr>
                    <td align="center" width="55%" Height="57">Adresse</td>
                    <td height="57" colspan="2">
                        <textarea name="Address" cols="75" rows="5"></textarea></td>
                </tr>

                <tr>
                    <td width="55%" align="center"> Profession</td>
                    <td colspan="4">
                        <input type="text" name="name" size="75" maxlenght="75"></td>
                </tr>

                <tr>
                    <td colspan="4">
                        <input type="submit" name="Submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>

            </form>
        </table>
    </fieldset>

</body>

</html>