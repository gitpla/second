<?php

/* blog/index.html.twig */
class __TwigTemplate_10a99fbca0293bb7a5509ccece57c2c6c5b29bcb65dfde693f70aaf14c6131e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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
        $__internal_35e7b2d0a2f253d1cb70ac62bd5a6bc4e3eca5d7f8d725a1be66894cd50c0d2f = $this->env->getExtension("native_profiler");
        $__internal_35e7b2d0a2f253d1cb70ac62bd5a6bc4e3eca5d7f8d725a1be66894cd50c0d2f->enter($__internal_35e7b2d0a2f253d1cb70ac62bd5a6bc4e3eca5d7f8d725a1be66894cd50c0d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35e7b2d0a2f253d1cb70ac62bd5a6bc4e3eca5d7f8d725a1be66894cd50c0d2f->leave($__internal_35e7b2d0a2f253d1cb70ac62bd5a6bc4e3eca5d7f8d725a1be66894cd50c0d2f_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_44863ea11234c24957b2dc46af76ffc08f82e6ad483479eeb3bc76fb899e8573 = $this->env->getExtension("native_profiler");
        $__internal_44863ea11234c24957b2dc46af76ffc08f82e6ad483479eeb3bc76fb899e8573->enter($__internal_44863ea11234c24957b2dc46af76ffc08f82e6ad483479eeb3bc76fb899e8573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_44863ea11234c24957b2dc46af76ffc08f82e6ad483479eeb3bc76fb899e8573->leave($__internal_44863ea11234c24957b2dc46af76ffc08f82e6ad483479eeb3bc76fb899e8573_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_c000609acf2681eface9dc8198f22143d9e8ea9e62fa2aa48488b8f657745a68 = $this->env->getExtension("native_profiler");
        $__internal_c000609acf2681eface9dc8198f22143d9e8ea9e62fa2aa48488b8f657745a68->enter($__internal_c000609acf2681eface9dc8198f22143d9e8ea9e62fa2aa48488b8f657745a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            ";
            // line 14
            echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute($context["post"], "summary", array()));
            echo "
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c000609acf2681eface9dc8198f22143d9e8ea9e62fa2aa48488b8f657745a68->leave($__internal_c000609acf2681eface9dc8198f22143d9e8ea9e62fa2aa48488b8f657745a68_prof);

    }

    // line 19
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_cc75d2dec597b16e42215621dc964073075058a13122bce371e11cef1b6bd464 = $this->env->getExtension("native_profiler");
        $__internal_cc75d2dec597b16e42215621dc964073075058a13122bce371e11cef1b6bd464->enter($__internal_cc75d2dec597b16e42215621dc964073075058a13122bce371e11cef1b6bd464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 20
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 22
        echo $this->env->getExtension('app.source_code_extension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_cc75d2dec597b16e42215621dc964073075058a13122bce371e11cef1b6bd464->leave($__internal_cc75d2dec597b16e42215621dc964073075058a13122bce371e11cef1b6bd464_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  94 => 20,  88 => 19,  74 => 14,  67 => 10,  63 => 9,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
