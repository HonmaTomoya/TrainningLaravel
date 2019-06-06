<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>本間智也！絶賛演習中！！</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet"></head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
<body>
  <div id="app">
    <book-list :books="{{ $books }}"></book-list>
  </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
