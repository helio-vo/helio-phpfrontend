<html>
 <head>
  <title>HELIO ILS Test GUI (3)</title>
  <link rel="stylesheet" href="secr.css" type="text/css">
  <meta content="">
  <style></style>
  <link rel="SHORTCUT ICON" href="../../logos/helio_icon.gif">
 </head>
 <body bgcolor="wheat">
  <table  bgcolor="ivory" border="0" cellpadding="2" cellspacing="0" height="100" width="750">
   <tbody>
    <tr>
     <td valign="middle" align="left" width="160">
      <a href="http://www.helio-vo.eu/"><img src="../../logos/helio_logo4_sm.jpg" border="0"></a>
     </td>
     <td valign="middle" align="left" width="500">
      <font size=+2 color=red><b>
       Instrument Location Service<br>Test GUI (3)</b>
      </font>
     </td>
    </tr>
   </tbody>
  </table>

<!-- 
echo "$server <br>";  
echo $url ;
-->

<?php
$server= $_SERVER['SERVER_NAME'] ;

if($server != "www.helio-vo.eu") {
$root= "msslmq.local/~rdb/helio-vo" ;
} else {
$root= $server;
};
$url= "http://" . $root . "/internal/interfaces/helio-ils_soap.php";

$url= "helio-ils_soap3.php";
?>

  <hr>
<!--
  <form method="get" action="http://msslmq.mssl.ucl.ac.uk/~rdb/test/helio-ils_soap.php" target="_blank">
  <form method="get" action="http://msslmq.local/~rdb/helio-vo/internal/interfaces/helio-ils_soap.php" target="_blank">
  <form method="get" action="http://www.helio-vo.eu/internal/interfaces/helio-ils_soap.php" target="_blank">
