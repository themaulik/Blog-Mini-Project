<?php
    session_start();
    $_SESSION;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Programming Blog</title>

    <!--JavaScript Start-->
    <script type="text/javascript">
        var bodyText = ["Lorem ipsum, dolor sit amet consectetur adipisicing elit.", " </p><p>Asperiores eos amet provident optio minus, nihil at odit accusantium natus ipsam dignissimos cum fugiat odio consectetur illum rem nulla ullam nam repellat placeat possimus,sit quia similique quaerat.", "<h3>Facts</h3><p> Voluptate asperiores repellat quaerat ad consequuntur quae totam cum velit? Perspiciatis", " dolores! Distinctio aliquid dolores nobis eum esse. Iure praesentium accusamus, ut excepturi nemo similique tempore ipsa aliquam ipsam totam impedit ab cumque at! Nulla dicta nobis sequi iusto consequuntur quibusdam officia", " reiciendis eveniet repudiandae eligendi, dolorem itaque exercitationem? Minus fuga aliquam asperiores quibusdam, porro doloremque architecto iure totam placeat expedita omnis id."]

        function generateText(sentenceCount) {
            for (var i = 0; i < sentenceCount; i++)
                document.write(bodyText[Math.floor(Math.random() * 7)] + " ")
        }
    </script>
    <!--JavaScript Ends-->

</head>

<body>

    <!--Header Started-->
    <header id="header">
        <p>MaulikCodes</p>
        <button type="button" class="btn btn-light"><a href="login-form.php">Login</a></button>
        <button type="button" class="btn btn-danger"><a href="register.php">Register</a></button>
        <button type="button" class="btn btn-blue"><a href="contact.php">Contact Me</a></button>
    </header>
    <!--Header Ended-->

    <!--Main Started-->
    <div id="container">

        <!--Container Started-->
        <main id="center" class="column">
            <article>
                <h1>Programming</h1>
                <p>
                    <script>
                        generateText(50)
                    </script>
                </p>
            </article>
        </main>

        <!--Container Ended-->

        <!--Nav Started-->
        <nav id="left" class="column">
            <h3>View Other Topic</h3>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>

            <h3>Find More:</h3>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </nav>
        <!--Nav Ended-->

        <!--Other Column Started-->
        <div id="right" class="column">
            <h3>Coding Stuff</h3>
            <p>
                <script>
                    generateText(1)
                </script>
            </p>
        </div>
        <!--Other Column Ended-->

    </div>
    <!--Main Ended-->

    <!--Footer Started-->
    <div id="footer-wrapper">
        <footer id="footer">
            <p>Copyright by @maulikcodes</p>
        </footer>
    </div>
    <!--Footer Ended-->

</body>

</html>