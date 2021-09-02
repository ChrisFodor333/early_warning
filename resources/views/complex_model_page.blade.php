@include('header')

<!-- Page Title -->



<style>



  #curyear {
    height: 53px;
  }


    @media (min-width: 880px) {
      #contentmain {
      margin-left: 0px;
      width: 100%;
      padding: 10px;
      text-align: center;
      }

      .yearlabel {
        display: none;
      }
      .yearlabel1 {
        display: none;
      }
      .yearlabel2 {
        display: none;
      }

      #datet {
        margin-left: 75px;
        text-align: center;
      }
    }

  @media (max-width: 1110px) {
    .tablet {
      margin-left: 12px;
      width: 100%;
    }
    .yearlabel {
      display: block;
    }
    .yearlabel1 {
        display: block;
    }
    .yearlabel2 {
      display: block;
    }

    #datet {
        display:none;
    }
  }





  @media (min-width: 1025px) {
    #contentmain {
    margin-left: 0px;
    width: 100%;
    padding: 10px;
    text-align: center;
    }

    .yearlabel {
      display: none;
    }
    .yearlabel1 {
      display: none;
    }
    .yearlabel2 {
      display: none;
    }

    #datet {
      margin-left: 75px;
      text-align: center;
    }
  }

  @media (min-width: 1365px) {
    #datet {
      margin-left: 100px;
      text-align: center;
    }
  }




 label {
   cursor: help;
 }



  .tt1 {
    position: relative;
    display: inline-block;
  }

  .tt1 .tooltiptext {
  visibility: hidden;
  width: 250px;
  background-color: #164289;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 5px 5px 5px;
  position: absolute;
  z-index: 1;
  bottom: 100%;
  left: 44px;
  margin-left: -44px;

  /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
  opacity: 0;
  transition: opacity 1s;
}

.tt1:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

.mobile {
display: none;
}
@media (max-width: 767px) {
.mobile {
  display: block;
}
.yearlabel {
  display: block;
}
.yearlabel1 {
    display: block;
}
.yearlabel2 {
  display: block;
}

#datet {
    display:none;
}
.tablet {
  margin-left: 0px;
  width: 100%;
}
}

 h6 {
   margin-left: 15px;
 }

  </style>


<!-- Page title -->
<div class="page-title pagetitle_style_2">
  <div class="overlay"></div>
  <div class="container">
      <div class="row">
          <div class="col-md-12 page-title-container">
                                  <div class="page-title-heading">
                      <h1 class="title">Input Form</h1>
                  </div><!-- /.page-title-captions -->


  <div class="breadcrumb-trail breadcrumbs">
    <span class="trail-browse"></span> <span class="trail-begin"><a href="<?php echo url('/'); ?>" title="Home" rel="home">Home</a></span>
     <span class="sep">></span> <span class="trail-end">Input Form</span>
  </div>
          </div>
      </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.page-title -->
