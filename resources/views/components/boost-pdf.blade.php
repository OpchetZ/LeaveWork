<html>

<head>
    <meta http-equiv="Content-Language" content="th" />
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <!-- Bootstrap 3.x only : DOMPDF support float, not flexbox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- thai font -->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun" rel="stylesheet">
    
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src:url("{{ asset('fonts/THSarabuNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src:url("{{ asset('fonts/THSarabuNew Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src:url("{{ asset('fonts/THSarabuNew italic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src:url("{{ asset('fonts/THSarabuNew Bolditalic.ttf') }}") format('truetype');
        }
        body {
            font-family: 'Sarabun', sans-serif;
            
            
        }
        /* table {
            font-family: 'THSarabunNew';
            border-collapse: collapse;
            
        }
        td,th{
            border: 1px solid;
        } */
        .b {
            border: 1px solid;
            width:60px;
        }
        .a {
            border: 1px solid;
            
        }
        /* .col-xs-6 {
            border: 1px solid;
            
        } */
    </style>
</head>


    {{ $slot }}


</html>
