<?php
    while($row = mysqli_fetch_assoc($sql)){
        $sql2 = "SELECT * FROM message WHERE (incoming_id = {$row['unique_id']}
                 OR  outgoing_id = {$row['unique_id']}) AND (incoming_id = {$outgoing_id}
                 OR  outgoing_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1 ";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        if (mysqli_num_rows($query2) > 0){
            $result = $row2['msg'];
        }else{
            $result = "No message available";
        }
        //trimming message if word are more than 28
        (strlen($result)>28)? $msg = substr($result, 0,28).'.....' : $msg = $result;
        //adding you : text before msg if login id send msg
        // if(!is_array($row2['outgoing_id']) ?? false) continue;
        // ($outgoing_id == $row2['outgoing_id']) ? $you = "You: " : $you = ""; 
        
        $output .= '<a class="a" href="chat.php?user_id='.$row['unique_id'].'">
                        <div class="content">
                        <img src="php/image/'.$row['image'].'" alt="">
                        <div class="details">
                            <span>'.$row['fname']." " .$row['lname'].'</span>
                            <p>' . $msg.'</p>
                        </div>
                        </div>
                        <div class="status-dot"><i class="fas fa-circle"></i></div>
                    </a>';
    }

?>