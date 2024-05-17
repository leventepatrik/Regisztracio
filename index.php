
<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Free Web tutorials" />
    <meta name="keywords" content="HTML, CSS, JavaScript" />
    <meta name="author" content="John Doe" />
    <link rel="stylesheet" href="style.css" />
    <title>Paróczi Levente</title>
  </head>

  <body>
    <main>
      <form action="/action_page.php"></form>
      <fieldset id="elso">
        <legend>Regisztráció:</legend>
        <label for="fname">Felhasználó név:<sup>*</sup></label>
        <input
          placeholder="pifuati"
          type="text"
          id="fname"
          name="fname"
        /><br /><br />
        <label for="lname">Jelszó:<sup>*</sup></label>
        <input
          placeholder="szeretemazoszt"
          type="text"
          id="lname"
          name="lname"
        /><br /><br />
        <label for="email">Email-cím:<sup>*</sup></label>
        <input
          placeholder="pifuati@citromail.hu"
          type="email"
          id="email"
          name="email"
        /><br /><br />
        </fieldset>
      </fieldset>
      <input type="submit" value="Regisztráció" />
      <p>Már van fiókod? <a href="/Adatbazis.php">Jelentkezz be itt</a>.</p>
    </main>
  </body>
</html>
