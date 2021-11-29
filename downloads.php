<?php

    include 'conn.php';

    if (isset($_GET['file_id'])) {
             $id = $_GET['file_id'];
    
            // fetch file to download from database
            $sql = "SELECT * FROM student WHERE id=$id";
            $result = mysqli_query($conn, $sql);
        
            $row = mysqli_fetch_assoc($result);

            
            $filepath = 'uploads/' . $row['file'];
        
            if (file_exists($filepath)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($filepath));
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize('uploads/' . $row['file']));
                readfile('uploads/' . $row['file']);
        
                // Now update downloads count
                // $newCount = $file['downloads'] + 1;
                // $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
                // mysqli_query($conn, $updateQuery);
                exit;
            }
        
        
    
    }
   elseif (isset($_GET['offer_file_id'])) {
        $id = $_GET['offer_file_id'];

       // fetch file to download from database
       $sql = "SELECT * FROM student WHERE id=$id";
       $result = mysqli_query($conn, $sql);
   
       $row = mysqli_fetch_assoc($result);

       
       $filepath = 'uploads/' . $row['offerfile'];
   
       if (file_exists($filepath)) {
           header('Content-Description: File Transfer');
           header('Content-Type: application/octet-stream');
           header('Content-Disposition: attachment; filename=' . basename($filepath));
           header('Expires: 0');
           header('Cache-Control: must-revalidate');
           header('Pragma: public');
           header('Content-Length: ' . filesize('uploads/' . $row['offerfile']));
           readfile('uploads/' . $row['offerfile']);
   
           // Now update downloads count
           // $newCount = $file['downloads'] + 1;
           // $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
           // mysqli_query($conn, $updateQuery);
           exit;
       }
   
   

}
elseif (isset($_GET['ap_file_id'])) {
    $id = $_GET['ap_file_id'];

   // fetch file to download from database
   $sql = "SELECT * FROM student WHERE id=$id";
   $result = mysqli_query($conn, $sql);

   $row = mysqli_fetch_assoc($result);

   
   $filepath = 'uploads/' . $row['apfile'];

   if (file_exists($filepath)) {
       header('Content-Description: File Transfer');
       header('Content-Type: application/octet-stream');
       header('Content-Disposition: attachment; filename=' . basename($filepath));
       header('Expires: 0');
       header('Cache-Control: must-revalidate');
       header('Pragma: public');
       header('Content-Length: ' . filesize('uploads/' . $row['apfile']));
       readfile('uploads/' . $row['apfile']);

       // Now update downloads count
       // $newCount = $file['downloads'] + 1;
       // $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
       // mysqli_query($conn, $updateQuery);
       exit;
   }



}
?>