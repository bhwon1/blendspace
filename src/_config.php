<?
   $pos = 'root';
   $path  = './';//root
   $path2 = './subpage/';//subpage

   echo "<script>";
   echo "const pos = '". $pos ."'";
   echo "const path = '". $path ."'";
   echo "const path2 = '". $path2 ."'";
   echo "</script>"; 
?>
      <script>
        <?
            echo "let pos = '" . $pos . "'";  //PHP 변수를 Javascript 변수에 대입 시킨다.
            echo "let path =  '" .$path . "'";
            echo "let path2 =  '" .$path2 . "'";
            echo "let path3 =  '" .$path3 . "'";
        ?>
    </script>