-->
<!--        Prest Query           -->
  <form method="get" action="<?php echo $url ?>" target="_blank">
   <p></p><h4>Preset search</h4>
   <input name="qtype" value="1" type="hidden">
   <p>Select a List: &nbsp;&nbsp;
    <select name="cat1">
     <option value="trajectories">Trajectories</option>
    </select>
   </p>
   <p>
    <table>
     <tbody>
      <tr>
       <td><p>Starting date:</p></td>
       <td>&nbsp;&nbsp;
        <select name="y_from">
         <option value="1975">1975</option>
         <option value="1976">1976</option>
         <option value="1977">1977</option>
         <option value="1978">1978</option>
         <option value="1979">1979</option>
         <option value="1980">1980</option>
         <option value="1981">1981</option>
         <option value="1982">1982</option>
         <option value="1983">1983</option>
         <option value="1984">1984</option>
         <option value="1985">1985</option>
         <option value="1986">1986</option>
         <option value="1987">1987</option>
         <option value="1988">1988</option>
         <option value="1989">1989</option>
         <option value="1990">1990</option>
         <option value="1991">1991</option>
         <option value="1992">1992</option>
         <option value="1993">1993</option>
         <option value="1994">1994</option>
         <option value="1995">1995</option>
         <option value="1996">1996</option>
         <option value="1997">1997</option>
         <option value="1998">1998</option>
         <option value="1999">1999</option>
         <option value="2000">2000</option>
         <option value="2001">2001</option>
         <option value="2002">2002</option>
         <option value="2003">2003</option>
         <option value="2004">2004</option>
         <option value="2005">2005</option>
         <option value="2006">2006</option>
         <option value="2007">2007</option>
         <option value="2008">2008</option>
         <option value="2009">2009</option>
         <option value="2010" selected="selected">2010</option>
        </select>
        <select name="mo_from">
         <option value="01">January</option>
         <option value="02">February</option>
         <option value="03">March</option>
         <option value="04">April</option>
         <option value="05">May</option>
         <option value="06">June</option>
         <option value="07">July</option>
         <option value="08" selected="selected">August</option>
         <option value="09">September</option>
         <option value="10">October</option>
         <option value="11">November</option>
         <option value="12">December</option>
        </select>
        <select name="d_from">
         <option value="01">1</option>
         <option value="02">2</option>
         <option value="03">3</option>
         <option value="04">4</option>
         <option value="05">5</option>
         <option value="06">6</option>
         <option value="07">7</option>
         <option value="08">8</option>
         <option value="09">9</option>
         <option value="10">10</option>
         <option value="11" selected="selected">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
         <option value="24">24</option>
         <option value="25">25</option>
         <option value="26">26</option>
         <option value="27">27</option>
         <option value="28">28</option>
         <option value="29">29</option>
         <option value="30">30</option>
         <option value="31">31</option>
        </select>&nbsp;&nbsp;
        <select name="h_from">
         <option value="00" selected="selected">00</option>
         <option value="01">01</option>
         <option value="02">02</option>
         <option value="03">03</option>
         <option value="04">04</option>
         <option value="05">05</option>
         <option value="06">06</option>
         <option value="07">07</option>
         <option value="08">08</option>
         <option value="09">09</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
        </select>
        <select name="mi_from">
         <option value="00" selected="selected">00</option>
         <option value="01">01</option>
         <option value="02">02</option>
         <option value="03">03</option>
         <option value="04">04</option>
         <option value="05">05</option>
         <option value="06">06</option>
         <option value="07">07</option>
         <option value="08">08</option>
         <option value="09">09</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
         <option value="24">24</option>
         <option value="25">25</option>
         <option value="26">26</option>
         <option value="27">27</option>
         <option value="28">28</option>
         <option value="29">29</option>
         <option value="30">30</option>
         <option value="31">31</option>
         <option value="32">32</option>
         <option value="33">33</option>
         <option value="34">34</option>
         <option value="35">35</option>
         <option value="36">36</option>
         <option value="37">37</option>
         <option value="38">38</option>
         <option value="39">39</option>
         <option value="40">40</option>
         <option value="41">41</option>
         <option value="42">42</option>
         <option value="43">43</option>
         <option value="44">44</option>
         <option value="45">45</option>
         <option value="46">46</option>
         <option value="47">47</option>
         <option value="48">48</option>
         <option value="49">49</option>
         <option value="50">50</option>
         <option value="51">51</option>
         <option value="52">52</option>
         <option value="53">53</option>
         <option value="54">54</option>
         <option value="55">55</option>
         <option value="56">56</option>
         <option value="57">57</option>
         <option value="58">58</option>
         <option value="59">59</option>
        </select>
        <select name="s_from">
         <option value="00" selected="selected">00</option>
         <option value="01">01</option>
         <option value="02">02</option>
         <option value="03">03</option>
         <option value="04">04</option>
         <option value="05">05</option>
         <option value="06">06</option>
         <option value="07">07</option>
         <option value="08">08</option>
         <option value="09">09</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
         <option value="24">24</option>
         <option value="25">25</option>
         <option value="26">26</option>
         <option value="27">27</option>
         <option value="28">28</option>
         <option value="29">29</option>
         <option value="30">30</option>
         <option value="31">31</option>
         <option value="32">32</option>
         <option value="33">33</option>
         <option value="34">34</option>
         <option value="35">35</option>
         <option value="36">36</option>
         <option value="37">37</option>
         <option value="38">38</option>
         <option value="39">39</option>
         <option value="40">40</option>
         <option value="41">41</option>
         <option value="42">42</option>
         <option value="43">43</option>
         <option value="44">44</option>
         <option value="45">45</option>
         <option value="46">46</option>
         <option value="47">47</option>
         <option value="48">48</option>
         <option value="49">49</option>
         <option value="50">50</option>
         <option value="51">51</option>
         <option value="52">52</option>
         <option value="53">53</option>
         <option value="54">54</option>
         <option value="55">55</option>
         <option value="56">56</option>
         <option value="57">57</option>
         <option value="58">58</option>
         <option value="59">59</option>
        </select>
       </td>
      </tr>
      <tr>
       <td>Ending date:</td>
       <td>&nbsp;&nbsp;
        <select name="y_to">
         <option value="1975">1975</option>
         <option value="1976">1976</option>
         <option value="1977">1977</option>
         <option value="1978">1978</option>
         <option value="1979">1979</option>
         <option value="1980">1980</option>
         <option value="1981">1981</option>
         <option value="1982">1982</option>
         <option value="1983">1983</option>
         <option value="1984">1984</option>
         <option value="1985">1985</option>
         <option value="1986">1986</option>
         <option value="1987">1987</option>
         <option value="1988">1988</option>
         <option value="1989">1989</option>
         <option value="1990">1990</option>
         <option value="1991">1991</option>
         <option value="1992">1992</option>
         <option value="1993">1993</option>
         <option value="1994">1994</option>
         <option value="1995">1995</option>
         <option value="1996">1996</option>
         <option value="1997">1997</option>
         <option value="1998">1998</option>
         <option value="1999">1999</option>
         <option value="2000">2000</option>
         <option value="2001">2001</option>
         <option value="2002">2002</option>
         <option value="2003">2003</option>
         <option value="2004">2004</option>
         <option value="2005">2005</option>
         <option value="2006">2006</option>
         <option value="2007">2007</option>
         <option value="2008">2008</option>
         <option value="2009">2009</option>
         <option value="2010" selected="selected">2010</option>
        </select>
        <select name="mo_to">
         <option value="01">January</option>
         <option value="02">February</option>
         <option value="03">March</option>
         <option value="04">April</option>
         <option value="05">May</option>
         <option value="06">June</option>
         <option value="07">July</option>
         <option value="08">August</option>
         <option value="09" selected="selected">September</option>
         <option value="10">October</option>
         <option value="11">November</option>
         <option value="12">December</option>
        </select>
        <select name="d_to">
         <option value="01">1</option>
         <option value="02">2</option>
         <option value="03">3</option>
         <option value="04">4</option>
         <option value="05">5</option>
         <option value="06">6</option>
         <option value="07">7</option>
         <option value="08">8</option>
         <option value="09">9</option>
         <option value="10">10</option>
         <option value="11" selected="selected">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
         <option value="24">24</option>
         <option value="25">25</option>
         <option value="26">26</option>
         <option value="27">27</option>
         <option value="28">28</option>
         <option value="29">29</option>
         <option value="30">30</option>
         <option value="31">31</option>
        </select>&nbsp;&nbsp;
        <select name="h_to">
         <option value="00">00</option>
         <option value="01">01</option>
         <option value="02">02</option>
         <option value="03">03</option>
         <option value="04">04</option>
         <option value="05">05</option>
         <option value="06">06</option>
         <option value="07">07</option>
         <option value="08">08</option>
         <option value="09">09</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23" selected="selected">23</option>
        </select>
        <select name="mi_to">
         <option value="00">00</option>
         <option value="01">01</option>
         <option value="02">02</option>
         <option value="03">03</option>
         <option value="04">04</option>
         <option value="05">05</option>
         <option value="06">06</option>
         <option value="07">07</option>
         <option value="08">08</option>
         <option value="09">09</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
         <option value="24">24</option>
         <option value="25">25</option>
         <option value="26">26</option>
         <option value="27">27</option>
         <option value="28">28</option>
         <option value="29">29</option>
         <option value="30">30</option>
         <option value="31">31</option>
         <option value="32">32</option>
         <option value="33">33</option>
         <option value="34">34</option>
         <option value="35">35</option>
         <option value="36">36</option>
         <option value="37">37</option>
         <option value="38">38</option>
         <option value="39">39</option>
         <option value="40">40</option>
         <option value="41">41</option>
         <option value="42">42</option>
         <option value="43">43</option>
         <option value="44">44</option>
         <option value="45">45</option>
         <option value="46">46</option>
         <option value="47">47</option>
         <option value="48">48</option>
         <option value="49">49</option>
         <option value="50">50</option>
         <option value="51">51</option>
         <option value="52">52</option>
         <option value="53">53</option>
         <option value="54">54</option>
         <option value="55">55</option>
         <option value="56">56</option>
         <option value="57">57</option>
         <option value="58">58</option>
         <option value="59" selected="selected">59</option>
        </select>
        <select name="s_to">
         <option value="00">00</option>
         <option value="01">01</option>
         <option value="02">02</option>
         <option value="03">03</option>
         <option value="04">04</option>
         <option value="05">05</option>
         <option value="06">06</option>
         <option value="07">07</option>
         <option value="08">08</option>
         <option value="09">09</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
         <option value="24">24</option>
         <option value="25">25</option>
         <option value="26">26</option>
         <option value="27">27</option>
         <option value="28">28</option>
         <option value="29">29</option>
         <option value="30">30</option>
         <option value="31">31</option>
         <option value="32">32</option>
         <option value="33">33</option>
         <option value="34">34</option>
         <option value="35">35</option>
         <option value="36">36</option>
         <option value="37">37</option>
         <option value="38">38</option>
         <option value="39">39</option>
         <option value="40">40</option>
         <option value="41">41</option>
         <option value="42">42</option>
         <option value="43">43</option>
         <option value="44">44</option>
         <option value="45">45</option>
         <option value="46">46</option>
         <option value="47">47</option>
         <option value="48">48</option>
         <option value="49">49</option>
         <option value="50">50</option>
         <option value="51">51</option>
         <option value="52">52</option>
         <option value="53">53</option>
         <option value="54">54</option>
         <option value="55">55</option>
         <option value="56">56</option>
         <option value="57">57</option>
         <option value="58">58</option>
         <option value="59" selected="selected">59</option>
        </select>
       </td>
      </tr>
     </tbody>
    </table>
   </p>
