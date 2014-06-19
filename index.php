<?php
//Get the card values on button click
    if(isset($_POST['btn_submit']))
    {
	    $card1 = $_POST['cards1'];
        $card2 = $_POST['cards2'];		
        $card1=substr($card1,0,(strlen($card1)-1));//Delete the last character of the variable 
		$card2=substr($card2,0,(strlen($card2)-1));//Delete the last character of the variable 
		$card2=strtoupper($card2);
//Assigning different vales for each cards 
//Function Argument card2		
 function get_value($card2) {
	
		switch ($card2) {
		
			case 'A' :
				$value = 11;
				break;
			case 'J':
			case 'Q':
			case 'K':
				$value = 10;
				break;
			default:
				$value = $card2;
				break;				
		}
			return $value;
		
		}	
		if($card1 > 2 && $card1 < 10)	// checking weather it is out of range 
			{
		    $total=$card1+get_value($card2);         	 	
			echo '<script type="text/javascript">alert("Congrats You Got'. $total .'Points ");</script>';     
	    
		    }
		
		else
		{
          echo '<script type="text/javascript">alert("Out of range ");</script>';  
	    }
	}		
	
?>
<!-- HTML -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Simple Personal</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection, tv" />
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />
</head>
<body>
<div id="wrapper">
  <div class="title">    
      <div class="title-left">
        <div class="title-right">
          <div class="title-bottom">            
              <div class="title-bottom-left">               
                  <div class="title-bottom-right">
                    <h1><a >PLAY<span>BLACKJACK</span></a></h1>
                    <p >PLAY BLACK JACK </p>
                  </div>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="noscreen" />
  <div class="content">    
    <div class="column-right">
      <div class="box">
        <div class="box-top"></div>
        <div class="box-in">
		<!--Form-->
         <form action="index.php" method="post">
		    <h4>Game Rules</h4>
			<p>First Input Must be 2-10 number with suit Letters</p>
			<p>Second Input Must be the One of the letters  A, K, Q, J wit suit Letter</p>
			<p>Suit Letters S, C, D, H </p>
		    <P>Enter Your Cards </p>
			
			FIrst Card: <input type="text" name="cards1" placeholder="5C" required>
			
			Second Card: <input type="text"  name="cards2" placeholder="AS" required>
			<input  type="submit" name="btn_submit" value="Play">
		</form>
        </div>
      </div>
      <div class="box-bottom">    
       
    </div>
    <div class="cleaner">&nbsp;</div>
  </div>
</div>
</body>
</html>
