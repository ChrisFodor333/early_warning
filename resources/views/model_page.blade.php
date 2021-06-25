@include('header')


	<!-- Page Title -->

<!-- Page title -->
<div class="page-title pagetitle_style_2">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-title-container">
                                    <div class="page-title-heading">
                        <h1 class="title">Formulár</h1>
                    </div><!-- /.page-title-captions -->


		<div class="breadcrumb-trail breadcrumbs">
			<span class="trail-browse"></span> <span class="trail-begin"><a href="/early_warning" title="test" rel="home">Home</a></span>
			 <span class="sep">></span> <span class="trail-end">Formulár</span>
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
    			data-action="/early_warning/wp-json/metform/v1/entries/insert/680"
    			data-wp-nonce="32d47e4fb4"
    			data-form-nonce="9d4375ef3e"
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
				type="number"
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
