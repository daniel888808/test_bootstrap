<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        	//print "<form action='PP0702.php' method='POST'>";
        	echo "<p>學號：04050432	姓名：戴寧";
        	echo "<p>現在時間：";
        	$datetime = date ("Y- m - d / H : i : s"); 
        	echo $datetime ;
            $err_num = '';
            $controlview = 0;
            $userpick = '<p>選號結果：<p>';
            $num_name_ary = array();
            //改為一個陣列
            for ( $n=1 ; $n<50 ; $n++ ) {
                if($n<10){
                    $num_name_ary["$n"]="0$n";
                }else{
                    $num_name_ary["$n"]="$n";
                }
            }
            if (isset($_POST['submit'])){
                if (isset($_POST['num'])){
                    if(count($_POST['num']) < 6){
                        Let_it_6($_POST['num']);
                    }elseif(count($_POST['num']) > 6){
                        $err_num="<font color='red'>選擇數量過多，請重新選號</font>";
                    }else{
                        
                    }
            		foreach ($_POST['num'] as $ha){
            			$userpick.= $num_name_ary[$ha]." ";
            		}
                }
            }
            echo "<form action='test.php' method='POST'>";
            echo "<p>選號：<p>";
            foreach ($num_name_ary as $key => $value){	
            	print "<input type='checkbox' name='num[]' value=$key {$num_ary[$key]}>$value";
            	$controlview+=1;
            	//控制排版為7個一行
            	if ($controlview==7) {
            	    echo "<br>";
            	    $controlview =0;
            	}
            }
            function Let_it_6($array){
                $neednum = 6-count($array);
                $randarray = array();
                for($n=0;$n<$neednum;$n++){
                    $randarray[$n]=rand(1,49);
                }
                foreach ($array as $a){
            			$array[$a]=0;
            		}
            }
            $html =<<<EOT
            <p>
            <input type=submit name='submit' value='選號'>
            <input type=submit name='reset' value='重選'>
            
            </form>
EOT;
    	    echo $html."<br>".$err_num."<br>".$userpick;
    	
        ?>
    </body>
</html>