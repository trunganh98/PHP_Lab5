<?php
    require_once 'login.php';
    $coon = new mysqli($hn, $un, $pw, $db);
    if ($coon->connect_error) die("Fatal Error");

    if (isset($_POST['delete']) && isset($_POST['isbn']))
    {
        $isbn   = get_post($conn, 'isbn');
        $query  = "DELETE FROM classics WHERE isbn = '$isbn'";
        $result = $conn->query($query);
        if (!$result) echo "DELETE failed<br><br>";
    }

    if(isset($_POST['author']) && isset($_POST['title']) &&
        isset($_POST['category']) && isset($_POST['year']) &&
        isset($_POST['isbn']))
    {
        $author   = get_post($conn, 'author');
        $title    = get_post($conn, 'title');
        $category = get_post($conn, 'category');
        $year     = get_post($conn, 'year');
        $isbn     = get_post($conn, 'isbn');
        $query    = "INSERT INTO classics VALUES" . "('$author', '$title', '$category', '$year', '$isbn'";
        $result   = $conn->query($query);
        if (!$result) echo "INSERT failed<br><br>";
    }

    echo <<<_END
    <form action='ex3.php' method='post'><pre>
    Author <input type="text" name="Author">
    Title <input type="text" name="Title">
    Category <input type="text" name="Category">
    Year <input type="text" name="Year">
    ISBN <input type="text" name="ISBN">
        <input type="submit" value="ADD RECORD">
</pre></form>
_END;

    $query = "SELECT * FROM classics";
    $result = $coon->query($query);
    if (!$result) die("Database access failed");
    $rows = $result->num_rows;
    for ($j = 0; $j < $rows ; ++$j)
    {
        $rows = $result->fetch_array(MYSQLI_NUM);
        $r0 = $rows[0]; $r1 = $rows[1];
        $r2 = $rows[2]; $r3 = $rows[3]; $r4 = $rows[4];

        echo <<<_END
    <pre>
    Author $r0;
    Title $r1;
    Category $r2;
    Year $r3;
    ISBN $r4;
</pre>
<form action='ex3.php' method='post'>
<input type='hidden' name='delete' value='yes'>
<input type='hidden' name='isbn' value='$r4'>
<input type='submit' value='DELETE RECORD'>
</form>
_END;
    }
    $result->close();
    //$conn->close();

    function get_post($conn, $var)
    {
        return $conn->real_escape_string($_POST[$var]);
    }
?>