<!--               -->
   <p>
    <input value="Search" type="submit">&nbsp;
    <input value="Reset" type="reset">
<!--               -->
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="format">
     <option value="text">Text</option>
     <option value="html" selected="selected">HTML</option>
     <option value="vot">VOTable</option>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <select name="process">
     <option value="1">Auto</option>
     <option value="0">Hold</option>
    </select>
   </p>

<!--            -->
<p><br>
 Show Records: &nbsp;&nbsp;
       <select name="n_show">
         <option value="" selected="selected">all</option>
         <option value="25">25</option>
         <option value="50">50</option>
         <option value="75">75</option>
         <option value="100">100</option>
        </select>

<!--            -->
<p>
<b><i>Planet:</i></b> &nbsp;&nbsp;&nbsp;&nbsp;
Mercury <input name="tar_object[]" value="Mercury" type="checkbox"></input> &nbsp;&nbsp;
Venus <input name="tar_object[]" value="Venus" type="checkbox"></input> &nbsp;&nbsp;
Earth <input name="tar_object[]" value="Earth" type="checkbox"></input> &nbsp;&nbsp;
Mars <input name="tar_object[]" value="Mars" type="checkbox"></input> &nbsp;&nbsp;
Jupiter <input name="tar_object[]" value="Jupiter" type="checkbox"></input> &nbsp;&nbsp;
Saturn <input name="tar_object[]" value="Saturn" type="checkbox"></input> &nbsp;&nbsp;
Uranus <input name="tar_object[]" value="Uranus" type="checkbox"></input> &nbsp;&nbsp;
Neptune <input name="tar_object[]" value="Neptune" type="checkbox"></input> <p>

