<!DOCTYPE html>
<html>

<head>
    <title>An error has occured</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        body {
            display: flex;
            flex-flow: row wrap;
            align-content: center;
            justify-content: center;
        }

        div {
            width: 100%;
            text-align: center;
        }

        .number {
            background: #fff;
            position: relative;
            font: 900 30vmin "Consolas";
            letter-spacing: 5vmin;
            text-shadow: 2px -1px 0 #000, 4px -2px 0 #0a0a0a, 6px -3px 0 #0f0f0f, 8px -4px 0 #141414, 10px -5px 0 #1a1a1a, 12px -6px 0 #1f1f1f, 14px -7px 0 #242424, 16px -8px 0 #292929;
        }

        .number::before {
            background-color: #673ab7;
            background-image: radial-gradient(closest-side at 50% 50%, rgba(224, 164, 88, 1) 100%, rgba(0, 0, 0, 0)), radial-gradient(closest-side at 50% 50%, rgba(65, 157, 120, 1) 100%, rgba(0, 0, 0, 0));
            background-repeat: repeat-x;
            background-size: 40vmin 40vmin;
            background-position: -100vmin 20vmin, 100vmin -25vmin;
            width: 100%;
            height: 100%;
            mix-blend-mode: screen;
            -webkit-animation: moving 10s linear infinite both;
            animation: moving 10s linear infinite both;
            display: block;
            position: absolute;
            content: "";
        }

        @-webkit-keyframes moving {
            to {
                background-position: 100vmin 20vmin, -100vmin -25vmin;
            }
        }

        @keyframes moving {
            to {
                background-position: 100vmin 20vmin, -100vmin -25vmin;
            }
        }

        .text {
            font: 400 5vmin "Roboto";
        }

        .text span {
            font-size: 10vmin;
        }
    </style>
</head>

<body>
    <div class="number">
        <?= http_response_code() ?>
    </div>
    <div class="text"><span>Ooops...</span><br>An error has occured<br>
        <?php if ($data != null)
            echo ($data[0]) ?>
        </div>
    </body>

    </html>