<div class="content">
  <h3>Dane użytkownika</h3>
  <form action="Form" method="post">
      @csrf
      <input type="text" name="name" placeholder="Podaj swoje imię" required><br><br>
      <input type="email" name="email" placeholder="Podaj swój adres @"><br><br>
      <input type="password" name="pass" placeholder="Podaj hasło"><br><br>
      <input type="radio" name="gender" value="m" checked>Mężczyzna
      <input type="radio" name="gender" value="w">Kobieta<br><br>
      <input type="submit" value="Zatwierdź">
  </form>
</div>
