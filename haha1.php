<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
      <?php
      $username = "database-username";
      $password = "database-password";
      $host = "localhost";

      $connector = mysqli_connect('localhost', 'root', '', 'foodlovers');
      $selected = mysql_select_db("foodlovers", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysqli_query("SELECT id,name,price FROM foodlovers ");
      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row\['id'\]}</td>
              <td>{$row\['name'\]}</td>
              <td>{$row\['price'\]}</td>
              
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysqli_close($connector); ?>
    </body>
    </html>

