
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
          <span class="tooltiptext">Cell 001 in Balance Sheet</span>
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
        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Inventory</label>
          <span class="tooltiptext">Cell 031 in Balance Sheet</span>
          </div>
        <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="inventory2" placeholder="${ parent.decodeEntities(`Inventory`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['inventory2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage} errors=${validation.errors} name="inventory2" as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>

        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Revenue (P and S)</label>
          <span class="tooltiptext">Cell 05 in Income Statement</span>
          </div>
        <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="revenue-p-s2" placeholder="${ parent.decodeEntities(`Revenue (P and S)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-p-s2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage} errors=${validation.errors} name="revenue-p-s2" as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>

        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Revenue from Sale</label>
          <span class="tooltiptext">Cell 19 in Income Statement</span>
          </div>
        <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="revenue-sale2" placeholder="${ parent.decodeEntities(`Revenue from Sale`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-sale2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage} errors=${validation.errors} name="revenue-sale2" as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>


        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Profit/Loss Before Tax</label>
          <span class="tooltiptext">Cell 59 in Income Statement</span>
          </div>
        <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="profit-loss-before-tax2" placeholder="${ parent.decodeEntities(`Profit/Loss Before Tax`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['profit-loss-before-tax2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage} errors=${validation.errors} name="profit-loss-before-tax2" as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>


        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Provisions</label>
          <span class="tooltiptext">Cell 089 in Balance Sheet</span>
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


        <br class="mobile" />

        <div class="tt1">
        <label>Intangible Assets</label>
        <span class="tooltiptext">Cell 003 in Balance Sheet</span>
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
        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Financial Accounts</label>
          <span class="tooltiptext">Cell 055 in Balance Sheet</span>
          </div>
        <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="financial-accounts2" placeholder="${ parent.decodeEntities(`Financial Accounts`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['financial-accounts2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage} errors=${validation.errors} name="financial-accounts2" as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>

        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Internal Inventory</label>
          <span class="tooltiptext">Cell 06 in Income Statement</span>
          </div>
        <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="internal-inventory2" placeholder="${ parent.decodeEntities(`Internal Inventory`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['internal-inventory2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage} errors=${validation.errors} name="internal-inventory2" as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>

        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Other Operating Income</label>
          <span class="tooltiptext">Cell 22 in Income Statement</span>
          </div>
        <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="operating-income2" placeholder="${ parent.decodeEntities(`Other Operating Income`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['operating-income2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage} errors=${validation.errors} name="operating-income2" as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>

        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Profit/Loss After Tax</label>
          <span class="tooltiptext">Cell 61 in Income Statement</span>
          </div>
        <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="profit-loss-after-tax2" placeholder="${ parent.decodeEntities(`Profit/Loss After Tax`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['profit-loss-after-tax2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage} errors=${validation.errors} name="profit-loss-after-tax2" as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>

        <div className="elementor-element elementor-element-094f2a0 elementor-widget elementor-widget-mf-email" data-id="094f2a0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">
          <div class="tt1">
          <label>Non-current Liabilities</label>
          <span class="tooltiptext">Cell 094 in Balance Sheet</span>
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
        <label>Property, Plant, Equipment </label>
        <span class="tooltiptext">Cell 011 in Balance Sheet</span>
        </div>

        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="ppe2"
        placeholder="${ parent.decodeEntities(`Property, Plant ... `) } "
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

        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <div class="tt1">
        <label>Accruals/Deferrals Total</label>
        <span class="tooltiptext">Cell 063 in Balance Sheet</span>
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

        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <div class="tt1">
        <label>Own Work Capitalized</label>
        <span class="tooltiptext">Cell 07 in Income Statement</span>
        </div>

        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="own-work2"
        placeholder="${ parent.decodeEntities(`Own Work Capitalized`) } "
          onInput=${parent.handleChange}
        aria-invalid=${validation.errors['own-work2'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage}
        errors=${validation.errors}
        name="own-work2"
        as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>


        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <div class="tt1">
        <label>Revenue from Shares</label>
        <span class="tooltiptext">Cell 27 in Income Statement</span>
        </div>

        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="revenue-shares2"
        placeholder="${ parent.decodeEntities(`Revenue from Shares`) } "
          onInput=${parent.handleChange}
        aria-invalid=${validation.errors['revenue-shares2'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage}
        errors=${validation.errors}
        name="revenue-shares2"
        as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>


        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <div class="tt1">
        <label>Equity</label>
        <span class="tooltiptext">Cell 067 in Balance Sheet</span>
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
        <label>Current Liabilities</label>
        <span class="tooltiptext">Cell 106 in Balance Sheet</span>
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


        <br class="mobile" />

        <div class="tt1">
        <label>Financial Assets</label>
        <span class="tooltiptext">Cell 021 in Balance Sheet</span>
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

        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <div class="tt1">
        <label>Revenue (Merchandise)</label>
        <span class="tooltiptext">Cell 01 in Income Statement</span>
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
        <span class="tooltiptext">Cell 11 in Income Statement</span>
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
        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <div class="tt1">
        <label>Securities and Shares</label>
        <span class="tooltiptext">Cell 28 in Income Statement</span>
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
        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <div class="tt1">
        <label>Retained Earnings</label>
        <span class="tooltiptext">Cell 085 in Balance Sheet</span>
        </div>

        <input
        type="number"
        className="mf-input "
        id="mf-input-text-13c1826"
        name="retained-earnings2"
        placeholder="${ parent.decodeEntities(`Retained Earnings`) } "
          onInput=${parent.handleChange}
        aria-invalid=${validation.errors['retained-earnings2'] ? 'true' : 'false'}
        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />

        <${validation.ErrorMessage}
        errors=${validation.errors}
        name="retained-earnings2"
        as=${html`<span className="mf-error-message"></span>`}
        />

        </div>

        </div>
        </div>
        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <div class="tt1">
        <label>Long-term Bank Loans</label>
        <span class="tooltiptext">Cell 119 in Balance Sheet</span>
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
        <label>Current Assets</label>
        <span class="tooltiptext">Cell 030 in Balance Sheet</span>
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
        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <div class="tt1">
        <label>Production</label>
        <span class="tooltiptext">Cell 04 in Income Statement</span>
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
        <label>Amortization</label>
        <span class="tooltiptext">Cell 18 in Income Statement</span>
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
        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <div class="tt1">
        <label>Interest Expense</label>
        <span class="tooltiptext">Cell 39 in Income Statement</span>
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
        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <div class="tt1">
        <label>Liabilities</label>
        <span class="tooltiptext">Cell 088 in Balance Sheet</span>
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
        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
        <div className="elementor-widget-container">

        <div className="mf-input-wrapper">

        <div class="tt1">
        <label>Accruals/Deferrals</label>
        <span class="tooltiptext">Cell 121 in Balance Sheet</span>
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
        </div>
        </section>
