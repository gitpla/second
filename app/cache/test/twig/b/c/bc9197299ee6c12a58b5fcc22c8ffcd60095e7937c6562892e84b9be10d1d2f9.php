<?php

/* default/homepage.html.twig */
class __TwigTemplate_bc9197299ee6c12a58b5fcc22c8ffcd60095e7937c6562892e84b9be10d1d2f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ced80da88e96824230550d9c7e6834f3e542d14c34e40f333026739e89b329c = $this->env->getExtension("native_profiler");
        $__internal_3ced80da88e96824230550d9c7e6834f3e542d14c34e40f333026739e89b329c->enter($__internal_3ced80da88e96824230550d9c7e6834f3e542d14c34e40f333026739e89b329c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ced80da88e96824230550d9c7e6834f3e542d14c34e40f333026739e89b329c->leave($__internal_3ced80da88e96824230550d9c7e6834f3e542d14c34e40f333026739e89b329c_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_57edb27d45ae3494a31bedf337c95cd134e2560300d95a1a63ee7d4bc2125320 = $this->env->getExtension("native_profiler");
        $__internal_57edb27d45ae3494a31bedf337c95cd134e2560300d95a1a63ee7d4bc2125320->enter($__internal_57edb27d45ae3494a31bedf337c95cd134e2560300d95a1a63ee7d4bc2125320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_57edb27d45ae3494a31bedf337c95cd134e2560300d95a1a63ee7d4bc2125320->leave($__internal_57edb27d45ae3494a31bedf337c95cd134e2560300d95a1a63ee7d4bc2125320_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_b73f89728971109f6d2297d974212cadb26ea330982ea211cab6177d538fe34e = $this->env->getExtension("native_profiler");
        $__internal_b73f89728971109f6d2297d974212cadb26ea330982ea211cab6177d538fe34e->enter($__internal_b73f89728971109f6d2297d974212cadb26ea330982ea211cab6177d538fe34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_b73f89728971109f6d2297d974212cadb26ea330982ea211cab6177d538fe34e->leave($__internal_b73f89728971109f6d2297d974212cadb26ea330982ea211cab6177d538fe34e_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7a68b81b4968b2f017f01fae767d8988c392ef63cbb7ba9d8341fc29486343b4 = $this->env->getExtension("native_profiler");
        $__internal_7a68b81b4968b2f017f01fae767d8988c392ef63cbb7ba9d8341fc29486343b4->enter($__internal_7a68b81b4968b2f017f01fae767d8988c392ef63cbb7ba9d8341fc29486343b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_7a68b81b4968b2f017f01fae767d8988c392ef63cbb7ba9d8341fc29486343b4->leave($__internal_7a68b81b4968b2f017f01fae767d8988c392ef63cbb7ba9d8341fc29486343b4_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f046e83e45d8d6a6ebd75fd4fc97ce7e9b6b1c128cb3e01a4e11c8ed280c6d0 = $this->env->getExtension("native_profiler");
        $__internal_0f046e83e45d8d6a6ebd75fd4fc97ce7e9b6b1c128cb3e01a4e11c8ed280c6d0->enter($__internal_0f046e83e45d8d6a6ebd75fd4fc97ce7e9b6b1c128cb3e01a4e11c8ed280c6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo $this->env->getExtension('translator')->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->env->getExtension('translator')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->env->getExtension('translator')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_0f046e83e45d8d6a6ebd75fd4fc97ce7e9b6b1c128cb3e01a4e11c8ed280c6d0->leave($__internal_0f046e83e45d8d6a6ebd75fd4fc97ce7e9b6b1c128cb3e01a4e11c8ed280c6d0_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  118 => 37,  112 => 34,  100 => 25,  96 => 24,  90 => 21,  80 => 14,  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
    }
}
