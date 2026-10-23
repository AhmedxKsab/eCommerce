<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تذكير بموعد الكورس</title>
    <style>
        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --text: #1f2937;
            --muted: #6b7280;
            --border: #e5e7eb;
            --bg: #f3f4f6;
            --card: #ffffff;
            --soft: #f9fafb;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Tahoma, Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.8;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px 16px;
        }

        .card {
            width: 100%;
            max-width: 600px;
            background: var(--card);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        /* Header */
        .card-header {
            background: linear-gradient(135deg, var(--primary), #7c3aed);
            color: #fff;
            text-align: center;
            padding: 32px 24px;
        }

        .badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 2px 14px;
            border-radius: 999px;
            font-size: 13px;
            margin-bottom: 10px;
        }

        .card-header h1 {
            font-size: 24px;
        }

        /* Body */
        .card-body {
            padding: 28px 24px;
            font-size: 16px;
        }

        .greeting {
            margin-bottom: 8px;
            font-weight: bold;
        }

        .details {
            list-style: none;
            margin: 20px 0;
            background: var(--soft);
            border: 1px solid var(--border);
            border-radius: 8px;
        }

        .details li {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            padding: 14px 16px;
            border-bottom: 1px solid var(--border);
        }

        .details li:last-child {
            border-bottom: none;
        }

        .label {
            color: var(--muted);
        }

        .value {
            font-weight: bold;
        }

        .note {
            margin-bottom: 24px;
        }

        .btn {
            display: block;
            width: fit-content;
            margin: 0 auto;
            background: var(--primary);
            color: #fff;
            text-decoration: none;
            padding: 12px 32px;
            border-radius: 8px;
            font-size: 16px;
            transition: background 0.2s;
        }

        .btn:hover {
            background: var(--primary-dark);
        }

        /* Footer */
        .card-footer {
            background: var(--soft);
            border-top: 1px solid var(--border);
            text-align: center;
            color: #9ca3af;
            font-size: 13px;
            padding: 18px 24px;
        }

        /* Mobile */
        @media (max-width: 480px) {
            .card-header h1 {
                font-size: 20px;
            }

            .details li {
                flex-direction: column;
                gap: 2px;
            }
        }
    </style>
</head>
<body>

    <main class="card">

        <header class="card-header">
            <span class="badge">تذكير</span>
            <h1>موعد كورس البرمجة قرب 🚀</h1>
        </header>

        <section class="card-body">
            <p class="greeting">أهلاً</p>
            <p>
                حبينا نفكرك إن عندك موعد كورس
                <strong>PHP و Laravel</strong>
                قريب، وده ملخص الموعد:
            </p>

            <ul class="details">
                <li>
                    <span class="label">📅 التاريخ</span>
                    <span class="value">25 أكتوبر 2026</span>
                </li>
                <li>
                    <span class="label">⏰ الوقت</span>
                    <span class="value">7:00 مساءً</span>
                </li>
                <li>
                    <span class="label">📍 المكان</span>
                    <span class="value">أونلاين على Zoom</span>
                </li>
            </ul>

            <p class="note">
                يفضل تكون جاهز قبل الميعاد بشوية وتجهز اللابتوب والأدوات اللي هتحتاجها.
            </p>

            <a href="#" class="btn">تفاصيل الكورس</a>
        </section>

        <footer class="card-footer">
            <p>الرسالة دي اتبعتت أوتوماتيك، لو عندك أي استفسار رد علينا مباشرة.</p>
            <p>&copy; 2026 اسم موقعك</p>
        </footer>

    </main>

</body>
</html>