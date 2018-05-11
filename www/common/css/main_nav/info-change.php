<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .main-ajax-body {
            -webkit-transition: 2s;
            -o-transition: 2s;
            transition: 2s;
        }
        .test {
            font-size: 3rem;
            -webkit-animation: jsonTest 2s .2s forwards ease, jsonfadeout 1s 2s forwards ease;
            animation: jsonTest 2s .2s forwards ease, jsonfadeout 1s 2s forwards ease;
            opacity: 0;
        }
        @-webkit-keyframes jsonTest {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes jsonTest {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @-webkit-keyframes jsonfadeout {
            0% {}
            100% {
                margin: 20px;
            }
        }
        @keyframes jsonfadeout {
            0% {}
            100% {
                margin: 20px;
            }
        }
    </style>
</head>

<body class="main-ajax-body">
    <div class="test">
        AJAX TEST<br> HELLO JSON!
    </div>

</body>

</html>
