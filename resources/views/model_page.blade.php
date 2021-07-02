@include('header')

<!-- Page Title -->

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
    <span class="trail-browse"></span> <span class="trail-begin"><a href="/early_warning/wp-test" title="test" rel="home">Home</a></span>
     <span class="sep">></span> <span class="trail-end">Input Form</span>
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
    data-action="{{  action('App\\Http\\Controllers\ModelController@calculate')  }}"
    data-wp-nonce="c96f8ba55c"
    data-form-nonce="1637a76403"
    data-stop-vertical-effect=""
    ></div>




      <script type="text" class="mf-template">

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


    return html`
      <form
        className="metform-form-content"
        method="post"


        >

        ${ is_dummy_markup ? message_position === 'top' ? parent.dummy_markup(message_successIcon, message_proClass) : '' : ''}
        ${is_dummy_markup ? ' ' :  message_position === 'top' ? parent.submit_response_message`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}

        ${!state.formHide ? html`
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

    <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="working-capital" placeholder="${ parent.decodeEntities(`Working Capital`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['working-capital'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
      />

        <${validation.ErrorMessage} errors=${validation.errors} name="working-capital" as=${html`<span className="mf-error-message"></span>`}
      />

        </div>

  </div>
      </div>
      <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

  <div className="mf-input-wrapper">

    <input
      type="number"
      className="mf-input "
      id="mf-input-text-d5f534d"
      name="earnings-before-tax"
      placeholder="${ parent.decodeEntities(`Earnings Before Tax`) } "
                onInput=${parent.handleChange}
        aria-invalid=${validation.errors['earnings-before-tax'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
              />

            <${validation.ErrorMessage}
        errors=${validation.errors}
        name="earnings-before-tax"
        as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

      </div>
      </div>

      <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

  <div className="mf-input-wrapper">

    <input
      type="number"
      className="mf-input "
      id="mf-input-text-d5f534d"
      name="operating-profit"
      placeholder="${ parent.decodeEntities(`Operating Profit`) } "
                onInput=${parent.handleChange}
        aria-invalid=${validation.errors['operating-profit'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
              />

            <${validation.ErrorMessage}
        errors=${validation.errors}
        name="operating-profit"
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

<style>
  .mobile {
    display: none;
  }
  @media (max-width: 500px) {
    .mobile {
      display: block;
    }
  }

  </style>


  <br class="mobile" />


        <input
          type="number"
          className="mf-input "
          id="mf-input-text-13c1826"
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
          <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
          <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="total-liabilities" placeholder="${ parent.decodeEntities(`Total Liabilities`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['total-liabilities'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
          />

            <${validation.ErrorMessage} errors=${validation.errors} name="total-liabilities" as=${html`<span className="mf-error-message"></span>`}
          />

            </div>

        </div>
          </div>
          <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <input
          type="number"
          className="mf-input "
          id="mf-input-text-d5f534d"
          name="short-term-liabilities"
          placeholder="${ parent.decodeEntities(`Short-term Liabilities`) } "
                    onInput=${parent.handleChange}
            aria-invalid=${validation.errors['short-term-liabilities'] ? 'true' : 'false'}
            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                  />

                <${validation.ErrorMessage}
            errors=${validation.errors}
            name="short-term-liabilities"
            as=${html`<span className="mf-error-message"></span>`}
            />

            </div>

          </div>
          </div>

          <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <input
          type="number"
          className="mf-input "
          id="mf-input-text-d5f534d"
          name="inventories"
          placeholder="${ parent.decodeEntities(`Inventories`) } "
                    onInput=${parent.handleChange}
            aria-invalid=${validation.errors['inventories'] ? 'true' : 'false'}
            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                  />

                <${validation.ErrorMessage}
            errors=${validation.errors}
            name="inventories"
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

<style>
.mobile {
display: none;
}
@media (max-width: 500px) {
.mobile {
  display: block;
}
}

</style>


<br class="mobile" />


    <input
      type="number"
      className="mf-input "
      id="mf-input-text-13c1826"
      name="ebit"
      placeholder="${ parent.decodeEntities(`EBIT`) } "
                onInput=${parent.handleChange}
        aria-invalid=${validation.errors['ebit'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
              />

            <${validation.ErrorMessage}
        errors=${validation.errors}
        name="ebit"
        as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

      </div>
      </div>
      <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
      <div className="elementor-widget-container">

    <div className="mf-input-wrapper">

    <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="interest-expenses" placeholder="${ parent.decodeEntities(`Interest Expenses`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['interest-expenses'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
      />

        <${validation.ErrorMessage} errors=${validation.errors} name="interest-expenses" as=${html`<span className="mf-error-message"></span>`}
      />

        </div>

    </div>
      </div>
      <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

    <div className="mf-input-wrapper">

    <input
      type="number"
      className="mf-input "
      id="mf-input-text-d5f534d"
      name="sales"
      placeholder="${ parent.decodeEntities(`Sales`) } "
                onInput=${parent.handleChange}
        aria-invalid=${validation.errors['sales'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
              />

            <${validation.ErrorMessage}
        errors=${validation.errors}
        name="sales"
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

<style>
.mobile {
display: none;
}
@media (max-width: 500px) {
.mobile {
display: block;
}
}

</style>


<br class="mobile" />


  <input
    type="number"
    className="mf-input "
    id="mf-input-text-13c1826"
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
    <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
    <div className="elementor-widget-container">

  <div className="mf-input-wrapper">

  <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="current-assets" placeholder="${ parent.decodeEntities(`Current Assets`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['current-assets'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
    />

      <${validation.ErrorMessage} errors=${validation.errors} name="current-assets" as=${html`<span className="mf-error-message"></span>`}
    />

      </div>

  </div>
    </div>
    <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
    <div className="elementor-widget-container">

  <div className="mf-input-wrapper">

  <input
    type="number"
    className="mf-input "
    id="mf-input-text-d5f534d"
    name="cash-flow"
    placeholder="${ parent.decodeEntities(`Cash Flow`) } "
              onInput=${parent.handleChange}
      aria-invalid=${validation.errors['cash-flow'] ? 'true' : 'false'}
      ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
            />

          <${validation.ErrorMessage}
      errors=${validation.errors}
      name="cash-flow"
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

<style>
.mobile {
display: none;
}
@media (max-width: 500px) {
.mobile {
  display: block;
}
}

</style>


<br class="mobile" />


    <input
      type="text"
      className="mf-input "
      id="mf-input-text-13c1826"
      name="total-revenues"
      placeholder="${ parent.decodeEntities(`Total Revenues`) } "
                onInput=${parent.handleChange}
        aria-invalid=${validation.errors['total-revenues'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
              />

            <${validation.ErrorMessage}
        errors=${validation.errors}
        name="total-revenues"
        as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

      </div>
      </div>
      <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
      <div className="elementor-widget-container">

    <div className="mf-input-wrapper">

    <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="current-liabilities" placeholder="${ parent.decodeEntities(`Current Liabilities`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['current-liabilities'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
      />

        <${validation.ErrorMessage} errors=${validation.errors} name="current-liabilities" as=${html`<span className="mf-error-message"></span>`}
      />

        </div>

    </div>
      </div>
      <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

    <div className="mf-input-wrapper">

    <input
      type="number"
      className="mf-input "
      id="mf-input-text-d5f534d"
      name="liabilites-cash"
      placeholder="${ parent.decodeEntities(`Liabilities - Cash`) } "
                onInput=${parent.handleChange}
        aria-invalid=${validation.errors['liabilites-cash'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
              />

            <${validation.ErrorMessage}
        errors=${validation.errors}
        name="liabilites-cash"
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
			<h2 class="elementor-heading-title elementor-size-default">First Year</h2>		</div>
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




    <input
    type="number"
    className="mf-input "
    id="mf-input-text-13c1826"
    name="liabilites1"
    placeholder="${ parent.decodeEntities(`Total Liabilites (Year 1)`) } "
      onInput=${parent.handleChange}
    aria-invalid=${validation.errors['liabilites1'] ? 'true' : 'false'}
    ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
    />

    <${validation.ErrorMessage}
    errors=${validation.errors}
    name="liabilites1"
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

    <style>
    .mobile {
    display: none;
    }
    @media (max-width: 500px) {
    .mobile {
    display: block;
    }
    }

    </style>


    <br class="mobile" />


    <input
    type="number"
    className="mf-input "
    id="mf-input-text-13c1826"
    name="assets1"
    placeholder="${ parent.decodeEntities(`Total Assets (Year 1)`) } "
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
			<h2 class="elementor-heading-title elementor-size-default">Second Year</h2>		</div>
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

        <!-- YEAR 3 -->
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




        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="total-assets"
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
        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="added-value" placeholder="${ parent.decodeEntities(`Added Value`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['added-value'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage} errors=${validation.errors} name="added-value" as=${html`<span className="mf-error-message"></span>`}
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

        <style>
        .mobile {
        display: none;
        }
        @media (max-width: 500px) {
        .mobile {
        display: block;
        }
        }

        </style>


        <br class="mobile" />


        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="longtermassets2"
        placeholder="${ parent.decodeEntities(`Long-term Assets`) } "
              onInput=${parent.handleChange}
        aria-invalid=${validation.errors['longtermassets2'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
            />

          <${validation.ErrorMessage}
        errors=${validation.errors}
        name="longtermassets2"
        as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>
        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="reserves2" placeholder="${ parent.decodeEntities(`Reserves`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['reserves2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage} errors=${validation.errors} name="reserves2" as=${html`<span className="mf-error-message"></span>`}
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

        <style>
        .mobile {
        display: none;
        }
        @media (max-width: 500px) {
        .mobile {
        display: block;
        }
        }

        </style>


        <br class="mobile" />


        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="eat2"
        placeholder="${ parent.decodeEntities(`EAT`) } "
          onInput=${parent.handleChange}
        aria-invalid=${validation.errors['eat2'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage}
        errors=${validation.errors}
        name="eat2"
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

        <style>
        .mobile {
        display: none;
        }
        @media (max-width: 500px) {
        .mobile {
        display: block;
        }
        }

        </style>


        <br class="mobile" />


        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="sales2"
        placeholder="${ parent.decodeEntities(`Sales`) } "
        onInput=${parent.handleChange}
        aria-invalid=${validation.errors['sales2'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage}
        errors=${validation.errors}
        name="sales2"
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

        <style>
        .mobile {
        display: none;
        }
        @media (max-width: 500px) {
        .mobile {
        display: block;
        }
        }

        </style>


        <br class="mobile" />


        <input
        type="text"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="total-revenues2"
        placeholder="${ parent.decodeEntities(`Total Revenues`) } "
          onInput=${parent.handleChange}
        aria-invalid=${validation.errors['total-revenues2'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage}
        errors=${validation.errors}
        name="total-revenues2"
        as=${html`<span className="mf-error-message"></span>`}
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
      			<h2 class="elementor-heading-title elementor-size-default">Third Year</h2>		</div>
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




        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="total-assets3"
        placeholder="${ parent.decodeEntities(`Total Assets (Year 3)`) } "
          onInput=${parent.handleChange}
        aria-invalid=${validation.errors['total-assets3'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage}
        errors=${validation.errors}
        name="total-assets3"
        as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>
        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="total-liabilites3-prev" placeholder="${ parent.decodeEntities(`Liabilites (Year 2)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['total-liabilites3-prev'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage} errors=${validation.errors} name="total-liabilites3-prev" as=${html`<span className="mf-error-message"></span>`}
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

        <style>
        .mobile {
        display: none;
        }
        @media (max-width: 500px) {
        .mobile {
        display: block;
        }
        }

        </style>


        <br class="mobile" />


        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="totalassets3-previous"
        placeholder="${ parent.decodeEntities(`Total Assets (Year 2)`) } "
              onInput=${parent.handleChange}
        aria-invalid=${validation.errors['totalassets3-previous'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
            />

          <${validation.ErrorMessage}
        errors=${validation.errors}
        name="totalassets3-previous"
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

        <style>
        .mobile {
        display: none;
        }
        @media (max-width: 500px) {
        .mobile {
        display: block;
        }
        }

        </style>


        <br class="mobile" />


        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="equity3"
        placeholder="${ parent.decodeEntities(`Equity (Year 3)`) } "
          onInput=${parent.handleChange}
        aria-invalid=${validation.errors['equity3'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage}
        errors=${validation.errors}
        name="equity3"
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

        <style>
        .mobile {
        display: none;
        }
        @media (max-width: 500px) {
        .mobile {
        display: block;
        }
        }

        </style>


        <br class="mobile" />


        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="equity3-previous"
        placeholder="${ parent.decodeEntities(`Equity (Year 2)`) } "
        onInput=${parent.handleChange}
        aria-invalid=${validation.errors['equity3-previous'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage}
        errors=${validation.errors}
        name="equity3-previous"
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

        <style>
        .mobile {
        display: none;
        }
        @media (max-width: 500px) {
        .mobile {
        display: block;
        }
        }

        </style>


        <br class="mobile" />


        <input
        type="text"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="total-liabilities3"
        placeholder="${ parent.decodeEntities(`Liabilites (Year 3)`) } "
          onInput=${parent.handleChange}
        aria-invalid=${validation.errors['total-liabilities3'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage}
        errors=${validation.errors}
        name="total-liabilities3"
        as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>
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
