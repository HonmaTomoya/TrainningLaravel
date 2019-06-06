<template>
  <div class="container">
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
        <tr v-for="book in books">
          <td>{{ book.id }}</td>
          <td>{{ book.name }}</td>
          <td>{{ book.price }}</td>
          <td>{{ book.isbn }}</td>
          <td>{{ book.author_id }}</td>
          <td>{{ book.author_name }}</td>
          <td>{{ book.author_age }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
  export default {
    props: ['books'],
    mounted() {
      console.log('BooksListComponent mounted.')
    }
  }
</script>
