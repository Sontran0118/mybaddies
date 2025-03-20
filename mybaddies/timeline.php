<!DOCTYPE html>
    <head>

        <title>Profile | My baddies</title>

    </head>

    <style type="text/css">

        #blue_bar{
            height: 50px;
            background-color:rgb(15, 106, 148);
            color: rgb(236, 226, 226); 


        }

        #search_box{
            width: 400px;
            height: 20px;
            border-radius: 4px;
            border: none;
            padding: 4px;
            font-size: 14px;
            background-image: url(search-icon.png);
            background-repeat: no-repeat;
            background-position: right;
            background-size: 20px;
        }

        #profile-pic{
            width: 150px;
        
            border-radius: 50%;
            border: solid 2px white;
        }
        
        #menu_buttons{
            width: 100px;
           
            display: inline-block;
            margin: 2px;
            

        }

        #friends_img{
            width: 75px;
            float: left;
            margin: 8px;
        }

        #friends_bar{

            
            min-height: 500px;   
            margin: 20px;
            color: #aaa;
            padding: 8px;
            text-align: center;
            font-size: 20px;


        }

        #friends{
            clear: left;
            color:  rgb(15, 106, 148);
        }

        textarea{
            width: 100%;
            border:none;
            font-family: tahoma;
            font-size: 14px;
            height: 70px;

        }

        #post_button{
            float: right;
            background-color: rgb(15, 106, 148);
            border: none;
            color: white;
            padding: 4px;
            border-radius: 4px;
            font-size: 14px;
            width: 50px;
        }

        #post_bar{
            margin-top: 20px;
            background-color: white;
            padding: 10px;


        }

        #post{
            padding: 4px;
            font-size: 13px;
            display: flex;
            margin-bottom: 20px;
        }

    </style>

    <body style="font-family: tahoma; background-color:#d0d8e4 ;">
        <br>
        <div id="blue_bar">
            
         
            <!--top bar-->
            
            <div style="margin: auto; width: 800px; font-size: 30px;">
                My Baddies  &nbsp &nbsp <input type="text" id="search_box" placeholder="Search for people">
                <img src="profile-image.jpg" style=" width: 50px; float: right; border-radius: 4px; border: none;">
            </div>
            

            <br>

    
           
            <div style="width: 800px; margin: auto;  min-height: 400px;">
                 

                

                 <!-- below cover area-->
                <div style="display: flex; color: black;">
                     <!--friends area-->
                    <div style=" min-height: 400px; flex:1;">

                        <div id="friends_bar">

                           <img src="profile-image.jpg" id="profile-pic"> <br>
                           Son Tran

                        </div>
                    </div>

                    <!--posts area-->

                    <div style=" min-height: 400px; flex: 2; padding: 20px; padding-right: 0px;">

                        <div style="border: solid thin #aaa; padding:  10px;background-color: white;">

                            <textarea placeholder="What's on your mind?"> </textarea>
                            <input id="post_button" type="submit" value="Post">
                            <br>
                        </div>


                        <div id="post_bar">

                            <div id="post">

                                <div >
                                    <img src="profile-image.jpg" style="width: 75px; margin-right: 4px;">
                                </div>

                                <div>
                                    <dive style="font-weight: bold; color: rgb(15, 106, 148) ;"> First guy</dive><br>
                                    dsfasdf
                                    <br><br>
                                    <a href="">Like</a> . <a href="">Comment</a> . <span>April 13 2020</span>
                                </div>

                            </div>

                            <div id="post">

                                <div >
                                    <img src="profile-image.jpg" style="width: 75px; margin-right: 4px;">
                                </div>

                                <div>
                                    <dive style="font-weight: bold; color: rgb(15, 106, 148) ;"> Second guy</dive><br>
                                    dsfasdf
                                    <br><br>
                                    <a href="">Like</a> . <a href="">Comment</a> . <span>April 13 2020</span>
                                </div>

                            </div>

                            <div id="post">

                                <div >
                                    <img src="profile-image.jpg" style="width: 75px; margin-right: 4px;">
                                </div>

                                <div>
                                    <dive style="font-weight: bold; color: rgb(15, 106, 148) ;"> Third guy</dive><br>
                                    dsfasdf
                                    <br><br>
                                    <a href="">Like</a> . <a href="">Comment</a> . <span>April 13 2020</span>
                                </div>

                            </div>

                        </div>

                     
                    </div>



                </div>




            </div>

        </div>

    </body>
</html>