<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_730bd54c72d0f008a52430b787001293fc2ed64099dd7fc29a4fb58d1b6bad78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ccbd28ae7f0ccf1a51c17c5b1da5fbd66a442ab6d95c8e4adb48f3f2f2c8571 = $this->env->getExtension("native_profiler");
        $__internal_2ccbd28ae7f0ccf1a51c17c5b1da5fbd66a442ab6d95c8e4adb48f3f2f2c8571->enter($__internal_2ccbd28ae7f0ccf1a51c17c5b1da5fbd66a442ab6d95c8e4adb48f3f2f2c8571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ccbd28ae7f0ccf1a51c17c5b1da5fbd66a442ab6d95c8e4adb48f3f2f2c8571->leave($__internal_2ccbd28ae7f0ccf1a51c17c5b1da5fbd66a442ab6d95c8e4adb48f3f2f2c8571_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_63c9154a491e55d0761bb8afdcad3b2af92bfdbbf00c053f7e021f11e3044717 = $this->env->getExtension("native_profiler");
        $__internal_63c9154a491e55d0761bb8afdcad3b2af92bfdbbf00c053f7e021f11e3044717->enter($__internal_63c9154a491e55d0761bb8afdcad3b2af92bfdbbf00c053f7e021f11e3044717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_63c9154a491e55d0761bb8afdcad3b2af92bfdbbf00c053f7e021f11e3044717->leave($__internal_63c9154a491e55d0761bb8afdcad3b2af92bfdbbf00c053f7e021f11e3044717_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e56cc6b6cb261dedd340cbceef0d6d685c0194809fcc1299c830e737f8af9b24 = $this->env->getExtension("native_profiler");
        $__internal_e56cc6b6cb261dedd340cbceef0d6d685c0194809fcc1299c830e737f8af9b24->enter($__internal_e56cc6b6cb261dedd340cbceef0d6d685c0194809fcc1299c830e737f8af9b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e56cc6b6cb261dedd340cbceef0d6d685c0194809fcc1299c830e737f8af9b24->leave($__internal_e56cc6b6cb261dedd340cbceef0d6d685c0194809fcc1299c830e737f8af9b24_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39917be962012db1c1149d17b7f01aacdf2985b1a4025edac26d7192669dded8 = $this->env->getExtension("native_profiler");
        $__internal_39917be962012db1c1149d17b7f01aacdf2985b1a4025edac26d7192669dded8->enter($__internal_39917be962012db1c1149d17b7f01aacdf2985b1a4025edac26d7192669dded8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_39917be962012db1c1149d17b7f01aacdf2985b1a4025edac26d7192669dded8->leave($__internal_39917be962012db1c1149d17b7f01aacdf2985b1a4025edac26d7192669dded8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
