
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Örnek Form</title>
</head>
<body>
  <form action="{{ route('iletisim-sonuc')}}" method="post">
    @csrf  <!-- token oluşturma-->

    <label>Ad Soyad</label><br>
    <input type="text" name="adsoyad"><br>
    <label>Telefon</label><br>
    <input type="text" name="telefon"><br>
    <label>E-mail</label><br>
    <input type="text" name="mail"><br>
    <label>Mesaj</label><br>
    <textarea name="metin"></textarea><br>
    <input type="submit" name="ilet" value="Gönder">
  </form>

</body>
</html>
