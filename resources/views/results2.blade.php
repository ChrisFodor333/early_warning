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

        .page-title {
          display: none;
        }

        .pagetitle_style_2 {
          display: none;
        }

        .flat-top {
          display: none;
        }


        .container {
          display: none;
        }
    </style>


<style>

@media (max-width: 1024px) {
  .tablet {
    margin-left: 80px;
    width: 100%;
  }
}

#printOnly {
    display: none;
}

@media print {
    #printOnly {
        display: block;
    }
}

@media not print {
    #curyear{
       margin-left:120px;
    }
}


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
    width: 1100px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
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

.con {
  position: relative;
  text-align: center;
  color: white;

}

#rcorners1 {
  border-radius: 25px;
  padding: 10px;
  width: 200px;
  height: 150px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  font-weight: bold;
  font-size: 30px;
  transform: translate(-50%, -50%);
}

@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

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



.modelname {
  width:200px;
  text-align:center;
  display:block;
  background-color: transparent;
  border: 1px solid transparent;
  margin-right: 10px;
  margin-left: 85px;
  margin-bottom: 1px;
  float:left;
}

input[type=image] {
  margin: 20px;
  width: 70px;
  height: 70px;
}



@media (max-width: 1080px) {

  .modelname {
    width:200px;
    text-align:center;
    display:block;
    background-color: transparent;
    border: 1px solid transparent;
    margin-right: 10px;
    margin-left: 85px;
    margin-bottom: 1px;
    float:left;
  }
}

</style>
<!-- Page title -->




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




	<h2 id="curyear" style="text-align:center; margin-top: 5px;">The Results of the Model for the year <?php echo $currentyear; ?></h2>
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
			<h2 class="elementor-heading-title elementor-size-default">Here you can find the results of the model based on the values from the input form.</h2>

    	</div>
        <h3>Your company is more successful than <?php echo $percentage; ?>% of the <?php echo $totalrows; ?> tested companies in <?php echo $country; ?></h3>
				</div>

					</div>
		</div>
							</div>
		</section>


				<section class="elementor-section elementor-inner-section elementor-element elementor-element-4aee4d5b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4aee4d5b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5537107e" data-id="5537107e" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-3199350c elementor-widget elementor-widget-image" data-id="3199350c" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
          <div class="con">
					<img id="rcorners1" src="<?php echo $altmancolor2; ?>" title="background.jpg" alt="background.jpg" />
          <div class="centered"><?php echo $altman; ?></div>
        </div>
                            	</div>
				</div>

				<div class="elementor-element elementor-element-7854ae06 elementor-widget elementor-widget-heading" data-id="7854ae06" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
        <div class="modelname">
			<h2 class="tablet elementor-heading-title  elementor-size-default">Scoring Parameter 1</h2>		</div>
				</div>
      </div>

					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5b45f643" data-id="5b45f643" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-19073a40 elementor-widget elementor-widget-image" data-id="19073a40" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
          <div class="con">
          <img id="rcorners1" src="<?php echo $indexcolor2; ?>" title="background.jpg" alt="background.jpg" />
          <div class="centered"><?php echo $in05; ?></div>
        </div>
                              </div>
				</div>

				<div class="elementor-element elementor-element-9019ec0 elementor-widget elementor-widget-heading" data-id="9019ec0" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
        <div class="modelname">
			<h2 class="tablet elementor-heading-title elementor-size-default">Scoring Parameter 2</h2>		</div>
      </div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4faa1bb8" data-id="4faa1bb8" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-1a8aef45 elementor-widget elementor-widget-image" data-id="1a8aef45" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
          <div class="con">
          <img id="rcorners1" src="<?php echo $quicktestcolor2; ?>" title="background.jpg" alt="background.jpg" />
          <div class="centered"><?php echo $quicktest; ?></div>
        </div>
                              </div>
				</div>

				<div class="elementor-element elementor-element-6f21d3b1 elementor-widget elementor-widget-heading" data-id="6f21d3b1" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
              <div class="modelname">
			<h2 class="tablet elementor-heading-title elementor-size-default">Scoring Parameter 3</h2>		</div>
    </div>
				</div>

					</div>
		</div>

							</div>
		</section>
    <section class="elementor-section elementor-inner-section elementor-element elementor-element-4aee4d5b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4aee4d5b" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5537107e" data-id="5537107e" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-3199350c elementor-widget elementor-widget-image" data-id="3199350c" data-element_type="widget" data-widget_type="image.default">
    <div class="elementor-widget-container">
      <div class="con">
      <img id="rcorners1" src="<?php echo $bonitycolor2; ?>" title="background.jpg" alt="background.jpg" />
      <div class="centered"><?php echo $bonity; ?></div>
    </div>
                          </div>
    </div>

    <div class="elementor-element elementor-element-7854ae06 elementor-widget elementor-widget-heading" data-id="7854ae06" data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
    <div class="modelname">
  <h2 class="tablet elementor-heading-title elementor-size-default">Scoring Parameter 4</h2>		</div>
    </div>
  </div>

      </div>
