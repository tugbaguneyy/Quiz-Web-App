
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resim Upload Uygulaması</title>
</head>
<body>
  <form action="{{route('yukle')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label>Resim seçiniz:</label><br>
    <input type="file" name="resim"><br>
    <input type="submit" name="ilet" value="Resim Yükle">
  </form>


</body>
</html>
