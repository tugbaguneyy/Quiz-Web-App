
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Örnek Form</title>
</head>
<body>
  <form action="{{route('sonuc')}}" method="post">
    @csrf  <!-- token oluşturma-->
    <textarea name="metin"></textarea><br>
    <input type="submit" name="ilet "value="Gönder">
  </form>

</body>
</html>
