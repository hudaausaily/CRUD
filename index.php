
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <section>
            <div>
               <strong> Database Statue  :</strong>
            </div>
            <div class="message">
                <?php
                    require_once("config.php");
                ?>
            </div>
        </section>
        <section>
            <div>
               <strong> To Add New Employee  :</strong>
            </div>
            <div>
                <input type="button" value="Click Here">
            </div>
        </section>
        <section>
            <?php include_once("./form.php"); ?>
        </section>
    </main>
</body>
</html>
