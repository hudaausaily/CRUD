
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
    <main id="main">
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
                <input class="create-employee" type="button" value="Click Here" onclick="showForrmCreate()">
            </div>
        </section>
    </main>
    <aside>
        <section id="form">
            <h2>Create New Employee</h2>
            <?php include_once("./form.php"); ?>
        </section>
    </aside>
    <div class="table-container"></div>
        <?php include_once("./view.php"); ?>
    <script src="./script.js"></script>
</body>
</html>
