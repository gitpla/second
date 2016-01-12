<?php

/* default/_source_code.html.twig */
class __TwigTemplate_d87fd2609a4aca6ff10667537ea271495c750bb061aa4d66ba1b4982cf846277 extends Twig_Template
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
        $__internal_4ceaff4ea602ea13242cf45a9dfc1f77bd2a759570fb8175c7ca4f7627e4b637 = $this->env->getExtension("native_profiler");
        $__internal_4ceaff4ea602ea13242cf45a9dfc1f77bd2a759570fb8175c7ca4f7627e4b637->enter($__internal_4ceaff4ea602ea13242cf45a9dfc1f77bd2a759570fb8175c7ca4f7627e4b637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_source_code.html.twig"));

        // line 9
        echo "<div class=\"section source-code\">
    <p>
        ";
        // line 11
        echo $this->env->getExtension('translator')->trans("help.show_code");
        echo "
    </p>

    <button type=\"button\" class=\"btn btn-default btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#sourceCodeModal\">
      <i class=\"fa fa-cogs\"></i> ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show_code"), "html", null, true);
        echo "
    </button>

    <div class=\"modal fade\" id=\"sourceCodeModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\"><i class=\"fa fa-code\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.source_code"), "html", null, true);
        echo "</h4>
                </div>

                <div class=\"modal-body\">
                    ";
        // line 29
        if ((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller"))) {
            // line 30
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.controller_code"), "html", null, true);
            echo "<small class=\"pull-right\">";
            echo $this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "file_path", array()), $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "starting_line", array()));
            echo "</small></h3>
                        <pre><code class=\"php\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "source_code", array()), "html", null, true);
            echo "</code></pre>
                    ";
        } else {
            // line 33
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.controller_code"), "html", null, true);
            echo "</h3>
                        <pre><code>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("not_available"), "html", null, true);
            echo "</code></pre>
                    ";
        }
        // line 36
        echo "
                    <h3>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.twig_template_code"), "html", null, true);
        echo "<small class=\"pull-right\">";
        echo $this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "file_path", array()), $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "starting_line", array()));
        echo "</small></h3>
                    <pre><code class=\"twig\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "source_code", array()), "html", null, true);
        echo "</code></pre>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_4ceaff4ea602ea13242cf45a9dfc1f77bd2a759570fb8175c7ca4f7627e4b637->leave($__internal_4ceaff4ea602ea13242cf45a9dfc1f77bd2a759570fb8175c7ca4f7627e4b637_prof);

    }

    public function getTemplateName()
    {
        return "default/_source_code.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 38,  80 => 37,  77 => 36,  72 => 34,  67 => 33,  62 => 31,  55 => 30,  53 => 29,  46 => 25,  33 => 15,  26 => 11,  22 => 9,);
    }
}
