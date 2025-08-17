<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Preview Image</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 1200px;
            height: 630px;
            background: linear-gradient(to right, #f5f5f5, #e3e0d8);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: 'Cairo', sans-serif;
            color: #121b1d;
            overflow: hidden;
            position: relative;
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(58, 103, 13, 0.9), rgba(48, 79, 111, 0.7));
            opacity: 0.1;
            z-index: 1;
        }
        
        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
            z-index: 10;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 80%;
        }
        
        .logo {
            width: 200px;
            height: auto;
            margin-bottom: 1.5rem;
        }
        
        h1 {
            font-size: 48px;
            margin: 0 0 1rem;
            color: #3a670d;
        }
        
        p {
            font-size: 24px;
            margin: 0 0 1rem;
            line-height: 1.5;
            max-width: 80%;
        }
        
        .accent {
            color: #3a670d;
            font-weight: bold;
        }
        
        .pattern {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background-image: url('assets/images/pattern-3.png');
            background-repeat: repeat;
            background-size: 300px;
            opacity: 0.05;
            z-index: 0;
        }
        
        .decoration {
            position: absolute;
            width: 150px;
            height: 150px;
            background-color: #3a670d;
            opacity: 0.1;
            border-radius: 50%;
            z-index: 0;
        }
        
        .decoration:nth-child(1) {
            top: -50px;
            left: -50px;
            width: 300px;
            height: 300px;
        }
        
        .decoration:nth-child(2) {
            bottom: -30px;
            right: -30px;
            width: 200px;
            height: 200px;
            background-color: #304f6f;
        }
        
        .decoration:nth-child(3) {
            top: 50%;
            left: 10%;
            width: 100px;
            height: 100px;
            background-color: #a1c18c;
        }
    </style>
</head>
<body>
    <div class="decoration"></div>
    <div class="decoration"></div>
    <div class="decoration"></div>
    <div class="pattern"></div>
    <div class="overlay"></div>
    
    <div class="content">
        <img src="{{ asset('assets/images/logo/headLogo.png') }}" alt="تضاف" class="logo">
        <h1>جمعية تضاف للتنمية</h1>
        <p>معاً نبني مجتمعاً أفضل من خلال <span class="accent">التنمية</span>، <span class="accent">الثقافة</span>، و<span class="accent">التضامن</span></p>
    </div>
</body>
</html>
