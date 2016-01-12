<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_3be9b43bb19e57a5bcf0c09e70cad59aaac693bbb20e2fad1484906f0c4838b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error500.html.twig", 11);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
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

    // line 13
    public function block_body_id($context, array $blocks = array())
    {
        echo "error";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "    <h1 class=\"text-danger\">Error 500</h1>

    <p class=\"lead\">
        There was an internal server error.
    </p>
    <p>
        Try loading this page again in some minutes or
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">go back to the homepage</a>.
    </p>
";
    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 30
        echo $this->env->getExtension('app.source_code_extension')->showSourceCode($this->env, $this);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 30,  58 => 28,  55 => 27,  48 => 23,  39 => 16,  36 => 15,  30 => 13,  11 => 11,);
    }
}
