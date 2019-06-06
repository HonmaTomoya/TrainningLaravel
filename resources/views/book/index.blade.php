<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>本間智也！絶賛演習中！！</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet"></head>
<body>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th>book_id</th>
        <th>book_name</th>
        <th>price</th>
        <th>isbn</th>
        <th>author_id</th>
        <th>author_name</th>
        <th>author_age</th>
      </tr>
    </thead>

    <tbody>
      @foreach($books as $book)
      <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->name }}</td>
        <td>{{ $book->price }}</td>
        <td>{{ $book->isbn }}</td>
        <td>{{ $book->author_id }}</td>
        <td>{{ $book->author->name }}</td>
        <td>{{ $book->author->age }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
<!-- <script src="{{ asset('js/app.js') }}"></script> -->
</html>
