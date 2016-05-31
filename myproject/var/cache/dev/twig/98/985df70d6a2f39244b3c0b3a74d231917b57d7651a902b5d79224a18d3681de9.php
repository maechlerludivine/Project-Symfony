<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0729c2da3e3b51a5d3c35e6ee829c4f3acd6e9e2308c3d6175889c9c00e9e33a extends Twig_Template
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
        $__internal_a2eb7ee0419fb5b8dcba76b7f142cbde674ddfa6276d5210e2b9964da7c9b0de = $this->env->getExtension("native_profiler");
        $__internal_a2eb7ee0419fb5b8dcba76b7f142cbde674ddfa6276d5210e2b9964da7c9b0de->enter($__internal_a2eb7ee0419fb5b8dcba76b7f142cbde674ddfa6276d5210e2b9964da7c9b0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2eb7ee0419fb5b8dcba76b7f142cbde674ddfa6276d5210e2b9964da7c9b0de->leave($__internal_a2eb7ee0419fb5b8dcba76b7f142cbde674ddfa6276d5210e2b9964da7c9b0de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d9799d818a7ef41054fde5ec00685a6f8678be1500981f484558a239c779ec5 = $this->env->getExtension("native_profiler");
        $__internal_6d9799d818a7ef41054fde5ec00685a6f8678be1500981f484558a239c779ec5->enter($__internal_6d9799d818a7ef41054fde5ec00685a6f8678be1500981f484558a239c779ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d9799d818a7ef41054fde5ec00685a6f8678be1500981f484558a239c779ec5->leave($__internal_6d9799d818a7ef41054fde5ec00685a6f8678be1500981f484558a239c779ec5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39ed443ad96c0bc051e4edae8da589d4e8163eb64e994ff45abde1be4cc9cd12 = $this->env->getExtension("native_profiler");
        $__internal_39ed443ad96c0bc051e4edae8da589d4e8163eb64e994ff45abde1be4cc9cd12->enter($__internal_39ed443ad96c0bc051e4edae8da589d4e8163eb64e994ff45abde1be4cc9cd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_39ed443ad96c0bc051e4edae8da589d4e8163eb64e994ff45abde1be4cc9cd12->leave($__internal_39ed443ad96c0bc051e4edae8da589d4e8163eb64e994ff45abde1be4cc9cd12_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8e5555b60bd1987b85d620e89e836805b2863329af6e8a6d77083b52484d93c = $this->env->getExtension("native_profiler");
        $__internal_b8e5555b60bd1987b85d620e89e836805b2863329af6e8a6d77083b52484d93c->enter($__internal_b8e5555b60bd1987b85d620e89e836805b2863329af6e8a6d77083b52484d93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b8e5555b60bd1987b85d620e89e836805b2863329af6e8a6d77083b52484d93c->leave($__internal_b8e5555b60bd1987b85d620e89e836805b2863329af6e8a6d77083b52484d93c_prof);

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
