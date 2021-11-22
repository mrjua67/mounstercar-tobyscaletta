<!DOCTYPE html>
<!-- saved from url=(0020)http://192.168.0.15/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Robojax ESP32 Motor Control</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
.table{
    width:100%;
    display:table;
}
.row{
    display:table-row;
}

.fixedCell {
    width:15%;
    display:table-cell;

}

.cell{
    display: table-cell;
    background: green;
}

.progress_bar {
  font-size: 20px;  
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-right:10px;
  color: white;
  float:left;
  background-color:#34c0eb;  
}

.buttonsDiv {
  display: flex;
  justify-content: center;
  float:auto;
}
.startStop{
     font-size: 20px;
   background-color: #f44336;
    color: #ffffff;
    border-color: #f44336;  
    border: none;
    display: inline-block;
    padding: 7px 10px;
    vertical-align: middle;    
}

.bar1 {width: 40%;}
.bar2 {width: 60%;}
 
.nextprev a.rj-right, .nextprev a.rj-left {
    background-color: #f44336;
    color: #ffffff;
    border-color: #f44336;
}
.nextprev a {
    font-size: 20px;
    border: 1px solid #cccccc;
}
.rj-right {
    float: right!important;
}
.rj-left {
    float: left!important;
}
.rj-btn, .rj-button {
    border: none;
    display: inline-block;
    padding: 7px 10px;
    vertical-align: middle;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    background-color: inherit;
    text-align: center;
    cursor: pointer;
    white-space: nowrap;
}
</style>
</head>
<body>

<h1>MounsterCarSecurity Manager Toby Scaletta</h1>
<h2>Motor 1 Control</h2>
<div class="table">
    <div class="row">
        <div class="fixedCell">
            <div class="nextprev">
            <a class="rj-left rj-btn" href="http://192.168.0.15/speed?do=m1slower">&lt; Slower</a>
            </div>        

        </div><!--fixedCell -->


        <div class="progress_bar bar1"><strong>Stopped - CW at 40%</strong></div> 

        <div class="fixedCell">
        
          <div class="nextprev">       
          <a class="rj-right rj-btn" href="http://192.168.0.15/speed?do=m1faster">Faster &gt;</a>
          </div>       

        </div><!--fixedCell -->
    </div><!--row -->


</div><!--table -->
<hr align="center" width="50%">
<div class="table">
    <div class="row">
        <div class="fixedCell">
            <div class="nextprev">
            <a class="rj-left rj-btn" href="http://192.168.0.15/direction?dir=m1CCW">CCW</a>
            </div>        

        </div><!--fixedCell -->


        <div class="buttonsDiv">
            <a class="startStop" href="http://192.168.0.15/stop?do=m1START">START            
            </a>
        </div> 

        <div class="fixedCell">
        
          <div class="nextprev">       
          <a class="rj-right rj-btn" href="http://192.168.0.15/direction?dir=m1CW">CW</a>
          </div>       

        </div><!--fixedCell -->
    </div><!--row - Robojax.com -->


</div><!--table motor 1 ended-->
<!--motor 2 started here-->
<h2>Motor 2 Control</h2>

<div class="table">
    <div class="row">
        <div class="fixedCell">
            <div class="nextprev">
            <a class="rj-left rj-btn" href="http://192.168.0.15/speed?do=m2slower">&lt; Slower</a>
            </div>        

        </div><!--fixedCell -->
        <div class="progress_bar bar2"><strong>Stopped - CW at 60%</strong></div> 

        <div class="fixedCell">
        
          <div class="nextprev">       
          <a class="rj-right rj-btn" href="http://192.168.0.15/speed?do=m2faster">Faster &gt;</a>
          </div>       

        </div><!--fixedCell -->
    </div><!--row -->


</div><!--table -->
<hr align="center" width="50%">
<div class="table">
    <div class="row">
        <div class="fixedCell">
            <div class="nextprev">
            <a class="rj-left rj-btn" href="http://192.168.0.15/direction?dir=m2CCW">CCW</a>
            </div>        

        </div><!--fixedCell -->
        <div class="buttonsDiv">
            <a class="startStop" href="http://192.168.0.15/stop?do=m2START">START            
            </a>
        </div> 

        <div class="fixedCell">
        
          <div class="nextprev">       
          <a class="rj-right rj-btn" href="http://192.168.0.15/direction?dir=m2CW">CW</a>
          </div>       

        </div><!--fixedCell -->
    </div><!--row - Robojax.com -->


</div><!--table -->
</body></html>
