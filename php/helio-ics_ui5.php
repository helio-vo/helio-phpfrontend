<html>
 <head>
  <title>HELIO ICS Test GUI (5)</title>
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
        Instrument Capabilities Service<br>Test GUI (5)
       </b>
      </font>
     </td>
    </tr>
   </tbody>
  </table>
  <hr>
<!--        Prest Query           -->
  <form method="get" action="helio-ics_soap5.php" target="_blank">
   <p></p><h3>Preset search</h3>
   <input name="qtype" value="1" type="hidden">
   <p>Select a List: &nbsp;&nbsp;
    <select name="cat1">
     <option value="instrument">Instrument</option>
     <option value="observatory">Observatory</option>
     <option disabled="disabled">---------</option>
     <option value="flybys">Flybys</option>
    </select>
   </p>
   <p>
    <table  cellspacing=0>
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
         <option value="2000" selected="selected">2000</option>
         <option value="2001">2001</option>
         <option value="2002">2002</option>
         <option value="2003">2003</option>
         <option value="2004">2004</option>
         <option value="2005">2005</option>
         <option value="2006">2006</option>
         <option value="2007">2007</option>
         <option value="2008">2008</option>
         <option value="2009">2009</option>
         <option value="2010">2010</option>
        </select>
        <select name="mo_from">
         <option value="01" selected="selected">January</option>
         <option value="02">February</option>
         <option value="03">March</option>
         <option value="04">April</option>
         <option value="05">May</option>
         <option value="06">June</option>
         <option value="07">July</option>
         <option value="08">August</option>
         <option value="09">September</option>
         <option value="10">October</option>
         <option value="11">November</option>
         <option value="12">December</option>
        </select>
        <select name="d_from">
         <option value="01" selected="selected">01</option>
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
        </select>
<!--
        &nbsp;&nbsp;
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
-->
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
        </select>
<!--  should this be set 20 23:59:59  -->
<!--
        &nbsp;&nbsp;
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
-->
       </td>
      </tr>
     </tbody>
    </table>
   </p>
<!--               -->
   <p>
    <input value="Search" type="submit">&nbsp;
    <input value="Reset" type="reset">
<!--
    <input name="format" value="text" type="hidden">
    <input name="process" value="1" type="hidden">
-->
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
<!--               -->
 &nbsp; <br>
<b>Qualifying Parameters:</b> &nbsp; <i>(for Instrument)</i><p>
<!--    -->
<i>Observing Domain 1</i>: <br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Sun <input name="od1[]" value="Sun" type="checkbox"></input> &nbsp;&nbsp;
Mercury <input name="od1[]" value="Mercury" type="checkbox"></input> &nbsp;&nbsp;
Venus <input name="od1[]" value="Venus" type="checkbox"></input> &nbsp;&nbsp;
Earth <input name="od1[]" value="Earth" type="checkbox"></input> &nbsp;&nbsp;
<!--
Earth/L1 <input name="od1[]" value="Earth/L1" type="checkbox"></input> &nbsp;&nbsp;
-->
Mars <input name="od1[]" value="Mars" type="checkbox"></input> &nbsp;&nbsp;
Jupiter <input name="od1[]" value="Jupiter" type="checkbox"></input> &nbsp;&nbsp;
Saturn <input name="od1[]" value="Saturn" type="checkbox"></input> &nbsp;&nbsp;
<br>
<!--    -->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Heliosphere <input name="od1[]" value="heliosphere" type="checkbox"></input> &nbsp;&nbsp;
Planetary <input name="od1[]" value="planetary" type="checkbox"></input> &nbsp;&nbsp;
Comet <input name="od1[]" value="comet" type="checkbox"></input> &nbsp;&nbsp;
Heliopause <input name="od1[]" value="heliopause" type="checkbox"></input> &nbsp;&nbsp;
Galactic <input name="od1[]" value="galactic" type="checkbox"></input> &nbsp;&nbsp;
<br>
<!--    -->
<i>Observing Domain 2</i>: <br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<i>Solar</i>: &nbsp;&nbsp;
Interior <input name="od2[]" value="interior" type="checkbox"></input> &nbsp;&nbsp;
<!--
Disk <input name="od2[]" value="disk" type="checkbox"></input> &nbsp;&nbsp-->
Disk/inr. cor. <input name="od2[]" value="disk/inr. cor." type="checkbox"></input> &nbsp;&nbsp;
Outer corona <input name="od2[]" value="outer corona" type="checkbox"></input> &nbsp;&nbsp;
Disk/helios. <input name="od2[]" value="disk/helios." type="checkbox"></input> &nbsp;&nbsp;
Solar-wind <input name="od2[]" value="solar-wind" type="checkbox"></input> &nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i>Planetary</i>: &nbsp;&nbsp;
Environment <input name="od2[]" value="environment" type="checkbox"></input> &nbsp;&nbsp;
Magnetosphere <input name="od2[]" value="magneto" type="checkbox"></input> &nbsp;&nbsp;
<!--
Magneto/ionosphere <input name="od2[]" value="magneto/ionosphere" type="checkbox"></input> &nbsp;&nbsp;
-->
Ionosphere <input name="od2[]" value="ionosphere" type="checkbox"></input> &nbsp;&nbsp;
Aurora <input name="od2[]" value="aurora" type="checkbox"></input> &nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Interstellar <input name="od2[]" value="interstellar" type="checkbox"></input> &nbsp;&nbsp;

