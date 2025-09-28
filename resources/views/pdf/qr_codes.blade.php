<!DOCTYPE html>
<html>
<head>
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
@foreach ($questions as $item)
<?php $codigoQR = QrCode::format('svg')->backgroundColor(255, 255, 255)->size(150)->generate(route('search.qrs', ['code'=>$item->code])); ?>
    <img src="data:image/png;base64, {!! base64_encode($codigoQR) !!}" alt="" style="margin-top: 20px; margin-left: 20px;">
@endforeach
</body>
</html>
