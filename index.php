<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1> <a href="index.php">Web</a> </h1>
    <ol>
        <?php 
            $list = scandir('./data');

            $i = 0;
            while($i < count($list)){
                if($list[$i] != '.' && $list[$i] != '..'){
                    echo " <li><a href = \"index.php?id=$list[$i]\"> $list[$i]</a></li>\n";
                   
                }
                 $i = $i + 1;
            }
            
            
        ?>
    </ol>
    <!-- <ol>
        <li><a href = "index.php?id=HTML">HTML</a></li>
        <li><a href = "index.php?id=CSS">CSS</a></li>
        <li><a href = "index.php?id=JavaScript">JavaScript</a></li>
        <li><a href = "index.php?id=PHP">PHP</a></li>
    </ol> -->
    <h2>
        <?php
        //제목바꾸기
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }else{ //id값이 존재하지 않는다면
            echo "Welcome";
        }
        
        ?>
    </h2>
    <?php
    if(isset($_GET['id'])){
        //echo data/id 값에 해당하는 파일의 내용;
    echo file_get_contents("data/".$_GET['id']);
    }else{
        echo "Hello, PHP";
    }
    
    ?>
</body>
</html>