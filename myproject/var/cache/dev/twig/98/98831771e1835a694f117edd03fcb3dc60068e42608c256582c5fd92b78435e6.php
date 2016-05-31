<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_534fab70e48d02b38ae3e2a7a4e8c840a3b0e89f7f2421d72292e7a16b0176a7 extends Twig_Template
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
        $__internal_c617ca9892f83f463b419e9a0ff3c11a5e13b47eabe7cdc9ce7bf341546667d8 = $this->env->getExtension("native_profiler");
        $__internal_c617ca9892f83f463b419e9a0ff3c11a5e13b47eabe7cdc9ce7bf341546667d8->enter($__internal_c617ca9892f83f463b419e9a0ff3c11a5e13b47eabe7cdc9ce7bf341546667d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c617ca9892f83f463b419e9a0ff3c11a5e13b47eabe7cdc9ce7bf341546667d8->leave($__internal_c617ca9892f83f463b419e9a0ff3c11a5e13b47eabe7cdc9ce7bf341546667d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4855396fa5cf78d891b8932ba2a140057bd01f9e81304f525451061839d47610 = $this->env->getExtension("native_profiler");
        $__internal_4855396fa5cf78d891b8932ba2a140057bd01f9e81304f525451061839d47610->enter($__internal_4855396fa5cf78d891b8932ba2a140057bd01f9e81304f525451061839d47610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4855396fa5cf78d891b8932ba2a140057bd01f9e81304f525451061839d47610->leave($__internal_4855396fa5cf78d891b8932ba2a140057bd01f9e81304f525451061839d47610_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b854ee531db8f3c5d8ae141df1140d8c1718a71b33178cbd2fb8fc947fc5703c = $this->env->getExtension("native_profiler");
        $__internal_b854ee531db8f3c5d8ae141df1140d8c1718a71b33178cbd2fb8fc947fc5703c->enter($__internal_b854ee531db8f3c5d8ae141df1140d8c1718a71b33178cbd2fb8fc947fc5703c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b854ee531db8f3c5d8ae141df1140d8c1718a71b33178cbd2fb8fc947fc5703c->leave($__internal_b854ee531db8f3c5d8ae141df1140d8c1718a71b33178cbd2fb8fc947fc5703c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee361ed0884cd0da9a988e60d7531845139892695da95e54649774d049628875 = $this->env->getExtension("native_profiler");
        $__internal_ee361ed0884cd0da9a988e60d7531845139892695da95e54649774d049628875->enter($__internal_ee361ed0884cd0da9a988e60d7531845139892695da95e54649774d049628875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ee361ed0884cd0da9a988e60d7531845139892695da95e54649774d049628875->leave($__internal_ee361ed0884cd0da9a988e60d7531845139892695da95e54649774d049628875_prof);

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
