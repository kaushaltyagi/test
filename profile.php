<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style type="text/css">
    #blue_bar
        {
            height: 50px;
            background-color: #3c5a99; 
            color: #d9dfeb;
        }
        #search_box
        {
            width: 400px;
            height: 20px;
            border-radius: 4px;
            border: none;
            padding-top:3px;
            padding: 4px;
            margin:auto;
            font-size: 13px;
            background-image: url(search.png);
            background-repeat: no-repeat;
            background-position: right;
        }
        #cover_area
        {
            width: 800px;
            margin: auto;
           
            min-height: 400px;     
            /* min height to save content overflow */
        }
        #profile_pic
        {
            width: 150px;
            margin-top: -200px;
            border-radius: 100px;
            border: solid 2px white;
        }
        #menu_buttons
        {
            width:100px;
            display: inline-block;
            margin: 2px;
            
        }
        #friends_img
        {
            width: 75px;
            float: left;
            
            margin: 8px;
        }
        #friends_bar
        {
            background-color: white;
             min-height: 400px;
            color: #aaa;
            padding: 8px;
            margin-top: 20px;
            font-weight: bold;
        }
        #friends
        {
            clear: both;
            font-size: 12px;
            font-weight: bold;
            color: #405d9b;
        }
      
  
        textarea
        {
            width: 100%;
            border: none;
            font-family: Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            height: 60px;
        }
        #post_button
        {
            float: right;
            border: none;
            width: 50px;
            padding: 1px;
            font-size: 14px;
            background-color: #405d9b;
            color: white;
            border-radius: 4px;

        }
        #post_bar
        {
            margin-top: 20px;
            background-color:#ffffff;
            padding: 10px;
            
        }
        #post
        {
            padding: 4px;
            font-size: 13px;
            display: flex;
            margin-bottom: 20px;
            background-color: white;
        }
    </style>
    <body style="font-family:tahoma;background-color:#d0d8e4">
        
        <br>
        <!--top bar-->
        <div id="blue_bar">
            <div style="width:800px;margin:auto;font-size:30 px;">
            BLOG-MANTRA &nbsp &nbsp <input type="text" id="search_box" placeholder="Search For people">
            <img src="kaushal.jpg" style="width:40px;float:right;">
            </div>
        </div> 
        <!--cover area-->
        <div style="width:800px;margin:auto;min-height:400px;">
            <div style="background-color:white;text-align:center;color:#405d9b">
                <img src="mountain.jpg" style="width:100%;">
                <img id="profile_pic" src="kaushal.jpg">
                <br>
                    <div style="font-size:20px;color:black;">kaushal tyagi</div>
                <br>
                <div id="menu_buttons">Timeline</div>
                <div id="menu_buttons">about</div>  
                <div id="menu_buttons">friends</div>
                <div id="menu_buttons">photos</div>  
                <div id="menu_buttons">Settings</div>  
            </div>
            <!-- below cover area--> 
            <div style="display:flex;">
                <!-- friends area-->
                <div style="min-height:400px;flex:1;">
                    <div id="friends_bar">
                        Friends<br>
                        
                        <div id="friends">
                            <img id="friends_img" src="user2.jpg">
                            <br>
                           first user
                        </div>
                        <div id="friends">
                            <img id="friends_img" src="user3.jpg">
                            <br>
                            second user
                        </div>
                        <div id="friends">
                            <img id="friends_img" src="user1.jpg">
                            <br>
                            third user
                        </div>
                       
                    </div>
                </div>
                <!-- posts area--> 
                <div style="min-height:400px;flex:2.5;padding:20px;padding-right:0px;">
                    <div style="border:solid thin #aaa;padding 10px;background-color:white;">
                        <textarea placeholder="whats on your mind?"></textarea>
                        <input id="post_button" type="submit" value="post">
                        <br>
                    </div>
                    <!-- posts--> 
                    <div id="post_bar">
                        <!-- post 1-->
                        <div id="post">
                            <div>
                                <img src="user4.jpg" style="width:75px;margin-right:4px;">
                            </div>
                            <div>
                                <div style="font-weight:bold;color:#405d9b"> First guy</div>
                                hii this is kaushal tyagi
                                <br><br>
                                <a href="">Like</a>.<a href="">Comment</a>.<span style="color:#999;">November 20 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        

                                              
    </body>
</html>