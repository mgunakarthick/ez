<?php

/* 3rd_party/openbay.twig */
class __TwigTemplate_43fae9e53b0521c78ab256eb9202c5e5d36d4b625da10f5b51890dad2bfb6e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"container\" xmlns=\"http://www.w3.org/1999/html\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h3>";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "<br>
          <small>";
        // line 7
        echo (isset($context["text_openbay"]) ? $context["text_openbay"] : null);
        echo "</small></h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\" /></div>
      </div>
    </div>
  </header>
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <form>
        <fieldset class=\"core-modules\">
          <div class=\"row\">
            <div class=\"col-sm-6 text-center\"><img src=\"view/image/ebay.png\">
              <p>";
        // line 20
        echo (isset($context["text_ebay"]) ? $context["text_ebay"] : null);
        echo "</p>
              <a href=\"https://account.openbaypro.com/ebay/apiRegister?utm_source=opencart_install&utm_medium=register_page&utm_campaign=opencart_install\" class=\"btn btn-primary\" target=\"_blank\">";
        // line 21
        echo (isset($context["button_register"]) ? $context["button_register"] : null);
        echo "</a></div>
            <div class=\"col-sm-6 text-center\"> <img src=\"view/image/amazon.png\">
              <p>";
        // line 23
        echo (isset($context["text_amazon"]) ? $context["text_amazon"] : null);
        echo "</p>
              <a href=\"https://account.openbaypro.com/amazon/apiRegister?utm_source=opencart_install&utm_medium=register_page&utm_campaign=opencart_install\" class=\"btn btn-primary\" target=\"_blank\">";
        // line 24
        echo (isset($context["button_register_eu"]) ? $context["button_register_eu"] : null);
        echo "</a> <a href=\"https://account.openbaypro.com/amazonus/apiRegister?utm_source=opencart_install&utm_medium=register_button&utm_campaign=opencart_install\" class=\"btn btn-primary\" target=\"_blank\">";
        echo (isset($context["button_register_us"]) ? $context["button_register_us"] : null);
        echo "</a></div>
          </div>
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-left\"><a href=\"";
        // line 28
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
        </div>
      </form>
    </div>
  </div>
</div>
";
        // line 34
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "3rd_party/openbay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 34,  69 => 28,  60 => 24,  56 => 23,  51 => 21,  47 => 20,  31 => 7,  27 => 6,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container" xmlns="http://www.w3.org/1999/html">*/
/*   <header>*/
/*     <div class="row">*/
/*       <div class="col-sm-6">*/
/*         <h3>{{ heading_title }}<br>*/
/*           <small>{{ text_openbay }}</small></h3>*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         <div id="logo" class="pull-right hidden-xs"><img src="view/image/logo.png" alt="OpenCart" title="OpenCart" /></div>*/
/*       </div>*/
/*     </div>*/
/*   </header>*/
/*   <div class="row">*/
/*     <div class="col-sm-12">*/
/*       <form>*/
/*         <fieldset class="core-modules">*/
/*           <div class="row">*/
/*             <div class="col-sm-6 text-center"><img src="view/image/ebay.png">*/
/*               <p>{{ text_ebay }}</p>*/
/*               <a href="https://account.openbaypro.com/ebay/apiRegister?utm_source=opencart_install&utm_medium=register_page&utm_campaign=opencart_install" class="btn btn-primary" target="_blank">{{ button_register }}</a></div>*/
/*             <div class="col-sm-6 text-center"> <img src="view/image/amazon.png">*/
/*               <p>{{ text_amazon }}</p>*/
/*               <a href="https://account.openbaypro.com/amazon/apiRegister?utm_source=opencart_install&utm_medium=register_page&utm_campaign=opencart_install" class="btn btn-primary" target="_blank">{{ button_register_eu }}</a> <a href="https://account.openbaypro.com/amazonus/apiRegister?utm_source=opencart_install&utm_medium=register_button&utm_campaign=opencart_install" class="btn btn-primary" target="_blank">{{ button_register_us }}</a></div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <div class="buttons">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-default">{{ button_back }}</a></div>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
