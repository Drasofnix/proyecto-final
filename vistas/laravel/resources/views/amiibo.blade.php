<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach ($amiibos as $amiibo)
            <div class="card" style="width: 17rem;">
                <img src="{{$amiibo["image"]}}" class="card-img-top" height="auto">
                <div class="card-body">
                    <h5 class="card-title">{{$amiibo["name"]}}</h5>
                    <div class="column">
                        <p class="card-text">Serie de Amiibo: {{$amiibo["amiiboSeries"]}}</p>
                        <p class="card-text">Serie de Amiibo: {{$amiibo["amiiboSeries"]}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
