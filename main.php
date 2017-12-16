<?php include './controller.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8" />
    <title>Calculator</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <form action="" method="GET">
        <table class="calApp">
            <tr>
                <td colspan="4">
                    <input type="text" name="show" value="<?php echo $show; ?>"/>
                    <input type="hidden" name="hidden"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="7" name="7"/>
                </td>
                <td>
                    <input type="submit" value="8" name="8"/>
                </td>
                <td>
                    <input type="submit" value="9" name="9"/>
                </td>
                <td>
                    <input type="submit" value="/" name="/"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="4" name="4"/>
                </td>
                <td>
                    <input type="submit" value="5" name="5"/>
                </td>
                <td>
                    <input type="submit" value="6" name="6"/>
                </td>
                <td>
                    <input type="submit" value="*" name="*"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="1" name="1"/>
                </td>
                <td>
                    <input type="submit" value="2" name="2"/>
                </td>
                <td>
                    <input type="submit" value="3" name="3"/>
                </td>
                <td>
                    <input type="submit" value="-" name="-"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="0" name="0" />
                </td>
                <td>
                    <input type="submit" value="=" name="="/>
                </td>
                <td>
                    <input type="submit" value="+" name="+"/>
                </td>
                <td>
                    <input type="submit" value="clear" name="clear" />
                </td>
            </tr>
        </table>

    </form>
</body>

</html>