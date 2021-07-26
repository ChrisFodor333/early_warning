@include('header')

<!-- Page Title -->

<!-- Page title -->
<div class="page-title pagetitle_style_2">
  <div class="overlay"></div>
  <div class="container">
      <div class="row">
          <div class="col-md-12 page-title-container">
                                  <div class="page-title-heading">
                      <h1 class="title">Contact 01</h1>
                  </div><!-- /.page-title-captions -->


  <div class="breadcrumb-trail breadcrumbs">
    <span class="trail-browse"></span> <span class="trail-begin"><a href="<?php echo url('/'); ?>" title="test" rel="home">Home</a></span>
     <span class="sep">></span> <span class="trail-end">Contact 01</span>
  </div>
          </div><!-- /.col-md-12 -->
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
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-713f6456" data-id="713f6456" data-element_type="column">
    <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-21e41deb elementor-widget elementor-widget-heading" data-id="21e41deb" data-element_type="widget" data-widget_type="heading.default">
      <div class="elementor-widget-container">
    <h2 class="elementor-heading-title elementor-size-default">Address</h2>		</div>
      </div>
      <div class="elementor-element elementor-element-1acd5810 elementor-widget elementor-widget-heading" data-id="1acd5810" data-element_type="widget" data-widget_type="heading.default">
      <div class="elementor-widget-container">
    <h2 class="elementor-heading-title elementor-size-default">PO Box 16122 Collins Street West,Victoria 8007
Australia


</h2>		</div>
      </div>
      <div class="elementor-element elementor-element-127f92b9 elementor-widget elementor-widget-heading" data-id="127f92b9" data-element_type="widget" data-widget_type="heading.default">
      <div class="elementor-widget-container">
    <h2 class="elementor-heading-title elementor-size-default">Phone number
</h2>		</div>
      </div>
      <div class="elementor-element elementor-element-7412dba4 elementor-widget elementor-widget-heading" data-id="7412dba4" data-element_type="widget" data-widget_type="heading.default">
      <div class="elementor-widget-container">
    <h2 class="elementor-heading-title elementor-size-default">Call us: 190 140 2468</h2>		</div>
      </div>
      <div class="elementor-element elementor-element-258e188c elementor-widget elementor-widget-heading" data-id="258e188c" data-element_type="widget" data-widget_type="heading.default">
      <div class="elementor-widget-container">
    <h2 class="elementor-heading-title elementor-size-default">E-mail address
</h2>		</div>
      </div>
      <div class="elementor-element elementor-element-544625ee elementor-widget elementor-widget-heading" data-id="544625ee" data-element_type="widget" data-widget_type="heading.default">
      <div class="elementor-widget-container">
    <h2 class="elementor-heading-title elementor-size-default">support@themesflat.com</h2>		</div>
      </div>
        </div>
  </div>
      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4b17909a" data-id="4b17909a" data-element_type="column">
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
    data-action="/early_warning/wp-test/wp-json/metform/v1/entries/insert/680"
    data-wp-nonce="c96f8ba55c"
    data-form-nonce="1637a76403"
    data-stop-vertical-effect=""
    ></div>


  <!-----------------------------
    * controls_data : find the the props passed indie of data attribute
    * parent.submit_response_message : contains the markup of error or success message
    * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals
  --------------------------- -->

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
        onSubmit=${ validation.handleSubmit( parent.handleFormSubmit ) }

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
              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

  <div className="mf-input-wrapper">

    <input
      type="text"
      className="mf-input "
      id="mf-input-text-13c1826"
      name="mf-text"
      placeholder="${ parent.decodeEntities(`Name`) } "
                onInput=${parent.handleChange}
        aria-invalid=${validation.errors['mf-text'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":50,"type":"by_character_length","required":true,"expression":"null"}, el)}
              />

            <${validation.ErrorMessage}
        errors=${validation.errors}
        name="mf-text"
        as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

      </div>
      </div>
      <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
      <div className="elementor-widget-container">

  <div className="mf-input-wrapper">

    <input type="email"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="mf-email" placeholder="${ parent.decodeEntities(`Email`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['mf-email'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","emailMessage":"Please enter a valid Email address","minLength":10,"maxLength":100,"type":"by_character_length","required":true,"expression":"null"}, el)}
      />

        <${validation.ErrorMessage} errors=${validation.errors} name="mf-email" as=${html`<span className="mf-error-message"></span>`}
      />

        </div>

  </div>
      </div>
      <div className="elementor-element elementor-element-d5f534d elementor-widget elementor-widget-mf-text" data-id="d5f534d" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
      <div className="elementor-widget-container">

  <div className="mf-input-wrapper">

    <input
      type="text"
      className="mf-input "
      id="mf-input-text-d5f534d"
      name="mf-text"
      placeholder="${ parent.decodeEntities(`Subject`) } "
                onInput=${parent.handleChange}
        aria-invalid=${validation.errors['mf-text'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":20,"maxLength":300,"type":"by_character_length","required":true,"expression":"null"}, el)}
              />

            <${validation.ErrorMessage}
        errors=${validation.errors}
        name="mf-text"
        as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

      </div>
      </div>
      <div className="elementor-element elementor-element-71aab40 btn-metform-h50 mf-btn--center elementor-widget elementor-widget-mf-button" data-id="71aab40" data-element_type="widget" data-widget_type="mf-button.default">
      <div className="elementor-widget-container">
        <div className="mf-btn-wraper " data-mf-form-conditional-logic-requirement="">
            <button type="submit" className="metform-btn metform-submit-btn " id="">
        <span>${ parent.decodeEntities(`Send Message`) } </span>
      </button>
            </div>
          </div>
      </div>
        </div>
  </div>
      <div className="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
    <div className="elementor-widget-wrap elementor-element-populated">
              <div className="elementor-element elementor-element-b878ead elementor-widget elementor-widget-mf-textarea" data-id="b878ead" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-textarea&quot;}" data-widget_type="mf-textarea.default">
      <div className="elementor-widget-container">

  <div className="mf-input-wrapper">

    <textarea className="mf-input mf-textarea " id="mf-input-text-area-b878ead"
      name="mf-textarea"
      placeholder="${ parent.decodeEntities(`Message`) } "
      cols="30" rows="10"
                onInput=${ parent.handleChange }
        aria-invalid=${validation.errors['mf-textarea'] ? 'true' : 'false'}
        ref=${ el => parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":false,"expression":"null"}, el) }
              ></textarea>

            <${validation.ErrorMessage}
        errors=${validation.errors}
        name="mf-textarea"
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
      <section class="elementor-section elementor-top-section elementor-element elementor-element-7861c007 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="7861c007" data-element_type="section">
          <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-646f2c8a" data-id="646f2c8a" data-element_type="column">
    <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-74b4013f elementor-widget elementor-widget-google_maps" data-id="74b4013f" data-element_type="widget" data-widget_type="google_maps.default">
      <div class="elementor-widget-container">
        <div class="elementor-custom-embed">
    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="%3$s" aria-label="%3$s"></iframe>
  </div>
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


@include('model_footer')
