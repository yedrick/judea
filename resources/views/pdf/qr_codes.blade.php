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
{{-- @foreach($qrCodes as $qrCode)
    <div class="page">
        @for($i = 0; $i < 4; $i++)
            <div class="qr-code">
                {!! $qrCode !!}
            </div>
        @endfor
    </div>
@endforeach --}}
@foreach ($products as $item)
    {!! QrCode::format('png')->size(300)->color(255,0,255)->generate(Request::url()); !!}
@endforeach
</body>
</html>
