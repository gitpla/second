<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_5071f1fefbb5cf7765bd30423ede71ec50c4f37d0d338f61a9039b6e804cbbdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error404.html.twig", 11);
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
        echo "    <h1 class=\"text-danger\">Error 404</h1>

    <p class=\"lead\">
        We couldn't find the page you requested.
    </p>
    <p>
        Check out any misspelling in the URL or
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
        return "TwigBundle:Exception:error404.html.twig";
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
