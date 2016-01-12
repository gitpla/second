<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_760e555803806004cb5265a5da0d30dda781395ddca61acfba1a3c5073badbe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70d6aa943d2192d7ebd35b6987fd7f84eac60d4886fe28d6c8557f83e5740ddc = $this->env->getExtension("native_profiler");
        $__internal_70d6aa943d2192d7ebd35b6987fd7f84eac60d4886fe28d6c8557f83e5740ddc->enter($__internal_70d6aa943d2192d7ebd35b6987fd7f84eac60d4886fe28d6c8557f83e5740ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70d6aa943d2192d7ebd35b6987fd7f84eac60d4886fe28d6c8557f83e5740ddc->leave($__internal_70d6aa943d2192d7ebd35b6987fd7f84eac60d4886fe28d6c8557f83e5740ddc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d621c61fe2b43f82600d1ad0fe2bed6f101716de8ac24c17bed30383366d0f9 = $this->env->getExtension("native_profiler");
        $__internal_5d621c61fe2b43f82600d1ad0fe2bed6f101716de8ac24c17bed30383366d0f9->enter($__internal_5d621c61fe2b43f82600d1ad0fe2bed6f101716de8ac24c17bed30383366d0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5d621c61fe2b43f82600d1ad0fe2bed6f101716de8ac24c17bed30383366d0f9->leave($__internal_5d621c61fe2b43f82600d1ad0fe2bed6f101716de8ac24c17bed30383366d0f9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e87172f507eafca26856583641432ba50f6ec4dc8226ce301a97ced37f061c2c = $this->env->getExtension("native_profiler");
        $__internal_e87172f507eafca26856583641432ba50f6ec4dc8226ce301a97ced37f061c2c->enter($__internal_e87172f507eafca26856583641432ba50f6ec4dc8226ce301a97ced37f061c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e87172f507eafca26856583641432ba50f6ec4dc8226ce301a97ced37f061c2c->leave($__internal_e87172f507eafca26856583641432ba50f6ec4dc8226ce301a97ced37f061c2c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e0ae7590234f5f5a90df1222892f5c5c8986ea4d7662f3b2425a07ad1bf0715 = $this->env->getExtension("native_profiler");
        $__internal_8e0ae7590234f5f5a90df1222892f5c5c8986ea4d7662f3b2425a07ad1bf0715->enter($__internal_8e0ae7590234f5f5a90df1222892f5c5c8986ea4d7662f3b2425a07ad1bf0715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8e0ae7590234f5f5a90df1222892f5c5c8986ea4d7662f3b2425a07ad1bf0715->leave($__internal_8e0ae7590234f5f5a90df1222892f5c5c8986ea4d7662f3b2425a07ad1bf0715_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
