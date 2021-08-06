@include('header')

<style>

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
@media (max-width: 700px) {
.mobile {
  display: block;
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
     <span class="sep">></span> <span class="trail-end" id="inpform">Input Form</span>
  </div>
          </div>
      </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.page-title -->
<div id="content" class="page-wrap sidebar-right">
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
    data-action="{{  action('App\\Http\\Controllers\ModelControllerNew@calculate')  }}"
    data-wp-nonce="c96f8ba55c"
    data-form-nonce="1637a76403"
    data-stop-vertical-effect=""
    ></div>




    <script class="mf-template">


    function myfunction() {
      document.querySelector('#curyeartext').innerHTML = document.querySelector('#curyear').value;
      document.querySelector('#lastyear').innerHTML = document.querySelector('#curyear').value-1;
      document.querySelector('#yearbefore').innerHTML = document.querySelector('#curyear').value-2;



      if(document.querySelector('#curyear').value >= 2014) {
          document.querySelector('#tt2').innerHTML = "Row 033 in Balance Sheet";
          document.querySelector('#tt3').innerHTML = "Row 034 in Balance Sheet";
          document.querySelector('#tt4').innerHTML = "Row 071 in Balance Sheet";
          document.querySelector('#tt5').innerHTML = "Row 074 in Balance Sheet";
          document.querySelector('#tt6').innerHTML = "Row 080 in Balance Sheet";
          document.querySelector('#tt7').innerHTML = "Row 098 in Balance Sheet";
          document.querySelector('#tt8').innerHTML = "Row 101 in Balance Sheet";
          document.querySelector('#tt9').innerHTML = "Row 136 in Balance Sheet";
          document.querySelector('#tt10').innerHTML = "Row 122 in Balance Sheet";
          document.querySelector('#tt11').innerHTML = "Row 141 in Balance Sheet";
          document.querySelector('#tt12').innerHTML = "Row 03 in Income Statement";
          document.querySelector('#tt14').innerHTML = "Row 21 in Income Statement";
          document.querySelector('#tt15').innerHTML = "Row 08 in Income Statement";
          document.querySelector('#tt16').innerHTML = "Row 09 in Income Statement";
          document.querySelector('#tt17').innerHTML = "Row 46 in Income Statement";
          document.querySelector('#tt18').innerHTML = "Row 49 in Income Statement";
          document.querySelector('#tt19').innerHTML = "Row 56 in Income Statement";

          if(document.querySelector('#curyear').value-2 >= 2014) {
          document.querySelector('#tt2a1').innerHTML = "Row 033 in Balance Sheet";
          document.querySelector('#tt10a1').innerHTML = "Row 122 in Balance Sheet";
        } else {
           document.querySelector('#tt2a1').innerHTML = "Row 030 in Balance Sheet";
           document.querySelector('#tt10a1').innerHTML = "Row 106 in Balance Sheet";
      }

      if(document.querySelector('#curyear').value-1 >= 2014) {
          document.querySelector('#tt6a2').innerHTML = "Row 080 in Balance Sheet";
          document.querySelector('#tt9a2').innerHTML = "Row 136 in Balance Sheet";
          document.querySelector('#tt12a2').innerHTML = "Row 03 in Income Statement";
          document.querySelector('#tt15a2').innerHTML = "Row 08 in Income Statement";
        } else {
          document.querySelector('#tt6a2').innerHTML = "Row 067 in Balance Sheet";
          document.querySelector('#tt9a2').innerHTML = "Row 089 in Balance Sheet";
          document.querySelector('#tt12a2').innerHTML = "Row 01 in Income Statement";
          document.querySelector('#tt15a2').innerHTML = "Row 19 in Income Statement";
          }


        //IF VALUE <2014
        } else {
          document.querySelector('#tt2').innerHTML = "Row 030 in Balance Sheet";
          document.querySelector('#tt3').innerHTML = "Row 031 in Balance Sheet";
          document.querySelector('#tt4').innerHTML = "Row 055 in Balance Sheet";
          document.querySelector('#tt5').innerHTML = "Row 061 in Balance Sheet";
          document.querySelector('#tt6').innerHTML = "Row 067 in Balance Sheet";
          document.querySelector('#tt7').innerHTML = "Row 085 in Balance Sheet";
          document.querySelector('#tt8').innerHTML = "Row 088 in Balance Sheet";
          document.querySelector('#tt9').innerHTML = "Row 089 in Balance Sheet";
          document.querySelector('#tt10').innerHTML = "Row 106 in Balance Sheet";
          document.querySelector('#tt11').innerHTML = "Row 121 in Balance Sheet";
          document.querySelector('#tt12').innerHTML = "Row 01 in Income Statement";
          document.querySelector('#tt14').innerHTML = "Row 18 in Income Statement";
          document.querySelector('#tt15').innerHTML = "Row 19 in Income Statement";
          document.querySelector('#tt16').innerHTML = "Row 22 in Income Statement";
          document.querySelector('#tt17').innerHTML = "Row 28 in Income Statement";
          document.querySelector('#tt18').innerHTML = "Row 39 in Income Statement";
          document.querySelector('#tt19').innerHTML = "Row 59 in Income Statement";

          if(document.querySelector('#curyear').value-2 >= 2014) {
           document.querySelector('#tt2a1').innerHTML = "Row 033 in Balance Sheet";
           document.querySelector('#tt10a1').innerHTML = "Row 122 in Balance Sheet";
         } else {
          document.querySelector('#tt2a1').innerHTML = "Row 030 in Balance Sheet";
          document.querySelector('#tt10a1').innerHTML = "Row 106 in Balance Sheet";
         }

         if(document.querySelector('#curyear').value-1 >= 2014) {
            document.querySelector('#tt6a2').innerHTML = "Row 080 in Balance Sheet";
            document.querySelector('#tt9a2').innerHTML = "Row 136 in Balance Sheet";
            document.querySelector('#tt12a2').innerHTML = "Row 03 in Income Statement";
            document.querySelector('#tt15a2').innerHTML = "Row 08 in Income Statement";
          } else {
            document.querySelector('#tt6a2').innerHTML = "Row 067 in Balance Sheet";
            document.querySelector('#tt9a2').innerHTML = "Row 089 in Balance Sheet";
            document.querySelector('#tt12a2').innerHTML = "Row 01 in Income Statement";
            document.querySelector('#tt15a2').innerHTML = "Row 19 in Income Statement";
          }


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
    <h6 id="infoheading">Hover Over the Input Labels to Get a Hint on Where You Can Find The Required Data (This Only Works for the Residents of <img src="/early_warning/assets/inc/sk2.png"/> )</h6>

      <form
        className="metform-form-content"
        method="post"
        >



        ${ is_dummy_markup ? message_position === 'top' ? parent.dummy_markup(message_successIcon, message_proClass) : '' : ''}
        ${is_dummy_markup ? ' ' :  message_position === 'top' ? parent.submit_response_message`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}

        ${!state.formHide ? html`


          <div id="content" class="page-wrap sidebar-right">
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
              <div class="tt1">
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



            <br class="mobile" />
            <div class="tt1">
            <label>Current Year</label>
            <span class="tooltiptext">Enter the Year You Want to Use as the Current Year</span>
            </div>
            <input
            type="number"
            className="mf-input "
            min="1900"
            max="2099"
            step="1"
            id="curyear"
            name="currentyear"
            required
            placeholder="${ parent.decodeEntities(`Current Year`) } "
            onInput=${myfunction}
                />

            </div>

            </div>
            </div>
            </div>
            </div>

            <!--
            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">

            </div>
            </div>

            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">

            </div>
            </div>

            <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">


            </div>
            </div>
-->


            </div>


            </section>



            </div>
            </div>




          <div id="content" class="page-wrap sidebar-right">
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
              <h2 id="curyeartext">Current Year</h2>
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
              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

  <div className="mf-input-wrapper">

    <div class="tt1">
    <label>Total Assets</label>
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
      <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
      <div className="elementor-widget-container">

  <div className="mf-input-wrapper">
    <div class="tt1">
    <label>Equity</label>
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
      <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

  <div className="mf-input-wrapper">
    <div class="tt1">
    <label>Accruals/Deferrals</label>
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

      <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

  <div className="mf-input-wrapper">
    <div class="tt1">
    <label>Own Work Capitalized</label>
    <span class="tooltiptext">Row 07 in Income Statement</span>
    </div>
  <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="own-work-cap" placeholder="${ parent.decodeEntities(`Own Work Capitalized`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['own-work-cap'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
    />

      <${validation.ErrorMessage} errors=${validation.errors} name="own-work-cap" as=${html`<span className="mf-error-message"></span>`}
    />

        </div>

      </div>
      </div>


      <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

  <div className="mf-input-wrapper">
    <div class="tt1">
    <label>Interest Expense</label>
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


  <br class="mobile" />

  <div class="tt1">
  <label>Current Assets</label>
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
          <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
          <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Retained Earnings</label>
          <span class="tooltiptext" id="tt7">Row 098 in Balance Sheet</span>
          </div>
        <input
          type="number"
          className="mf-input "
          id="mf-input-text-d5f534d"
          name="retained-earnings"
          placeholder="${ parent.decodeEntities(`Retained Earnings`) } "
                    onInput=${parent.handleChange}
            aria-invalid=${validation.errors['retained-earnings'] ? 'true' : 'false'}
            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                  />

                <${validation.ErrorMessage}
            errors=${validation.errors}
            name="retained-earnings"
            as=${html`<span className="mf-error-message"></span>`}
            />

            </div>

        </div>
          </div>
          <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Revenue (Merchandise)</label>
          <span class="tooltiptext" id="tt12">Row 03 in Income Statement</span>
          </div>
          <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="revenue-merch" placeholder="${ parent.decodeEntities(`Revenue (Merch)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-merch'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
            />

              <${validation.ErrorMessage} errors=${validation.errors} name="revenue-merch" as=${html`<span className="mf-error-message"></span>`}
            />

            </div>

          </div>
          </div>

          <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

            <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Revenue from Sale</label>
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


          <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Profit/Loss Before Tax</label>
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




<br class="mobile" />

<div class="tt1">
<label>Inventory</label>
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
      <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
      <div className="elementor-widget-container">

    <div className="mf-input-wrapper">
      <div class="tt1">
      <label>Liabilities</label>
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
      <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

    <div className="mf-input-wrapper">
      <div class="tt1">
      <label>Production</label>
      <span class="tooltiptext">Row 04 in Income Statement</span>
      </div>

      <input
      type="number"
      className="mf-input "
      id="mf-input-text-13c1826"
      name="production"
      placeholder="${ parent.decodeEntities(`Production`) } "
            onInput=${parent.handleChange}
      aria-invalid=${validation.errors['production'] ? 'true' : 'false'}
      ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
          />

        <${validation.ErrorMessage}
      errors=${validation.errors}
      name="production"
      as=${html`<span className="mf-error-message"></span>`}
      />

        </div>

      </div>
      </div>


      <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Other Operating Income</label>
          <span class="tooltiptext" id="tt16">Row 09 in Income Statement</span>
          </div>
        <input
          type="number"
          className="mf-input "
          id="mf-input-text-d5f534d"
          name="operating-income"
          placeholder="${ parent.decodeEntities(`Operating Income`) } "
                    onInput=${parent.handleChange}
            aria-invalid=${validation.errors['operating-income'] ? 'true' : 'false'}
            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                  />

                <${validation.ErrorMessage}
            errors=${validation.errors}
            name="operating-income"
            as=${html`<span className="mf-error-message"></span>`}
            />

            </div>

      </div>
      </div>


      <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

    <div className="mf-input-wrapper">
      <div class="tt1">
      <label>Profit/Loss After Tax</label>
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


<br class="mobile" />

<div class="tt1">
<label>Financial Accounts</label>
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
    <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
    <div className="elementor-widget-container">

      <div className="mf-input-wrapper">
        <div class="tt1">
        <label>Current Liabilities</label>
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
    <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
    <div className="elementor-widget-container">

  <div className="mf-input-wrapper">
    <div class="tt1">
    <label>Revenue (P and S)</label>
    <span class="tooltiptext">Row 05 in Income Statement</span>
    </div>
  <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="revenue-p-s" placeholder="${ parent.decodeEntities(`Revenue (P and S)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-p-s'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
    />

      <${validation.ErrorMessage} errors=${validation.errors} name="revenue-p-s" as=${html`<span className="mf-error-message"></span>`}
    />

      </div>

    </div>
    </div>

    <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
    <div className="elementor-widget-container">

      <div className="mf-input-wrapper">
              <div class="tt1">
              <label>Amortization</label>
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




<br class="mobile" />

<div class="tt1">
<label>Accruals/Deferrals Total</label>
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
      <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
      <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
        <div class="tt1">
        <label>Provisions</label>
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
      <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

    <div className="mf-input-wrapper">
      <div class="tt1">
      <label>Internal Inventory</label>
      <span class="tooltiptext">Row 06 in Income Statement</span>
      </div>
    <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="internal-inventory" placeholder="${ parent.decodeEntities(`Internal Inventory`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['internal-inventory'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
      />

        <${validation.ErrorMessage} errors=${validation.errors} name="internal-inventory" as=${html`<span className="mf-error-message"></span>`}
      />

        </div>

      </div>
      </div>

      <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

    <div className="mf-input-wrapper">
      <div class="tt1">
      <label>Securities and Shares</label>
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

            </div>
            <!--
            <div className="elementor-element elementor-element-71aab40 btn-metform-h50 mf-btn--center elementor-widget elementor-widget-mf-button" data-id="71aab40" data-element_type="widget" data-widget_type="mf-button.default">
            <div className="">
              <div className="mf-btn-wraper " data-mf-form-conditional-logic-requirement="">
                  <button type="submit" className="metform-btn metform-submit-btn " id="">
              <span>${ parent.decodeEntities(`Calculate`) } </span>
            </button>
                  </div>
                </div>
            </div>
-->
  </section>


  <div id="content" class="page-wrap sidebar-right">
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
			<h2 class="elementor-heading-title elementor-size-default" id="lastyear">Last Year</h2>		</div>
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


          </div>
        </div>

        <!-- YEAR 2 -->
        <br />
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


          <div class="tt1">
          <label>Total Assets</label>
          <span class="tooltiptext">Row 001 in Balance Sheet</span>
          </div>

          <input
          type="number"
          className="mf-input "
          id="mf-input-text-13c1826"
          name="totalassets2"
          placeholder="${ parent.decodeEntities(`Total Assets`) } "
            onInput=${parent.handleChange}
          aria-invalid=${validation.errors['totalassets2'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
          />

          <${validation.ErrorMessage}
          errors=${validation.errors}
          name="totalassets2"
          as=${html`<span className="mf-error-message"></span>`}
          />

        </div>

        </div>
        </div>
        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

          <div className="mf-input-wrapper">
            <div class="tt1">
            <label>Non-current Liabilities</label>
            <span class="tooltiptext">Row 094 in Balance Sheet</span>
            </div>

            <input
            type="number"
            className="mf-input "
            id="mf-input-text-13c1826"
            name="noncurrentliabilities2"
            placeholder="${ parent.decodeEntities(`Non-current Liabilities`) } "
              onInput=${parent.handleChange}
            aria-invalid=${validation.errors['noncurrentliabilities2'] ? 'true' : 'false'}
            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
            />

          </div>

        </div>
        </div>

        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Internal Inventory</label>
          <span class="tooltiptext">Row 06 in Income Statement</span>
          </div>

          <input
          type="number"
          className="mf-input "
          id="mf-input-text-13c1826"
          name="internalinventory2"
          placeholder="${ parent.decodeEntities(`Internal Inventory`) } "
            onInput=${parent.handleChange}
          aria-invalid=${validation.errors['internalinventory2'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
          />

          <${validation.ErrorMessage}
          errors=${validation.errors}
          name="internalinventory2"
          as=${html`<span className="mf-error-message"></span>`}
          />

        </div>

        </div>
        </div>

        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Profit/Loss After Tax</label>
          <span class="tooltiptext">Row 61 in Income Statement</span>
          </div>

          <input
          type="number"
          className="mf-input "
          id="mf-input-text-13c1826"
          name="profit-loss-after-tax2"
          placeholder="${ parent.decodeEntities(`Profit/Loss After Tax`) } "
            onInput=${parent.handleChange}
          aria-invalid=${validation.errors['profit-loss-after-tax2'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
          />

          <${validation.ErrorMessage}
          errors=${validation.errors}
          name="profit-loss-after-tax2"
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
        <label>Intangible Assets</label>
        <span class="tooltiptext">Row 003 in Balance Sheet</span>
        </div>

        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="noncurrentassets2"
        placeholder="${ parent.decodeEntities(`Intangible Assets`) } "
          onInput=${parent.handleChange}
        aria-invalid=${validation.errors['noncurrentassets2'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage}
        errors=${validation.errors}
        name="noncurrentassets2"
        as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>
        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

          <div className="mf-input-wrapper">

            <div class="tt1">
            <label>Long-term Bank Loans</label>
            <span class="tooltiptext">Row 119 in Balance Sheet</span>
            </div>
          <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="long-term-bank-loans2" placeholder="${ parent.decodeEntities(`Long-term Bank Loan`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['long-term-bank-loans2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
          />

          <${validation.ErrorMessage} errors=${validation.errors} name="long-term-bank-loans2" as=${html`<span className="mf-error-message"></span>`}
          />

          </div>

        </div>
        </div>

        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Own Work Capitalized</label>
          <span class="tooltiptext">Row 07 in Income Statement</span>
          </div>
          <input
          type="number"
          className="mf-input "
          id="mf-input-text-13c1826"
          name="ownwork2"
          placeholder="${ parent.decodeEntities(`Own Work Capitalized`) } "
          onInput=${parent.handleChange}
          aria-invalid=${validation.errors['ownwork2'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
          />

          <${validation.ErrorMessage}
          errors=${validation.errors}
          name="ownwork2"
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
        <label>Property, Plant, Equipment</label>
        <span class="tooltiptext">Row 011 in Balance Sheet</span>
        </div>
      <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="ppe2" placeholder="${ parent.decodeEntities(`Property, Plant ...`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['ppe2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
      />

      <${validation.ErrorMessage} errors=${validation.errors} name="ppe2" as=${html`<span className="mf-error-message"></span>`}
      />

        </div>

        </div>
        </div>

        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

          <div className="mf-input-wrapper">
            <div class="tt1">
            <label>Provisions</label>
            <span class="tooltiptext" id="tt9a2">Row 136 in Balance Sheet</span>
            </div>

            <input
            type="number"
            className="mf-input "
            id="mf-input-text-13c1826"
            name="provisions2"
            placeholder="${ parent.decodeEntities(`Provisions`) } "
              onInput=${parent.handleChange}
            aria-invalid=${validation.errors['provisions2'] ? 'true' : 'false'}
            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
            />

            <${validation.ErrorMessage}
            errors=${validation.errors}
            name="provisions2"
            as=${html`<span className="mf-error-message"></span>`}
            />

          </div>

        </div>
        </div>

        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

          <div className="mf-input-wrapper">

            <div class="tt1">
            <label>Revenue from Sale</label>
            <span class="tooltiptext" id="tt15a2">Row 08 in Income Statement</span>
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


        <br class="mobile" />

        <div class="tt1">
        <label>Non-current Assets</label>
        <span class="tooltiptext">Row 021 in Balance Sheet</span>
        </div>
      <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="non-current-assets2" placeholder="${ parent.decodeEntities(`Non-current Assets`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['non-current-assets2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
      />

      <${validation.ErrorMessage} errors=${validation.errors} name="non-current-assets2" as=${html`<span className="mf-error-message"></span>`}
      />

        </div>

        </div>
        </div>

        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

          <div class="tt1">
          <label>Revenue (Merchandise)</label>
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

        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

          <div className="mf-input-wrapper">

            <div class="tt1">
            <label>Added Value</label>
            <span class="tooltiptext">Row 11 in Income Statement</span>
            </div>
            <input
            type="number"
            className="mf-input "
            id="mf-input-text-13c1826"
            name="addedvalue2"
            placeholder="${ parent.decodeEntities(`Added Value`) } "
              onInput=${parent.handleChange}
            aria-invalid=${validation.errors['addedvalue2'] ? 'true' : 'false'}
            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
            />

            <${validation.ErrorMessage}
            errors=${validation.errors}
            name="addedvalue2"
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
        <label>Equity</label>
        <span class="tooltiptext" id="tt6a2">Row 080 in Balance Sheet</span>
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
        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

          <div class="tt1">
          <label>Production</label>
          <span class="tooltiptext">Row 04 in Income Statement</span>
          </div>

          <input
          type="number"
          className="mf-input "
          id="mf-input-text-13c1826"
          name="production2"
          placeholder="${ parent.decodeEntities(`Production`) } "
                onInput=${parent.handleChange}
          aria-invalid=${validation.errors['production2'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
              />

            <${validation.ErrorMessage}
          errors=${validation.errors}
          name="production2"
          as=${html`<span className="mf-error-message"></span>`}
          />

        </div>

        </div>
        </div>
        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

          <div class="tt1">
          <label>Securities and Shares</label>
          <span class="tooltiptext">Row 27 in Income Statement</span>
          </div>
        <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="securities-shares2" placeholder="${ parent.decodeEntities(`Securities and Shares`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['securities-shares2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage} errors=${validation.errors} name="securities-shares2" as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>
        </div>
        </div>
        </div>
        </section>

        <div id="content" class="page-wrap sidebar-right">
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
      			<h2 class="elementor-heading-title elementor-size-default" id="yearbefore">The Year Before</h2>		</div>
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

        </div>
        </div>



        <!-- Second Year -->
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
          <div class="tt1">
          <label>Assets</label>
          <span class="tooltiptext" id="tt2a1">Row 033 in Balance Sheet</span>
          </div>
        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="assets1"
        placeholder="${ parent.decodeEntities(`Assets`) } "
          onInput=${parent.handleChange}
        aria-invalid=${validation.errors['assets1'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage}
        errors=${validation.errors}
        name="assets1"
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
        <label>Liabilities</label>
        <span class="tooltiptext" id="tt10a1">Row 122 in Balance Sheet</span>
        </div>
        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="liabilities1"
        placeholder="${ parent.decodeEntities(`Liabilities`) } "
              onInput=${parent.handleChange}
        aria-invalid=${validation.errors['liabilities1'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
