<?php
    
    include('header.php');
?>  
 </head>
<body>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <?php
        include('navi.php');
    ?>
</nav>
<div class="jumbotron" id = "banner">
    <?php
        include('banner.php');
    ?>
</div>
<div class="container">               
  <ol class="breadcrumb">
    <li class="active"><a href="index.php">Home</a></li>       
  </ol>
    <div id="pagecontent"> 
       <h2 id="infohead">Curriculum/ Lesson Structure </h2>
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                Beginners</a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
              <div class="panel-body">
                  
                <h3 class="h3">INTRODUCTION &amp; BASICS</h3>   
                  <div>                      
                      <dl class="dl-vertical">
                        <dt>KNOW YOUR VEENA</dt>
                        <dd>Veena &amp; Its Parts</dd>
                        <dt>HOW TO TUNE THE VEENA</dt>
                        <dd>What is Tuning; How to String The Veena; Care Of The Veena; The Maintenance Of The Veena; Role Of The Hands; Types Of Right Hand Plucking; Technique For Plucking The Meettu; Technique For Playing - Right Hand and Left Hand.</dd>
                        <dt>THE BIRTH OF THE NOTES 'SRGM'</dt>
                        <dd>The Ragam Mayamalavagoula; Terms For Practice;</dd>
                    </dl>
                  </div>
                  <div >
                      <table class="table table-striped">
                      <tr><td>LESSON ONE </td>
                          <td>Sarali Varisai</td></tr> 
                          <tr><td>LESSON TWO </td>
                          <td>Jantai Varisai</td></tr>
                          <tr><td>LESSON THREE</td>
                          <td>Malesthai Varisai (High pitch swarams on Higher Octave)</td></tr>
                          <tr><td>LESSON FOUR</td>
                          <td>Kizsthai Varisai (Low pitch swarams on Lower Octave);Thattu Varisai in Mayamalavagowla and Sankarabharanam ragams</td></tr>
                          <tr><td>LESSON FIVE</td>
                          <td>Some basic gamaka excercises of Saralivarisai in Mayamalawa- Gowla ragam</td></tr>
                      </table>
                  
                  </div>
                   
                 
                </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                Intermediate</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body">
                 <div >
                      <h3 class="h3">INTERMEDIATE</h3> 
                      <table class="table table-striped">
                      <tr><td>LESSON SIX </td>
                          <td>Alangkarams : Each Alangkaram in different Ragam and Thalam. Understanding Thalam Rhythm and Thalam Chart. </td></tr> 
                          <tr><td>LESSON SEVEN </td>
                          <td>Geetams with short Raga Sancharas in different Ragams with Gamakams starting from Malahari - Sri Gana Natha; Kunda Goura and many others. Special Gamakam exercises.</td></tr>
                          <tr><td>LESSON EIGHT</td>
                          <td>Swarajathis and Nottu Swarams</td></tr>
                      </table>                  
                  </div>
                </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                Advanced</a>
              </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
              <div class="panel-body">
                <h3 class="h3">ADVANCED</h3> 
                      <table class="table table-striped">
                      <tr><td>LESSON NINE </td>
                          <td>Minimum 10 Adi thala Varnams in  speed one and two</td></tr> 
                          <tr><td>LESSON TEN </td>
                          <td>Minimum 40 to 50 Krithis before going to Masters level. Pancharatna and Nava Varna Krithis</td></tr>
                      </table>
                </div>
            </div>
          </div>
            <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                Masters</a>
              </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
              <div class="panel-body">
                <h3 class="h3">MASTERS</h3> 
                      <table class="table table-striped">
                      <tr><td>LESSON ELEVEN </td>
                          <td>Ragam, Alapana with Krithis - Study of Ragam - The Melody
A Pattern To Follow For Tanam. Ata thala and Pada varnams.</td></tr> 
                          <tr><td>LESSON TWELVE </td>
                          <td>Kalpana Swarams and Neraval, Ragam Tanam and Pallavi (RTP)</td></tr>
                      </table>
                </div>
            </div>
          </div>
        </div>  
        
    </div>
</div>

 <?php
        include('footer.php');
?>
    
</body>
</html>
