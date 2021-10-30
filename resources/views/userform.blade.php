<div class="content">
  <h1>Dane użytkownika</h1>
  <form action="Form" method="get">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="Wypełnij pole z imieniem" required><br><br>
    <input type="email" name="email" placeholder="Podaj swój adres @"><br><br>
    <input type="password" name="pass" placeholder="Wypełnij hasło"><br><br>
    <input type="radio" name="gender" value="m" checked>Mężczyzna
    <input type="radio" name="gender" value="w">Kobieta<br><br>
    <input type="submit" value="Wyślij dane">
  </form>
</div>
