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
        $__internal_6e09c837799443fc468f6651c91d267e4a758e76e67db0e35ca22793faab1d03 = $this->env->getExtension("native_profiler");
        $__internal_6e09c837799443fc468f6651c91d267e4a758e76e67db0e35ca22793faab1d03->enter($__internal_6e09c837799443fc468f6651c91d267e4a758e76e67db0e35ca22793faab1d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e09c837799443fc468f6651c91d267e4a758e76e67db0e35ca22793faab1d03->leave($__internal_6e09c837799443fc468f6651c91d267e4a758e76e67db0e35ca22793faab1d03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_17bd3a5920924e5867b81820b0f9f5a14fbdd52238cce066f32d8b7e56979630 = $this->env->getExtension("native_profiler");
        $__internal_17bd3a5920924e5867b81820b0f9f5a14fbdd52238cce066f32d8b7e56979630->enter($__internal_17bd3a5920924e5867b81820b0f9f5a14fbdd52238cce066f32d8b7e56979630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_17bd3a5920924e5867b81820b0f9f5a14fbdd52238cce066f32d8b7e56979630->leave($__internal_17bd3a5920924e5867b81820b0f9f5a14fbdd52238cce066f32d8b7e56979630_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea4f76521ed7180c0d830b159bc50c77649ca12a6e9a5c350bebd42b71a44dfa = $this->env->getExtension("native_profiler");
        $__internal_ea4f76521ed7180c0d830b159bc50c77649ca12a6e9a5c350bebd42b71a44dfa->enter($__internal_ea4f76521ed7180c0d830b159bc50c77649ca12a6e9a5c350bebd42b71a44dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ea4f76521ed7180c0d830b159bc50c77649ca12a6e9a5c350bebd42b71a44dfa->leave($__internal_ea4f76521ed7180c0d830b159bc50c77649ca12a6e9a5c350bebd42b71a44dfa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_711917ae64692b931bbb8a187ecc4b9dcb20ce3e15831f29a67bb2a33bfc9c6f = $this->env->getExtension("native_profiler");
        $__internal_711917ae64692b931bbb8a187ecc4b9dcb20ce3e15831f29a67bb2a33bfc9c6f->enter($__internal_711917ae64692b931bbb8a187ecc4b9dcb20ce3e15831f29a67bb2a33bfc9c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_711917ae64692b931bbb8a187ecc4b9dcb20ce3e15831f29a67bb2a33bfc9c6f->leave($__internal_711917ae64692b931bbb8a187ecc4b9dcb20ce3e15831f29a67bb2a33bfc9c6f_prof);

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
