
<?php
function getbbs()
{
    $host_yalin = 'localhost';
    $conn = mysqli_connect($host_yalin, 'u320137374_yalin', '88t1374A', 'u320137374_yalin');
    mysqli_query($conn, "set names utf8");
    if ($conn) {      
        $sqlstr = "select row_name, row_text, row_ts from bbs";
        $result = mysqli_query($conn, $sqlstr);
        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <div>
                    <p id='msg'><span id='username'>" . $row['row_id'] . "</span>" . $row['row_text'] . "</p>
                </div>
            ";
            }
        }
        mysqli_close($conn);
    } else {
        echo "mysql connect error!";
    }
}

function putbbs($rowname, $rowtext, $rowts)
{
    /*
    if (isset($_POST['msg'])) {
        $sqlstr = "insert into msg_board(username,msg) values('" . $username . "','" . $_POST['msg'] . "')";
        mysqli_query($conn, $sqlstr);
    }
    */
    $host_yalin = 'localhost';
    /*
    $conn = mysqli_connect($host_yalin, 'u320137374_yalin', '88t1374A', 'u320137374_yalin');
    mysqli_query($conn, "set names utf8");
    if ($conn) {
        $sqlstr = "insert into bbs(row_name,row_text, row_ts) values('" . $rowname . "','" . $rowtext . "','" . $rowts . "')";
        mysqli_query($conn, $sqlstr);
        mysqli_close($conn);
    } else {
        echo "mysql connect error!";
    }
    */
}
/*
<script>
  var phpadd= <?php echo add(1,2);?> //call the php add function
  document.write(' <?php add(1,2); ?> ');
new Date().toISOString().slice(0, 19).replace('T', ' ');
</script>
*/
?>
