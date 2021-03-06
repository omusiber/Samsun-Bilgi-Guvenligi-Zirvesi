<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">            
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">        
        <style>
            h1 {
                color: #008e62;
                text-align: center;
            }
            hr {
                border-top: 1px solid rgba(255, 221, 221, 0.1);
            }
            div.container {
                background: url('https://bilgiguvenligizirvesi.com/assets/images/mail/bg.jpg') no-repeat;
                background-size: cover;
                border-radius: 10px;
                padding: 20px;
            }
            div.row.header,div.row.body,div.row.footer,div.row.info {
                color: #fff;
                padding: 20px;
            }
            a{
                color: #fff;
                transition: .4s;
            }
            div.row.header{
                font-size: 1.5rem;
            }
            img{
                display: block;
                margin: 0 auto;
                width: 364px;
            }
            div.row img{
                width: 100px;
                height: 100px;
                display: block;
                margin: 0 auto;
            }
            div.row.body{
                text-align: justify;
            }
            span{
                display: block;
                margin: 10px 0;
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
            <div class="row footer">
                Saygılarımızla <br>
                Bilgi Güvenliği Zirvesi Etkinlik Kurulu
            </div>
            <hr>
            
            <div class="row info">
                    Yer: Ondokuz Mayıs Üniversitesi Mühendislik Fakültesi Konferans Salonu<br>
                    Tarih: 26 - 27 Nisan 2018<br>
                    Saat: 13.00 - 18.00 / 09.30 - 13.00
                </div>
        </div>  
    </body>
</html>