<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Gästebuch Startseite</title>
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <header class="header">
        <h1>Einträge verfassen</h1>
    </header>

    <div id="form">

        <form action="index.php?action=neu" method="post">

            <p>
                <input type="text" name="titel" class="fields" placeholder="Titel" required/>
            </p>

            <p>
                <textarea name="inhalt" class="fields" cols="30" rows="10" placeholder="Inhalt" required></textarea>
            </p>

            <p>
                <input type="text" name="name" class="fields" placeholder="Name" required/>
            </p>

            <p>
                <input type="email" name="email" class="fields" placeholder="E-mail"/>
            </p>

            <p>
                <input type="url" name="homepage" class="fields" placeholder="https://www.meine-homepage.de/"/>
            </p>

            <p>
                <input type="hidden" name="erstellungszeitpunkt"/>
            </p>

            <p>
                <input type="submit" value="Submit">
            </p>

        </form>

    </div>

</body>

</html>