</div>
    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5b45f643" data-id="5b45f643" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-19073a40 elementor-widget elementor-widget-image" data-id="19073a40" data-element_type="widget" data-widget_type="image.default">
    <div class="elementor-widget-container">
      <div class="con">
      <img id="rcorners1" src="<?php echo $tafflercolor2; ?>" title="background.jpg" alt="background.jpg" />
      <div class="centered"><?php echo $taffler; ?></div>
    </div>
                          </div>
    </div>

    <div class="elementor-element elementor-element-9019ec0 elementor-widget elementor-widget-heading" data-id="9019ec0" data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
    <div class="modelname">
  <h2 class="tablet elementor-heading-title elementor-size-default">Scoring Parameter 5</h2>		</div>
  </div>
    </div>
      </div>
</div>
    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4faa1bb8" data-id="4faa1bb8" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-1a8aef45 elementor-widget elementor-widget-image" data-id="1a8aef45" data-element_type="widget" data-widget_type="image.default">
    <div class="elementor-widget-container">
      <div class="con">
      <img id="rcorners1" src="<?php echo $binkertcolor2; ?>" title="background.jpg" alt="background.jpg" />
      <div class="centered"><?php echo $binkert; ?></div>
    </div>
                          </div>
    </div>

    <div class="elementor-element elementor-element-6f21d3b1 elementor-widget elementor-widget-heading" data-id="6f21d3b1" data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
          <div class="modelname">
  <h2 class="tablet elementor-heading-title elementor-size-default">Scoring Parameter 6</h2>		</div>
</div>
    </div>

      </div>
</div>

          </div>

</section>
<div class="success-msg" style="display: <?php echo $greenwarning;?>;">
  <p><i class="fa fa-check"></i>
  According to the information provided, your company is <b>out of danger.</b> <br />
  Using the methodology of selected prediction models and company???s financial statements, none of the six prediction models detected the risk of bankruptcy or financial distress. -> <b> The company is facing no bankruptcy nor risk of financial distress.</b>
</p>
</div>

<div class="warning-msg" style="display: <?php echo $orangewarning;?>;">
  <p><i class="fa fa-warning"></i>
  According to the information provided, your company is in <b> the financial distress of the I. degree.</b> <br />
  Using the methodology of selected prediction models and company???s financial statements, the company is facing <b>the financial distress of the first degree ??? low risk of bankruptcy</b> (maximum 2 of the six prediction models detected risk of bankruptcy or financial distress).
  <br />  <?php echo $help; ?> <b><?php echo $help2; ?></b>
  </p>
</div>

