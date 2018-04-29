<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        	//print "<form action='PP0702.php' method='POST'>";
        	print "<p>學號：04050432	姓名：戴寧";
        	print "<p>現在時間：";
        	$datetime = date ("Y- m - d / H : i : s"); 
        	echo $datetime ;
            $num_name_ary = array('1'=>'01','2'=>'02','3'=>'03','4'=>'04','5'=>'05','6'=>'06','7'=>'07');
            $num1_name_ary = array('8'=>'08','9'=>'09','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14');
            $num2_name_ary = array('15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21');
            $num3_name_ary = array('22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28');
            $num4_name_ary = array('29'=>'29','30'=>'30','31'=>'31','32'=>'32','33'=>'33','34'=>'34','35'=>'35');
            $num5_name_ary = array('36'=>'36','37'=>'37','38'=>'38','39'=>'39','40'=>'40','41'=>'41','42'=>'42');
            $num6_name_ary = array('43'=>'43','44'=>'44','45'=>'45','46'=>'46','47'=>'47','48'=>'48','49'=>'49');
            /*$num_name_ary = array(
            1=>array(1=>"1",2=>"2",3=>"3",4=>"4",5=>"5",6=>"6",7=>"7"), 
            2=>array(8=>"8",9=>"9",10=>"10",11=>"11",12=>"12",13=>"13",14=>"14"), 
            3=>array(15=>"15",16=>"16",17=>"17",18=>"18",19=>"19",20=>"20",21=>"21"), 
            4=>array(22=>"22",23=>"23",24=>"24",25=>"25",26=>"26",27=>"27",28=>"28"), 
            5=>array(29=>"29",30=>"30",31=>"31",32=>"32",33=>"33",34=>"34",35=>"35"), 
            6=>array(36=>"36",37=>"37",38=>"38",39=>"39",40>"40",41=>"41",42=>"42"),
            7=>array(43=>"43",44=>"44",45=>"45",46=>"46",47>"47",48=>"48",49=>"49"),
            );
            */
            $cknum=0;
            $err_num = '';
            
            	
            foreach ($num_name_ary as $key => $value){
            	$num_ary["$key"] = '';
            }
            foreach ($num1_name_ary as $key => $value){
            	$num_ary["$key"] = '';
            }
            foreach ($num2_name_ary as $key => $value){
            	$num_ary["$key"] = '';	
            }
            foreach ($num3_name_ary as $key => $value){
            	$num_ary["$key"] = '';
            }
            foreach ($num4_name_ary as $key => $value){
            	$num_ary["$key"] = '';	
            }
            foreach ($num5_name_ary as $key => $value){
            	$num_ary["$key"] = '';
            }
            foreach ($num6_name_ary as $key => $value){
            	$num_ary["$key"] = '';
            }
            	
            if (isset($_POST['submit']))
            {
            	if (isset($_POST['num']) && isset($_POST['num1'] ))
            	{
            		
            		print "<p>選號結果：<p>";
            		foreach ($_POST['num'] as $ha){
            			print $num_name_ary[$ha]." ";
            			$cknum=$cknum+1;
            		}
            		exit;
            		
            	
            		foreach ($_POST['num'] as $ha){
            			print $num1_name_ary[$ha]." ";
            			$cknum=$cknum+1;
            		}
            		exit;
            		
            		foreach ($_POST['num'] as $ha){
            			print $num2_name_ary[$ha]." ";
            			$cknum=$cknum+1;
            		}
            		exit;
            		
            		foreach ($_POST['num'] as $ha){
            			print $num3_name_ary[$ha]." ";
            			$cknum=$cknum+1;
            		}
            		exit;
            		
            		foreach ($_POST['num'] as $ha){
            			print $num4_name_ary[$ha]." ";
            			$cknum=$cknum+1;
            		}
            		exit;
            		
            		foreach ($_POST['num'] as $ha){
            			print $num5_name_ary[$ha]." ";
            			$cknum=$cknum+1;
            		}
            		exit;
            		
            		foreach ($_POST['num'] as $ha){
            			print $num6_name_ary[$ha]." ";
            			$cknum=$cknum+1;
            		}
            		exit;
            	}
            	
            	if (isset($_POST['num'])){
            
            			$cknum<=6;
            		$err_num = '';
            	}
            	else{
            		$err_num = " <font color='red'>選擇數量過多，請重新選號</font>";
            	}
            
            	/*if (isset($_POST['num']))
            	{
            		foreach ($_POST['num'] as $ha)
            			$num_ary["$ha"] = 'checked';
            		$err_num = '';
            	}
            	else
            	{
            		$err_num = " <font color='red'>請選擇</font>";
            	}
            	*/
            }
            		
            print "<form action='hw.php' method='POST'>";
            
            print "<p>選號：<p>";
            foreach ($num_name_ary as $key => $value){	
            	print "<input type='checkbox' name='num[]' value=$key {$num_ary[$key]}>$value";
            }
            print "<p>";
            foreach ($num1_name_ary as $key => $value){	
            	print "<input type='checkbox' name='num[]' value=$key {$num_ary[$key]}>$value";
            }
            
            print "<p>";
            foreach ($num2_name_ary as $key => $value){	
            	print "<input type='checkbox' name='num[]' value=$key {$num_ary[$key]}>$value";
            }
            
            print "<p>";
            foreach ($num3_name_ary as $key => $value){	
            	print "<input type='checkbox' name='num[]' value=$key {$num_ary[$key]}>$value";
            }
            
            print "<p>";
            foreach ($num4_name_ary as $key => $value){	
            	print "<input type='checkbox' name='num[]' value=$key {$num_ary[$key]}>$value";
            }
            
            print "<p>";
            foreach ($num5_name_ary as $key => $value){	
            	print "<input type='checkbox' name='num[]' value=$key {$num_ary[$key]}>$value";
            }
            
            print "<p>";
            foreach ($num6_name_ary as $key => $value){	
            	print "<input type='checkbox' name='num[]' value=$key {$num_ary[$key]}>$value";
            }
            $html =<<<EOT
            <p>
            <input type=submit name='submit' value='選號'>
            <input type=submit name='reset' value='重選'>
            
            </form>
EOT;
    	    echo $html."<br>".$err_num;
    	
        ?>
    </body>
</html>