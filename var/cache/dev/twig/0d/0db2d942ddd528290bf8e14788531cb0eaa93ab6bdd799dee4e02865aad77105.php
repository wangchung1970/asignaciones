<?php

/* base.html.twig */
class __TwigTemplate_aa2a2ff5354c90d7993ad3cdbe7ddf5f831f4b969119fc807f61d12c866909ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca7184032342dc63a39c072beab5b2ac25f2266b1081991a606c433bc26980a6 = $this->env->getExtension("native_profiler");
        $__internal_ca7184032342dc63a39c072beab5b2ac25f2266b1081991a606c433bc26980a6->enter($__internal_ca7184032342dc63a39c072beab5b2ac25f2266b1081991a606c433bc26980a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ca7184032342dc63a39c072beab5b2ac25f2266b1081991a606c433bc26980a6->leave($__internal_ca7184032342dc63a39c072beab5b2ac25f2266b1081991a606c433bc26980a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f53215446c458049b155ff7a73c80caf753febcb1f736985fc31388e07c09d3 = $this->env->getExtension("native_profiler");
        $__internal_0f53215446c458049b155ff7a73c80caf753febcb1f736985fc31388e07c09d3->enter($__internal_0f53215446c458049b155ff7a73c80caf753febcb1f736985fc31388e07c09d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0f53215446c458049b155ff7a73c80caf753febcb1f736985fc31388e07c09d3->leave($__internal_0f53215446c458049b155ff7a73c80caf753febcb1f736985fc31388e07c09d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a61748fb05ebe5e4f28aa0185f7eb0437968e36a539f782b3b9807cd25aed3ad = $this->env->getExtension("native_profiler");
        $__internal_a61748fb05ebe5e4f28aa0185f7eb0437968e36a539f782b3b9807cd25aed3ad->enter($__internal_a61748fb05ebe5e4f28aa0185f7eb0437968e36a539f782b3b9807cd25aed3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a61748fb05ebe5e4f28aa0185f7eb0437968e36a539f782b3b9807cd25aed3ad->leave($__internal_a61748fb05ebe5e4f28aa0185f7eb0437968e36a539f782b3b9807cd25aed3ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd87d6887d9437f958f0b0f783f7ef15d9a97794291ff83d41ed5c1753f54424 = $this->env->getExtension("native_profiler");
        $__internal_dd87d6887d9437f958f0b0f783f7ef15d9a97794291ff83d41ed5c1753f54424->enter($__internal_dd87d6887d9437f958f0b0f783f7ef15d9a97794291ff83d41ed5c1753f54424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd87d6887d9437f958f0b0f783f7ef15d9a97794291ff83d41ed5c1753f54424->leave($__internal_dd87d6887d9437f958f0b0f783f7ef15d9a97794291ff83d41ed5c1753f54424_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32de1bde807da37b3af1f26fae6406dbe87d5fc2386c7f11d5db4d53c96e917e = $this->env->getExtension("native_profiler");
        $__internal_32de1bde807da37b3af1f26fae6406dbe87d5fc2386c7f11d5db4d53c96e917e->enter($__internal_32de1bde807da37b3af1f26fae6406dbe87d5fc2386c7f11d5db4d53c96e917e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_32de1bde807da37b3af1f26fae6406dbe87d5fc2386c7f11d5db4d53c96e917e->leave($__internal_32de1bde807da37b3af1f26fae6406dbe87d5fc2386c7f11d5db4d53c96e917e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
