<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
{{-- <link rel="stylesheet" href="./style.css"> --}}
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .page {
        width: 100%;
        height: 100%;
        page-break-after: always;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-content: space-between;
    }

    .qr-code {
        width: 48%;
        padding: 10px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .product-url {
        margin-top: 10px;
    }
</style>
</head>
<body>

    @foreach ($products as $item)
        <div class="page">
            @for($i = 0; $i < 4; $i++)
                <div class="qr-code">
                    <img src="{!! QrCode::format('png')->size(400)->generate(url('read/'.$item->code)); !!}" alt="">
                    {{-- {!! QrCode::size(400)->generate(url('product/'.$item->code)); !!} --}}
                </div>
            @endfor
        </div>

    @endforeach
</body>
</html>
