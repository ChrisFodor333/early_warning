@include('header')

<style type="text/css" media="print">
        header
        {
            display: none;
        }
        footer {
           display: none;
        }

        input {
          display: none;
        }
        head {
          display:none;
        }
        .bottom {
          display: none;
        }
        .container {
          display: none;
        }
    </style>

<style id="tablestyle">

.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}


.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    max-width: 1100px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

#rcorners1 {
  border-radius: 25px;
  padding: 10px;
  width: 200px;
  height: 150px;
}

@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

p {
  font-weight: normal;
}

.info-msg,
.success-msg,
.warning-msg,
.error-msg {
  margin-top: 20px;
  padding: 10px;
  margin-left: auto;
  margin-right: auto;
  width: 1100px;
  border-radius: 3px 3px 3px 3px;

}
.success-msg {
  color: white;
  background-color: #009879;
}
.warning-msg {
  color: #9F6000;
  background-color: #FEEFB3;
}
.error-msg {
  color: #D8000C;
  background-color: #FFBABA;
}



.styled-table thead tr {
    background-color: #164289;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
    padding -8px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #164289;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    /*color: #009879; */
}

input[type=image] {
  margin: 20px;
  width: 70px;
  height: 70px;
}

</style>

<div class="page-title pagetitle_style_2">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-title-container">
                                    <div class="page-title-heading">
                        <h1 class="title">Results</h1>
                    </div><!-- /.page-title-captions -->


		<div class="breadcrumb-trail breadcrumbs">
			<span class="trail-browse"></span> <span class="trail-begin"><a href="<?php echo url('/'); ?>" title="Home" rel="home">Home</a></span>
			 <span class="sep">></span> <span class="trail-end">Results</span>
		</div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->
<div style="float:right;">
<input type="image" value="PRINT"  src="/early_warning/assets/content/print.png"
onmouseover="this.src='/early_warning/assets/content/printblack.png';"
onmouseout="this.src='/early_warning/assets/content/print.png';;"
onclick="window.print();">
</div>
<div class="container" >
  <div class="row row-wrapper">
<div data-elementor-type="wp-page" data-elementor-id="1163" class="elementor elementor-1163" data-elementor-settings="[]">
          <div class="elementor-section-wrap">
          <section class="elementor-section elementor-top-section elementor-element elementor-element-17fd2eaa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="17fd2eaa" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4db0081d" data-id="4db0081d" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-1315ff0d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1315ff0d" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4466babb" data-id="4466babb" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-56c7fb24 elementor-widget elementor-widget-heading" data-id="56c7fb24" data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
  <h2 class="elementor-heading-title elementor-size-default">The Results of the Model</h2>		</div>
    </div>
    <div class="elementor-element elementor-element-78a60114 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="78a60114" data-element_type="widget" data-widget_type="divider.default">
    <div class="elementor-widget-container">
      <div class="elementor-divider">
  <span class="elementor-divider-separator">
        </span>
</div>
    </div>
    </div>
    <div class="elementor-element elementor-element-7b14ce94 elementor-widget elementor-widget-heading" data-id="7b14ce94" data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
  <h2 class="elementor-heading-title elementor-size-default">Here you can find the results of the model based on the values from the input form.</h2>		</div>

    </div>

      </div>
</div>
          </div>
</section>
</div>
      </div>
</div>
          </div>
</section>
        </div>
      </div>

        </div><!-- /.row -->
  <h3 style="text-align: center;">Your company is more successful than <?php echo $percentage; ?>% of the tested companies in <?php echo $country; ?></h3>
<body>

<table class="styled-table" id="results">
    <thead>
        <tr>
            <th>CREDIT SCORING</th>
            <th><?php echo $currentyear; ?></th>
            <th><?php echo $currentyear-1; ?></th>
            <th><?php echo $currentyear-2; ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Scoring Parameter 1</td>
            <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $altmancolor; ?>; color:white;"><?php echo $altman; ?></span></td>
            <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $altmancolor2; ?>; color:white;"><?php echo $altman2; ?></span></td>
            <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $altmancolor1; ?>; color:white;"><?php echo $altman1; ?></span></td>
        </tr>
        <tr class="active-row">
            <td>Scoring Parameter 2</td>
            <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $in05color; ?>; color:white;"><?php echo $in05; ?></span></td>
            <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $in05color2; ?>; color:white;"><?php echo $in052; ?></span></td>
            <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $in05color1; ?>; color:white;"><?php echo $in051; ?></span></td>
        </tr>
        <tr>
            <td>Scoring Parameter 3</td>
              <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $quicktestcolor; ?>; color:white;"><?php echo $quicktest; ?></span></td>
              <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $quicktestcolor2; ?>; color:white;"><?php echo $quicktest2; ?></span></td>
              <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $quicktestcolor1; ?>; color:white;"><?php echo $quicktest1; ?></span></td>
        </tr>
        <tr class="active-row">
            <td>Scoring Parameter 4</td>
      <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $bonitycolor; ?>; color:white;"><?php echo $bonity; ?></span></td>
      <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $bonitycolor2; ?>; color:white;"><?php echo $bonity2; ?></span></td>
      <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $bonitycolor1; ?>; color:white;"><?php echo $bonity1; ?></span></td>
        </tr>
        <tr>
            <td>Scoring Parameter 5</td>
          <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $tafflercolor; ?>; color:white;"><?php echo $taffler; ?></span></td>
          <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $tafflercolor2; ?>; color:white;"><?php echo $taffler2; ?></span></td>
          <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $tafflercolor1; ?>; color:white;"><?php echo $taffler1; ?></span></td>
        </tr>
        <tr class="active-row">
            <td>Scoring Parameter 6</td>
          <td colspan="3" style="color:white;"><span id="rcorners1" style="background-color: <?php echo $binkertcolor; ?>; color:white;"><?php echo $binkert; ?></span></td>
        </tr>
    </tbody>
