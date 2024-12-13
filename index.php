<?php
  include 'php/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD - PHP</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container my-5">
      <h2>List of Clients</h2>
      <div class="mb-3">
        <a
          href="create.php"
          class="col-sm-3 mb-3 btn btn-primary"
          role="button"
          >New Client</a
        >
        <div class="col-sm-6">
          <input
            type="text"
            name="search"
            id="search_bar"
            class="form-control"
            placeholder="Search Client..."
          />
        </div>
      </div>
      <br />
      <br />
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="tbody">
          <?php 
            include "php/client_record.php";
          ?>
        </tbody>
      </table>
    </div>
    <script src="js/search.js"></script>
  </body>
</html>