Energy release <input name="od2[]" value="energy release" type="checkbox"></input> &nbsp;&nbsp;
Structure <input name="od2[]" value="structure" type="checkbox"></input> &nbsp;&nbsp;
<p>
<!--    -->
<i>Instrument Type</i>: <br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Remote <input name="itype[]" value="remote" type="checkbox"></input> &nbsp;&nbsp;
In-situ <input name="itype[]" value="in-situ" type="checkbox"></input> &nbsp;&nbsp;
<br>
<!--    -->
<i>Observable Entity</i>: <br>
<table cellpadding=0 cellspacing=0>
	<tr>
		<td width="150">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Photons <input name="oe1[]" value="photons" type="checkbox"></input> 
</td>
		<td>
GMR <input name="oe2[]" value="gmr" type="checkbox"></input> &nbsp;&nbsp;
HXR <input name="oe2[]" value="hxr" type="checkbox"></input> &nbsp;&nbsp;
SXR <input name="oe2[]" value="sxr" type="checkbox"></input> &nbsp;&nbsp;
EUV <input name="oe2[]" value="euv" type="checkbox"></input> &nbsp;&nbsp;
UV <input name="oe2[]" value="uv" type="checkbox"></input> &nbsp;&nbsp;
visible <input name="oe2[]" value="visible" type="checkbox"></input> &nbsp;&nbsp; 
&mu;-wave <input name="oe2[]" value="microwave" type="checkbox"></input> &nbsp;&nbsp;
radio <input name="oe2[]" value="radio" type="checkbox"></input> &nbsp;&nbsp;
<br>
H-alpha <input name="oe2p[]" value="H-alpha" type="checkbox"></input> &nbsp;&nbsp;
He 10830 <input name="oe2p[]" value="He10830" type="checkbox"></input> &nbsp;&nbsp;
</td>
	</tr>
	<tr>
		<td width="150">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Particles <input name="oe1[]" value="particles" type="checkbox"></input> 
</td>
		<td>
Charged <input name="oe2[]" value="charged" type="checkbox"></input> &nbsp;&nbsp;
Energetic <input name="oe2[]" value="energ" type="checkbox"></input> &nbsp;&nbsp;
<!--
energ/neut <input name="oe2[]" value="energ/neut" type="checkbox"></input> &nbsp;&nbsp;
-->
Neutral <input name="oe2[]" value="neut" type="checkbox"></input> &nbsp;&nbsp;
Dust <input name="oe2[]" value="dust" type="checkbox"></input> &nbsp;&nbsp;
Cosmic-ray <input name="oe2p[]" value="cosmic-ray" type="checkbox"></input> &nbsp;&nbsp;
</td>
	</tr>
	<tr>
		<td width="150">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Fields <input name="oe1[]" value="fields" type="checkbox"></input> 
</td>
		<td>
