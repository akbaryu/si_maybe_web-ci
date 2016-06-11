<!DOCTYPE html>
<html>
<head>
    <title>CARIKODE</title>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="ckeditor/style.js"></script>
    <style type="text/css">
        body{
            font-family: sans-serif;
        }
        #kotak{
            margin: 50px auto;
            background: #ECF0F1;
            width: 800px;
            height: 500px;
            padding: 20px;
        }
        h1{
            text-align: center;
        }
        table tr input{
            width: 700px;
            height: 30px;
            padding-left: 20px;
            font-size: 12pt;
        }

    </style>
</head>
<body>
<div id="kotak">
    <h1>Form posting carikode.com</h1>
    <form >
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Isi</td>
                <td><textarea name="artikel" class="ckeditor"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Posting"></td>
            </tr>

        </table>
    </form>
</div>
</body>
</html>