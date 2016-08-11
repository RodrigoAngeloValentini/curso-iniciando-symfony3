<?php

/* task/index.html.twig */
class __TwigTemplate_242b910e07ba552364ac8b999e73e62ab01890017a4be1e547e4a8f29c988d7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf1480d9ff9475dd6dc40215f70f8a1142b2c0adbfbeb23c6b15357bc7b87bbf = $this->env->getExtension("native_profiler");
        $__internal_cf1480d9ff9475dd6dc40215f70f8a1142b2c0adbfbeb23c6b15357bc7b87bbf->enter($__internal_cf1480d9ff9475dd6dc40215f70f8a1142b2c0adbfbeb23c6b15357bc7b87bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf1480d9ff9475dd6dc40215f70f8a1142b2c0adbfbeb23c6b15357bc7b87bbf->leave($__internal_cf1480d9ff9475dd6dc40215f70f8a1142b2c0adbfbeb23c6b15357bc7b87bbf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4edc99e5ddb26425dcd6998e7eed9238fc29b295efa0401a2ac1cd128d5aaec = $this->env->getExtension("native_profiler");
        $__internal_e4edc99e5ddb26425dcd6998e7eed9238fc29b295efa0401a2ac1cd128d5aaec->enter($__internal_e4edc99e5ddb26425dcd6998e7eed9238fc29b295efa0401a2ac1cd128d5aaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tasks";
        
        $__internal_e4edc99e5ddb26425dcd6998e7eed9238fc29b295efa0401a2ac1cd128d5aaec->leave($__internal_e4edc99e5ddb26425dcd6998e7eed9238fc29b295efa0401a2ac1cd128d5aaec_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_49c59a75b439e02cd1b2801435ad1743abaac5362a95e6f5f53a9c54c7797442 = $this->env->getExtension("native_profiler");
        $__internal_49c59a75b439e02cd1b2801435ad1743abaac5362a95e6f5f53a9c54c7797442->enter($__internal_49c59a75b439e02cd1b2801435ad1743abaac5362a95e6f5f53a9c54c7797442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("main.css"), "html", null, true);
        echo "\">
";
        
        $__internal_49c59a75b439e02cd1b2801435ad1743abaac5362a95e6f5f53a9c54c7797442->leave($__internal_49c59a75b439e02cd1b2801435ad1743abaac5362a95e6f5f53a9c54c7797442_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_91544af24c2824c985e3f1728238c6a3c29f99cf1ddea16a9d172eb081cd5254 = $this->env->getExtension("native_profiler");
        $__internal_91544af24c2824c985e3f1728238c6a3c29f99cf1ddea16a9d172eb081cd5254->enter($__internal_91544af24c2824c985e3f1728238c6a3c29f99cf1ddea16a9d172eb081cd5254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<h1>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "'s Tasks</h1>

";
        // line 13
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "rodrigo")) {
            // line 14
            echo "Hello Rodrigo
";
        }
        // line 16
        echo "
<ul>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 19
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("taskshow", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "name", array()), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</ul>
";
        
        $__internal_91544af24c2824c985e3f1728238c6a3c29f99cf1ddea16a9d172eb081cd5254->leave($__internal_91544af24c2824c985e3f1728238c6a3c29f99cf1ddea16a9d172eb081cd5254_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 21,  94 => 19,  90 => 18,  86 => 16,  82 => 14,  80 => 13,  74 => 11,  68 => 10,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Tasks{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('main.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>{{ name | upper}}'s Tasks</h1>*/
/* */
/* {% if(name == 'rodrigo') %}*/
/* Hello Rodrigo*/
/* {% endif %}*/
/* */
/* <ul>*/
/* {% for task in tasks %}*/
/*     <li><a href="{{ path('taskshow',{'id':task.id}) }}">{{ task.name }}</a></li>*/
/* {% endfor %}*/
/* </ul>*/
/* {% endblock %}*/
