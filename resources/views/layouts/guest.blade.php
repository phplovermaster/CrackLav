<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GameHub</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background: #ffffff;
            color: #111827;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
        }

        .auth-bg {
            position: fixed;
            inset: 0;
            z-index: -1;
            overflow: hidden;
        }

        .blob {
            position: absolute;
            width: 430px;
            height: 430px;
            border-radius: 999px;
            filter: blur(100px);
            opacity: .22;
            animation: float 9s ease-in-out infinite;
        }

        .blob-blue {
            top: -140px;
            left: -140px;
            background: #2563eb;
        }

        .blob-pink {
            right: -140px;
            bottom: -140px;
            background: #ec4899;
            animation-delay: 2s;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }

            50% {
                transform: translate(25px, -20px) scale(1.08);
            }
        }

        .auth-card {
            width: 100%;
            max-width: 380px;
            padding: 38px 32px;
            background: rgba(255, 255, 255, .94);
            border: 1px solid #eef2ff;
            border-radius: 24px;
            box-shadow: 0 24px 60px rgba(15, 23, 42, .08);
            animation: fadeUp .45s ease forwards;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(24px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 20px;
            }

            .auth-card {
                padding: 32px 24px;
            }
        }
    </style>
</head>

<body>
    <div class="auth-bg">
        <div class="blob blob-blue"></div>
        <div class="blob blob-pink"></div>
    </div>

    <main class="auth-card">
        {{ $slot }}
    </main>
</body>
</html>