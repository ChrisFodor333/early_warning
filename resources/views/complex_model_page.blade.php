@include('header')

<!-- Page Title -->
<style>

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

 .adlhide, .hidle, .profitlosshide, .beforetaxhide, .aftertaxhide {
 display: none;
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

.tt1 .tooltiptext2 {
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

.tt1:hover .tooltiptext2 {
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

      function countryChange() {

        document.querySelector('#revchange').innerHTML = "Revenue (Merchandise)";
        document.querySelector('#revchange2').innerHTML = "Revenue (Merchandise)";
        document.querySelector('#revchange3').innerHTML = "Revenue (Merchandise)";

        const placeholders = document.querySelectorAll('.tt15input');
        const products = document.querySelectorAll('.mergehide');
        const services = document.querySelectorAll('.mergehide2');

        products.forEach(function(product) {
           product.style.display = "block";
        });

        services.forEach(function(service) {
           service.style.display = "block";
        });

        placeholders.forEach(function(ph) {
           ph.placeholder = "Revenue (Merch)";
        });

        document.querySelector('#revenueproducts').innerHTML = "Revenue (Products)";
        document.querySelector('#revenueproducts2').innerHTML = "Revenue (Products)";
        document.querySelector('#revenueproducts3').innerHTML = "Revenue (Products)";
        const placeholders2 = document.querySelectorAll('.phrevenuep');


        placeholders2.forEach(function(ph) {
           ph.placeholder = "Revenue (Products)";
        });


        document.querySelector('#adl').innerHTML = "Accruals/Deferrals (A)";
        document.querySelector('#adl2').innerHTML = "Accruals/Deferrals (A)";
        document.querySelector('#adl3').innerHTML = "Accruals/Deferrals (A)";

        const phadl = document.querySelectorAll('.phadl');


        phadl.forEach(function(ph) {
           ph.placeholder = "Accruals/Deferrals (A)";
        });

        const show_deferrals = document.querySelectorAll('.adlhide');
        show_deferrals.forEach(function(deferral) {
           deferral.style.display = "none";
        });

        document.querySelector('#adlel').innerHTML = "Accruals/Deferrals (L & E)";
        document.querySelector('#adlel2').innerHTML = "Accruals/Deferrals (L & E)";
        document.querySelector('#adlel3').innerHTML = "Accruals/Deferrals (L & E)";


        const phadle2 = document.querySelectorAll('.phadle');

        phadle2.forEach(function(ph) {
           ph.placeholder = "Accruals/Deferrals";
        });

        const show_deferrals2 = document.querySelectorAll('.hidle');
        show_deferrals2.forEach(function(deferral) {
           deferral.style.display = "none";
        });

        // Net Profit/Loss of Previous Year
        document.querySelector('#profitlosslab').innerHTML = "Net Profit/Loss of Previous Year";
        document.querySelector('#profitlosslab2').innerHTML = "Net Profit/Loss of Previous Year";
        document.querySelector('#profitlosslab3').innerHTML = "Net Profit/Loss of Previous Year";


        const phprofitloss = document.querySelectorAll('.phprofitloss');

        phprofitloss.forEach(function(ph) {
           ph.placeholder = "Net Profit/Loss";
        });

        const show_profitloss = document.querySelectorAll('.profitlosshide');
        show_profitloss.forEach(function(profitloss) {
           profitloss.style.display = "none";
        });


        //Profit/Loss Before Tax
        document.querySelector('#beforetaxlab').innerHTML = "Profit/Loss Before Tax";
        document.querySelector('#beforetaxlab2').innerHTML = "Profit/Loss Before Tax";
        document.querySelector('#beforetaxlab3').innerHTML = "Profit/Loss Before Tax";

        const phbeforetax = document.querySelectorAll('.phbeforetax');

        phbeforetax.forEach(function(ph) {
           ph.placeholder = "Profit/Loss Before Tax";
        });

        const show_beforetax = document.querySelectorAll('.beforetaxhide');
        show_beforetax.forEach(function(field) {
           field.style.display = "none";
        });

        //Profit/Loss After Tax
        document.querySelector('#aftertaxlab').innerHTML = "Profit/Loss After Tax";
        document.querySelector('#aftertaxlab2').innerHTML = "Profit/Loss After Tax";
        document.querySelector('#aftertaxlab3').innerHTML = "Profit/Loss After Tax";

        const phaftertax = document.querySelectorAll('.phaftertax');

        phaftertax.forEach(function(ph) {
           ph.placeholder = "Profit/Loss After Tax";
        });

        const show_aftertax = document.querySelectorAll('.aftertaxhide');
        show_aftertax.forEach(function(field) {
           field.style.display = "none";
        });

        document.querySelector('#bankloanslab').innerHTML = "Current Bank Loans";
        document.querySelector('#bankloanslab2').innerHTML = "Current Bank Loans";
        document.querySelector('#bankloanslab3').innerHTML = "Current Bank Loans";

        const phbanks = document.querySelectorAll('.phbank');
        phbanks.forEach(function(ph) {
           ph.placeholder = "Current Bank Loans";
        });

        const assistances = document.querySelectorAll('.finhide');
        assistances.forEach(function(assist) {
           assist.style.display = "block";
        });


        if(document.querySelector('#countryselect').value == "Slovakia") {
            document.querySelector('#countryimage').src = "/early_warning/assets/inc/sk2.png";

            document.querySelector('#tt1').innerHTML = "Row 001 in Balance Sheet";
            document.querySelector('#tt2').innerHTML = "Row 033 in Balance Sheet";
            document.querySelector('#tt3').innerHTML = "Row 034 in Balance Sheet";
            document.querySelector('#tt4').innerHTML = "Row 053 in Balance Sheet";
            document.querySelector('#tt5').innerHTML = "Row 071 in Balance Sheet";
            document.querySelector('#tt6').innerHTML = "Accruals/Deferrals (within Assets section) => Row 074 in Balance Sheet";
            document.querySelector('#tt7').innerHTML = "Row 080 in Balance Sheet";
            document.querySelector('#tt8').innerHTML = "Row 097 in Balance Sheet";
            document.querySelector('#tt9').innerHTML = "Row 101 in Balance Sheet";
            document.querySelector('#tt10').innerHTML = "Row 122 in Balance Sheet";
            document.querySelector('#tt11').innerHTML = "Row 136 in Balance Sheet";
            document.querySelector('#tt12').innerHTML = "Row 139 in Balance Sheet";
            document.querySelector('#tt13').innerHTML = "Row 140 in Balance Sheet";
            document.querySelector('#tt14').innerHTML = "Accruals/Deferrals (within Liabilities and Equity section) => Row 141 in Balance Sheet";
            document.querySelector('#tt15').innerHTML = "Revenue from the sale of merchandise => Row 03 in Income Statement";
            document.querySelector('#tt16').innerHTML = "Revenue from the sale of own products => Row 04 in Income Statement";
            document.querySelector('#tt17').innerHTML = "Revenue from the sale of own services => Row 05 in Income Statement";
            document.querySelector('#tt18').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 08 in Income Statement";
            document.querySelector('#tt19').innerHTML = "Row 21 in Income Statement";
            document.querySelector('#tt20').innerHTML = "Row 30 in Income Statement";
            document.querySelector('#tt21').innerHTML = "Row 49 in Income Statement";
            document.querySelector('#tt22').innerHTML = "Profit/loss for the accounting period before tax => Row 56 in Income Statement";
            document.querySelector('#tt23').innerHTML = "Profit/loss for the accounting period after tax => Row 61 in Income Statement";

            document.querySelector('#tt1a').innerHTML = "Row 001 in Balance Sheet";
            document.querySelector('#tt2a').innerHTML = "Row 033 in Balance Sheet";
            document.querySelector('#tt3a').innerHTML = "Row 034 in Balance Sheet";
            document.querySelector('#tt4a').innerHTML = "Row 053 in Balance Sheet";
            document.querySelector('#tt5a').innerHTML = "Row 071 in Balance Sheet";
            document.querySelector('#tt6a').innerHTML = "Accruals/Deferrals (within Assets section) => Row 074 in Balance Sheet";
            document.querySelector('#tt7a').innerHTML = "Row 080 in Balance Sheet";
            document.querySelector('#tt8a').innerHTML = "Row 097 in Balance Sheet";
            document.querySelector('#tt9a').innerHTML = "Row 101 in Balance Sheet";
            document.querySelector('#tt10a').innerHTML = "Row 122 in Balance Sheet";
            document.querySelector('#tt11a').innerHTML = "Row 136 in Balance Sheet";
            document.querySelector('#tt12a').innerHTML = "Row 139 in Balance Sheet";
            document.querySelector('#tt13a').innerHTML = "Row 140 in Balance Sheet";
            document.querySelector('#tt14a').innerHTML = "Accruals/Deferrals (within Liabilities and Equity section) => Row 141 in Balance Sheet";
            document.querySelector('#tt15a').innerHTML = "Revenue from the sale of merchandise => Row 03 in Income Statement";
            document.querySelector('#tt16a').innerHTML = "Revenue from the sale of own products => Row 04 in Income Statement";
            document.querySelector('#tt17a').innerHTML = "Revenue from the sale of own services => Row 05 in Income Statement";
            document.querySelector('#tt18a').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 08 in Income Statement";
            document.querySelector('#tt19a').innerHTML = "Row 21 in Income Statement";
            document.querySelector('#tt20a').innerHTML = "Row 30 in Income Statement";
            document.querySelector('#tt21a').innerHTML = "Row 49 in Income Statement";
            document.querySelector('#tt22a').innerHTML = "Profit/loss for the accounting period before tax => Row 56 in Income Statement";
            document.querySelector('#tt23a').innerHTML = "Profit/loss for the accounting period after tax => Row 61 in Income Statement";

            document.querySelector('#tt1b').innerHTML = "Row 001 in Balance Sheet";
            document.querySelector('#tt2b').innerHTML = "Row 033 in Balance Sheet";
            document.querySelector('#tt3b').innerHTML = "Row 034 in Balance Sheet";
            document.querySelector('#tt4b').innerHTML = "Row 053 in Balance Sheet";
            document.querySelector('#tt5b').innerHTML = "Row 071 in Balance Sheet";
            document.querySelector('#tt6b').innerHTML = "Accruals/Deferrals (within Assets section) => Row 074 in Balance Sheet";
            document.querySelector('#tt7b').innerHTML = "Row 080 in Balance Sheet";
            document.querySelector('#tt8b').innerHTML = "Row 097 in Balance Sheet";
            document.querySelector('#tt9b').innerHTML = "Row 101 in Balance Sheet";
            document.querySelector('#tt10b').innerHTML = "Row 122 in Balance Sheet";
            document.querySelector('#tt11b').innerHTML = "Row 136 in Balance Sheet";
            document.querySelector('#tt12b').innerHTML = "Row 139 in Balance Sheet";
            document.querySelector('#tt13b').innerHTML = "Row 140 in Balance Sheet";
            document.querySelector('#tt14b').innerHTML = "Accruals/Deferrals (within Liabilities and Equity section) => Row 141 in Balance Sheet";
            document.querySelector('#tt15b').innerHTML = "Revenue from the sale of merchandise => Row 03 in Income Statement";
            document.querySelector('#tt16b').innerHTML = "Revenue from the sale of own products => Row 04 in Income Statement";
            document.querySelector('#tt17b').innerHTML = "Revenue from the sale of own services => Row 05 in Income Statement";
            document.querySelector('#tt18b').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 08 in Income Statement";
            document.querySelector('#tt19b').innerHTML = "Row 21 in Income Statement";
            document.querySelector('#tt20b').innerHTML = "Row 30 in Income Statement";
            document.querySelector('#tt21b').innerHTML = "Row 49 in Income Statement";
            document.querySelector('#tt22b').innerHTML = "Profit/loss for the accounting period before tax => Row 56 in Income Statement";
            document.querySelector('#tt23b').innerHTML = "Profit/loss for the accounting period after tax => Row 61 in Income Statement";

            document.querySelector('#tt24').innerHTML = "Row 003 in Balance Sheet";
            document.querySelector('#tt25').innerHTML = "Property, Plant and Equipment (total) => Row 011 in Balance Sheet";
            document.querySelector('#tt26').innerHTML = "Row 021 in Balance Sheet";
            document.querySelector('#tt27').innerHTML = "Row 102 in Balance Sheet";
            document.querySelector('#tt28').innerHTML = "Row 121 in Balance Sheet";
            document.querySelector('#tt29').innerHTML = "Row 28 in Income Statement";
          }


          if(document.querySelector('#countryselect').value == "Hungary") {
              document.querySelector('#countryimage').src = "/early_warning/assets/inc/hu.png";

              document.querySelector('#revchange').innerHTML = "Income from Sales";
              document.querySelector('#revchange2').innerHTML = "Income from Sales";
              document.querySelector('#revchange3').innerHTML = "Income from Sales";
              const placeholders = document.querySelectorAll('.tt15input');

              /*const mywraps = document.querySelectorAll('.mywrap');

              mywraps.forEach(function(mywrap) {
                 mywrap.style.paddingLeft = "8px";
                 mywrap.style.marginRight = "-8px";
              });

              const mywraps2 = document.querySelectorAll('.mywrap2');

              mywraps2.forEach(function(mywrap) {
                 mywrap.style.width = "355px";
              });
              */

              const products = document.querySelectorAll('.mergehide');
              const services = document.querySelectorAll('.mergehide2');

              products.forEach(function(product) {
                 product.style.display = "none";
              });

              services.forEach(function(service) {
                 service.style.display = "none";
              });


              placeholders.forEach(function(ph) {
                 ph.placeholder = "Income from Sales";
              });



              document.querySelector('#tt1').innerHTML = "Row 052 in Balance Sheet";
              document.querySelector('#tt2').innerHTML = "Row 026 in Balance Sheet";
              document.querySelector('#tt3').innerHTML = "Row 027 in Balance Sheet";
              document.querySelector('#tt4').innerHTML = "Row 034 in Balance Sheet";
              document.querySelector('#tt5').innerHTML = "Row 045 in Balance Sheet";
              document.querySelector('#tt6').innerHTML = "Accruals/Deferrals (within Assets section) => Row 048 in Balance Sheet";
              document.querySelector('#tt7').innerHTML = "Row 053 in Balance Sheet";
              document.querySelector('#tt8').innerHTML = "Row 058 in Balance Sheet";
              document.querySelector('#tt9').innerHTML = "Row 066 in Balance Sheet";
              document.querySelector('#tt10').innerHTML = "Row 080 in Balance Sheet";
              document.querySelector('#tt11').innerHTML = "Row 062 in Balance Sheet";
              document.querySelector('#tt12').innerHTML = "Row 083 in Balance Sheet";
              document.querySelector('#tt13').innerHTML = "Row 081 in Balance Sheet";
              document.querySelector('#tt14').innerHTML = "Accruals/Deferrals (within Liabilities and Equity section) => Row 090 in Balance Sheet";
              document.querySelector('#tt15').innerHTML = "Row I. in Income Statement";
              document.querySelector('#tt16').innerHTML = "Revenue from the sale of own products => Row I. in Income Statement";
              document.querySelector('#tt17').innerHTML = "Revenue from the sale of own services => Row I. in Income Statement";
              document.querySelector('#tt18').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row III. in Income Statement";
              document.querySelector('#tt19').innerHTML = "Row VI. in Income Statement";
              document.querySelector('#tt20').innerHTML = "Row 14 in Income Statement";
              document.querySelector('#tt21').innerHTML = "Row 19 in Income Statement";
              document.querySelector('#tt22').innerHTML = "Profit/loss for the accounting period before tax => Row E in Income Statement";
              document.querySelector('#tt23').innerHTML = "Profit/loss for the accounting period after tax => Row F in Income Statement";

              document.querySelector('#tt1a').innerHTML = "Row 052 in Balance Sheet";
              document.querySelector('#tt2a').innerHTML = "Row 026 in Balance Sheet";
              document.querySelector('#tt3a').innerHTML = "Row 027 in Balance Sheet";
              document.querySelector('#tt4a').innerHTML = "Row 034 in Balance Sheet";
              document.querySelector('#tt5a').innerHTML = "Row 045 in Balance Sheet";
              document.querySelector('#tt6a').innerHTML = "Accruals/Deferrals (within Assets section) => Row 048 in Balance Sheet";
              document.querySelector('#tt7a').innerHTML = "Row 053 in Balance Sheet";
              document.querySelector('#tt8a').innerHTML = "Row 058 in Balance Sheet";
              document.querySelector('#tt9a').innerHTML = "Row 066 in Balance Sheet";
              document.querySelector('#tt10a').innerHTML = "Row 080 in Balance Sheet";
              document.querySelector('#tt11a').innerHTML = "Row 062 in Balance Sheet";
              document.querySelector('#tt12a').innerHTML = "Row 083 in Balance Sheet";
              document.querySelector('#tt13a').innerHTML = "Row 081 in Balance Sheet";
              document.querySelector('#tt14a').innerHTML = "Accruals/Deferrals (within Liabilities and Equity section) => Row 090 in Balance Sheet";
              document.querySelector('#tt15a').innerHTML = "Row I. in Income Statement";
              document.querySelector('#tt16a').innerHTML = "Revenue from the sale of own products => Row I. in Income Statement";
              document.querySelector('#tt17a').innerHTML = "Revenue from the sale of own services => Row I. in Income Statement";
              document.querySelector('#tt18a').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row III. in Income Statement";
              document.querySelector('#tt19a').innerHTML = "Row VI. in Income Statement";
              document.querySelector('#tt20a').innerHTML = "Row 14 in Income Statement";
              document.querySelector('#tt21a').innerHTML = "Row 19 in Income Statement";
              document.querySelector('#tt22a').innerHTML = "Profit/loss for the accounting period before tax => Row E in Income Statement";
              document.querySelector('#tt23a').innerHTML = "Profit/loss for the accounting period after tax => Row F in Income Statement";

              document.querySelector('#tt1b').innerHTML = "Row 052 in Balance Sheet";
              document.querySelector('#tt2b').innerHTML = "Row 026 in Balance Sheet";
              document.querySelector('#tt3b').innerHTML = "Row 027 in Balance Sheet";
              document.querySelector('#tt4b').innerHTML = "Row 034 in Balance Sheet";
              document.querySelector('#tt5b').innerHTML = "Row 045 in Balance Sheet";
              document.querySelector('#tt6b').innerHTML = "Accruals/Deferrals (within Assets section) => Row 048 in Balance Sheet";
              document.querySelector('#tt7b').innerHTML = "Row 053 in Balance Sheet";
              document.querySelector('#tt8b').innerHTML = "Row 058 in Balance Sheet";
              document.querySelector('#tt9b').innerHTML = "Row 066 in Balance Sheet";
              document.querySelector('#tt10b').innerHTML = "Row 080 in Balance Sheet";
              document.querySelector('#tt11b').innerHTML = "Row 062 in Balance Sheet";
              document.querySelector('#tt12b').innerHTML = "Row 083 in Balance Sheet";
              document.querySelector('#tt13b').innerHTML = "Row 081 in Balance Sheet";
              document.querySelector('#tt14b').innerHTML = "Accruals/Deferrals (within Liabilities and Equity section) => Row 090 in Balance Sheet";
              document.querySelector('#tt15b').innerHTML = "Row I. in Income Statement";
              document.querySelector('#tt16b').innerHTML = "Revenue from the sale of own products => Row I. in Income Statement";
              document.querySelector('#tt17b').innerHTML = "Revenue from the sale of own services => Row I. in Income Statement";
              document.querySelector('#tt18b').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row III. in Income Statement";
              document.querySelector('#tt19b').innerHTML = "Row VI. in Income Statement";
              document.querySelector('#tt20b').innerHTML = "Row 14 in Income Statement";
              document.querySelector('#tt21b').innerHTML = "Row 19 in Income Statement";
              document.querySelector('#tt22b').innerHTML = "Profit/loss for the accounting period before tax => Row E in Income Statement";
              document.querySelector('#tt23b').innerHTML = "Profit/loss for the accounting period after tax => Row F in Income Statement";

              document.querySelector('#tt24').innerHTML = "Row 002 in Balance Sheet";
              document.querySelector('#tt25').innerHTML = "Property, Plant and Equipment (total) => Row 010 in Balance Sheet";
              document.querySelector('#tt26').innerHTML = "Row 018 in Balance Sheet";
              document.querySelector('#tt27').innerHTML = "Row 071 in Balance Sheet";
              document.querySelector('#tt28').innerHTML = "Row 072 in Balance Sheet";
              document.querySelector('#tt29').innerHTML = "No Tooltip Available";

            }

        if(document.querySelector('#countryselect').value == "Slovenia") {
            document.querySelector('#countryimage').src = "/early_warning/assets/inc/slove.png";
          }

          if(document.querySelector('#countryselect').value == "Austria") {
              document.querySelector('#countryimage').src = "/early_warning/assets/inc/aus.png";
            }

            if(document.querySelector('#countryselect').value == "Bosnia and Herzegovina") {
                document.querySelector('#countryimage').src = "/early_warning/assets/inc/bos.png";

                //Profit/Loss Before Tax
                document.querySelector('#beforetaxlab').innerHTML = "Profit Before Tax";
                document.querySelector('#beforetaxlab2').innerHTML = "Profit Before Tax";
                document.querySelector('#beforetaxlab3').innerHTML = "Profit Before Tax";
                const phbeforetax = document.querySelectorAll('.phbeforetax');

                phbeforetax.forEach(function(ph) {
                   ph.placeholder = "Profit Before Tax";
                });

                const show_beforetax = document.querySelectorAll('.beforetaxhide');
                show_beforetax.forEach(function(field) {
                   field.style.display = "block";
                });

                //Profit/Loss After Tax
                document.querySelector('#aftertaxlab').innerHTML = "Profit After Tax";
                document.querySelector('#aftertaxlab2').innerHTML = "Profit After Tax";
                document.querySelector('#aftertaxlab3').innerHTML = "Profit After Tax";
                const phaftertax = document.querySelectorAll('.phaftertax');

                phaftertax.forEach(function(ph) {
                   ph.placeholder = "Profit After Tax";
                });

                const show_aftertax = document.querySelectorAll('.aftertaxhide');
                show_aftertax.forEach(function(field) {
                   field.style.display = "block";
                });

                // Net Profit/Loss of Previous Year
                document.querySelector('#profitlosslab').innerHTML = "Net Profit of Previous Year";
                document.querySelector('#profitlosslab2').innerHTML = "Net Profit of Previous Year";
                document.querySelector('#profitlosslab3').innerHTML = "Net Profit of Previous Year";



                const phprofitloss = document.querySelectorAll('.phprofitloss');

                phprofitloss.forEach(function(ph) {
                   ph.placeholder = "Net Profit";
                });

                const show_profitloss = document.querySelectorAll('.profitlosshide');
                show_profitloss.forEach(function(profitloss) {
                   profitloss.style.display = "block";
                });

                document.querySelector('#revenueproducts').innerHTML = "Revenue (P & S)";
                document.querySelector('#revenueproducts2').innerHTML = "Revenue (P & S)";
                document.querySelector('#revenueproducts3').innerHTML = "Revenue (P & S)";

                const placeholders = document.querySelectorAll('.phrevenuep');
                const services = document.querySelectorAll('.mergehide2');

                document.querySelector('#adlel').innerHTML = "Accruals (L & E)";
                document.querySelector('#adlel2').innerHTML = "Accruals (L & E)";
                document.querySelector('#adlel3').innerHTML = "Accruals (L & E)";

                const phadle = document.querySelectorAll('.phadle');

                phadle.forEach(function(ph) {
                   ph.placeholder = "Accruals (L & E)";
                });

                const show_deferrals = document.querySelectorAll('.hidle');
                show_deferrals.forEach(function(deferral) {
                   deferral.style.display = "block";
                });


                services.forEach(function(service) {
                   service.style.display = "none";
                });

                placeholders.forEach(function(ph) {
                   ph.placeholder = "Revenue (P & S)";
                });

                document.querySelector('#tt1').innerHTML = "Row 001 in Balance Sheet";
                document.querySelector('#tt2').innerHTML = "Row 031 in Balance Sheet";
                document.querySelector('#tt3').innerHTML = "Row 032 in Balance Sheet";
                document.querySelector('#tt4').innerHTML = "Row 039 in Balance Sheet";
                document.querySelector('#tt5').innerHTML = "Row 056 in Balance Sheet";
                document.querySelector('#tt6').innerHTML = "Accruals/Deferrals (within Assets section) => Row 061 in Balance Sheet";
                document.querySelector('#tt7').innerHTML = "Row 101 in Balance Sheet";
                document.querySelector('#tt8').innerHTML = "Row 120 in Balance Sheet";
                document.querySelector('#tt8RB').innerHTML = "Row 124 in Balance Sheet";
                document.querySelector('#tt9').innerHTML = "Row 135 in Balance Sheet";
                document.querySelector('#tt10').innerHTML = "Row 145 in Balance Sheet";
                document.querySelector('#tt11').innerHTML = "Row 144 in Balance Sheet";
                document.querySelector('#tt12').innerHTML = "Row 150 in Balance Sheet";
                document.querySelector('#tt13').innerHTML = "Row 047 in Balance Sheet";
                document.querySelector('#tt14').innerHTML = "Accruals (within Liabilities and Equity section) => Row 162 in Income Statement";
                document.querySelector('#tt15').innerHTML = "Revenue from the sale of merchandise => Row 202 in Income Statement";
                document.querySelector('#tt16').innerHTML = "Revenue from the sale of own products and services => Row 206 in Income Statement";
                //document.querySelector('#tt17').innerHTML = "Revenue from the sale of own services => Row 206 in Income Statement";
                document.querySelector('#tt18').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 246 in Income Statement";
                document.querySelector('#tt19').innerHTML = "Row 223 in Income Statement";
                document.querySelector('#tt20').innerHTML = "Row 303 in Income Statement";
                document.querySelector('#tt21').innerHTML = "Row 240 in Income Statement";
                document.querySelector('#tt22').innerHTML = "Profit for the accounting period before tax => Row 294 in Income Statement";
                document.querySelector('#tt22RB').innerHTML = "Loss for the accounting period before tax => Row 295 in Income Statement";
                document.querySelector('#tt23').innerHTML = "Profit for the accounting period after tax => Row 299 in Income Statement";
                document.querySelector('#tt23RB').innerHTML = "Loss for the accounting period after tax => Row 300 in Income Statement";

                document.querySelector('#tt1a').innerHTML = "Row 001 in Balance Sheet";
                document.querySelector('#tt2a').innerHTML = "Row 031 in Balance Sheet";
                document.querySelector('#tt3a').innerHTML = "Row 032 in Balance Sheet";
                document.querySelector('#tt4a').innerHTML = "Row 039 in Balance Sheet";
                document.querySelector('#tt5a').innerHTML = "Row 056 in Balance Sheet";
                document.querySelector('#tt6a').innerHTML = "Accruals/Deferrals (within Assets section) => Row 061 in Balance Sheet";
                document.querySelector('#tt7a').innerHTML = "Row 101 in Balance Sheet";
                document.querySelector('#tt8a').innerHTML = "Row 120 in Balance Sheet";
                document.querySelector('#tt8aRB').innerHTML = "Row 124 in Balance Sheet";
                document.querySelector('#tt9a').innerHTML = "Row 135 in Balance Sheet";
                document.querySelector('#tt10a').innerHTML = "Row 145 in Balance Sheet";
                document.querySelector('#tt11a').innerHTML = "Row 144 in Balance Sheet";
                document.querySelector('#tt12a').innerHTML = "Row 150 in Balance Sheet";
                document.querySelector('#tt13a').innerHTML = "Row 047 in Balance Sheet";
                document.querySelector('#tt14a').innerHTML = "Accruals (within Liabilities and Equity section) => Row 162 in Income Statement";
                document.querySelector('#tt15a').innerHTML = "Revenue from the sale of merchandise => Row 202 in Income Statement";
                document.querySelector('#tt16a').innerHTML = "Revenue from the sale of own products and services => Row 206 in Income Statement";
                //document.querySelector('#tt17').innerHTML = "Revenue from the sale of own services => Row 206 in Income Statement";
                document.querySelector('#tt18a').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 246 in Income Statement";
                document.querySelector('#tt19a').innerHTML = "Row 223 in Income Statement";
                document.querySelector('#tt20a').innerHTML = "Row 303 in Income Statement";
                document.querySelector('#tt21a').innerHTML = "Row 240 in Income Statement";
                document.querySelector('#tt22a').innerHTML = "Profit for the accounting period before tax => Row 294 in Income Statement";
                document.querySelector('#tt22aRB').innerHTML = "Loss for the accounting period before tax => Row 295 in Income Statement";
                document.querySelector('#tt23a').innerHTML = "Profit for the accounting period after tax => Row 299 in Income Statement";
                document.querySelector('#tt23aRB').innerHTML = "Loss for the accounting period after tax => Row 300 in Income Statement";


                document.querySelector('#tt1b').innerHTML = "Row 001 in Balance Sheet";
                document.querySelector('#tt2b').innerHTML = "Row 031 in Balance Sheet";
                document.querySelector('#tt3b').innerHTML = "Row 032 in Balance Sheet";
                document.querySelector('#tt4b').innerHTML = "Row 039 in Balance Sheet";
                document.querySelector('#tt5b').innerHTML = "Row 056 in Balance Sheet";
                document.querySelector('#tt6b').innerHTML = "Accruals/Deferrals (within Assets section) => Row 061 in Balance Sheet";
                document.querySelector('#tt7b').innerHTML = "Row 101 in Balance Sheet";
                document.querySelector('#tt8b').innerHTML = "Row 120 in Balance Sheet";
                document.querySelector('#tt8bRB').innerHTML = "Row 124 in Balance Sheet";
                document.querySelector('#tt9b').innerHTML = "Row 135 in Balance Sheet";
                document.querySelector('#tt10b').innerHTML = "Row 145 in Balance Sheet";
                document.querySelector('#tt11b').innerHTML = "Row 144 in Balance Sheet";
                document.querySelector('#tt12b').innerHTML = "Row 150 in Balance Sheet";
                document.querySelector('#tt13b').innerHTML = "Row 047 in Balance Sheet";
                document.querySelector('#tt14b').innerHTML = "Accruals (within Liabilities and Equity section) => Row 162 in Income Statement";
                document.querySelector('#tt15b').innerHTML = "Revenue from the sale of merchandise => Row 202 in Income Statement";
                document.querySelector('#tt16b').innerHTML = "Revenue from the sale of own products and services => Row 206 in Income Statement";
                //document.querySelector('#tt17').innerHTML = "Revenue from the sale of own services => Row 206 in Income Statement";
                document.querySelector('#tt18b').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 246 in Income Statement";
                document.querySelector('#tt19b').innerHTML = "Row 223 in Income Statement";
                document.querySelector('#tt20b').innerHTML = "Row 303 in Income Statement";
                document.querySelector('#tt21b').innerHTML = "Row 240 in Income Statement";
                document.querySelector('#tt22b').innerHTML = "Profit for the accounting period before tax => Row 294 in Income Statement";
                document.querySelector('#tt22bRB').innerHTML = "Loss for the accounting period before tax => Row 295 in Income Statement";
                document.querySelector('#tt23b').innerHTML = "Profit for the accounting period after tax => Row 299 in Income Statement";
                document.querySelector('#tt23bRB').innerHTML = "Loss for the accounting period after tax => Row 300 in Income Statement";

                document.querySelector('#tt24').innerHTML = "Row 002 in Balance Sheet";
                document.querySelector('#tt25').innerHTML = "Property, Plant and Equipment (total) => Row 008 in Balance Sheet";
                document.querySelector('#tt26').innerHTML = "Row 021 in Balance Sheet";
                document.querySelector('#tt27').innerHTML = "Row 136 in Balance Sheet";
                document.querySelector('#tt28').innerHTML = "Row 140 in Balance Sheet";
                document.querySelector('#tt29').innerHTML = "Row 059 in Balance Sheet";


              }


            if(document.querySelector('#countryselect').value == "Romania") {
                document.querySelector('#countryimage').src = "/early_warning/assets/inc/rom.png";
                document.querySelector('#provis').innerHTML = "Provisions";
                document.querySelector('#provis2').innerHTML = "Provisions";
                document.querySelector('#provis3').innerHTML = "Provisions";

                document.querySelector('#adl').innerHTML = "Accruals (A)";
                document.querySelector('#adl2').innerHTML = "Accruals (A)";
                document.querySelector('#adl3').innerHTML = "Accruals (A)";

                const phadl = document.querySelectorAll('.phadl');

                phadl.forEach(function(ph) {
                   ph.placeholder = "Accruals (A)";
                });

                const show_deferrals = document.querySelectorAll('.adlhide');
                show_deferrals.forEach(function(deferral) {
                   deferral.style.display = "block";
                });

                // Net Profit/Loss of Previous Year
                document.querySelector('#profitlosslab').innerHTML = "Net Profit of Previous Year";
                document.querySelector('#profitlosslab2').innerHTML = "Net Profit of Previous Year";
                document.querySelector('#profitlosslab3').innerHTML = "Net Profit of Previous Year";


                const phprofitloss = document.querySelectorAll('.phprofitloss');

                phprofitloss.forEach(function(ph) {
                   ph.placeholder = "Net Profit";
                });

                const show_profitloss = document.querySelectorAll('.profitlosshide');
                show_profitloss.forEach(function(profitloss) {
                   profitloss.style.display = "block";
                });

                //Profit/Loss Before Tax
                document.querySelector('#beforetaxlab').innerHTML = "Profit Before Tax";
                document.querySelector('#beforetaxlab2').innerHTML = "Profit Before Tax";
                document.querySelector('#beforetaxlab3').innerHTML = "Profit Before Tax";

                const phbeforetax = document.querySelectorAll('.phbeforetax');

                phbeforetax.forEach(function(ph) {
                   ph.placeholder = "Profit Before Tax";
                });

                const show_beforetax = document.querySelectorAll('.beforetaxhide');
                show_beforetax.forEach(function(field) {
                   field.style.display = "block";
                });

                //Profit/Loss After Tax
                document.querySelector('#aftertaxlab').innerHTML = "Profit After Tax";
                document.querySelector('#aftertaxlab2').innerHTML = "Profit After Tax";
                document.querySelector('#aftertaxlab3').innerHTML = "Profit After Tax";
                const phaftertax = document.querySelectorAll('.phaftertax');

                phaftertax.forEach(function(ph) {
                   ph.placeholder = "Profit After Tax";
                });

                const show_aftertax = document.querySelectorAll('.aftertaxhide');
                show_aftertax.forEach(function(field) {
                   field.style.display = "block";
                });




                document.querySelector('#revenueproducts').innerHTML = "Revenue (P & S)";
                document.querySelector('#revenueproducts2').innerHTML = "Revenue (P & S)";
                document.querySelector('#revenueproducts3').innerHTML = "Revenue (P & S)";
                const placeholders = document.querySelectorAll('.phrevenuep');
                const services = document.querySelectorAll('.mergehide2');


                services.forEach(function(service) {
                   service.style.display = "none";
                });

                placeholders.forEach(function(ph) {
                   ph.placeholder = "Revenue (P & S)";
                });



                document.querySelector('#tt1').innerHTML = "Row 013 + Row 015 in Balance Sheet";
                document.querySelector('#tt2').innerHTML = "Row 009 in Balance Sheet";
                document.querySelector('#tt3').innerHTML = "Row 005 in Balance Sheet";
                document.querySelector('#tt4').innerHTML = "Row 006 in Balance Sheet";
                document.querySelector('#tt5').innerHTML = "Row 008 in Balance Sheet";
                document.querySelector('#tt6').innerHTML = "Accruals (within Assets section) => Row 010 in Balance Sheet";
                document.querySelector('#tt7').innerHTML = "Row 046 in Balance Sheet";
                document.querySelector('#tt8').innerHTML = "Row 041 in Balance Sheet";
                document.querySelector('#tt8RB').innerHTML = "Row 042 in Balance Sheet";
                document.querySelector('#tt9').innerHTML = "Row 013 + Row 016 in Balance Sheet";
                document.querySelector('#tt10').innerHTML = "Row 013 in Balance Sheet";
                document.querySelector('#tt11').innerHTML = "Row 017 in Balance Sheet";
                document.querySelector('#tt12').innerHTML = "Row 96 in Form 30";
                document.querySelector('#tt13').innerHTML = "Row 96 in Form 30";
                document.querySelector('#tt14').innerHTML = "No Tooltip Available";
                document.querySelector('#tt15').innerHTML = "Revenue from the sale of merchandise => Row 03 in Form 20";
                document.querySelector('#tt16').innerHTML = "Revenue from the sale of own products and services => Row 02 in Form 20";
                //document.querySelector('#tt17').innerHTML = "Revenue from the sale of own services => Row 02 in Form 20";
                document.querySelector('#tt18').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 13 in Form 20";
                document.querySelector('#tt19').innerHTML = "Row 25 in Form 20";
                document.querySelector('#tt20').innerHTML = "Row 45 in Form 20";
                document.querySelector('#tt21').innerHTML = "Row 56 in Form 20";
                document.querySelector('#tt22').innerHTML = "Profit for the accounting period before tax => Row 64 in Form 20";
                document.querySelector('#tt22RB').innerHTML = "Loss for the accounting period before tax => Row 65 in Form 20";
                document.querySelector('#tt23').innerHTML = "Profit for the accounting period after tax => Row 69 in Form 20";
                document.querySelector('#tt23RB').innerHTML = "Loss for the accounting period after tax => Row 70 in Form 20";

                document.querySelector('#tt1a').innerHTML = "Row 013 + Row 015 in Balance Sheet";
                document.querySelector('#tt2a').innerHTML = "Row 009 in Balance Sheet";
                document.querySelector('#tt3a').innerHTML = "Row 005 in Balance Sheet";
                document.querySelector('#tt4a').innerHTML = "Row 006 in Balance Sheet";
                document.querySelector('#tt5a').innerHTML = "Row 008 in Balance Sheet";
                document.querySelector('#tt6a').innerHTML = "Accruals (within Assets section) => Row 010 in Balance Sheet";
                document.querySelector('#tt7a').innerHTML = "Row 046 in Balance Sheet";
                document.querySelector('#tt8a').innerHTML = "Row 041 in Balance Sheet";
                document.querySelector('#tt8aRB').innerHTML = "Row 042 in Balance Sheet";
                document.querySelector('#tt9a').innerHTML = "Row 013 + Row 016 in Balance Sheet";
                document.querySelector('#tt10a').innerHTML = "Row 013 in Balance Sheet";
                document.querySelector('#tt11a').innerHTML = "Row 017 in Balance Sheet";
                document.querySelector('#tt12a').innerHTML = "Row 96 in Form 30";
                document.querySelector('#tt13a').innerHTML = "Row 96 in Form 30";
                document.querySelector('#tt14a').innerHTML = "No Tooltip Available";
                document.querySelector('#tt15a').innerHTML = "Revenue from the sale of merchandise => Row 03 in Form 20";
                document.querySelector('#tt16a').innerHTML = "Revenue from the sale of own products and services => Row 02 in Form 20";
                //document.querySelector('#tt17').innerHTML = "Revenue from the sale of own services => Row 02 in Form 20";
                document.querySelector('#tt18a').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 13 in Form 20";
                document.querySelector('#tt19a').innerHTML = "Row 25 in Form 20";
                document.querySelector('#tt20a').innerHTML = "Row 45 in Form 20";
                document.querySelector('#tt21a').innerHTML = "Row 56 in Form 20";
                document.querySelector('#tt22a').innerHTML = "Profit for the accounting period before tax => Row 64 in Form 20";
                document.querySelector('#tt22aRB').innerHTML = "Loss for the accounting period before tax => Row 65 in Form 20";
                document.querySelector('#tt23a').innerHTML = "Profit for the accounting period after tax => Row 69 in Form 20";
                document.querySelector('#tt23aRB').innerHTML = "Loss for the accounting period after tax => Row 70 in Form 20";

                document.querySelector('#tt1b').innerHTML = "Row 013 + Row 015 in Balance Sheet";
                document.querySelector('#tt2b').innerHTML = "Row 009 in Balance Sheet";
                document.querySelector('#tt3b').innerHTML = "Row 005 in Balance Sheet";
                document.querySelector('#tt4b').innerHTML = "Row 006 in Balance Sheet";
                document.querySelector('#tt5b').innerHTML = "Row 008 in Balance Sheet";
                document.querySelector('#tt6b').innerHTML = "Accruals (within Assets section) => Row 010 in Balance Sheet";
                document.querySelector('#tt7b').innerHTML = "Row 046 in Balance Sheet";
                document.querySelector('#tt8b').innerHTML = "Row 041 in Balance Sheet";
                document.querySelector('#tt8bRB').innerHTML = "Row 042 in Balance Sheet";
                document.querySelector('#tt9b').innerHTML = "Row 013 + Row 016 in Balance Sheet";
                document.querySelector('#tt10b').innerHTML = "Row 013 in Balance Sheet";
                document.querySelector('#tt11b').innerHTML = "Row 017 in Balance Sheet";
                document.querySelector('#tt12b').innerHTML = "Row 96 in Form 30";
                document.querySelector('#tt13b').innerHTML = "Row 96 in Form 30";
                document.querySelector('#tt14b').innerHTML = "No Tooltip Available";
                document.querySelector('#tt15b').innerHTML = "Revenue from the sale of merchandise => Row 03 in Form 20";
                document.querySelector('#tt16b').innerHTML = "Revenue from the sale of own products and services => Row 02 in Form 20";
                //document.querySelector('#tt17').innerHTML = "Revenue from the sale of own services => Row 02 in Form 20";
                document.querySelector('#tt18b').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 13 in Form 20";
                document.querySelector('#tt19b').innerHTML = "Row 25 in Form 20";
                document.querySelector('#tt20b').innerHTML = "Row 45 in Form 20";
                document.querySelector('#tt21b').innerHTML = "Row 56 in Form 20";
                document.querySelector('#tt22b').innerHTML = "Profit for the accounting period before tax => Row 64 in Form 20";
                document.querySelector('#tt22bRB').innerHTML = "Loss for the accounting period before tax => Row 65 in Form 20";
                document.querySelector('#tt23b').innerHTML = "Profit for the accounting period after tax => Row 69 in Form 20";
                document.querySelector('#tt23bRB').innerHTML = "Loss for the accounting period after tax => Row 70 in Form 20";


                document.querySelector('#tt24').innerHTML = "Row 001 in Balance Sheet";
                document.querySelector('#tt25').innerHTML = "Property, Plant and Equipment (total) => Row 002 in Balance Sheet";
                document.querySelector('#tt26').innerHTML = "Row 003 in Balance Sheet";
                document.querySelector('#tt27').innerHTML = "No Tooltip Available";
                document.querySelector('#tt28').innerHTML = "Row 99 in Form 30";
                document.querySelector('#tt29').innerHTML = "No Tooltip Available";


              } else {
                document.querySelector('#provis').innerHTML = "Short-term Provisions";
                document.querySelector('#provis2').innerHTML = "Short-term Provisions";
                document.querySelector('#provis3').innerHTML = "Short-term Provisions";
              }

            if(document.querySelector('#countryselect').value == "Croatia") {
                document.querySelector('#countryimage').src = "/early_warning/assets/inc/cro.png";
                document.querySelector('#revchange').innerHTML = "Income from Sales";
                document.querySelector('#revchange2').innerHTML = "Income from Sales";
                document.querySelector('#revchange3').innerHTML = "Income from Sales";

                document.querySelector('#bankloanslab').innerHTML = "Current Loans";
                document.querySelector('#bankloanslab2').innerHTML = "Current Loans";
                document.querySelector('#bankloanslab3').innerHTML = "Current Loans";

                const assistances = document.querySelectorAll('.finhide');
                assistances.forEach(function(assist) {
                   assist.style.display = "none";
                });

                const phbanks = document.querySelectorAll('.phbank');
                phbanks.forEach(function(ph) {
                   ph.placeholder = "Current Loans";
                });

                const placeholders = document.querySelectorAll('.tt15input');
                const products = document.querySelectorAll('.mergehide');
                const services = document.querySelectorAll('.mergehide2');

                /*const mywraps = document.querySelectorAll('.mywrap');

                mywraps.forEach(function(mywrap) {
                   mywrap.style.paddingLeft = "8px";
                   mywrap.style.marginRight = "-8px";
                });

                const mywraps2 = document.querySelectorAll('.mywrap2');

                mywraps2.forEach(function(mywrap) {
                   mywrap.style.width = "355px";
                });
                */

                products.forEach(function(product) {
                   product.style.display = "none";
                });

                services.forEach(function(service) {
                   service.style.display = "none";
                });

                placeholders.forEach(function(ph) {
                   ph.placeholder = "Income from Sales";
                });

                document.querySelector('#tt1').innerHTML = "Row 065 in Balance Sheet";
                document.querySelector('#tt2').innerHTML = "Row 037 in Balance Sheet";
                document.querySelector('#tt3').innerHTML = "Row 038 in Balance Sheet";
                document.querySelector('#tt4').innerHTML = "Row 046 in Balance Sheet";
                document.querySelector('#tt5').innerHTML = "Row 053 in Balance Sheet";
                document.querySelector('#tt6').innerHTML = "Accruals/Deferrals (within Assets section) => Row 064 in Balance Sheet";
                document.querySelector('#tt7').innerHTML = "Row 067 in Balance Sheet";
                document.querySelector('#tt8').innerHTML = "Row 084 in Balance Sheet";
                document.querySelector('#tt9').innerHTML = "Row 123 in Balance Sheet";
                document.querySelector('#tt10').innerHTML = "Row 107 in Balance Sheet";
                document.querySelector('#tt11').innerHTML = "Row 088 in Balance Sheet";
                document.querySelector('#tt12').innerHTML = "Row 109 in Balance Sheet";
                document.querySelector('#tt13').innerHTML = "Row 109 in Balance Sheet";
                document.querySelector('#tt14').innerHTML = "Accruals/Deferrals (within Liabilities and Equity section) => Row 122 in Balance Sheet";
                document.querySelector('#tt15').innerHTML = "Row 127 in Income Statement";
                document.querySelector('#tt16').innerHTML = "Revenue from the sale of own products => Row 127 in Income Statement";
                document.querySelector('#tt17').innerHTML = "Revenue from the sale of own services => Row 127 in Income Statement";
                document.querySelector('#tt18').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 154 in Income Statement";
                document.querySelector('#tt19').innerHTML = "Row 141 in Income Statement";
                document.querySelector('#tt20').innerHTML = "Row 155 in Income Statement";
                document.querySelector('#tt21').innerHTML = "Row 161 in Income Statement";
                document.querySelector('#tt22').innerHTML = "Profit/loss for the accounting period before tax => Row 179 in Income Statement";
                document.querySelector('#tt23').innerHTML = "Profit/loss for the accounting period after tax => Row 183 in Income Statement";

                document.querySelector('#tt1a').innerHTML = "Row 065 in Balance Sheet";
                document.querySelector('#tt2a').innerHTML = "Row 037 in Balance Sheet";
                document.querySelector('#tt3a').innerHTML = "Row 038 in Balance Sheet";
                document.querySelector('#tt4a').innerHTML = "Row 046 in Balance Sheet";
                document.querySelector('#tt5a').innerHTML = "Row 053 in Balance Sheet";
                document.querySelector('#tt6a').innerHTML = "Accruals/Deferrals (within Assets section) => Row 064 in Balance Sheet";
                document.querySelector('#tt7a').innerHTML = "Row 067 in Balance Sheet";
                document.querySelector('#tt8a').innerHTML = "Row 084 in Balance Sheet";
                document.querySelector('#tt9a').innerHTML = "Row 123 in Balance Sheet";
                document.querySelector('#tt10a').innerHTML = "Row 107 in Balance Sheet";
                document.querySelector('#tt11a').innerHTML = "Row 088 in Balance Sheet";
                document.querySelector('#tt12a').innerHTML = "Row 109 in Balance Sheet";
                document.querySelector('#tt13a').innerHTML = "Row 109 in Balance Sheet";
                document.querySelector('#tt14a').innerHTML = "Accruals/Deferrals (within Liabilities and Equity section) => Row 122 in Balance Sheet";
                document.querySelector('#tt15a').innerHTML = "Row 127 in Income Statement";
                document.querySelector('#tt16a').innerHTML = "Revenue from the sale of own products => Row 127 in Income Statement";
                document.querySelector('#tt17a').innerHTML = "Revenue from the sale of own services => Row 127 in Income Statement";
                document.querySelector('#tt18a').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 154 in Income Statement";
                document.querySelector('#tt19a').innerHTML = "Row 141 in Income Statement";
                document.querySelector('#tt20a').innerHTML = "Row 155 in Income Statement";
                document.querySelector('#tt21a').innerHTML = "Row 161 in Income Statement";
                document.querySelector('#tt22a').innerHTML = "Profit/loss for the accounting period before tax => Row 179 in Income Statement";
                document.querySelector('#tt23a').innerHTML = "Profit/loss for the accounting period after tax => Row 183 in Income Statement";

                document.querySelector('#tt1b').innerHTML = "Row 065 in Balance Sheet";
                document.querySelector('#tt2b').innerHTML = "Row 037 in Balance Sheet";
                document.querySelector('#tt3b').innerHTML = "Row 038 in Balance Sheet";
                document.querySelector('#tt4b').innerHTML = "Row 046 in Balance Sheet";
                document.querySelector('#tt5b').innerHTML = "Row 053 in Balance Sheet";
                document.querySelector('#tt6b').innerHTML = "Accruals/Deferrals (within Assets section) => Row 064 in Balance Sheet";
                document.querySelector('#tt7b').innerHTML = "Row 067 in Balance Sheet";
                document.querySelector('#tt8b').innerHTML = "Row 084 in Balance Sheet";
                document.querySelector('#tt9b').innerHTML = "Row 123 in Balance Sheet";
                document.querySelector('#tt10b').innerHTML = "Row 107 in Balance Sheet";
                document.querySelector('#tt11b').innerHTML = "Row 088 in Balance Sheet";
                document.querySelector('#tt12b').innerHTML = "Row 109 in Balance Sheet";
                document.querySelector('#tt13b').innerHTML = "Row 109 in Balance Sheet";
                document.querySelector('#tt14b').innerHTML = "Accruals/Deferrals (within Liabilities and Equity section) => Row 122 in Balance Sheet";
                document.querySelector('#tt15b').innerHTML = "Row 127 in Income Statement";
                document.querySelector('#tt16b').innerHTML = "Revenue from the sale of own products => Row 127 in Income Statement";
                document.querySelector('#tt17b').innerHTML = "Revenue from the sale of own services => Row 127 in Income Statement";
                document.querySelector('#tt18b').innerHTML = "Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 154 in Income Statement";
                document.querySelector('#tt19b').innerHTML = "Row 141 in Income Statement";
                document.querySelector('#tt20b').innerHTML = "Row 155 in Income Statement";
                document.querySelector('#tt21b').innerHTML = "Row 161 in Income Statement";
                document.querySelector('#tt22b').innerHTML = "Profit/loss for the accounting period before tax => Row 179 in Income Statement";
                document.querySelector('#tt23b').innerHTML = "Profit/loss for the accounting period after tax => Row 183 in Income Statement";

                document.querySelector('#tt24').innerHTML = "Row 003 in Balance Sheet";
                document.querySelector('#tt25').innerHTML = "Property, Plant and Equipment (total) => Row 010 in Balance Sheet";
                document.querySelector('#tt26').innerHTML = "Row 020 in Balance Sheet";
                document.querySelector('#tt27').innerHTML = "Row 095 in Balance Sheet";
                document.querySelector('#tt28').innerHTML = "Row 097 in Balance Sheet";
                document.querySelector('#tt29').innerHTML = "Row 130 in Income Statement";

              }

            if(document.querySelector('#countryselect').value == "Germany") {
                document.querySelector('#countryimage').src = "/early_warning/assets/inc/ger.png";

                document.querySelector('#tt1').innerHTML = "Row 001 in Balance Sheet";
                document.querySelector('#tt2').innerHTML = "Row 020 in Balance Sheet";
                document.querySelector('#tt3').innerHTML = "Row 021 in Balance Sheet";
                document.querySelector('#tt4').innerHTML = "Row 026 in Balance Sheet";
                document.querySelector('#tt5').innerHTML = "No Tooltip Available";
                document.querySelector('#tt6').innerHTML = "Accruals/Deferrals (within Assets section) => Row 035 in Balance Sheet";
                document.querySelector('#tt7').innerHTML = "Row 039 in Balance Sheet";
                document.querySelector('#tt8').innerHTML = "Row 048 in Balance Sheet";
                document.querySelector('#tt9').innerHTML = "Row 053 in Balance Sheet";
                document.querySelector('#tt10').innerHTML = "No Tooltip Available";
                document.querySelector('#tt11').innerHTML = "No Tooltip Available";
                document.querySelector('#tt12').innerHTML = "No Tooltip Available";
                document.querySelector('#tt13').innerHTML = "No Tooltip Available";
                document.querySelector('#tt14').innerHTML = "Accruals/Deferrals (within Liabilities and Equity section) => Row 062 in Balance Sheet";
                document.querySelector('#tt15').innerHTML = "No Tooltip Available";
                document.querySelector('#tt16').innerHTML = "No Tooltip Available";
                document.querySelector('#tt17').innerHTML = "No Tooltip Available";
                document.querySelector('#tt18').innerHTML = "No Tooltip Available";
                document.querySelector('#tt19').innerHTML = "Row 11 in Income Statement";
                document.querySelector('#tt20').innerHTML = "Row 16 in Income Statement";
                document.querySelector('#tt21').innerHTML = "Row 19 in Income Statement";
                document.querySelector('#tt22').innerHTML = "No Tooltip Available";
                document.querySelector('#tt23').innerHTML = "No Tooltip Available";

                document.querySelector('#tt1a').innerHTML = "Row 001 in Balance Sheet";
                document.querySelector('#tt2a').innerHTML = "Row 020 in Balance Sheet";
                document.querySelector('#tt3a').innerHTML = "Row 021 in Balance Sheet";
                document.querySelector('#tt4a').innerHTML = "Row 026 in Balance Sheet";
                document.querySelector('#tt5a').innerHTML = "No Tooltip Available";
                document.querySelector('#tt6a').innerHTML = "Accruals/Deferrals (within Assets section) => Row 035 in Balance Sheet";
                document.querySelector('#tt7a').innerHTML = "Row 039 in Balance Sheet";
                document.querySelector('#tt8a').innerHTML = "Row 048 in Balance Sheet";
                document.querySelector('#tt9a').innerHTML = "Row 053 in Balance Sheet";
                document.querySelector('#tt10a').innerHTML = "No Tooltip Available";
                document.querySelector('#tt11a').innerHTML = "No Tooltip Available";
                document.querySelector('#tt12a').innerHTML = "No Tooltip Available";
                document.querySelector('#tt13a').innerHTML = "No Tooltip Available";
                document.querySelector('#tt14a').innerHTML = "Accruals/Deferrals (within Liabilities and Equity section) => Row 062 in Balance Sheet";
                document.querySelector('#tt15a').innerHTML = "No Tooltip Available";
                document.querySelector('#tt16a').innerHTML = "No Tooltip Available";
                document.querySelector('#tt17a').innerHTML = "No Tooltip Available";
                document.querySelector('#tt18a').innerHTML = "No Tooltip Available";
                document.querySelector('#tt19a').innerHTML = "Row 11 in Income Statement";
                document.querySelector('#tt20a').innerHTML = "Row 16 in Income Statement";
                document.querySelector('#tt21a').innerHTML = "Row 19 in Income Statement";
                document.querySelector('#tt22a').innerHTML = "No Tooltip Available";
                document.querySelector('#tt23a').innerHTML = "No Tooltip Available";

                document.querySelector('#tt1b').innerHTML = "Row 001 in Balance Sheet";
                document.querySelector('#tt2b').innerHTML = "Row 020 in Balance Sheet";
                document.querySelector('#tt3b').innerHTML = "Row 021 in Balance Sheet";
                document.querySelector('#tt4b').innerHTML = "Row 026 in Balance Sheet";
                document.querySelector('#tt5b').innerHTML = "No Tooltip Available";
                document.querySelector('#tt6b').innerHTML = "Accruals/Deferrals (within Assets section) => Row 035 in Balance Sheet";
                document.querySelector('#tt7b').innerHTML = "Row 039 in Balance Sheet";
                document.querySelector('#tt8b').innerHTML = "Row 048 in Balance Sheet";
                document.querySelector('#tt9b').innerHTML = "Row 053 in Balance Sheet";
                document.querySelector('#tt10b').innerHTML = "No Tooltip Available";
                document.querySelector('#tt11b').innerHTML = "No Tooltip Available";
                document.querySelector('#tt12b').innerHTML = "No Tooltip Available";
                document.querySelector('#tt13b').innerHTML = "No Tooltip Available";
                document.querySelector('#tt14b').innerHTML = "Accruals/Deferrals (within Liabilities and Equity section) => Row 062 in Balance Sheet";
                document.querySelector('#tt15b').innerHTML = "No Tooltip Available";
                document.querySelector('#tt16b').innerHTML = "No Tooltip Available";
                document.querySelector('#tt17b').innerHTML = "No Tooltip Available";
                document.querySelector('#tt18b').innerHTML = "No Tooltip Available";
                document.querySelector('#tt19b').innerHTML = "Row 11 in Income Statement";
                document.querySelector('#tt20b').innerHTML = "Row 16 in Income Statement";
                document.querySelector('#tt21b').innerHTML = "Row 19 in Income Statement";
                document.querySelector('#tt22b').innerHTML = "No Tooltip Available";
                document.querySelector('#tt23b').innerHTML = "No Tooltip Available";


                document.querySelector('#tt24').innerHTML = "Row 003 in Balance Sheet";
                document.querySelector('#tt25').innerHTML = "Property, Plant and Equipment (total) => Row 008 in Balance Sheet";
                document.querySelector('#tt26').innerHTML = "Row 013 in Balance Sheet";
                document.querySelector('#tt27').innerHTML = "No Tooltip Available";
                document.querySelector('#tt28').innerHTML = "No Tooltip Available";
                document.querySelector('#tt29').innerHTML = "No Tooltip Available";

              }

            if(document.querySelector('#countryselect').value == "Moldova") {
                document.querySelector('#countryimage').src = "/early_warning/assets/inc/mold.png";
              }

            if(document.querySelector('#countryselect').value == "Serbia") {
                document.querySelector('#countryimage').src = "/early_warning/assets/inc/serb.png";
              }

            if(document.querySelector('#countryselect').value == "Ukraine") {
                document.querySelector('#countryimage').src = "/early_warning/assets/inc/ukr.png";
              }

              // DISPLAY NONE

              if(document.querySelector('#countryselect').value == "Ukraine" ||
                 document.querySelector('#countryselect').value == "Austria" ||
                 document.querySelector('#countryselect').value == "Slovenia" ||
                 document.querySelector('#countryselect').value == "Serbia" ||
                 document.querySelector('#countryselect').value == "Moldova") {
                  const tooltips = document.querySelectorAll('.tooltiptext');
                  const labels = document.querySelectorAll('label');

                  tooltips.forEach(function(tooltip) {
                     tooltip.style.display = "none";
                  });

                  labels.forEach(function(label) {
                     label.style.cursor = "default";
                  });

                } else {
                  const tooltips = document.querySelectorAll('.tooltiptext');
                  const labels = document.querySelectorAll('label');

                  tooltips.forEach(function(tooltip) {
                     tooltip.style.display = "block";
                  });

                  labels.forEach(function(label) {
                     label.style.cursor = "help";
                  });
                }
      }

      function myfunction() {
        document.querySelector('#curyeartext').innerHTML = document.querySelector('#curyear').value;
        document.querySelector('#lastyear').innerHTML = document.querySelector('#curyear').value-1;
        document.querySelector('#yearbefore').innerHTML = document.querySelector('#curyear').value-2;
        document.querySelector('#extra').innerHTML = "Additional Information for the Year of " + Number(document.querySelector('#curyear').value-1);

        /*if(document.querySelector('#curyear').value >= 2014) {
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

        */


        document.querySelectorAll('.yearlabel').forEach(function(field) {
            field.innerHTML = "(" + Number(document.querySelector('#curyear').value) + ")";
        });

        document.querySelectorAll('.yearlabel2').forEach(function(field) {
            field.innerHTML = "(" + Number(document.querySelector('#curyear').value-1) + ")";
        });


        document.querySelectorAll('.yearlabel1').forEach(function(field) {
            field.innerHTML = "(" + Number(document.querySelector('#curyear').value-2) + ")";
        });

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
    <h6>Hover Over the Input Labels to Get a Hint on Where You Can Find The Required Data (This Only Works for the Residents of <img id="countryimage" src="/early_warning/assets/inc/sk2.png"/> )</h6>


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

            <div className="tablet mf-input-wrapper">
              <div class="tt1">
              <label>Country</label>
              <span class="tooltiptext2">Enter the country where the company is based</span>
              </div>
              <select
              className="mf-input"
              name="country"
              id="countryselect"
              onInput=${countryChange}
              required
              >
              <?php foreach($countries as $country) : ?>
                <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
              <?php endforeach; ?>
            </select>

            <input
            type="hidden"
            className="mf-input"
            id="mf-input-text-13c1826"
            name="_token"
            value="{{ csrf_token() }}"
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
            <span class="tooltiptext2">Enter the Year You Want to Use as the Current Year</span>
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
    <span class="tooltiptext" id="tt1">Row 001 in Balance Sheet</span>
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
  <span class="tooltiptext" id="tt1a">Row 001 in Balance Sheet</span>
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
<span class="tooltiptext" id="tt1b">Row 001 in Balance Sheet</span>
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
                <span class="tooltiptext" id="tt4">Row 053 in Balance Sheet</span>
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
                <span class="tooltiptext" id="tt4a">Row 053 in Balance Sheet</span>
                </div>
                <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="current-receivables2" placeholder="${ parent.decodeEntities(`Current Receivables`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['current-receivables2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
                <span class="tooltiptext" id="tt4b">Row 053 in Balance Sheet</span>
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
          <span class="tooltiptext" id="tt5">Row 071 in Balance Sheet</span>
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
        <span class="tooltiptext" id="tt5a">Row 071 in Balance Sheet</span>
        </div>
      <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="financial-accounts2" placeholder="${ parent.decodeEntities(`Financial Accounts`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['financial-accounts2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
      <span class="tooltiptext" id="tt5b">Row 071 in Balance Sheet</span>
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
            <label id="adl">Accruals/Deferrals (A)</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
            <span class="tooltiptext" id="tt6">Accruals/Deferrals (within Assets section) => Row 074 in Balance Sheet</span>
            </div>
                <input
                  type="number"
                  className="mf-input phadl"
                  id="mf-input-text-13c1826"
                  name="ad-total"
                  placeholder="${ parent.decodeEntities(`Accruals/Deferrals (A)`) } "
                            onInput=${parent.handleChange}
                    aria-invalid=${validation.errors['ad-total'] ? 'true' : 'false'}
                    ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
          <label id="adl2">Accruals/Deferrals (A)</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
          <span class="tooltiptext" id="tt6a">Accruals/Deferrals (within Assets section) => Row 074 in Balance Sheet</span>
          </div>

          <input
          type="number"
          className="mf-input phadl"
          id="mf-input-text-13c1826"
          name="ad-total2"
          placeholder="${ parent.decodeEntities(`Accruals/Deferrals (A)`) } "
            onInput=${parent.handleChange}
          aria-invalid=${validation.errors['ad-total2'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
        <label id="adl3">Accruals/Deferrals (A)</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
        <span class="tooltiptext" id="tt6b">Accruals/Deferrals (within Assets section) => Row 074 in Balance Sheet</span>
        </div>
        <input
        type="number"
        className="mf-input phadl"
        id="mf-input-text-13c1826"
        name="ad-total1"
        placeholder="${ parent.decodeEntities(`Accruals/Deferrals (A)`) } "
                  onInput=${parent.handleChange}
          aria-invalid=${validation.errors['ad-total1'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                />



                </div>

              </div>
              </div>
                </div>
        </div>
                    </div>





                    <div className="elementor-container elementor-column-gap-default">
                    <div className="adlhide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                    <div className="elementor-widget-wrap elementor-element-populated">
                    <!-- IMPORTANT -->
                        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                    <div className="elementor-widget-container">
                      <div className="tablet mf-input-wrapper">
                      <br class="mobile" />

                      <div class="tt1">
                      <label>Deferrals (A)</label>
                      <span class="tooltiptext">Deferrals (within Assets section) => Row 018 in Balance Sheet</span>
                      </div>
                      <input
                        type="number"
                        className="mf-input"
                        id="mf-input-text-13c1826"
                        name="ad-totalR"
                        placeholder="${ parent.decodeEntities(`Deferrals (A)`) } "
                                  onInput=${parent.handleChange}
                          aria-invalid=${validation.errors['ad-totalR'] ? 'true' : 'false'}
                          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                                />

                              <${validation.ErrorMessage}
                          errors=${validation.errors}
                          name="ad-totalR"
                          as=${html`<span className="mf-error-message"></span>`}
                          />

                          </div>

                    </div>
                    </div>
                    </div>
                    </div>

                    <div className="adlhide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                    <div className="elementor-widget-wrap elementor-element-populated">
                    <!-- IMPORTANT -->
                            <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                    <div className="elementor-widget-container">

                      <div className="tablet mf-input-wrapper">
                      <br class="mobile" />

                      <div class="tt1">
                      <label>Deferrals (A)</label>
                      <span class="tooltiptext">Deferrals (within Assets section) => Row 018 in Balance Sheet</span>
                      </div>
                      <input
                        type="number"
                        className="mf-input"
                        id="mf-input-text-13c1826"
                        name="ad-total2R"
                        placeholder="${ parent.decodeEntities(`Deferrals (A)`) } "
                                  onInput=${parent.handleChange}
                          aria-invalid=${validation.errors['ad-total2R'] ? 'true' : 'false'}
                          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                                />

                              <${validation.ErrorMessage}
                          errors=${validation.errors}
                          name="ad-total2R"
                          as=${html`<span className="mf-error-message"></span>`}
                          />

                          </div>

                    </div>
                    </div>
                      </div>
                    </div>

                    <div className="adlhide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                    <div className="elementor-widget-wrap elementor-element-populated">
                    <!-- IMPORTANT -->
                        <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                    <div className="elementor-widget-container">

                      <div className="tablet mf-input-wrapper">
                      <br class="mobile" />

                      <div class="tt1">
                      <label>Deferrals (A)</label>
                      <span class="tooltiptext">Deferrals (within Assets section) => Row 018 in Balance Sheet</span>
                      </div>
                      <input
                        type="number"
                        className="mf-input"
                        id="mf-input-text-13c1826"
                        name="ad-total3R"
                        placeholder="${ parent.decodeEntities(`Deferrals (A)`) } "
                                  onInput=${parent.handleChange}
                          aria-invalid=${validation.errors['ad-total3R'] ? 'true' : 'false'}
                          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                                />

                              <${validation.ErrorMessage}
                          errors=${validation.errors}
                          name="ad-total3R"
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
              <span class="tooltiptext" id="tt7">Row 080 in Balance Sheet</span>
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
            <span class="tooltiptext" id="tt7a">Row 080 in Balance Sheet</span>
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
          <span class="tooltiptext" id="tt7b">Row 080 in Balance Sheet</span>
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
                <label id="profitlosslab">Net Profit/Loss of Previous Years </label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                <span class="tooltiptext" id="tt8">Row 097 in Balance Sheet</span>
                </div>
              <input
                type="number"
                className="mf-input phprofitloss"
                id="mf-input-text-d5f534d"
                name="net-profit-loss"
                placeholder="${ parent.decodeEntities(`Net Profit/Loss of Previous Years `) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['net-profit-loss'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
              <label id="profitlosslab2">Net Profit/Loss of Previous Years </label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
              <span class="tooltiptext" id="tt8a">Row 097 in Balance Sheet</span>
              </div>

              <input
              type="number"
              className="mf-input phprofitloss"
              id="mf-input-text-13c1826"
              name="net-profit-loss2"
              placeholder="${ parent.decodeEntities(`Net Profit/Loss of Previous Years `) } "
                onInput=${parent.handleChange}
              aria-invalid=${validation.errors['net-profit-loss2'] ? 'true' : 'false'}
              ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
            <label id="profitlosslab3">Net Profit/Loss of Previous Years </label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
            <span class="tooltiptext" id="tt8b">Row 097 in Balance Sheet</span>
            </div>
          <input
            type="number"
            className="mf-input phprofitloss"
            id="mf-input-text-d5f534d"
            name="net-profit-loss1"
            placeholder="${ parent.decodeEntities(`Net Profit/Loss of Previous Years `) } "
                      onInput=${parent.handleChange}
              aria-invalid=${validation.errors['net-profit-loss1'] ? 'true' : 'false'}
              ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                    />



                    </div>

                  </div>
                  </div>
                    </div>
            </div>
                        </div>





                        <div className="elementor-container elementor-column-gap-default">
                        <div className="profitlosshide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                        <div className="elementor-widget-wrap elementor-element-populated">
                        <!-- IMPORTANT -->
                            <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                        <div className="elementor-widget-container">
                          <div className="mf-input-wrapper">


                          <br class="mobile" />

                          <div class="tt1">
                          <label>Net Loss of Previous Years</label>
                          <span class="tooltiptext" id="tt8RB">Row 097 in Balance Sheet</span>
                          </div>
                          <input
                          type="number"
                          className="mf-input "
                          id="mf-input-text-d5f534d"
                          name="net-profit-lossRB"
                          placeholder="${ parent.decodeEntities(`Net Loss`) } "
                                    onInput=${parent.handleChange}
                            aria-invalid=${validation.errors['net-profit-lossRB'] ? 'true' : 'false'}
                            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                                  />

                                <${validation.ErrorMessage}
                            errors=${validation.errors}
                            name="net-profit-lossRB"
                            as=${html`<span className="mf-error-message"></span>`}
                            />

                              </div>

                        </div>
                        </div>
                        </div>
                        </div>

                        <div className="profitlosshide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                        <div className="elementor-widget-wrap elementor-element-populated">
                        <!-- IMPORTANT -->
                                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                        <div className="elementor-widget-container">

                          <div className="mf-input-wrapper">


                          <br class="mobile" />

                          <div class="tt1">
                          <label>Net Loss of Previous Years</label>
                          <span class="tooltiptext" id="tt8aRB">Row 097 in Balance Sheet</span>
                          </div>
                          <input
                          type="number"
                          className="mf-input "
                          id="mf-input-text-d5f534d"
                          name="net-profit-loss2RB"
                          placeholder="${ parent.decodeEntities(`Net Loss`) } "
                                    onInput=${parent.handleChange}
                            aria-invalid=${validation.errors['net-profit-loss2RB'] ? 'true' : 'false'}
                            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                                  />

                                <${validation.ErrorMessage}
                            errors=${validation.errors}
                            name="net-profit-loss2RB"
                            as=${html`<span className="mf-error-message"></span>`}
                            />

                              </div>

                        </div>
                        </div>
                          </div>
                        </div>

                        <div className="profitlosshide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                        <div className="elementor-widget-wrap elementor-element-populated">
                        <!-- IMPORTANT -->
                            <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                        <div className="elementor-widget-container">

                          <div className="mf-input-wrapper">


                          <br class="mobile" />

                          <div class="tt1">
                          <label>Net Loss of Previous Years</label>
                          <span class="tooltiptext" id="tt8bRB">Row 097 in Balance Sheet</span>
                          </div>
                          <input
                          type="number"
                          className="mf-input "
                          id="mf-input-text-d5f534d"
                          name="net-profit-loss3RB"
                          placeholder="${ parent.decodeEntities(`Net Loss`) } "
                                    onInput=${parent.handleChange}
                            aria-invalid=${validation.errors['net-profit-loss3RB'] ? 'true' : 'false'}
                            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                                  />

                                <${validation.ErrorMessage}
                            errors=${validation.errors}
                            name="net-profit-loss3RB"
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
                  <span class="tooltiptext" id="tt9">Row 101 in Balance Sheet</span>
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
                <span class="tooltiptext" id="tt9a">Row 101 in Balance Sheet</span>
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
              <span class="tooltiptext" id="tt9b">Row 101 in Balance Sheet</span>
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
                <label id="provis">Short-term Provisions</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                <span class="tooltiptext" id="tt11">Row 136 in Balance Sheet</span>
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
              <label id="provis2">Short-term Provisions</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
              <span class="tooltiptext" id="tt11a">Row 136 in Balance Sheet</span>
              </div>
            <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="provisions2" placeholder="${ parent.decodeEntities(`Provisions`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['provisions2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
              <label id="provis3">Short-term Provisions</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
              <span class="tooltiptext" id="tt11b">Row 136 in Balance Sheet</span>
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
                  <label id="bankloanslab">Current Bank Loans</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                  <span class="tooltiptext" id="tt12">Row 139 in Balance Sheet</span>
                  </div>
                <input
                  type="number"
                  className="mf-input phbank"
                  id="mf-input-text-d5f534d"
                  name="current-bank-loans"
                  placeholder="${ parent.decodeEntities(`Current Bank Loans`) } "
                            onInput=${parent.handleChange}
                    aria-invalid=${validation.errors['current-bank-loans'] ? 'true' : 'false'}
                    ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
                <label id="bankloanslab2">Current Bank Loans</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                <span class="tooltiptext" id="tt12a">Row 139 in Balance Sheet</span>
                </div>

                <input
                type="number"
                className="mf-input phbank"
                id="mf-input-text-13c1826"
                name="current-bank-loans2"
                placeholder="${ parent.decodeEntities(`Current Bank Loans`) } "
                  onInput=${parent.handleChange}
                aria-invalid=${validation.errors['current-bank-loans2'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
                <label id="bankloanslab3">Current Bank Loans</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
                <span class="tooltiptext" id="tt12b">Row 139 in Balance Sheet</span>
                </div>
                <input
                type="number"
                className="mf-input phbank"
                id="mf-input-text-d5f534d"
                name="current-bank-loans1"
                placeholder="${ parent.decodeEntities(`Current Bank Loans`) } "
                        onInput=${parent.handleChange}
                aria-invalid=${validation.errors['current-bank-loans1'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                      />



                </div>

                </div>
                </div>
                </div>
                </div>
                  </div>






                  <div className="elementor-container elementor-column-gap-default">
                  <div className="finhide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                  <div className="elementor-widget-wrap elementor-element-populated">
                  <!-- IMPORTANT -->
                      <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                  <div className="elementor-widget-container">
                  <div className="tablet mf-input-wrapper">

                    <br class="mobile" />   <div class="tt1">
                    <label>Short-term Financial Assistance</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                    <span class="tooltiptext" id="tt13">Row 140 in Balance Sheet</span>
                    </div>
                  <input
                    type="number"
                    className="mf-input "
                    id="mf-input-text-d5f534d"
                    name="financial-assistance"
                    placeholder="${ parent.decodeEntities(`Short-term Financial Assistance`) } "
                              onInput=${parent.handleChange}
                      aria-invalid=${validation.errors['financial-assistance'] ? 'true' : 'false'}
                      ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                            />



                  </div>

                  </div>
                  </div>
                  </div>
                  </div>

                  <div className="finhide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                  <div className="elementor-widget-wrap elementor-element-populated">
                  <!-- IMPORTANT -->
                          <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                  <div className="elementor-widget-container">

                  <div className="mf-input-wrapper">




                  <br class="mobile" />   <div class="tt1">
                  <label>Short-term Financial Assistance</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                  <span class="tooltiptext" id="tt13a">Row 140 in Balance Sheet</span>
                  </div>

                  <input
                  type="number"
                  className="mf-input "
                  id="mf-input-text-13c1826"
                  name="financial-assistance2"
                  placeholder="${ parent.decodeEntities(`Short-term Financial Assistance`) } "
                    onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['financial-assistance2'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
                  />



                    </div>

                  </div>
                  </div>
                    </div>
                  </div>

                  <div className="finhide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                  <div className="elementor-widget-wrap elementor-element-populated">
                  <!-- IMPORTANT -->
                      <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                  <div className="elementor-widget-container">

                  <div className="mf-input-wrapper">


                  <br class="mobile" />   <div class="tt1">
                  <label>Short-term Financial Assistance</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
                  <span class="tooltiptext" id="tt13b">Row 140 in Balance Sheet</span>
                  </div>
                  <input
                  type="number"
                  className="mf-input "
                  id="mf-input-text-d5f534d"
                  name="financial-assistance1"
                  placeholder="${ parent.decodeEntities(`Short-term Financial Assistance`) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['financial-assistance1'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
            <label id="adlel">Accruals/Deferrals (L & E)</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
            <span class="tooltiptext" id="tt14">Accruals/Deferrals (within Liabilities and Equity section) => Row 141 in Balance Sheet</span>
            </div>
          <input
            type="number"
            className="mf-input phadle"
            id="mf-input-text-d5f534d"
            name="ad"
            placeholder="${ parent.decodeEntities(`Accruals/Deferrals (L & E)`) } "
                      onInput=${parent.handleChange}
              aria-invalid=${validation.errors['ad'] ? 'true' : 'false'}
              ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
          <label id="adlel2">Accruals/Deferrals (L & E)</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
          <span class="tooltiptext" id="tt14a">Accruals/Deferrals (within Liabilities and Equity section) => Row 141 in Balance Sheet</span>
          </div>

          <input
          type="number"
          className="mf-input phadle"
          id="mf-input-text-13c1826"
          name="ad2"
          placeholder="${ parent.decodeEntities(`Accruals/Deferrals (L & E)`) } "
            onInput=${parent.handleChange}
          aria-invalid=${validation.errors['ad2'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
          <label id="adlel3">Accruals/Deferrals (L & E)</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
          <span class="tooltiptext" id="tt14b">Accruals/Deferrals (within Liabilities and Equity section) => Row 141 in Balance Sheet</span>
          </div>
          <input
          type="number"
          className="mf-input phadle"
          id="mf-input-text-d5f534d"
          name="ad1"
          placeholder="${ parent.decodeEntities(`Accruals/Deferrals (L & E)`) } "
                  onInput=${parent.handleChange}
          aria-invalid=${validation.errors['ad1'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                />



          </div>

          </div>
          </div>
          </div>
          </div>
            </div>





            <div className="elementor-container elementor-column-gap-default">
            <div className="hidle elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">
              <div className="mf-input-wrapper">
                  <br class="mobile" />
                <div class="tt1">
                <label>Deferrals (L & E)</label>
                <span class="tooltiptext">Deferrals (within Liabilities and Equity section) => Row 163 in Balance Sheet</span>
                </div>
              <input
                type="number"
                className="mf-input "
                id="mf-input-text-d5f534d"
                name="adB"
                placeholder="${ parent.decodeEntities(`Deferrals (L & E)`) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['adB'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                        />

                      <${validation.ErrorMessage}
                  errors=${validation.errors}
                  name="adB"
                  as=${html`<span className="mf-error-message"></span>`}
                  />

              </div>

            </div>
            </div>
            </div>
            </div>

            <div className="hidle elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">

              <div className="mf-input-wrapper">
                  <br class="mobile" />
                <div class="tt1">
                <label>Deferrals (L & E)</label>
                <span class="tooltiptext">Deferrals (within Liabilities and Equity section) => Row 163 in Balance Sheet</span>
                </div>
              <input
                type="number"
                className="mf-input "
                id="mf-input-text-d5f534d"
                name="ad2B"
                placeholder="${ parent.decodeEntities(`Deferrals (L & E)`) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['ad2B'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                        />

                      <${validation.ErrorMessage}
                  errors=${validation.errors}
                  name="ad2B"
                  as=${html`<span className="mf-error-message"></span>`}
                  />

              </div>

            </div>
            </div>
              </div>
            </div>

            <div className="hidle elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">

              <div className="mf-input-wrapper">
                  <br class="mobile" />
                <div class="tt1">
                <label>Deferrals (L & E)</label>
                <span class="tooltiptext">Deferrals (within Liabilities and Equity section) => Row 163 in Balance Sheet</span>
                </div>
              <input
                type="number"
                className="mf-input "
                id="mf-input-text-d5f534d"
                name="ad3B"
                placeholder="${ parent.decodeEntities(`Deferrals (L & E)`) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['ad3B'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                        />

                      <${validation.ErrorMessage}
                  errors=${validation.errors}
                  name="ad3B"
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
              <label id="revchange">Revenue (Merchandise)</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
              <span class="tooltiptext" id="tt15">Revenue from the sale of merchandise => Row 03 in Income Statement</span>
              </div>
              <input type="number"  defaultValue="" className="mf-input tt15input" id="mf-input-email-094f2a0" name="revenue-merch" placeholder="${ parent.decodeEntities(`Revenue (Merch)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-merch'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
            <label id="revchange2">Revenue (Merchandise)</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
            <span class="tooltiptext" id="tt15a">Revenue from the sale of merchandise => Row 03 in Income Statement</span>
            </div>

            <input
            type="number"
            className="mf-input tt15input"
            id="mf-input-text-13c1826"
            name="revenue-merch2"
            placeholder="${ parent.decodeEntities(`Revenue (Merch)`) } "
              onInput=${parent.handleChange}
            aria-invalid=${validation.errors['revenue-merch2'] ? 'true' : 'false'}
            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
            <label id="revchange3">Revenue (Merchandise)</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
            <span class="tooltiptext" id="tt15b">Revenue from the sale of merchandise => Row 03 in Income Statement</span>
            </div>
            <input type="number"  defaultValue="" className="mf-input tt15input" id="mf-input-email-094f2a0" name="revenue-merch1" placeholder="${ parent.decodeEntities(`Revenue (Merch)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-merch1'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
              />



            </div>

            </div>
            </div>
            </div>
            </div>
              </div>





          <div className="elementor-container elementor-column-gap-default">
          <div  className="mergehide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
          <div  className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">
          <div className="tablet mf-input-wrapper">

            <br class="mobile" />   <div class="tt1">
            <label id="revenueproducts">Revenue (Products)</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
            <span class="tooltiptext" id="tt16">Revenue from the sale of own products => Row 04 in Income Statement</span>
            </div>
          <input type="number"  defaultValue="" className="mf-input phrevenuep" id="mf-input-email-094f2a0" name="revenue-p" placeholder="${ parent.decodeEntities(`Revenue (Products)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-p'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
            />



          </div>

          </div>
          </div>
          </div>
          </div>

          <div className="mergehide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
                  <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

          <div className="mf-input-wrapper">




          <br class="mobile" />   <div class="tt1">
          <label id="revenueproducts2">Revenue (Products)</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
          <span class="tooltiptext" id="tt16a">Revenue from the sale of own products => Row 04 in Income Statement</span>
          </div>
        <input type="number"  defaultValue="" className="mf-input phrevenuep" id="mf-input-email-094f2a0" name="revenue-p2" placeholder="${ parent.decodeEntities(`Revenue (Products)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-p2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
        />



            </div>

          </div>
          </div>
            </div>
          </div>

          <div className="mergehide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
          <div className="elementor-widget-wrap elementor-element-populated">
          <!-- IMPORTANT -->
              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
          <div className="elementor-widget-container">

          <div className="mf-input-wrapper">


          <br class="mobile" />   <div class="tt1">
          <label id="revenueproducts3">Revenue (Products)</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
          <span class="tooltiptext" id="tt16b">Revenue from the sale of own products => Row 04 in Income Statement</span>
          </div>
          <input type="number"  defaultValue="" className="mf-input phrevenuep" id="mf-input-email-094f2a0" name="revenue-p1" placeholder="${ parent.decodeEntities(`Revenue (Products)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-p1'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
          />



          </div>

          </div>
          </div>
          </div>
          </div>
            </div>




            <div className="elementor-container elementor-column-gap-default">
            <div className="mergehide2 elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">
            <div className="tablet mf-input-wrapper">

              <br class="mobile" />   <div class="tt1">
              <label class="merge">Revenue (Services)</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
              <span class="tooltiptext" id="tt17">Revenue from the sale of own services => Row 05 in Income Statement</span>
              </div>
            <input type="number"  defaultValue="" className="mergeinput mf-input " id="mf-input-email-094f2a0" name="revenue-s" placeholder="${ parent.decodeEntities(`Revenue (Services)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-s'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
              />



            </div>

            </div>
            </div>
            </div>
            </div>

            <div className="mergehide2 elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                    <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">

            <div className="mf-input-wrapper">




            <br class="mobile" />   <div class="tt1">
            <label class="merge2">Revenue (Services)</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
            <span class="tooltiptext" id="tt17a">Revenue from the sale of own services => Row 05 in Income Statement</span>
            </div>
            <input type="number"  defaultValue="" className="mergeinput2 mf-input " id="mf-input-email-094f2a0" name="revenue-s2" placeholder="${ parent.decodeEntities(`Revenue (Services)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-s2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
            />



              </div>

            </div>
            </div>
              </div>
            </div>

            <div className="mergehide2 elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
            <div className="elementor-widget-wrap elementor-element-populated">
            <!-- IMPORTANT -->
                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
            <div className="elementor-widget-container">

            <div className="mf-input-wrapper">


            <br class="mobile" />   <div class="tt1">
            <label class="merge3">Revenue (Services)</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
            <span class="tooltiptext" id="tt17b">Revenue from the sale of own services => Row 05 in Income Statement</span>
            </div>
            <input type="number"  defaultValue="" className="mergeinput3 mf-input " id="mf-input-email-094f2a0" name="revenue-s1" placeholder="${ parent.decodeEntities(`Revenue (Services)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-s1'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
                  <label>Revenue (Other Sale)</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                  <span class="tooltiptext" id="tt18">Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 08 in Income Statement</span>
                  </div>
                <input
                  type="number"
                  className="mf-input "
                  id="mf-input-text-d5f534d"
                  name="revenue-sale"
                  placeholder="${ parent.decodeEntities(`Revenue (Other Sale)`) } "
                            onInput=${parent.handleChange}
                    aria-invalid=${validation.errors['revenue-sale'] ? 'true' : 'false'}
                    ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
                <label>Revenue (Other Sale)</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                <span class="tooltiptext" id="tt18a">Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 08 in Income Statement</span>
                </div>
              <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="revenue-sale2" placeholder="${ parent.decodeEntities(`Revenue (Other Sale)`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['revenue-sale2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
                <label>Revenue (Other Sale)</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
                <span class="tooltiptext" id="tt18b">Revenue from the sale of non-current intangible assets, property, plant and equipment, and raw materials => Row 08 in Income Statement</span>
                </div>
                <input
                type="number"
                className="mf-input "
                id="mf-input-text-d5f534d"
                name="revenue-sale1"
                placeholder="${ parent.decodeEntities(`Revenue (Other Sale)`) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['revenue-sale1'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
                <label>Amortization/Depreciation</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                <span class="tooltiptext" id="tt19">Row 21 in Income Statement</span>
                </div>
                <input
                  type="number"
                  className="mf-input amordep"
                  id="mf-input-text-d5f534d"
                  name="amortization"
                  placeholder="${ parent.decodeEntities(`Amortization/Depreciation`) } "
                            onInput=${parent.handleChange}
                    aria-invalid=${validation.errors['amortization'] ? 'true' : 'false'}
                    ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
              <label>Amortization/Depreciation</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
              <span class="tooltiptext" id="tt19a">Row 21 in Income Statement</span>
              </div>

              <input
              type="number"
              className="mf-input amordep"
              id="mf-input-text-13c1826"
              name="amortization2"
              placeholder="${ parent.decodeEntities(`Amortization/Depreciation `) } "
                onInput=${parent.handleChange}
              aria-invalid=${validation.errors['amortization2'] ? 'true' : 'false'}
              ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
              <label>Amortization/Depreciation</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
              <span class="tooltiptext" id="tt19b">Row 21 in Income Statement</span>
              </div>
              <input
                type="number"
                className="mf-input amordep"
                id="mf-input-text-d5f534d"
                name="amortization1"
                placeholder="${ parent.decodeEntities(`Amortization/Depreciation`) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['amortization1'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
                  <label>Revenue (Securities and Shares)</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                  <span class="tooltiptext" id="tt20">Row 30 in Income Statement</span>
                  </div>
                <input
                  type="number"
                  className="mf-input "
                  id="mf-input-text-d5f534d"
                  name="securities-shares"
                  placeholder="${ parent.decodeEntities(`Revenue (Securities and Shares)`) } "
                            onInput=${parent.handleChange}
                    aria-invalid=${validation.errors['securities-shares'] ? 'true' : 'false'}
                    ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
                <label>Revenue (Securities and Shares)</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                <span class="tooltiptext" id="tt20a">Row 30 in Income Statement</span>
                </div>

                <input
                type="number"
                className="mf-input "
                id="mf-input-text-13c1826"
                name="securities-shares2"
                placeholder="${ parent.decodeEntities(`Revenue (Securities and Shares)`) } "
                  onInput=${parent.handleChange}
                aria-invalid=${validation.errors['securities-shares2'] ? 'true' : 'false'}
                ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
                <label>Revenue (Securities and Shares)</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
                <span class="tooltiptext" id="tt20b">Row 30 in Income Statement</span>
                </div>
                <input
                type="number"
                className="mf-input "
                id="mf-input-text-d5f534d"
                name="securities-shares1"
                placeholder="${ parent.decodeEntities(`Revenue (Securities and Shares)`) } "
                          onInput=${parent.handleChange}
                  aria-invalid=${validation.errors['securities-shares1'] ? 'true' : 'false'}
                  ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
                    <span class="tooltiptext" id="tt21">Row 49 in Income Statement</span>
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
                  <span class="tooltiptext" id="tt21a">Row 49 in Income Statement</span>
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
                  <span class="tooltiptext" id="tt21b">Row 49 in Income Statement</span>
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
                      <label id="beforetaxlab">Profit/Loss Before Tax</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                      <span class="tooltiptext" id="tt22">Profit/loss for the accounting period before tax => Row 56 in Income Statement</span>
                      </div>
                      <input
                        type="number"
                        className="mf-input phbeforetax"
                        id="mf-input-text-d5f534d"
                        name="profit-loss-before-tax"
                        placeholder="${ parent.decodeEntities(`Profit/Loss Before Tax`) } "
                                  onInput=${parent.handleChange}
                          aria-invalid=${validation.errors['profit-loss-before-tax'] ? 'true' : 'false'}
                          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
                    <label id="beforetaxlab2">Profit/Loss Before Tax</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                    <span class="tooltiptext" id="tt22a">Profit/loss for the accounting period before tax => Row 56 in Income Statement</span>
                    </div>
                  <input type="number"  defaultValue="" className="mf-input phbeforetax" id="mf-input-email-094f2a0" name="profit-loss-before-tax2" placeholder="${ parent.decodeEntities(`Profit/Loss Before Tax`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['profit-loss-before-tax2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
                    <label id="beforetaxlab3">Profit/Loss Before Tax</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
                    <span class="tooltiptext" id="tt22b">Profit/loss for the accounting period before tax => Row 56 in Income Statement</span>
                    </div>
                    <input
                      type="number"
                      className="mf-input phbeforetax"
                      id="mf-input-text-d5f534d"
                      name="profit-loss-before-tax1"
                      placeholder="${ parent.decodeEntities(`Profit/Loss Before Tax`) } "
                                onInput=${parent.handleChange}
                        aria-invalid=${validation.errors['profit-loss-before-tax1'] ? 'true' : 'false'}
                        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                              />



                    </div>

                    </div>
                    </div>
                    </div>
                    </div>
                      </div>





                      <div className="elementor-container elementor-column-gap-default">
                      <div className="beforetaxhide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                      <div className="elementor-widget-wrap elementor-element-populated">
                      <!-- IMPORTANT -->
                          <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                            <div className="mf-input-wrapper">
                            <br class="mobile" />
                            <div class="tt1">
                            <label>Loss Before Tax</label>
                            <span class="tooltiptext" id="tt22RB">Loss for the accounting period before tax => Row 56 in Income Statement</span>
                            </div>
                            <input
                              type="number"
                              className="mf-input "
                              id="mf-input-text-d5f534d"
                              name="profit-loss-before-taxRB"
                              placeholder="${ parent.decodeEntities(`Loss Before Tax`) } "
                              onInput=${parent.handleChange}
                              aria-invalid=${validation.errors['profit-loss-before-taxRB'] ? 'true' : 'false'}
                              ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                                    />
                                  <${validation.ErrorMessage}
                              errors=${validation.errors}
                              name="profit-loss-before-taxRB"
                              as=${html`<span className="mf-error-message"></span>`}
                              />
                              </div>
                      </div>
                      </div>
                      </div>

                      <div className="beforetaxhide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                      <div className="elementor-widget-wrap elementor-element-populated">
                      <!-- IMPORTANT -->
                              <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                      <div className="elementor-widget-container">

                        <div className="mf-input-wrapper">
                        <br class="mobile" />
                        <div class="tt1">
                        <label>Loss Before Tax</label>
                        <span class="tooltiptext" id="tt22aRB">Loss for the accounting period before tax => Row 56 in Income Statement</span>
                        </div>
                        <input
                          type="number"
                          className="mf-input "
                          id="mf-input-text-d5f534d"
                          name="profit-loss-before-tax2RB"
                          placeholder="${ parent.decodeEntities(`Loss Before Tax`) } "
                          onInput=${parent.handleChange}
                          aria-invalid=${validation.errors['profit-loss-before-tax2RB'] ? 'true' : 'false'}
                          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                                />
                              <${validation.ErrorMessage}
                          errors=${validation.errors}
                          name="profit-loss-before-tax2RB"
                          as=${html`<span className="mf-error-message"></span>`}
                          />
                          </div>

                      </div>
                      </div>
                        </div>
                      </div>

                      <div className="beforetaxhide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                      <div className="elementor-widget-wrap elementor-element-populated">
                      <!-- IMPORTANT -->
                          <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                      <div className="elementor-widget-container">

                        <div className="mf-input-wrapper">
                        <br class="mobile" />
                        <div class="tt1">
                        <label>Loss Before Tax</label>
                        <span class="tooltiptext" id="tt22bRB">Loss for the accounting period before tax => Row 56 in Income Statement</span>
                        </div>
                        <input
                          type="number"
                          className="mf-input "
                          id="mf-input-text-d5f534d"
                          name="profit-loss-before-tax3RB"
                          placeholder="${ parent.decodeEntities(`Loss Before Tax`) } "
                          onInput=${parent.handleChange}
                          aria-invalid=${validation.errors['profit-loss-before-tax3RB'] ? 'true' : 'false'}
                          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                                />
                              <${validation.ErrorMessage}
                          errors=${validation.errors}
                          name="profit-loss-before-tax3RB"
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
                        <label id="aftertaxlab">Profit/Loss After Tax</label> <label class="yearlabel"> (<?php echo date('Y'); ?>)</label>
                        <span class="tooltiptext" id="tt23">Profit/loss for the accounting period after tax => Row 61 in Income Statement</span>
                        </div>
                      <input
                        type="number"
                        className="mf-input phaftertax"
                        id="mf-input-text-d5f534d"
                        name="profit-loss-after-tax"
                        placeholder="${ parent.decodeEntities(`Profit/Loss After Tax`) } "
                                  onInput=${parent.handleChange}
                          aria-invalid=${validation.errors['profit-loss-after-tax'] ? 'true' : 'false'}
                          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
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
                      <label id="aftertaxlab2">Profit/Loss After Tax</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
                      <span class="tooltiptext" id="tt23a">Profit/loss for the accounting period after tax => Row 61 in Income Statement</span>
                      </div>
                    <input type="number"  defaultValue="" className="mf-input phaftertax" id="mf-input-email-094f2a0" name="profit-loss-after-tax2" placeholder="${ parent.decodeEntities(`Profit/Loss After Tax`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['profit-loss-after-tax2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
                      <label id="aftertaxlab3">Profit/Loss After Tax</label> <label class="yearlabel1"> (<?php echo date('Y', strtotime(' -2 years')); ?>)</label>
                      <span class="tooltiptext" id="tt23b">Profit/loss for the accounting period after tax => Row 61 in Income Statement</span>
                      </div>
                      <input
                      type="number"
                      className="mf-input phaftertax"
                      id="mf-input-text-d5f534d"
                      name="profit-loss-after-tax1"
                      placeholder="${ parent.decodeEntities(`Profit/Loss After Tax`) } "
                                onInput=${parent.handleChange}
                        aria-invalid=${validation.errors['profit-loss-after-tax1'] ? 'true' : 'false'}
                        ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                              />



                      </div>

                      </div>
                      </div>
                      </div>
                      </div>
                        </div>



                        <div className="elementor-container elementor-column-gap-default">
                        <div className="aftertaxhide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5036749" data-id="5036749" data-element_type="column">
                        <div className="elementor-widget-wrap elementor-element-populated">
                        <!-- IMPORTANT -->
                            <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                        <div className="elementor-widget-container">
                          <div className="mf-input-wrapper">
                          <br class="mobile" />

                          <div class="tt1">
                          <label>Loss After Tax</label>
                          <span class="tooltiptext" id="tt23RB">Loss for the accounting period after tax => Row 61 in Income Statement</span>
                          </div>
                          <input
                          type="number"
                          className="mf-input "
                          id="mf-input-text-d5f534d"
                          name="profit-loss-after-taxRB"
                          placeholder="${ parent.decodeEntities(`Loss After Tax`) } "
                                    onInput=${parent.handleChange}
                            aria-invalid=${validation.errors['profit-loss-after-taxRB'] ? 'true' : 'false'}
                            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                                  />

                                <${validation.ErrorMessage}
                            errors=${validation.errors}
                            name="profit-loss-after-taxRB"
                            as=${html`<span className="mf-error-message"></span>`}
                            />

                          </div>

                        </div>
                        </div>
                        </div>
                        </div>

                        <div className="aftertaxhide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                        <div className="elementor-widget-wrap elementor-element-populated">
                        <!-- IMPORTANT -->
                                <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                        <div className="elementor-widget-container">

                          <div className="mf-input-wrapper">
                          <br class="mobile" />

                          <div class="tt1">
                          <label>Loss After Tax</label>
                          <span class="tooltiptext" id="tt23aRB">Loss for the accounting period after tax => Row 61 in Income Statement</span>
                          </div>
                          <input
                          type="number"
                          className="mf-input "
                          id="mf-input-text-d5f534d"
                          name="profit-loss-after-tax2RB"
                          placeholder="${ parent.decodeEntities(`Loss After Tax`) } "
                                    onInput=${parent.handleChange}
                            aria-invalid=${validation.errors['profit-loss-after-tax2RB'] ? 'true' : 'false'}
                            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                                  />

                                <${validation.ErrorMessage}
                            errors=${validation.errors}
                            name="profit-loss-after-tax2RB"
                            as=${html`<span className="mf-error-message"></span>`}
                            />

                          </div>

                        </div>
                        </div>
                          </div>
                        </div>

                        <div className="aftertaxhide elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9010d0" data-id="f9010d0" data-element_type="column">
                        <div className="elementor-widget-wrap elementor-element-populated">
                        <!-- IMPORTANT -->
                            <div className="elementor-element elementor-element-13c1826 elementor-widget elementor-widget-mf-text" data-id="13c1826" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
                        <div className="elementor-widget-container">

                          <div className="mf-input-wrapper">
                          <br class="mobile" />

                          <div class="tt1">
                          <label>Loss After Tax</label>
                          <span class="tooltiptext" id="tt23bRB">Loss for the accounting period after tax => Row 61 in Income Statement</span>
                          </div>
                          <input
                          type="number"
                          className="mf-input "
                          id="mf-input-text-d5f534d"
                          name="profit-loss-after-tax2RB"
                          placeholder="${ parent.decodeEntities(`Loss After Tax`) } "
                                    onInput=${parent.handleChange}
                            aria-invalid=${validation.errors['profit-loss-after-tax2RB'] ? 'true' : 'false'}
                            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":true,"expression":"null"}, el)}
                                  />

                                <${validation.ErrorMessage}
                            errors=${validation.errors}
                            name="profit-loss-after-tax2RB"
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
            <label>Long-term Intangible Assets</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
            <span class="tooltiptext" id="tt24">Row 003 in Balance Sheet</span>
            </div>

            <input
            type="number"
            className="mf-input "
            id="mf-input-text-13c1826"
            name="intangible-assets2"
            placeholder="${ parent.decodeEntities(`Long-term Intangible Assets`) } "
                  onInput=${parent.handleChange}
            aria-invalid=${validation.errors['intangible-assets2'] ? 'true' : 'false'}
            ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
          <span class="tooltiptext" id="tt25">Property, Plant and Equipment (total) => Row 011 in Balance Sheet</span>
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
          <label>Long-term Financial Assets</label> <label class="yearlabel2"> (<?php echo date('Y', strtotime(' -1 years')); ?>)</label>
          <span class="tooltiptext" id="tt26">Row 021 in Balance Sheet</span>
          </div>
          <input
          type="number"
          className="mf-input "
          id="mf-input-text-13c1826"
          name="financial-assets2"
          placeholder="${ parent.decodeEntities(`Long-term Financial Assets`) } "
          onInput=${parent.handleChange}
          aria-invalid=${validation.errors['financial-assets2'] ? 'true' : 'false'}
          ref=${el => parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
            <span class="tooltiptext" id="tt27">Row 102 in Balance Sheet</span>
            </div>
          <input type="number"  defaultValue="" className="mf-input " id="mf-input-email-094f2a0" name="non-current-liabilities-2" placeholder="${ parent.decodeEntities(`Non-current Liabilities`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['non-current-liabilities-2'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","minLength":0,"maxLength":99999999,"type":"by_character_length","required":false,"expression":"null"}, el)}
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
          <span class="tooltiptext" id="tt28">Row 121 in Balance Sheet</span>
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
          <span class="tooltiptext" id="tt29">Row 28 in Income Statement</span>
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
