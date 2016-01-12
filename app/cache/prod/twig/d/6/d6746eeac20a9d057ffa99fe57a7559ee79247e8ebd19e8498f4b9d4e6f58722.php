<?php

/* blog/comment_form_error.html.twig */
class __TwigTemplate_d6746eeac20a9d057ffa99fe57a7559ee79247e8ebd19e8498f4b9d4e6f58722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/comment_form_error.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        echo "comment_form_error";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"text-danger\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.comment_error"), "html", null, true);
        echo "</h1>

    <div class=\"well\">
        ";
        // line 9
        echo twig_include($this->env, $context, "blog/comment_form.html.twig");
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "blog/comment_form_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