<!--            -->
<p>
<b><i>Spacecraft:</i></b> &nbsp;&nbsp;&nbsp;&nbsp;
Galileo <input name="tar_object[]" value="Galileo" type="checkbox"></input> &nbsp;&nbsp;
Cassini <input name="tar_object[]" value="Cassini" type="checkbox"></input> &nbsp;&nbsp'
<!--
MGS <input name="tar_object[]" value="MGS" type="checkbox"></input> &nbsp;&nbsp;Odyssey <input name="tar_object[]" value="Odyssey" type="checkbox"></input> &nbsp;&nbsp;MEX <input name="tar_object[]" value="MEX" type="checkbox"></input> &nbsp;&nbsp;MRO <input name="tar_object[]" value="MRO" type="checkbox"></input> &nbsp;&nbsp;
<br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--
Messenger <input name="tar_object[]" value="Messenger" type="checkbox"></input> &nbsp;&nbsp;VEX <input name="tar_object[]" value="VEX" type="checkbox"></input> &nbsp;&nbsp;
-->
Ulysses <input name="tar_object[]" value="Ulysses" type="checkbox"></input> &nbsp;&nbsp;
<!--
STEREO-A <input name="tar_object[]" value="STEREO-A" type="checkbox"></input> &nbsp;&nbsp;STEREO-B <input name="tar_object[]" value="STEREO-B" type="checkbox"></input> &nbsp;&nbsp;
<br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
-->
Voyager 2 <input name="tar_object[]" value="Voyager 2" type="checkbox"></input> &nbsp;&nbsp;Voyager 1 <input name="tar_object[]" value="Voyager 1" type="checkbox"></input> &nbsp;&nbsp;
<!--
Deep Space-1 <input name="tar_object[]" value="DeepSpace-1" type="checkbox"></input> &nbsp;&nbsp;NEAR <input name="tar_object[]" value="NEAR" type="checkbox"></input> &nbsp;&nbsp;New Horizons <input name="tar_object[]" value="NewHorizons" type="checkbox"></input> &nbsp;&nbsp;
Rosetta <input name="tar_object[]" value="Rosetta" type="checkbox"></input> &nbsp;&nbsp;
-->

<p>

  </form>
  <hr>
<!--        Free SQL Query           -->
  <form method="get" action="<?php echo $url ?>" target="_blank">
   <p></p><h4>Free SQL query</h4>
   <input name="qtype" value="0" type="hidden">
   <p>
<!--
WHERE exe_date_time BETWEEN '2000-01-01' AND '2000-01-03' 
-->
    <textarea name="sql" cols="70" rows="8">SELECT * FROM trajectories WHERE exe_date_time BETWEEN '2000-01-01' AND '2000-01-03' LIMIT 10</textarea>
<!--               -->
   <p>
    <input value="Search" type="submit">&nbsp;
    <input value="Reset" type="reset">
<!--               -->
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="format">
     <option value="text">Text</option>
     <option value="html">HTML</option>
     <option value="vot">VOTable</option>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <select name="process">
     <option value="1">Auto</option>
     <option value="0">Hold</option>
    </select>
    <br>
   </p>
   <p>
    <a href="examples_ics-ils.html" target=_blank"><i>Examples of SQL Queries to the ICS and ILS</i></a>
   </p>
<!--
   <p>
    <a href="http://hec.ts.astro.it/sec_idiots_sql.html" target="_blank">
     <em>Examples of how to use SQL on the HELIO HEC Server</em>
    </a>
   </p>
-->
   <hr>
<em><small>Based on the EGSO SEC GUI developed by 
<a href="http://radiosun.ts.astro.it/">INAF - Trieste Astronomical Observatory</a></small><em>
  </form>
 </body>
</html>
