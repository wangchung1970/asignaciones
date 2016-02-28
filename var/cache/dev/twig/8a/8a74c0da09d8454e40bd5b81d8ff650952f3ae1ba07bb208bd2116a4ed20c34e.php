<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0a16629f25521703f316af498cf562816b115516a2e2a7746ee72f4b850de7f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccbcc2e0666cb70cb33a5b3c41d733feb8757b11fccaa673a740c22de304041a = $this->env->getExtension("native_profiler");
        $__internal_ccbcc2e0666cb70cb33a5b3c41d733feb8757b11fccaa673a740c22de304041a->enter($__internal_ccbcc2e0666cb70cb33a5b3c41d733feb8757b11fccaa673a740c22de304041a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccbcc2e0666cb70cb33a5b3c41d733feb8757b11fccaa673a740c22de304041a->leave($__internal_ccbcc2e0666cb70cb33a5b3c41d733feb8757b11fccaa673a740c22de304041a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41d6b07b6e0ca608167de1076962719ee65d9740eb4c212913816af1c87fdd5a = $this->env->getExtension("native_profiler");
        $__internal_41d6b07b6e0ca608167de1076962719ee65d9740eb4c212913816af1c87fdd5a->enter($__internal_41d6b07b6e0ca608167de1076962719ee65d9740eb4c212913816af1c87fdd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_41d6b07b6e0ca608167de1076962719ee65d9740eb4c212913816af1c87fdd5a->leave($__internal_41d6b07b6e0ca608167de1076962719ee65d9740eb4c212913816af1c87fdd5a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_149bbdfd8a14a599a1fb3226a4e6300fbc9264f22f8d622b4702edc2de6afda2 = $this->env->getExtension("native_profiler");
        $__internal_149bbdfd8a14a599a1fb3226a4e6300fbc9264f22f8d622b4702edc2de6afda2->enter($__internal_149bbdfd8a14a599a1fb3226a4e6300fbc9264f22f8d622b4702edc2de6afda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_149bbdfd8a14a599a1fb3226a4e6300fbc9264f22f8d622b4702edc2de6afda2->leave($__internal_149bbdfd8a14a599a1fb3226a4e6300fbc9264f22f8d622b4702edc2de6afda2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_740045874af02d7fb7ad8188f9aeb6a8c125f1ae4cce349f3d179357a19d9e1b = $this->env->getExtension("native_profiler");
        $__internal_740045874af02d7fb7ad8188f9aeb6a8c125f1ae4cce349f3d179357a19d9e1b->enter($__internal_740045874af02d7fb7ad8188f9aeb6a8c125f1ae4cce349f3d179357a19d9e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_740045874af02d7fb7ad8188f9aeb6a8c125f1ae4cce349f3d179357a19d9e1b->leave($__internal_740045874af02d7fb7ad8188f9aeb6a8c125f1ae4cce349f3d179357a19d9e1b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