Electric <input name="oe2[]" value="elect" type="checkbox"></input> &nbsp;&nbsp;
Magnetic <input name="oe2[]" value="magn" type="checkbox"></input> &nbsp;&nbsp;
<!--
elect/magn. <input name="oe2[]" value="uv" type="checkbox"></input> &nbsp;&nbsp;
-->
Gravity <input name="oe2[]" value="gravity" type="checkbox"></input> &nbsp;&nbsp;
</td>
	</tr>
</table>
<p>
<!--    -->
<!--
dust    ?????
-->
<!--
<i>Observable Entity</i>: <br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Photons <input name="oe1[]" value="photons" type="checkbox"></input> &nbsp;&nbsp;
Particles <input name="oe1[]" value="particles" type="checkbox"></input> &nbsp;&nbsp;
Fields <input name="oe1[]" value="fields" type="checkbox"></input> &nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Photons <input name="oe1[]" value="photons" type="checkbox"></input> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
GMR <input name="oe2[]" value="gmr" type="checkbox"></input> &nbsp;&nbsp;
HXR <input name="oe2[]" value="hxr" type="checkbox"></input> &nbsp;&nbsp;
SXR <input name="oe2[]" value="sxr" type="checkbox"></input> &nbsp;&nbsp;
EUV <input name="oe2[]" value="euv" type="checkbox"></input> &nbsp;&nbsp;
UV <input name="oe2[]" value="uv" type="checkbox"></input> &nbsp;&nbsp;
visible <input name="oe2[]" value="visible" type="checkbox"></input> &nbsp;&nbsp; 
&mu;-wave <input name="oe2[]" value="microwave" type="checkbox"></input> &nbsp;&nbsp;
radio <input name="oe2[]" value="radio" type="checkbox"></input> &nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Particles <input name="oe1[]" value="particles" type="checkbox"></input> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
charged  
energetic
energ/neut
neutral 
dust 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Fields <input name="oe1[]" value="fields" type="checkbox"></input> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
electric   
magnetic  
elect/magn.
gravity 
<p>
-->
<!--    -->
<i>Keywords</i>: <br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Imager <input name="key[]" value="imager" type="checkbox"></input> &nbsp;&nbsp;
Spectrometer <input name="key[]" value="spectrometer" type="checkbox"></input> &nbsp;&nbsp;
Polarimeter <input name="key[]" value="polarimeter" type="checkbox"></input> &nbsp;&nbsp;
Coronagraph <input name="key[]" value="coronagraph" type="checkbox"></input> &nbsp;&nbsp;
Magnetograph <input name="key[]" value="magnetograph" type="checkbox"></input> &nbsp;&nbsp;
Magnetometer <input name="key[]" value="magnetometer" type="checkbox"></input> &nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--
Radioheliograph <input name="key[]" value="radioheliograph" type="checkbox"></input> &nbsp;&nbsp;
-->
Oscillations <input name="key[]" value="oscillations" type="checkbox"></input> &nbsp;&nbsp;
Composition <input name="key[]" value="composition" type="checkbox"></input> &nbsp;&nbsp;
Irradiance <input name="key[]" value="irradiance" type="checkbox"></input> &nbsp;&nbsp;
Photometer <input name="key[]" value="photometer" type="checkbox"></input> &nbsp;&nbsp;
Radiometer <input name="key[]" value="radiometer" type="checkbox"></input> &nbsp;&nbsp;
   </p>
  </form>
<!--               -->
  <hr>
<!--        Free SQL Query           -->
  <form method="get" action="helio-ics_soap2.php" target="_blank">
   <p></p><h3>Free SQL query</h3>
   <input name="qtype" value="0" type="hidden">
   <p>
   <textarea name="sql" cols="70" rows="8">SELECT name,loc_gen,loc_p1,loc_p2,sat_id FROM observatory WHERE loc_gen='ERO' OR loc_gen='LPO' LIMIT 100</textarea>
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
     <i>Examples of how to use SQL on the HELIO HEC Server</i>
    </a>
   </p>

-->
   <hr>
<em><small>Based on the EGSO SEC GUI developed by 
<a href="http://radiosun.ts.astro.it/">INAF - Trieste Astronomical Observatory</a></small><em>
  </form>
 </body>
</html>