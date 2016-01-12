<?php

/* blog/comment_form.html.twig */
class __TwigTemplate_61ac4abf8a2e4e7e2b0e51ce7c2f73688458cce60651ac36f51c0f3599bee73b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "POST", "action" => $this->env->getExtension('routing')->getPath("comment_new", array("postSlug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array())))));
        echo "
    ";
        // line 15
        echo "
    <fieldset>
        <legend>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.add_comment"), "html", null, true);
        echo "</legend>

        <div class=\"form-group";
        // line 19
        if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "valid", array())) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'label', array("label_attr" => array("class" => "hidden"), "label" => "Content"));
        echo "

            ";
        // line 22
        if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "valid", array())) {
            // line 23
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'errors');
            echo "
            ";
        }
        // line 25
        echo "
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("rows" => 10)));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget', array("attr" => array("class" => "btn-primary pull-right"), "label" => $this->env->getExtension('translator')->trans("action.publish_comment")));
        echo "
        </div>
    </fieldset>
";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog/comment_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 33,  64 => 30,  57 => 26,  54 => 25,  48 => 23,  46 => 22,  41 => 20,  35 => 19,  30 => 17,  26 => 15,  22 => 9,  19 => 8,);
    }
}