<div id="contentmain" class="page-wrap ">
  <div class="container content-wrapper">
    <div class="row row-wrapper">
  <div data-elementor-type="wp-page" data-elementor-id="1180" class="elementor elementor-1180" data-elementor-settings="[]">
            <div class="elementor-section-wrap">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-45fa9822 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="45fa9822" data-element_type="section">
          <div class="elementor-container elementor-column-gap-default">
      <div class="" data-id="4b17909a" data-element_type="column">
    <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-554a8463 elementor-widget elementor-widget-metform" data-id="554a8463" data-element_type="widget" data-widget_type="metform.default">
      <div class="elementor-widget-container">
    <div id="mf-response-props-id-680" data-editswitchopen="" data-erroricon="fas fa-exclamation-triangle" data-successicon="fas fa-check" data-messageposition="top" class="   mf-scroll-top-no">
  <div class="formpicker_warper formpicker_warper_editable" data-metform-formpicker-key="680" >

    <div class="elementor-widget-container">

  <div
    id="metform-wrap-554a8463-680"
    class="mf-form-wrapper"
    data-form-id="680"
    data-action="{{  action('App\\Http\\Controllers\ModelControllerComplex@calculate')  }}"
    data-wp-nonce="c96f8ba55c"
    data-form-nonce="1637a76403"
    data-stop-vertical-effect=""
    ></div>




      <script class="mf-template">

      function myfunction() {
        document.querySelector('#curyeartext').innerHTML = document.querySelector('#curyear').value;
        document.querySelector('#lastyear').innerHTML = document.querySelector('#curyear').value-1;
        document.querySelector('#yearbefore').innerHTML = document.querySelector('#curyear').value-2;
        document.querySelector('#extra').innerHTML = "Additional Information for the Year of " + Number(document.querySelector('#curyear').value-1);

        if(document.querySelector('#curyear').value >= 2014) {
          document.querySelector('.merge').innerHTML = "Revenue (Services)";
          document.querySelector('#mergehide').style.display = "block";
          document.querySelector('.mergeinput').placeholder = "Revenue (Services)";
        } else {
          document.querySelector('.merge').innerHTML = "Revenue (P and S)";
          document.querySelector('#mergehide').style.display = "none";
          document.querySelector('.mergeinput').placeholder = "Revenue (P and S)";
        }


        if(document.querySelector('#curyear').value-1 >= 2014) {
          document.querySelector('.merge2').innerHTML = "Revenue (Services)";
          document.querySelector('#mergehide2').style.display = "block";
          document.querySelector('.mergeinput2').placeholder = "Revenue (Services)";
        } else {
          document.querySelector('.merge2').innerHTML = "Revenue (P and S)";
          document.querySelector('#mergehide2').style.display = "none";
          document.querySelector('.mergeinput2').placeholder = "Revenue (P and S)";
        }


        if(document.querySelector('#curyear').value-2 >= 2014) {
          document.querySelector('.merge3').innerHTML = "Revenue (Services)";
          document.querySelector('#mergehide3').style.display = "block";
          document.querySelector('.mergeinput3').placeholder = "Revenue (Services)";
        } else {
          document.querySelector('.merge3').innerHTML = "Revenue (P and S)";
          document.querySelector('#mergehide3').style.display = "none";
          document.querySelector('.mergeinput3').placeholder = "Revenue (P and S)";
        }


        document.querySelectorAll('.yearlabel').forEach(function(field) {
            field.innerHTML = "(" + Number(document.querySelector('#curyear').value) + ")";
        });

        document.querySelectorAll('.yearlabel2').forEach(function(field) {
            field.innerHTML = "(" + Number(document.querySelector('#curyear').value-1) + ")";
        });


        document.querySelectorAll('.yearlabel1').forEach(function(field) {
            field.innerHTML = "(" + Number(document.querySelector('#curyear').value-2) + ")";
        });

        if(document.querySelector('#curyear').value >= 2014) {
            document.querySelector('#tt2').innerHTML = "Row 033 in Balance Sheet";
            document.querySelector('#tt3').innerHTML = "Row 034 in Balance Sheet";
            document.querySelector('#tt4').innerHTML = "Row 071 in Balance Sheet";
            document.querySelector('#tt5').innerHTML = "Row 074 in Balance Sheet";
            document.querySelector('#tt6').innerHTML = "Row 080 in Balance Sheet";
            document.querySelector('#tt7').innerHTML = "Row 097 in Balance Sheet";
            document.querySelector('#tt8').innerHTML = "Row 101 in Balance Sheet";
            document.querySelector('#tt9').innerHTML = "Row 136 in Balance Sheet";
            document.querySelector('#tt10').innerHTML = "Row 122 in Balance Sheet";
            document.querySelector('#tt11').innerHTML = "Row 141 in Balance Sheet";
            document.querySelector('#tt12').innerHTML = "Row 03 in Income Statement";
            document.querySelector('#tt14').innerHTML = "Row 21 in Income Statement";
            document.querySelector('#tt15').innerHTML = "Row 08 in Income Statement";
            document.querySelector('#tt17').innerHTML = "Row 46 in Income Statement";
            document.querySelector('#tt18').innerHTML = "Row 49 in Income Statement";
            document.querySelector('#tt19').innerHTML = "Row 56 in Income Statement";
            document.querySelector('#tt20').innerHTML = "Row 139 in Balance Sheet";
            document.querySelector('#tt21').innerHTML = "Row 140 in Balance Sheet";
            document.querySelector('#tt22').innerHTML = "Row 53 in Balance Sheet";
            document.querySelector('#tt20').innerHTML = "Row 139 in Balance Sheet";
            document.querySelector('#tt21').innerHTML = "Row 140 in Balance Sheet";
            document.querySelector('#tt22').innerHTML = "Row 53 in Balance Sheet";
          } else {
            document.querySelector('#tt2').innerHTML = "Row 030 in Balance Sheet";
            document.querySelector('#tt3').innerHTML = "Row 031 in Balance Sheet";
            document.querySelector('#tt4').innerHTML = "Row 055 in Balance Sheet";
            document.querySelector('#tt5').innerHTML = "Row 061 in Balance Sheet";
            document.querySelector('#tt6').innerHTML = "Row 067 in Balance Sheet";
            document.querySelector('#tt7').innerHTML = "Row 084 in Balance Sheet";
            document.querySelector('#tt8').innerHTML = "Row 088 in Balance Sheet";
            document.querySelector('#tt9').innerHTML = "Row 089 in Balance Sheet";
            document.querySelector('#tt10').innerHTML = "Row 106 in Balance Sheet";
            document.querySelector('#tt11').innerHTML = "Row 121 in Balance Sheet";
            document.querySelector('#tt12').innerHTML = "Row 01 in Income Statement";
            document.querySelector('#tt14').innerHTML = "Row 18 in Income Statement";
            document.querySelector('#tt15').innerHTML = "Row 19 in Income Statement";
            document.querySelector('#tt17').innerHTML = "Row 28 in Income Statement";
            document.querySelector('#tt18').innerHTML = "Row 39 in Income Statement";
            document.querySelector('#tt19').innerHTML = "Row 59 in Income Statement";
            document.querySelector('#tt20').innerHTML = "Row 120 in Balance Sheet";
            document.querySelector('#tt21').innerHTML = "Row 117 in Balance Sheet";
            document.querySelector('#tt22').innerHTML = "Row 46 in Balance Sheet";
          }


      if(document.querySelector('#curyear').value-1 >= 2014) {
        document.querySelector('#tt2a').innerHTML = "Row 033 in Balance Sheet";
        document.querySelector('#tt3a').innerHTML = "Row 034 in Balance Sheet";
        document.querySelector('#tt4a').innerHTML = "Row 071 in Balance Sheet";
        document.querySelector('#tt5a').innerHTML = "Row 074 in Balance Sheet";
        document.querySelector('#tt6a').innerHTML = "Row 080 in Balance Sheet";
        document.querySelector('#tt7a').innerHTML = "Row 097 in Balance Sheet";
        document.querySelector('#tt8a').innerHTML = "Row 101 in Balance Sheet";
        document.querySelector('#tt9a').innerHTML = "Row 136 in Balance Sheet";
        document.querySelector('#tt10a').innerHTML = "Row 122 in Balance Sheet";
        document.querySelector('#tt11a').innerHTML = "Row 141 in Balance Sheet";
        document.querySelector('#tt12a').innerHTML = "Row 03 in Income Statement";
        document.querySelector('#tt14a').innerHTML = "Row 21 in Income Statement";
        document.querySelector('#tt15a').innerHTML = "Row 08 in Income Statement";
        document.querySelector('#tt17a').innerHTML = "Row 46 in Income Statement";
        document.querySelector('#tt18a').innerHTML = "Row 49 in Income Statement";
        document.querySelector('#tt19a').innerHTML = "Row 56 in Income Statement";

        document.querySelector('#tt20a').innerHTML = "Row 139 in Balance Sheet";
        document.querySelector('#tt21a').innerHTML = "Row 140 in Balance Sheet";
        document.querySelector('#tt22a').innerHTML = "Row 53 in Balance Sheet";

        document.querySelector('#tt23a').innerHTML = "Row 102 in Balance Sheet";
        document.querySelector('#tt24a').innerHTML = "Row 121 in Balance Sheet";
        document.querySelector('#tt25a').innerHTML = "Row 28 in Balance Sheet";

      } else {
        document.querySelector('#tt2a').innerHTML = "Row 030 in Balance Sheet";
        document.querySelector('#tt3a').innerHTML = "Row 031 in Balance Sheet";
        document.querySelector('#tt4a').innerHTML = "Row 055 in Balance Sheet";
        document.querySelector('#tt5a').innerHTML = "Row 061 in Balance Sheet";
        document.querySelector('#tt6a').innerHTML = "Row 067 in Balance Sheet";
        document.querySelector('#tt7a').innerHTML = "Row 084 in Balance Sheet";
        document.querySelector('#tt8a').innerHTML = "Row 088 in Balance Sheet";
        document.querySelector('#tt9a').innerHTML = "Row 089 in Balance Sheet";
        document.querySelector('#tt10a').innerHTML = "Row 106 in Balance Sheet";
        document.querySelector('#tt11a').innerHTML = "Row 121 in Balance Sheet";
        document.querySelector('#tt12a').innerHTML = "Row 01 in Income Statement";
        document.querySelector('#tt14a').innerHTML = "Row 18 in Income Statement";
        document.querySelector('#tt15a').innerHTML = "Row 19 in Income Statement";
        document.querySelector('#tt17a').innerHTML = "Row 28 in Income Statement";
        document.querySelector('#tt18a').innerHTML = "Row 39 in Income Statement";
        document.querySelector('#tt19a').innerHTML = "Row 59 in Income Statement";

        document.querySelector('#tt20a').innerHTML = "Row 120 in Balance Sheet";
        document.querySelector('#tt21a').innerHTML = "Row 117 in Balance Sheet";
        document.querySelector('#tt22a').innerHTML = "Row 46 in Balance Sheet";
        document.querySelector('#tt23a').innerHTML = "Row 094 in Balance Sheet";
        document.querySelector('#tt24a').innerHTML = "Row 119 in Balance Sheet";
        document.querySelector('#tt25a').innerHTML = "Row 11 in Balance Sheet";
      }


      if(document.querySelector('#curyear').value-2 >= 2014) {
            document.querySelector('#tt2b').innerHTML = "Row 033 in Balance Sheet";
            document.querySelector('#tt3b').innerHTML = "Row 034 in Balance Sheet";
            document.querySelector('#tt4b').innerHTML = "Row 071 in Balance Sheet";
            document.querySelector('#tt5b').innerHTML = "Row 074 in Balance Sheet";
            document.querySelector('#tt6b').innerHTML = "Row 080 in Balance Sheet";
            document.querySelector('#tt7b').innerHTML = "Row 097 in Balance Sheet";
            document.querySelector('#tt8b').innerHTML = "Row 101 in Balance Sheet";
            document.querySelector('#tt9b').innerHTML = "Row 136 in Balance Sheet";
            document.querySelector('#tt10b').innerHTML = "Row 122 in Balance Sheet";
            document.querySelector('#tt11b').innerHTML = "Row 141 in Balance Sheet";
            document.querySelector('#tt12b').innerHTML = "Row 03 in Income Statement";
            document.querySelector('#tt14b').innerHTML = "Row 21 in Income Statement";
            document.querySelector('#tt15b').innerHTML = "Row 08 in Income Statement";
            document.querySelector('#tt17b').innerHTML = "Row 46 in Income Statement";
            document.querySelector('#tt18b').innerHTML = "Row 49 in Income Statement";
            document.querySelector('#tt19b').innerHTML = "Row 56 in Income Statement";


            document.querySelector('#tt20b').innerHTML = "Row 139 in Balance Sheet";
            document.querySelector('#tt21b').innerHTML = "Row 140 in Balance Sheet";
            document.querySelector('#tt22b').innerHTML = "Row 53 in Balance Sheet";
            } else {
            document.querySelector('#tt2b').innerHTML = "Row 030 in Balance Sheet";
            document.querySelector('#tt3b').innerHTML = "Row 031 in Balance Sheet";
            document.querySelector('#tt4b').innerHTML = "Row 055 in Balance Sheet";
            document.querySelector('#tt5b').innerHTML = "Row 061 in Balance Sheet";
            document.querySelector('#tt6b').innerHTML = "Row 067 in Balance Sheet";
            document.querySelector('#tt7b').innerHTML = "Row 084 in Balance Sheet";
            document.querySelector('#tt8b').innerHTML = "Row 088 in Balance Sheet";
            document.querySelector('#tt9b').innerHTML = "Row 089 in Balance Sheet";
            document.querySelector('#tt10b').innerHTML = "Row 106 in Balance Sheet";
            document.querySelector('#tt11b').innerHTML = "Row 121 in Balance Sheet";
            document.querySelector('#tt12b').innerHTML = "Row 01 in Income Statement";
            document.querySelector('#tt14b').innerHTML = "Row 18 in Income Statement";
            document.querySelector('#tt15b').innerHTML = "Row 19 in Income Statement";
            document.querySelector('#tt17b').innerHTML = "Row 28 in Income Statement";
            document.querySelector('#tt18b').innerHTML = "Row 39 in Income Statement";
            document.querySelector('#tt19b').innerHTML = "Row 59 in Income Statement";

            document.querySelector('#tt20b').innerHTML = "Row 120 in Balance Sheet";
            document.querySelector('#tt21b').innerHTML = "Row 117 in Balance Sheet";
            document.querySelector('#tt22b').innerHTML = "Row 46 in Balance Sheet";
            }




      }

    function controls_data (value){
      let currentWrapper = "mf-response-props-id-680";
      let currentEl = document.getElementById(currentWrapper);

      return currentEl ? currentEl.dataset[value] : false
    }


    let is_edit_mode = '' ? true : false;
    let message_position = controls_data('messageposition') || 'top';


    let message_successIcon = controls_data('successicon') || '';
    let message_errorIcon = controls_data('erroricon') || '';
    let message_editSwitch = controls_data('editswitchopen') === 'yes' ? true : false;
    let message_proClass = controls_data('editswitchopen') === 'yes' ? 'mf_pro_activated' : '';

    let is_dummy_markup = is_edit_mode && message_editSwitch ? true : false;


    let page = html`
    <div id="mainpage">
    <h6>Hover Over the Input Labels to Get a Hint on Where You Can Find The Required Data (This Only Works for the Residents of <img src="/early_warning/assets/inc/sk2.png"/> )</h6>


      <form
        className="metform-form-content"
        method="post"
        >

        ${ is_dummy_markup ? message_position === 'top' ? parent.dummy_markup(message_successIcon, message_proClass) : '' : ''}
        ${is_dummy_markup ? ' ' :  message_position === 'top' ? parent.submit_response_message`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}

        ${!state.formHide ? html`


          <div id="content" class="page-wrap ">
            <div class="container content-wrapper">
              <div class="row row-wrapper">

            <div data-elementor-type="wp-page" data-elementor-id="1158" class="elementor elementor-1158" data-elementor-settings="[]">
                      <div class="elementor-section-wrap">
                      <section class="elementor-section elementor-top-section elementor-element elementor-element-7111f67f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7111f67f" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-532fc1af" data-id="532fc1af" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-1a4a255c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1a4a255c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7d25e2c8" data-id="7d25e2c8" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-4fe67cb0 elementor-widget elementor-widget-heading" data-id="4fe67cb0" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
              <h2 class="elementor-heading-title elementor-size-default">Company Details</h2>		</div>
                </div>
                <div class="elementor-element elementor-element-5adf2f76 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5adf2f76" data-element_type="widget" data-widget_type="divider.default">
                <div class="elementor-widget-container">
                  <div class="elementor-divider">
              <span class="elementor-divider-separator">
                    </span>
            </div>
                </div>
                </div>
                  </div>
            </div>
                      </div>
            </section>
                  </div>
            </div>
                      </div>
            </section>
                    </div>
                  </div>

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- #content -->


            <!-- COMPANY INPUTS -->
            <div data-elementor-type="wp-post" data-elementor-id="680" className="elementor elementor-680" data-elementor-settings="[]">
            <div className="elementor-section-wrap">
            <section className="elementor-section elementor-top-section elementor-element elementor-element-2b9bfa1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2b9bfa1" data-element_type="section">
            <div className="elementor-container elementor-column-gap-default">
            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
            <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">

            <div className="mf-input-wrapper">
              <br class="mobile" />   <div class="tt1">
              <label>Company Name</label>
              <span class="tooltiptext">Enter the Name of Your Company</span>
              </div>
            <input
            type="text"
            className="mf-input "
            id="mf-input-text-13c1826"
            name="companyname"
            required
            placeholder="${ parent.decodeEntities(`Company Name`) } "
              onInput=${parent.handleChange}
            aria-invalid=${validation.errors['companyname'] ? 'true' : 'false'}
            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
            />

            <input
            type="hidden"
            className="mf-input"
            id="mf-input-text-13c1826"
            name="_token"
            value="{{ csrf_token() }}"
            />

            <${validation.ErrorMessage}
            errors=${validation.errors}
            name="companyname"
            as=${html`<span className="mf-error-message"></span>`}
            />

            </div>

            </div>
            </div>


            </div>
            </div>

            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">

            <div className="mf-input-wrapper">




            <br class="mobile" />   <div class="tt1">
            <label>Current Year</label>
            <span class="tooltiptext">Enter the Year You Want to Use as the Current Year</span>
            </div>
            <select
            className="mf-input"
            tabindex="1"
            id="curyear"
            name="currentyear"
            required
            onInput=${myfunction}
            >
            <?php foreach($years as $year) : ?>
              <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
            <?php endforeach; ?>
          </select>

            </div>

            </div>
            </div>
            </div>
            </div>
            </div>
            </section>
            </div>
            </div>


          <div id="content" class="page-wrap">
            <div class="container content-wrapper">
              <div class="row row-wrapper">
            <div data-elementor-type="wp-page" data-elementor-id="1158" class="elementor elementor-1158" data-elementor-settings="[]">
                      <div class="elementor-section-wrap">
                      <section class="elementor-section elementor-top-section elementor-element elementor-element-7111f67f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7111f67f" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-532fc1af" data-id="532fc1af" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-1a4a255c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1a4a255c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">

                      </div>
            </section>
                  </div>
            </div>
                      </div>
            </section>
                    </div>
                  </div>

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- #content -->


              <div data-elementor-type="wp-post" data-elementor-id="680" className="elementor elementor-680" data-elementor-settings="[]">
            <div className="elementor-section-wrap">
            <section className="elementor-section elementor-top-section elementor-element elementor-element-2b9bfa1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2b9bfa1" data-element_type="section">
              <div className="elementor-container elementor-column-gap-default">
              <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
              <div className="elementor-widget-wrap elementor-element-populated">
              <!-- IMPORTANT -->



                <div id="datet" data-elementor-type="wp-page" data-elementor-id="1158" class="elementor elementor-1158" data-elementor-settings="[]">
                          <div class="elementor-section-wrap">
                          <section class="elementor-section elementor-top-section elementor-element elementor-element-7111f67f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7111f67f" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-532fc1af" data-id="532fc1af" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-1a4a255c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1a4a255c" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7d25e2c8" data-id="7d25e2c8" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4fe67cb0 elementor-widget elementor-widget-heading" data-id="4fe67cb0" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default" id="curyeartext"><?php echo date('Y'); ?></h2>
                </div>
                    </div>
                    <div class="elementor-element elementor-element-5adf2f76 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5adf2f76" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                      <div class="elementor-divider">
                  <span class="elementor-divider-separator">
                        </span>
                </div>
                    </div>
                    </div>
                      </div>
                </div>
                          </div>
                </section>
                      </div>
                </div>
                          </div>
                </section>
                        </div>
                      </div>




              </div>
              </div>

              <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
              <div className="elementor-widget-wrap elementor-element-populated">
              <!-- IMPORTANT -->
              <div id="datet" data-elementor-type="wp-page" data-elementor-id="1158" class="elementor elementor-1158" data-elementor-settings="[]">
                        <div class="elementor-section-wrap">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-7111f67f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7111f67f" data-element_type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-532fc1af" data-id="532fc1af" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                          <section class="elementor-section elementor-inner-section elementor-element elementor-element-1a4a255c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1a4a255c" data-element_type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7d25e2c8" data-id="7d25e2c8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                          <div class="elementor-element elementor-element-4fe67cb0 elementor-widget elementor-widget-heading" data-id="4fe67cb0" data-element_type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default" id="lastyear"><?php echo date('Y', strtotime(' -1 years')); ?></h2>		</div>
                  </div>
                  <div class="elementor-element elementor-element-5adf2f76 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5adf2f76" data-element_type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                  </div>
                  </div>
                    </div>
              </div>
                        </div>
              </section>
                    </div>
              </div>
                        </div>
              </section>
                      </div>
                    </div>
                </div>
              </div>

              <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
              <div className="elementor-widget-wrap elementor-element-populated">
              <!-- IMPORTANT -->
              <div id="datet" data-elementor-type="wp-page" data-elementor-id="1158" class="elementor elementor-1158" data-elementor-settings="[]">
                        <div class="elementor-section-wrap">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-7111f67f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7111f67f" data-element_type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-532fc1af" data-id="532fc1af" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                          <section class="elementor-section elementor-inner-section elementor-element elementor-element-1a4a255c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1a4a255c" data-element_type="section">
                      <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7d25e2c8" data-id="7d25e2c8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                          <div class="elementor-element elementor-element-4fe67cb0 elementor-widget elementor-widget-heading" data-id="4fe67cb0" data-element_type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default" id="yearbefore"><?php echo date('Y', strtotime(' -2 years')); ?></h2>		</div>
                  </div>
                  <div class="elementor-element elementor-element-5adf2f76 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5adf2f76" data-element_type="widget" data-widget_type="divider.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-divider">
                <span class="elementor-divider-separator">
                      </span>
              </div>
                  </div>
                  </div>
                    </div>
              </div>
                        </div>
              </section>
                    </div>
              </div>
                        </div>
              </section>
                      </div>
                    </div>
              </div>
              </div>
                </div>


          <div className="elementor-container elementor-column-gap-default">
        <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
    <div className="elementor-widget-wrap elementor-element-populated">
      <!-- IMPORTANT -->
              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">
  <div className="tablet mf-input-wrapper">

    <br class="mobile" />   <div class="tt1">
    <label>Total Assets</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
    <span class="tooltiptext">Row 001 in Balance Sheet</span>
    </div>
    <input
      type="number"
      className="mf-input "
      id="mf-input-text-13c1826"
      name="total-assets"
      placeholder="${ parent.decodeEntities(`Total Assets`) } "
                onInput=${parent.handleChange}
        aria-invalid=${validation.errors['total-assets'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
              />

            <${validation.ErrorMessage}
        errors=${validation.errors}
        name="total-assets"
        as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

      </div>
      </div>
        </div>
  </div>

      <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
        <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
                  <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

        <div className="mf-input-wrapper">




    <br class="mobile" />  <div class="tt1">
  <label>Total Assets</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
  <span class="tooltiptext">Row 001 in Balance Sheet</span>
  </div>

<input
type="number"
className="mf-input "
id="mf-input-text-13c1826"
name="total-assets2"
placeholder="${ parent.decodeEntities(`Total Assets`) } "
  onInput=${parent.handleChange}
aria-invalid=${validation.errors['total-assets2'] ? 'true' : 'false'}
ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
/>

<${validation.ErrorMessage}
errors=${validation.errors}
name="total-assets2"
as=${html`<span className="mf-error-message"></span>`}
/>

            </div>

          </div>
          </div>
            </div>
  </div>

  <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
    <div className="elementor-widget-wrap elementor-element-populated">
      <!-- IMPORTANT -->
              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

    <div className="mf-input-wrapper">
<br class="mobile" />

<div class="tt1">
<label>Total Assets</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
<span class="tooltiptext">Row 001 in Balance Sheet</span>
</div>
<input
type="number"
className="mf-input "
id="mf-input-text-13c1826"
name="total-assets1"
placeholder="${ parent.decodeEntities(`Total Assets`) } "
          onInput=${parent.handleChange}
  aria-invalid=${validation.errors['total-assets1'] ? 'true' : 'false'}
  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
        />

      <${validation.ErrorMessage}
  errors=${validation.errors}
  name="total-assets1"
  as=${html`<span className="mf-error-message"></span>`}
  />

        </div>

      </div>
      </div>
        </div>
</div>
            </div>

            <div className="elementor-container elementor-column-gap-default">
          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
      <div className="elementor-widget-wrap elementor-element-populated">
        <!-- IMPORTANT -->
                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">
    <div className="tablet mf-input-wrapper">

      <br class="mobile" />   <div class="tt1">
      <label>Current Assets</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
      <span class="tooltiptext" id="tt2">Row 033 in Balance Sheet</span>
      </div>
            <input
              type="number"
              className="mf-input "
              id="mf-input-text-13c1826"
              name="current-assets"
              placeholder="${ parent.decodeEntities(`Current Assets`) } "
                        onInput=${parent.handleChange}
                aria-invalid=${validation.errors['current-assets'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                      />

                    <${validation.ErrorMessage}
                errors=${validation.errors}
                name="current-assets"
                as=${html`<span className="mf-error-message"></span>`}
                />

          </div>

        </div>
        </div>
          </div>
    </div>

        <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">

          <div className="mf-input-wrapper">




    <br class="mobile" />   <div class="tt1">
    <label>Current Assets</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
    <span class="tooltiptext" id="tt2a">Row 033 in Balance Sheet</span>
    </div>
    <input
    type="number"
    className="mf-input "
    id="mf-input-text-13c1826"
    name="current-assets2"
    placeholder="${ parent.decodeEntities(`Current Assets`) } "
      onInput=${parent.handleChange}
    aria-invalid=${validation.errors['current-assets2'] ? 'true' : 'false'}
    ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
    />

    <${validation.ErrorMessage}
    errors=${validation.errors}
    name="current-assets2"
    as=${html`<span className="mf-error-message"></span>`}
    />

              </div>

            </div>
            </div>
              </div>
    </div>

    <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
      <div className="elementor-widget-wrap elementor-element-populated">
        <!-- IMPORTANT -->
                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

      <div className="mf-input-wrapper">


  <br class="mobile" />   <div class="tt1">
  <label>Current Assets</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
  <span class="tooltiptext" id="tt2b">Row 033 in Balance Sheet</span>
  </div>
    <input
      type="number"
      className="mf-input "
      id="mf-input-text-13c1826"
      name="current-assets1"
      placeholder="${ parent.decodeEntities(`Current Assets`) } "
                onInput=${parent.handleChange}
        aria-invalid=${validation.errors['current-assets1'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
              />

            <${validation.ErrorMessage}
        errors=${validation.errors}
        name="current-assets1"
        as=${html`<span className="mf-error-message"></span>`}
        />

          </div>

        </div>
        </div>
          </div>
  </div>
              </div>


              <div className="elementor-container elementor-column-gap-default">
            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
        <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
                  <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">
      <div className="tablet mf-input-wrapper">

        <br class="mobile" />   <div class="tt1">
        <label>Inventory</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
        <span class="tooltiptext" id="tt3">Row 034 in Balance Sheet</span>
        </div>

            <input
              type="number"
              className="mf-input "
              id="mf-input-text-13c1826"
              name="inventory"
              placeholder="${ parent.decodeEntities(`Inventory`) } "
                        onInput=${parent.handleChange}
                aria-invalid=${validation.errors['inventory'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                      />

                    <${validation.ErrorMessage}
                errors=${validation.errors}
                name="inventory"
                as=${html`<span className="mf-error-message"></span>`}
                />

            </div>

          </div>
          </div>
            </div>
      </div>

          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
              <!-- IMPORTANT -->
                      <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
              <div className="elementor-widget-container">

            <div className="mf-input-wrapper">




      <br class="mobile" />   <div class="tt1">
      <label>Inventory</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
      <span class="tooltiptext" id="tt3a">Row 034 in Balance Sheet</span>
      </div>
    <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="inventory2" placeholder="${ parent.decodeEntities(`Inventory`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['inventory2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
    />

    <${validation.ErrorMessage} errors=${validation.errors} name="inventory2" as=${html`<span className="mf-error-message"></span>`}
    />

                </div>

              </div>
              </div>
                </div>
      </div>

      <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
        <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
                  <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

        <div className="mf-input-wrapper">


    <br class="mobile" />   <div class="tt1">
    <label>Inventory</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
    <span class="tooltiptext" id="tt3b">Row 034 in Balance Sheet</span>
    </div>

    <input
    type="number"
    className="mf-input "
    id="mf-input-text-13c1826"
    name="inventory1"
    placeholder="${ parent.decodeEntities(`Inventory`) } "
              onInput=${parent.handleChange}
      aria-invalid=${validation.errors['inventory1'] ? 'true' : 'false'}
      ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
            />

          <${validation.ErrorMessage}
      errors=${validation.errors}
      name="inventory1"
      as=${html`<span className="mf-error-message"></span>`}
      />

            </div>

          </div>
          </div>
            </div>
    </div>
                </div>







                <div className="elementor-container elementor-column-gap-default">
                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">
                <div className="tablet mf-input-wrapper">

                <br class="mobile" />   <div class="tt1">
                <label>Current Receivables</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                <span class="tooltiptext" id="tt22">Row 053 in Balance Sheet</span>
                </div>

                <input
                type="number"
                className="mf-input "
                id="mf-input-text-13c1826"
                name="current-receivables"
                placeholder="${ parent.decodeEntities(`Current Receivables`) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['current-receivables'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                        />

                      <${validation.ErrorMessage}
                  errors=${validation.errors}
                  name="current-receivables"
                  as=${html`<span className="mf-error-message"></span>`}
                  />

                </div>

                </div>
                </div>
                </div>
                </div>

                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">

                <div className="mf-input-wrapper">




                <br class="mobile" />   <div class="tt1">
                <label>Current Receivables</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                <span class="tooltiptext" id="tt22a">Row 053 in Balance Sheet</span>
                </div>
                <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="current-receivables2" placeholder="${ parent.decodeEntities(`Current Receivables`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['current-receivables2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
                />

                <${validation.ErrorMessage} errors=${validation.errors} name="current-receivables2" as=${html`<span className="mf-error-message"></span>`}
                />

                  </div>

                </div>
                </div>
                  </div>
                </div>

                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">

                <div className="mf-input-wrapper">


                <br class="mobile" />   <div class="tt1">
                <label>Current Receivables</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
                <span class="tooltiptext" id="tt22b">Row 053 in Balance Sheet</span>
                </div>

                <input
                type="number"
                className="mf-input "
                id="mf-input-text-13c1826"
                name="current-receivables1"
                placeholder="${ parent.decodeEntities(`Current Receivables`) } "
                onInput=${parent.handleChange}
                aria-invalid=${validation.errors['current-receivables1'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                />

                <${validation.ErrorMessage}
                errors=${validation.errors}
                name="current-receivables1"
                as=${html`<span className="mf-error-message"></span>`}
                />

                </div>

                </div>
                </div>
                </div>
                </div>
                  </div>











                <div className="elementor-container elementor-column-gap-default">
              <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">
        <div className="tablet mf-input-wrapper">

          <br class="mobile" />   <div class="tt1">
          <label>Financial Accounts</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
          <span class="tooltiptext" id="tt4">Row 071 in Balance Sheet</span>
          </div>
            <input
              type="number"
              className="mf-input "
              id="mf-input-text-13c1826"
              name="financial-accounts"
              placeholder="${ parent.decodeEntities(`Financial Accounts`) } "
                        onInput=${parent.handleChange}
                aria-invalid=${validation.errors['financial-accounts'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                      />

                    <${validation.ErrorMessage}
                errors=${validation.errors}
                name="financial-accounts"
                as=${html`<span className="mf-error-message"></span>`}
                />

              </div>

            </div>
            </div>
              </div>
        </div>

            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
              <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">

              <div className="mf-input-wrapper">




        <br class="mobile" />   <div class="tt1">
        <label>Financial Accounts</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
        <span class="tooltiptext" id="tt4a">Row 071 in Balance Sheet</span>
        </div>
      <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="financial-accounts2" placeholder="${ parent.decodeEntities(`Financial Accounts`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['financial-accounts2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
      />

      <${validation.ErrorMessage} errors=${validation.errors} name="financial-accounts2" as=${html`<span className="mf-error-message"></span>`}
      />

                  </div>

                </div>
                </div>
                  </div>
        </div>

        <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">

          <div className="mf-input-wrapper">


      <br class="mobile" />   <div class="tt1">
      <label>Financial Accounts</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
      <span class="tooltiptext" id="tt4b">Row 071 in Balance Sheet</span>
      </div>
      <input
      type="number"
      className="mf-input "
      id="mf-input-text-13c1826"
      name="financial-accounts1"
      placeholder="${ parent.decodeEntities(`Financial Accounts`) } "
              onInput=${parent.handleChange}
      aria-invalid=${validation.errors['financial-accounts1'] ? 'true' : 'false'}
      ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
            />

          <${validation.ErrorMessage}
      errors=${validation.errors}
      name="financial-accounts1"
      as=${html`<span className="mf-error-message"></span>`}
      />

              </div>

            </div>
            </div>
              </div>
      </div>
                  </div>


                  <div className="elementor-container elementor-column-gap-default">
                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
              <!-- IMPORTANT -->
                      <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
              <div className="elementor-widget-container">
          <div className="tablet mf-input-wrapper">

            <br class="mobile" />   <div class="tt1">
            <label>Accruals/Deferrals Total</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
            <span class="tooltiptext" id="tt5">Row 074 in Balance Sheet</span>
            </div>
                <input
                  type="number"
                  className="mf-input "
                  id="mf-input-text-13c1826"
                  name="ad-total"
                  placeholder="${ parent.decodeEntities(`Accruals/Deferrals`) } "
                            onInput=${parent.handleChange}
                    aria-invalid=${validation.errors['ad-total'] ? 'true' : 'false'}
                    ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                          />

                        <${validation.ErrorMessage}
                    errors=${validation.errors}
                    name="ad-total"
                    as=${html`<span className="mf-error-message"></span>`}
                    />

                </div>

              </div>
              </div>
                </div>
          </div>

              <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                  <!-- IMPORTANT -->
                          <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                  <div className="elementor-widget-container">

                <div className="mf-input-wrapper">




          <br class="mobile" />   <div class="tt1">
          <label>Accruals/Deferrals Total</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
          <span class="tooltiptext" id="tt5a">Row 074 in Balance Sheet</span>
          </div>

          <input
          type="number"
          className="mf-input "
          id="mf-input-text-13c1826"
          name="ad-total2"
          placeholder="${ parent.decodeEntities(`Accruals/Deferrals`) } "
            onInput=${parent.handleChange}
          aria-invalid=${validation.errors['ad-total2'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
          />

          <${validation.ErrorMessage}
          errors=${validation.errors}
          name="ad-total2"
          as=${html`<span className="mf-error-message"></span>`}
          />

                    </div>

                  </div>
                  </div>
                    </div>
          </div>

          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
              <!-- IMPORTANT -->
                      <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
              <div className="elementor-widget-container">

            <div className="mf-input-wrapper">


        <br class="mobile" />   <div class="tt1">
        <label>Accruals/Deferrals Total</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
        <span class="tooltiptext" id="tt5b">Row 074 in Balance Sheet</span>
        </div>
        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="ad-total1"
        placeholder="${ parent.decodeEntities(`Accruals/Deferrals`) } "
                  onInput=${parent.handleChange}
          aria-invalid=${validation.errors['ad-total1'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                />

              <${validation.ErrorMessage}
          errors=${validation.errors}
          name="ad-total1"
          as=${html`<span className="mf-error-message"></span>`}
          />

                </div>

              </div>
              </div>
                </div>
        </div>
                    </div>


                    <div className="elementor-container elementor-column-gap-default">
                  <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
              <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">
            <div className="tablet mf-input-wrapper">

              <br class="mobile" />   <div class="tt1">
              <label>Equity</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
              <span class="tooltiptext" id="tt6">Row 080 in Balance Sheet</span>
              </div>
            <input
              type="number"
              className="mf-input "
              id="mf-input-text-d5f534d"
              name="equity"
              placeholder="${ parent.decodeEntities(`Equity`) } "
                        onInput=${parent.handleChange}
                aria-invalid=${validation.errors['equity'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                      />

                    <${validation.ErrorMessage}
                errors=${validation.errors}
                name="equity"
                as=${html`<span className="mf-error-message"></span>`}
                />

                  </div>

                </div>
                </div>
                  </div>
            </div>

                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                  <div className="elementor-widget-wrap elementor-element-populated">
                    <!-- IMPORTANT -->
                            <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                    <div className="elementor-widget-container">

                  <div className="mf-input-wrapper">




            <br class="mobile" />   <div class="tt1">
            <label>Equity</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
            <span class="tooltiptext" id="tt6a">Row 080 in Balance Sheet</span>
            </div>

            <input
            type="number"
            className="mf-input "
            id="mf-input-text-13c1826"
            name="equity2"
            placeholder="${ parent.decodeEntities(`Equity`) } "
              onInput=${parent.handleChange}
            aria-invalid=${validation.errors['equity2'] ? 'true' : 'false'}
            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
            />

            <${validation.ErrorMessage}
            errors=${validation.errors}
            name="equity2"
            as=${html`<span className="mf-error-message"></span>`}
            />

                      </div>

                    </div>
                    </div>
                      </div>
            </div>

            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
              <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">

              <div className="mf-input-wrapper">


          <br class="mobile" />   <div class="tt1">
          <label>Equity</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
          <span class="tooltiptext" id="tt6b">Row 080 in Balance Sheet</span>
          </div>
          <input
          type="number"
          className="mf-input "
          id="mf-input-text-d5f534d"
          name="equity1"
          placeholder="${ parent.decodeEntities(`Equity`) } "
                  onInput=${parent.handleChange}
          aria-invalid=${validation.errors['equity1'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                />

              <${validation.ErrorMessage}
          errors=${validation.errors}
          name="equity1"
          as=${html`<span className="mf-error-message"></span>`}
          />

                  </div>

                </div>
                </div>
                  </div>
          </div>
                      </div>


                      <div className="elementor-container elementor-column-gap-default">
                    <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                  <!-- IMPORTANT -->
                          <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                  <div className="elementor-widget-container">
              <div className="tablet mf-input-wrapper">

                <br class="mobile" />   <div class="tt1">
                <label>Net Profit/Loss</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                <span class="tooltiptext" id="tt7">Row 097 in Balance Sheet</span>
                </div>
              <input
                type="number"
                className="mf-input "
                id="mf-input-text-d5f534d"
                name="net-profit-loss"
                placeholder="${ parent.decodeEntities(`Net Profit/Loss`) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['net-profit-loss'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                        />

                      <${validation.ErrorMessage}
                  errors=${validation.errors}
                  name="net-profit-loss"
                  as=${html`<span className="mf-error-message"></span>`}
                  />

                    </div>

                  </div>
                  </div>
                    </div>
              </div>

                  <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                    <div className="elementor-widget-wrap elementor-element-populated">
                      <!-- IMPORTANT -->
                              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                      <div className="elementor-widget-container">

                    <div className="mf-input-wrapper">




              <br class="mobile" />   <div class="tt1">
              <label>Net Profit/Loss</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
              <span class="tooltiptext" id="tt7a">Row 097 in Balance Sheet</span>
              </div>

              <input
              type="number"
              className="mf-input "
              id="mf-input-text-13c1826"
              name="net-profit-loss2"
              placeholder="${ parent.decodeEntities(`Net Profit/Loss`) } "
                onInput=${parent.handleChange}
              aria-invalid=${validation.errors['net-profit-loss2'] ? 'true' : 'false'}
              ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
              />

              <${validation.ErrorMessage}
              errors=${validation.errors}
              name="net-profit-loss2"
              as=${html`<span className="mf-error-message"></span>`}
              />

                        </div>

                      </div>
                      </div>
                        </div>
              </div>

              <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                  <!-- IMPORTANT -->
                          <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                  <div className="elementor-widget-container">

                <div className="mf-input-wrapper">


            <br class="mobile" />   <div class="tt1">
            <label>Net Profit/Loss</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
            <span class="tooltiptext" id="tt7b">Row 097 in Balance Sheet</span>
            </div>
          <input
            type="number"
            className="mf-input "
            id="mf-input-text-d5f534d"
            name="net-profit-loss1"
            placeholder="${ parent.decodeEntities(`Net Profit/Loss`) } "
                      onInput=${parent.handleChange}
              aria-invalid=${validation.errors['net-profit-loss1'] ? 'true' : 'false'}
              ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                    />

                  <${validation.ErrorMessage}
              errors=${validation.errors}
              name="net-profit-loss1"
              as=${html`<span className="mf-error-message"></span>`}
              />

                    </div>

                  </div>
                  </div>
                    </div>
            </div>
                        </div>


                        <div className="elementor-container elementor-column-gap-default">
                      <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                  <div className="elementor-widget-wrap elementor-element-populated">
                    <!-- IMPORTANT -->
                            <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                    <div className="elementor-widget-container">
                <div className="tablet mf-input-wrapper">

                  <br class="mobile" />   <div class="tt1">
                  <label>Liabilities</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                  <span class="tooltiptext" id="tt8">Row 101 in Balance Sheet</span>
                  </div>
                <input
                  type="number"
                  className="mf-input "
                  id="mf-input-text-d5f534d"
                  name="liabilities"
                  placeholder="${ parent.decodeEntities(`Liabilities`) } "
                            onInput=${parent.handleChange}
                    aria-invalid=${validation.errors['liabilities'] ? 'true' : 'false'}
                    ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                          />

                        <${validation.ErrorMessage}
                    errors=${validation.errors}
                    name="liabilities"
                    as=${html`<span className="mf-error-message"></span>`}
                    />

                      </div>

                    </div>
                    </div>
                      </div>
                </div>

                    <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                      <div className="elementor-widget-wrap elementor-element-populated">
                        <!-- IMPORTANT -->
                                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                        <div className="elementor-widget-container">

                      <div className="mf-input-wrapper">




                <br class="mobile" />   <div class="tt1">
                <label>Liabilities</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                <span class="tooltiptext" id="tt8a">Row 101 in Balance Sheet</span>
                </div>

                <input
                type="number"
                className="mf-input "
                id="mf-input-text-13c1826"
                name="liabilities2"
                placeholder="${ parent.decodeEntities(`Liabilities`) } "
                  onInput=${parent.handleChange}
                aria-invalid=${validation.errors['liabilities2'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
                />

                <${validation.ErrorMessage}
                errors=${validation.errors}
                name="liabilities2"
                as=${html`<span className="mf-error-message"></span>`}
                />

                          </div>

                        </div>
                        </div>
                          </div>
                </div>

                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                  <div className="elementor-widget-wrap elementor-element-populated">
                    <!-- IMPORTANT -->
                            <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                    <div className="elementor-widget-container">

                  <div className="mf-input-wrapper">


              <br class="mobile" />   <div class="tt1">
              <label>Liabilities</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
              <span class="tooltiptext" id="tt8b">Row 101 in Balance Sheet</span>
              </div>
              <input
              type="number"
              className="mf-input "
              id="mf-input-text-d5f534d"
              name="liabilities1"
              placeholder="${ parent.decodeEntities(`Liabilities`) } "
                        onInput=${parent.handleChange}
                aria-invalid=${validation.errors['liabilities1'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                      />

                    <${validation.ErrorMessage}
                errors=${validation.errors}
                name="liabilities1"
                as=${html`<span className="mf-error-message"></span>`}
                />

                      </div>

                    </div>
                    </div>
                      </div>
              </div>
                          </div>


            <div className="elementor-container elementor-column-gap-default">
            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">
            <div className="tablet mf-input-wrapper">

              <br class="mobile" />   <div class="tt1">
              <label>Current Liabilities</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
              <span class="tooltiptext" id="tt10">Row 122 in Balance Sheet</span>
              </div>
            <input
              type="number"
              className="mf-input "
              id="mf-input-text-d5f534d"
              name="current-liabilities"
              placeholder="${ parent.decodeEntities(`Current Liabilities`) } "
                        onInput=${parent.handleChange}
                aria-invalid=${validation.errors['current-liabilities'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                      />

                    <${validation.ErrorMessage}
                errors=${validation.errors}
                name="current-liabilities"
                as=${html`<span className="mf-error-message"></span>`}
                />

            </div>

            </div>
            </div>
            </div>
            </div>

            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">

            <div className="mf-input-wrapper">




            <br class="mobile" />   <div class="tt1">
            <label>Current Liabilities</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
            <span class="tooltiptext" id="tt10a">Row 122 in Balance Sheet</span>
            </div>

            <input
            type="number"
            className="mf-input "
            id="mf-input-text-13c1826"
            name="current-liabilities2"
            placeholder="${ parent.decodeEntities(`Current Liabilities`) } "
              onInput=${parent.handleChange}
            aria-invalid=${validation.errors['current-liabilities2'] ? 'true' : 'false'}
            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
            />

            <${validation.ErrorMessage}
            errors=${validation.errors}
            name="current-liabilities2"
            as=${html`<span className="mf-error-message"></span>`}
            />

              </div>

            </div>
            </div>
              </div>
            </div>

            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">

            <div className="mf-input-wrapper">


            <br class="mobile" />   <div class="tt1">
            <label>Current Liabilities</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
            <span class="tooltiptext" id="tt10b">Row 122 in Balance Sheet</span>
            </div>
            <input
            type="number"
            className="mf-input "
            id="mf-input-text-d5f534d"
            name="current-liabilities1"
            placeholder="${ parent.decodeEntities(`Current Liabilities`) } "
                      onInput=${parent.handleChange}
              aria-invalid=${validation.errors['current-liabilities1'] ? 'true' : 'false'}
              ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                    />

                  <${validation.ErrorMessage}
              errors=${validation.errors}
              name="current-liabilities1"
              as=${html`<span className="mf-error-message"></span>`}
              />

            </div>

            </div>
            </div>
            </div>
            </div>
              </div>

              <div className="elementor-container elementor-column-gap-default">
              <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
              <div className="elementor-widget-wrap elementor-element-populated">
              <!-- IMPORTANT -->
                  <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
              <div className="elementor-widget-container">
              <div className="tablet mf-input-wrapper">

                <br class="mobile" />   <div class="tt1">
                <label>Provisions</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                <span class="tooltiptext" id="tt9">Row 136 in Balance Sheet</span>
                </div>

                <input
                type="number"
                className="mf-input "
                id="mf-input-text-13c1826"
                name="provisions"
                placeholder="${ parent.decodeEntities(`Provisions`) } "
                  onInput=${parent.handleChange}
                aria-invalid=${validation.errors['provisions'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
                />

                <${validation.ErrorMessage}
                errors=${validation.errors}
                name="provisions"
                as=${html`<span className="mf-error-message"></span>`}
                />

              </div>

              </div>
              </div>
              </div>
              </div>

              <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
              <div className="elementor-widget-wrap elementor-element-populated">
              <!-- IMPORTANT -->
                      <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
              <div className="elementor-widget-container">

              <div className="mf-input-wrapper">




              <br class="mobile" />   <div class="tt1">
              <label>Provisions</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
              <span class="tooltiptext" id="tt9a">Row 136 in Balance Sheet</span>
              </div>
            <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="provisions2" placeholder="${ parent.decodeEntities(`Provisions`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['provisions2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
            />

            <${validation.ErrorMessage} errors=${validation.errors} name="provisions2" as=${html`<span className="mf-error-message"></span>`}
            />

                </div>

              </div>
              </div>
                </div>
              </div>

              <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
              <div className="elementor-widget-wrap elementor-element-populated">
              <!-- IMPORTANT -->
                  <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
              <div className="elementor-widget-container">

              <div className="mf-input-wrapper">


              <br class="mobile" />   <div class="tt1">
              <label>Provisions</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
              <span class="tooltiptext" id="tt9b">Row 136 in Balance Sheet</span>
              </div>

              <input
              type="number"
              className="mf-input "
              id="mf-input-text-13c1826"
              name="provisions1"
              placeholder="${ parent.decodeEntities(`Provisions`) } "
              onInput=${parent.handleChange}
              aria-invalid=${validation.errors['provisions1'] ? 'true' : 'false'}
              ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
              />

              <${validation.ErrorMessage}
              errors=${validation.errors}
              name="provisions1"
              as=${html`<span className="mf-error-message"></span>`}
              />

              </div>

              </div>
              </div>
              </div>
              </div>
                </div>



                <div className="elementor-container elementor-column-gap-default">
                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">
                <div className="tablet mf-input-wrapper">

                  <br class="mobile" />   <div class="tt1">
                  <label>Current Bank Loans</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                  <span class="tooltiptext" id="tt20">Row 139 in Balance Sheet</span>
                  </div>
                <input
                  type="number"
                  className="mf-input "
                  id="mf-input-text-d5f534d"
                  name="current-bank-loans"
                  placeholder="${ parent.decodeEntities(`Current Bank Loans`) } "
                            onInput=${parent.handleChange}
                    aria-invalid=${validation.errors['current-bank-loans'] ? 'true' : 'false'}
                    ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                          />

                        <${validation.ErrorMessage}
                    errors=${validation.errors}
                    name="current-bank-loans"
                    as=${html`<span className="mf-error-message"></span>`}
                    />

                </div>

                </div>
                </div>
                </div>
                </div>

                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">

                <div className="mf-input-wrapper">




                <br class="mobile" />   <div class="tt1">
                <label>Current Bank Loans</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                <span class="tooltiptext" id="tt20a">Row 139 in Balance Sheet</span>
                </div>

                <input
                type="number"
                className="mf-input "
                id="mf-input-text-13c1826"
                name="current-bank-loans2"
                placeholder="${ parent.decodeEntities(`Current Bank Loans`) } "
                  onInput=${parent.handleChange}
                aria-invalid=${validation.errors['current-bank-loans2'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
                />

                <${validation.ErrorMessage}
                errors=${validation.errors}
                name="current-bank-loans2"
                as=${html`<span className="mf-error-message"></span>`}
                />

                  </div>

                </div>
                </div>
                  </div>
                </div>

                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">

                <div className="mf-input-wrapper">


                <br class="mobile" />   <div class="tt1">
                <label>Current Bank Loans</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
                <span class="tooltiptext" id="tt20b">Row 139 in Balance Sheet</span>
                </div>
                <input
                type="number"
                className="mf-input "
                id="mf-input-text-d5f534d"
                name="current-bank-loans1"
                placeholder="${ parent.decodeEntities(`Current Bank Loans`) } "
                        onInput=${parent.handleChange}
                aria-invalid=${validation.errors['current-bank-loans1'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                      />

                    <${validation.ErrorMessage}
                errors=${validation.errors}
                name="current-bank-loans1"
                as=${html`<span className="mf-error-message"></span>`}
                />

                </div>

                </div>
                </div>
                </div>
                </div>
                  </div>






                  <div className="elementor-container elementor-column-gap-default">
                  <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                  <div className="elementor-widget-wrap elementor-element-populated">
                  <!-- IMPORTANT -->
                      <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                  <div className="elementor-widget-container">
                  <div className="tablet mf-input-wrapper">

                    <br class="mobile" />   <div class="tt1">
                    <label>Financial Assistance</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                    <span class="tooltiptext" id="tt21">Row 140 in Balance Sheet</span>
                    </div>
                  <input
                    type="number"
                    className="mf-input "
                    id="mf-input-text-d5f534d"
                    name="financial-assistance"
                    placeholder="${ parent.decodeEntities(`Financial Assistance`) } "
                              onInput=${parent.handleChange}
                      aria-invalid=${validation.errors['financial-assistance'] ? 'true' : 'false'}
                      ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                            />

                          <${validation.ErrorMessage}
                      errors=${validation.errors}
                      name="financial-assistance"
                      as=${html`<span className="mf-error-message"></span>`}
                      />

                  </div>

                  </div>
                  </div>
                  </div>
                  </div>

                  <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                  <div className="elementor-widget-wrap elementor-element-populated">
                  <!-- IMPORTANT -->
                          <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                  <div className="elementor-widget-container">

                  <div className="mf-input-wrapper">




                  <br class="mobile" />   <div class="tt1">
                  <label>Financial Assistance</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                  <span class="tooltiptext" id="tt21a">Row 140 in Balance Sheet</span>
                  </div>

                  <input
                  type="number"
                  className="mf-input "
                  id="mf-input-text-13c1826"
                  name="financial-assistance2"
                  placeholder="${ parent.decodeEntities(`Financial Assistance`) } "
                    onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['financial-assistance2'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
                  />

                  <${validation.ErrorMessage}
                  errors=${validation.errors}
                  name="financial-assistance2"
                  as=${html`<span className="mf-error-message"></span>`}
                  />

                    </div>

                  </div>
                  </div>
                    </div>
                  </div>

                  <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                  <div className="elementor-widget-wrap elementor-element-populated">
                  <!-- IMPORTANT -->
                      <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                  <div className="elementor-widget-container">

                  <div className="mf-input-wrapper">


                  <br class="mobile" />   <div class="tt1">
                  <label>Financial Assistance</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
                  <span class="tooltiptext" id="tt21b">Row 140 in Balance Sheet</span>
                  </div>
                  <input
                  type="number"
                  className="mf-input "
                  id="mf-input-text-d5f534d"
                  name="financial-assistance1"
                  placeholder="${ parent.decodeEntities(`Financial Assistance`) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['financial-assistance1'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                        />

                      <${validation.ErrorMessage}
                  errors=${validation.errors}
                  name="financial-assistance1"
                  as=${html`<span className="mf-error-message"></span>`}
                  />

                  </div>

                  </div>
                  </div>
                  </div>
                  </div>
                    </div>








          <div className="elementor-container elementor-column-gap-default">
          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">
          <div className="tablet mf-input-wrapper">

            <br class="mobile" />   <div class="tt1">
            <label>Accruals/Deferrals</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
            <span class="tooltiptext" id="tt11">Row 141 in Balance Sheet</span>
            </div>
          <input
            type="number"
            className="mf-input "
            id="mf-input-text-d5f534d"
            name="ad"
            placeholder="${ parent.decodeEntities(`Accruals/Deferrals`) } "
                      onInput=${parent.handleChange}
              aria-invalid=${validation.errors['ad'] ? 'true' : 'false'}
              ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                    />

                  <${validation.ErrorMessage}
              errors=${validation.errors}
              name="ad"
              as=${html`<span className="mf-error-message"></span>`}
              />

          </div>

          </div>
          </div>
          </div>
          </div>

          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
                  <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

          <div className="mf-input-wrapper">




          <br class="mobile" />   <div class="tt1">
          <label>Accruals/Deferrals</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
          <span class="tooltiptext" id="tt11a">Row 141 in Balance Sheet</span>
          </div>

          <input
          type="number"
          className="mf-input "
          id="mf-input-text-13c1826"
          name="ad2"
          placeholder="${ parent.decodeEntities(`Accruals/Deferrals`) } "
            onInput=${parent.handleChange}
          aria-invalid=${validation.errors['ad2'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
          />

          <${validation.ErrorMessage}
          errors=${validation.errors}
          name="ad2"
          as=${html`<span className="mf-error-message"></span>`}
          />

            </div>

          </div>
          </div>
            </div>
          </div>

          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

          <div className="mf-input-wrapper">


          <br class="mobile" />   <div class="tt1">
          <label>Accruals/Deferrals</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
          <span class="tooltiptext" id="tt11b">Row 141 in Balance Sheet</span>
          </div>
          <input
          type="number"
          className="mf-input "
          id="mf-input-text-d5f534d"
          name="ad1"
          placeholder="${ parent.decodeEntities(`Accruals/Deferrals`) } "
                  onInput=${parent.handleChange}
          aria-invalid=${validation.errors['ad1'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                />

              <${validation.ErrorMessage}
          errors=${validation.errors}
          name="ad1"
          as=${html`<span className="mf-error-message"></span>`}
          />

          </div>

          </div>
          </div>
          </div>
          </div>
            </div>

            <div className="elementor-container elementor-column-gap-default">
            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">
            <div className="tablet mf-input-wrapper">

              <br class="mobile" />   <div class="tt1">
              <label>Revenue (Merchandise)</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
              <span class="tooltiptext" id="tt12">Row 03 in Income Statement</span>
              </div>
              <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="revenue-merch" placeholder="${ parent.decodeEntities(`Revenue (Merch)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-merch'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                />

                  <${validation.ErrorMessage} errors=${validation.errors} name="revenue-merch" as=${html`<span className="mf-error-message"></span>`}
                />

            </div>

            </div>
            </div>
            </div>
            </div>

            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">

            <div className="mf-input-wrapper">




            <br class="mobile" />   <div class="tt1">
            <label>Revenue (Merchandise)</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
            <span class="tooltiptext" id="tt12a">Row 03 in Income Statement</span>
            </div>

            <input
            type="number"
            className="mf-input "
            id="mf-input-text-13c1826"
            name="revenue-merch2"
            placeholder="${ parent.decodeEntities(`Revenue (Merch)`) } "
              onInput=${parent.handleChange}
            aria-invalid=${validation.errors['revenue-merch2'] ? 'true' : 'false'}
            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
            />

            <${validation.ErrorMessage}
            errors=${validation.errors}
            name="revenue-merch2"
            as=${html`<span className="mf-error-message"></span>`}
            />

              </div>

            </div>
            </div>
              </div>
            </div>

            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">

            <div className="mf-input-wrapper">


            <br class="mobile" />   <div class="tt1">
            <label>Revenue (Merchandise)</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
            <span class="tooltiptext" id="tt12b">Row 03 in Income Statement</span>
            </div>
            <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="revenue-merch1" placeholder="${ parent.decodeEntities(`Revenue (Merch)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-merch1'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
              />

                <${validation.ErrorMessage} errors=${validation.errors} name="revenue-merch1" as=${html`<span className="mf-error-message"></span>`}
              />

            </div>

            </div>
            </div>
            </div>
            </div>
              </div>





          <div className="elementor-container elementor-column-gap-default">
          <div  className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
          <div  className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">
          <div id="mergehide" className="tablet mf-input-wrapper">

            <br class="mobile" />   <div class="tt1">
            <label>Revenue (Products)</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
            <span class="tooltiptext">Row 04 in Income Statement</span>
            </div>
          <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="revenue-p" placeholder="${ parent.decodeEntities(`Revenue (Products)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-p'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
            />

              <${validation.ErrorMessage} errors=${validation.errors} name="revenue-p" as=${html`<span className="mf-error-message"></span>`}
            />

          </div>

          </div>
          </div>
          </div>
          </div>

          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
                  <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

          <div id="mergehide2" className="mf-input-wrapper">




          <br class="mobile" />   <div class="tt1">
          <label>Revenue (Products)</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
          <span class="tooltiptext">Row 04 in Income Statement</span>
          </div>
        <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="revenue-p2" placeholder="${ parent.decodeEntities(`Revenue (Products)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-p2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage} errors=${validation.errors} name="revenue-p2" as=${html`<span className="mf-error-message"></span>`}
        />

            </div>

          </div>
          </div>
            </div>
          </div>

          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

          <div id="mergehide3" className="mf-input-wrapper">


          <br class="mobile" />   <div class="tt1">
          <label>Revenue (Products)</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
          <span class="tooltiptext">Row 04 in Income Statement</span>
          </div>
          <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="revenue-p1" placeholder="${ parent.decodeEntities(`Revenue (Products)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-p1'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
          />

          <${validation.ErrorMessage} errors=${validation.errors} name="revenue-p1" as=${html`<span className="mf-error-message"></span>`}
          />

          </div>

          </div>
          </div>
          </div>
          </div>
            </div>




            <div className="elementor-container elementor-column-gap-default">
            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">
            <div className="tablet mf-input-wrapper">

              <br class="mobile" />   <div class="tt1">
              <label class="merge">Revenue (Services)</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
              <span class="tooltiptext">Row 05 in Income Statement</span>
              </div>
            <input type="number"  defaultValue="" className="mergeinput mf-input " id="mf-input-email-094f2a0" name="revenue-s" placeholder="${ parent.decodeEntities(`Revenue (Services)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-s'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
              />

                <${validation.ErrorMessage} errors=${validation.errors} name="revenue-s" as=${html`<span className="mf-error-message"></span>`}
              />

            </div>

            </div>
            </div>
            </div>
            </div>

            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">

            <div className="mf-input-wrapper">




            <br class="mobile" />   <div class="tt1">
            <label class="merge2">Revenue (Services)</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
            <span class="tooltiptext">Row 05 in Income Statement</span>
            </div>
            <input type="number"  defaultValue="" className="mergeinput2 mf-input " id="mf-input-email-094f2a0" name="revenue-s2" placeholder="${ parent.decodeEntities(`Revenue (Services)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-s2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
            />

            <${validation.ErrorMessage} errors=${validation.errors} name="revenue-s2" as=${html`<span className="mf-error-message"></span>`}
            />

              </div>

            </div>
            </div>
              </div>
            </div>

            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">

            <div className="mf-input-wrapper">


            <br class="mobile" />   <div class="tt1">
            <label class="merge3">Revenue (Services)</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
            <span class="tooltiptext">Row 05 in Income Statement</span>
            </div>
            <input type="number"  defaultValue="" className="mergeinput3 mf-input " id="mf-input-email-094f2a0" name="revenue-s1" placeholder="${ parent.decodeEntities(`Revenue (Services)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-s1'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
            />

            <${validation.ErrorMessage} errors=${validation.errors} name="revenue-s1" as=${html`<span className="mf-error-message"></span>`}
            />

            </div>

            </div>
            </div>
            </div>
            </div>
              </div>









                <div className="elementor-container elementor-column-gap-default">
                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">
                <div className="tablet mf-input-wrapper">

                  <br class="mobile" />   <div class="tt1">
                  <label>Revenue from Sale</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                  <span class="tooltiptext" id="tt15">Row 08 in Income Statement</span>
                  </div>
                <input
                  type="number"
                  className="mf-input "
                  id="mf-input-text-d5f534d"
                  name="revenue-sale"
                  placeholder="${ parent.decodeEntities(`Revenue from Sale`) } "
                            onInput=${parent.handleChange}
                    aria-invalid=${validation.errors['revenue-sale'] ? 'true' : 'false'}
                    ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                          />

                        <${validation.ErrorMessage}
                    errors=${validation.errors}
                    name="revenue-sale"
                    as=${html`<span className="mf-error-message"></span>`}
                    />

                </div>

                </div>
                </div>
                </div>
                </div>

                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">

                <div className="mf-input-wrapper">




                <br class="mobile" />   <div class="tt1">
                <label>Revenue from Sale</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                <span class="tooltiptext" id="tt15a">Row 08 in Income Statement</span>
                </div>
              <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="revenue-sale2" placeholder="${ parent.decodeEntities(`Revenue from Sale`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-sale2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
              />

              <${validation.ErrorMessage} errors=${validation.errors} name="revenue-sale2" as=${html`<span className="mf-error-message"></span>`}
              />

                  </div>

                </div>
                </div>
                  </div>
                </div>

                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">

                <div className="mf-input-wrapper">


                <br class="mobile" />   <div class="tt1">
                <label>Revenue from Sale</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
                <span class="tooltiptext" id="tt15b">Row 08 in Income Statement</span>
                </div>
                <input
                type="number"
                className="mf-input "
                id="mf-input-text-d5f534d"
                name="revenue-sale1"
                placeholder="${ parent.decodeEntities(`Revenue from Sale`) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['revenue-sale1'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                        />

                      <${validation.ErrorMessage}
                  errors=${validation.errors}
                  name="revenue-sale1"
                  as=${html`<span className="mf-error-message"></span>`}
                  />

                </div>

                </div>
                </div>
                </div>
                </div>
                  </div>

              <div className="elementor-container elementor-column-gap-default">
              <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
              <div className="elementor-widget-wrap elementor-element-populated">
              <!-- IMPORTANT -->
                  <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
              <div className="elementor-widget-container">
              <div className="tablet mf-input-wrapper">

                <br class="mobile" />   <div class="tt1">
                <label>Amortization</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                <span class="tooltiptext" id="tt14">Row 21 in Income Statement</span>
                </div>
                <input
                  type="number"
                  className="mf-input "
                  id="mf-input-text-d5f534d"
                  name="amortization"
                  placeholder="${ parent.decodeEntities(`Amortization`) } "
                            onInput=${parent.handleChange}
                    aria-invalid=${validation.errors['amortization'] ? 'true' : 'false'}
                    ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                          />

                        <${validation.ErrorMessage}
                    errors=${validation.errors}
                    name="amortization"
                    as=${html`<span className="mf-error-message"></span>`}
                    />

              </div>

              </div>
              </div>
              </div>
              </div>

              <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
              <div className="elementor-widget-wrap elementor-element-populated">
              <!-- IMPORTANT -->
                      <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
              <div className="elementor-widget-container">

              <div className="mf-input-wrapper">




              <br class="mobile" />   <div class="tt1">
              <label>Amortization</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
              <span class="tooltiptext" id="tt14a">Row 21 in Income Statement</span>
              </div>

              <input
              type="number"
              className="mf-input "
              id="mf-input-text-13c1826"
              name="amortization2"
              placeholder="${ parent.decodeEntities(`Amortization `) } "
                onInput=${parent.handleChange}
              aria-invalid=${validation.errors['amortization2'] ? 'true' : 'false'}
              ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
              />

              <${validation.ErrorMessage}
              errors=${validation.errors}
              name="amortization2"
              as=${html`<span className="mf-error-message"></span>`}
              />

                </div>

              </div>
              </div>
                </div>
              </div>

              <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
              <div className="elementor-widget-wrap elementor-element-populated">
              <!-- IMPORTANT -->
                  <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
              <div className="elementor-widget-container">

              <div className="mf-input-wrapper">


              <br class="mobile" />   <div class="tt1">
              <label>Amortization</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
              <span class="tooltiptext" id="tt14b">Row 21 in Income Statement</span>
              </div>
              <input
                type="number"
                className="mf-input "
                id="mf-input-text-d5f534d"
                name="amortization1"
                placeholder="${ parent.decodeEntities(`Amortization`) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['amortization1'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                        />

                      <${validation.ErrorMessage}
                  errors=${validation.errors}
                  name="amortization1"
                  as=${html`<span className="mf-error-message"></span>`}
                  />

              </div>

              </div>
              </div>
              </div>
              </div>
                </div>

                <div className="elementor-container elementor-column-gap-default">
                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">
                <div className="tablet mf-input-wrapper">

                  <br class="mobile" />   <div class="tt1">
                  <label>Securities and Shares</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                  <span class="tooltiptext" id="tt17">Row 46 in Income Statement</span>
                  </div>
                <input
                  type="number"
                  className="mf-input "
                  id="mf-input-text-d5f534d"
                  name="securities-shares"
                  placeholder="${ parent.decodeEntities(`Securities and Shares`) } "
                            onInput=${parent.handleChange}
                    aria-invalid=${validation.errors['securities-shares'] ? 'true' : 'false'}
                    ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                          />

                        <${validation.ErrorMessage}
                    errors=${validation.errors}
                    name="securities-shares"
                    as=${html`<span className="mf-error-message"></span>`}
                    />

                </div>

                </div>
                </div>
                </div>
                </div>

                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">

                <div className="mf-input-wrapper">




                <br class="mobile" />   <div class="tt1">
                <label>Securities and Shares</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                <span class="tooltiptext" id="tt17a">Row 46 in Income Statement</span>
                </div>

                <input
                type="number"
                className="mf-input "
                id="mf-input-text-13c1826"
                name="securities-shares2"
                placeholder="${ parent.decodeEntities(`Securities and Shares`) } "
                  onInput=${parent.handleChange}
                aria-invalid=${validation.errors['securities-shares2'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
                />

                <${validation.ErrorMessage}
                errors=${validation.errors}
                name="securities-shares2"
                as=${html`<span className="mf-error-message"></span>`}
                />

                  </div>

                </div>
                </div>
                  </div>
                </div>

                <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                <div className="elementor-widget-wrap elementor-element-populated">
                <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                <div className="elementor-widget-container">

                <div className="mf-input-wrapper">


                <br class="mobile" />   <div class="tt1">
                <label>Securities and Shares</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
                <span class="tooltiptext" id="tt17b">Row 46 in Income Statement</span>
                </div>
                <input
                type="number"
                className="mf-input "
                id="mf-input-text-d5f534d"
                name="securities-shares1"
                placeholder="${ parent.decodeEntities(`Securities and Shares`) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['securities-shares1'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                        />

                      <${validation.ErrorMessage}
                  errors=${validation.errors}
                  name="securities-shares1"
                  as=${html`<span className="mf-error-message"></span>`}
                  />

                </div>

                </div>
                </div>
                </div>
                </div>
                  </div>


                  <div className="elementor-container elementor-column-gap-default">
                  <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                  <div className="elementor-widget-wrap elementor-element-populated">
                  <!-- IMPORTANT -->
                      <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                  <div className="elementor-widget-container">
                  <div className="tablet mf-input-wrapper">

                    <br class="mobile" />   <div class="tt1">
                    <label>Interest Expense</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                    <span class="tooltiptext" id="tt18">Row 49 in Income Statement</span>
                    </div>
                  <input
                    type="number"
                    className="mf-input "
                    id="mf-input-text-d5f534d"
                    name="interest-expense"
                    placeholder="${ parent.decodeEntities(`Interest Expense`) } "
                              onInput=${parent.handleChange}
                      aria-invalid=${validation.errors['interest-expense'] ? 'true' : 'false'}
                      ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                            />

                          <${validation.ErrorMessage}
                      errors=${validation.errors}
                      name="interest-expense"
                      as=${html`<span className="mf-error-message"></span>`}
                      />

                  </div>

                  </div>
                  </div>
                  </div>
                  </div>

                  <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                  <div className="elementor-widget-wrap elementor-element-populated">
                  <!-- IMPORTANT -->
                          <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                  <div className="elementor-widget-container">

                  <div className="mf-input-wrapper">




                  <br class="mobile" />   <div class="tt1">
                  <label>Interest Expense</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                  <span class="tooltiptext" id="tt18a">Row 49 in Income Statement</span>
                  </div>

                  <input
                  type="number"
                  className="mf-input "
                  id="mf-input-text-13c1826"
                  name="interest-expense2"
                  placeholder="${ parent.decodeEntities(`Interest Expense`) } "
                    onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['interest-expense2'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
                  />

                  <${validation.ErrorMessage}
                  errors=${validation.errors}
                  name="interest-expense2"
                  as=${html`<span className="mf-error-message"></span>`}
                  />

                    </div>

                  </div>
                  </div>
                    </div>
                  </div>

                  <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                  <div className="elementor-widget-wrap elementor-element-populated">
                  <!-- IMPORTANT -->
                      <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                  <div className="elementor-widget-container">

                  <div className="mf-input-wrapper">


                  <br class="mobile" />   <div class="tt1">
                  <label>Interest Expense</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
                  <span class="tooltiptext" id="tt18b">Row 49 in Income Statement</span>
                  </div>
                  <input
                  type="number"
                  className="mf-input "
                  id="mf-input-text-d5f534d"
                  name="interest-expense1"
                  placeholder="${ parent.decodeEntities(`Interest Expense`) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['interest-expense1'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                        />

                      <${validation.ErrorMessage}
                  errors=${validation.errors}
                  name="interest-expense1"
                  as=${html`<span className="mf-error-message"></span>`}
                  />

                  </div>

                  </div>
                  </div>
                  </div>
                  </div>
                    </div>

                    <div className="elementor-container elementor-column-gap-default">
                    <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                    <div className="elementor-widget-wrap elementor-element-populated">
                    <!-- IMPORTANT -->
                        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                    <div className="elementor-widget-container">
                    <div className="tablet mf-input-wrapper">

                      <br class="mobile" />   <div class="tt1">
                      <label>Profit/Loss Before Tax</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                      <span class="tooltiptext" id="tt19">Row 56 in Income Statement</span>
                      </div>
                      <input
                        type="number"
                        className="mf-input "
                        id="mf-input-text-d5f534d"
                        name="profit-loss-before-tax"
                        placeholder="${ parent.decodeEntities(`Profit/Loss Before Tax`) } "
                                  onInput=${parent.handleChange}
                          aria-invalid=${validation.errors['profit-loss-before-tax'] ? 'true' : 'false'}
                          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                                />

                              <${validation.ErrorMessage}
                          errors=${validation.errors}
                          name="profit-loss-before-tax"
                          as=${html`<span className="mf-error-message"></span>`}
                          />

                    </div>

                    </div>
                    </div>
                    </div>
                    </div>

                    <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                    <div className="elementor-widget-wrap elementor-element-populated">
                    <!-- IMPORTANT -->
                            <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                    <div className="elementor-widget-container">

                    <div className="mf-input-wrapper">




                    <br class="mobile" />   <div class="tt1">
                    <label>Profit/Loss Before Tax</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                    <span class="tooltiptext" id="tt19a">Row 56 in Income Statement</span>
                    </div>
                  <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="profit-loss-before-tax2" placeholder="${ parent.decodeEntities(`Profit/Loss Before Tax`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['profit-loss-before-tax2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
                  />

                  <${validation.ErrorMessage} errors=${validation.errors} name="profit-loss-before-tax2" as=${html`<span className="mf-error-message"></span>`}
                  />

                      </div>

                    </div>
                    </div>
                      </div>
                    </div>

                    <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                    <div className="elementor-widget-wrap elementor-element-populated">
                    <!-- IMPORTANT -->
                        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                    <div className="elementor-widget-container">

                    <div className="mf-input-wrapper">


                    <br class="mobile" />   <div class="tt1">
                    <label>Profit/Loss Before Tax</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
                    <span class="tooltiptext" id="tt19b">Row 56 in Income Statement</span>
                    </div>
                    <input
                      type="number"
                      className="mf-input "
                      id="mf-input-text-d5f534d"
                      name="profit-loss-before-tax1"
                      placeholder="${ parent.decodeEntities(`Profit/Loss Before Tax`) } "
                                onInput=${parent.handleChange}
                        aria-invalid=${validation.errors['profit-loss-before-tax1'] ? 'true' : 'false'}
                        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                              />

                            <${validation.ErrorMessage}
                        errors=${validation.errors}
                        name="profit-loss-before-tax1"
                        as=${html`<span className="mf-error-message"></span>`}
                        />

                    </div>

                    </div>
                    </div>
                    </div>
                    </div>
                      </div>

                      <div className="elementor-container elementor-column-gap-default">
                      <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                      <div className="elementor-widget-wrap elementor-element-populated">
                      <!-- IMPORTANT -->
                          <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                      <div className="elementor-widget-container">
                      <div className="tablet mf-input-wrapper">

                        <br class="mobile" />   <div class="tt1">
                        <label>Profit/Loss After Tax</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                        <span class="tooltiptext">Row 61 in Income Statement</span>
                        </div>
                      <input
                        type="number"
                        className="mf-input "
                        id="mf-input-text-d5f534d"
                        name="profit-loss-after-tax"
                        placeholder="${ parent.decodeEntities(`Profit/Loss After Tax`) } "
                                  onInput=${parent.handleChange}
                          aria-invalid=${validation.errors['profit-loss-after-tax'] ? 'true' : 'false'}
                          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                                />

                              <${validation.ErrorMessage}
                          errors=${validation.errors}
                          name="profit-loss-after-tax"
                          as=${html`<span className="mf-error-message"></span>`}
                          />

                      </div>

                      </div>
                      </div>
                      </div>
                      </div>

                      <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                      <div className="elementor-widget-wrap elementor-element-populated">
                      <!-- IMPORTANT -->
                              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                      <div className="elementor-widget-container">

                      <div className="mf-input-wrapper">




                      <br class="mobile" />   <div class="tt1">
                      <label>Profit/Loss After Tax</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                      <span class="tooltiptext">Row 61 in Income Statement</span>
                      </div>
                    <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="profit-loss-after-tax2" placeholder="${ parent.decodeEntities(`Profit/Loss After Tax`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['profit-loss-after-tax2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
                    />

                    <${validation.ErrorMessage} errors=${validation.errors} name="profit-loss-after-tax2" as=${html`<span className="mf-error-message"></span>`}
                    />

                        </div>

                      </div>
                      </div>
                        </div>
                      </div>

                      <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                      <div className="elementor-widget-wrap elementor-element-populated">
                      <!-- IMPORTANT -->
                          <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                      <div className="elementor-widget-container">

                      <div className="mf-input-wrapper">


                      <br class="mobile" />   <div class="tt1">
                      <label>Profit/Loss After Tax</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
                      <span class="tooltiptext">Row 61 in Income Statement</span>
                      </div>
                      <input
                      type="number"
                      className="mf-input "
                      id="mf-input-text-d5f534d"
                      name="profit-loss-after-tax1"
                      placeholder="${ parent.decodeEntities(`Profit/Loss After Tax`) } "
                                onInput=${parent.handleChange}
                        aria-invalid=${validation.errors['profit-loss-after-tax1'] ? 'true' : 'false'}
                        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                              />

                            <${validation.ErrorMessage}
                        errors=${validation.errors}
                        name="profit-loss-after-tax1"
                        as=${html`<span className="mf-error-message"></span>`}
                        />

                      </div>

                      </div>
                      </div>
                      </div>
                      </div>
                        </div>
    <!-- DONT COPY DOWN FURTHER -->
  </section>



          </div>
        </div>

        <div id="content" class="page-wrap ">
          <div class="container content-wrapper">
            <div class="row row-wrapper">

          <div data-elementor-type="wp-page" data-elementor-id="1158" class="elementor elementor-1158" data-elementor-settings="[]">
                    <div class="elementor-section-wrap">
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-7111f67f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7111f67f" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-532fc1af" data-id="532fc1af" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                      <section class="elementor-section elementor-inner-section elementor-element elementor-element-1a4a255c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1a4a255c" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7d25e2c8" data-id="7d25e2c8" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-4fe67cb0 elementor-widget elementor-widget-heading" data-id="4fe67cb0" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
            <h2 id="extra" class="elementor-heading-title elementor-size-default">Additional Information for the Year of 2020</h2>		</div>
              </div>
              <div class="elementor-element elementor-element-5adf2f76 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5adf2f76" data-element_type="widget" data-widget_type="divider.default">
              <div class="elementor-widget-container">
                <div class="elementor-divider">
            <span class="elementor-divider-separator">
                  </span>
          </div>
              </div>
              </div>
                </div>
          </div>
                    </div>
          </section>
                </div>
          </div>
                    </div>
          </section>
                  </div>
                </div>

                  </div><!-- /.row -->
              </div><!-- /.container -->
          </div><!-- #content -->


          <!-- COMPANY INPUTS -->
          <div data-elementor-type="wp-post" data-elementor-id="680" className="elementor elementor-680" data-elementor-settings="[]">
          <div className="elementor-section-wrap">
          <section className="elementor-section elementor-top-section elementor-element elementor-element-2b9bfa1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2b9bfa1" data-element_type="section">
          <div className="elementor-container elementor-column-gap-default">
          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
          <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

          <div className="tablet mf-input-wrapper">
            <br class="mobile" />
            <div class="tt1">
            <label>Intangible Assets</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
            <span class="tooltiptext">Row 003 in Balance Sheet</span>
            </div>

            <input
            type="number"
            className="mf-input "
            id="mf-input-text-13c1826"
            name="intangible-assets2"
            placeholder="${ parent.decodeEntities(`Intangible Assets`) } "
                  onInput=${parent.handleChange}
            aria-invalid=${validation.errors['intangible-assets2'] ? 'true' : 'false'}
            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
                />

              <${validation.ErrorMessage}
            errors=${validation.errors}
            name="intangible-assets2"
            as=${html`<span className="mf-error-message"></span>`}
            />

          </div>

          </div>
          </div>


          </div>
          </div>

          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

          <div className="mf-input-wrapper">
          <br class="mobile" />
          <div class="tt1">
          <label>Property, Plant, Equipment </label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
          <span class="tooltiptext">Row 011 in Balance Sheet</span>
          </div>

          <input
          type="number"
          className="mf-input "
          id="mf-input-text-13c1826"
          name="ppe2"
          placeholder="${ parent.decodeEntities(`Property, Plant, Equipment `) } "
            onInput=${parent.handleChange}
          aria-invalid=${validation.errors['ppe2'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
          />

          <${validation.ErrorMessage}
          errors=${validation.errors}
          name="ppe2"
          as=${html`<span className="mf-error-message"></span>`}
          />

          </div>

          </div>
          </div>
          </div>
          </div>

          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

          <div className="mf-input-wrapper">




          <br class="mobile" />
          <div class="tt1">
          <label>Financial Assets</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
          <span class="tooltiptext">Row 021 in Balance Sheet</span>
          </div>
          <input
          type="number"
          className="mf-input "
          id="mf-input-text-13c1826"
          name="financial-assets2"
          placeholder="${ parent.decodeEntities(`Financial Assets`) } "
          onInput=${parent.handleChange}
          aria-invalid=${validation.errors['financial-assets2'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
          />

          <${validation.ErrorMessage}
          errors=${validation.errors}
          name="financial-assets2"
          as=${html`<span className="mf-error-message"></span>`}
          />

          </div>

          </div>
          </div>
          </div>
          </div>



          </div>
          </section>
          </div>
          </div>

          <div data-elementor-type="wp-post" data-elementor-id="680" className="elementor elementor-680" data-elementor-settings="[]">
          <div className="elementor-section-wrap">
          <section className="elementor-section elementor-top-section elementor-element elementor-element-2b9bfa1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2b9bfa1" data-element_type="section">
          <div className="elementor-container elementor-column-gap-default">
          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
          <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

          <div className="tablet mf-input-wrapper">
            <br class="mobile" />
            <div class="tt1">
            <label>Non-current Liabilities</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
            <span class="tooltiptext" id="tt23a">Row 094 in Balance Sheet</span>
            </div>
          <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="non-current-liabilities-2" placeholder="${ parent.decodeEntities(`Non-current Liabilities`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['non-current-liabilities-2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
          />

          <${validation.ErrorMessage} errors=${validation.errors} name="non-current-liabilities-2" as=${html`<span className="mf-error-message"></span>`}
          />

          </div>

          </div>
          </div>


          </div>
          </div>

          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

          <div className="mf-input-wrapper">
          <br class="mobile" />
          <div class="tt1">
          <label>Long-term Bank Loans</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
          <span class="tooltiptext" id="tt24a">Row 119 in Balance Sheet</span>
          </div>

          <input
          type="number"
          className="mf-input "
          id="mf-input-text-13c1826"
          name="bank-loans2"
          placeholder="${ parent.decodeEntities(`Long-term Loans`) } "
            onInput=${parent.handleChange}
          aria-invalid=${validation.errors['bank-loans2'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
          />

          <${validation.ErrorMessage}
          errors=${validation.errors}
          name="bank-loans2"
          as=${html`<span className="mf-error-message"></span>`}
          />

          </div>

          </div>
          </div>
          </div>
          </div>

          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

          <div className="mf-input-wrapper">




          <br class="mobile" />
          <div class="tt1">
          <label>Added Value</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
          <span class="tooltiptext" id="tt25a">Row 11 in Income Statement</span>
          </div>

          <input
          type="number"
          className="mf-input "
          id="mf-input-text-13c1826"
          name="added-value2"
          placeholder="${ parent.decodeEntities(`Added Value`) } "
            onInput=${parent.handleChange}
          aria-invalid=${validation.errors['added-value2'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
          />

          <${validation.ErrorMessage}
          errors=${validation.errors}
          name="added-value2"
          as=${html`<span className="mf-error-message"></span>`}
          />

          </div>

          </div>
          </div>
          </div>
          </div>



          </div>
          </section>
          </div>
          </div>
          <div data-elementor-type="wp-post" data-elementor-id="680" className="elementor elementor-680" data-elementor-settings="[]">
          <div className="elementor-section-wrap">
          <section className="elementor-section elementor-top-section elementor-element elementor-element-2b9bfa1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2b9bfa1" data-element_type="section">
          <div className="elementor-container elementor-column-gap-default">
          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->



          </div>
          </div>

          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->

          </div>
          </div>

          <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->

          </div>
          </div>



          </div>
          <div className="elementor-element elementor-element-71aab40 btn-metform-h50 mf-btn--center elementor-widget elementor-widget-mf-button" data-id="71aab40" data-element_type="widget" data-widget_type="mf-button.default">
          <div className="">
            <div className="mf-btn-wraper " data-mf-form-conditional-logic-requirement="">
                <button type="submit" className="metform-btn metform-submit-btn " id="">
            <span>${ parent.decodeEntities(`Calculate`) } </span>
          </button>
                </div>
              </div>
          </div>
          </section>
          </div>
          </div>

            ` : ''}
        ${is_dummy_markup ? message_position === 'bottom' ? parent.dummy_markup(message_successIcon, message_proClass) : '' : ''}
        ${is_dummy_markup ? ' ' : message_position === 'bottom' ? parent.submit_response_message`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}

      </form>
      </div>
    `
    return page;
  </script>

        </div>
  </div>
  </div>		</div>
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


@include('model_footer')