</table>


<div class="success-msg" style="display: <?php echo $greenwarning;?>;">
  <p><i class="fa fa-check"></i>
  According to the information provided, your company is <b>out of danger<b/> in the year of <?php echo $currentyear; ?>. <br />
  Using the methodology of selected prediction models and company’s financial statements, none of the six prediction models detected the risk of bankruptcy or financial distress. -> <b> The company is facing no bankruptcy nor risk of financial distress.</b>
</p>
</div>

<div class="warning-msg" style="display: <?php echo $orangewarning;?>;">
  <p><i class="fa fa-warning"></i>
  According to the information provided, your company is in <b> the financial distress of the I. degree</b> in the year of <?php echo $currentyear; ?>. <br />
  Using the methodology of selected prediction models and company’s financial statements, the company is facing <b>the financial distress of the first degree – low risk of bankruptcy</b> (maximum 2 of the six prediction models detected risk of bankruptcy or financial distress).
  </p>
</div>

<div class="error-msg" style="display: <?php echo $redwarning;?>;">
  <p><i class="fa fa-times-circle"></i>
  According to the information provided, your company is in the <b><?php echo $dist; ?></b> in the year of <?php echo $currentyear; ?>. <br />
  Using the methodology of selected prediction models and company’s financial statements, the company is facing <b><?php echo $distress; ?></b> <?php echo $distress_2; ?>
</p>
</div>

<div class="warning-msg" style="display: <?php echo $nadisplay;?>;">
  <i class="fa fa-warning"></i>
  Not all information has been filled in when sending the data or an index cannot be calculated, which can result in lower accuracy of the model.
</div>





<div class="success-msg" style="display: <?php echo $greenwarning2;?>;">
  <p><i class="fa fa-check"></i>
  According to the information provided, your company is <b>out of danger<b/> in the year of <?php echo $currentyear-1; ?>. <br />
  Using the methodology of selected prediction models and company’s financial statements, none of the six prediction models detected the risk of bankruptcy or financial distress. -> <b> The company is facing no bankruptcy nor risk of financial distress.</b>
</p>
</div>

<div class="warning-msg" style="display: <?php echo $orangewarning2;?>;">
  <p><i class="fa fa-warning"></i>
  According to the information provided, your company is in <b> the financial distress of the I. degree</b> in the year of <?php echo $currentyear-1; ?>. <br />
  Using the methodology of selected prediction models and company’s financial statements, the company is facing <b>the financial distress of the first degree – low risk of bankruptcy</b> (maximum 2 of the six prediction models detected risk of bankruptcy or financial distress).
  </p>
</div>

<div class="error-msg" style="display: <?php echo $redwarning2;?>;">
  <p><i class="fa fa-times-circle"></i>
  According to the information provided, your company is in the <b><?php echo $dist2; ?></b> in the year of <?php echo $currentyear-1; ?>. <br />
  Using the methodology of selected prediction models and company’s financial statements, the company is facing <b><?php echo $distress2; ?></b> <?php echo $distress2_2; ?>
</p>
</div>

<div class="warning-msg" style="display: <?php echo $nadisplay2;?>;">
  <i class="fa fa-warning"></i>
  Not all information has been filled in when sending the data or an index cannot be calculated, which can result in lower accuracy of the model.
</div>







<div class="success-msg" style="display: <?php echo $greenwarning1;?>;">
  <p><i class="fa fa-check"></i>
  According to the information provided, your company is <b>out of danger<b/> in the year of <?php echo $currentyear-2; ?>. <br />
  Using the methodology of selected prediction models and company’s financial statements, none of the six prediction models detected the risk of bankruptcy or financial distress. -> <b> The company is facing no bankruptcy nor risk of financial distress.</b>
</p>
</div>

<div class="warning-msg" style="display: <?php echo $orangewarning1;?>;">
  <p><i class="fa fa-warning"></i>
  According to the information provided, your company is in <b> the financial distress of the I. degree</b> in the year of <?php echo $currentyear-2; ?>. <br />
  Using the methodology of selected prediction models and company’s financial statements, the company is facing <b>the financial distress of the first degree – low risk of bankruptcy</b> (maximum 2 of the six prediction models detected risk of bankruptcy or financial distress).
  </p>
</div>

<div class="error-msg" style="display: <?php echo $redwarning1;?>;">
  <p><i class="fa fa-times-circle"></i>
  According to the information provided, your company is in the <b><?php echo $dist1; ?></b> in the year of <?php echo $currentyear-2; ?>. <br />
  Using the methodology of selected prediction models and company’s financial statements, the company is facing <b><?php echo $distress1; ?></b> <?php echo $distress1_2; ?>
</p>
</div>

<div class="warning-msg" style="display: <?php echo $nadisplay1;?>;">
  <i class="fa fa-warning"></i>
  Not all information has been filled in when sending the data or an index cannot be calculated, which can result in lower accuracy of the model.
</div>

<div class="warning-msg">
<i class="fa fa-warning"></i>
<?php echo $help; ?> <b><?php echo $help2; ?></b>
</div>

<!--
<br /> <br />

<div style="width:1100px; margin:0 auto;">
<button type="button" class="collapsible">Machine Learning Model</button>
<div class="content">
  <p>According to our machine learning model, your company might be <b><?php echo $classification; ?><b/></p>
</div>
</div>
-->

<br> <br>



<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>


</body>
@include('model_footer')
