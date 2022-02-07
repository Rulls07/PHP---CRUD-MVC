<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Etudiant</title>
    <link rel="stylesheet" href="">
</head>

<body>

    <header class="header">

    </header>

    <main class="container add_etu">
        <h1>TP CRUD-PHP</h1>

        <picture>
            <img loading="lazy" src="./img/php.jpg" alt="Imagen">
        </picture>

        <h2>Student personal file - enrollment 2022</h2>

        <form class="formulario">
            <fieldset>
                <legend>Personal Information - CRUD PHP</legend>

                <label for="first_Name">First Name:</label>
                <input type="text" placeholder="Name" id="first_Name">

                <label for="last_Name">Last Name:</label>
                <input type="text" placeholder="Last Name" id="last_Name">

                <select id="gender_etu">
                    <option value="" disabled selected>-- Select --</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                <label for="birth_date">Date of birth:</label>
                <input type="date" id="birth_date">

                <label for="address_etu">Student's address:</label>
                <input type="text" placeholder="Address" id="address_etu">

                <label for="phone">Phone Number</label>
                <input type="tel" placeholder="P" id="phone">

                <label for="email">E-mail:</label>
                <input type="email" placeholder="Email" id="email">

                <label for="job">Job:</label>
                <input type="text" placeholder="student's metier" id="job">

                <label for="url_etu">URL:</label>
                <input type="text" placeholder="student's URL" id="url_etu">

                <label for="comment_etu">Comment:</label>
                <textarea id="comment_etu"></textarea>
            </fieldset>
            <input type="submit" value="Submit" class="">
            <input type="submit" value="Retour" class="">
        </form>
    </main>

</body>

</html>