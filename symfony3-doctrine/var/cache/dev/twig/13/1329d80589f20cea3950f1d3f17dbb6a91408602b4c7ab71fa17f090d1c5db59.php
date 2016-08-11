<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_07f29a56142421a4814bb4ef7c6273777e941fd083b9e53bf24b48678cfd1b44 extends Twig_Template
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
        $__internal_019874e88b833ed53364966698d4bfa82dd66d9c86b8596119e359f73d187c70 = $this->env->getExtension("native_profiler");
        $__internal_019874e88b833ed53364966698d4bfa82dd66d9c86b8596119e359f73d187c70->enter($__internal_019874e88b833ed53364966698d4bfa82dd66d9c86b8596119e359f73d187c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_019874e88b833ed53364966698d4bfa82dd66d9c86b8596119e359f73d187c70->leave($__internal_019874e88b833ed53364966698d4bfa82dd66d9c86b8596119e359f73d187c70_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c939c8530aa960ed0a7deaa83f61c938ef1ef91b83e6f68c25819d40f96fa1bb = $this->env->getExtension("native_profiler");
        $__internal_c939c8530aa960ed0a7deaa83f61c938ef1ef91b83e6f68c25819d40f96fa1bb->enter($__internal_c939c8530aa960ed0a7deaa83f61c938ef1ef91b83e6f68c25819d40f96fa1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c939c8530aa960ed0a7deaa83f61c938ef1ef91b83e6f68c25819d40f96fa1bb->leave($__internal_c939c8530aa960ed0a7deaa83f61c938ef1ef91b83e6f68c25819d40f96fa1bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_231c00452c6267edcdc199b25966c27e8aa0a3be56c69b013ba098a7a8b34375 = $this->env->getExtension("native_profiler");
        $__internal_231c00452c6267edcdc199b25966c27e8aa0a3be56c69b013ba098a7a8b34375->enter($__internal_231c00452c6267edcdc199b25966c27e8aa0a3be56c69b013ba098a7a8b34375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_231c00452c6267edcdc199b25966c27e8aa0a3be56c69b013ba098a7a8b34375->leave($__internal_231c00452c6267edcdc199b25966c27e8aa0a3be56c69b013ba098a7a8b34375_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6160be255b5d38bb902e3a4c109f3b3f4fd4b97586222cb080800456913a22f0 = $this->env->getExtension("native_profiler");
        $__internal_6160be255b5d38bb902e3a4c109f3b3f4fd4b97586222cb080800456913a22f0->enter($__internal_6160be255b5d38bb902e3a4c109f3b3f4fd4b97586222cb080800456913a22f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6160be255b5d38bb902e3a4c109f3b3f4fd4b97586222cb080800456913a22f0->leave($__internal_6160be255b5d38bb902e3a4c109f3b3f4fd4b97586222cb080800456913a22f0_prof);

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
