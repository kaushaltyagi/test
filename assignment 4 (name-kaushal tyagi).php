<!DOCTYPE html>
<html>
      
<head>
    <title>

        assignment-4 (kaushal tyagi)

    </title>
    <style>
        .container
        {

            display: block;
        }
        .head
        {
            margin: 10px;
            display: inline-block;

        }
    </style>

</head>
  
<body style="text-align:center;">

      
    <h1 style="color:rgb(0, 0, 0);">
        ASSIGNMENT-4
    </h1>
      
    <form method="post">
        
            <div class="container">

                <div class="head">
                   <h2> S.no. </h2>
                   </div>


                   <div class="head">

                    <h2>Functions</h2>
                    </div>

                    <div class="head">
                    <H2>ARGUMENTS</H2>
                    </div>
                    <div class="head">

                    <H2> BUTTON</H2>
                    </div>
                    <div class="head">
                    <H2>OUTPUT</H2>
                    </div>
            </div>

        <!--  md5   -->
        <div class="container">
            <div class="">
                    <h5>1</h5>
                       
                    
                     
                    <h5>ENTER A STRING FOR Md5()</h5>
                       
                              
                    <input type="text" name="string1" placeholder="input Your String">
                       
                     

                    <input type="submit" name="button1"value="CLICK ME"/>
                       
                         
                <?php
      
                $stri=$_POST['string1'];
                if(isset($_POST['button1'])) 
                     {

                        echo md5($stri);
                     }

                     ?>
                       
                <div class="container">




             <!-- Number_format()  -->
                    
                     

                    <h5>2</h5>
                       


                     
                    <h5>ENTER A STRING FOR Number_format()</h5>
                       
                              
                                
                                
                                          <input type="number" name="string2" placeholder="number">       
                                          <input type="text" name="string21" placeholder="decimals">    

                                 
                                
                                          <input type="text" name="string22" placeholder="decimalpoint">       
                                          <input type="text" name="string23" placeholder="seperator">       

                                
                               
                       
                     
                    <input type="submit" name="button2"value="CLICK ME"/>

                       
                         
                <?php
      
                $stri1=$_POST['string2'];
                $stri2=$_POST['string21'];
                $stri3=$_POST['string22'];
                $stri4=$_POST['string23'];

                if(isset($_POST['button2'])) 
                     {
                        echo number_format($stri1,$stri2,$stri3,$stri4);
                     }
                     ?>

                       
                    



            <!--  Ord()  -->
                    
                     
                    <h5>3</h5>
                       
                     
                    <h5>ENTER A STRING FOR Ord()</h5>
                       

                     
                    <input type="text" name="string3" placeholder="input Your String">
                       
                     
                    <input type="submit" name="button3"value="CLICK ME"/>

                       
                       
                         
                <?php
      
                $stri31=$_POST['string3'];
                if(isset($_POST['button3'])) 
                     {
                        echo ord($stri31);
                     }
                     ?>


                       
                    



            <!--   Rtrim()  -->
                    
                     
                    <h5>4</h5>
                       
                     
                    <h5>ENTER A STRING FOR Rtrim()</h5>

                       
                     
                            
                                
                                 <input type="text" name="string4" placeholder="input Your String">       
                                 <input type="text" name="string41" placeholder="enter string to be trimmed">       
                                
                               
                       
                     
                    <input type="submit" name="button4"value="CLICK ME"/>
                       
                       
                         
                <?php

      
                $stri4=$_POST['string4'];
                $stri41=$_POST['string41'];
                if(isset($_POST['button4'])) 
                     {
                        echo rtrim($stri4,$stri41);
                     }
                     ?>
                       
                    



            <!-- Str_replace() -->
                    
                     
                    <h5>5</h5>

                       
                     
                    <h5>ENTER A STRING FOR Str_replace()</h5>
                       
                     
                            
                                
                           <td colspan="2"> <input type="text" name="string5" placeholder="input Your String">       
                           
                            
                            
                                  <input type="text" name="string51" placeholder="old word">       
                                 <input type="text" name="string52" placeholder="new word">       
                             
                               
                   
                       

                     
                    <input type="submit" name="button5"value="CLICK ME"/>
                       
                       
                         
                <?php
      
                $stri5=$_POST['string5'];
                $stri51=$_POST['string51'];
                $stri52=$_POST['string52'];
                if(isset($_POST['button5'])) 
                     {
                        echo str_replace($stri51,$stri52,$stri5);

                     }
                     ?>
                       

                    





            <!-- Strlen()  -->
                    
                      
                    <h5>6</h5>
                       


                     
                    <h5>ENTER A STRING FOR Strlen()</h5>
                       
                     
                    <input type="text" name="string6" placeholder="input Your String">
                       
                     
                    <input type="submit" name="button6"value="CLICK ME"/>
                       
                        
                <?php
      
                $stri6=$_POST['string6'];
                if(isset($_POST['button6'])) 
                     {
                        echo strlen($stri6);
                        

                     }
                     ?>
                       
                    




            <!-- Strcasecmp()   -->
                    


                     
                    <h5>7</h5>
                       
                     
                    <h5>ENTER A STRING FOR Strcasecmp()</h5>
                       
                     
                                
                            
                                  <input type="text" name="string71" placeholder="enter first string">       
                                 <input type="text" name="string72" placeholder="enter second string">       
                             

                               
                       
                     
                    <input type="submit" name="button7"value="CLICK ME"/>
                       
                        
                <?php
      
                $stri71=$_POST['string71'];
                $stri72=$_POST['string72'];
                if(isset($_POST['button7'])) 
                     {
                        if (strcasecmp($stri71,$stri72))
                            echo " the two strings are not equal.";


                        else
                            echo " the two strings are equal.";
                     }
                     ?>
                       
                    





            <!--  Strrpos()  -->
                    
                     
                    <h5>8</h5>
                       
                     
                    <h5>ENTER A STRING FOR  Strrpos()</h5>
                       
                     
                            

                            
                                  <input type="text" name="string81" placeholder="input Your String">       
                                 <input type="text" name="string82" placeholder="enter word to find position">       
                             
                               
                       
                     
                    <input type="submit" name="button8"value="CLICK ME"/>
                       
                         
                <?php
      
                $stri81=$_POST['string81'];
                $stri82=$_POST['string82'];

                if(isset($_POST['button8'])) 
                     {
                        echo "position of $stri82 from last :".strrpos($stri81,$stri82);
                     }
                     ?>
                       
                    






            <!--  Substr()   -->
                    
                     
                    <h5>9</h5>
                       


                     
                    <h5>ENTER A STRING FOR Substr()</h5>
                       
                     
                            
                            
                                  <input type="text" name="string91" placeholder="input Your String">       
                                 <input type="number" name="string92" placeholder="enter  position">       
                           
                             
                               
                       

                     
                    <input type="submit" name="button9"value="CLICK ME"/>
                       
                         
                <?php
      
                $stri91=$_POST['string91'];
                $stri932=$_POST['string92'];
                if(isset($_POST['button9'])) 
                     {
                        echo substr($stri91,$stri932);

                     }
                     ?>
                       
                    




            <!-- Strtolower()  -->
                    
                     
                    <h5>10</h5>
                       
                     
                    <h5>ENTER A STRING FOR  Strtolower()</h5>

                       
                     
                    <input type="text" name="string10" placeholder="input Your String">
                       
                     
                    <input type="submit" name="button10"value="CLICK ME"/>
                       
                         
                <?php
      
                $stri10=$_POST['string10'];
                if(isset($_POST['button10'])) 

                     {
                        echo strtolower($stri10);
                     }
                     ?>
                       
                    





            <!--   Bintohex()  -->
                    
                      
                    <h5>11</h5>

                       
                     
                    <h5>ENTER A STRING FOR Bintohex()</h5>
                       
                     
                    <input type="text" name="string11" placeholder="input Your String">
                       
                     
                    <input type="submit" name="button11"value="CLICK ME"/>
                       
                         
                <?php
      
                $stri11=$_POST['string11'];
                if(isset($_POST['button11'])) 

                     {
                        echo bin2hex($stri11);
                     }
                     ?>
                       
                    






            <!--   Chop()  -->
                    
                 
                    <h5>12</h5>
                       
                     
                    <h5>ENTER A STRING FOR Chop()</h5>
                       
                     
                                
                                
                                 
                            <input type="text" name="string121" placeholder="input Your String">
                            <input type="text" name="string122" placeholder="enter string to chop">
                                   
                                
                               
                       
                     
                    <input type="submit" name="button12"value="CLICK ME"/>
                       
                         
                <?php
      
                $stri121=$_POST['string121'];
                $stri122=$_POST['string122'];
                if(isset($_POST['button12'])) 
                     {
                        echo chop($stri121,$stri122);
                     }
                     ?>
                       
                    
        
    </form>   
  


</head>
  
</html>