<?php

/* base.html.twig */
class __TwigTemplate_3917b0f33667bd8d855768131428ebb5f7c650a9321ed1efbf91ada22d374b0a extends Twig_Template
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
        $__internal_2d798cd13804e0cc6a5830d0f9a7dfc8044ff322aa43f2463d99ec6ea216875f = $this->env->getExtension("native_profiler");
        $__internal_2d798cd13804e0cc6a5830d0f9a7dfc8044ff322aa43f2463d99ec6ea216875f->enter($__internal_2d798cd13804e0cc6a5830d0f9a7dfc8044ff322aa43f2463d99ec6ea216875f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_2d798cd13804e0cc6a5830d0f9a7dfc8044ff322aa43f2463d99ec6ea216875f->leave($__internal_2d798cd13804e0cc6a5830d0f9a7dfc8044ff322aa43f2463d99ec6ea216875f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_da609ab98180937f4790fdfd72fd801c71da6e2259dbb9d4419234f759940930 = $this->env->getExtension("native_profiler");
        $__internal_da609ab98180937f4790fdfd72fd801c71da6e2259dbb9d4419234f759940930->enter($__internal_da609ab98180937f4790fdfd72fd801c71da6e2259dbb9d4419234f759940930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_da609ab98180937f4790fdfd72fd801c71da6e2259dbb9d4419234f759940930->leave($__internal_da609ab98180937f4790fdfd72fd801c71da6e2259dbb9d4419234f759940930_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37c47bd083ec169c45cb0d653104d524f5aaa083374e5b2657cab69b502e94f5 = $this->env->getExtension("native_profiler");
        $__internal_37c47bd083ec169c45cb0d653104d524f5aaa083374e5b2657cab69b502e94f5->enter($__internal_37c47bd083ec169c45cb0d653104d524f5aaa083374e5b2657cab69b502e94f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        ";
        
        $__internal_37c47bd083ec169c45cb0d653104d524f5aaa083374e5b2657cab69b502e94f5->leave($__internal_37c47bd083ec169c45cb0d653104d524f5aaa083374e5b2657cab69b502e94f5_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfc44e97431869efc0613b376d446eb702929460a19992f9d705bcab99702e29 = $this->env->getExtension("native_profiler");
        $__internal_cfc44e97431869efc0613b376d446eb702929460a19992f9d705bcab99702e29->enter($__internal_cfc44e97431869efc0613b376d446eb702929460a19992f9d705bcab99702e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cfc44e97431869efc0613b376d446eb702929460a19992f9d705bcab99702e29->leave($__internal_cfc44e97431869efc0613b376d446eb702929460a19992f9d705bcab99702e29_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5c076228e51e88557655c35fc2f122a6e50fc2ebd166fa86c366b5106762546 = $this->env->getExtension("native_profiler");
        $__internal_b5c076228e51e88557655c35fc2f122a6e50fc2ebd166fa86c366b5106762546->enter($__internal_b5c076228e51e88557655c35fc2f122a6e50fc2ebd166fa86c366b5106762546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b5c076228e51e88557655c35fc2f122a6e50fc2ebd166fa86c366b5106762546->leave($__internal_b5c076228e51e88557655c35fc2f122a6e50fc2ebd166fa86c366b5106762546_prof);

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
        return array (  96 => 13,  85 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 14,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
