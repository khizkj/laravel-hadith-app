<!doctype html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', '📚 Hadith App')</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo&family=Lora&family=Lateef&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Cairo', sans-serif;
      background: linear-gradient(to bottom, #f5f5f0, #eae7dc);
      direction: rtl;
      padding: 30px;
      color: #333;
    }

    h1, h2 {
      text-align: center;
      font-family: 'Lateef', cursive;
      font-size: 36px;
      color: #2b2b2b;
      border-bottom: 2px solid #ccc;
      padding-bottom: 10px;
      margin-bottom: 40px;
    }

    .card {
      background: #fffdf7;
      border-radius: 18px;
      border: 1px solid #dfdcd2;
      box-shadow: inset 0 0 40px rgba(0,0,0,0.08),
                  inset 0 0 15px rgba(0,0,0,0.05),
                  0 6px 18px rgba(0,0,0,0.08);
      transition: 0.3s ease;
      margin-bottom: 30px;
    }

    .card:hover {
      transform: scale(1.02);
      box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.1),
                  0 12px 28px rgba(0, 0, 0, 0.15);
    }

    .card-body {
      text-align: right;
    }

    .card-title {
      font-family: 'Lateef', cursive;
      color: #005f73;
      font-size: 26px;
      margin-bottom: 12px;
      line-height: 1.4;
    }

    .card-subtitle {
      font-family: 'Amiri', serif;
      font-size: 18px;
      color: #555;
      margin-bottom: 10px;
    }

    .card-text {
      font-family: 'Lora', serif;
      font-size: 16px;
      color: #7a7a7a;
      margin-bottom: 15px;
    }

    .btn-chapter {
      background-color: #218c74;
      color: white;
      font-size: 16px;
      font-weight: 600;
      font-family: 'Cairo', sans-serif;
      border-radius: 25px;
      padding: 10px 24px;
      margin-top: 15px;
      transition: all 0.3s ease;
    }

    .btn-chapter:hover {
      background-color: #1e6f5c;
      color: white !important;
    }

    .pagination {
      justify-content: center;
    }

    .pagination .page-item .page-link {
      border-radius: 20px;
      margin: 0 5px;
      color: #218c74;
      font-weight: bold;
      border: 1px solid #218c74;
    }

    .pagination .page-item.active .page-link {
      background-color: #218c74;
      color: white;
      border: 1px solid #1e6f5c;
    }

    @media (max-width: 576px) {
      .card {
        width: 100% !important;
      }

      .btn-chapter {
        width: 100%;
        float: none;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>{{ $heading }}</h1>
    {{ $slot }}
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
