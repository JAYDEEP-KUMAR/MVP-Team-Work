<!DOCTYPE HTML>

<html>
    <head>
        <title>Org Chart</title>
        <link rel="stylesheet" href="demo.css"/>
        <link rel="stylesheet" href="jquery.orgchart.css"/>
        <style>
        span.title {
            font-weight: normal;
            font-style: italic;
            color: #404040;
        }
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="jquery.orgchart.js"></script>
        <script>
        $(function() {
           // $("#organisation").orgChart({container: $("#main")});
            $("#organisation").orgChart({container: $("#main"), interactive: true, fade: true, speed: 'slow'});

            
        });
        </script>
    </head>

    <body>

        <div id="left">

         <!---   <ul id="organisation">
                <li class="company"><em><a href="http://www.capricasoftware.co.uk">Caprica Software</a></em>
                    <ul>
                        <li>Mark Lee<br/><span class='title'>Overlord</span>
                        <ul>
                            <li>Sales<br/>
                                <ul>
                                    <li>Richard Toole<br/><span class='title'>Minion</span></li>
                                    <li>Noah Scruples<br/><span class='title'>Minion</span></li>
                                </ul>
                            </li>
                            <li>Marketing
                                <ul>
                                    <li>Liza Cumming<br/><span class='title'>Minion</span></li>
                                    <li>Lotte<br/>Fibze<br/><span class='title'>Minion</span></li>
                                </ul>
                            </li>
                            <li>Human Resources<br/>
                                <ul>
                                    <li>Misty Nethers<br/><span class='title'>Minion</span></li>
                                </ul>
                            </li>
                            <li>Legal<br/>
                                <ul>
                                    <li>Rob Newhouse<br/><span class='title'>Minion</span></li>
                                </ul>
                            </li>
                            <li>Public Relations<br/>
                                <ul>
                                    <li>Tracy Chavington<br/><span class='title'>Minion</span></li>
                                </ul>
                            </li>
                        </ul>
                        </li>
                    </ul>
                </li>
            </ul>    ------>
            
            <ul id="organisation" class='tree'> <li> task2  <ul class='tree'> <li> task1  </li> <li> task3  <ul class='tree'> <li> task4  </li> <li> task4  <ul class='tree'> <li> task5  </li>  </ul>  </li>  </ul>  </li>  </ul>  </li>  </ul> 
        
        </div>

        <div id="content">
        
            <h1>JQuery/CSS Organisation Chart</h1>
        
            <div id="main">
            </div>
            
           

        </div>
            
  </body>

</html>