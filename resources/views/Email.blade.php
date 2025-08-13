<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>رسالة جديدة من موقع جمعية تضاف للتنمية</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Cairo', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            direction: rtl;
            text-align: right;
                        font-family: 'Cairo', Arial, sans-serif;

        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            direction: rtl;
            text-align: right;
                        font-family: 'Cairo', Arial, sans-serif;
        }

        .header {
            background-color: #138f82;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            direction: rtl;
                        font-family: 'Cairo', Arial, sans-serif;

        }

        .header img {
            display: block;
            margin: 0 auto 15px;
            max-width: 150px;
            height: auto;
                        font-family: 'Cairo', Arial, sans-serif;

        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
                        font-family: 'Cairo', Arial, sans-serif;

        }

        .content {
            padding: 30px;
            direction: rtl;
            text-align: right;
                        font-family: 'Cairo', Arial, sans-serif;

        }

        .info-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #eaeaea;
            padding-bottom: 15px;
            direction: rtl;
            text-align: right;
        }

        .info-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .label {
            font-weight: 700;
            color: #138f82;
            display: block;
            margin-bottom: 5px;
            direction: rtl;
            text-align: right;
        }

        .value {
            margin: 0;
            font-size: 16px;
            direction: rtl;
            text-align: right;
        }

        .message-box {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 6px;
            margin-top: 20px;
            direction: rtl;
            text-align: right;
            border-right: 4px solid #138f82;
        }

        .message-box .label {
            margin-bottom: 10px;
        }

        .footer {
            background-color: #213438;
            padding: 15px;
            text-align: center;
            font-size: 14px;
            color: #ffffff;
            direction: rtl;
        }

        @media only screen and (max-width: 600px) {
            .container {
                width: 100%;
                border-radius: 0;
            }

            .content {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ $message->embed(public_path('assets\images\logo\logo-becj-bicolor.png')) }}" alt="Logo Tiddaf"
                style="max-width: 150px; margin-bottom: 15px;">
            <h1>رسالة جديدة من موقع تضاف للتنمية</h1>
        </div>

        <div class="content">
            <div class="info-item">
                <span class="label">الاسم الكامل:</span>
                <p class="value">{{ $mailData['nom'] }}</p>
            </div>

            <div class="info-item">
                <span class="label">البريد الإلكتروني:</span>
                <p class="value">{{ $mailData['email'] }}</p>
            </div>

            <div class="info-item">
                <span class="label">رقم الهاتف:</span>
                <p class="value">{{ $mailData['tel'] }}</p>
            </div>

            <div class="info-item">
                <span class="label">الموضوع:</span>
                <p class="value">{{ $mailData['subject'] }}</p>
            </div>

            <div class="message-box">
                <span class="label">الرسالة:</span>
                <p class="value">{{ $mailData['message'] }}</p>
            </div>
        </div>

        <div class="footer">
            <p>© BECJ - {{ date('Y') }}</p>
        </div>
    </div>
</body>

</html>