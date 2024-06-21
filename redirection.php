<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome on board</title>
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body>
    
    <main>
        
        <section class="container">
        <h1 id="get in touch">Get in touch</h2>
        <h2 id="fix">Please fix errors below</h3>
            <p>
        * Name is required.
            </p>
            <p>
        * Email is required.
            </p>
            <p>
        * Please choose the subject in the list.
            </p>   
        
            <form class="contact" action="_contact.php" method="post">
                    <label for="name">Name*</label>
                    <input class="background-secondary-color" type="text" name="name" id="name" pattern="([a-zA-Z0-9_\s]+)" required>

                    <label for="name">email*</label>
                    <input class="background-secondary-color" type="email" name="email" id="email" required>

                    <label for="name">Subject*</label>
                    <select name="section">
                       <option>Demande</option><option selected>Observation</option><option>Collaboration</option>
                    </select>

                    <label for="message">Message</label>
                    <textarea class="message background-secondary-color " type="text" name="message" id="message" ></textarea>

                    <input class="submit" type="submit" value="save">


            </form>   

        </section>
    </main>
    <?php include '_footer.php' ?>
</body>

</html>

        