<?php include "proccess.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exporter Files</title>
    <link rel="stylesheet" href="./asset/style.css" />
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="card">
                <h1>simple export file</h1>
                <input type="text" name="title" placeholder="enter titel" />
                <textarea name="content" placeholder="enter content" cols="30" rows="10"></textarea>
                <select name="format" id="">
                    <option value="Text">Text</option>
                    <option value="Json">Json</option>
                    <option value="Pdf">Pdf</option>
                </select>
                <input type="submit" value="Export" />
            </div>
        </form>
    </div>
</body>

</html>