<div class="error-msg" style="display: <?php echo $redwarning;?>;">
  <p><i class="fa fa-times-circle"></i>
  According to the information provided, your company is in the <b><?php echo $dist; ?>.</b> <br />
  Using the methodology of selected prediction models and company???s financial statements, the company is facing <b><?php echo $distress; ?></b> <?php echo $distress2; ?>
  <br />  <?php echo $help; ?> <b><?php echo $help2; ?></b>
</p>
</div>

<div class="warning-msg" style="display: <?php echo $nadisplay;?>;">
  <i class="fa fa-warning"></i>
  Not all information has been filled in when sending the data or an index cannot be calculated, which can result in lower accuracy of the model.
</div>


  </div>
					</div>
		</div>
							</div>
		</section>
						</div>
					</div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- #content -->

    <div id="printOnly">
        <h3 style="text-align: center;">Your company is more successful than <?php echo $percentage; ?>% of the tested companies</h3>
    <table class="styled-table">
        <thead>
            <tr>
                <th>CREDIT SCORING</th>
                <th>VALUE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Scoring Parameter 1</td>
                <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $altmancolor; ?>; color:white;"><?php echo $altman; ?></span></td>
            </tr>
            <tr class="active-row">
                <td>Scoring Parameter 2</td>
                <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $in05color; ?>; color:white;"><?php echo $in05; ?></span></td>
            </tr>
            <tr>
                <td>Scoring Parameter 3</td>
                  <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $quicktestcolor; ?>; color:white;"><?php echo $quicktest; ?></span></td>
            </tr>
            <tr class="active-row">
                <td>Scoring Parameter 4</td>
          <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $bonitycolor; ?>; color:white;"><?php echo $bonity; ?></span></td>
            </tr>
            <tr>
                <td>Scoring Parameter 5</td>
              <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $tafflercolor; ?>; color:white;"><?php echo $taffler; ?></span></td>
            </tr>
            <tr class="active-row">
                <td>Scoring Parameter 6</td>
              <td style="color:white;"><span id="rcorners1" style="background-color: <?php echo $binkertcolor; ?>; color:white;"><?php echo $binkert; ?></span></td>
            </tr>
        </tbody>
    </table>


    <div class="success-msg" style="display: <?php echo $greenwarning;?>;">
      <i class="fa fa-check"></i>
      According to the information provided, your company is <b>out of danger.</b> <br />
      Using the methodology of selected prediction models and company???s financial statements, none of the six prediction models detected the risk of bankruptcy or financial distress. -> <b> The company is facing no bankruptcy nor risk of financial distress.</b>
    </div>

    <div class="warning-msg" style="display: <?php echo $orangewarning;?>;">
      <i class="fa fa-warning"></i>
      According to the information provided, your company is in <b> the financial distress of the I. degree.</b> <br />
      Using the methodology of selected prediction models and company???s financial statements, the company is facing <b>the financial distress of the first degree ??? low risk of bankruptcy</b> (maximum 2 of the six prediction models detected risk of bankruptcy or financial distress).
      <br />  <?php echo $help; ?> <b><?php echo $help2; ?></b>
    </div>

    <div class="error-msg" style="display: <?php echo $redwarning;?>;">
      <i class="fa fa-times-circle"></i>
      According to the information provided, your company is in the <b><?php echo $dist; ?>.</b> <br />
      Using the methodology of selected prediction models and company???s financial statements, the company is facing <b><?php echo $distress; ?></b> <?php echo $distress2; ?>
      <br />  <?php echo $help; ?> <b><?php echo $help2; ?></b>
    </div>

    <div class="warning-msg" style="display: <?php echo $nadisplay;?>;">
      <i class="fa fa-warning"></i>
      Not all information has been filled when sending the data or an index cannot be calculated, which can result in the lower accuracy of the model.
    </div>
  </div>


<div style="width:1100px; margin:0 auto;">
<button type="button" class="collapsible">Machine Learning Model</button>
<div class="content">
  <p>According to our machine learning model, your company might be <b><?php echo $classification; ?><b/></p>
</div>
</div>

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




@include('model_footer')
