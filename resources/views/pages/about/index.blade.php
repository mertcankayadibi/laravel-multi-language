<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ trans('pages.blog') }}</title>

    <!-- ✅ Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }

        .lang-switch a {
            margin: 0 4px;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card shadow-sm p-4 text-center" style="min-width: 300px; border-radius: 12px;">

    <div class="lang-switch mb-3">
        <a href="{{ locale_url('tr') }}" class="btn btn-outline-primary btn-sm">TR</a>
        <a href="{{ locale_url('en') }}" class="btn btn-outline-primary btn-sm">EN</a>
        <a href="{{ locale_url('ru') }}" class="btn btn-outline-primary btn-sm">RU</a>
        <a href="{{ locale_url('ar') }}" class="btn btn-outline-primary btn-sm">AR</a>
    </div>
    <a href="{{ route('about', locale()) }}" class="btn btn-link">
        {{ trans('pages.blog') }}
    </a>
    <a href="{{ route('home', locale()) }}" class="btn btn-link">
        {{ trans('pages.home') }}
    </a>
    <p class="fw-semibold mt-2 mb-0">
        {{ trans('pages.hi') }}
    </p>
</div>
</body>
</html>
